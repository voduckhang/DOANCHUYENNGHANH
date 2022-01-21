<?php
session_start();
include_once '../models/dbhelper.php';
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <?php include 'Layout/head_user.php'; ?>

    </head>
    <body>
        <!-- HEADER -->
        <?php include 'Layout/header_user.php'; ?>
        <!-- /HEADER -->

        <!-- NAVIGATION -->
        <?php include 'Layout/menu_user.php'; ?>
        <!-- /NAVIGATION -->

        <!-- BREADCRUMB -->
        <!-- /BREADCRUMB -->

        <!-- SECTION -->
        <div class="section">
            <!-- container -->
            <div class="container">
                <h2 class="section-title position-relative text-uppercase mx-xl-5 mb-4"><span class="bg-secondary pr-3">Quý khách đã đặt hàng thành công!</span></h2>
                <!-- row -->
                <div class="row">
                    <div class="col-lg-12 mb-5">
                <div class="contact-form bg-light p-30">
                    <div id="success"></div>
                    <ul>
                        <li>Sản phẩm của Quý khách sẽ được chuyển đến Địa chỉ có trong phần Thông tin khách hàng của chúng tôi sau thời gian 2 đến 3 ngày, tính từ thời điểm này</li>
                        <li>Nhân viên giao hàng sẽ liên hệ với Quý khách qua số điện thoại trước khi giao hàng 24 tiếng</li>
                        <li style="list-style-type: none; font-weight: bold;">Cảm ơn Quý khách đã sử dụng sản phẩm của công ty chúng tôi!</li>
                    </ul>
                </div>
            </div>
                </div>
                <!-- /row -->
            </div>
            <!-- /container -->
        </div>
        <!-- /SECTION -->

        <!-- NEWSLETTER -->
        
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
