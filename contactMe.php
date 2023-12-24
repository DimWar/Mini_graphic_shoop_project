<?php
include 'bootstrap/init.php' ;

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $data = $_POST ;
    updateContactMe($data) ;
    setMessageAndRedirect('updated is successfully' , 'contactMe.php') ;
}

$getCurrentContactMe = getCurrentContactMe() ;

require 'view/contact_me_tpl.php' ;