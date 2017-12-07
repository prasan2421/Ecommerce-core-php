<?php
include('../Inc.php');
$obj= new admin;
$obj->check_session_client();

$q = $obj->select('contact',"");
$fetch = $obj->fetch($q);
?>

<?php

function parseToXML($htmlStr)
{
$xmlStr=str_replace('<','&lt;',$htmlStr);
$xmlStr=str_replace('>','&gt;',$xmlStr);
$xmlStr=str_replace('"','&quot;',$xmlStr);
$xmlStr=str_replace("'",'&#39;',$xmlStr);
$xmlStr=str_replace("&",'&amp;',$xmlStr);
return $xmlStr;
}
// Select all the rows in the markers table
$query = $obj->select('officetable',"");


// Start XML file, echo parent node
echo '<markers>';

// Iterate through the rows, printing XML nodes for each
while ($row = $obj->fetch($query)){
  // Add to XML document node
  echo '<marker ';
  echo 'name="' . parseToXML($row['name']) . '" ';
  echo 'address="' . parseToXML($row['location']) . '" ';
  echo 'lat="' . $row['lat'] . '" ';
  echo 'lng="' . $row['lng'] . '" ';
  echo '/>';
}

// End XML file
echo '</markers>';

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

<style>
      /* Always set the map height explicitly to define the size of the div
       * element that contains the map. */
      #map {
        height: 100%;
      }
      /* Optional: Makes the sample page fill the window. */
      html, body {
        height: 100%;
        margin: 0;
        padding: 0;
      }
    </style>
</head>
<body>


<?php
include ('navclient.php');
?>
<!-- Carousel
    ================================================== -->
<section class="contact-header">
	<div class="container-fluid">
		<div class="row">
			<div class="contact-header-img" style="background-image:url(images/contact-us.jpg);"></div>
		</div>
	</div>
</section>
<!--end bottom nav--> 
<!-- /.carousel -->
<section class="mar-top-50px">
  <div class="container">
    <div class="row">
      <center>
        <h1>CONTACT INFORMATION</h1>
        <span class="paragraph-size-18px "><br>
        
        </span>
      </center>
    </div>
    <hr>
    <div class="row">
      <?php
      $cond = "status=1 ";
      // var_dump($cond);die();
      $q = $obj->select('contact',$cond);
      
if($obj->num($q)>0){
  while ($row = $obj->fetch($q))
   {
    ?>
   <div class="col-md-4 col-sm-6 col-xs-12">
        <div class="cont-box">
          <img src="images/va0032-512.png" width="40px" height="40px"><?php echo $row['number'];?>
        </div>
          <br>
      <div class="cont-text">
          <h3><?php echo $row['name'];?></h3>
          <p><?php echo $row['location'];?></p>
      </div>
      </div>
      <?php
  }
}
      
    	
      ?>
    	    <hr>
   
</div>
  </div>
</section>
 <section class="latest-blog-large">
	<div class="container-fluid bg-gray">
		<div class="row ">
			<div class="col-lg-6">
				<center><h3>CONTACT US</h3></center>
				<center><img src="images/footer image.png"></center><br>
				<!--form-->
				<center>
				 <form class="form-inline margin-top" method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
    <div class="form-group" >
				
				 <div class="row mar-bottom">
					<div class="col-md-6"><input type="email" class="form-control" id="email" name="email" placeholder="E-MAIL"></div>
					<div class="col-md-6"><input type="number" class="form-control" id="phnue" name="phone" placeholder="PHONE NUMBER"></div>
				</div>
         <div class="row mar-bottom">
          <div class="col-md-6"><input type="text" class="form-control" id="address" name="address" placeholder="Address"></div>
          <div class="col-md-6"><input type="country" class="form-control" id="country" name="country" placeholder="COUNTRY"></div>
        </div>
				 <div class="row">
				 	<div class="col-md-12">
				 		<textarea class="form-control" rows="5" id="comment" name="comment" placeholder="YOUR MESSAGE"></textarea>
				 	</div>
				 </div>
				 <p><input type="submit" class="btn btn-lg btn-primary mar-top-20px" name="submitcontact" role="button" value="SUBMIT"></a></p>
					 </div>
				</form>
			</center>
      <?php
if (isset($_POST['submitcontact'])) {
  $array['email']=$_POST['email'];
   // var_dump( $array['email']);die();
  $array['phone']=$_POST['phone'];
   $array['address']=$_POST['address'];
    $array['country']=$_POST['country'];
     $array['comment']=$_POST['comment'];
  $q = $obj->insert('clientcontact',$array);

  $exec = $obj->execute($q);
  $obj->redirect('contact.php');
}
      ?>
			
				<!--end form-->
			</div>
			<div class="col-lg-6">
				<div id="map" style="width:100%;height:470px;background:yellow"></div>

			</div>
		</div>
	</div>
</section>
<!--special discount box-->

<!--end special discount box--> 


<!--footer-->
<section>
  <div class="container-fluid">
    <div class="row bg ">
      <div class="col-lg-8 col-md-8 col-sm-12 col-xs-12">
        <div class=" font-good">
          <center>
            <h3 class="text-white">How Beautiful Is To Do Nothing And Then Rest Afterwards And Then Rest.</h3>
          </center>
        </div>
      </div>
      <div class="font-good">
        <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
          <center>
            <p><a class="btn1 btn-primary" href="#" role="button" >Subscribe</a></p>
          </center>
        </div>
      </div>
    </div>
  </div>
