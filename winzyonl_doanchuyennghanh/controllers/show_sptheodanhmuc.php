<?php
$madmsp = isset($_GET['madmsp']) ? $_GET['madmsp'] : '';

    $sql = "SELECT * FROM `sanpham` 
    WHERE 'madanhmuc' = ? ";
    
    $q = $objPDO->prepare($sql);
    $arr=array($madmsp);
    // $q->bindParam(1,$madmsp);
    $q->execute($arr);
    $dmsspp = $q->fetch(PDO::FETCH_ASSOC);

?>