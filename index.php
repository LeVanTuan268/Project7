<?php session_start() ;?>
<!DOCTYPE html>
<html>
<head lang="en">
    <meta charset="UTF-8">
    <title>Sách Bán Chạy Trang 3</title>

    <link rel="stylesheet" href="css/bootstrap.min.css"/>

    <!-- của mình-->
    <link rel="stylesheet" href="css/mystyle.css"/>
    <link rel="stylesheet" href="css/responsive.css"/>
    <link rel="stylesheet" href="css/popup.css"/>
    <link rel="stylesheet" href="css/login.css"/>
    <link rel="stylesheet" href="css/list-slider.css"/>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">

    <!-- slider tab-->
    <link rel="stylesheet" href="css/jquery.sliderTabs.css"/>

    <!-- menu-->
    <link rel="stylesheet" href="css/SpryMenuBarVertical.css"/>

    <!-- slide chạy-->
    <link rel="stylesheet" href="css/chay.css"/>

    <!-- của mình-->
    <link rel="stylesheet" href="css/style.css"/>

    <!-- jquery-->
    <script type="text/javascript" src="js/jquery.js"></script>
    <script type="text/javascript" src="js/bootstrap.min.js"></script>

    <!-- slider tab-->
    <script type="text/javascript" src="js/jquery-ui-1.9.0.custom.min.js"></script>
    <script type="text/javascript" src="js/jquery-ui-tabs-rotate.js"></script>

    <!-- menu-->
    <script type="text/javascript" src="js/SpryMenuBar.js"></script>
    <script src="file:///C|/Users/Minh/AppData/Roaming/Adobe/Dreamweaver CS6/en_US/Configuration/Temp/Assets/eam3CC4.tmp/SpryMenuBar.js" type="text/javascript"></script>


    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="Keywords" content="" />
    <meta name="Description" content="" />
    <meta name="Generator" content="[Kvisoft FlipBook Maker Pro version 4.0.0] at http://www.kvisoft.com/flipbook-maker-pro/" />
    <script type="text/javascript" src="js/swfobject.js"></script>
    <script type="text/javascript" src="js/swfaddress.js"></script>
    <script type="text/javascript">
        var assetsFolder = 'res';
        var mobileFolder = 'mobile';

        var changeURL = function(){
            if(document.getElementById('hrefMobile'))document.getElementById('hrefMobile').href =mobileFolder+'/index.html';
            delete changeURL;
        }
        if (document.addEventListener){
            document.addEventListener("DOMContentLoaded", changeURL, false);
        } else {
            document.attachEvent("onDOMContentLoaded", changeURL);
        }

        function getURLParam()
        {
            var returnObject = {};
            var href = window.location.href;
            if ( href.indexOf("?") > -1 )
            {
                var param = href.substr(href.indexOf("?"));
                var arrayParam = param.split("&");

                for ( var i = 0; i < arrayParam.length; i++ )
                {
                    var value = arrayParam[i].split("=");
                    returnObject[value[0]] = value[1];
                }
            }
            returnObject['res'] = assetsFolder;
            return returnObject;
        }

        var dir = "./";

        var getURI = function(){
            var URIArray = document.location.href.split('/');

            URIArray.length = URIArray.length-1;
            var URIstr = URIArray.join('/');

            URIArray = null;

            var URIarr = dir.split('/');
            URIarr[0] = URIarr[0]=='.'?'':URIarr[0];
            var dirStr = URIarr.join('/');

            URIstr = URIstr+dirStr;

            return URIstr;
        }

        var ua = navigator.userAgent.toLowerCase(),
                platform = navigator.platform.toLowerCase(),
                UA = ua.match(/(opera|ie|firefox|chrome|version)[\s\/:]([\w\d\.]+)?.*?(safari|version[\s\/:]([\w\d\.]+)|$)/) || [null, 'unknown', 0],
                mode = UA[1] == 'ie' && document.documentMode;

        var Browser = {
            extend: Function.prototype.extend,
            name: (UA[1] == 'version') ? UA[3] : UA[1],
            version: mode || parseFloat((UA[1] == 'opera' && UA[4]) ? UA[4] : UA[2]),
            Platform: {
                name: ua.match(/ip(?:ad|od|hone)/) ? 'ios' : (ua.match(/(?:webos|android|bada|symbian|palm|blackberry)/) || platform.match(/mac|win|linux/) || ['other'])[0]
            },
            Features: {
                xpath: !!(document.evaluate),
                air: !!(window.runtime),
                query: !!(document.querySelector),
                json: !!(window.JSON)
            },
            Plugins: {}
        };

        var page = parseInt(window.location.hash.substring(2, window.location.hash.length-1));
        page = page?'#'+page:'';
        if(Browser.Platform.name == 'android' || Browser.Platform.name == 'ios') window.location =mobileFolder+"/index.html"+page;

        var dir = "./";
        var jsfolder = "js/";
        var swffile = "book.swf";

        var flashvars = {};
        var params = {
            menu: "false",
            scale: "noScale",
            allowfullscreen: "true",
            allowscriptaccess: "always",
            bgcolor: "#ffffff",
            wmode:"transparent"
        };
        var attributes = {id: "magazine"};
        swfobject.embedSWF(swffile, "magazine", "100%", "100%", "9.0.0", jsfolder+"expressInstall.swf", flashvars, params, attributes);
    </script>


    <!-- Script slider tab-->
    <script type="text/javascript">
        $(document).ready(function(){
            $("#featured").tabs({fx:{opacity: "toggle"}}).tabs("rotate", 5000, true);
        });
    </script>
</head>



<body>

