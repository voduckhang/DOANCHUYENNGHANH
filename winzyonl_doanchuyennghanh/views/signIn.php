<!DOCTYPE html>
<html lang="en">

<head>
    <?php include 'layout/head_user.php'; ?>
    <link href="css/style.css" rel="stylesheet">
    <?php
    include './Layout/sql-controller.php';

    if (isset($_POST['submit'])) {
        $id_user = $_POST['id_user'];
        $password_user =md5($_POST['password_user']);
        $email_user = $_POST['email_user'];
        $adrress_user = $_POST['adrress_user'];
        $phone_number = $_POST['phone_number'];
        $name_user = $_POST['name_user'];
        if (
            isset($id_user) && isset($password_user) && isset($email_user)
            && isset($adrress_user) && isset($phone_number) && isset($name_user)
        ) {
            echo'<script>Bạn đã đăng ký thành công</script> ';
            $sql =$objPDO->prepare("INSERT INTO khachhang(makh,tenkh,diachi,sodienthoai,email,matkhau)
        VALUES ('$id_user','$name_user','$adrress_user','$phone_number','$email_user','$password_user')" );
        $sql->execute();
        
        header('location: ./index.php?controller=logInUser');
 
        }else{
            echo' <center class="alert alert-danger">Vui lòng điền đầy đủ thông tin</center>';
        }
    }
    ?>
</head>

<body>
    <!-- HEADER -->
    <?php include 'layout/header_user.php'; ?>
    <!-- /HEADER -->

    <!-- NAVIGATION -->
    <?php include 'layout/menu_user.php'; ?>
    <!-- /NAVIGATION -->

    <!-- BREADCRUMB -->
    <div id="breadcrumb" class="section">
        <!-- container -->
        <div class="container">
            <!-- row -->
            <div class="row">
                <div class="col-md-12">
                    <h3 class="breadcrumb-header">ĐĂNG KÝ</h3>
                    <ul class="breadcrumb-tree">
                        <li><a href="#">Home</a></li>
                        <li class="active">Đăng ký</li>
                    </ul>
                </div>
            </div>
            <div class="login-form" style="margin-top: 20px;">
                <form method="post">

                    <div class="form-group">
                        <label>name ID</label>
                        <input type="text" class="form-control" name="id_user" required="required">
                    </div>
                    <div class="form-group">
                        <label>User Name</label>
                        <input type="text" class="form-control" name="name_user" required="required">
                    </div>
                    <div class="form-group">
                        <label>Address</label>
                        <input type="text" class="form-control" name="adrress_user" required="required">
                    </div>
                    <div class="form-group">
                        <label>Number Phone</label>
                        <input type="number" class="form-control" name="phone_number" required="required">
                    </div>

                    <div class="form-group">
                        <label>Email address</label>
                        <input type="email" class="form-control" name="email_user" required="required">
                    </div>
                    <div class="form-group">
                        <label>Password</label>
                        <input type="password" class="form-control" name="password_user" required="required">
                    </div>
                    <div class="checkbox">
                        <label>
                            <input type="checkbox"> Agree the terms and policy
                        </label>
                    </div>
                    <button type="submit" class="btn btn-primary btn-flat m-b-30 m-t-30" name="submit">Register</button>

                    <div class="register-link m-t-15 text-center">
                        <p>Already have account ? <a href="#"> Sign in</a></p>
                    </div>
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
    <?php include 'layout/footer_user.php'; ?>
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