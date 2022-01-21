<?php 
session_start();
include "./Layout/sql-controller.php"; 

if(isset($_POST['add_to_cart'])){
    if(isset($_SESSION['cart'])){

        $session_action=array_column($_SESSION['cart'],"id");

        if(!in_array($_GET['id'],$session_action)){
            $session_array=array(
                'id'=>$_GET['id'],
                "tensanpham" => $_POST['tensanpham'],
                "giatien"=> $_POST['giatien'],
                "soluong"=>$_POST['soluong']
            );
    
            $_SESSION['cart'][]=$session_array;
        }
    }else{
        $session_array=array(
            'id'=>$_GET['id'],
            "tensanpham" => $_POST['tensanpham'],
            "giatien"=> $_POST['giatien'],
            "soluong"=>$_POST['soluong']
        );

        $_SESSION['cart'][]=$session_array;
    }
}
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
    <div id="breadcrumb" class="section">
        <!-- container -->
        <div class="container">
            <!-- row -->
            <div class="row">
                <div class="col-md-12">
                    <ul class="breadcrumb-tree">
                        <li><a href="#">Home</a></li>
                        <li><a href="#">All Categories</a></li>
                        <li><a href="#">Accessories</a></li>
                        <li><a href="#">Headphones</a></li>
                        <li class="active">Product</li>
                    </ul>
                </div>
            </div>
            <!-- /row -->
        </div>
        <!-- /container -->
    </div>
    <!-- /BREADCRUMB -->

    <!-- SECTION -->
    <div class="section">
        <!-- container -->
        <div class="container">
            <!-- row -->
            <?php
            $data=0;
            $masp = isset($_GET['id']) ? $_GET['id'] : '';
            if ($masp != '') {
                $sql = "SELECT * FROM sanpham JOIN danhmucsanpham ON sanpham.madanhmuc=danhmucsanpham.madanhmuc
                    JOIN donhang ON sanpham.madonhang=donhang.madonhang WHERE masanpham=:id";
                $stm = $objPDO->prepare($sql);
                $stm->execute(array(':id' => $masp));
                $data = $stm->fetch();
            }
            ?>
            <div class="row">

                <form method="post" action="./product.php?action=add&id=<?php echo $data['masanpham'] ?>">

                    <!-- Product main img -->
                    <div class="col-md-5 col-md-push-2">
                        <div id="product-main-img">
                            <div class="product-preview">
                                <img src="../../winzyonl_doanchuyennghanh/adminpage/views/images/<?php echo $data['hinhanh'] ?>" >
                            </div>
                        </div>
                    </div>
                    <!-- /Product main img -->

                    <!-- Product thumb imgs -->
                    <div class="col-md-2  col-md-pull-5">
                        <div id="product-imgs">
                            <div class="product-preview">
                                <img src="../../winzyonl_doanchuyennghanh/adminpage/views/images/<?php echo $data['hinhanh'] ?>" alt="">
                            </div>
                        </div>
                    </div>
                    <!-- /Product thumb imgs -->

                    <!-- Product details -->
                    <div class="col-md-5">
                        <div class="product-details">
                            <h2 class="product-name"><?php echo $data['tensanpham'] ?></h2>
                            <div>
                                <div class="product-rating">
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star-o"></i>
                                </div>
                                <a class="review-link" href="#">10 Review(s) | Add your review</a>
                            </div>
                            <div>
                                <h3 class="product-price"><?php echo $data['giatien'] ?> </h3>
                                <span class="product-available">In Stock</span>
                            </div>

                            <div class="product-options">
                                <label>
                                    Size
                                    <select class="input-select">
                                        <option value="0">X</option>
                                    </select>
                                </label>
                                <label>
                                    Color
                                    <select class="input-select">
                                        <option value="0">Red</option>
                                    </select>
                                </label>
                            </div>

                            <div class="add-to-cart">
                              
                                </div>
                                <!-- <input type="hidden" name="tensanpham" value=>
                                <input type="hidden" name="giatien" value=>
                                <input type="number" name="soluong" value="1"> -->
                                <!-- <input type="submit" name="add_to_cart" class="btn btn-success" value="Add To Cart"> -->
                                <button class="primary-btn add-to-cart" >ADD TO CART</button>
                            </div>
                </form>




            </div>
        </div>
        <!-- /Product details -->

        <!-- Product tab -->
        <div class="col-md-12">
            <div id="product-tab">
                <!-- product tab nav -->
                <ul class="tab-nav">
                    <li class="active"><a data-toggle="tab" href="#tab1">SHOPPING CART</a></li>
                   
                </ul>
                <!-- /product tab nav -->

                <!-- product tab content -->
                <div class="tab-content">
                   

                   <?php
                //    $total=0;
                //    $output="";
                //    $output .="
                //    <table class='table table-bordered table-striped'>
                //         <tr>
                //         <th>Tên Sản Phẩm </th>
                //         <th>Giá tiền </th>
                //         <th>Số Lượng </th>
                //         <th>Tổng Tiền </th>
                //         <th>Action </th>
                //         </tr>
                //    </table>
                //    ";

                //     if(empty($_SESSION['cart'])){
                //         foreach($_SESSION['cart'] as $key=>$value){
                //             $output .="
                //             <tr>
                //                 <td>".$value['tensanpham']."</td>
                //                 <td>".$value['giatien']."</td>
                //                 <td>".$value['soluong']."</td>
                //                 <td>$".number_format($value['giatien']* $value['soluong'],2)."</td>
                //                 <td>
                //                 <a href='./product.php?action=remove&id=".$value['id']."'></a>
                //                 <button class='btn btn-danger'>Remove</button>
                //                 </td>
                //             ";

                //             $total=$total+$value['soluong']*$value['giatien'];

                //         }
                //         $output .="
                //         <tr>
                //             <td colspan='3'></td>
                //             <td></b> Total Price </b></td>
                //             <td>".number_format($total,2)."</td>
                //         </tr>
                //         ";

                     
                //     }

                //     echo $output;
                   ?>
                    
                  
                </div>
                <!-- /product tab content  -->
            </div>
        </div>
        <!-- /product tab -->
    </div>
    <!-- /row -->
    </div>
    <!-- /container -->
    </div>
    <!-- /SECTION -->


    <!-- NEWSLETTER -->
    <div id="newsletter" class="section">
        <!-- container -->
        <div class="container">
            <!-- row -->
            <div class="row">
                <div class="col-md-12">
                    <div class="newsletter">
                        <p>Sign Up for the <strong>NEWSLETTER</strong></p>
                        <form>
                            <input class="input" type="email" placeholder="Enter Your Email">
                            <button class="newsletter-btn"><i class="fa fa-envelope"></i> Subscribe</button>
                        </form>
                        <ul class="newsletter-follow">
                            <li>
                                <a href="#"><i class="fa fa-facebook"></i></a>
                            </li>
                            <li>
                                <a href="#"><i class="fa fa-twitter"></i></a>
                            </li>
                            <li>
                                <a href="#"><i class="fa fa-instagram"></i></a>
                            </li>
                            <li>
                                <a href="#"><i class="fa fa-pinterest"></i></a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <!-- /row -->
        </div>
        <!-- /container -->
    </div>
    <!-- /NEWSLETTER -->

    <!-- FOOTER -->
    <?php include 'Layout/footer_user.php'; ?>
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