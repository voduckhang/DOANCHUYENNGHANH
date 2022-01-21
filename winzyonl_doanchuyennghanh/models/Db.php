<?php
class Db{
    protected static $pdo;
    function __construct()
    {
        self::$pdo=new PDO('mysql:host='.HOST.';dbname='.DB,USER,PW);
        self::$pdo->query('set name utf8');
    }
    protected function selectQuery($sql,$arr=[]){
        $stm=self::$pdo->prepare($sql);
        $stm->execute($arr);
        return $stm->fetchAll();
    }
    protected function updateQuery($sql,$arr=[]){
        $stm=self::$pdo->prepare($sql);
        $stm->execute($arr);
        return $stm->rowCount();
    }
}
?>