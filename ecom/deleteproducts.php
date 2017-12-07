<?php
include('Inc.php');
$obj = new admin;
$id = $_GET['id'];
$cond = "id='".$id."'";
$obj->delete('productstable',$cond);
$obj->redirect('products.php');
?>