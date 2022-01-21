<?php 
include_once "layout/sql-controller.php";


$madm=isset($_GET['id'])? $_GET['id'] : '';
if($madm !=''){

    $sql="delete from danhmucsanpham where madanhmuc=?"; 
    $a=[$madm];
    $stm=$objPDO->prepare($sql);
    $stm->execute($a);
}

header('location: quanlydanhmucsanpham.php');