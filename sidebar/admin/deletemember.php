<?php
include('../Inc.php');
$obj = new Sidebar;
$id = $_GET['id'];
$cond = "id='".$id."'";
$obj->delete('moderatortable',$cond);
$obj->redirect('memberlist.php');
?>