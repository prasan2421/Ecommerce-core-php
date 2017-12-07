
<?php
include ('../Inc.php');
$obj = new admin;
$obj->check_session_client();
// if (!empty($_GET['search'])) {
//   $maps_url = 'https://www.googleapis.com/customsearch/v1?key=AIzaSyCYxvc1TIySrHnwSiEeOt6qeGOR_wqBD5M&cx=014792598386252961627%3A5t7fljf8whw&q=lectures';
//   $maps_json = file_get_contents($maps_url);
//   var_dump($maps_json);die();
//   $maps_array = json_decode($maps_json,true);
//   $lat = $maps_array['results'][0]['geometry']['location']['lat'];
//   $lng = $maps_array['results'][0]['geometry']['location']['lng'];
//    // var_dump($lng);die();
//   // $instagram_url = 'https://api.instagram.com/v1/media/search?lat='.$lat.'&lng='.$lng.'&access_token=77025ae3dcd941b2b55511baf009b885';
//   // // print_r($instagram_url);
//   // $insta_json = file_get_contents($instagram_url);

//   // $insta_array = json_decode($insta_json,true);

// }
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
<?php
include('navclient.php');
?>


<!-- Carousel
    ================================================== -->
<section class="contact-header">
  <div class="container-fluid">
    <div class="row">
      <div class="contact-header2-img" style="background-image: url(images/NEPAL-RELIGION-INDRA-JATRA.jpg); height: 104px;"></div>
    </div>
  </div>
</section><br>
<!--end bottom nav--> 
<!-- /.carousel -->
<section>
  <div class="container">
    <div class="row">
      <div class="col-md-4 col-md-offset-3">
          
<form action="gallery.php?search=<?php echo $_GET['search'];?>" class="<?php if (isset($_GET['search']) && $_GET['search'] ) { echo ""; } else {
  echo "search-form";
} ?>">
                <div class="form-group has-feedback">
                <label for="search" class="sr-only">Search</label>
                <input type="text" class="form-control" name="search" id="search" placeholder="search" value="<?php if (isset($_GET['search']) && $_GET['search'] ) { echo $_GET['search']; } ?>">
                  <span class="glyphicon glyphicon-search form-control-feedback"></span>
              </div>
            </form>
        </div>
    </div>

  </div>
</section>
<section>
  <?php
  $search_string = '';
  if (isset($_GET['search']) && $_GET['search'] ) {
    $search_string = $_GET['search'];
  }
  else
  {
    echo "search images...";
  }
$url = "https://www.amazon.com/s/ref=nb_sb_noss?url=search-alias%3Daps&field-keywords=$search_string";

// sendRequest
// note how referer is set manually
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, $url);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
// curl_setopt($ch, CURLOPT_REFERER, 'http://localhost/admin/client/gallery.php');
$body = curl_exec($ch);
preg_match_all("!https://images-na.ssl-images-amazon.com/images/I/[^\s]*?._AC_US218_.jpg!", $body, $matches);
$images = array_values(array_unique($matches[0]));
// print_r($images);
?>
<div class="container">
  <?php
for ($i=0; $i < count($images) ; $i++) { 
  echo"<img src='$images[$i]'>";
}
?>
</div>
<?php
curl_close($ch);

// now, process the JSON string
// $json = json_decode($body);
// now have some fun with the results...
?>
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
    $(".btn-select").each(function (e) {
        var value = $(this).find("ul li.selected").html();
        if (value != undefined) {
            $(this).find(".btn-select-input").val(value);
            $(this).find(".btn-select-value").html(value);
        }
    });
});

$(document).on('click', '.btn-select', function (e) {
    e.preventDefault();
    var ul = $(this).find("ul");
    if ($(this).hasClass("active")) {
        if (ul.find("li").is(e.target)) {
            var target = $(e.target);
            target.addClass("selected").siblings().removeClass("selected");
            var value = target.html();
            $(this).find(".btn-select-input").val(value);
            $(this).find(".btn-select-value").html(value);
        }
        ul.hide();
        $(this).removeClass("active");
    }
    else {
        $('.btn-select').not(this).each(function () {
            $(this).removeClass("active").find("ul").hide();
        });
        ul.slideDown(300);
        $(this).addClass("active");
    }
});

$(document).on('click', function (e) {
    var target = $(e.target).closest(".btn-select");
    if (!target.length) {
        $(".btn-select").removeClass("active").find("ul").hide();
    }
});

  </script>
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
