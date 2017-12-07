<?php
include 'Inc.php';
$obj = new admin;
session_destroy();
$obj->redirect('login.php');

?>