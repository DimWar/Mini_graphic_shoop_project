<?php
include 'bootstrap/init.php' ;

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $data = $_POST ;
    addNewReputation($data) ;
    setMessageAndRedirect('add Reputation is successfully', 'myReputation.php') ;
}

if (isset($_GET['update_reputation']) and is_numeric($_GET['update_reputation'])) {
    $RepId = $_GET['update_reputation'] ;
    updateReputationById($RepId , $data) ;
    setMessageAndRedirect('Delete Succsessfully','myReputation.php') ; 
}

if (isset($_GET['delete_reputation']) and is_numeric($_GET['delete_reputation'])) {
    $repId = $_GET['delete_reputation'] ;
    deleteReputationById($repId) ;
    setMessageAndRedirect('Delete Succsessfully','myReputation.php') ; 
}

$myReputations =  getAllMyReputation() ;


require 'view/my_reputation_tpl.php' ;