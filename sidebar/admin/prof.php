<?php
if(isset($_SESSION['admin']))
{
  $id = $_SESSION['admin'];
  $cond = "id='".$id."'";
  $query = $obj->select('admintable',$cond);
  //var_dump($query);die();
  $row = $obj->fetch($query);
  //var_dump($row);die();
}
?>