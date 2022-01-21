<?php

class Danhmuc extends Db{
    function All(){
        return $this->selectQuery('select * from danhmucsanpham join donhang 
        on danhmucsanpham.madonhang=donhang.madonhang');
    }
    function InsertbyID($makh){
        // return $this->updateQuery('update khachhang set ');
    }
}
