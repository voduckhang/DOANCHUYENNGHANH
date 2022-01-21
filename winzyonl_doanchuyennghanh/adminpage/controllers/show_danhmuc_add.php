<?php
include '../views/layout/sql-controller.php';
$sql = "SELECT * from danhmucsanpham";
$stm = $objPDO->prepare($sql);
$stm->execute();
$data_danhmuc = $stm->fetchAll();
?>