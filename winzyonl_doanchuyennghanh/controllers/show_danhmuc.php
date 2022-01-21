<?php
include './Layout/sql-controller.php';
$sql = "SELECT * from danhmucsanpham";
$stm = $objPDO->prepare($sql);
$stm->execute();
$danhmuc_categ = $stm->fetchAll();
?>