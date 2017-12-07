<?php
include('Inc.php');
$obj = new admin;
$obj->check_session_admin();
// $cond = "id="'.$_GET['id'].'""
// $obj->update(contact,$array,$cond);


$array['status'] = $_POST['status'];
//$cond = "id="'.$_POST['row_id'].'"";
//var_dump($array);var_dump($_POST['row_id']);die();
$cond = "id ='".$_POST['id']."'";
//var_dump($array);var_dump($cond);die();
$result = $obj->update('contact',$array,$cond);
if ($result) 
	echo $_POST['status'];
else
	return false;
//return $result;


?>