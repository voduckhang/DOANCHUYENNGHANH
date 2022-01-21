<?php
include 'Db.php';
class ProductCart extends Db
{
    private $masp;
    private $madm;
    private $madonhang;
    private $tensp;
    private $giatien;
    private $hinhanh;

    public function getMasp()
    {
        return $this->masp;
    }

    public function getMadm()
    {
        return $this->madm;
    }

    public function getMadonhang()
    {
        return $this->madonhang;
    }

    public function getTensp()
    {
        return $this->tensp;
    }

    public function getGiatien()
    {
        return $this->giatien;
    }
    public function getHinhanh()
    {
        return $this->hinhanh;
    }

    public function setMasp($masp): void
    {
        $this->masp = $masp;
    }

    public function setMadm($madm): void
    {
        $this->madm = $madm;
    }

    public function setMadonhang($madonhang): void
    {
        $this->madonhang = $madonhang;
    }

    public function setTensp($tensp): void
    {
        $this->tensp = $tensp;
    }

    public function setGiatien($giatien): void
    {
        $this->giatien = $giatien;
    }

    public function setHinhanh($hinhanh): void
    {
        $this->hinhanh = $hinhanh;
    }

    public function __construct($masp, $madm, $madonhang, $tensp, $giatien, $hinhanh)
    {
        $this->masp = $masp;
        $this->madm = $madm;
        $this->madonhang = $madonhang;
        $this->tensp = $tensp;
        $this->giatien = $giatien;
        $this->hinhanh = $hinhanh;
    }

    public function getAllProduct()
    {
        $data = NULL;
        $myDB = new Db();
        $sql = "select * from sanpham join danhmucsanpham on sanpham.madanhmuc=danhmucsanpham.madanhmuc
join donhang on sanpham.madonhang=donhang.madonhang";
        $data = $myDB->selectQuery($sql);
        return $data;
    }
}
