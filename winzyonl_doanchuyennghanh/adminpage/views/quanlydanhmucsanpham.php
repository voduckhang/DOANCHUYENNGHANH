<?php
include '../../Config.php';
function loadClass($classname){
    include "../models/$classname.php";
}
spl_autoload_register('loadClass');
$danhmuc= new Danhmuc();
$data=$danhmuc->All();
?>
<!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!-->
<html class="no-js" lang="">
<!--<![endif]-->
<!-- <script>
    function remove(btn) {
    var row = confirm("Bạn có chắc muốn xoá không");
    var row1 = btn.parentNode.parentNode;
    row1.parentNode.removeChild(row1);
    return row;
} -->
</script>

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
                            <h1>Quản lý danh mục</h1>
                        </div>
                    </div>
                </div>
                <div class="col-sm-8">
                    <div class="page-header float-right">
                        <div class="page-title">
                            <ol class="breadcrumb text-right">
                                <li><a href="#">Quản lý danh mục</a></li>
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
                            <strong class="card-title">Danh mục</strong>&nbsp;
                        </div>
                        <div class="card-body">
                            <a href="quanlydanhmucadd.php"><button type="button" class="btn btn-primary btn-sm" style="float:right;">Thêm</button></a>
                            <table id="bootstrap-data-table" class="table table-striped table-bordered">
                                <thead>
                                    <tr>
                                       
                                        <th>Mã danh mục</th>
                                        <th>Mã đơn hàng</th>
                                        <th>Tên danh mục</th>
                                        <th>Số lượng sản phẩm</th>
                                       
                                        <th>Chi tiết</th>
                                    
                                        <th>Hành động</th>
                                    </tr>
                                </thead>
                                <tbody>

                                    <?php
                                    foreach($data as $r){?>
                            
                                    <tr>
                                    <td><?php echo $r["madanhmuc"]?></td>
                                    <td><?php echo $r["madonhang"]?></td>
                                    <td><?php echo $r["tendanhmuc"]?></td>
                                    <td><?php echo $r["soluongdausach"]?></td>
                                       
                             

                                    <td><a href="quanlydanhmucchitiet.php"><button type="button" class="btn btn-link">Xem</button></a></td>
                                    <td><a href="quanlydanhmucedit.php?id=<?php echo $r["madanhmuc"]?>"><button type="button" class="btn btn-secondary btn-sm">Sửa</button></a>
                                    <a href="DeleteDanhmuc.php?id=<?php echo $r["madanhmuc"]?>"> <button type="button" class="btn btn-warning btn-sm" onclick="remove(this)" >Xoá</button></a>
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
        </div><!-- .animated -->
    </div><!-- .content -->

    <?php include "layout/footerpage.php"; ?>

    <script src="assets/js/fuction_controller.js"></script>
</body>

</html>