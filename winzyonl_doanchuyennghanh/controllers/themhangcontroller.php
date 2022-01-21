<?php
include_once '../Config.php';
session_start();
if(isset($_GET['masp'])){
	$id=$_GET['masp'];
$action=(isset($_GET['action']))?$_GET['action']:'add';	
$quantity=(isset($_GET['quantity']))?$_GET['quantity']:1;
$con = mysqli_connect(HOST, USER, PW, DB);
$sql='select * from sanpham where masanpham="'.$id.'"';
$query=mysqli_query($con,$sql);
if($query){
	$product=mysqli_fetch_assoc($query);
}
$item=[
	'masp'=>$product['masanpham'],
	'tensp'=>$product['tensanpham'],
	'hinhanhsp'=>$product['hinhanh'],
	'gia'=>$product['giatien'],
	'quantity'=>$quantity
];
var_dump($item);
if($action=='add'){
	if(isset($_SESSION['cart'][$id])){
		$_SESSION['cart'][$id]['quantity']+=1;
	}
	else{
		$_SESSION['cart'][$id]=$item;
	}
}
if($action=='delete'){
	unset($_SESSION['cart'][$id]);
	header('location: ../cart.php');
	die();
}
if($action=='max'){
	$_SESSION['cart'][$id]['quantity']+=$quantity;
	header('location: ../cart.php');
	die();
}
if($action=='min'){
	$_SESSION['cart'][$id]['quantity']-=$quantity;
	if($_SESSION['cart'][$id]['quantity']==0){
		$_SESSION['cart'][$id]['quantity']=1;
	}
	header('location: ../cart.php');
	include ''; 
	die();
}
header('location: ./index.php?controller=index');
}
?>