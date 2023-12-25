<?php

function addAddressImageToDb($newFileName):bool{
    global $pdo ;
    $sql = "UPDATE `my-profile` SET url=:url  WHERE id=1" ;
    $stmt = $pdo->prepare($sql) ;
    $stmt->execute([':url'=>$newFileName]) ;
    return $stmt->rowCount() ? true : false ;
}

function getCurrentProfile():object{
    global $pdo ;
    $sql = "SELECT * FROM `my-profile`" ;
    $stmt = $pdo->prepare($sql) ;
    $stmt->execute() ;
    return $stmt->fetch(PDO::FETCH_OBJ);   
}