<?php
include '../../Config.php';
function loadClass($classname)
{
    include "../models/$classname.php";
}
spl_autoload_register('loadClass');
$khachhang = new Khachhang();
$data = $khachhang->All();


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
                            <h1>Quản lý người dùng</h1>
                        </div>
                    </div>
                </div>
                <div class="col-sm-8">
                    <div class="page-header float-right">
                        <div class="page-title">
                            <ol class="breadcrumb text-right">
                                <li><a href="#">Quản lý người dùng</a></li>
                                <li class="active">Hiển thị</li>
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
                            <strong class="card-title">Người dùng</strong>&nbsp;
                        </div>
                        <div class="card-body">

                            <div class="form-inline">
                                <form method="get" action="../models/Khachhang.php">
                                    <input type="text" name='kw'>
                                    <button type="submit" value='search'><i class="fa fa-search"></i></button>
                                </form>
                            </div>

                            <a href="quanlynguoidungadd.php"><button type="button" class="btn btn-primary btn-sm" style="float:right;">Thêm</button></a>
                            <table id="bootstrap-data-table" class="table table-striped table-bordered">
                                <thead>
                                    <tr>

                                        <th>Mã khách hàng</th>
                                        <th>Tên khách hàng</th>
                                        <th>Địa chỉ</th>
                                        <th>Số điện thoại</th>
                                        <th>Email</th>
                                        <th>Mật khẩu</th>
                                        <th>Hành động</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    foreach ($data as $r) { ?>


                                        <tr>
                                            <td><?php echo $r['makh'] ?></td>
                                            <td><?php echo $r['tenkh'] ?></td>
                                            <td><?php echo $r['diachi'] ?></td>
                                            <td><?php echo $r['sodienthoai'] ?></td>
                                            <td><?php echo $r['email'] ?></td>
                                            <td><?php echo md5($r['matkhau']) ?></td>


                                            <td><a href="quanlynguoidungchitiet.php"><button type="button" class="btn btn-link">Xem</button></a></td>
                                            <td><a href="quanlynguoidungedit.php?id=<?php echo $r['makh'] ?>"><button type="button" class="btn btn-secondary btn-sm">Sửa</button></a>
                                                <a href="DeleteKhachhang.php?id=<?php echo $r['makh'] ?>"> <button type="button" class="btn btn-warning btn-sm" onclick="remove(this)">Xoá</button></a>
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