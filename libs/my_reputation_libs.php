<?php 

function getAllMyReputation(){
    global $pdo ;
    $sql = "SELECT * FROM `my-reputation`" ;
    $stmt = $pdo->prepare($sql) ;
    $stmt->execute() ;
    return $stmt->fetchAll();
}
