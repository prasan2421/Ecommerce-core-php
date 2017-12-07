<?php
include('Inc.php');
$obj = new test;
$id = $_GET['id'];
$cond = "id='".$id."'";
$obj->delete('phptesttable',$cond);
$obj->redirect('users.php');
?>