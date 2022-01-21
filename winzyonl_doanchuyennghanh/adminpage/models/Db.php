<?php
class Db{
    protected static $pdo;
    function __construct()
    {
        self::$pdo=new PDO('mysql:host='.HOST.';dbname='.DB,USER,PW);
        
    }

    protected function selectQuery($sql,$arr=[])
    {
        $stm=self::$pdo->prepare($sql);
        $stm->execute($arr);
        return $stm->fetchAll();
    }

    protected function insertQuery($sql,$arr=[])
    {
        $stm=self::$pdo->prepare($sql);
        $stm->execute($arr);
        return $stm->rowCount();
    }

    protected function updateQuery($sql,$arr=[])
    {
        $stm=self::$pdo->prepare($sql);
        $stm->execute($arr);
        return $stm->rowCount();
    }

    protected function delteteQuery($sql,$arr=[])
    {
        $stm=self::$pdo->prepare($sql);
        $stm->execute($arr);
        return $stm->rowCount();
    }
}
?>