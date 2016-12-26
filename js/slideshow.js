
    /***************************************************************************************
     * Run when page load
     ***************************************************************************************/
    $(document).ready(function()
    {
        initSlideShow();

    });
/***************************************************************************************
 ****************************************************************************************/
function initSlideShow()
{
    if($(".slideshow div").length > 1) //Only run slideshow if have the slideshow element and have more than one image.
    {
        var transationTime = 5000;//5000 mili seconds i.e 5 second
        $(".slideshow div:first").addClass('active'); //Make the first image become active i.e on the top of other images
        setInterval(slideChangeImage, transationTime); //set timer to run the slide show.
    }
}
/***************************************************************************************
 ****************************************************************************************/

function slideChangeImage()
{
    var active = $(".slideshow div.active"); //Get the current active element.
    if(active.length == 0)
    {
        active = $(".slideshow div:last"); //If do not see the active element is the last image.
    }

    var next = active.next().length ? active.next() : $(".slideshow div:first"); //get the next element to do the transition
    active.addClass('lastactive');
    next.css({opacity:0.0}) //do the fade in fade out transition
        .addClass('active')
        .animate({opacity:1.0}, 1500, function()
        {
            active.removeClass("active lastactive");
        });

}

