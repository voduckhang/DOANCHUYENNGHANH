<?php
include '../views/layout/sql-controller.php';
$sql = "SELECT * from sanpham join danhmucsanpham on sanpham.madanhmuc=danhmucsanpham.madanhmuc
join donhang on sanpham.madonhang=donhang.madonhang";
$stm = $objPDO->prepare($sql);
$stm->execute();
$data = $stm->fetchAll();
?>