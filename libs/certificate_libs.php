<?php

function addAddressCertificateToDb($newFileName):bool{
    global $pdo ;
    $sql = "INSERT INTO `my-certificates`(url)VALUES(:url)" ;
    $stmt = $pdo->prepare($sql) ;
    $stmt->execute([':url'=>$newFileName ]) ;
    return $stmt->rowCount() ? true : false;
}

function getAllCertAddress(){
    global $pdo ;
    $sql = "SELECT * FROM `my-certificates`" ;
    $stmt = $pdo->prepare($sql) ;
    $stmt->execute() ;
    return $stmt->fetchAll();
}

function dleteCertificate($certId){
    global $pdo ;
    $sql = "DELETE  FROM `my-certificates` WHERE id=:id" ;
    $stmt = $pdo -> prepare($sql) ;
    $stmt->execute([':id'=>$certId]) ;
    return $stmt->rowCount() ? true : false;
}