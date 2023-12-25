<?php 

function getAllMyReputation(){
    global $pdo ;
    $sql = "SELECT * FROM `my-reputation`" ;
    $stmt = $pdo->prepare($sql) ;
    $stmt->execute() ;
    return $stmt->fetchAll();
}

function getMyReputationById($id){
    global $pdo ;
    $sql = "SELECT * FROM `my-reputation` WHERE id=:id" ;
    $stmt = $pdo->prepare($sql) ;
    $stmt->execute([':id'=>$id]) ;
    return $stmt->fetch(PDO::FETCH_OBJ);
}

function addNewReputation($data):bool{
    global $pdo ;
    $sql = 'INSERT INTO `my-reputation`(name,text)VALUES(:name,:text) ' ;
    $stmt = $pdo->prepare($sql) ;
    $stmt->execute([':name'=>$data['nameRep'], ':text'=>$data['commentRep'] ]) ;
    return $stmt->rowCount() ? true : false;
}

function updateReputationById(int $repId , $data):bool{
        global $pdo ;
        $sql = "UPDATE `my-reputation` SET name=:name , text=:text WHERE id=:id" ;
        $stmt = $pdo->prepare($sql) ;
        $stmt->execute([':name'=>$data['name'],':text'=>$data['text'],':id'=>$repId]) ;
        return $stmt->rowCount() ? true : false ;
}

function deleteReputationById($repId){
    global $pdo ;
    $sql = "DELETE  FROM `my-reputation` WHERE id=:id" ;
    $stmt = $pdo -> prepare($sql) ;
    $stmt->execute([':id'=>$repId]) ;
    return $stmt->rowCount() ? true : false;
}