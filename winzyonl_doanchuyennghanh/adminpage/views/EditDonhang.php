<?php 
include_once "layout/sql-controller.php";

$txt_madonhang=$_POST['txt_madonhang'];
$txt_makhachhang=$_POST['txt_makhachhang'];
$txt_tendonhang=$_POST['txt_tendonhang'];
$txt_ngaylap=$_POST['txt_ngaylap'];
$txt_noisanxuat=$_POST['txt_noisanxuat'];
$txt_soluong=$_POST['txt_soluong'];
$txt_tongtien=$_POST['txt_tongtien'];



try {
    $sql = "UPDATE donhang SET madonhang='$txt_madonhang',makh='$txt_makhachhang', 
    tendonhang='$txt_tendonhang',ngaytaodon='$txt_ngaylap',
    noisanxuat='$txt_noisanxuat',soluong='$txt_soluong',tongtien='$txt_tongtien'
    WHERE madonhang='$txt_madonhang'";   
    $stmt = $objPDO->prepare($sql);
    $stmt->execute();
} 
catch (PDOException $e) {
    echo 'Lỗi'. "<br>" . $e->getMessage();
}
 
// Ngắt kết nối
$conn = null;
header('location: quanlydonhang.php');
?>
