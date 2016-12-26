<?php

/*
Copyright (c) 2012 VservU GmbH
Permission is hereby granted, free of charge, to any person obtaining a copy of
this software and associated documentation files (the "Software"), to deal in
the Software without restriction, including without limitation the rights to
use, copy, modify, merge, publish, distribute, sublicense, and/or sell copies
of the Software, and to permit persons to whom the Software is furnished to do
so, subject to the following conditions:
The above copyright notice and this permission notice shall be included in all
copies or substantial portions of the Software.
THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR
IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY,
FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE
AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER
LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM,
OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN THE
SOFTWARE.

http://opensource.org/licenses/mit-license.php
*/

/*
This script is intended as a minimalistic example of an implementation for
save and load functionality for the 'draw' plugin. In this form it will try
to write data to a file, the path to which is defined in the $file setting
(see below). This path should point to the same file referenced in the book's
drawloadurl attribute. For the default value that would normally be
 <book drawloadurl="plugins/scripts/drawings.xml">

This script contains NO AUTHENTICATION LOGIC. This should be implemented
as required and possible in the environment this technique is used. The draw
plugins 'drawsavetokens' setting is intended for this purpose (variables in
this setting will be sent back to server with each request). This allows a
basic handshake-like procedure. E.g. if <book drawsavetokens="session_id=1234">
then this script might perform a check against $_REQUEST["session_id"], to
determine which user's storage should be modified.
*/

// ---------------------------------------------------------------------------
//     Settings for permanent storage and location of validation schema.
// ---------------------------------------------------------------------------

// Path to the file to store data in. This may be adjusted dynamically to
// point to a file for a specific user, or left out altogether if another
// storage method is employed (database).
$file = "drawings.xml";

// Path to XML schema. You'll probably not want to change this.
$schema_file = "draw.xsd";

// ---------------------------------------------------------------------------
//     The following methods describe the storage interface, and should be
//     adjusted accordingly.
// ---------------------------------------------------------------------------

// Returns the DOMDocument representing the saved lines. If save and removal
// operations happen in the same request this method may be called twice in
// the same lifetime of this script.
//
// Example implementation for simple file storage. Adjust as necessary.
//
// Required behavior: returns a DOMDocument that represents the currently
// stored lines relevant to the current request context (e.g. the user that
// made the currently being processed request). Although optional this
// method should also validate the retrieved XML, if the possibility for
// external changes to the permanent storage exist.
function load() {
	static $dom = NULL;
	// Check if we already have something.
	if (!$dom) {
		// No, see if we have an existing file and if we can load it and that it's valid.
		global $file, $schema_file;
		if (!file_exists($file) || !($dom = @DOMDocument::load($file)) || !@$dom->schemaValidate($schema_file)) {
			// Nope, create a new document.
		    $dom = new DOMDocument();
		    $dom->formatOutput = true;
    		$dom->appendChild($dom->createElement("lines")); 
		}
	}
	return $dom;
}

// Saves changes back to permanent storage.
// 
// Example implementation for simple file storage. Adjust as necessary.
//
// Required behavior: store complete DOMDocument in permanent storage for
// later retrieval via load().
function save($dom) {
	global $file;
	$dom->save($file);
}

// ---------------------------------------------------------------------------
//      What follows is purely modifying the XML data. Unless you wish to
//      store the data in some other format, this will not need any changes.
// ---------------------------------------------------------------------------

// Clean up input... taken from PHP documentation.
if (get_magic_quotes_gpc()) {
    $process = array(&$_GET, &$_POST, &$_COOKIE, &$_REQUEST);
    while (list($key, $val) = each($process)) {
        foreach ($val as $k => $v) {
            unset($process[$key][$k]);
            if (is_array($v)) {
                $process[$key][stripslashes($k)] = $v;
                $process[] = &$process[$key][stripslashes($k)];
            } else {
                $process[$key][stripslashes($k)] = stripslashes($v);
            }
        }
    }
    unset($process);
}

// See if we have some new lines we want to store.
if (array_key_exists("add", $_REQUEST)) {
	// Got some new lines. Get document to store them in.
	$dom = load();
	$xpath = new DOMXPath($dom);
	foreach ($_REQUEST["add"] as $id => $line) {
		// Try to parse the XML.
		$lineDom = @DOMDocument::loadXML($line);
		if ($lineDom) {
			// See if we already have a line with that id, if so we want to
			// replace it. So we store them until we're sure we inserted
			// the new entry successfully.
			$nodes = $xpath->query("//*[@id='$id']");
			// OK, import it.
			if ($node = $dom->importNode($lineDom->documentElement, true)) {
				// So good so far. Append it.
				$dom->documentElement->appendChild($node);
				// Check if we're still valid.
				if (!@$dom->schemaValidate($schema_file)) {
					// Nope, bad entry. Remove it again.
					$dom->documentElement->removeChild($node);
				} else {
					// All is well, so we can remove duplicates if there are any.
			    	foreach($nodes as $node) {
						$dom->documentElement->removeChild($node);
					}
				}
			}
		}
	}
}

// See if we want to remove some lines.
if (array_key_exists("remove", $_REQUEST)) {
	// Got some removals. Get the document to remove from.
	$dom = load();
	$xpath = new DOMXPath($dom);
	foreach ($_REQUEST["remove"] as $key => $id) {
		// Find the node with that id.
		$nodes = $xpath->query("//*[@id='$id']");
    	foreach($nodes as $node) {
			$dom->documentElement->removeChild($node);
		}
	}
}

// If we had to load the document there were likely some changes.
if ($dom) {
	// We had to load it, so save it back.
	save($dom);
}

?>