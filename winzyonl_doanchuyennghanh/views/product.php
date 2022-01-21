<?php
session_start();
include "./Layout/sql-controller.php" ?>;

<?php
$madm = isset($_GET['id']) ? $_GET['id'] : '';
if ($madm != '') {
    $sql = "SELECT * FROM `sanpham` WHERE `masanpham` = :id";

    $q = $objPDO->prepare($sql);
    $q->execute(array(':id' => $madm));
    $done = $q->fetch();
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
    <div id="breadcrumb" class="section">
        <!-- container -->
        <div class="container">
            <!-- row -->
            <div class="row">
                <div class="col-md-12">
                    <ul class="breadcrumb-tree">
                        <li><a href="#">Home</a></li>
                        <li><a href="#">All Categories</a></li>
                        <li><a href="#">Accessories</a></li>
                        <li><a href="#">Headphones</a></li>
                        <li class="active">Product</li>
                    </ul>
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
                <form method="post" action="../index.php?controller=giohang&id=<?php echo $done['masanpham']; ?>" enctype="multipart/form-data"></form>
                <div>
                    <!-- Product main img -->
                    <div class="col-md-5 col-md-push-2">
                        <div id="product-main-img">
                            <div class="product-preview">
                                <img src="../../winzyonl_doanchuyennghanh/adminpage/views/images/<?php echo $done['hinhanh'] ?>">
                            </div>
                        </div>
                    </div>
                    <!-- /Product main img -->

                    <!-- Product thumb imgs -->
                    <div class="col-md-2  col-md-pull-5">
                        <div id="product-imgs">
                            <div class="product-preview">
                                <img src="../../winzyonl_doanchuyennghanh/adminpage/views/images/<?php echo $done['hinhanh'] ?>">

                            </div>
                        </div>
                    </div>
                    <!-- /Product thumb imgs -->

                    <!-- Product details -->
                    <div class="col-md-5">
                        <div class="product-details">
                            <h2 class="product-name"><?php echo $done["tensanpham"] ?></h2>
                            <div>
                                <div class="product-rating">
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star-o"></i>
                                </div>
                                <a class="review-link" href="#">10 Review(s) | Add your review</a>
                            </div>
                            <div>
                                <h3 class="product-price"><?php echo number_format($done['giatien'], 0, '', '.') . " VNĐ"; ?></h3>
                                <input type="hidden" name="name" value="<?php echo $done["tensanpham"] ?>">
                                <input type="hidden" name="price" value="<?php echo $done["giatien"] ?>">
                                <span class="product-available">In Stock</span>
                            </div>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>



                            <div class="add-to-cart">        
                                <input type="text" name="quantity" value="1">

                                <!-- <button type="submit" class="add-to-cart-btn" name="add" value="submit"><i class="fa fa-shopping-cart"></i> add to cart</button> -->
                            <input type="submit" name="add_to_cart" class="btn btn-success" value="ADD TO CART">  
                            </div>

                        </div>

                    </div>

                </div>

                </form>
                <!-- /Product details -->

                <!-- Product tab -->
                <div class="col-md-12">
                    <div id="product-tab">
                        <!-- product tab nav -->
                        <ul class="tab-nav">
                            <li class="active"><a data-toggle="tab" href="#tab1">SHOPPING CART</a></li>
                        </ul>
                        <!-- /product tab nav -->

                        <div class="table-responsive">

                            <table class="table table-bordered">
                              
                              
                                <tr>
                                    <th width="30%">Product Name</th>
                                    <th width="10%">Quanlity</th>
                                    <th width="13%">Giá tiền</th>
                                    <th width="10%">Tổng Cộng</th>
                                    <th width="17%">Xóa</th>
                                </tr>

                                <?php
                                if (!empty($_SESSION["cart"])) {
                                    $total = 0;
                                    foreach ($_SESSION["cart"] as $key => $value) {
                                ?>
                                        <tr>
                                            <td><?php echo $value["item_name"]; ?></td>
                                            <td><?php echo $value["item_quanlity"]; ?></td>
                                            <td>$<?php echo $value["product_price"]; ?></td>
                                            <td>$ <?php echo number_format($value["item_quanlity"] * $value["product_price"], 2); ?></td>
                                            <td><a href="product.php?action=delete&id=<?php echo $value["product_id"]; ?>"><span class="text-danger">Remove Item</span></a></td>

                                        </tr>
                                    <?php
                                        $total = $total + ($value["item_quanlity"] * $value["product_price"]);
                                    }
                                    ?>
                                    <tr>
                                        <td colspan="3" text-align="right">Total</td>
                                        <th text-align="right">$ <?php echo number_format($total, 2); ?></th>
                                        <td></td>
                                    </tr>
                                <?php
                                }
                                ?>
                            </table>
                        </div>

                    </div>
                </div>
                <!-- /product tab -->
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