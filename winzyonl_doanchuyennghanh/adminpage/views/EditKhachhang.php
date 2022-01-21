<?php 
include_once "layout/sql-controller.php";

$txt_makhachhang=$_POST['txt_makhachhang'];
$txt_ten=$_POST['txt_ten'];
$txt_diachi=$_POST['txt_diachi'];
$txt_phone=$_POST['txt_phone'];
$txt_email=$_POST['txt_email'];
$txt_matkhau=$_POST['txt_matkhau'];
// $sql="update khachhang set makh='$txt_makhachhang', tenkh='$txt_ten', 
// diachi='$txt_diachi',sodienthoai='$txt_phone', email='$txt_email', matkhau='$txt_matkhau'
// where makh='$makh'";

// $a=[$txt_makhachhang,$txt_ten,$txt_diachi,$txt_phone,$txt_email,$txt_matkhau];
// $stm=$objPDO->prepare($sql);
// $stm->execute($a);

try {
    $sql = "UPDATE khachhang SET makh='$txt_makhachhang',tenkh='$txt_ten', 
    diachi='$txt_diachi',sodienthoai='$txt_phone',email='$txt_email',matkhau='$txt_matkhau'
    WHERE makh='$txt_makhachhang'";   
    $stmt = $objPDO->prepare($sql);
    $stmt->execute();
} 
catch (PDOException $e) {
    echo 'Lỗi'. "<br>" . $e->getMessage();
}
 
// Ngắt kết nối
$conn = null;
header('location: quanlynguoidung.php');
?>
