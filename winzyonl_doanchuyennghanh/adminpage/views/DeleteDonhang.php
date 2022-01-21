<?php 
include_once "layout/sql-controller.php";


$madh=isset($_GET['id'])? $_GET['id'] : '';
if($madh !=''){

    $sql="delete from donhang where madonhang=?"; 
    $a=[$madh];
    $stm=$objPDO->prepare($sql);
    $stm->execute($a);
}

header('location: quanlydonhang.php');