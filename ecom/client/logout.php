<?php
include '../Inc.php';
$obj = new admin;
unset($_SESSION['client']);
unset($_SESSION['cart']);
$obj->redirect('login.php');

?>