<?php
include 'bootstrap/init.php' ;

if (isset($_GET['update_skill']) and is_numeric($_GET['update_skill'])) {
    $skillId = $_GET['update_skill'] ;
}

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $data = $_POST ;
    updateSkillById($skillId,$data);
    setMessageAndRedirect('updated successfully','skill.php') ;
}

require 'view/skill_edit_tpl.php' ;