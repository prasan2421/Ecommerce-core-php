<!DOCTYPE html>
<html lang="en">
<?php
include ('Inc.php');
$obj=new test;
$obj->check_session();

?>
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
<title>Dashboard</title>
<link href="css/bootstrap.css" rel="stylesheet">
<link href="css/style.css" rel="stylesheet">
<link rel="stylesheet" href="fonts/font-awesome.min.css">
<link rel="stylesheet" href="css/imagehover.css">
<link rel="stylesheet" href="css/animate.css">
</head>
<body>

<?php
include ('nav.php');
?>
<!-- Carousel
    ================================================== -->
<section class="contact-header">
	<div class="container-fluid">
		<div class="row">
			<div class="contact-header-img" style="background-image:url(images/contact-us.jpg); height: 104px;"></div>
		</div>
	</div>
</section>
<!--end bottom nav--> 
<section>
	<div class="container">
		<div class="row">
			<center><h2>Welcome
                <?php
                echo $_SESSION['email'].'<br/>';
                echo $_SESSION['name'];

                ?></h2>




                <!--database connect-->
</center>
		</div>
	</div>
</section>
<!--end guides-->
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) --> 
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script> 

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
	$('#carouselHacked').carousel();
	</script>
	<script>
	$(document).ready(function () {
			  $(".navbar-toggle").on("click", function () {
				    $(this).toggleClass("active");
			  });
		});
	</script>
	
</body>
</html>
