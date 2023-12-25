<?php
include 'bootstrap/init.php' ;

$textAbouteMe = getAbouteMeText() ;
$contactMe = getCurrentContactMe() ;
$mySkills = getCurrentMySkill() ;
$getMyReputation = getAllMyReputation() ;
$profileImage = getCurrentProfile() ;
$profileBagImage = getCurrentBagImage() ;
$certificates = getAllCertAddress() ;

require 'view/index_tpl.php' ;