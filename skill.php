<?php
include 'bootstrap/init.php' ;

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $data = $_POST ;
    addSkillToDatabase($data);
    setMessageAndRedirect('add skill is successfully' , 'skill.php') ;
}


if (isset($_GET['delete_skill']) and is_numeric($_GET['delete_skill'])) {
    $skillId = $_GET['delete_skill'] ;
    deleteSkillById($skillId) ;
    setMessageAndRedirect('Dlete Succsessfully','skill.php') ; 
}


$skillCurrentData = getCurrentMySkill() ;

require 'view/skill_tpl.php' ;