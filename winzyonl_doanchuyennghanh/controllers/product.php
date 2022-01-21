<?php
$action=isset($_GET['action'])?$_GET['action']:'index';
if($action=='index'){
    echo 'trang chủ';
}
if($action=='sanpham'){
    echo 'sanpham';
    include './views/product.php'; 
}
?>