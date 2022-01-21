<?php include_once '../controllers/show_donhang_add.php';; 
include_once '../controllers/show_danhmuc_add.php';
?>
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
                                <h1>Quản lý sản phẩm</h1>
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
                                <strong>Thêm sản phẩm</strong>
                            </div>
                            <div class="card-body card-block">
                                <form action="AddSanpham.php" method="POST" enctype="multipart/form-data" class="form-horizontal">
                    
                                    <div class="row form-group">
                                        <div class="col col-md-3"><label for="text-input" class=" form-control-label">Mã sản phẩm</label></div>
                                        <div class="col-12 col-md-9"><input type="text" id="txt_masanpham" name="txt_masanpham" value="PD00"  class="form-control"></div>
                                    </div>
                                    <div class="row form-group">
                                        <div class="col col-md-3"><label for="select" class=" form-control-label">Mã danh mục</label></div>
                                        <div class="col-12 col-md-9">
                                            <select name="id_dm_sp" id="select-input" class="form-control">
                                                <option value="unselect">Xin chọn mã danh mục</option>
                                                <?php 
                                               foreach($data_danhmuc as $show_select){
                                                ?>
                                                <option value="<?php echo $show_select['madanhmuc']?>"><?php echo $show_select['tendanhmuc']?></option>
                        
                                                <?php
                                                }
                                                ?>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="row form-group">
                                        <div class="col col-md-3"><label for="text-input" class=" form-control-label">Mã đơn hàng</label></div>
                                        <div class="col-12 col-md-9">
                                            <select name="id_dh_sp" id="select-input" class="form-control">
                                                <option value="unselect">Xin chọn mã đơn hàng</option>
                                                <?php 
                                               foreach($data as $show_dh){
                                                ?>
                                                <option value="<?php echo $show_dh['madonhang']?>"><?php echo $show_dh['madonhang']?></option>
                        
                                                <?php
                                                }
                                                ?>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="row form-group">
                                        <div class="col col-md-3"><label for="text-input" class=" form-control-label">Tên sản phẩm</label></div>
                                        <div class="col-12 col-md-9"><input type="text" id="txt_tensanpham" name="txt_tensanpham"  class="form-control"></div>
                                    </div>
                                    <div class="row form-group">
                                        <div class="col col-md-3"><label for="text-input" class=" form-control-label">Giá tiền</label></div>
                                        <div class="col-12 col-md-9"><input type="text" id="txt_giatien" name="txt_giatien" class="form-control"></div>
                                    </div>
                                    <div class="row form-group">
                                        <div class="col col-md-3"><label for="file-input" class=" form-control-label">File input</label></div>
                                        <div class="col-12 col-md-9"><input type="file" id="file-input" name="file-input" class="form-control-file"></div>
                                    </div>
                                    
                                   
                                    <!-- <div class="row form-group">
                                        <div class="col col-md-3"><label for="file-multiple-input" class=" form-control-label">Multiple File input</label></div>
                                        <div class="col-12 col-md-9"><input type="file" id="file-multiple-input" name="file-multiple-input" multiple="" class="form-control-file"></div>
                                    </div> -->
                                    <div  style="float:right;">
                                <button type="submit" class="btn btn-primary " name="bnt_XuLy" value="submit">
                                    <i class="fa ti-plus"></i> Thêm
                                </button>
                                <button type="submit" class="btn btn-warning" name="bnt_XuLy" value="reset">
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