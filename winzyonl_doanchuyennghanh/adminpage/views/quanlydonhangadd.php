<?php include_once '../controllers/show_khachhang_add.php'; ?>
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
                                <li class="active">Thêm đơn hàng</li>
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
                            <strong>Thêm đơn hàng</strong>
                        </div>
                        <div class="card-body card-block">
                            <form action="AddDonHang.php" method="POST" enctype="multipart/form-data" class="form-horizontal">
                                <div class="row form-group">
                                    <div class="col col-md-3"><label for="text-input" class=" form-control-label">Mã đơn hàng</label></div>
                                    <div class="col-12 col-md-9"><input type="text" id="txt_ma" name="txt_madonhang"  class="form-control"></div>
                                </div>
                                <div class="row form-group">
                                    <div class="col col-md-3"><label for="email-input" class=" form-control-label">Mã khách hàng</label></div>
                                    <div class="col-12 col-md-9">
                                        <select name="id_kh" id="select-input" class="form-control">
                                            <option value="unselect">Xin chọn mã khách hàng</option>
                                            <?php
                                            foreach ($data as $show_select) {
                                            ?>
                                                <option value="<?php echo $show_select['makh'] ?>"><?php echo $show_select['makh'] ?></option>

                                            <?php
                                            }
                                            ?>
                                        </select>
                                    </div>
                                </div>
                                <div class="row form-group">
                                    <div class="col col-md-3"><label for="email-input" class=" form-control-label">Tên đơn hàng</label></div>
                                    <div class="col-12 col-md-9"><input type="text" id="txt_tendonhang" name="txt_tendonhang" class="form-control"></div>
                                </div>
                                <div class="row form-group">
                                    <div class="col col-md-3"><label for="datetime-input" class=" form-control-label">Ngày tạo đơn</label></div>
                                    <div class="col-12 col-md-9"><input type="datetime-local" id="txt_ngaytaodon" name="txt_ngaytaodon" class="form-control"></div>
                                </div>
                               
                                <div class="row form-group">
                                    <div class="col col-md-3"><label for="text-input" class=" form-control-label">Nơi sản xuất</label></div>
                                    <div class="col-12 col-md-9"><input type="text" id="txt_noisanxuat" name="txt_noisanxuat"  class="form-control"></div>
                                </div>
    
                                <div class="row form-group">
                                    <div class="col col-md-3"><label for="text-input" class=" form-control-label">Số lượng</label></div>
                                    <div class="col-12 col-md-9"><input type="text" id="txt_soluong" name="txt_soluong"  class="form-control"></div>
                                </div>
                                <div class="row form-group">
                                    <div class="col col-md-3"><label for="text-input" class=" form-control-label">Tổng tiền</label></div>
                                    <div class="col-12 col-md-9"><input type="text" id="txt_tongtien" name="txt_tongtien"  class="form-control"></div>
                                </div>
                                      
                                </div>
                                <div style="float:right;">
                                    <button type="submit" class="btn btn-primary" name="bnt_XuLy" value="submit">
                                        <i class="fa ti-plus"></i> Thêm
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

    <?php include "layout/footerpage.php"; ?>


</body>

</html>