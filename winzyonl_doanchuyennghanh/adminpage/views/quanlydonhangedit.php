<?php include "layout/sql-controller.php";?>
<!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!-->
<html class="no-js" lang="">
<!--<![endif]-->

<head>
   <?php include "layout/headerpage.php";?>

</head>

<body>
    <!-- Left Panel -->
    <?php include "layout/headerpannel.php";?>
   
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
                                    <li class="active"> Chỉnh sửa thông tin đơn hàng</li>
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
                                <strong>Chỉnh sửa thông tin đơn hàng</strong>
                            </div>

                            <?php
                        $madh = isset($_GET['id']) ? $_GET['id'] : '';
                        if ($madh != '') {
                            $sql = "SELECT * FROM `donhang` JOIN `khachhang`
                            ON donhang.makh=khachhang.makh
                             WHERE `madonhang` = :id";

                            $q = $objPDO->prepare($sql);
                            $q->execute(array(':id' => $madh));
                            $done = $q->fetch();
                        }
                        ?>

                            <div class="card-body card-block">
                            <form action="EditDonhang.php" method="POST" enctype="multipart/form-data" class="form-horizontal">
                                <div class="row form-group">
                                    <div class="col col-md-3"><label for="text-input" class=" form-control-label">Mã đơn hàng</label></div>
                                    <div class="col-12 col-md-9"><input type="text" id="txt_madonhang" name="txt_madonhang" value="<?php echo $done["madonhang"] ?>" class="form-control" readonly="readonly"></div>
                                </div>
                                <div class="row form-group">
                                    <div class="col col-md-3"><label for="email-input" class=" form-control-label">Mã khách hàng</label></div>
                                    <div class="col-12 col-md-9"><input type="text" id="txt_makhachhang" name="txt_makhachhang" value="<?php echo $done["makh"] ?>" class="form-control" readonly="readonly"></div>
                                </div>

                                <div class="row form-group">
                                    <div class="col col-md-3"><label for="email-input" class=" form-control-label">Tên đơn hàng</label></div>
                                    <div class="col-12 col-md-9"><input type="text" id="txt_tendonhang" name="txt_tendonhang" value="<?php echo $done["tendonhang"] ?>" class="form-control"></div>
                                </div>

                                <div class="row form-group">
                                    <div class="col col-md-3"><label for="datetime-input" class=" form-control-label">Ngày lập</label></div>
                                    <div class="col-12 col-md-9"><input type="datetime-local" id="date-input" name="txt_ngaylap" value="<?php echo $done["ngaytaodon"] ?>" class="form-control"></div>
                                </div>
                                <div class="row form-group">
                                    <div class="col col-md-3"><label for="email-input" class=" form-control-label">Nơi sản xuất</label></div>
                                    <div class="col-12 col-md-9"><input type="text" id="txt_noisanxuat" name="txt_noisanxuat" value="<?php echo $done["noisanxuat"] ?>" class="form-control"></div>
                                </div>
                                <div class="row form-group">
                                    <div class="col col-md-3"><label for="email-input" class=" form-control-label">Số lượng</label></div>
                                    <div class="col-12 col-md-9"><input type="text" id="txt_soluong" name="txt_soluong" value="<?php echo $done["soluong"] ?>" class="form-control"></div>
                                </div>
                                <div class="row form-group">
                                    <div class="col col-md-3"><label for="email-input" class=" form-control-label">Tổng tiền</label></div>
                                    <div class="col-12 col-md-9"><input type="text" id="txt_tongtien" name="txt_tongtien" value="<?php echo $done["tongtien"] ?>" class="form-control"></div>
                                </div>
                                
                               
                                
                                
                                <div style="float:right;">
                                    <button type="submit" class="btn btn-primary" name="bnt_XuLy" value="submit">
                                        <i class="fa ti-plus"></i> Sửa
                                    </button>
                                    <button type="reset" class="btn btn-warning" name="bnt_XuLy" value="reset">
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

        <?php include "layout/footerpage.php";?>


</body>

</html>