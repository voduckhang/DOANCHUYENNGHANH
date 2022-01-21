<?php 
include_once "layout/sql-controller.php";
$txt_masanpham=$_POST['txt_masanpham'];
$txt_madanhmuc=$_POST['id_dm_sp'];
$txt_madonhang=$_POST['id_dh_sp'];
$txt_tensanpham=$_POST['txt_tensanpham'];
$txt_giatien=$_POST['txt_giatien'];
if($txt_giatien<0){
    echo '<script>alert (Giá tiền không được âm)</script>';
}
$hinhanh=time().'-'.$_FILES['file-input']['name'];
move_uploaded_file($_FILES['file-input']['tmp_name'], "images/$hinhanh");

$sql="insert into sanpham (masanpham, madanhmuc, madonhang, tensanpham, giatien,hinhanh) 
values(?,?,?,?,?,?)";

$a=[$txt_masanpham, $txt_madanhmuc, $txt_madonhang, $txt_tensanpham, $txt_giatien,$hinhanh];
$stm=$objPDO->prepare($sql);
$stm->execute($a);
header('location: quanly-sanpham.php');