<?php
include 'Inc.php';
$obj = new test;
session_destroy();
$obj->redirect('login.php');

?>