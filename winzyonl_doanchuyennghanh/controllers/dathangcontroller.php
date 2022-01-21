<?php
session_start();
include_once '../models/dbhelper.php';
$con = mysqli_connect(HOST, USER, PW, DB);
if(isset($_POST['btn_xuly'])){
	if(isset($_SESSION['email'])){
		$email=$_SESSION['email'];
		$sql      = 'select * from khachhang where email = "'.$email.'"';
		$user = executeSingleResult($sql);
		if ($user != null) {
			$id = $user['makh'];
		}
	}
	$email=$_SESSION['email'];
	$ten=$_POST['txt_ten'];
	$diachi=$_POST['txt_diachi'];
	$sdt=$_POST['txt_sdt'];
	$sql='update khachhang set tenkh="'.$ten.'", diachi="'.$diachi.'", sodienthoai="'.$sdt.'" where email="'.$email.'"';
	execute($sql);
	$ngaydh= date('Y-m-d');
	$pttt=$_POST['payment'];
	var_dump($pttt);
	$id_order=rand(1,10000);
	$tongtien=$_POST['tongtien'];
	$sql1='insert into donhang(madonhang, makh, ngaytaodon, tongtien) values("ddh'.$id_order.'","'.$id.'","'.$ngaydh.'","'.$tongtien.' VNĐ")';
	$dhh=mysqli_query($con, $sql1);
	if(isset($dhh)){
		$cart=(isset($_SESSION['cart']))?$_SESSION['cart']:[];
		foreach ($cart as $key => $value) {
			mysqli_query($con, 'insert into ctdonhang (maddh, masp, tensp, soluong, dongia, thanhtien) values("ddh'.$id_order.'","'.$value['masp'].'","'.$value['tensp'].'","'.$value['quantity'].'","'.$value['gia'].'","'.$value['gia']*$value['quantity'].'")');
		}
		unset($_SESSION['cart']);
	}
	$sql='insert into thantoan(mathanhtoan,madonhang,phuongthucthanhtoan) value("tt'.$id_order.'","ddh'.$id_order.'","'.$pttt.'")';
		execute($sql);
	header('location:../order-success.php');
}
?>