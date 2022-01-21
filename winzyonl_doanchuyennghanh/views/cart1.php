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



                <table class="table ps-cart__table">
                    <thead>
                        <tr>
                            <th>All Products</th>
                            <th>Price</th>
                            <th>Quantity</th>
                            <th>Total</th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td><a class="ps-product__preview" href="product-detail.html"><img class="mr-15" src="images/product/cart-preview/1.jpg" alt=""> air jordan One mid</a></td>
                            <td>$150</td>
                            <td>
                                <div class="form-group--number">
                                    <button class="minus"><span>-</span></button>
                                    <input class="form-control" type="text" value="2">
                                    <button class="plus"><span>+</span></button>
                                </div>
                            </td>
                            <td>$300</td>
                            <td>
                                <div class="ps-remove"></div>
                            </td>
                        </tr>
                        <tr>
                            <td><a class="ps-product__preview" href="product-detail.html"><img class="mr-15" src="images/product/cart-preview/2.jpg" alt=""> The Crusty Croissant</a></td>
                            <td>$150</td>
                            <td>
                                <div class="form-group--number">
                                    <button class="minus"><span>-</span></button>
                                    <input class="form-control" type="text" value="2">
                                    <button class="plus"><span>+</span></button>
                                </div>
                            </td>
                            <td>$300</td>
                            <td>
                                <div class="ps-remove"></div>
                            </td>
                        </tr>
                        <tr>
                            <td><a class="ps-product__preview" href="product-detail.html"><img class="mr-15" src="images/product/cart-preview/3.jpg" alt="">The Rolling Pin</a></td>
                            <td>$150</td>
                            <td>
                                <div class="form-group--number">
                                    <button class="minus"><span>-</span></button>
                                    <input class="form-control" type="text" value="2">
                                    <button class="plus"><span>+</span></button>
                                </div>
                            </td>
                            <td>$300</td>
                            <td>
                                <div class="ps-remove"></div>
                            </td>
                        </tr>
                    </tbody>
                </table>
                <div class="ps-cart__actions">
                    <div class="ps-cart__promotion">
                        <div class="form-group">
                            <div class="ps-form--icon"><i class="fa fa-angle-right"></i>
                                <input class="form-control" type="text" placeholder="Promo Code">
                            </div>
                        </div>
                        <div class="form-group">
                            <button type="button" class="btn btn-secondary btn-lg" style="color: green;"><i></i>&nbsp;COUNTINUE SHOPPING</button>
                        </div>
                    </div>
                    <div class="ps-cart__total">
                        <h3>Total Price: <span> 2599.00 $</span></h3>
                        <button type="button" class="btn btn-success btn-lg" style="float:right;"><i class="fa fa-magic"></i>&nbsp;Process to check out</button>
                    </div>
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