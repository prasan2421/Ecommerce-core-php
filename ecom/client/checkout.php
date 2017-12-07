<?php
include ('../Inc.php');
$obj = new admin;
if(isset($_SESSION['client']))
{
  $id = $_SESSION['client'];
  $cond = "id='".$id."'";
  $query = $obj->select('clienttable',$cond);
  //var_dump($query);die();
  $row = $obj->fetch($query);
  //var_dump($row);die();
}

          
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
<title>Entrada</title>
<link href="css/bootstrap.css" rel="stylesheet">
<link href="css/style.css" rel="stylesheet">
<link rel="stylesheet" href="fonts/font-awesome.min.css">
<link rel="stylesheet" href="css/imagehover.css">
<link rel="stylesheet" href="css/animate.css">
</head>
<body>


<!-- Carousel
    ================================================== -->
<section class="contact-header">
	<div class="container-fluid">
		<div class="row">
			
		</div>
	</div>
</section>
<!--end bottom nav--> 
<!-- /.carousel -->
<section class="mar-top-50px">
  <div class="container">
    <div class="row">
      <center>
        <h1>Checkout</h1>
        <span class="paragraph-size-18px "><br>
        
        </span>
      </center>
    </div>
    <hr>
    
    <hr>
   

  </div>
</section>
 <section class="latest-blog-large">
	<div class="container-fluid bg-gray">
		<div class="row ">
			<div class="col-lg-12">
				
				
				<!--form-->
				<center>
				 <form class="form-inline margin-top" action="" method="POST" id="checkout">
    <div class="form-group" >
				<div class="row mar-bottom">
					
					<div class="col-md-12 col-sm-12 "><input type="text" class="form-control" name="address" id="address" placeholder="ADDRESS"></div>
					
				</div>
				<div class="row mar-bottom">
					<div class="col-md-6"><input type="text" class="form-control" name="phone" id="phone" placeholder="PHONE"></div>
					<div class="col-md-6"><input type="text" class="form-control" name="zip" id="zip" placeholder="ZIP"></div>
					
				 
				 <p><input type="submit" name="submit" value="CONFIRM" class="btn btn-lg btn-primary mar-top-20px" role="button"></p>
         <p><a href="cart.php"  class="btn btn-lg btn-primary mar-top-20px" role="button" >Back</a></p>
					 </div>
				</form>
         <?php
         
        
      if(isset($_POST['submit']))

      {	
      	if(!empty($_SESSION["cart"]))
      {
       foreach ($_SESSION["cart"] as $values) 
        {

      	  $array['item_name']=$values['item_name'];
      	  $array['quantity']=$values['item_quantity'];
      	  $array['price']=$values['item_price'];
      	  $array['category']=$values['item_category'];
      	  $array['user_name']=$row['name'];
          $array['address']=$_POST['address'];
          $array['phone']=$_POST['phone'];
          $array['zip']=$_POST['zip'];
          $q = $obj->insert('checkouttable', $array);
         // var_dump($q);die();
          $exec = $obj->execute($q);
          // var_dump($exec);die();
          $obj->redirect('index.php');
//          var_dump($exec);die();

      }
  }
}

      ?>
			</center>
			
				<!--end form-->
			</div>
			
		</div>
	</div>
</section>
<!--special discount box-->



<!--footer starts-->




<!--end guides-->
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) --> 
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script> 
<script>
function myMap() {
  var mapCanvas = document.getElementById("map");
  var mapOptions = {
    center: new google.maps.LatLng(51.5, -0.2), zoom: 10
  };
  var map = new google.maps.Map(mapCanvas, mapOptions);
}
</script>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyD5KR40RrKJCx1W3iP37RL1PnrhXk1HAL0&callback=myMap"></script>
<!-- Include all compiled plugins (below), or include individual files as needed --> 
<script src="js/bootstrap.min.js"></script> 
<!-- Bootstrap core JavaScript
    ================================================== --> 
<!-- Placed at the end of the document so the pages load faster --> 
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script> 
<script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery.min.js"><\/script>')</script> 

<!-- Just to make our placeholder images work. Don't actually copy the next line! --> 
	<script>
	$(document).ready(function () {
			  $(".navbar-toggle").on("click", function () {
				    $(this).toggleClass("active");
			  });
		});
	</script>
	<script type="text/javascript" src="searchscript.js"></script>
</body>
</html>
