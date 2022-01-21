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
                            <h1>Quản lý người dùng</h1>
                        </div>
                    </div>
                </div>
                <div class="col-sm-8">
                    <div class="page-header float-right">
                        <div class="page-title">
                            <ol class="breadcrumb text-right">
                                <li><a href="#">Quản lý người dùng</a></li>
                                <li class="active">Sửa người dùng</li>
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

                        <?php
                        $makh = isset($_GET['id']) ? $_GET['id'] : '';
                        if ($makh != '') {
                            $sql = "SELECT * FROM `khachhang` WHERE `makh` = :id";
                            $q = $objPDO->prepare($sql);
                            $q->execute(array(':id' => $makh));
                            $done = $q->fetch();
                        }
                        ?>

                        <div class="card-body card-block">
                            <form action="EditKhachhang.php" method="POST" enctype="multipart/form-data" class="form-horizontal">

                                <div class="row form-group">
                                    <div class="col col-md-3"><label for="text-input" class=" form-control-label">Mã khách hàng</label></div>
                                    <div class="col-12 col-md-9"><input type="text" id="txt_makhachhang" name="txt_makhachhang" value="<?php echo $done['makh'] ?>" class="form-control" readonly="readonly"></div>
                                </div>
                                <div class="row form-group">
                                    <div class="col col-md-3"><label for="text-input" class=" form-control-label">Tên khách hàng</label></div>
                                    <div class="col-12 col-md-9"><input type="text" id="txt_ten" name="txt_ten" value="<?php echo $done['tenkh'] ?>" placeholder="" class="form-control"></div>
                                </div>
                                <div class="row form-group">
                                    <div class="col col-md-3"><label for="text-input" class=" form-control-label">Địa chỉ</label></div>
                                    <div class="col-12 col-md-9"><input type="text" id="txt_diachi" name="txt_diachi" value="<?php echo $done['diachi'] ?>" placeholder="" class="form-control"></div>
                                </div>
                                <div class="row form-group">
                                    <div class="col col-md-3"><label for="text-input" class=" form-control-label">Số điện thoại</label></div>
                                    <div class="col-12 col-md-9"><input type="text" id="txt_phone" name="txt_phone" value="<?php echo $done['sodienthoai'] ?>" placeholder="" class="form-control"></div>
                                </div>
                                <div class="row form-group">
                                    <div class="col col-md-3"><label for="email-input" class=" form-control-label">Email</label></div>
                                    <div class="col-12 col-md-9"><input type="email" id="txt_email" name="txt_email" value="<?php echo $done['email'] ?>" class="form-control"></div>
                                </div>
                                <div class="row form-group">
                                    <div class="col col-md-3"><label for="text-input" class=" form-control-label">Mật khẩu</label></div>
                                    <div class="col-12 col-md-9"><input type="password" id="txt_matkhau" name="txt_matkhau" value="<?php echo $done['matkhau'] ?>" class="form-control"></div>
                                </div>


                                <div style="float:right;">
                                    <button type="submit" class="btn btn-primary" name="bnt_xuly" value="submit">
                                        <i class="fa ti-plus"></i> Cập nhật
                                    </button>
                                    <button type="reset" class="btn btn-warning" name="bnt_xuly" value="reset">
                                        <i class="fa ti-reload"></i> Reset
                                    </button>
                                </div>
                            </form>
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