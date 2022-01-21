<?php
include_once './controllers/show_danhmuc.php';
?>
<nav id="navigation">
    <!-- container -->
    <div class="container">
        <!-- responsive-nav -->
        <div id="responsive-nav">
            <!-- NAV -->
            <ul class="main-nav nav navbar-nav">
                <li><a href="./index.php">Trang chủ</a></li>
                <li><a href="index.php?controller=dienthoaididong">Sản Phẩm</a></li>
                <!-- <li><a href="index.php?controller=laptop">Laptop</a></li> -->
                <li class="dropdown">
                    <a href="index.php?controller=dienthoaididong" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Danh Mục <span class="caret"></span></a>
                    <ul class="dropdown-menu" role="menu">
                    <?php
                        foreach ($danhmuc_categ as $show_select) {
                    ?>
                        <li><a href="index.php?controller=sanphamtheodanhmuc&madmsp=<?php echo $show_select['madanhmuc'] ?>"><?php echo $show_select['tendanhmuc'] ?></a></li>
                    <?php
                    }
                    ?>
                       
                    </ul>
                </li>
                <li><a href="index.php?controller=tintuc">Tin tức</a>
                </li>

                <li><a href="index.php?controller=contact">Liên hệ</a></li>
            </ul>
            <!-- /NAV -->
        </div>
        <!-- /responsive-nav -->
    </div>
    <!-- /container -->
</nav>