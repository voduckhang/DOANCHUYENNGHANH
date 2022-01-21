<?php session_start();
  include './Layout/sql-controller.php';
  if (isset($_POST['submit'])) {
      $email = $_POST["txt_email"];
      $password =md5($_POST["txt_password"]);
      if (isset($email) && isset($password)) {
          if (isset($email) == "" or isset($password) == "") {
              echo "<center><h1>EMAIL OR PASSWORD CAN NOT BE EMPTY</h1></center>";
          } else {
              $query = $objPDO->prepare("SELECT * FROM khachhang WHERE email='$email' AND matkhau='$password' ");
              $query->execute();
              $control = $query->fetchAll(PDO::FETCH_OBJ);
         
              $row = $query->rowCount();
              if ($row > 0) {           
                  $_SESSION["txt_email"] = $email;
                 
                  header('location: index.php');
              }
              echo "<center><h1>INCORRECT PASSWORD OR EMAIL</h1></center>";
          }
      }
  }
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <?php include 'Layout/head_user.php'; ?>
    <link href="css/style.css" rel="stylesheet">
</head>

<body>
    <!-- HEADER -->
    <?php include 'Layout/header_user.php'; ?>
    <!-- /HEADER -->

    <!-- NAVIGATION -->
    <?php include 'Layout/menu_user.php'; ?>
    <!-- /NAVIGATION -->

    <!-- BREADCRUMB -->
    <div id="breadcrumb" class="section">
        <!-- container -->
        <div class="container">
            <!-- row -->
            <div class="row">
                <div class="col-md-12">
                    <h3 class="breadcrumb-header">ĐĂNG NHẬP</h3>
                    <ul class="breadcrumb-tree">
                        <li><a href="#">Home</a></li>
                        <li class="active">Đăng nhập</li>
                    </ul>
                </div>
            </div>

            <div class="row" style="margin-top: 10px;">
                <div class="login-form">                  
                        <form method="POST" enctype="multipart/form-data">
                        <div class="form-group">
                            <label>Tài khoản</label>
                            <input type="email" class="form-control" name="txt_email">
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
                        <button type="submit" name="submit" value="login" class="btn btn-success btn-flat m-b-30 m-t-30">Sign in</button>
                    </form>
                </div>
            </div>
            <!-- /row -->
        </div>
        <!-- /container -->
    </div>
    <!-- /BREADCRUMB -->

    <!-- SECTION -->
    <div class="section">
        <!-- container -->
        <div class="container">
            <!-- row -->
            <div class="row">
            </div>
            <!-- /row -->
        </div>
        <!-- /container -->
    </div>
    <!-- /SECTION -->

    <!-- NEWSLETTER -->
    <div id="newsletter" class="section">
        <!-- container -->
        <div class="container">
            <!-- row -->
            <div class="row">
                <div class="col-md-12">
                    <div class="newsletter">
                        <p>Sign Up for the <strong>NEWSLETTER</strong></p>
                        <form>
                            <input class="input" type="email" placeholder="Enter Your Email">
                            <button class="newsletter-btn"><i class="fa fa-envelope"></i> Subscribe</button>
                        </form>
                        <ul class="newsletter-follow">
                            <li>
                                <a href="#"><i class="fa fa-facebook"></i></a>
                            </li>
                            <li>
                                <a href="#"><i class="fa fa-twitter"></i></a>
                            </li>
                            <li>
                                <a href="#"><i class="fa fa-instagram"></i></a>
                            </li>
                            <li>
                                <a href="#"><i class="fa fa-pinterest"></i></a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <!-- /row -->
        </div>
        <!-- /container -->
    </div>
    <!-- /NEWSLETTER -->

    <!-- FOOTER -->
    <?php include 'Layout/footer_user.php'; ?>
    <!-- /FOOTER -->

    <!-- jQuery Plugins -->
    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/slick.min.js"></script>
    <script src="js/nouislider.min.js"></script>
    <script src="js/jquery.zoom.min.js"></script>
    <script src="js/main.js"></script>

</body>

</html>