<?php
include 'bootstrap/init.php' ;

if (isset($_GET['update_reputation']) and is_numeric($_GET['update_reputation'])) {
    $repId = $_GET['update_reputation'] ;
}

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $data = $_POST ;
    updateReputationById($repId,$data);
    setMessageAndRedirect('updated successfully','myReputation.php') ;
}

$getRepById = getMyReputationById($repId) ;
var_dump($getRepById) ;
require 'view/my_reputation_edit_tpl.php' ;