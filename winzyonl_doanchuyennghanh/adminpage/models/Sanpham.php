<?php

class Sanpham extends Db{
    function All(){
        return $this->selectQuery("select * from sanpham join danhmucsanpham on sanpham.madanhmuc=danhmucsanpham.madanhmuc
        join donhang on sanpham.madonhang=donhang.madonhang ORDER BY SANPHAM.masanpham ASC");
    }  
}
