<?php

function updateContactMe($data):bool{
    global $pdo ;
    $sql = "UPDATE `contact-me` SET location=:location , phone=:phone , email=:email WHERE id=1" ;
    $stmt = $pdo->prepare($sql) ;
    $stmt->execute([':location'=>$data['location'],':phone'=>$data['phone'],':email' => $data['email']]) ;
    return $stmt->rowCount() ? true : false ;
}

function getCurrentContactMe(){
    global $pdo ;
    $sql = "SELECT * FROM `contact-me` WHERE id=1" ;
    $stmt = $pdo -> prepare($sql) ;
    $stmt->execute() ;
    return $stmt->fetch(PDO::FETCH_OBJ) ;
}