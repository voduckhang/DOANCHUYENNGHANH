<?php include "layout/sql-controller.php";?>
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
                            <h1>Quản lý danh mục</h1>
                        </div>
                    </div>
                </div>
                <div class="col-sm-8">
                    <div class="page-header float-right">
                        <div class="page-title">
                            <ol class="breadcrumb text-right">
                                <li><a href="#">Quản lý danh mục</a></li>
                                <li class="active">Sửa danh mục</li>
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

                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-header">
                            <strong>Sửa danh mục</strong>
                        </div>

                        <?php
                        $madm = isset($_GET['id']) ? $_GET['id'] : '';
                        if ($madm != '') {
                            $sql = "SELECT * FROM `danhmucsanpham` JOIN `donhang`
                            ON danhmucsanpham.madonhang=donhang.madonhang
                             WHERE `madanhmuc` = :id";

                            $q = $objPDO->prepare($sql);
                            $q->execute(array(':id' => $madm));
                            $done = $q->fetch();
                        }
                        ?>

                        <div class="card-body card-block">
                            <form action="EditDanhmuc.php" method="post" enctype="multipart/form-data" class="form-horizontal">

                                <div class="row form-group">
                                    <div class="col col-md-3"><label for="text-input" class=" form-control-label">Mã danh mục</label></div>
                                    <div class="col-12 col-md-9"><input type="text" id="txt_madanhmuc" name="txt_madanhmuc" value="<?php echo $done["madanhmuc"]?>" class="form-control" readonly="readonly"></div>
                                </div>
                                <div class="row form-group">
                                    <div class="col col-md-3"><label for="text-input" class=" form-control-label">Mã đơn hàng</label></div>
                                    <div class="col-12 col-md-9"><input type="text" id="txt_madonhang" name="txt_madonhang" value="<?php echo $done["madonhang"]?>" class="form-control" readonly="readonly"></div>
                                </div>
                                <div class="row form-group">
                                    <div class="col col-md-3"><label for="text-input" class=" form-control-label">Tên danh muc</label></div>
                                    <div class="col-12 col-md-9"><input type="text" id="txt_tendanhmuc" name="txt_tendanhmuc" value="<?php echo $done["tendanhmuc"]?>" class="form-control"></div>
                                </div>
                                <div class="row form-group">
                                    <div class="col col-md-3"><label for="text-input" class=" form-control-label">Số lượng sản phẩm</label></div>
                                    <div class="col-12 col-md-9"><input type="text" id="txt_soluong" name="txt_soluong" value="<?php echo $done["soluongdausach"]?>" class="form-control"></div>
                                </div>







                                <div style="float:right;">
                                    <button type="submit" name="btn_xuly" class="btn btn-primary " value="submit">
                                        <i class="fa ti-plus"></i> Sửa
                                    </button>
                                    <button type="reset" name="btn_xuly" class="btn btn-warning" value="reset">
                                        <i class="fa ti-reload"></i> Reset
                                    </button>
                                </div>
                            </form>
                        </div>

                    </div>

                </div>



            </div>
        </div><!-- .animated -->
    </div><!-- .content -->

    <?php include "layout/footerpage.php"; ?>


</body>

</html>