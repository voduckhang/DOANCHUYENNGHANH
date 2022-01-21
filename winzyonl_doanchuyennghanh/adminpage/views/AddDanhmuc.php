<?php 
include_once "layout/sql-controller.php";

$txt_madanhmuc=$_POST['txt_madanhmuc'];
$txt_madonhang=$_POST['id_dh_sp'];
$txt_tendanhmuc=$_POST['txt_tendanhmuc'];
$txt_soluongdausach=$_POST['txt_soluongdausach'];

$sql="insert into danhmucsanpham (madanhmuc,madonhang, tendanhmuc, soluongdausach)
values(?,?,?,?)";



$a=[$txt_madanhmuc,$txt_madonhang,$txt_tendanhmuc,$txt_soluongdausach];
$stm=$objPDO->prepare($sql);
$stm->execute($a);
header('location: quanlydanhmucsanpham.php');