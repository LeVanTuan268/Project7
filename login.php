<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8"/>
    <title></title>
    <link href="css/bootstrap.css" rel="stylesheet"/>
    <link href="bootrap.css" rel="stylesheet"/>
    <link href="app.css" rel="stylesheet"/>
    <script src="js/bootstrap.js" type="text/javascript"></script>
</head>
<body>
<?php
//khai bao session
session_start();
//Khai báo utf-8 để hiển thị được tiếng việt
header('Content-Type: text/html; charset=UTF-8');
if(isset($_POST['dangnhap']))
{
    include('connect.php');
    
    //lay du lieu vao
    $user=$_POST['user'];
    $pass=$_POST['password'];
    //kiem tra da nhap du ten dang nhap va mat khau chua
    if(!$user || !$pass)
    {
         echo "Vui lòng nhập đầy đủ tài khoản và mật khẩu. <a href='javascript: history.go(-1)'>Trở lại</a>";
         exit;
    }
    //$pass=md5($pass);
    //kiem tra email co ton tai khong
    $query=mysql_query("SELECT username,password FROM member WHERE username='$user'");
    if(mysql_num_rows($query)==0)
       {
         echo "<p style='text-align:center;'>Tài khoản đăng nhập này không tồn tại. Vui lòng kiểm tra lại. <a href='javascript: history.go(-1)'>Trở lại</a></p>";
        exit;
       }
     //Lấy mật khẩu trong database ra
    $row = mysql_fetch_array($query);
     
    //So sánh 2 mật khẩu có trùng khớp hay không
    if ($pass != $row['password']) 
    {
        echo "<p style='text-align:center;'>Mật khẩu không đúng. Vui lòng nhập lại. <a href='javascript: history.go(-1)'>Trở lại</a> </p>";
        exit;
    }
         //Lưu tên đăng nhập
    $_SESSION['username'] = $user;
    echo " <p style='text-align:center;'> Xin chào " . $user . ". Bạn đã đăng nhập thành công. <a href='index.php'>Về trang chủ</a></p>";
    die();
        
    
   
}



?>
<section id="main">
    <div class="container">
        <div class="row">
            <div class="col-md-5 col-md-offset-4">
                <div class="panel panel-kim">
                 <div class="panel-heading">
                 <h3>Đăng Nhập</h3> 
                 <small>Đang nhập hoặc đăng ký nhanh bằng tài khoản</small><br/>
                  <a href="http://www.facebook.com.vn"><img  src="img/facebook.jpg" width="130px"/></a> <a href="https://accounts.google.com"><img src="img/google.jpg" width="130px"/></a> 
                
                 </div>
                    <div class="dk">
                        <small>Đăng nhập bằng tài khoản <span style="color: #0080FF;">mitibook.vn</span></small>
                    </div>
                    <div class="panel-body">
                        <form  id="form-login" method="post" action="login.php">
                            <div class="form-group ">
                                <label for="username"> Tài khoản</label>
                                <input type="text" class="form-control" name="user" placeholder="Tài khoản"/>
                            </div>
                            <div class="form-group ">
                                <label for="password"> Mật khẩu</label>
                                <input type="password" class="form-control" name="password" placeholder="Mật khẩu"/>
                            </div>
                             <div class="row">
                                <div class="col-md-4">
                                    <button type="submit"  name="dangnhap"class="btn btn-warning btn-block"> Đăng nhập</button>
                                </div>
                                <div class="col-md-4">
                                    <button type="reset"  name="re"class="btn btn-warning btn-block"> Làm lại</button>
                                </div><br />

                            </div>
                            <div class="row dieukhoan">
                            <div class="col-md-12">
                               <span style="color: #0080FF;float:right"> Quên mật khẩu?</span> 
                            </div>
                            </div>
                            <div class="row">
                            <div class="col-md-12" style="text-align: center; margin-top: 5px;">
                             <small> Bạn chưa có tài khoản? <span style="color: #0080FF;"> <a href="register.php">Đăng ký ngay? </a></span></small>
                            </div>
                            </div>

                        </form>

                    </div>
                </div>
            </div>
        </div><!--/.row-->
    </div><!--/.container-->
</section> <!--/#main-->

</body>



</html>