</section>

<!--footer starts-->

<footer class="container-fluid foot">
  <div class="row">
    <div class="container">
      <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
        <div class="clearfix"><img src="images/logo-1-1.png" class="img-fluid" style="width:125px; margin-top: 25px;" ></div>
        <br>
        <div class="clearfix text-white2"> This is Photoshop's version  of Lorem Ipsn gravida nibh vel velit auctor aliquet.Aenean sollicitudin, lorem quis bibendum auci elit.</div>
      </div>
      <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
        <div class="clearfix text-white">
          <h3>LATEST NEWS</h3>
        </div>
        <br>
        <div class="clearfix text-white2"> Water & Rocks: Discovering the Beauty of New Zealand
          05.4.2016
          Updates: People Who Work Overseas and Fly For Free
          05.4.2016</div>
      </div>
      <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
        <div class="clearfix text-white">
          <h3>FOLLOW US</h3>
        </div>
        <br>
        <div class="clearfix text-white2">
          <p>Wellspring - A Health & Lifestyle Theme: https://t.co/PjWoihwZsd
            Need an SEO theme for Wordpress? Try Optimize: https://t.co/67YGlbWtUw
            Deploy, a modern WP theme for business: https://t.co/wus9OHn9SB</p>
        </div>
      </div>
      <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
        <div class="clearfix text-white">
          <h3>INSTAGRAM FEED</h3>
        </div>
        <br>
        <div class="clearfix text-white"></div>
      </div>
    </div>
  </div>
</footer>
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
      var customLabel = {
        restaurant: {
          label: 'R'
        },
        bar: {
          label: 'B'
        }
      };

        function initMap() {
        var map = new google.maps.Map(document.getElementById('map'), {
          center: new google.maps.LatLng(-33.863276, 151.207977),
          zoom: 12
        });
        var infoWindow = new google.maps.InfoWindow;

          // Change this depending on the name of your PHP or XML file
          downloadUrl('https://storage.googleapis.com/mapsdevsite/json/mapmarkers2.xml', function(data) {
            var xml = data.responseXML;
            var markers = xml.documentElement.getElementsByTagName('marker');
            Array.prototype.forEach.call(markers, function(markerElem) {
              var id = markerElem.getAttribute('id');
              var name = markerElem.getAttribute('name');
              var address = markerElem.getAttribute('address');
              var type = markerElem.getAttribute('type');
              var point = new google.maps.LatLng(
                  parseFloat(markerElem.getAttribute('lat')),
                  parseFloat(markerElem.getAttribute('lng')));

              var infowincontent = document.createElement('div');
              var strong = document.createElement('strong');
              strong.textContent = name
              infowincontent.appendChild(strong);
              infowincontent.appendChild(document.createElement('br'));

              var text = document.createElement('text');
              text.textContent = address
              infowincontent.appendChild(text);
              var icon = customLabel[type] || {};
              var marker = new google.maps.Marker({
                map: map,
                position: point,
                label: icon.label
              });
              marker.addListener('click', function() {
                infoWindow.setContent(infowincontent);
                infoWindow.open(map, marker);
              });
            });
          });
        }



      function downloadUrl(url, callback) {
        var request = window.ActiveXObject ?
            new ActiveXObject('Microsoft.XMLHTTP') :
            new XMLHttpRequest;

        request.onreadystatechange = function() {
          if (request.readyState == 4) {
            request.onreadystatechange = doNothing;
            callback(request, request.status);
          }
        };

        request.open('GET', url, true);
        request.send(null);
      }

      function doNothing() {}
    </script>
    <script async defer
    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyD5KR40RrKJCx1W3iP37RL1PnrhXk1HAL0&callback=initMap">
    </script>

<!-- Include all compiled plugins (below), or include individual files as needed --> 
<script src="js/bootstrap.min.js"></script> 
<!-- Bootstrap core JavaScript
    ================================================== --> 
<!-- Placed at the end of the document so the pages load faster --> 
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script> 
<script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery.min.js"><\/script>')</script> 

<!-- Just to make our placeholder images work. Don't actually copy the next line! --> 
<script>
	$(window).on("scroll", function () {
			if ($(window).width() >= 992) {  
				if ($(window).scrollTop() > 190) {
					$(".navbar").css({"position":"fixed"});
					$(".navbar").css({"background":"#252525"});
					$(".navbar").addClass("animated fadeIn");
				} else if ($(window).scrollTop() < 100) {
					$(".navbar").removeClass("animated fadeIn");
					$(".navbar").css({"background":"transparent","position":"absolute"});
				}
			}
			}); //end of scroll method

	</script>
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
	
    <script type="text/javascript">
      function initialize() {
        var mapOptions = {
          center: new google.maps.LatLng(<?php echo $lat.', '.$long; ?>),
          zoom: <?php echo $zoom; ?>
        };
        var map = new google.maps.Map(document.getElementById("map-canvas"),
            mapOptions);
      }
      google.maps.event.addDomListener(window, 'load', initialize);
    </script>
  <script type="text/javascript" src="searchscript.js"></script>
</body>
</html>
