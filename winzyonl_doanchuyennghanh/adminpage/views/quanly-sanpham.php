<?php
include '../../Config.php';
function loadClass($classname){
    include "../models/$classname.php";
}
spl_autoload_register('loadClass');
$sanpham=new Sanpham();
$data=$sanpham->All();
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

</head>

<body>
    <!-- Left Panel -->
    <?php include "layout/headerpannel.php"; ?>

    <!-- Header-->

    <div class="breadcrumbs">
        <div class="breadcrumbs-inner">
            <div class="row m-0">
                <div class="col-sm-4">
                    <div class="page-header float-left">
                        <div class="page-title">
                            <h1>Quản lý sản phẩm</h1>
                        </div>
                    </div>
                </div>
                <div class="col-sm-8">
                    <div class="page-header float-right">
                        <div class="page-title">
                            <ol class="breadcrumb text-right">
                                <li><a href="#">Quản lý sản phẩm</a></li>
                                <li class="active">Hiển thị </li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="content">
        <div class="animated fadeIn">
            <div class="row">

                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <strong class="card-title">Danh sách sản phẩm</strong>&nbsp;
                        </div>
                        <div class="card-body">
                            <a href="quanly-sanpham-add.php"><button type="button" class="btn btn-primary btn-sm" style="float:right;">Thêm</button></a>
                            <table id="bootstrap-data-table" class="table table-striped table-bordered">
                                <thead>
                                    <tr>
                                        <th>Mã sản phẩm</th>
                                        <th>Mã danh mục</th>
                                        <th>Mã đơn hàng</th>
                                        <th>Tên Sản Phẩm</th>
                                        <th>Giá Tiền</th>
                                        <th>Hình Ảnh</th>
                                        <th>Chi tiết sản phẩm</th>
                                        <th>Hành động</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    foreach ($data as $r) { ?>
                                        <tr>
                                            <td><?php echo $r["masanpham"] ?></td>
                                            <td><?php echo $r["madanhmuc"] ?></td>
                                            <td><?php echo $r["madonhang"] ?></td>
                                            <td><?php echo $r["tensanpham"] ?></td>
                                            <td><?php echo number_format($r['giatien'], 0, '', '.') . " VNĐ"; ?></td>
                                           
                                            <td><img src="images/<?php echo $r["hinhanh"] ?>"> </td>
                                            <td><a href="quanly-sanpham-chitiet.php"><button type="button" class="btn btn-link">Xem</button></a></td>

                                            <td><a href="quanly-sanpham-edit.php?id=<?php echo $r["masanpham"] ?>"><button type="button" class="btn btn-secondary btn-sm">Sửa</button></a>
                                                <a href="DeleteSanpham.php?id=<?php echo $r["masanpham"] ?>"><button type="button" class="btn btn-warning btn-sm" onclick="remove(this)">Xoá</button></a>
                                            </td>
                                        </tr>


                                    <?php
                                    }
                                    ?>

                                </tbody>

                            </table>

                        </div>

                    </div>

                </div>


            </div>
            <?php include "layout/buttonbackpage.php"; ?>
        </div><!-- .animated -->
    </div><!-- .content -->

    <?php include "layout/footerpage.php"; ?>


</body>

</html>