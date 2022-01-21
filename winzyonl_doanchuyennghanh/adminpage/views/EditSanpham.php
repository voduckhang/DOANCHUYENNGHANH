<?php 
include_once "layout/sql-controller.php";

$txt_masanpham=$_POST['txt_masanpham'];
$txt_tensanpham=$_POST['txt_tensanpham'];

$txt_giatien=$_POST['txt_giatien'];
// $file_input=$_POST['file_input'];

if($_FILES['anh_sp']['name']==''){
    $anh_sp = $_POST['anh_sp'];
}
else{
    $anh_sp = $_FILES['anh_sp']['name'];
    $tmp_anh_sp = $_FILES['anh_sp']['tmp_name'];
}


try {
    move_uploaded_file($tmp_anh_sp,'images/'.$anh_sp);
    $sql = "UPDATE sanpham SET tensanpham='$txt_tensanpham',giatien='$txt_giatien', hinhanh='$anh_sp'
    WHERE masanpham='$txt_masanpham'";   
    $stmt = $objPDO->prepare($sql);
    $stmt->execute();
} 
catch (PDOException $e) {
    echo 'Lỗi'. "<br>" . $e->getMessage();
}
 
// Ngắt kết nối
$conn = null;
header('location: quanly-sanpham.php');
?>
