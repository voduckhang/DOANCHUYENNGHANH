<?php
session_start();
include '../views/layout/sql-controller.php';

$email = $_POST["txt_email"];
$password = $_POST["txt_password"];

if(isset($email) && isset($password)){
    if(isset($email)=="" or isset($password)==""){
        
        header('location: page-login.php');
        echo "<center><h1>EMAIL OR PASSWORD CAN NOT BE EMPTY</h1></center>";
    }
    else{
        // $email=trim($_POST["txt_email"]);
        // $password=strip_tags(trim($_POST["txt_password"]));
        $query=$objPDO->prepare("SELECT * FROM admin WHERE nameAdmin='$email' AND matkhau='$password' ");
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