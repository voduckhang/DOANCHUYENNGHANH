<?php

class Product extends Db{
    function all(){
        return $this->selectQuery('select * from sanpham');
    }

    function byId($masp){

    }
    function search($kw){
        $sql="select * from sanpham where tensanpham like ?";
        $arr=["%$kw%"];
        return $this->selectQuery($sql,$arr);
    }
}
?>