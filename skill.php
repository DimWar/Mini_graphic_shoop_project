<?php
include 'bootstrap/init.php' ;

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $data = $_POST ;
    addSkillToDatabase($data) ? setMessageAndRedirect('Add Skill Is Successfully' , 'skill.php') : setMessageAndRedirect('Add Skill Is Failed' , 'skill.php');
}


if (isset($_GET['delete_skill']) and is_numeric($_GET['delete_skill'])) {
    $skillId = $_GET['delete_skill'] ;
    deleteSkillById($skillId) ?setMessageAndRedirect('Delete Is Succsessfully','skill.php') : setMessageAndRedirect('Delete Is Failed','skill.php') ; 
}


$skillCurrentData = getCurrentMySkill() ;

require 'view/skill_tpl.php' ;