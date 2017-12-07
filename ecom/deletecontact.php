<?php
include('Inc.php');
$obj = new admin;
$id = $_GET['id'];
$cond = "id='".$id."'";
$obj->delete('contact',$cond);
$obj->redirect('contact.php');
?>