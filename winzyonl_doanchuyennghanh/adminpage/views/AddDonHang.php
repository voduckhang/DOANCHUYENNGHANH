<?php 
include_once "layout/sql-controller.php";
$txt_madonhang=$_POST['txt_madonhang'];
$txt_makhachhang=$_POST['id_kh'];
$txt_tendonhang=$_POST['txt_tendonhang'];
$txt_ngaytaodon=$_POST['txt_ngaytaodon'];
$txt_noisanxuat=$_POST['txt_noisanxuat'];

$txt_soluong=$_POST['txt_soluong'];
$txt_tongtien=$_POST['txt_tongtien'];

$sql="INSERT INTO donhang (madonhang,makh,tendonhang,ngaytaodon,noisanxuat,soluong,tongtien) 
VALUES (?, ?, ?, ?, ?, ?, ?)";

$a=[$txt_madonhang, $txt_makhachhang, $txt_tendonhang, $txt_ngaytaodon, $txt_noisanxuat,$txt_soluong,$txt_tongtien];
$stm=$objPDO->prepare($sql);
$stm->execute($a);
header('location: quanlydonhang.php');
?>