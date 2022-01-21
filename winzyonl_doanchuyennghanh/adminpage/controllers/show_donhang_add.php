<?php
include '../views/layout/sql-controller.php';
$sql = "SELECT * from donhang";
$stm = $objPDO->prepare($sql);
$stm->execute();
$data = $stm->fetchAll();
?>