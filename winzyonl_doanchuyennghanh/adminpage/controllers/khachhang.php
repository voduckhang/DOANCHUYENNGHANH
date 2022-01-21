<?php
$action=isset($_GET['action'])?$_GET['action']:'index';
$khachhang=new Khachhang();
if($action=='index'){
    $data->$khachhang->All();
    include '../views/quanlynguoidung.php';
}
if($action=='detail'){
    echo 'detail';
}
?>