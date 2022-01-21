<?php

class Donhang extends Db{
    function All(){
        return $this->selectQuery('select * from donhang join khachhang on donhang.makh=khachhang.makh');
    }
    function InsertbyID($makh){
        // return $this->updateQuery('update khachhang set ');
    }
}
