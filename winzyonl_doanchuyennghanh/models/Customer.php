<?php

class Customer extends Db{
    function LogIn($email,$password){
        if(!empty($email)&&!empty($password)){
            $sql="SELECT email, matkhau FROM khachhang Where email=? and matkhau=?" ;
            $stm=self::$pdo->prepare($sql);
            $stm->bindParam('makh',$email);
            $stm->bindParam('matkhau',$password);
            $stm->execute();
        }
        header('location: index.php');
    }
}
?>