<div class="container">
    <!-- Logo - Intro - Login-->
    <div class="row" id="header1">

        <!-- Logo-->
        <div class="col-md-5 col-sm-5 col-xs-5" id="logo"><a href="#">
            <img id="logo1" height="100px" src="img/logo2.png" title="Tải miễn phí Ebook - Mua sách giá rẻ tại mitibook.vn" alt="Tải miễn phí Ebook - Mua sách giá rẻ tại mitibook.vn"/></a>
        </div>

        <!-- Intro giới thiệu-->
        <div class="col-md-6 col-sm-6 col-xs-6" id="intro">
            <img id="intro1" style="padding-bottom: 10px" src="img/intro.PNG" alt=""/>
        </div>

        <!-- Login-->
        <!--<div class="col-md-1 col-sm-1 col-xs-1" id="login">-->
            <!--<center> Xin chào bạn :) <br><br>-->
                <!--<a href="#">Đăng nhập</a> - <a href="#">Đăng ký</a></center>-->
        <div id="login" class="col-md-1 col-xs-1 col-sm-1">
		       <?php 
               if (isset($_SESSION['username']) && $_SESSION['username']){
                  echo 'Chào '.$_SESSION['username'];
                  echo '<a href="logout.php"> &nbsp;Logout</a>';
       }
       else{
           echo 'Bạn chưa đăng nhập';
       }
       ?>
            <a href="login.php">Đăng nhập</a> 
            <a href="register.php" >Đăng ký</a><br><br><a href="Theo%20doi%20don%20hang.html">
            <button id="kiemtradonhang" type="button" style="background-color: #00afe9"><i class="fa fa-map-marker"></i> Theo dõi đơn hàng</button></a>
        </div>

            <div class="col-md-2 overlay" style="display: none;z-index: 1000000">
                <div class="login-wrapper">
                    <div class="login-content">
                        <a class="close">x</a>
                        <h3 style="color: #00afe9">Đăng nhập</h3>
                        <form method="post" action="login.php">
                            <label for="username">
                                Tài khoản:
                                <input type="text" name="username" id="username" placeholder="Tài khoản tối thiểu 8 ký tự và tối đa 20 ký tự" pattern="^[a-zA-Z][a-zA-Z0-9-_\.]{7,19}$" required="required" />
                            </label>
                            <label for="password">
                                Mật khẩu:
                                <input type="password" name="password" id="password" placeholder="Mật khẩu ít nhất 8 ký tự và ít nhất 1 chữ số" pattern="(?=^.{8,}$)((?=.*\d)|(?=.*\W+))(?![.\n])(?=.*[a-z]).*$" required="required" />
                            </label>
                            <table>
                                <tr>
                                    <td width="200px"><input type="checkbox"> Ghi nhớ thông tin</td>
                                    <td width="200"><a href="#" style="color: #00afe9">Quên mật khẩu</a></td>
                                </tr>
                            </table><br>
                            <button type="submit">ĐĂNG NHẬP</button><br><br>
                            Chưa có tài khoản vui lòng <a href="Dangky.html" style="color: #fc034f">ĐĂNG KÝ</a>
                        </form>
                    </div>
                </div>
            </div>



        <!--</div>-->
        <!-- login-->
        <script>
            $(document).ready(function() {
                $("#loginLink").click(function( event ){
                    event.preventDefault();
                    $(".overlay").fadeToggle("fast");
                });

                $(".overlayLink").click(function(event){
                    event.preventDefault();
                    var action = $(this).attr('data-action');

                    $.get( "ajax/" + action, function( data ) {
                        $( ".login-content" ).html( data );
                    });

                    $(".overlay").fadeToggle("fast");
                });

                $(".close").click(function(){
                    $(".overlay").fadeToggle("fast");
                });

                $(document).keyup(function(e) {
                    if(e.keyCode == 27 && $(".overlay").css("display") != "none" ) {
                        event.preventDefault();
                        $(".overlay").fadeToggle("fast");
                    }
                });
            });
        </script>



    </div>

    <!--MenuTiTle - Search - Item-->
    <div class="row" id="header2">

        <!-- menutitle = Danh mục sách-->
        <div class="col-md-3" id="menu">

            <h4 id="dms" style="padding-top: 5px"><a href="#" style="color: white; text-decoration: none" >DANH MỤC SÁCH</a></h4>

        </div>

        <!-- Search-->

        <div class="col-md-7" id="search1">
            <div class="input-group" style="margin-top: 8px">
                <input type="text" class="form-control" placeholder="Nhập tên sách/tên tác giả cần tìm">
      <span class="input-group-btn">
        <button class="btn btn-default" type="button">Tìm Sách</button>
      </span>
            </div><!-- /input-group -->
        </div><!-- /.col-lg-6 -->


        <!-- Giỏ hàng-->
        <div class="col-md-2" id="cart1">
            <a href="ShoppingCart.html" target="_blank">
            <button style="background-color: #FC034F;color: white;border-radius: 5px" type="button" class="btn btn-default navbar-btn"><i class="fa fa-shopping-cart fa-lg"></i><b> GIỎ HÀNG</b></button>
            </a>
        </div>
    </div>

    <!-- Menu List - Slideshow-->
    <div class="row" id="content1">

        <!-- menu list-->
        <div class="col-md-3 col-sm-3 col-xs-3 aaa" id="menulist" style="z-index: 100000;border: 1px solid #e6e6e6;border-radius: 5px;;">
            <ul id="MenuBar1"  class="MenuBarVertical">

                <li style="border-bottom: 1px dashed #e6e6e6;width: 100%;margin-left: -13px;"><a style="padding-left: 20px" class="MenuBarItemSubmenu" href="kho%20sach%20giam%20gia.html">S&aacute;ch Giảm Gi&aacute;</a>
                    <ul>
                        <li><a href="#">Tất Cả S&aacute;ch Giảm Gi&aacute;</a></li>
                        <li><a href="#">S&aacute;ch V&#259;n Học Trong N&#432;ớc</a></li>
                        <li><a href="#">S&aacute;ch V&#259;n Học N&#432;ớc Ngo&agrave;i</a></li>
                        <li><a href="#">S&aacute;ch Chuy&ecirc;n Ng&agrave;nh Kỹ Thuật</a></li>
                        <li><a href="#">S&aacute;ch Kinh Tế</a></li>
                        <li><a href="#">Sách Kỹ Năng Sống</a></li>
                        <li><a href="#">S&aacute;ch Ngoại Ngữ</a></li>
                        <li><a href="#">S&aacute;ch Tin Học</a></li>
                        <li><a href="#">S&aacute;ch Trung Học - Tiểu Học</a></li>
                        <li><a href="#">S&aacute;ch Thiếu Nhi</a></li>
                        <li><a href="#">S&aacute;ch Th&#432;ờng Thức - &#272;ời Sống</a></li>
                    </ul>
                </li>
                <li style="border-bottom: 1px dashed #e6e6e6;width: 100%; !important;margin-left: -13px"><a href="sach%20ban%20chay.html">S&aacute;ch B&aacute;n Chạy</a>
                    <ul>
                        <li><a href="#">Tất Cả S&aacute;ch Bán Chạy</a></li>
                        <li><a href="#">S&aacute;ch V&#259;n Học Trong N&#432;ớc</a></li>
                        <li><a href="#">S&aacute;ch V&#259;n Học N&#432;ớc Ngo&agrave;i</a></li>
                        <li><a href="#">S&aacute;ch Chuy&ecirc;n Ng&agrave;nh Kỹ Thuật</a></li>
                        <li><a href="#">S&aacute;ch Kinh Tế</a></li>
                        <li><a href="#">Sách Kỹ Năng Sống</a></li>
                        <li><a href="#">S&aacute;ch Ngoại Ngữ</a></li>
                        <li><a href="#">S&aacute;ch Tin Học</a></li>
                        <li><a href="#">S&aacute;ch Trung Học - Tiểu Học</a></li>
                        <li><a href="#">S&aacute;ch Thiếu Nhi</a></li>
                        <li><a href="#">S&aacute;ch Th&#432;ờng Thức - &#272;ời Sống</a></li>
                    </ul>
                </li>
                <li style="border-bottom: 1px dashed #e6e6e6;width: 100%; !important;margin-left: -13px"><a href="#">S&aacute;ch Mới Ph&aacute;t H&agrave;nh</a>
                    <ul>
                        <li><a href="#">Tất Cả S&aacute;ch Mới Phát Hành</a></li>
                        <li><a href="#">S&aacute;ch V&#259;n Học Trong N&#432;ớc</a></li>
                        <li><a href="#">S&aacute;ch V&#259;n Học N&#432;ớc Ngo&agrave;i</a></li>
                        <li><a href="#">S&aacute;ch Chuy&ecirc;n Ng&agrave;nh Kỹ Thuật</a></li>
                        <li><a href="#">S&aacute;ch Kinh Tế</a></li>
                        <li><a href="#">Sách Kỹ Năng Sống</a></li>
                        <li><a href="#">S&aacute;ch Ngoại Ngữ</a></li>
                        <li><a href="#">S&aacute;ch Tin Học</a></li>
                        <li><a href="#">S&aacute;ch Trung Học - Tiểu Học</a></li>
                        <li><a href="#">S&aacute;ch Thiếu Nhi</a></li>
                        <li><a href="#">S&aacute;ch Th&#432;ờng Thức - &#272;ời Sống</a></li>
                    </ul>
                </li>
                <li style="border-bottom: 1px dashed #e6e6e6;width: 100%; !important;margin-left: -13px"><a href="#">S&aacute;ch Sắp Ph&aacute;t H&agrave;nh</a>
                    <ul>
                        <li><a href="#">Tất Cả S&aacute;ch Sắp Phát Hành</a></li>
                        <li><a href="#">S&aacute;ch V&#259;n Học Trong N&#432;ớc</a></li>
                        <li><a href="#">S&aacute;ch V&#259;n Học N&#432;ớc Ngo&agrave;i</a></li>
                        <li><a href="#">S&aacute;ch Chuy&ecirc;n Ng&agrave;nh Kỹ Thuật</a></li>
                        <li><a href="#">S&aacute;ch Kinh Tế</a></li>
                        <li><a href="#">Sách Kỹ Năng Sống</a></li>
                        <li><a href="#">S&aacute;ch Ngoại Ngữ</a></li>
                        <li><a href="#">S&aacute;ch Tin Học</a></li>
                        <li><a href="#">S&aacute;ch Trung Học - Tiểu Học</a></li>
                        <li><a href="#">S&aacute;ch Thiếu Nhi</a></li>
                        <li><a href="#">S&aacute;ch Th&#432;ờng Thức - &#272;ời Sống</a></li>
                    </ul>
                </li>
                <li style="border-bottom: 1px dashed #e6e6e6;width: 100%; !important;margin-left: -13px"><a href="#">Sách Hay Miti Khuyên Đọc</a>
                    <ul>
                        <li><a href="#">Sách Giảm Giá</a></li>
                        <li><a href="#">Sách Bán Chạy</a></li>
                        <li><a href="#">S&aacute;ch Mới Phát Hành</a></li>
                    </ul>
                </li>
                <li style="border-bottom: 1px dashed #e6e6e6;width: 100%; !important;margin-left: -13px"><a href="vanhoctrongnuoc.html">S&aacute;ch V&#259;n Học Trong N&#432;ớc</a>
                    <ul>
                        <li><a href="#">Phê Bình Văn Học</a></li>
                        <li><a href="#">Phóng Sự, Ký Sự</a></li>
                        <li><a href="#">Sách Về Nhân Vật Văn Học</a></li>
                        <li><a href="#">Thơ Ca</a></li>
                        <li><a href="#">Tiểu Thuyết Lãng Mạn</a></li>
                        <li><a href="#">Tiểu Thuyết Lịch Sự</a></li>
                        <li><a href="#">Truyện & Thơ Ca Dân Gian</a></li>
                        <li><a href="#">Truyện Dài</a></li>
                        <li><a href="#">Truyện Giả Tưởng - Thần Bí</a></li>
                        <li><a href="#">Truyện Kiếm Hiệp</a></li>
                        <li><a href="truyen%20ngan%20tan%20van.html">Truyện Ngắn - Tản Văn</a></li>
                        <li><a href="#">Truyện Thiếu Nhi</a></li>
                        <li><a href="#">Truyện Trinh Thám, Vụ Án</a></li>
                        <li><a href="#">Tự Truyện - Hồi Ký</a></li>
                    </ul>
                </li>
                <li style="border-bottom: 1px dashed #e6e6e6;width: 100%; !important;margin-left: -13px"><a href="#">S&aacute;ch V&#259;n Học N&#432;ớc Ngo&agrave;i</a>
                    <ul>
                        <li><a href="#">Cổ Tích & Thần Thoại</a></li>
                        <li><a href="#">Phê Bình Văn Học</a></li>
                        <li><a href="#">Phóng Sự, Ký Sự</a></li>
                        <li><a href="#">Sách Về Nhân Vật Văn Học</a></li>
                        <li><a href="#">Thơ Ca</a></li>
                        <li><a href="#">Tiểu Thuyết Tình Yêu</a></li>
                        <li><a href="#">Truyện Kiếm Hiệp - Phiêu Lưu</a></li>
                        <li><a href="#">Truyện Lịch Sử</a></li>
                        <li><a href="#">Truyện Ngắn</a></li>
                        <li><a href="#">Truyện Thiếu Nhi</a></li>
                        <li><a href="#">Truyện Trinh Thám, Vụ Án</a></li>
                        <li><a href="#">Truyện Viễn Tưởng</a></li>
                        <li><a href="#">Tự Truyện - Hồi Ký</a></li>
                        <li><a href="#">Tiểu Thuyết Ngôn Tình</a></li>
                        <li><a href="#">Tiểu Thuyết Đam Mỹ</a></li>
                    </ul>
                </li>
                <li style="border-bottom: 1px dashed #e6e6e6;width: 100%; !important;margin-left: -13px"><a href="#">S&aacute;ch Chuy&ecirc;n Ng&agrave;nh</a>
                    <ul>
                        <li><a href="#">Âm Nhạc, Mỹ Thuật</a></li>
                        <li><a href="#">Chính Trị, Triết Học, Pháp Luật</a></li>
                        <li><a href="#">Công Nghệ Sinh Học</a></li>
                        <li><a href="#">Công Nghệ Thông Tin</a></li>
                        <li><a href="#">Xây Dựng, Kiến Trúc</a></li>
                        <li><a href="#">Khoa Học Xã Hội</a></li>
                        <li><a href="#">Cơ Khí</a></li>
                        <li><a href="#">Điện, Điện Tử</a></li>
                        <li><a href="#">Nông Lâm Ngiệp</a></li>
                        <li><a href="#">Thể Thao</a></li>
                        <li><a href="#">Y Học</a></li>
                        <li><a href="#">Các Chủ Đề Khác</a></li>
                    </ul>
                </li>
                <li style="border-bottom: 1px dashed #e6e6e6;width: 100%; !important;margin-left: -13px"><a href="#">S&aacute;ch Kinh Tế</a>
                    <ul>
                        <li><a href="#">Marketing - Bán Hàng</a></li>
                        <li><a href="#">Ngoại Thương</a></li>
                        <li><a href="#">Nhân Sự & Việc Làm</a></li>
                        <li><a href="#">Nhân Vật & Bài Học Kinh Doanh</a></li>
                        <li><a href="#">Phân Tích & Môi Trường Kinh Tế</a></li>
                        <li><a href="#">Quản Trị - Lãnh Đạo</a></li>
                        <li><a href="#">Tài Chính - Tiền Tệ</a></li>
                        <li><a href="#">Tài Chính - Kế Toán</a></li>
                        <li><a href="#">Văn Bản Luật</a></li>
                        <li><a href="#">Đầu Tư & Chứng Khoán</a></li>
                    </ul>
                </li>
                <li style="border-bottom: 1px dashed #e6e6e6;width: 100%; !important;margin-left: -13px"><a href="#">Sách Kỹ Năng Sống</a>
                    <ul>
                        <li><a href="#">Sách Học Làm Người</a></li>
                        <li><a href="#">Danh Nhân Văn Hóa</a></li>
                        <li><a href="#">Hồi Ký</a></li>
                        <li><a href="#">Nhà Khoa Học</a></li>
                        <li><a href="#">Triết Gia, Chính Trị Gia, Nhà Quân Sự</a></li>
                    </ul>
                </li>
                <li style="border-bottom: 1px dashed #e6e6e6;width: 100%; !important;margin-left: -13px"><a href="#">S&aacute;ch Ngoại Ngữ</a>
                    <ul>
                        <li><a href="#">Tiếng Anh</a></li>
                        <li><a href="#">Tiếng Trung</a></li>
                        <li><a href="#">Tiếng Nhật</a></li>
                        <li><a href="#">Tiếng Hàn</a></li>
                        <li><a href="#">Tiếng Pháp</a></li>
                        <li><a href="#">Các Ngoại Ngữ Khác</a></li>
                        <li><a href="#">Từ Điển</a></li>
                    </ul>
                </li>
                <li style="border-bottom: 1px dashed #e6e6e6;width: 100%; !important;margin-left: -13px"><a href="#">S&aacute;ch Tin Học</a>
                    <ul>
                        <li><a href="#">Tin Học Văn Phòng</a></li>
                        <li><a href="#">Tin Học Cơ Bản</a></li>
                        <li><a href="#">Internet - Mạng</a></li>
                        <li><a href="#">Hệ Điều Hành</a></li>
                    </ul>
                </li>
                <li style="border-bottom: 1px dashed #e6e6e6;width: 100%; !important;margin-left: -13px"><a href="#">S&aacute;ch Trung Học - Tiểu Học</a>
                    <ul>
                        <li><a href="#">Cấp I</a></li>
                        <li><a href="#">Cấp II</a></li>
                        <li><a href="#">Cấp III</a></li>
                        <li><a href="#">Luyện Thi Đại Học</a></li>
                    </ul>
                </li>
                <li style="border-bottom: 1px dashed #e6e6e6;width: 100%; !important;margin-left: -13px"><a href="#">S&aacute;ch Thiếu Nhi</a>
                    <ul>
                        <li><a href="#">Khoa Học Tự Nhiên</a></li>
                        <li><a href="#">Khoa Học Xã Hội</a></li>
                        <li><a href="#">Âm Nhạc, Mỹ Thuật</a></li>
                        <li><a href="#">Sách Ngoại Ngữ</a></li>
                        <li><a href="#">Truyện Thiếu Nhi</a></li>
                    </ul>
                </li>
                <li style="margin-left: -13px" ><a href="#">S&aacute;ch Th&#432;ờng Thức - &#272;ời Sống</a>
                    <ul>
                        <li><a href="#">Bí Quyết Làm Đẹp</a></li>
                        <li><a href="#">Hạnh Phúc Gia Đình</a></li>
                        <li><a href="#">Nữ Công Gia Chánh</a></li>
                        <li><a href="#">Nuôi Dạy Con</a></li>
                        <li><a href="#">Sách Nấu Ăn</a></li>
                        <li><a href="#">Cây, Cá Cảnh, Vật Nuôi</a></li>
                        <li><a href="#">Quan Hệ Giới Tính</a></li>
                        <li><a href="#">Cẩm Nang Tuổi Mới Lớn</a></li>
                        <li><a href="#">Sinh Lý Học</a></li>
                    </ul>
                </li>
            </ul>
        </div>



        <!-- Slide show-->

        <div class="col-md-9" id="slide">



            <!--<div class="slideshow">-->

                <!--<div><a href="#"><img src="img/200764_songmotcuocdoibinhthuongweb.jpg" alt="" border="0" /></a></div>-->
                <!--<div><a href="#"><img src="img/202819_secocachdunglotc.jpg" alt="" border="0" /></a></div>-->
                <!--<div><a href="#"><img src="img/203125_thanhkyytc.jpg" alt="" border="0" /></a></div>-->
                <!--<div><a href="#"><img src="img/204823_tc.jpg" alt="" border="0" /></a></div>-->
                <!--<div><a href="#"><img src="img/206486_850x480.jpg" alt="" border="0" /></a></div>-->

            <!--</div>-->



            <!--</div>-->
            <!--<script type="text/javascript" src="js/jquery-1.9.1.min.js"></script>-->
            <script type="text/javascript" src="js/jssor.slider.mini.js"></script>
            <!-- use jssor.slider.debug.js instead for debug -->
            <script>
                jQuery(document).ready(function ($) {

                    var jssor_1_options = {
                        $AutoPlay: true,
                        $ArrowNavigatorOptions: {
                            $Class: $JssorArrowNavigator$
                        },
                        $ThumbnailNavigatorOptions: {
                            $Class: $JssorThumbnailNavigator$,
                            $Cols: 4,
                            $SpacingX: 4,
                            $SpacingY: 4,
                            $Orientation: 2,
                            $Align: 0
                        }
                    };

                    var jssor_1_slider = new $JssorSlider$("jssor_1", jssor_1_options);

                    //responsive code begin
                    //you can remove responsive code if you don't want the slider scales while window resizing
                    function ScaleSlider() {
                        var refSize = jssor_1_slider.$Elmt.parentNode.clientWidth;
                        if (refSize) {
                            refSize = Math.min(refSize, 810);
                            jssor_1_slider.$ScaleWidth(refSize);
                        }
                        else {
                            window.setTimeout(ScaleSlider, 30);
                        }
                    }
                    ScaleSlider();
                    $(window).bind("load", ScaleSlider);
                    $(window).bind("resize", ScaleSlider);
                    $(window).bind("orientationchange", ScaleSlider);
                    //responsive code end

                    //responsive code begin
                    //you can remove responsive code if you don't want the slider scales while window resizing
                    function ScaleSlider() {
                        var refSize = jssor_1_slider.$Elmt.parentNode.clientWidth;
                        if (refSize) {
                            refSize = Math.min(refSize, 810);
                            jssor_1_slider.$ScaleWidth(refSize);
                        }
                        else {
                            window.setTimeout(ScaleSlider, 30);
                        }
                    }
                    ScaleSlider();
                    $(window).bind("load", ScaleSlider);
                    $(window).bind("resize", ScaleSlider);
                    $(window).bind("orientationchange", ScaleSlider);
                    //responsive code end
                });
            </script>

        <div id="jssor_1" style="position: relative; margin: 0 auto; top: 20px; left: -10px; width: 1010px; height: 600px; overflow: hidden; visibility: hidden; background-color: #000000;">
            <!-- Loading Screen -->
            <div data-u="loading" style="position: absolute; top: 0px; left: 0px;">
                <div style="filter: alpha(opacity=70); opacity: 0.7; position: absolute; display: block; top: 0px; left: 0px; width: 100%; height: 100%;"></div>
                <div style="position:absolute;display:block;background:url('img/thu%20slide/loading.gif') no-repeat center center;top:0px;left:0px;width:100%;height:100%;"></div>
            </div>
            <div data-u="slides" style="cursor: default; position: relative; top: 0px; left: 0px; width: 1010px; height: 600px; overflow: hidden;">
                <div data-p="112.50" style="display: none;width: 1010px">
                    <a href="Con%20cho%20nho%20mang%20gio%20hoa%20hong.html">        <img width="1010" data-u="image" src="img/list%20slide/conchonhoto.jpg" /></a>
                    <div data-u="thumb" class="onho" style="width: 300px;height: 60px">
                        <img class="i" src="img/list%20slide/conchonhonho.jpg" />
                        <div class="t">Con Chó Nhỏ Mang Giỏ Hoa Hồng</div>
                        <div class="c">Tác phẩm mới nhất của nhà văn Nguyễn Nhật Ánh</div>
                    </div>
                </div>
                <div data-p="112.50" style="display: none;width: 1010px">
                <a href="#">    <img style="cursor: pointer;" width="1010" data-u="image" src="img/list%20slide/t3sachtreto.jpg" /></a>
                    <div data-u="thumb" class="onho" style="width: 300px;height: 60px">
                        <img class="i" src="img/list%20slide/t3sachtrenho.jpg" />
                        <div class="t">Tháng 3 Sách Trẻ</div>
                        <div class="c">Giảm giá đến 30% sách hay của NXB Trẻ (Không áp dụng cho truyện tranh)</div>
                    </div>
                </div>
                <div data-p="112.50" style="display: none;width: 1010px">
                    <a href="#">         <img style="cursor: pointer;" width="1010" data-u="image" src="img/list%20slide/tonvinhphaidepto.jpg" /></a>
                    <div data-u="thumb" class="onho" style="width: 300px;height: 60px">
                        <img class="i" src="img/list%20slide/tonvinhphaidepnho.jpg" />
                        <div class="t">Tháng Sách Văn Hóa - Nghệ Thuật - Thời Trang</div>
                        <div class="c">Tặng sổ Note cho đơn hàng từ 300K</div>
                    </div>
                </div>
                <div data-p="112.50" style="display: none;width: 1010px">
                    <a href="#">        <img style="cursor: pointer;" width="1010" data-u="image" src="img/list%20slide/12cachyeuto.jpg" /></a>
                    <div data-u="thumb" class="onho" style="width: 300px;height: 60px">
                        <img class="i" src="img/list%20slide/12cachyeunho.jpg" />
                        <div class="t">12 Cách Yêu</div>
                        <div class="c">Tập truyện ngắn đầu tay của Hamlet Trương</div>
                    </div>
                </div>
                <div data-p="112.50" style="display: none;width: 1010px">
                    <a href="#">      <img style="cursor: pointer;" width="1010" data-u="image" src="img/list%20slide/quyenlucto.jpg" /></a>
                    <div data-u="thumb" class="onho" style="width: 300px;height: 60px">
                        <img class="i" src="img/list%20slide/quyenlucnho.jpg" />
                        <div class="t">Quyền Lực Bà Rồng</div>
                        <div class="c">Một phụ nữ tài năng và mạnh mẽ hiếm có</div>
                    </div>
                </div>
            </div>
            <!-- Thumbnail Navigator -->
            <div data-u="thumbnavigator" class="jssort11" style="position:absolute;right:5px;top:0px;-moz-user-select:none;-webkit-user-select:none;-ms-user-select:none;user-select:none;width:200px;height:300px;" data-autocenter="2">
                <!-- Thumbnail Item Skin Begin -->
                <div data-u="slides" style="cursor: default;">
                    <div data-u="prototype" class="p" style="width: 360px;height: 100px;background-color: white;border-radius: 10px;filter: alpha(opacity=100); opacity: 1;fill-opacity: 1">
                        <div data-u="thumbnailtemplate" class="tp"></div>
                    </div>
                </div>
                <!-- Thumbnail Item Skin End -->
            </div>
            <!-- Arrow Navigator -->
            <span data-u="arrowleft" class="jssora02l" style="top:0px;left:8px;width:55px;height:55px;" data-autocenter="2"></span>
            <span data-u="arrowright" class="jssora02r" style="top:0px;right:288px;width:55px;height:55px;" data-autocenter="2"></span>
            <a href="http://www.jssor.com" style="display:none">Slideshow Maker</a>
        </div>

        <!-- #endregion Jssor Slider End -->



        </div>
        </div>


    <!-- Best Seller - Liệt kê sách-->
    <div class="row" id="content2">

        <!-- Khung sách best seller và miti khuyên đọc-->
        <div class="col-md-3 col-sm-3 col-xs-3" id="bestseller">
            <div>
              <h4><a href="#">Sách Bán Chạy Trong Tuần</a></h4>
            </div>
            <div>
                <hr width="90%" size="2" noshade="" style="background-color: #00afe9">
            </div>
            <div class="col-md-12 col-sm-12 col-xs-12 sachbanchay">
                <div class="anhsachbanchay">
                   <img width="80" src="img/sach%20ban%20chay/47913_54456.jpg" alt="Quản lý dự án lớn và nhỏ"/><div class="textbox"><input type="button" style="color: white;height: 30px;width: 72px;font-size: smaller"  class="btn text nut1" value="Đọc Thử"/><br><input type="button" style="color: white;height: 30px;width: 72px;text-align: left;font-size: smaller" class="btn text nut2 add-to-cart" id="TN-1" data-name="100 Câu Chuyện Hay Dành Cho Bé Trai" data-author="Bành Phàm" data-price="65000"  value="Mua Sách"/></div>
                </div>
                <div class="noidungsachbanchay">
                    <font class="namebook">100 Câu Chuyện Hay Dành Cho Bé Trai</font><br>

                    <font class="author">Bành Phàm</font><br>
                    <s><font class="giagoc"></font></s>
                    <font class="giagiam">65.000 đ</font>
                </div>
            </div>
            <div class="col-md-12 col-sm-12 col-xs-12 sachbanchay">
                <div class="anhsachbanchay">
            <a href="nha%20gia%20kim.html"><img width="80" src="img/sach%20ban%20chay/49294_p55837mnhagiakimpaulocoelho.jpg" alt="Quản lý dự án lớn và nhỏ"/></a><div class="textbox"><input type="button" style="color: white;height: 30px;width: 72px;font-size: smaller"  class="btn text nut1" value="Đọc Thử"/><br><input type="button" style="color: white;height: 30px;width: 72px;text-align: left;font-size: smaller"  class="btn text nut2" value="Mua Sách"/></div>
                </div>
                <div class="noidungsachbanchay">
                    <font class="namebook">Nhà Giả Kim</font><br>
                    <font class="author">Paulo Coelho</font><br>
                    <s><font class="giagoc">59.000 đ</font></s>
                    <font class="giagiam">47.000 đ</font>
                </div>
            </div>
            <div class="col-md-12 col-sm-12 col-xs-12 sachbanchay">
                <div class="anhsachbanchay">
                    <img width="80" src="img/sach%20ban%20chay/141496_p57630mnhatky.jpg" alt="Quản lý dự án lớn và nhỏ"/><div class="textbox"><input type="button" style="color: white;height: 30px;width: 72px;font-size: smaller"  class="btn text nut1" value="Đọc Thử"/><br><input type="button" style="color: white;height: 30px;width: 72px;text-align: left;font-size: smaller"  class="btn text nut2" value="Mua Sách"/></div>
                </div>
                <div class="noidungsachbanchay">
                    <font class="namebook">Nhật Ký</font><br>
                    <font class="author">Nicholas Sparks</font><br>
                    <s><font class="giagoc">58.000 đ</font></s>
                    <font class="giagiam">47.000 đ</font>
                </div>
            </div>
            <div class="col-md-12 col-sm-12 col-xs-12 sachbanchay">
                <div class="anhsachbanchay">
                    <img width="80" src="img/sach%20ban%20chay/156418_p22747m30163.jpg" alt="Quản lý dự án lớn và nhỏ"/><div class="textbox"><input type="button" style="color: white;height: 30px;width: 72px;font-size: smaller"  class="btn text nut1" value="Đọc Thử"/><br><input type="button" style="color: white;height: 30px;width: 72px;text-align: left;font-size: smaller"  class="btn text nut2" value="Mua Sách"/></div>
                </div>
                <div class="noidungsachbanchay">
                    <font class="namebook">Người Giỏi Không Phải Là Người Làm Tất Cả</font><br>
                    <font class="author">Donna M. Genett, Ph.D.</font><br>
                    <s><font class="giagoc">30.000 đ</font></s>
                    <font class="giagiam">24.000 đ</font>
                </div>
            </div>
            <div class="col-md-12 col-sm-12 col-xs-12 sachbanchay">
                <div class="anhsachbanchay">
                    <img width="80" src="img/sach%20ban%20chay/195114_p66007mbiatruoc.jpg" alt="Quản lý dự án lớn và nhỏ"/><div class="textbox"><input type="button" style="color: white;height: 30px;width: 72px;font-size: smaller"  class="btn text nut1" value="Đọc Thử"/><br><input type="button" style="color: white;height: 30px;width: 72px;text-align: left;font-size: smaller"  class="btn text nut2" value="Mua Sách"/></div>
                </div>
                <div class="noidungsachbanchay">
                    <font class="namebook">Cà Phê Cùng Tony</font><br>
                    <font class="author">Nicholas Sparks</font><br>
                    <s><font class="giagoc">129.000 đ</font></s>
                    <font class="giagiam">103.000 đ</font>
                </div>
            </div>
            <div class="col-md-12 col-sm-12 col-xs-12 sachbanchay">
                <div class="anhsachbanchay">
                    <img width="80" src="img/sach%20ban%20chay/timthumb.jpg" alt="Quản lý dự án lớn và nhỏ"/><div class="textbox"><input type="button" style="color: white;height: 30px;width: 72px;font-size: smaller"  class="btn text nut1" value="Đọc Thử"/><br><input type="button" style="color: white;height: 30px;width: 72px;text-align: left;font-size: smaller"  class="btn text nut2" value="Mua Sách"/></div>
                </div>
                <div class="noidungsachbanchay">
                    <font class="namebook">Java: Hướng dẫn cho người mới học – Lập trình hướng đối tượng</font><br>
                    <font class="author">Herbert Schildt</font><br>
                    <s><font class="giagoc">115.000 đ</font></s>
                    <font class="giagiam">92.000 đ</font>
                </div>
            </div>
            <div class="col-md-12 col-sm-12 col-xs-12 sachbanchay">
                <div class="anhsachbanchay">
                    <img width="80" src="img/sach%20ban%20chay/196058_p66158mhocdanhvan.jpg" alt="Quản lý dự án lớn và nhỏ"/><div class="textbox"><input type="button" style="color: white;height: 30px;width: 72px;font-size: smaller"  class="btn text nut1" value="Đọc Thử"/><br><input type="button" style="color: white;height: 30px;width: 72px;text-align: left;font-size: smaller"  class="btn text nut2" value="Mua Sách"/></div>
                </div>
                <div class="noidungsachbanchay">
                    <font class="namebook">Học Đánh Vần Tiếng Anh</font><br>
                    <font class="author">Nguyễn Ngọc Nam</font><br>
                    <s><font class="giagoc">165.000 đ</font></s>
                    <font class="giagiam">116.000 đ</font>
                </div>
            </div>
            <div class="col-md-12 col-sm-12 col-xs-12 sachbanchay">
                <div class="anhsachbanchay">
                    <img width="80" src="img/sach%20ban%20chay/196773_p66114m001.jpg" alt="Quản lý dự án lớn và nhỏ"/><div class="textbox"><input type="button" style="color: white;height: 30px;width: 72px;font-size: smaller"  class="btn text nut1" value="Đọc Thử"/><br><input type="button" style="color: white;height: 30px;width: 72px;text-align: left;font-size: smaller"  class="btn text nut2" value="Mua Sách"/></div>
                </div>
                <div class="noidungsachbanchay">
                    <font class="namebook">Cảm Ơn Người Đã Rời Xa Tôi</font><br>
                    <font class="author">Hà Thanh Phúc</font><br>
                    <s><font class="giagoc">86.000 đ</font></s>
                    <font class="giagiam">69.000 đ</font>
                </div>
            </div>
            <div class="col-md-12 col-sm-12 col-xs-12 sachbanchay">
                <div class="anhsachbanchay">
                    <img width="80" src="img/sach%20ban%20chay/202412_p67151mbt.jpg" alt="Quản lý dự án lớn và nhỏ"/><div class="textbox"><input type="button" style="color: white;height: 30px;width: 72px;font-size: smaller"  class="btn text nut1" value="Đọc Thử"/><br><input type="button" style="color: white;height: 30px;width: 72px;text-align: left;font-size: smaller"  class="btn text nut2" value="Mua Sách"/></div>
                </div>
                <div class="noidungsachbanchay">
                    <font class="namebook">Chuyện Chàng Nàng</font><br>
                    <font class="author">Marc Levy</font><br>
                    <s><font class="giagoc">86.000 đ</font></s>
                    <font class="giagiam">69.000 đ</font>
                </div>
            </div>
            <div class="col-md-12 col-sm-12 col-xs-12 sachbanchay">
                <div class="anhsachbanchay">
                    <img width="80" src="img/sach%20ban%20chay/193279_p65534m001.jpg" alt="Quản lý dự án lớn và nhỏ"/><div class="textbox"><input type="button" style="color: white;height: 30px;width: 72px;font-size: smaller"  class="btn text nut1" value="Đọc Thử"/><br><input type="button" style="color: white;height: 30px;width: 72px;text-align: left;font-size: smaller"  class="btn text nut2" value="Mua Sách"/></div>
                </div>
                <div class="noidungsachbanchay">
                    <font class="namebook">Chúng Ta Rồi Sẽ Ổn Thôi</font><br>
                    <font class="author">Gào</font><br>
                    <s><font class="giagoc">86.000 đ</font></s>
                    <font class="giagiam">69.000 đ</font>
                </div>
            </div>
            <div class="col-md-12 col-sm-12 col-xs-12 sachbanchay">
                <div class="anhsachbanchay">
                    <img width="80" src="img/sach%20ban%20chay/189042_p64512mbiatr.jpg" alt="Quản lý dự án lớn và nhỏ"/><div class="textbox"><input type="button" style="color: white;height: 30px;width: 72px;font-size: smaller"  class="btn text nut1" value="Đọc Thử"/><br><input type="button" style="color: white;height: 30px;width: 72px;text-align: left;font-size: smaller"  class="btn text nut2" value="Mua Sách"/></div>
                </div>
                <div class="noidungsachbanchay">
                    <font class="namebook">Gõ Cửa Tương Lai - Tập 2: Nhật Bản Có Điều Kỳ Diệu</font><br>
                    <font class="author">Nhiều Tác Giả</font><br>
                    <s><font class="giagoc">70.000 đ</font></s>
                    <font class="giagiam">56.000 đ</font>
                </div>
            </div>





            <!-- Sách Miti Khuyên đọc-->
            <div class="col-md-12 col-sm-12 col-xs-12" style="margin-top: 30px">
                <h4><a href="#">Sách Hay MiTi Khuyên Đọc</a></h4>
            </div>
            <div>
                <hr width="90%" size="2" noshade="" style="background-color: #00afe9">
            </div>
            <div class="col-md-12 col-sm-12 col-xs-12 sachbanchay">
                <div class="anhsachbanchay">
                    <img width="80" src="img/sach%20ban%20chay/156418_p22747m30163.jpg" alt="Quản lý dự án lớn và nhỏ"/><div class="textbox"><input type="button" style="color: white;height: 30px;width: 72px;font-size: smaller"  class="btn text nut1" value="Đọc Thử"/><br><input type="button" style="color: white;height: 30px;width: 72px;text-align: left;font-size: smaller"  class="btn text nut2" value="Mua Sách"/></div>
                </div>
                <div class="noidungsachbanchay">
                    <font class="namebook">Người Giỏi Không Phải Là Người Làm Tất Cả</font><br>
                    <font class="author">Donna M. Genett, Ph.D.</font><br>
                    <s><font class="giagoc">30.000 đ</font></s>
                    <font class="giagiam">27.000 đ</font>
                </div>
            </div>

            <div class="col-md-12 col-sm-12 col-xs-12 sachbanchay">
                <div class="anhsachbanchay">
                    <img width="80" src="img/Sach%20ky%20nang%20song/dacnhantam_2_1_1.jpg" alt="Quản lý dự án lớn và nhỏ"/><div class="textbox"><input type="button" style="color: white;height: 30px;width: 72px;font-size: smaller"  class="btn text nut1" value="Đọc Thử"/><br><input type="button" style="color: white;height: 30px;width: 72px;text-align: left;font-size: smaller"  class="btn text nut2" value="Mua Sách"/></div>
                </div>
                <div class="noidungsachbanchay">
                    <font class="namebook">Đắc Nhân Tâm</font><br>
                    <font class="author">Dale Carnegie</font><br>
                    <s><font class="giagoc">68.000 đ</font></s>
                    <font class="giagiam">55.000 đ</font>
                </div>
            </div>

            <div class="col-md-12 col-sm-12 col-xs-12 sachbanchay">
                <div class="anhsachbanchay">
                    <img width="80" src="img/Sach%20ky%20nang%20song/hat-giong-tam-hon-_tap-8__1_1_1.jpg" alt="Quản lý dự án lớn và nhỏ"/><div class="textbox"><input type="button" style="color: white;height: 30px;width: 72px;font-size: smaller"  class="btn text nut1" value="Đọc Thử"/><br><input type="button" style="color: white;height: 30px;width: 72px;text-align: left;font-size: smaller"  class="btn text nut2" value="Mua Sách"/></div>
                </div>
                <div class="noidungsachbanchay">
                    <font class="namebook">Hạt Giống Tâm Hồn - Những Câu Chuyện Cuộc Sống (Tập 8)</font><br>
                    <font class="author">Nhiều Tác Giả</font><br>
                    <s><font class="giagoc">28.000 đ</font></s>
                    <font class="giagiam">23.000 đ</font>
                </div>
            </div>

            <div class="col-md-12 col-sm-12 col-xs-12 sachbanchay">
                <div class="anhsachbanchay">
                    <img width="80" src="img/Sach%20ky%20nang%20song/img032_11.jpg" alt="Quản lý dự án lớn và nhỏ"/><div class="textbox"><input type="button" style="color: white;height: 30px;width: 72px;font-size: smaller"  class="btn text nut1" value="Đọc Thử"/><br><input type="button" style="color: white;height: 30px;width: 72px;text-align: left;font-size: smaller"  class="btn text nut2" value="Mua Sách"/></div>
                </div>
                <div class="noidungsachbanchay">
                    <font class="namebook">Sức Mạnh Tiềm Thức</font><br>
                    <font class="author">Joseph Murphy</font><br>
                    <s><font class="giagoc"></font></s>
                    <font class="giagiam">88.000 đ</font>
                </div>
            </div>

            <div class="col-md-12 col-sm-12 col-xs-12 sachbanchay">
                <div class="anhsachbanchay">
                    <img width="80" src="img/sach%20miti%20khuyen%20doc/141421_p57670mbiatruoc.jpg" alt="Quản lý dự án lớn và nhỏ"/><div class="textbox"><input type="button" style="color: white;height: 30px;width: 72px;font-size: smaller"  class="btn text nut1" value="Đọc Thử"/><br><input type="button" style="color: white;height: 30px;width: 72px;text-align: left;font-size: smaller"  class="btn text nut2" value="Mua Sách"/></div>
                </div>
                <div class="noidungsachbanchay">
                    <font class="namebook">Rừng Na-Uy</font><br>
                    <font class="author">Haruki Murakami</font><br>
                    <s><font class="giagoc">100.000 đ</font></s>
                    <font class="giagiam">80.000 đ</font>
                </div>
            </div>

            <div class="col-md-12 col-sm-12 col-xs-12 sachbanchay">
                <div class="anhsachbanchay">
                    <img width="80" src="img/sach%20miti%20khuyen%20doc/23573_30030.jpg" alt="Quản lý dự án lớn và nhỏ"/><div class="textbox"><input type="button" style="color: white;height: 30px;width: 72px;font-size: smaller"  class="btn text nut1" value="Đọc Thử"/><br><input type="button" style="color: white;height: 30px;width: 72px;text-align: left;font-size: smaller"  class="btn text nut2" value="Mua Sách"/></div>
                </div>
                <div class="noidungsachbanchay">
                    <font class="namebook">Đừng Bao Giờ Đi Ăn Một Mình</font><br>
                    <font class="author">Keith Ferrazzi, Tahl Raz</font><br>
                    <s><font class="giagoc">79.000 đ</font></s>
                    <font class="giagiam">59.500 đ</font>
                </div>
            </div>

            <div class="col-md-12 col-sm-12 col-xs-12 sachbanchay">
                <div class="anhsachbanchay">
                    <img width="80" src="img/sach%20miti%20khuyen%20doc/29127_35632.jpg" alt="Quản lý dự án lớn và nhỏ"/><div class="textbox"><input type="button" style="color: white;height: 30px;width: 72px;font-size: smaller"  class="btn text nut1" value="Đọc Thử"/><br><input type="button" style="color: white;height: 30px;width: 72px;text-align: left;font-size: smaller"  class="btn text nut2" value="Mua Sách"/></div>
                </div>
                <div class="noidungsachbanchay">
                    <font class="namebook">Dám Nghĩ Lớn</font><br>
                    <font class="author">David J. Schwartz. Ph.D</font><br>
                    <s><font class="giagoc">84.000 đ</font></s>
                    <font class="giagiam">67.000 đ</font>
                </div>
            </div>

            <div class="col-md-12 col-sm-12 col-xs-12 sachbanchay">
                <div class="anhsachbanchay">
                    <img width="80" src="img/sach%20miti%20khuyen%20doc/46911_53454.jpg" alt="Quản lý dự án lớn và nhỏ"/><div class="textbox"><input type="button" style="color: white;height: 30px;width: 72px;font-size: smaller"  class="btn text nut1" value="Đọc Thử"/><br><input type="button" style="color: white;height: 30px;width: 72px;text-align: left;font-size: smaller"  class="btn text nut2" value="Mua Sách"/></div>
                </div>
                <div class="noidungsachbanchay">
                    <font class="namebook">Đừng Bao Giờ Từ Bỏ Khát Vọng</font><br>
                    <font class="author">Nick Vujicic</font><br>
                    <s><font class="giagoc">76.000 đ</font></s>
                    <font class="giagiam">57.000 đ</font>
                </div>
            </div>

            <div class="col-md-12 col-sm-12 col-xs-12 sachbanchay">
            <div class="anhsachbanchay">
                <img width="80" src="img/sach%20miti%20khuyen%20doc/44097_50640.jpg" alt="Quản lý dự án lớn và nhỏ"/><div class="textbox"><input type="button" style="color: white;height: 30px;width: 72px;font-size: smaller"  class="btn text nut1" value="Đọc Thử"/><br><input type="button" style="color: white;height: 30px;width: 72px;text-align: left;font-size: smaller"  class="btn text nut2" value="Mua Sách"/></div>
            </div>
            <div class="noidungsachbanchay">
                <font class="namebook">Ai Che Lưng Cho Bạn</font><br>
                <font class="author">Keith Ferrazzi</font><br>
                <s><font class="giagoc">100.000 đ</font></s>
                <font class="giagiam">70.000 đ</font>
            </div>
        </div>

            <div class="col-md-12 col-sm-12 col-xs-12 sachbanchay">
                <div class="anhsachbanchay">
                    <img width="80" src="img/Sach%20van%20hoc%20nuoc%20ngoai/ba-chang-ngoc.jpg" alt="Quản lý dự án lớn và nhỏ"/><div class="textbox"><input type="button" style="color: white;height: 30px;width: 72px;font-size: smaller"  class="btn text nut1" value="Đọc Thử"/><br><input type="button" style="color: white;height: 30px;width: 72px;text-align: left;font-size: smaller"  class="btn text nut2" value="Mua Sách"/></div>
                </div>
                <div class="noidungsachbanchay">
                    <font class="namebook">Ba Chàng Ngốc</font><br>
                    <font class="author">Chetan Bhagat</font><br>
                    <s><font class="giagoc">78.000 đ</font></s>
                    <font class="giagiam">59.000 đ</font>
                </div>
            </div>

            <div class="col-md-12 col-sm-12 col-xs-12 sachbanchay">
                <div class="anhsachbanchay">
                    <img width="80" src="img/sach%20kinh%20te/204132_p67411mcauchuyencuatoi.jpg" alt="Quản lý dự án lớn và nhỏ"/><div class="textbox"><input type="button" style="color: white;height: 30px;width: 72px;font-size: smaller"  class="btn text nut1" value="Đọc Thử"/><br><input type="button" style="color: white;height: 30px;width: 72px;text-align: left;font-size: smaller"  class="btn text nut2" value="Mua Sách"/></div>
                </div>
                <div class="noidungsachbanchay">
                    <font class="namebook">Câu Chuyện Của Tôi Trong Ngành Quảng Cáo</font><br>
                    <font class="author">Claude C. Hopkins</font><br>
                    <s><font class="giagoc">129.000 đ</font></s>
                    <font class="giagiam">97.000 đ</font>
                </div>
            </div>

            <div class="col-md-12 col-sm-12 col-xs-12 sachbanchay">
                <div class="anhsachbanchay">
                    <img width="80" src="img/Sach%20ky%20nang%20song/img270_8.jpg" alt="Quản lý dự án lớn và nhỏ"/><div class="textbox"><input type="button" style="color: white;height: 30px;width: 72px;font-size: smaller"  class="btn text nut1" value="Đọc Thử"/><br><input type="button" style="color: white;height: 30px;width: 72px;text-align: left;font-size: smaller"  class="btn text nut2" value="Mua Sách"/></div>
                </div>
                <div class="noidungsachbanchay">
                    <font class="namebook">Cho Đi Là Còn Mãi</font><br>
                    <font class="author">Harvey McKinnon</font><br>
                    <s><font class="giagoc">48.000 đ</font></s>
                    <font class="giagiam">38.000 đ</font>
                </div>
            </div>

            <div class="col-md-12 col-sm-12 col-xs-12 sachbanchay">
                <div class="anhsachbanchay">
                    <img width="80" src="img/Sach%20ky%20nang%20song/img696_2_8.jpg" alt="Quản lý dự án lớn và nhỏ"/><div class="textbox"><input type="button" style="color: white;height: 30px;width: 72px;font-size: smaller"  class="btn text nut1" value="Đọc Thử"/><br><input type="button" style="color: white;height: 30px;width: 72px;text-align: left;font-size: smaller"  class="btn text nut2" value="Mua Sách"/></div>
                </div>
                <div class="noidungsachbanchay">
                    <font class="namebook">Đánh Thức Năng Lực Vô Hạn</font><br>
                    <font class="author">Anthony Robbins</font><br>
                    <s><font class="giagoc">84.000 đ</font></s>
                    <font class="giagiam">67.000 đ</font>
                </div>
            </div>


        </div>
        <!-- End of best seller và miti khuyên đọc-->


        <!-- Liệt Kê các loại sách và quyển sách-->
        <div class="col-md-9" id="books">

            <!-- Sách văn học trong nước-->
            <div class="row">
                <div class="col-md-12 col-sm-12 col-xs-12">
                    <div>
                        <h4><a href="#">Sách Văn Học Trong Nước</a></h4>
                    </div>
                    <div>
                        <hr width="90%" size="2" noshade="" style="background-color: #00afe9">
                    </div>
                        <div class="row">
                            <div class="col-md-2">
                                <div class="anhsach">
                                   <a href="Con%20cho%20nho%20mang%20gio%20hoa%20hong.html"><img width="100" src="img/Sach%20van%20hoc%20trong%20nuoc/203534_p67314mconchonho.jpg" alt="Quản lý dự án lớn và nhỏ"/></a><div class="textbox"><input style="color: white" type="button" class="btn text nut1" value="Đọc Thử"/><br><input style="color: white" type="button" class="btn text nut2 add-to-cart" id="VHTN-1" data-name="Con Chó Nhỏ Mang Giỏ Hoa Hồng" data-author="Nguyễn Nhật Ánh" data-price="69000" value="Mua Sách"/></div>

                                </div>
                                <div class="noidungsach">
                                    <font class="namebook">Con Chó Nhỏ Mang Giỏ Hoa Hồng</font><br>
                                    <font class="author">Nguyễn Nhật Ánh</font><br>
                                    <s><font class="giagoc">99.000 đ</font></s>
                                    <font class="giagiam">69.000 đ</font>
                                </div>
                            </div>

                            <div class="col-md-2">
                                <div class="anhsach">
                                    <a href="Giac%20mo%20my.html"><img width="100" src="img/Sach%20van%20hoc%20trong%20nuoc/204682_p67486mbt.jpg" alt="Quản lý dự án lớn và nhỏ"/></a><div class="textbox"><input type="button" style="color: white"  class="btn text nut1" value="Đọc Thử"/><br><input type="button" style="color: white"  class="btn text nut2 add-to-cart" id="VHTN-2" data-name="Giấc Mơ Mỹ" data-author="An Lâm" data-price="44000" value="Mua Sách"/></div>
                                </div>
                                <div class="noidungsach">
                                    <font class="namebook">Giấc Mơ Mỹ</font><br><br><br>
                                    <font class="author">An Lâm</font><br>
                                    <s><font class="giagoc">55.000 đ</font></s>
                                    <font class="giagiam">44.000 đ</font>
                                </div>
                            </div>

                            <div class="col-md-2">
                                <div class="anhsach">
                                    <a href="nhung%20nam%20thang%20yeu%20lam.html">   <img width="100" src="img/Sach%20van%20hoc%20trong%20nuoc/204135_p67400m001.jpg" alt="Quản lý dự án lớn và nhỏ"/></a><div class="textbox"><input type="button" style="color: white"  class="btn text nut1" value="Đọc Thử"/><br><input type="button" style="color: white"  class="btn text nut2" value="Mua Sách"/></div>
                                </div>
                                <div class="noidungsach">
                                   <div class="a123"> <font class="namebook">Những Năm Tháng Yêu Lầm</font><br></div><br>
                                    <div class="b456">  <font class="author">Ploy Ngọc Bích</font><br></div>
                                    <s><font class="giagoc">68.000 đ</font></s>
                                    <font class="giagiam">48.000 đ</font>
                                </div>
                            </div>

                            <div class="col-md-2">
                                <div class="anhsach">
                                    <a href="Vo%20thuong.html">       <img width="100" src="img/anh%20sach%20trang%20con/vo%20thuong.jpg" alt="Quản lý dự án lớn và nhỏ"/></a><div class="textbox"><input type="button" style="color: white"  class="btn text nut1" value="Đọc Thử"/><br><input type="button" style="color: white"  class="btn text nut2" value="Mua Sách"/></div>
                                </div>
                                <div class="noidungsach">
                                    <font class="namebook">Vô Thường</font><br><br><br>
                                    <font class="author">Nguyễn Bảo Trung</font><br>
                                    <s><font class="giagoc">75.000 đ</font></s>
                                    <font class="giagiam">52.500 đ</font>
                                </div>
                            </div>

                            <div class="col-md-2">
                                <div class="anhsach">
                                    <img width="100" src="img/Sach%20van%20hoc%20trong%20nuoc/bia_cung_thanh_ky_y_1.jpg" alt="Quản lý dự án lớn và nhỏ"/><div class="textbox"><input type="button" style="color: white"  class="btn text nut1" value="Đọc Thử"/><br><input type="button" style="color: white"  class="btn text nut2" value="Mua Sách"/></div>
                                </div>
                                <div class="noidungsach">
                                    <div class="a123">     <font class="namebook">Thành Kỳ Ý - Tập 1 (Bìa Mềm)</font><br><br></div>
                                        <div class="b456">    <font class="author">Linh - Art.SAN</font><br></div>
                                    <s><font class="giagoc">100.000 đ</font></s>
                                    <font class="giagiam">75.000 đ</font>
                                </div>
                            </div>

                            <div class="col-md-2">
                                <div class="anhsach">
                                    <img width="100" src="img/Sach%20van%20hoc%20trong%20nuoc/img341_14.jpg" alt="Quản lý dự án lớn và nhỏ"/><div class="textbox"><input type="button" style="color: white"  class="btn text nut1" value="Đọc Thử"/><br><input type="button" style="color: white"  class="btn text nut2" value="Mua Sách"/></div>
                                </div>
                                <div class="noidungsach">
                                    <font class="namebook">Tắt Đèn (Minh Thắng)</font><br><br>
                                    <font class="author">Ngô Tất Tố</font><br>
                                    <s><font class="giagoc">60.000 đ</font></s>
                                    <font class="giagiam">42.000 đ</font>
                                </div>
                            </div>
                        </div>

                </div>
            </div>

            <!-- Sách văn học nước ngoài-->
            <div class="row">
                <div class="col-md-12 col-sm-12 col-xs-12">
                    <div>
                        <h4><a href="#">Sách Văn Học Nước Ngoài</a></h4>
                    </div>
                    <div>
                        <hr width="90%" size="2" noshade="" style="background-color: #00afe9">
                    </div>
                    <div class="row">
                        <div class="col-md-2">
                            <div class="anhsach">
                                <img width="100" src="img/Sach%20van%20hoc%20nuoc%20ngoai/anh-cdcp-3_1186d_4.jpg" alt="Quản lý dự án lớn và nhỏ"/><div class="textbox"><input type="button" style="color: white"  class="btn text nut1" value="Đọc Thử"/><br><input type="button" style="color: white"  class="btn text nut2" value="Mua Sách"/></div>
                            </div>
                            <div class="noidungsach">
                                <font class="namebook">Cuộc Đời Của Pi</font><br><br><br>
                                <font class="author">Yann Martel</font><br>
                                <s><font class="giagoc">65.000 đ</font></s>
                                <font class="giagiam">49.000 đ</font>
                            </div>
                        </div>

                        <div class="col-md-2">
                            <div class="anhsach">
                                <img width="100" src="img/Sach%20van%20hoc%20nuoc%20ngoai/ba-chang-ngoc.jpg" alt="Quản lý dự án lớn và nhỏ"/><div class="textbox"><input type="button" style="color: white"  class="btn text nut1" value="Đọc Thử"/><br><input type="button" style="color: white"  class="btn text nut2" value="Mua Sách"/></div>
                            </div>
                            <div class="noidungsach">
                                <font class="namebook">Ba Chàng Ngốc</font><br><br><br>
                                <font class="author">Chetan Bhagat</font><br>
                                <s><font class="giagoc">78.000 đ</font></s>
                                <font class="giagiam">59.000 đ</font>
                            </div>
                        </div>

                        <div class="col-md-2">
                            <div class="anhsach">
                                <img width="100" src="img/Sach%20van%20hoc%20nuoc%20ngoai/gone-girl_2.jpg" alt="Quản lý dự án lớn và nhỏ"/><div class="textbox"><input type="button" style="color: white"  class="btn text nut1" value="Đọc Thử"/><br><input type="button" style="color: white"  class="btn text nut2" value="Mua Sách"/></div>
                            </div>
                            <div class="noidungsach">
                                <font class="namebook">Cô Gái Mất Tích</font><br><br><br>
                                <font class="author">Gillian Flynn</font><br>
                                <s><font class="giagoc"></font></s>
                                <font class="giagiam">150.000 đ</font>
                            </div>
                        </div>

                        <div class="col-md-2">
                            <div class="anhsach">
                                <img width="100" src="img/Sach%20van%20hoc%20nuoc%20ngoai/harry_1a.jpg" alt="Quản lý dự án lớn và nhỏ"/><div class="textbox"><input type="button" style="color: white"  class="btn text nut1" value="Đọc Thử"/><br><input type="button" style="color: white"  class="btn text nut2" value="Mua Sách"/></div>
                            </div>
                            <div class="noidungsach">
                                <font class="namebook">Harry Potter Và Hòn Đá Phù Thủy - Tập 1</font><br>
                                <font class="author">J.K.Rowling</font><br>
                                <s><font class="giagoc">108.000 đ</font></s>
                                <font class="giagiam">76.000 đ</font>
                            </div>
                        </div>

                        <div class="col-md-2">
                            <div class="anhsach">
                                <img width="100" src="img/Sach%20van%20hoc%20nuoc%20ngoai/images_11__2_2.jpg" alt="Quản lý dự án lớn và nhỏ"/><div class="textbox"><input type="button" style="color: white"  class="btn text nut1" value="Đọc Thử"/><br><input type="button" style="color: white"  class="btn text nut2" value="Mua Sách"/></div>
                            </div>
                            <div class="noidungsach">
                                <font class="namebook">Triệu Phú Khu Ổ Chuột</font><br><br>
                                <font class="author">Vikas Swarup</font><br>
                                <s><font class="giagoc">75.000 đ</font></s>
                                <font class="giagiam">56.000 đ</font>
                            </div>
                        </div>

                        <div class="col-md-2">
                            <div class="anhsach">
                                <img width="100" src="img/Sach%20van%20hoc%20nuoc%20ngoai/mot_ngay.jpg" alt="Quản lý dự án lớn và nhỏ"/><div class="textbox"><input type="button" style="color: white"  class="btn text nut1" value="Đọc Thử"/><br><input type="button" style="color: white"  class="btn text nut2" value="Mua Sách"/></div>
                            </div>
                            <div class="noidungsach">
                                <font class="namebook">Một Ngày</font><br><br><br>
                                <font class="author">David Nicholls</font><br>
                                <s><font class="giagoc">120.000 đ</font></s>
                                <font class="giagiam">90.000 đ</font>
                            </div>
                        </div>
                    </div>

                </div>
            </div>

            <!-- sách chuyên ngành kỹ thuật-->
            <div class="row">
                <div class="col-md-12 col-sm-12 col-xs-12">
                    <div>
                        <h4><a href="#">Sách Chuyên Ngành Kỹ Thuật</a></h4>
                    </div>
                    <div>
                        <hr width="90%" size="2" noshade="" style="background-color: #00afe9">
                    </div>
                    <div class="row">
                        <div class="col-md-2">
                            <div class="anhsach">
                                <img width="100" src="img/sach%20chuyen%20nganh/bia-javascript.png" alt="Quản lý dự án lớn và nhỏ"/><div class="textbox"><input type="button" style="color: white"  class="btn text nut1" value="Đọc Thử"/><br><input type="button" style="color: white"  class="btn text nut2" value="Mua Sách"/></div>
                            </div>
                            <div class="noidungsach">
                                <font class="namebook">JavaScript – Hướng Dẫn Học Qua Ví Dụ</font><br>
                                <font class="author">Steve Suehring</font><br>
                                <s><font class="giagoc"></font></s>
                                <font class="giagiam">128.000 đ</font>
                            </div>
                        </div>

                        <div class="col-md-2">
                            <div class="anhsach">
                                <img width="100" src="img/sach%20chuyen%20nganh/bia_html5.png" alt="Quản lý dự án lớn và nhỏ"/><div class="textbox"><input type="button" style="color: white"  class="btn text nut1" value="Đọc Thử"/><br><input type="button" style="color: white"  class="btn text nut2" value="Mua Sách"/></div>
                            </div>
                            <div class="noidungsach">
                                <font class="namebook">HTML5 Và CSS3: Thiết Kế Web Giàu Tính Năng</font><br>
                                <font class="author">Jermy Osborn</font><br>
                                <s><font class="giagoc">125.000 đ</font></s>
                                <font class="giagiam">95.000 đ</font>
                            </div>
                        </div>

                        <div class="col-md-2">
                            <div class="anhsach">
                                <img width="100" src="img/sach%20chuyen%20nganh/timthumb.jpg" alt="Quản lý dự án lớn và nhỏ"/><div class="textbox"><input type="button" style="color: white"  class="btn text nut1" value="Đọc Thử"/><br><input type="button" style="color: white"  class="btn text nut2" value="Mua Sách"/></div>
                            </div>
                            <div class="noidungsach">
                                <font class="namebook">Xử Lý Kỹ Xảo Nâng Cao Với After Effects</font><br>
                                <font class="author">Jerron Smith</font><br>
                                <s><font class="giagoc"></font></s>
                                <font class="giagiam">120.000 đ</font>
                            </div>
                        </div>

                        <div class="col-md-2">
                            <div class="anhsach">
                                <img width="100" src="img/sach%20chuyen%20nganh/14817_p21212.jpg" alt="Quản lý dự án lớn và nhỏ"/><div class="textbox"><input type="button" style="color: white"  class="btn text nut1" value="Đọc Thử"/><br><input type="button" style="color: white"  class="btn text nut2" value="Mua Sách"/></div>
                            </div>
                            <div class="noidungsach">
                                <font class="namebook">Kết Cấu Thép Cấu Kiện Cơ Bản</font><br><br>
                                <font class="author">Nguyễn Quang Viên</font><br>
                                <s><font class="giagoc">60.000 đ</font></s>
                                <font class="giagiam">48.000 đ</font>
                            </div>
                        </div>

                        <div class="col-md-2">
                            <div class="anhsach">
                                <img width="100" src="img/sach%20chuyen%20nganh/141453_p57675mxx142.jpg" alt="Quản lý dự án lớn và nhỏ"/><div class="textbox"><input type="button" style="color: white"  class="btn text nut1" value="Đọc Thử"/><br><input type="button" style="color: white"  class="btn text nut2" value="Mua Sách"/></div>
                            </div>
                            <div class="noidungsach">
                                <font class="namebook">Lumion Dành Cho Người Tự Học</font><br><br>
                                <font class="author">Nhiều Tác Giả</font><br>
                                <s><font class="giagoc">95.000 đ</font></s>
                                <font class="giagiam">76.000 đ</font>
                            </div>
                        </div>

                        <div class="col-md-2">
                            <div class="anhsach">
                                <img width="100" src="img/sach%20chuyen%20nganh/175282_p62818mdau001.jpg" alt="Quản lý dự án lớn và nhỏ"/><div class="textbox"><input type="button" style="color: white"  class="btn text nut1" value="Đọc Thử"/><br><input type="button" style="color: white"  class="btn text nut2" value="Mua Sách"/></div>
                            </div>
                            <div class="noidungsach">
                                <font class="namebook">Thực Hành Thiết Kế Cơ Khí Với Solidworks</font><br>
                                <font class="author">Phạm Quang Huy</font><br>
                                <s><font class="giagoc">95.000 đ</font></s>
                                <font class="giagiam">76.000 đ</font>
                            </div>
                        </div>
                    </div>

                </div>
            </div>

            <!-- sách kinh tế-->
            <div class="row">
                <div class="col-md-12 col-sm-12 col-xs-12">
                    <div>
                        <h4><a href="#">Sách Kinh Tế</a></h4>
                    </div>
                    <div>
                        <hr width="90%" size="2" noshade="" style="background-color: #00afe9">
                    </div>
                    <div class="row">
                        <div class="col-md-2">
                            <div class="anhsach">
                                <img width="100" src="img/sach%20kinh%20te/13573_19961.jpg" alt="Quản lý dự án lớn và nhỏ"/><div class="textbox"><input type="button" style="color: white"  class="btn text nut1" value="Đọc Thử"/><br><input type="button" style="color: white"  class="btn text nut2" value="Mua Sách"/></div>
                            </div>
                            <div class="noidungsach">
                                <font class="namebook">Quản Lý Dự Án Lớn Và Nhỏ</font><br><br>
                                <font class="author">First News</font><br>
                                <s><font class="giagoc">52.000 đ</font></s>
                                <font class="giagiam">42.000 đ</font>
                            </div>
                        </div>

                        <div class="col-md-2">
                            <div class="anhsach">
                                <img width="100" src="img/sach%20kinh%20te/49597_nghethuatgiaotiep.jpg" alt="Quản lý dự án lớn và nhỏ"/><div class="textbox"><input type="button" style="color: white"  class="btn text nut1" value="Đọc Thử"/><br><input type="button" style="color: white"  class="btn text nut2" value="Mua Sách"/></div>
                            </div>
                            <div class="noidungsach">
                                <font class="namebook">Nghệ Thuật Giao Tiếp Để Thành Công</font><br>
                                <font class="author">The Windy</font><br>
                                <s><font class="giagoc">90.000 đ</font></s>
                                <font class="giagiam">63.000 đ</font>
                            </div>
                        </div>

                        <div class="col-md-2">
                            <div class="anhsach">
                                <img width="100" src="img/sach%20kinh%20te/146232_p34348mxx216.jpg" alt="Quản lý dự án lớn và nhỏ"/><div class="textbox"><input type="button" style="color: white"  class="btn text nut1" value="Đọc Thử"/><br><input type="button" style="color: white"  class="btn text nut2" value="Mua Sách"/></div>
                            </div>
                            <div class="noidungsach">
                                <font class="namebook">Chiến Lược Marketing Tổng Thể Toàn Cầu</font><br>
                                <font class="author">Nguyễn Văn Dung</font><br>
                                <s><font class="giagoc">40.000 đ</font></s>
                                <font class="giagiam">38.000 đ</font>
                            </div>
                        </div>

                        <div class="col-md-2">
                            <div class="anhsach">
                                <img width="100" src="img/sach%20kinh%20te/155967_p41906mhuanluyenkinangbanhang.jpg" alt="Quản lý dự án lớn và nhỏ"/><div class="textbox"><input type="button" style="color: white"  class="btn text nut1" value="Đọc Thử"/><br><input type="button" style="color: white"  class="btn text nut2" value="Mua Sách"/></div>
                            </div>
                            <div class="noidungsach">
                                <font class="namebook">Huấn Luyện Kĩ Năng Bán Hàng</font><br><br>
                                <font class="author">Nhiều Tác Giả</font><br>
                                <s><font class="giagoc">59.000 đ</font></s>
                                <font class="giagiam">17.700 đ</font>
                            </div>
                        </div>

                        <div class="col-md-2">
                            <div class="anhsach">
                                <img width="100" src="img/sach%20kinh%20te/204132_p67411mcauchuyencuatoi.jpg" alt="Quản lý dự án lớn và nhỏ"/><div class="textbox"><input type="button" style="color: white"  class="btn text nut1" value="Đọc Thử"/><br><input type="button" style="color: white"  class="btn text nut2" value="Mua Sách"/></div>
                            </div>
                            <div class="noidungsach">
                                <font class="namebook">Câu Chuyện Của Tôi Trong Ngành Quảng Cáo</font><br>
                                <font class="author">Claude C. Hopkins</font><br>
                                <s><font class="giagoc">129.000 đ</font></s>
                                <font class="giagiam">97.000 đ</font>
                            </div>
                        </div>

                        <div class="col-md-2">
                            <div class="anhsach">
                                <img width="100" src="img/sach%20kinh%20te/bia_kinh_te_out-01.jpg" alt="Quản lý dự án lớn và nhỏ"/><div class="textbox"><input type="button" style="color: white"  class="btn text nut1" value="Đọc Thử"/><br><input type="button" style="color: white"  class="btn text nut2" value="Mua Sách"/></div>
                            </div>
                            <div class="noidungsach">
                                <font class="namebook">Góc Nhìn Alan: Kinh Tế</font><br><br>
                                <font class="author">Alan Phan</font><br>
                                <s><font class="giagoc">75.000 đ</font></s>
                                <font class="giagiam">60.000 đ</font>
                            </div>
                        </div>
                    </div>

                </div>
            </div>

            <!-- Sách kỹ năng sống-->
            <div class="row">
                <div class="col-md-12 col-sm-12 col-xs-12">
                    <div>
                        <h4><a href="#">Sách Kỹ Năng Sống</a></h4>
                    </div>
                    <div>
                        <hr width="90%" size="2" noshade="" style="background-color: #00afe9">
                    </div>
                    <div class="row">
                        <div class="col-md-2">
                            <div class="anhsach">
                                <img width="100" src="img/Sach%20ky%20nang%20song/891.jpg" alt="Quản lý dự án lớn và nhỏ"/><div class="textbox"><input type="button" style="color: white"  class="btn text nut1" value="Đọc Thử"/><br><input type="button" style="color: white"  class="btn text nut2" value="Mua Sách"/></div>
                            </div>
                            <div class="noidungsach">
                                <font class="namebook">89 Điều Khác Biệt Giữa Người Thành Công Và Kẻ Thất...</font><br>
                                <font class="author">1980 Books</font><br>
                                <s><font class="giagoc">89.000 đ</font></s>
                                <font class="giagiam">62.000 đ</font>
                            </div>
                        </div>

                        <div class="col-md-2">
                            <div class="anhsach">
                                <img width="100" src="img/Sach%20ky%20nang%20song/dacnhantam_2_1_1.jpg" alt="Quản lý dự án lớn và nhỏ"/><div class="textbox"><input type="button" style="color: white"  class="btn text nut1" value="Đọc Thử"/><br><input type="button" style="color: white"  class="btn text nut2" value="Mua Sách"/></div>
                            </div>
                            <div class="noidungsach">
                                <font class="namebook">Đắc Nhân Tâm</font><br><br><br>
                                <font class="author">Dale Carnegie</font><br>
                                <s><font class="giagoc">68.000 đ</font></s>
                                <font class="giagiam">55.000 đ</font>
                            </div>
                        </div>

                        <div class="col-md-2">
                            <div class="anhsach">
                                <img width="100" src="img/Sach%20ky%20nang%20song/hat-giong-tam-hon-_tap-8__1_1_1.jpg" alt="Quản lý dự án lớn và nhỏ"/>
                                <div class="textbox">
                             <a href="Hat%20giong%20tam%20hon/Hat%20giong%20tam%20hon.html" target="_blank">
                                 <input id="btn-show-popup" type="button" class="btn text nut1" value="Đọc Thử"/>
                             </a>
                                <br>
                                    <input type="button" style="color: white"  class="btn text nut2" value="Mua Sách"/>
                                </div>
                            </div>
                            <div class="noidungsach">
                                <font class="namebook">Hạt Giống Tâm Hồn (Tập 8)</font><br><br>
                                <font class="author">Nhiều Tác Giả</font><br>
                                <s><font class="giagoc">28.000 đ</font></s>
                                <font class="giagiam">23.000 đ</font>
                            </div>
                        </div>

                        <div class="col-md-2">
                            <div class="anhsach">
                                <img width="100" src="img/Sach%20ky%20nang%20song/img032_11.jpg" alt="Quản lý dự án lớn và nhỏ"/><div class="textbox"><input type="button" style="color: white"  class="btn text nut1" value="Đọc Thử"/><br><input type="button" style="color: white"  class="btn text nut2" value="Mua Sách"/></div>
                            </div>
                            <div class="noidungsach">
                                <font class="namebook">Sức Mạnh Tiềm Thức</font><br><br>
                                <font class="author">Joseph Murphy</font><br>
                                <s><font class="giagoc"></font></s>
                                <font class="giagiam">88.000 đ</font>
                            </div>
                        </div>

                        <div class="col-md-2">
                            <div class="anhsach">
                                <img width="100" src="img/Sach%20ky%20nang%20song/img270_8.jpg" alt="Quản lý dự án lớn và nhỏ"/><div class="textbox"><input type="button" style="color: white"  class="btn text nut1" value="Đọc Thử"/><br><input type="button" style="color: white"  class="btn text nut2" value="Mua Sách"/></div>
                            </div>
                            <div class="noidungsach">
                                <font class="namebook">Cho Đi Là Còn Mãi</font><br><br><br>
                                <font class="author">Harvey McKinnon</font><br>
                                <s><font class="giagoc">48.000 đ</font></s>
                                <font class="giagiam">38.000 đ</font>
                            </div>
                        </div>

                        <div class="col-md-2">
                            <div class="anhsach">
                                <img width="100" src="img/Sach%20ky%20nang%20song/img696_2_8.jpg" alt="Quản lý dự án lớn và nhỏ"/><div class="textbox"><input type="button" style="color: white"  class="btn text nut1" value="Đọc Thử"/><br><input type="button" style="color: white"  class="btn text nut2" value="Mua Sách"/></div>
                            </div>
                            <div class="noidungsach">
                                <font class="namebook">Đánh Thức Năng Lực Vô Hạn</font><br><br>
                                <font class="author">Anthony Robbins</font><br>
                                <s><font class="giagoc">84.000 đ</font></s>
                                <font class="giagiam">67.000 đ</font>
                            </div>
                        </div>
                    </div>

                </div>
            </div>

            <!-- Sách Ngoại Ngữ-->
            <div class="row">
                <div class="col-md-12 col-sm-12 col-xs-12">
                    <div>
                        <h4><a href="#">Sách Ngoại Ngữ</a></h4>
                    </div>
                    <div>
                        <hr width="90%" size="2" noshade="" style="background-color: #00afe9">
                    </div>
                    <div class="row">
                        <div class="col-md-2">
                            <div class="anhsach">
                                <img width="100" src="img/sach%20ngoai%20ngu/bia-luy_n_n_i_ti_ng_anh_nh_ng_i_b_n_ng_k_m_dvd_v_7_rules_effortless_english_.jpg" alt="Quản lý dự án lớn và nhỏ"/><div class="textbox"><input type="button" style="color: white"  class="btn text nut1" value="Đọc Thử"/><br><input type="button" style="color: white"  class="btn text nut2" value="Mua Sách"/></div>
                            </div>
                            <div class="noidungsach">
                                <font class="namebook">Luyện Nói Tiếng Anh Như Người Bản Ngữ</font><br>
                                <font class="author">A.J.Hoge</font><br>
                                <s><font class="giagoc"></font></s>
                                <font class="giagiam">105.000 đ</font>
                            </div>
                        </div>

                        <div class="col-md-2">
                            <div class="anhsach">
                                <img width="100" src="img/sach%20ngoai%20ngu/bia_-_the_ielts_speaking_topics_with_answers.jpg" alt="Quản lý dự án lớn và nhỏ"/><div class="textbox"><input type="button" style="color: white"  class="btn text nut1" value="Đọc Thử"/><br><input type="button" style="color: white"  class="btn text nut2" value="Mua Sách"/></div>
                            </div>
                            <div class="noidungsach">
                                <font class="namebook">The IELTS Speaking Topics With Answers</font><br>
                                <font class="author">The Windy</font><br>
                                <s><font class="giagoc">80.000 đ</font></s>
                                <font class="giagiam">56.000 đ</font>
                            </div>
                        </div>

                        <div class="col-md-2">
                            <div class="anhsach">
                                <img width="100" src="img/sach%20ngoai%20ngu/img173_4_5.jpg" alt="Quản lý dự án lớn và nhỏ"/><div class="textbox"><input type="button" style="color: white"  class="btn text nut1" value="Đọc Thử"/><br><input type="button" style="color: white"  class="btn text nut2" value="Mua Sách"/></div>
                            </div>
                            <div class="noidungsach">
                                <font class="namebook">Từ Điển Nhật - Việt Thông Dụng</font><br><br>
                                <font class="author">Hoàng Quỳnh</font><br>
                                <s><font class="giagoc">105.000 đ</font></s>
                                <font class="giagiam">73.500 đ</font>
                            </div>
                        </div>

                        <div class="col-md-2">
                            <div class="anhsach">
                                <img width="100" src="img/sach%20ngoai%20ngu/img344_12.jpg" alt="Quản lý dự án lớn và nhỏ"/><div class="textbox"><input type="button" style="color: white"  class="btn text nut1" value="Đọc Thử"/><br><input type="button" style="color: white"  class="btn text nut2" value="Mua Sách"/></div>
                            </div>
                            <div class="noidungsach">
                                <font class="namebook">Tổng Hợp Đề Thi Ôn Luyện Tiếng Nhật N5 - N4</font><br>
                                <font class="author">Đào Hồ Phương</font><br>
                                <s><font class="giagoc">68.000 đ</font></s>
                                <font class="giagiam">47.600 đ</font>
                            </div>
                        </div>

                        <div class="col-md-2">
                            <div class="anhsach">
                                <img width="100" src="img/sach%20ngoai%20ngu/img639_8.jpg" alt="Quản lý dự án lớn và nhỏ"/><div class="textbox"><input type="button" style="color: white"  class="btn text nut1" value="Đọc Thử"/><br><input type="button" style="color: white"  class="btn text nut2" value="Mua Sách"/></div>
                            </div>
                            <div class="noidungsach">
                                <font class="namebook">Từ Điển Hàn - Việt</font><br><br><br>
                                <font class="author">Nhiều Tác Giả</font><br>
                                <s><font class="giagoc">60.000 đ</font></s>
                                <font class="giagiam">45.000 đ</font>
                            </div>
                        </div>

                        <div class="col-md-2">
                            <div class="anhsach">
                                <img width="100" src="img/sach%20ngoai%20ngu/img993_13.jpg" alt="Quản lý dự án lớn và nhỏ"/><div class="textbox"><input type="button" style="color: white"  class="btn text nut1" value="Đọc Thử"/><br><input type="button" style="color: white"  class="btn text nut2" value="Mua Sách"/></div>
                            </div>
                            <div class="noidungsach">
                                <font class="namebook">Ngữ Pháp Và Từ Vựng Tiếng Anh TOEFL</font><br>
                                <font class="author">Duy Quang</font><br>
                                <s><font class="giagoc">129.000 đ</font></s>
                                <font class="giagiam">97.000 đ</font>
                            </div>
                        </div>
                    </div>

                </div>
            </div>

            <!-- Sách Tin Học-->
            <div class="row">
                <div class="col-md-12 col-sm-12 col-xs-12">
                    <div>
                        <h4><a href="#">Sách Tin Học</a></h4>
                    </div>
                    <div>
                        <hr width="90%" size="2" noshade="" style="background-color: #00afe9">
                    </div>
                    <div class="row">
                        <div class="col-md-2">
                            <div class="anhsach">
                                <img width="100" src="img/sach%20tin%20hoc/25-phuong-phap-su-dung-internet-an-toan.jpg" alt="Quản lý dự án lớn và nhỏ"/><div class="textbox"><input type="button" style="color: white"  class="btn text nut1" value="Đọc Thử"/><br><input type="button" style="color: white"  class="btn text nut2" value="Mua Sách"/></div>
                            </div>
                            <div class="noidungsach">
                                <font class="namebook">25 Phương Pháp Sử Dụng Internet An Toàn</font><br>
                                <font class="author">Nhiều Tác Giả</font><br>
                                <s><font class="giagoc">72.000 đ</font></s>
                                <font class="giagiam">54.000 đ</font>
                            </div>
                        </div>

                        <div class="col-md-2">
                            <div class="anhsach">
                                <img width="100" src="img/sach%20tin%20hoc/img006_18.jpg" alt="Quản lý dự án lớn và nhỏ"/><div class="textbox"><input type="button" style="color: white"  class="btn text nut1" value="Đọc Thử"/><br><input type="button" style="color: white"  class="btn text nut2" value="Mua Sách"/></div>
                            </div>
                            <div class="noidungsach">
                                <font class="namebook">Tự Học Nhanh Word 2013</font><br><br>
                                <font class="author">Nguyễn Đức Hiếu</font><br>
                                <s><font class="giagoc">46.000 đ</font></s>
                                <font class="giagiam">32.200 đ</font>
                            </div>
                        </div>

                        <div class="col-md-2">
                            <div class="anhsach">
                                <img width="100" src="img/sach%20tin%20hoc/img164_1_8.jpg" alt="Quản lý dự án lớn và nhỏ"/><div class="textbox"><input type="button" style="color: white"  class="btn text nut1" value="Đọc Thử"/><br><input type="button" style="color: white"  class="btn text nut2" value="Mua Sách"/></div>
                            </div>
                            <div class="noidungsach">
                                <font class="namebook">Kỹ Năng Sử Dụng Máy Vi Tính Cho Người Mới Đi Làm</font><br>
                                <font class="author">Hồng Hoàng Quang</font><br>
                                <s><font class="giagoc">42.000 đ</font></s>
                                <font class="giagiam">32.000 đ</font>
                            </div>
                        </div>

                        <div class="col-md-2">
                            <div class="anhsach">
                                <img width="100" src="img/sach%20tin%20hoc/img178_8.jpg" alt="Quản lý dự án lớn và nhỏ"/><div class="textbox"><input type="button" style="color: white"  class="btn text nut1" value="Đọc Thử"/><br><input type="button" style="color: white"  class="btn text nut2" value="Mua Sách"/></div>
                            </div>
                            <div class="noidungsach">
                                <font class="namebook">Học Nhanh Tin Học Văn Phòng</font><br><br>
                                <font class="author">Hà Thành - Trí Việt</font><br>
                                <s><font class="giagoc">69.000 đ</font></s>
                                <font class="giagiam">48.300 đ</font>
                            </div>
                        </div>

                        <div class="col-md-2">
                            <div class="anhsach">
                                <img width="100" src="img/sach%20tin%20hoc/img788_3.jpg" alt="Quản lý dự án lớn và nhỏ"/><div class="textbox"><input type="button" style="color: white"  class="btn text nut1" value="Đọc Thử"/><br><input type="button" style="color: white"  class="btn text nut2" value="Mua Sách"/></div>
                            </div>
                            <div class="noidungsach">
                                <font class="namebook">Sổ Tay Mẹo Vặt Trong Sử Dụng Internet</font><br>
                                <font class="author">Hà Thành - Trí Việt</font><br>
                                <s><font class="giagoc">39.000 đ</font></s>
                                <font class="giagiam">29.250 đ</font>
                            </div>
                        </div>

                        <div class="col-md-2">
                            <div class="anhsach">
                                <img width="100" src="img/sach%20tin%20hoc/so-tay-100-tuyet-chieu-cho-nguoi-dung-may-vi-tinh.jpeg" alt="Quản lý dự án lớn và nhỏ"/><div class="textbox"><input type="button" style="color: white"  class="btn text nut1" value="Đọc Thử"/><br><input type="button" style="color: white"  class="btn text nut2" value="Mua Sách"/></div>
                            </div>
                            <div class="noidungsach">
                                <font class="namebook">Sổ Tay 100 Tuyệt Chiêu Cho Người Dùng Máy Vi Tính</font><br>
                                <font class="author">Hà Thành - Trí Việt</font><br>
                                <s><font class="giagoc">42.000 đ</font></s>
                                <font class="giagiam">29.400 đ</font>
                            </div>
                        </div>
                    </div>

                </div>
            </div>

            <!-- Sách Trung học - tiểu học-->
            <div class="row">
                <div class="col-md-12 col-sm-12 col-xs-12">
                    <div>
                        <h4><a href="#">Sách Trung Học - Tiểu Học</a></h4>
                    </div>
                    <div>
                        <hr width="90%" size="2" noshade="" style="background-color: #00afe9">
                    </div>
                    <div class="row">
                        <div class="col-md-2">
                            <div class="anhsach">
                                <img width="100" src="img/sach%20trung%20hoc/c_ng_ph_thi_m_n_to_n.jpg" alt="Quản lý dự án lớn và nhỏ"/><div class="textbox"><input type="button" style="color: white"  class="btn text nut1" value="Đọc Thử"/><br><input type="button" style="color: white"  class="btn text nut2" value="Mua Sách"/></div>
                            </div>
                            <div class="noidungsach">
                                <font class="namebook">Công Phá Đề Thi THPT Quốc Gia Môn Toán</font><br>
                                <font class="author">Hồ Văn Diên</font><br>
                                <s><font class="giagoc"></font></s>
                                <font class="giagiam">194.000 đ</font>
                            </div>
                        </div>

                        <div class="col-md-2">
                            <div class="anhsach">
                                <img width="100" src="img/sach%20trung%20hoc/diem_cao_hoa_hoc_huu_co.jpg" alt="Quản lý dự án lớn và nhỏ"/><div class="textbox"><input type="button" style="color: white"  class="btn text nut1" value="Đọc Thử"/><br><input type="button" style="color: white"  class="btn text nut2" value="Mua Sách"/></div>
                            </div>
                            <div class="noidungsach">
                                <font class="namebook">Chuyên Đề Chinh Phục Điểm Cao Hóa Học Hữu Cơ</font><br>
                                <font class="author">Trần Tiến Lực</font><br>
                                <s><font class="giagoc"></font></s>
                                <font class="giagiam">118.000 đ</font>
                            </div>
                        </div>

                        <div class="col-md-2">
                            <div class="anhsach">
                                <img width="100" src="img/sach%20trung%20hoc/img334_9.jpg" alt="Quản lý dự án lớn và nhỏ"/><div class="textbox"><input type="button" style="color: white"  class="btn text nut1" value="Đọc Thử"/><br><input type="button" style="color: white"  class="btn text nut2" value="Mua Sách"/></div>
                            </div>
                            <div class="noidungsach">
                                <font class="namebook">Những Bài Văn Kể Chuyện Lớp 3</font><br><br>
                                <font class="author">Nguyễn Thị Dung</font><br>
                                <s><font class="giagoc">25.000 đ</font></s>
                                <font class="giagiam">19.000 đ</font>
                            </div>
                        </div>

                        <div class="col-md-2">
                            <div class="anhsach">
                                <img width="100" src="img/sach%20trung%20hoc/img902_6.jpg" alt="Quản lý dự án lớn và nhỏ"/><div class="textbox"><input type="button" style="color: white"  class="btn text nut1" value="Đọc Thử"/><br><input type="button" style="color: white"  class="btn text nut2" value="Mua Sách"/></div>
                            </div>
                            <div class="noidungsach">
                                <font class="namebook">Hướng Dẫn Cách Học Và Làm Bài Tập Toán 4 (Tập 2)</font><br>
                                <font class="author">Nguyễn Văn Chi</font><br>
                                <s><font class="giagoc">53.000 đ</font></s>
                                <font class="giagiam">40.000 đ</font>
                            </div>
                        </div>

                        <div class="col-md-2">
                            <div class="anhsach">
                                <img width="100" src="img/sach%20trung%20hoc/img962_8.jpg" alt="Quản lý dự án lớn và nhỏ"/><div class="textbox"><input type="button" style="color: white"  class="btn text nut1" value="Đọc Thử"/><br><input type="button" style="color: white"  class="btn text nut2" value="Mua Sách"/></div>
                            </div>
                            <div class="noidungsach">
                                <font class="namebook">80 Đề Kiểm Tra Và Đề Thi Toán Lớp 9</font><br><br>
                                <font class="author">Nguyễn Đức Chí</font><br>
                                <s><font class="giagoc">99.000 đ</font></s>
                                <font class="giagiam">74.000 đ</font>
                            </div>
                        </div>

                        <div class="col-md-2">
                            <div class="anhsach">
                                <img width="100" src="img/sach%20trung%20hoc/vat_li_12.jpg" alt="Quản lý dự án lớn và nhỏ"/><div class="textbox"><input type="button" style="color: white"  class="btn text nut1" value="Đọc Thử"/><br><input type="button" style="color: white"  class="btn text nut2" value="Mua Sách"/></div>
                            </div>
                            <div class="noidungsach">
                                <font class="namebook">Kỹ Thuật Giải Nhanh Bài Tập Vật Lý 12 (Tập 1)</font><br>
                                <font class="author">Nhiều Tác Giả</font><br>
                                <s><font class="giagoc"></font></s>
                                <font class="giagiam">120.000 đ</font>
                            </div>
                        </div>
                    </div>

                </div>
            </div>

            <!-- Sách Thiếu nhi-->
            <div class="row">
                <div class="col-md-12 col-sm-12 col-xs-12">
                    <div>
                        <h4><a href="#">Sách Thiếu Nhi</a></h4>
                    </div>
                    <div>
                        <hr width="90%" size="2" noshade="" style="background-color: #00afe9">
                    </div>
                    <div class="row">
                        <div class="col-md-2">
                            <div class="anhsach">
                                <img width="100" src="img/sach%20thieu%20nhi/100_-_hoa_qua_rau_cu_1.jpg" alt="Quản lý dự án lớn và nhỏ"/><div class="textbox"><input type="button" style="color: white"  class="btn text nut1" value="Đọc Thử"/><br><input type="button" style="color: white"  class="btn text nut2" value="Mua Sách"/></div>
                            </div>
                            <div class="noidungsach">
                                <font class="namebook">100 Từ Mới - Hoa, Quả, Rau, Củ</font><br><br>
                                <font class="author">Nhiều Tác Giả</font><br>
                                <s><font class="giagoc">45.000 đ</font></s>
                                <font class="giagiam">34.000 đ</font>
                            </div>
                        </div>

                        <div class="col-md-2">
                            <div class="anhsach">
                                <img width="100" src="img/sach%20thieu%20nhi/118093562174.jpg" alt="Quản lý dự án lớn và nhỏ"/><div class="textbox"><input type="button" style="color: white"  class="btn text nut1" value="Đọc Thử"/><br><input type="button" style="color: white"  class="btn text nut2" value="Mua Sách"/></div>
                            </div>
                            <div class="noidungsach">
                                <font class="namebook">Bé Làm Họa Sĩ Và Làm Quen Với Môi Trường...</font><br>
                                <font class="author">Hương Giang</font><br>
                                <s><font class="giagoc"></font></s>
                                <font class="giagiam">9.000 đ</font>
                            </div>
                        </div>

                        <div class="col-md-2">
                            <div class="anhsach">
                                <img width="100" src="img/sach%20thieu%20nhi/bia_kiki_ok-1.jpg" alt="Quản lý dự án lớn và nhỏ"/><div class="textbox"><input type="button" style="color: white"  class="btn text nut1" value="Đọc Thử"/><br><input type="button" style="color: white"  class="btn text nut2" value="Mua Sách"/></div>
                            </div>
                            <div class="noidungsach">
                                <font class="namebook">Dịch Vụ Giao Hàng Của Phù Thủy Kiki (Tập 1)</font><br>
                                <font class="author">Kadono Eiko</font><br>
                                <s><font class="giagoc">83.000 đ</font></s>
                                <font class="giagiam">58.000 đ</font>
                            </div>
                        </div>

                        <div class="col-md-2">
                            <div class="anhsach">
                                <img width="100" src="img/sach%20thieu%20nhi/img494_7.jpg" alt="Quản lý dự án lớn và nhỏ"/><div class="textbox"><input type="button" style="color: white"  class="btn text nut1" value="Đọc Thử"/><br><input type="button" style="color: white"  class="btn text nut2" value="Mua Sách"/></div>
                            </div>
                            <div class="noidungsach">
                                <font class="namebook">Đôi Bàn Tay Em (Tập Thơ Thiếu Nhi)</font><br>
                                <font class="author">Lương Đình Lâm</font><br>
                                <s><font class="giagoc">42.000 đ</font></s>
                                <font class="giagiam">29.000 đ</font>
                            </div>
                        </div>

                        <div class="col-md-2">
                            <div class="anhsach">
                                <img width="100" src="img/sach%20thieu%20nhi/khoi-day-tiem-nang-cua-be-minh-tu-di-ngu-440.jpg" alt="Quản lý dự án lớn và nhỏ"/><div class="textbox"><input type="button" style="color: white"  class="btn text nut1" value="Đọc Thử"/><br><input type="button" style="color: white"  class="btn text nut2" value="Mua Sách"/></div>
                            </div>
                            <div class="noidungsach">
                                <font class="namebook">Khơi Dậy Tiềm Năng Của Bé - Mình Tự Đi Ngủ</font><br>
                                <font class="author">Bảo Đông Ni</font><br>
                                <s><font class="giagoc">15.000 đ</font></s>
                                <font class="giagiam">12.000 đ</font>
                            </div>
                        </div>

                        <div class="col-md-2">
                            <div class="anhsach">
                                <img width="100" src="img/sach%20thieu%20nhi/tranh_truyen_lich_su_viet_nam_bia_5_cuon-3.jpg" alt="Quản lý dự án lớn và nhỏ"/><div class="textbox"><input type="button" style="color: white"  class="btn text nut1" value="Đọc Thử"/><br><input type="button" style="color: white"  class="btn text nut2" value="Mua Sách"/></div>
                            </div>
                            <div class="noidungsach">
                                <font class="namebook">Truyện Tranh Lịch Sử Việt Nam - Lương Thế Vinh...</font><br>
                                <font class="author">Lê Minh Hải</font><br>
                                <s><font class="giagoc"></font></s>
                                <font class="giagiam">15.000 đ</font>
                            </div>
                        </div>
                    </div>

                </div>
            </div>

            <!-- Sách thường thức đời sống-->
            <div class="row">
                <div class="col-md-12 col-sm-12 col-xs-12">
                    <div>
                        <h4><a href="#">Sách Thường Thức - Đời Sống</a></h4>
                    </div>
                    <div>
                        <hr width="90%" size="2" noshade="" style="background-color: #00afe9">
                    </div>
                    <div class="row">
                        <div class="col-md-2">
                            <div class="anhsach">
                                <img width="100" src="img/sach%20thuong%20thuc/1655780_479032502219463_1731997281_o_2.jpg" alt="Quản lý dự án lớn và nhỏ"/><div class="textbox"><input type="button" style="color: white"  class="btn text nut1" value="Đọc Thử"/><br><input type="button" style="color: white"  class="btn text nut2" value="Mua Sách"/></div>
                            </div>
                            <div class="noidungsach">
                                <font class="namebook">Esheep Kitchen: Mật Mã Yêu Thương - Ngọt</font><br>
                                <font class="author">Phan Anh (Esheep)</font><br>
                                <s><font class="giagoc"></font></s>
                                <font class="giagiam">118.000 đ</font>
                            </div>
                        </div>

                        <div class="col-md-2">
                            <div class="anhsach">
                                <img width="100" src="img/sach%20thuong%20thuc/bia_pp_phuc_hoi_suc_khoe_theo_tu_nhien-01.jpg" alt="Quản lý dự án lớn và nhỏ"/><div class="textbox"><input type="button" style="color: white"  class="btn text nut1" value="Đọc Thử"/><br><input type="button" style="color: white"  class="btn text nut2" value="Mua Sách"/></div>
                            </div>
                            <div class="noidungsach">
                                <font class="namebook">Những Phương Thức Phục Hồi Sức Khỏe Theo...</font><br>
                                <font class="author">Nishi Katsuzo</font><br>
                                <s><font class="giagoc">70.000 đ</font></s>
                                <font class="giagiam">49.000 đ</font>
                            </div>
                        </div>

                        <div class="col-md-2">
                            <div class="anhsach">
                                <img width="100" src="img/sach%20thuong%20thuc/first-news-5543-86023-1-zoom_1_1.jpg" alt="Quản lý dự án lớn và nhỏ"/><div class="textbox"><input type="button" style="color: white"  class="btn text nut1" value="Đọc Thử"/><br><input type="button" style="color: white"  class="btn text nut2" value="Mua Sách"/></div>
                            </div>
                            <div class="noidungsach">
                                <font class="namebook">Cẩm Nang Massage Cho Bé</font><br><br>
                                <font class="author">Alan Heath</font><br>
                                <s><font class="giagoc">36.000 đ</font></s>
                                <font class="giagiam">27.000 đ</font>
                            </div>
                        </div>

                        <div class="col-md-2">
                            <div class="anhsach">
                                <img width="100" src="img/sach%20thuong%20thuc/img432_8.jpg" alt="Quản lý dự án lớn và nhỏ"/><div class="textbox"><input type="button" style="color: white"  class="btn text nut1" value="Đọc Thử"/><br><input type="button" style="color: white"  class="btn text nut2" value="Mua Sách"/></div>
                            </div>
                            <div class="noidungsach">
                                <font class="namebook">Mười Vạn Câu Hỏi Vì Sao</font><br><br>
                                <font class="author">Đức Thành</font><br>
                                <s><font class="giagoc">75.000 đ</font></s>
                                <font class="giagiam">52.500 đ</font>
                            </div>
                        </div>

                        <div class="col-md-2">
                            <div class="anhsach">
                                <img width="100" src="img/sach%20thuong%20thuc/img578_11.jpg" alt="Quản lý dự án lớn và nhỏ"/><div class="textbox"><input type="button" style="color: white"  class="btn text nut1" value="Đọc Thử"/><br><input type="button" style="color: white"  class="btn text nut2" value="Mua Sách"/></div>
                            </div>
                            <div class="noidungsach">
                                <font class="namebook">Món Chay Ngon</font><br><br><br>
                                <font class="author">Tuệ Thiên</font><br>
                                <s><font class="giagoc">35.000 đ</font></s>
                                <font class="giagiam">25.000 đ</font>
                            </div>
                        </div>

                        <div class="col-md-2">
                            <div class="anhsach">
                                <img width="100" src="img/sach%20thuong%20thuc/img839_1_6.jpg" alt="Quản lý dự án lớn và nhỏ"/><div class="textbox"><input type="button" style="color: white"  class="btn text nut1" value="Đọc Thử"/><br><input type="button" style="color: white"  class="btn text nut2" value="Mua Sách"/></div>
                                <!--<div class="textbox">-->
                                    <!--<input type="button" style="color: white"  class="btn text nut1" value="Đọc Thử"/><br>-->
                                    <!--<input type="button" style="color: white"  class="btn text nut2" value="Mua Sách"/>-->
                                <!--</div>-->
                            </div>
                            <div class="noidungsach">
                                <font class="namebook">Suối Nguồn Tươi Trẻ</font><br><br>
                                <font class="author">Peter Kelder</font><br>
                                <s><font class="giagoc">42.000 đ</font></s>
                                <font class="giagiam">32.000 đ</font>
                            </div>
                        </div>
                    </div>

                </div>
            </div>

        </div>
        <!-- End of liệt kê sách-->


    </div>
    <!-- End of content2 (best seller và liệt kê sách)-->


    <!-- Video - Slidebook-->
    <div class="row" id="footer1">

        <!-- video-->
        <div class="col-md-3 col-sm-3 col-xs-3" id="video">
            <div>
                <h4><a href="#">Video Giới Thiệu Sách</a></h4>
            </div>
            <div>
                <hr width="90%" size="2" noshade="" style="background-color: #00afe9">
            </div>
            <div>
                <iframe width="100%" src="https://www.youtube.com/embed/qPdTjogmL-Y" frameborder="0" allowfullscreen></iframe>
            </div>
            <br>
            <script src="https://apis.google.com/js/platform.js"></script>

            <div class="g-ytsubscribe" data-channelid="UC4OQnhncwUf06khmIZEvUkw" data-layout="full" data-count="default"></div>


        </div>

        <!-- slide chạy-->
        <div class="col-md-9" id="slidebook">
            <!-- trên cái slide chạy-->

                <div class="row">
                    <div class="col-md-12">
                        <div>
                            <h4><a href="#">Có Thể Bạn Đang Cần</a></h4>
                        </div>
                        <div>
                            <hr width="90%" size="2" noshade="" style="background-color: #00afe9">
                        </div>
                        <div class="row">
                            <div class="col-md-2">
                                <div class="anhsach">
                                    <img width="100" src="img/sach%20kinh%20te/13573_19961.jpg" alt="Quản lý dự án lớn và nhỏ"/><div class="textbox"><input type="button" style="color: white"  class="btn text nut1" value="Đọc Thử"/><br><input type="button" style="color: white"  class="btn text nut2" value="Mua Sách"/></div>
                                </div>
                                <div class="noidungsach">
                                    <font class="namebook">Quản Lý Dự Án Lớn Và Nhỏ</font><br><br>
                                    <font class="author">First News</font><br>
                                    <s><font class="giagoc">52.000 đ</font></s>
                                    <font class="giagiam">42.000 đ</font>
                                </div>
                            </div>

                            <div class="col-md-2">
                                <div class="anhsach">
                                    <img width="100" src="img/sach%20kinh%20te/49597_nghethuatgiaotiep.jpg" alt="Quản lý dự án lớn và nhỏ"/><div class="textbox"><input type="button" style="color: white"  class="btn text nut1" value="Đọc Thử"/><br><input type="button" style="color: white"  class="btn text nut2" value="Mua Sách"/></div>
                                </div>
                                <div class="noidungsach">
                                    <font class="namebook">Nghệ Thuật Giao Tiếp Để Thành Công</font><br>
                                    <font class="author">The Windy</font><br>
                                    <s><font class="giagoc">90.000 đ</font></s>
                                    <font class="giagiam">63.000 đ</font>
                                </div>
                            </div>

                            <div class="col-md-2">
                                <div class="anhsach">
                                    <img width="100" src="img/sach%20kinh%20te/146232_p34348mxx216.jpg" alt="Quản lý dự án lớn và nhỏ"/><div class="textbox"><input type="button" style="color: white"  class="btn text nut1" value="Đọc Thử"/><br><input type="button" style="color: white"  class="btn text nut2" value="Mua Sách"/></div>
                                </div>
                                <div class="noidungsach">
                                    <font class="namebook">Chiến Lược Marketing Tổng Thể Toàn Cầu</font><br>
                                    <font class="author">Nguyễn Văn Dung</font><br>
                                    <s><font class="giagoc">40.000 đ</font></s>
                                    <font class="giagiam">38.000 đ</font>
                                </div>
                            </div>

                            <div class="col-md-2">
                                <div class="anhsach">
                                    <img width="100" src="img/sach%20kinh%20te/155967_p41906mhuanluyenkinangbanhang.jpg" alt="Quản lý dự án lớn và nhỏ"/><div class="textbox"><input type="button" style="color: white"  class="btn text nut1" value="Đọc Thử"/><br><input type="button" style="color: white"  class="btn text nut2" value="Mua Sách"/></div>
                                </div>
                                <div class="noidungsach">
                                    <font class="namebook">Huấn Luyện Kĩ Năng Bán Hàng</font><br><br>
                                    <font class="author">Nhiều Tác Giả</font><br>
                                    <s><font class="giagoc">59.000 đ</font></s>
                                    <font class="giagiam">17.700 đ</font>
                                </div>
                            </div>

                            <div class="col-md-2">
                                <div class="anhsach">
                                    <img width="100" src="img/sach%20kinh%20te/204132_p67411mcauchuyencuatoi.jpg" alt="Quản lý dự án lớn và nhỏ"/><div class="textbox"><input type="button" style="color: white"  class="btn text nut1" value="Đọc Thử"/><br><input type="button" style="color: white"  class="btn text nut2" value="Mua Sách"/></div>
                                </div>
                                <div class="noidungsach">
                                    <font class="namebook">Câu Chuyện Của Tôi Trong Ngành Quảng Cáo</font><br>
                                    <font class="author">Claude C. Hopkins</font><br>
                                    <s><font class="giagoc">129.000 đ</font></s>
                                    <font class="giagiam">97.000 đ</font>
                                </div>
                            </div>

                            <div class="col-md-2">
                                <div class="anhsach">
                                    <img width="100" src="img/sach%20kinh%20te/bia_kinh_te_out-01.jpg" alt="Quản lý dự án lớn và nhỏ"/><div class="textbox"><input type="button" style="color: white"  class="btn text nut1" value="Đọc Thử"/><br><input type="button" style="color: white"  class="btn text nut2" value="Mua Sách"/></div>
                                </div>
                                <div class="noidungsach">
                                    <font class="namebook">Góc Nhìn Alan: Kinh Tế</font><br><br>
                                    <font class="author">Alan Phan</font><br>
                                    <s><font class="giagoc">75.000 đ</font></s>
                                    <font class="giagiam">60.000 đ</font>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>

        </div>
    </div>

        <br><br><br>





    <!-- End of Page-->
    <div class="row" id="footer2">
        <div class="col-md-3 col-sm-3 col-xs-3" id="aboutme">
                <h4>VỀ CÔNG TY</h4>
                <a href="#">   <p>Giới Thiệu Công Ty</p></a>
                <a href="#">   <p>Tuyển Dụng</p></a>
                <a href="#">   <p>Chương Trình Đại Lý</p></a>
                <a href="#">   <p>Chính Sách Bảo Mật</p></a>
                <a href="chinh%20sach%20doi%20tra.html">   <p>Chính Sách Đổi Trả</p></a>
        </div>
        <div class="col-md-3 col-sm-3 col-xs-3" id="help">
                <h4>TRỢ GIÚP</h4>
                <a href="#">  <p>Quy Định Sử Dụng</p></a>
                <a href="#">  <p>Hướng Dẫn Mua Hàng</p></a>
                <a href="#">  <p>Phương Thức Thanh Toán</p></a>
                <a href="#">  <p>Bảng Giá Vận Chuyển</p></a>
                <a href="#">  <p>Bọc Sách Bằng Bìa Plastic</p></a>
        </div>
        <div class="col-md-3 col-sm-3 col-xs-3" id="keepupwith">
            <h4>FACEBOOK</h4>
            <div id="fb-root"></div>
            <script>(function(d, s, id) {
                var js, fjs = d.getElementsByTagName(s)[0];
                if (d.getElementById(id)) return;
                js = d.createElement(s); js.id = id;
                js.src = "//connect.facebook.net/vi_VN/sdk.js#xfbml=1&version=v2.5";
                fjs.parentNode.insertBefore(js, fjs);
            }(document, 'script', 'facebook-jssdk'));</script>

            <div class="fb-page" data-href="https://www.facebook.com/mitibookonline/?skip_nax_wizard=true" data-small-header="false" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true"><div class="fb-xfbml-parse-ignore"><blockquote cite="https://www.facebook.com/mitibookonline/?skip_nax_wizard=true"><a href="https://www.facebook.com/mitibookonline/?skip_nax_wizard=true">Mitibook</a></blockquote></div></div>

        </div>
        <div class="col-md-3 col-sm-3 col-xs-3" id="creditcard">


            <div class="newsletter">
                <form action="http://tiki.us1.list-manage.com/subscribe?u=f84bf8630f9ae8fa4881df494&amp;id=b92ac69021" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" target="_blank" novalidate="">
                    <h4 class="js-newsletter-toggle">
                        Cập nhật khuyến mãi
                        <a class="toggle">
                            <i class="fa fa-angle-down"></i>
                            <i class="fa fa-envelope-o"></i>
                        </a>
                    </h4>
                    <div class="form-group">
                        <input style="width: 100%" type="email" placeholder="Email của bạn" required="" name="EMAIL" class="form-control" id="mce-EMAIL">
                        <button style="width: 100%" class="form-control" id="mc-embedded-subscribe" name="subscribe" type="submit">
                            Đăng ký <i class="fa fa-angle-right"></i>
                        </button>
                    </div>
                </form>
            </div>


            <!-- ảnh lên đầu trang-->
            <div id="goTop">
                <img width="55" style="margin-top: 40px;margin-left: 140px" src="img/gotop.PNG"/>
            </div>

        </div>
    </div>

