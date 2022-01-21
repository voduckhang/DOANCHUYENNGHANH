<header>
    <!-- TOP HEADER -->
    <div id="top-header">
        <div class="container">
            <ul class="header-links pull-left">
                <li><a href="#"><i class="fa fa-phone"></i> 0123.456.789</a></li>
                <li><a href="#"><i class="fa fa-envelope-o"></i> khangvo37@email.com</a></li>
                <li><a href="#"><i class="fa fa-map-marker"></i> 180 Cao Lỗ</a></li>
            </ul>
            <ul class="header-links pull-right">

               
                <?php if (isset($_SESSION["txt_email"])) { 
                    echo ' <li><a href="index.php?controller=index"><i class="fa fa-user-o"></i>' . $_SESSION["txt_email"] . '</a></li>
                   <li><a href="./controllers/logOut_Controller_User.php"><i class="fa fa-user-o"></i> Đăng xuất</a></li>
                   ';
                } else {
                    echo '
                    <li><a href="index.php?controller=logInUser"><i class="fa fa-user-o"></i> Truy nhập</a></li>
                     <li><a href="index.php?controller=signIn"><i class="fa fa-user-o"></i> Đăng ký</a></li>';
                }
                ?>
                
            </ul>
        </div>
    </div>
    <!-- /TOP HEADER -->

    <!-- MAIN HEADER -->
    <div id="header">
        <!-- container -->
        <div class="container">
            <!-- row -->
            <div class="row">
                <!-- LOGO -->
                <div class="col-md-3">
                    <div class="header-logo">
                        <a href="index.php" class="logo">
                            <img src="../img/logo.png" alt="">
                        </a>
                    </div>
                </div>
                <!-- /LOGO -->

                <!-- SEARCH BAR -->
                <div class="col-md-6">
                    <div class="header-search">
                        <form action="index.php?controller=dienthoaididong">
                            <input class="input" name="txt_search" placeholder="Tìm kiếm sản phẩm">
                            <button class="search-btn" type="submit">Tìm kiếm</button>
                        </form>
                    </div>
                </div>
                <!-- /SEARCH BAR -->

                <!-- ACCOUNT -->
                <div class="col-md-3 clearfix">
                    <div class="header-ctn">
                        <!-- Cart -->
                        <div class="dropdown">
                            <a class="dropdown-toggle" data-toggle="dropdown" aria-expanded="true">
                                <i class="fa fa-shopping-cart"></i>
                                <span>Giỏ hàng</span>
                                <div class="qty">2</div>
                            </a>
                            <div class="cart-dropdown">
                                <div class="cart-list">
                                    <div class="product-widget">
                                        <div class="product-img">
                                            <img src="./img/product01.png" alt="">
                                        </div>
                                        <div class="product-body">
                                            <h3 class="product-name"><a href="#">ABC</a></h3>
                                            <h4 class="product-price"><span class="qty">1x</span>980.000 VND</h4>
                                        </div>
                                        <button class="delete"><i class="fa fa-close"></i></button>
                                    </div>

                                    <div class="product-widget">
                                        <div class="product-img">
                                            <img src="./img/product02.png" alt="">
                                        </div>
                                        <div class="product-body">
                                            <h3 class="product-name"><a href="#">XYZ</a></h3>
                                            <h4 class="product-price"><span class="qty">3x</span>1.980.000 VND</h4>
                                        </div>
                                        <button class="delete"><i class="fa fa-close"></i></button>
                                    </div>
                                </div>
                                <div class="cart-summary">
                                    <small>2 sản phẩm được chọn</small>
                                    <h5>Tổng cộng: $2940.00</h5>
                                </div>
                                <div class="cart-btns">
                                    <a href="index.php?controller=cart">Giỏ hàng</a>
                                    <a href="index.php?controller=checkout">Thanh toán <i class="fa fa-arrow-circle-right"></i></a>
                                </div>
                            </div>
                        </div>
                        <!-- /Cart -->

                        <!-- Menu Toogle -->
                        <div class="menu-toggle">
                            <a href="#">
                                <i class="fa fa-bars"></i>
                                <span>Menu</span>
                            </a>
                        </div>
                        <!-- /Menu Toogle -->
                    </div>
                </div>
                <!-- /ACCOUNT -->
            </div>
            <!-- row -->
        </div>
        <!-- container -->
    </div>
    <!-- /MAIN HEADER -->
</header>