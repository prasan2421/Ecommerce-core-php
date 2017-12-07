<?php
include 'Inc.php';
$obj = new admin;
unset($_SESSION['admin']);
$obj->redirect('login.php');

?>