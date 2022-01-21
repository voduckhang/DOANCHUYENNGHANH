<?php
session_start();
include_once './models/dbhelper.php';
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <?php include 'Layout/head_user.php'; ?>

    </head>
    <body>
        <!-- HEADER -->
        <?php include 'Layout/header_user.php'; ?>
        <!-- /HEADER -->

        <!-- NAVIGATION -->
        <?php include 'Layout/menu_user.php'; ?>
        <!-- /NAVIGATION -->

        <!-- BREADCRUMB -->
        <!-- /BREADCRUMB -->

        <!-- SECTION -->
        <div class="section">
            <!-- container -->
            <div class="container">
                <!-- row -->
                <div class="row">
                    <div class="col-lg-8 table-responsive mb-5">
                <table class="table table-light table-borderless table-hover text-center mb-0">
                    <thead class="thead-dark">
                        <tr>
                            <th>Sản phẩm</th>
                            <th>Giá</th>
                            <th>Số lượng</th>
                            <th>Tổng cộng</th>
                            <th>Xóa</th>
                        </tr>
                    </thead>
                    <tbody class="align-middle">
                            <?php foreach ($cart as $key => $value): ?>
                            <tr>
                            <td class="align-middle"><img src="img/<?php echo 
                                $value['hinhanhsp']?>" alt="" style="width: 50px;"><?php echo 
                                $value['tensp']?></td>
                            <td class="align-middle"><?php echo vnd($value['gia'])?> VNĐ</td> 
                            <td class="align-middle">
                                <div class="input-group quantity mx-auto" style="width: 100px;">
                                    <div class="input-group-btn">
                                        <a href="controller/themhangcontroller.php?masp=<?php echo
                                $value['masp']?>&action=min" class="btn btn-sm btn-primary btn-minus" >
                                        <i class="fa fa-minus"></i>
                                        </a>
                                    </div>
                                    <input type="text" class="form-control form-control-sm bg-secondary border-0 text-center" value="<?php echo 
                                $value['quantity']?>" readonly="readonly">
                                    <div class="input-group-btn">
                                        <a href="controller/themhangcontroller.php?masp=<?php echo
                                $value['masp']?>&action=max" class="btn btn-sm btn-primary">
                                            <i class="fa fa-plus"></i>
                                        </a>
                                    </div>
                                </div>
                            </td>
                            <td class="align-middle"><?php echo vnd($value['gia']*$value['quantity'])?> VNĐ</td>
                            <td class="align-middle"><a href="controller/themhangcontroller.php?masp=<?php echo $value['masp'] ?>&action=delete" class="btn btn-danger">-</a></td>
                            </form>
                        </tr>
                            <?php endforeach ?>
                        </tbody>
                    </table>
                </div>
                </div>
            </div>
                </div>
                <!-- /row -->
            </div>
            <!-- /container -->
        </div>
        <!-- /SECTION -->

        <!-- NEWSLETTER -->
        <div id="" class="section">
            <!-- container -->
            <div class="container">
                <!-- row -->
                <div class="row">
                    <div class="col-md-12">
                        <div class="">
                                <a href="checkout.php"><button class=""><i class=""></i> Đặt hàng</button></a>
                        </div>
                    </div>
                </div>
                <!-- /row -->
            </div>
            <!-- /container -->
        </div>
        <!-- /NEWSLETTER -->

        <!-- FOOTER -->
        <?php include 'layout/footer_user.php'; ?>
        <!-- /FOOTER -->

        <!-- jQuery Plugins -->
        <script src="js/jquery.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <script src="js/slick.min.js"></script>
        <script src="js/nouislider.min.js"></script>
        <script src="js/jquery.zoom.min.js"></script>
        <script src="js/main.js"></script>    

    </body>
</html>
