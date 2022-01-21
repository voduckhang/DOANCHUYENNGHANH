<?php
$c=isset($_GET['controller'])?$_GET['controller']:'index';
if($c=='index'){
include './views/index.php';
}
if($c=='dienthoaididong'){
    include './views/store.php';
}
if($c=='laptop'){
    include './views/laptop.php';
}
if($c=='tintuc'){
    include './views/blank.php';
}
if($c=='lienhe'){
    include './views/blank.php';
}
if($c=='login'){
    include './views/login.php';
}
if($c=='cart'){
    include './views/cart.php';
}
if($c=='loginAdmin'){
    include './adminpage/views/page-login.php';
}
if($c=='checkout'){
    include './views/checkout.php';
}
if($c=='contact'){
    include './views/contact.php';
}
if($c=='product'){
    include './views/product.php';
}
if($c=='signIn'){
    include './views/signIn.php';
}
if($c=='logInUser'){
    include './views/login.php';
}
if($c=='sanphamtheodanhmuc')
{
    include './views/store_theodanhmuc.php';
}
if($c=='giohang'){
    include './controllers/giohang_controller.php';
}
?>