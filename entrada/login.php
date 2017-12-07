<?php


include ('Inc.php');
$obj = new test;

?>
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
  <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.min.js" integrity="sha256-VazP97ZCwtekAsvgPBSUwPFKdrwD3unUfSGVYrahUqU=" crossorigin="anonymous"></script>
</head>
<body>


<!-- Carousel
    ================================================== -->

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
 <section class="latest-blog-large container">
	<div class="container-fluid bg-gray">
		<div class="row ">
			<div class="col-lg-12">
				
				
				<!--form-->

				 <form class="form-inline margin-top text-center" action="" method="POST">
    <div class="form-group" >
				<div class="row mar-bottom">
					<div class="col-md-12"><input type="email" class="form-control" name="email" placeholder="EMAIL"></div>
					
				</div>
				 <div class="row mar-bottom">
					<div class="col-md-12"><input type="password" class="form-control" name="password" placeholder="PASSWORD"></div>
					
				</div>
				 
				 <p><input type="submit" class="btn btn-lg btn-primary mar-top-20px" name="submit" value="Log-In"></p>
      <p><a href="register.php" class="btn btn-lg btn-primary mar-top-20px" name="register">Register</a></p>
					 </div>
				</form>
		<?php
        $con = mysqli_connect("localhost","root","","testdatabase");
        if(isset($_POST['submit']))
        {
//          $arr['name']= $_POST['name'];
          $email= $_POST['email'];
          $password= sha1($_POST['password']);

          $query=" SELECT * FROM phptesttable WHERE email = '".$email."' AND password = '".$password."' ";
//          var_dump($query);die();
          $result = mysqli_query($con,$query);
          if($obj->num($result)> 0)
          {
            $row = $obj->fetch($result);
            //var_dump($row);die();
            session_start();
            $_SESSION['id'] = $row['id'];
            $_SESSION['email'] = $row['email'];
            $_SESSION['phone'] = $row['phone'];
            $_SESSION['name'] = $row['name'];
//        var_dump( $_SESSION['user_id']);die();
            $obj->redirect('home.php');
          }
          else{
            echo 'email or password does not match';
          }
        }
        ?>
			
				<!--end form-->
			</div>
			
		</div>
	</div>
</section>

<!--special discount box-->


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
