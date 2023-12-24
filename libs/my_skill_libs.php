<?php

function getCurrentMySkill(){
    global $pdo ;
    $sql = "SELECT * FROM `my-skills`" ;
    $stmt = $pdo->prepare($sql) ;
    $stmt->execute() ;
    return $stmt->fetchAll();
}

function updateSkillById(int $skillId , $data){
    global $pdo ;
    $sql = "UPDATE `my-skills` SET name=:name , number=:number WHERE id=:id" ;
    $stmt = $pdo->prepare($sql) ;
    $stmt->execute([':name'=>$data['skillName'],':number'=>$data['skillNumber'],':id'=>$skillId]) ;
    return $stmt->rowCount() ? true : false ;
}

function addSkillToDatabase($data):bool{
    global $pdo ;
    $sql = 'INSERT INTO `my-skills`(name,number)VALUES(:name,:number) ' ;
    $stmt = $pdo->prepare($sql) ;
    $stmt->execute([':name'=>$data['nameSkill'], ':number'=>$data['numberSkill'] ]) ;
    return $stmt->rowCount() ? true : false;
}

