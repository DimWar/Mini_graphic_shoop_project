<?php
include 'bootstrap/init.php' ;

if (isset($_GET['update_skill']) and is_numeric($_GET['update_skill'])) {
    $skillId = $_GET['update_skill'] ;
}

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $data = $_POST ;
    updateSkillById($skillId,$data) ? setMessageAndRedirect('Updated Is Successfully','skill.php') : setMessageAndRedirect('Updated Is Failed','skill.php') ;
}

require 'view/skill_edit_tpl.php' ;