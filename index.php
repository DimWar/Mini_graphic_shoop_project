<?php
include 'bootstrap/init.php' ;

$textAbouteMe = getAbouteMeText() ;
$contactMe = getCurrentContactMe() ;
$mySkills = getCurrentMySkill() ;
$getMyReputation = getAllMyReputation() ;
require 'view/index_tpl.php' ;