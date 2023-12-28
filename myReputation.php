<?php
include 'bootstrap/init.php' ;

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $data = $_POST ;
    addNewReputation($data) ? setMessageAndRedirect('Add Reputation Is Successfully', 'myReputation.php') : setMessageAndRedirect('Add Reputation Is Failed', 'myReputation.php') ;
}

if (isset($_GET['update_reputation']) and is_numeric($_GET['update_reputation'])) {
    $RepId = $_GET['update_reputation'] ;
    updateReputationById($RepId , $data) ? setMessageAndRedirect('Delete Is Succsessfully','myReputation.php') : setMessageAndRedirect('Delete Is Failed','myReputation.php') ;
}

if (isset($_GET['delete_reputation']) and is_numeric($_GET['delete_reputation'])) {
    $repId = $_GET['delete_reputation'] ;
    deleteReputationById($repId) ? setMessageAndRedirect('Delete Is Succsessfully','myReputation.php') : setMessageAndRedirect('Delete Is Failed','myReputation.php') ; 
}

$myReputations =  getAllMyReputation() ;


require 'view/my_reputation_tpl.php' ;