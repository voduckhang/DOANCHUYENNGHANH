<?php 
include_once "layout/sql-controller.php";
$txt_makhachhang=$_POST['txt_makhachhang'];
$txt_ten=$_POST['txt_ten'];
$txt_diachi=$_POST['txt_diachi'];
$txt_phone=$_POST['txt_phone'];
$txt_email=$_POST['txt_email'];
$txt_matkhau=$_POST['txt_matkhau'];
$sql="insert into khachhang (makh, tenkh, diachi, sodienthoai, email, matkhau)
values(?,?,?,?,?,?)";

$a=[$txt_makhachhang,$txt_ten,$txt_diachi,$txt_phone,$txt_email,$txt_matkhau];
$stm=$objPDO->prepare($sql);
$stm->execute($a);
header('location: quanlynguoidung.php');