<?php
include ('../Inc.php');
$obj = new admin;
// define variables and set to empty values
		 $nameErr = "";
         $emailErr = "";
         $passwordErr = "";
         $genderErr = "";

         	if (isset($_POST["name"]) && $_POST["name"] == "") {
			    $nameErr = "Name is required";
			  }
			   if (isset($_POST["email"]) && $_POST["email"] == "") {
			    $emailErr = "Email is required";
			  } 
			  if (isset($_POST["password"]) && $_POST["password"] == "") {
			    $passwordErr = "Password is required";
			  } 
			   if (isset($_POST["gender"]) && $_POST["gender"] == "") {
			    $genderErr = "Gender is required";
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
        <h1>REGISTER</h1>
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
				 <form class="form-inline margin-top" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="POST" id="registerclient">
    <div class="form-group" >
				<div class="row mar-bottom">
					<div class="col-md-6 col-sm-12 col-lg-"><input type="text" class="form-control" name="name" id="name" placeholder="NAME" ><?php echo $nameErr; ?></div>
					
					<div class="col-md-6"><select name="gender" form="registerclient" style="    height: 41px; width: 192px;" >
  <option value="male">MALE</option>
  <option value="female">FEMALE</option>

</select></div>
					
				</div>
				<div class="row mar-bottom">
					<div class="col-md-6"><input type="email" class="form-control" name="email" id="email" placeholder="EMAIL"><?php echo $emailErr; ?>
					</div>
					<div class="col-md-6"><input type="password" class="form-control" name="password" id="password" placeholder="PASSWORD" >
						<?php echo $passwordErr; ?></div>
					
			
				 
				 <p><input type="submit" name="submit" value="Register" class="btn btn-lg btn-primary mar-top-20px" role="button"></p>
         <p><a href="login.php"  class="btn btn-lg btn-primary mar-top-20px" role="button" value="REGISTER">LOGIN</a></p>
					 </div>
				</form>
				<?php

				?>
         <?php


      if(isset($_POST['submit']) && $_POST['name'] && $_POST['email'] && $_POST['gender'] && $_POST['password'])
      {
			      
			     $array['name']=$_POST['name'];
			     $array['email']=$_POST['email'];
			     $array['password']=sha1($_POST['password']); 
			     $array['gender']=$_POST['gender'];
		
          $cond = "email='".$_POST['email']."'";
          $r = $obj->select('clienttable',$cond);
          if ($obj->num($r)>0) {
          	echo "Account already exist!!";
          }else
          {
          $q = $obj->insert('clienttable', $array);
//          var_dump($q);die();
          $exec = $obj->execute($q);
          $obj->redirect('login.php');
      }
//          var_dump($exec);die();

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
	
</body>
</html>
