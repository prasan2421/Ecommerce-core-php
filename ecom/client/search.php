<?php
include ('../Inc.php');
$obj = new admin;
$obj->check_session_client();
// echo "<pre>",print_r($_SESSION['cart']),"</pre>"; 
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
<link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet">
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

</head>
<body>

<?php
include('navclient.php');
?>
<section class="contact-header">
  <div class="container-fluid">
    <div class="row">
      <div class="contact-header2-img" style="background-image: url(images/NEPAL-RELIGION-INDRA-JATRA.jpg); height: 104px;"></div>
    </div>
  </div>
</section><br>
<!--end bottom nav--> 
<!-- /.carousel -->


<div>
  <?php
    $query = $_GET['query']; 
    $min_length = 3;
     // var_dump($query);die();
    if(strlen($query) >= $min_length){ 
        $raw_results = "SELECT * FROM productstable
            WHERE name LIKE '%".$query."%' OR description LIKE '%".$query."%'" ;
        $r = $obj->execute($raw_results);
        if(mysqli_num_rows($r) > 0){             
            while($results = mysqli_fetch_array($r)){
             ?>
             <div class="container">
              <div class="row">
                <div class="col-md-6">
                  <div class="col-md-12">
                   <img src="http://localhost/admin/imagesproducts/<?php echo $results['file']; ?>" style="height: 200px;"> 
                  </div>
                </div>
                <div class="col-md-6">
                   <div class="col-md-12">
                    <?php echo $results['name']?>
                   </div>
                   <div class="col-md-12">
                   <?php echo $results['description'] ?>
                   </div>
                    <div class="col-md-12">
                   <a href="detail.php?id=<?php echo $results['id']; ?>" class="btn btn-success">visit page</a>
                   </div>
                </div>
                
              </div>
             </div>
             <?php
               
                // posts results gotten from database(title and text) you can also show id ($results['id'])
            }
             
        }
        else{ // if there is no matching rows do following
            echo "No results";
        }
         
    }
    else{ // if query length is less than minimum
        echo "Minimum length is ".$min_length;
    }
?>
</div>
<!--footer-->


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
        if ($(window).scrollTop() > 290) {
          $(".navbar").css({"position":"fixed"});
          $(".navbar").css({"background":"#252525","height":"95px","margin-top":"-10px"});
          $(".navbar").addClass("animated fadeInDownBig");
        } else if ($(window).scrollTop() < 100) {
          $(".navbar").removeClass("animated fadeInDownBig");
          $(".navbar").css({"background":"#252525","height":"105px","margin-top":"0"});
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
</body>
</html>
