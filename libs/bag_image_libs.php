<?php

function addAddressBagImageToDb($newFileName):bool{
    global $pdo ;
    $sql = "UPDATE `my-bagImage` SET url=:url  WHERE id=1" ;
    $stmt = $pdo->prepare($sql) ;
    $stmt->execute([':url'=>$newFileName]) ;
    return $stmt->rowCount() ? true : false ;
}

function getCurrentBagImage():object{
    global $pdo ;
    $sql = "SELECT * FROM `my-bagImage`" ;
    $stmt = $pdo->prepare($sql) ;
    $stmt->execute() ;
    return $stmt->fetch(PDO::FETCH_OBJ);   
}