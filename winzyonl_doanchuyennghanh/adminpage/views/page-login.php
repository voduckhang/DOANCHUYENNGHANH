<?php
// session_start();
// include 'layout/sql-controller.php';
// if(isset($_POST["submit"])){
//     if($_POST["txt_email"]=="" or $_POST["txt_password"]==""){
//         echo "<center><h1>EMAIL OR PASSWORD CAN NOT BE EMPTY</h1></center>";
//     }else{
//         $email=trim($_POST["txt_email"]);
//         $password=strip_tags(trim($_POST["txt_password"]));
//         $query=$objPDO->prepare("SELECT * FROM khachhang WHERE email=? AND matkhau=?");
//         $query->execute(array($email,$password));
//         $control=$query->fetchAll(PDO::FETCH_OBJ);
//         if($control >0){
//             $_SESSION["txt_email"]=$email;
//             header('location: index.php');
//         }
//         echo "<center><h1>INCORRECT PASSWORD OR EMAIL</h1></center>";
//     }
// }

?>
<!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!-->
<html class="no-js" lang="">
<!--<![endif]-->

<head>
    <?php include "layout/headerpage.php"; ?>

<body style="background-color:#f0f5f5;">

    <div class="sufee-login d-flex align-content-center flex-wrap">
        <div class="container">
            <div class="login-content">
                <div class="form-group">
                    <a href="index.html">
                        <img class="align-content" src="images/logo.png" alt="">
                    </a>
                </div>


                <div class="login-form">
                    <form action="../controllers/logIn_Controller.php" method="POST" enctype="multipart/form-data">
                    
                        <div class="form-group">
                            <label>Tên người dùng hoặc Địa chỉ Email</label>
                            <input type="text" class="form-control" name="txt_email">
                        </div>
                        <div class="form-group">
                            <label>Mật khẩu</label>
                            <input type="password" class="form-control" name="txt_password">
                        </div>
                        <div class="checkbox">
                            <label>
                                <input type="checkbox"> Ghi nhớ
                            </label>
                            <label class="pull-right">
                                <a href="#">Bạn quên mật khẩu?</a>
                            </label>

                        </div>
                        <button type="submit" class="btn btn-success btn-flat m-b-30 m-t-30" name="submit" value="Đăng nhập">Sign in</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/jquery@2.2.4/dist/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.4/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/js/bootstrap.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/jquery-match-height@0.7.2/dist/jquery.matchHeight.min.js"></script>
    <script src="assets/js/main.js"></script>

</body>

</html>