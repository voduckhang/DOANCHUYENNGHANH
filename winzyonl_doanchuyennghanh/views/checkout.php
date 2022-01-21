<?php
session_start();
include_once './models/dbhelper.php';
if(isset($_SESSION['email'])){
    $email=$_SESSION['email'];
    $sql= 'select * from khachhang where email = "'.$email.'"';
    $row = executeSingleResult($sql);
}
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
                <?php if(isset($_SESSION['email'])){?>
                <!-- row -->
                <form action="controller/dathangcontroller.php" method="POST" accept-charset="utf-8">
                <div class="row">

                    <div class="col-md-7">
                        <!-- Billing Details -->
                        <div class="billing-details">
                            <div class="section-title">
                                <h3 class="title">Thông tin nhận hàng</h3>
                            </div>
                            <div class="form-group">
                                <input class="input" type="text" name="txt_ten" value="<?=$row['tenkh']?>" placeholder="Họ tên khách hàng">
                            </div>
                            <div class="form-group">
                                <input class="input" type="text" name="txt_diachi" value="<?=$row['diachi']?>" placeholder="Địa chỉ">
                            </div>
                            <div class="form-group">
                                <input class="input" type="tel" name="txt_sdt" value="<?=$row['sodienthoai']?>" placeholder="Số điện thoại">
                            </div>
                        </div>
                        <!-- /Billing Details -->

                        <!-- Shiping Details -->
                        
                        <!-- /Shiping Details -->

                        <!-- Order notes -->
                
                        <!-- /Order notes -->
                    </div>

                    <!-- Order Details -->
                    <div class="col-md-5 order-details">
                        <div class="section-title text-center">
                            <h3 class="title">Hoá đơn</h3>
                        </div>
                        <div class="order-summary">
                            <div class="order-col">
                                <div><strong>Sản phẩm</strong></div>
                                <div><strong>Tổng cộng</strong></div>
                            </div>
                            <div class="order-products">
                                 <?php foreach ($cart as $key => $value): ?>
                                <div class="order-col">
                                    <div><?=$value['quantity']?>x <?=$value['tensp']?></div>
                                    <div><?=vnd($value['gia']*$value['quantity'])?> VNĐ</div>
                                </div>
                                <?php endforeach ?>
                            </div>
                            <div class="order-col">
                                <div>Phí vận chuyển</div>
                                <div><strong>Miễn phí</strong></div>
                            </div>
                            <div class="order-col">
                                <div><strong>Tổng cộng</strong></div>
                                <input type="hidden" name="tongtien" value="<?php echo vnd(total_price($cart))?>">
                                <div><strong class="order-total"><?=vnd(total_price($cart))?> VNĐ</strong></div>
                            </div>
                        </div>
                        <div class="payment-method">
                            <div class="input-radio">
                                <input type="radio" name="payment" value="Internet Banking" id="payment-1">
                                <label for="payment-1">
                                    <span></span>
                                    Interner Banking
                                </label>
                            </div>
                            <div class="input-radio">
                                <input type="radio" name="payment" value="Thanh toán khi nhận hàng" id="payment-2">
                                <label for="payment-2">
                                    <span></span>
                                    Thanh toán khi nhận hàng
                                </label>
                            </div>
                            <div class="input-radio">
                                <input type="radio" name="payment" value="Paypal" id="payment-3">
                                <label for="payment-3">
                                    <span></span>
                                    Paypal
                                </label>
                            </div>
                        </div>
                        <button type="submit" name="btn_xuly" class="primary-btn order-submit">Đặt hàng</button>
                    </div>
                    <!-- /Order Details -->
                </div>
            </form>
                <!-- /row -->
            </div>
            <?php }else {?>
                <div class="row">
        <div class="alert alert-danger">
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
            <strong>Vui lòng đăng nhập để mua hàng</strong> <a href="login.php" style="color:blue;">Đăng nhập</a>
        </div>
        </div>
    <?php }?>
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
