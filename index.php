<?php
include 'bootstrap/init.php' ;

$textAbouteMe = getAbouteMeText() ;
$contactMe = getCurrentContactMe() ;
$mySkills = getCurrentMySkill() ;
$getMyReputation = getAllMyReputation() ;
$profileImage = getCurrentProfile() ;
$profileBagImage = getCurrentBagImage() ;

require 'view/index_tpl.php' ;