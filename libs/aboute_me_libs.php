<?php

function getAbouteMeText():object{
    global $pdo ;
    $sql = "SELECT * FROM `aboute-me`" ;
    $stmt = $pdo->prepare($sql) ;
    $stmt->execute() ;
    return $stmt->fetch(PDO::FETCH_OBJ) ;
}

function updateTextAbouteMe(string $text):bool{
    global $pdo ;
    $sql = "UPDATE `aboute-me` SET `text`=:text WHERE id=1" ;
    $stmt = $pdo->prepare($sql) ;
    $stmt->execute([':text'=>$text]) ;
    return $stmt->rowCount() ? true : false ;
}

