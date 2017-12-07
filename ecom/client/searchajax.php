<?php
include('../Inc.php');
$obj = new admin;
$obj->check_session_client();
   

$output = '';
if(isset($_POST["query"]))
{
 // $search = mysqli_real_escape_string($obj->link, $_POST["query"]);

  //echo $query;
 $query = " SELECT * FROM productstable WHERE status='1' AND name LIKE '%".$_POST['query']."%' LIMIT 3";
   $result = $obj->execute($query); 
  ?>
  <div class="dropdwn" role="menu" style="width: 300px;" >
    <?php
if(mysqli_num_rows($result) > 0)
{
 while($row = mysqli_fetch_array($result))
 {
   $output.= '
       <div class="col-md-12">
       <a href="detail.php?id='.$row['id'].'">
       <div class="search_box_in" style="height:55px;background-color: white;">
       <div class="col-md-4">
       <img src="http://localhost/admin/imagesproducts/'.$row['file'].'" style="width:100%; height:45px;">
       </div>
       <div class="col-md-8">
           '.$row["name"].'  <br/>
                '.$row["description"].'  
        </div>               
        </div>
        </a>
        </div>               
  ';
 
 

 
 // if ($row["description"])
 // {
 //   $output.= '
 //       <div class="col-md-12">
 //       <div class="search_box_in">
 //           '.$row["description"].'                       
 //        </div>
 //        </div>               
 //  ';
 // }
  
 }
 echo $output;
}
else
{
  ?><div class="search_box_in"><?php
           echo "Nothing Found";                       
    ?></div><?php   
}

?>
<a href="">See More</a>
</div>
<?php
}

else
{
 echo '';
}

?>





