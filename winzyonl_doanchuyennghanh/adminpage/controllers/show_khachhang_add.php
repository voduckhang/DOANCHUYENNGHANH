<?php
include '../views/layout/sql-controller.php';
$sql = "SELECT * from khachhang";
$stm = $objPDO->prepare($sql);
$stm->execute();
$data = $stm->fetchAll();
?>