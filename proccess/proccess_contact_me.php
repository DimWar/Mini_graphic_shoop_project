<?php
$editAction = $_GET['action'] ;
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    if (isset($editAction) and $editAction == 'edit') {
        var_dump('nice') ;
    }
}