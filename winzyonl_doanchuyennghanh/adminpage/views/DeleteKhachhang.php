<?php 
include_once "layout/sql-controller.php";


$makh=isset($_GET['id'])? $_GET['id'] : '';
if($makh !=''){

    $sql="delete from khachhang where makh=?"; 
    $a=[$makh];
    $stm=$objPDO->prepare($sql);
    $stm->execute($a);
}

header('location: quanlynguoidung.php');