<?php
session_start();
include '../views/Layout/sql-controller.php';

$email = $_POST["txt_email"];
$password = $_POST["txt_password"];

if(isset($email) && isset($password)){
    if(isset($email)=="" or isset($password)==""){
        
        header('location: login.php');
        echo "<center><h1>EMAIL OR PASSWORD CAN NOT BE EMPTY</h1></center>";
    }
    else{
  
        $query=$objPDO->prepare("SELECT * FROM khachhang WHERE email='$email' AND matkhau='$password' ");
        $query->execute();
        $control=$query->fetchAll(PDO::FETCH_OBJ);
        $row=$query->rowCount();
        if($row >0){
            $_SESSION["txt_email"]=$email;
            $_SESSION["txt_password"]=$password;
            header('location: ../views/index.php');
        }
        echo "<center><h1>INCORRECT PASSWORD OR EMAIL</h1></center>";
    }
}

?>