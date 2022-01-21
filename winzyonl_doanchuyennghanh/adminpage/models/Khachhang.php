<?php

class Khachhang extends Db{
    function All(){
        return $this->selectQuery('select * from khachhang');
    }
    function InsertbyID($txt_makhachhang,$txt_ten,$txt_diachi,$txt_phone,$txt_email,$txt_matkhau){
      
        $sql= "INSERT INTO khachhang(makh,tenkh,diachi,sodienthoai,email,matkhau)
        values (:makh, :tenkh, :diachi, :sodienthoai, :email, :matkhau )";
        $stm=self::$pdo->prepare($sql);
        $stm->bindParam(':makh',$txt_makhachhang);
        $stm->bindParam(':tenkh',$txt_ten);
        $stm->bindParam(':diachi',$txt_diachi);
        $stm->bindParam(':sodienthoai',$txt_phone);
        $stm->bindParam(':email',$txt_email);
        $stm->bindParam(':matkhau',$txt_matkhau);
        $stm->execute();
        return $this->insertQuery($sql);
    }
}
?>