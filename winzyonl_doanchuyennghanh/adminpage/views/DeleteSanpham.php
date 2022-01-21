<?php 
include_once "layout/sql-controller.php";


$masp=isset($_GET['id'])? $_GET['id'] : '';
if($masp !=''){

    $sql="delete from sanpham where masanpham=?"; 
    $a=[$masp];
    $stm=$objPDO->prepare($sql);
    $stm->execute($a);
}

header('location: quanly-sanpham.php');