
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title></title>
    <link href="css/bootstrap.css" rel="stylesheet"/>
    <link href="bootrap.css" rel="stylesheet"/>
    <link href="app.css" rel="stylesheet"/>
    <script src="js/bootstrap.js" type="text/javascript"></script>
</head>
<body>
<?php
 header('Content-Type: text/html; charset=UTF-8');
if(isset($_POST['ok']))
{
    $user=$_POST['username'];
    $pass=$_POST['pass'];
    $date=$_POST['date'];
    $email=$_POST['email'];

  if(!$user || !$pass  || !$date || !$email)
    {
        echo "<p style='text-align:center;'> Vui lòng nhập đầy đủ thông tin.<a href='javascript: history.go(-1)'>Trở lại</a></p> ";
        exit; 
    } 
    //$pass=md5($pass);
    include("connect.php");
    $query=mysql_query("SELECT username FROM member WHERE username='$user'");
    //kiem tra user ton tai chua
    if(mysql_num_rows($query)>0)
    {
    
        header("location:register.php");
   
    }
    else
    //kiem tra dinh dang email
    if (!eregi("^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,4})$", $email))
    {
        echo "Email này không hợp lệ. Vui long nhập email khác. <a href='javascript: history.go(-1)'>Trở lại</a>";
        exit;
    }
    //kiem tra email ton tai chua
      $query2=mysql_query("SELECT email FROM member WHERE email='$email'");
       if(mysql_num_rows($query2)!="")
    {
     header("location:register.php");
   
    }
    else
    
    if($user && $email && $pass && $date)
    {
       $query3=mysql_query("INSERT INTO member(username,email,password,ngaysinh) VALUE ('$user','$email','$pass','$date')");
    }
    if($query3)
        {
           echo "<p style='text-align:center;'>Quá trình đăng ký thành công. <a href='index.php'>Về trang chủ</a></p>";
        }
    else
        {
           echo "Có lỗi xảy ra trong quá trình đăng ký. <a href='dangky.php'>Thử lại</a>";  
        } 
    
   
       
    


}





?>
<section id="main">
    <div class="container">

        <div class="row">
            <div class="col-md-6 col-md-offset-4">
                <div class="panel panel-kim">
                 <div class="panel-heading">
                 <h3>Đăng ký thành viên</h3> 
                 <small> Đăng ký nhanh bằng tài khoản</small><br/>
                  <a href="http://www.facebook.com.vn"><img  src="img/facebook.jpg" width="130px"/></a> <a href="https://accounts.google.com"><img src="img/google.jpg" width="130px"/></a> 
                
                 </div>
                    <div class="dk">
                        <small>Đăng ký thành viên <span style="color: #0080FF;">mitibook.vn</span></small>
                    </div>
                    <div class="panel-body">
                        <form  id="form-login" method="post" action="register.php">
                            <div id="error">

                            </div>
                            <div class="form-group ">
                                <label for="username"> Email</label>
                                <input type="email" class="form-control" name="email" placeholder="email"/>
                            </div>
                            <div class="form-group ">
                             <label> Tài khoản</label>
                               <input  type="text" class="form-control" name="username" placeholder="Tài khoản"/>
                                <div></div>
                             </div>
                            <div class="form-group ">
                                <label for="password"> Mật khẩu</label>
                                <input type="password" class="form-control" name="pass" placeholder="Mật khẩu"/>
                            </div>
                             <div class="form-group ">
                             <label>Ngày sinh</label>
                              <input type="date" class="form-control" name="date"  placeholder="Ngày sinh"/>
                               </div>
                             
                             <div class="row">
                                <div class="col-md-4">
                                    <button type="submit"  name="ok"class="btn btn-warning btn-block"> Đăng ký</button>
                                </div>
                                <div class="col-md-4">
                                    <button type="reset"  name="re"class="btn btn-warning btn-block"> Làm lại</button>
                                </div><br />

                            </div>
                            <div class="row dieukhoan">
                            <div class="col-md-12">
                               <small> Nhấp chọn "Đăng ký", tôi đã đọc và đồng ý với các <span style="color: #0080FF;"> Quy định bảo mật</span> và <br/><span style="color: #0080FF;">Thỏa thuận sử dụng</span></small>
                            </div>
                            </div>
                            <div class="row">
                            <div class="col-md-12" style="text-align: center; margin-top: 5px;">
                             <small> Bạn là thành viên mitibook.vn? <span style="color: #0080FF;"><a href="login.php">Đăng nhập </a></span></small>
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

