</div>

<!--menu-->
<script type="text/javascript">
    var MenuBar1 = new Spry.Widget.MenuBar("MenuBar1", {imgRight:"SpryAssets/SpryMenuBarRightHover.gif"});
</script>


<!--Lên đầu trang-->
<script type="text/javascript">
    $(function(){
        $(window).scroll(function () {
            if ($(this).scrollTop() > 100) $('#goTop').fadeIn();
            else $('#goTop').fadeOut();
        });
        $('#goTop').click(function () {
            $('body,html').animate({scrollTop: 0}, 'slow');
        });
    });
</script>


</body>
</html>
<!--Start of Zopim Live Chat Script-->
<script type="text/javascript">
    window.$zopim||(function(d,s){var z=$zopim=function(c){z._.push(c)},$=z.s=
            d.createElement(s),e=d.getElementsByTagName(s)[0];z.set=function(o){z.set.
            _.push(o)};z._=[];z.set._=[];$.async=!0;$.setAttribute("charset","utf-8");
        $.src="//v2.zopim.com/?3jtL68g2RW7OQBvG79bJb5eNzmIlYhOD";z.t=+new Date;$.
                type="text/javascript";e.parentNode.insertBefore($,e)})(document,"script");
</script>
<!--End of Zopim Live Chat Script-->
<script src="js/shop.js"></script>




























