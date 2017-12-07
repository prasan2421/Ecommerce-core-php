<?php
include ('../Inc.php');
$obj = new admin;

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
        <h1>LOG-IN</h1>
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
				 <form class="form-inline margin-top" action="#" method="POST">
    <div class="form-group" >
				<div class="row mar-bottom">
					<div class="col-md-12"><input type="email" class="form-control" id="email" name="email" placeholder="EMAIL"></div>
					
				</div>
				 <div class="row mar-bottom">
					<div class="col-md-12"><input type="password" class="form-control" id="email" name="password" placeholder="PASSWORD"></div>
					
				</div>
				 
				 <p><input type="submit" name="submit" class="btn btn-lg btn-primary mar-top-20px" role="button" value="Log-In"></a></p>
         <p><a href="register.php"  class="btn btn-lg btn-primary mar-top-20px" role="button" value="REGISTER">REGISTER</a></p>
					 </div>
				</form>
         <?php

    if(isset($_POST['submit']))
    {
      $email = $_POST['email'];
      $password = sha1($_POST['password']);
      $q = "SELECT * FROM clienttable WHERE email = '".$email."' AND password = '".$password."' ";
      $r = $obj->execute($q);
      if($obj->num($r)> 0)
      {
        $row = $obj->fetch($r);
        $_SESSION['id'] = $row['id'];
        $obj->redirect('index.php');
      }
      else{
        echo 'email or password does not match';
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

<!--end special discount box--> 



<!--footer starts-->


<section class="container-fluid"><!--lower footer-->
  
  <div class=" row bg2">
    <center>
      <h3 class="text-white" style="font-size: 14px;">@2016. Mikado - All Rights Reserved</h3>
    </center>
  </div>
</section>

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
	
</body>
</html>
