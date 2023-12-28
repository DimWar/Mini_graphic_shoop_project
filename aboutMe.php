<?php
include 'bootstrap/init.php' ;

$textAbouteMe = getAbouteMeText() ;
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $newText = $_POST['newText'] ?? null ;
    updateTextAbouteMe($newText) ? setMessageAndRedirect('Update Is Successfully','aboutMe.php') : setMessageAndRedirect('Update Is Failde !!','aboutMe.php') ;

}


require 'view/about_me_tpl.php' ;