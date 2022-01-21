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
                                <h1>Quản lý danh mục</h1>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-8">
                        <div class="page-header float-right">
                            <div class="page-title">
                                <ol class="breadcrumb text-right">
                                    <li><a href="#">Quản lý danh mục</a></li>
                                    <li class="active">Chi tiết danh mục</li>
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
                                <strong>Chi tiết danh mục</strong>
                            </div>
                            <div class="card-body card-block">
                                <form action="#" method="post" enctype="multipart/form-data" class="form-horizontal">
                                <div class="row form-group">
                                        <div class="col col-md-3"><label for="email-input" class=" form-control-label">Mã danh mục</label></div>
                                        <div class="col-12 col-md-9"><input type="email" id="email-input" name="email-input"value="100047" class="form-control" readonly="readonly"></div>
                                    </div>

                                    <div class="row form-group">
                                        <div class="col col-md-3"><label for="email-input" class=" form-control-label">Tên danh mục</label></div>
                                        <div class="col-12 col-md-9"><input type="email" id="email-input" name="email-input"value="Sách Ngoại Ngữ" class="form-control" readonly="readonly"></div>
                                    </div>
                                    <div class="row form-group">
                                        <div class="col col-md-3"><label for="password-input" class=" form-control-label">Số lượng đầu sách</label></div>
                                        <di/v class="col-12 col-md-9"><input type="datetime" id="password-input" name="password-input"value="12" class="form-control" readonly="readonly"></di>
                                    </div>
                                    <div class="row form-group">
                                        <div class="col col-md-3"><label for="disabled-input" class=" form-control-label">Giá bán lẻ</label></div>
                                        <div class="col-12 col-md-9"><input type="text" id="disabled-input" name="disabled-input"value="1 tỷ" class="form-control" readonly="readonly"></div>
                                    </div>
                                    <div class="row form-group">
                                   
                                   
                                    
                                   
                                    
                                 
                                
                                 
                                </form>
                            </div>
                          
                        </div>
                   
                    </div>



                </div>
            </div><!-- .animated -->
        </div><!-- .content -->

        <?php include "layout/footerpage.php";?>


</body>

</html>