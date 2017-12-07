<?php
include('Inc.php');
$obj = new admin;
$id = $_GET['id'];
$cond = "id='".$id."'";
$obj->delete('admintable',$cond);
$obj->redirect('memberlist.php');
?>