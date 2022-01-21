<?php
include "layout/sql-controller.php";

$txt_madanhmuc = $_POST['txt_madanhmuc'];
$txt_madonhang = $_POST['txt_madonhang'];
$txt_tendanhmuc = $_POST['txt_tendanhmuc'];
$txt_soluong = $_POST['txt_soluong'];


try {
    // $sql = "UPDATE danhmucsanpham SET madanhmuc='$txt_madanhmuc',madonhang='$txt_madonhang',
    //  tendanhmuc='$txt_tendanhmuc',soluongdausach='$txt_soluong'
    // WHERE madanhmuc='$txt_madanhmuc' ";

      $sql = "UPDATE danhmucsanpham SET madanhmuc=?,madonhang=?,
      tendanhmuc=?,soluongdausach=?
     WHERE madanhmuc=?";
     $arr=[$txt_madanhmuc, $txt_madonhang, $txt_tendanhmuc, $txt_soluong,$txt_madanhmuc ];
    // echo $sql; exit;
    $stmt = $objPDO->prepare($sql);
    $stmt->execute($arr);
} catch (PDOException $e) {
    echo 'Lỗi' . "<br>" . $e->getMessage();
}
header('location: quanlydanhmucsanpham.php');

$conn = null;
