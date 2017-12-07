<?php
include('Inc.php');
$obj = new admin;
$id = $_GET['id'];
$cond = "id='".$id."'";
$obj->delete('officetable',$cond);
$obj->redirect('office.php');
?>