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
                                <h1>Quản lý sản phẩm</h1>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-8">
                        <div class="page-header float-right">
                            <div class="page-title">
                                <ol class="breadcrumb text-right">
                                    <li><a href="#">Quản lý sản phẩm</a></li>
                                    <li class="active">Chỉnh sửa thông tin sản phẩm</li>
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
                                <strong>Chỉnh sửa thông tin sản phẩm</strong>
                            </div>

                            <?php
                        $masp = isset($_GET['id']) ? $_GET['id'] : '';
                        if ($masp != '') {
                            $sql = "SELECT * FROM `sanpham` JOIN `danhmucsanpham`
                            ON danhmucsanpham.madanhmuc=sanpham.madanhmuc
                            JOIN donhang ON sanpham.madonhang=donhang.madonhang
                             WHERE `masanpham` = :id";

                            $q = $objPDO->prepare($sql);
                            $q->execute(array(':id' => $masp));
                            $done = $q->fetch();
                        }
                        ?>

                            <div class="card-body card-block">
                                <form action="EditSanpham.php" method="POST" enctype="multipart/form-data" class="form-horizontal">
                            
                                    <div class="row form-group">
                                        <div class="col col-md-3"><label for="text-input" class=" form-control-label">Mã sản phẩm </label></div>
                                        <div class="col-12 col-md-9"><input type="text" id="txt_masanpham" name="txt_masanpham" value="<?php echo $done["masanpham"] ?>" class="form-control" readonly="readonly"></div>
                                    </div>
                                    <div class="row form-group">
                                        <div class="col col-md-3"><label for="text-input" class=" form-control-label">Mã danh mục</label></div>
                                        <div class="col-12 col-md-9"><input type="text" id="txt_madanhmuc" name="txt_madanhmuc" value="<?php echo $done["madanhmuc"] ?>" class="form-control" readonly="readonly"></div>
                                    </div>
                                    <div class="row form-group">
                                        <div class="col col-md-3"><label for="text-input" class=" form-control-label">Mã đơn hàng</label></div>
                                        <div class="col-12 col-md-9"><input type="text" id="txt_madonhang" name="txt_madonhang" value="<?php echo $done["madonhang"] ?>" class="form-control" readonly="readonly"></div>
                                    </div>
                                    
                                    <div class="row form-group">
                                        <div class="col col-md-3"><label for="text-input" class=" form-control-label">Tên sản phẩm</label></div>
                                        <div class="col-12 col-md-9"><input type="text" id="txt_tensanpham" name="txt_tensanpham" value="<?php echo $done["tensanpham"] ?>" class="form-control"></div>
                                    </div>
                                    <div class="row form-group">
                                        <div class="col col-md-3"><label for="text-input" class=" form-control-label">Giá tiền</label></div>
                                        <div class="col-12 col-md-9"><input type="text" id="txt_giatien" name="txt_giatien" value="<?php echo $done["giatien"] ?>" class="form-control"></div>
                                    </div>
                                    <div class="row form-group">
                                        <div class="col col-md-3"><label for="image-input" class=" form-control-label">Hình ảnh sản phẩm</label></div>
                                        <div class="col-12 col-md-9">
                                            <input type="image" width="20%" name="anh_sp" src="images/<?php echo $done["hinhanh"] ?>"class="form-control-image">
                                        <input type="text" id="text-input" name="anh_sp"value="<?php echo $done['hinhanh']; ?>" readonly="readonly" class="form-control">
                                        <input type="file" id="file-input" name="anh_sp"></div>
                                    </div>
                                    
                                    <!-- <div class="row form-group">
                                        <div class="col col-md-3"><label for="file-multiple-input" class=" form-control-label">Multiple File input</label></div>
                                        <div class="col-12 col-md-9"><input type="file" id="file-multiple-input" name="file-multiple-input" multiple="" class="form-control-file"></div>
                                    </div> -->
                                    <div  style="float:right;">
                                <button type="submit" class="btn btn-primary " name="bnt_XuLy" value="submit">
                                    <i class="fa ti-plus"></i> Sửa
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