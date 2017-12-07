<?php
include('Inc.php');
$obj = new admin;
$id = $_GET['id'];
$cond = "id='".$id."'";
$obj->delete('categoriestable',$cond);
$obj->redirect('categories.php');
?>