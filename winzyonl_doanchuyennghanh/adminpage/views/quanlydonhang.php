<?php
include '../../Config.php';
function loadClass($classname){
    include "../models/$classname.php";
}
spl_autoload_register('loadClass');
$donhang= new Donhang();
$data=$donhang->All();
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
                            <h1>Quản lý đơn hàng</h1>
                        </div>
                    </div>
                </div>
                <div class="col-sm-8">
                    <div class="page-header float-right">
                        <div class="page-title">
                            <ol class="breadcrumb text-right">
                                <li><a href="#">Quản lý đơn hàng</a></li>
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
                            <strong class="card-title">Đơn hàng</strong>&nbsp;
                        </div>
                        <div class="card-body">
                            <a href="quanlydonhangadd.php"><button type="button" class="btn btn-primary btn-sm" style="float:right;">Thêm</button></a>
                            <table id="bootstrap-data-table" class="table table-striped table-bordered">
                                <thead>
                                    <tr>
                                    
                                        <th>Mã đơn hàng</th>
                                        <th>Mã khách hàng</th>
                                        <th>Tên Đơn Hàng</th>
                                        <th>Ngày tạo đơn</th>
                                        <th>Nơi sản xuất</th>
                                      
                                        <th>Số lượng</th>
                                        <th>Tổng tiền</th>
                                        <th>Chi tiết đơn hàng</th>
                                        <th>Hành động</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php foreach ($data as $r) { ?>

                                        <tr>
                                            <td><?php echo $r["madonhang"] ?></td>
                                            <td><?php echo $r["makh"] ?></td>
                                            <td><?php echo $r["tendonhang"] ?></td>
                                            <td><?php echo $r["ngaytaodon"] ?></td>
                                            <td><?php echo $r["noisanxuat"] ?></td>
                                           
                                            <td><?php echo $r["soluong"] ?></td>
                                            <td><?php echo number_format($r['tongtien'], 0, '', '.') . " VNĐ"; ?></td>

                                            <td><a href="quanlydonhangchitiet.php"><button type="button" class="btn btn-link">Xem</button></a></td>
                                            <td><a href="quanlydonhangedit.php?id=<?php echo $r["madonhang"] ?>"><button type="button" class="btn btn-secondary btn-sm">Sửa</button></a>
                                              <a href="DeleteDonhang.php?id=<?php echo $r["madonhang"] ?>">  <button type="button" class="btn btn-warning btn-sm" onclick="remove(this)" >Xoá</button></a>
                                            </td>
                                        </tr>
                                    <?php
                                    }
                                    ?>
<script></script>
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