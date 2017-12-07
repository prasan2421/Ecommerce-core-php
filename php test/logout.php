<?php
session_destroy();
include 'Inc.php';
$obj = new Inc;

$obj->redirect('login.php');

?>

