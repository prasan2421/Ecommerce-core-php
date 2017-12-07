<?php
include ('../Inc.php');
$obj = new admin;
$obj->check_session();
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
<!-- Carousel
    ================================================== -->
<div id="carouselHacked" class="carousel slide carousel-fade" data-ride="carousel"> 
  <!-- Indicators -->
  <ol class="carousel-indicators">
    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
    <li data-target="#myCarousel" data-slide-to="1"></li>
  </ol>
  <div class="carousel-inner" role="listbox">
    <div class="item active moving"> <img class="first-slide " src="images/img-01.jpg"  alt="First slide">
      <div class="container">
        <div class="carousel-caption">
          <h3 class="animated bounceInLeft">FINEST COLLECTION OF</h3>
          <h3>PRODUCTS</h3>
          <p><a class="btn btn-lg btn-primary" href="#" role="button">VIEW PRODUCT </a></p>
        </div>
      </div>
    </div>
    <div class="item moving"> <img class="second-slide" src="images/img-02-1.jpg" alt="Second slide">
      <div class="container">
        <div class="carousel-caption">
          <h3 class="animated jello">FINEST COLLECTION OF</h3>
          <h3>PRODUCTS</h3>
          <p><a class="btn btn-lg btn-primary" href="#" role="button">VIEW PRODUCT</a></p>
        </div>
      </div>
    </div>
  </div>
  <a class="left carousel-control" href="#carouselHacked" role="button" data-slide="prev"> <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span> <span class="sr-only">Previous</span> </a> <a class="right carousel-control" href="#carouselHacked" role="button" data-slide="next"> <span class="glyphicon glyphicon-chevron-right animated infinite wobble" aria-hidden="true"></span> <span class="sr-only">Next</span> </a> 
  <!-- /.carousel --> 
  <!--bottom nav-->
  <div class="bottom-nav">
    <div class="bg-brown container-fluid">
      <div class="bottom-nev-wrapper row">
        <ul>
          <li>
            <div class="box-inside-nav">
              <center>
                <img src="images/81057-200.png"><br/>
                
                <span class="text-icon">ACCESORIES</span>
              </center>
            </div>
          </li>
          <li>
            <div class="box-inside-nav">
              <center>
                <img src="images/City_icon_(Noun_Project).svg.png"><br/>
                
                <span class="text-icon">BAGS</span>
              </center>
            </div>
          </li>
          <li>
            <div class="box-inside-nav">
              <center>
                <img src="images/61698-200.png"><br/>
                
                <span class="text-icon">ELECTRONICS</span>
              </center>
            </div>
          </li>
          <li>
            <div class="box-inside-nav">
              <center>
                <img src="images/jump.png"><br/>
              
                <span class="text-icon">CLOTHS</span>
              </center>
            </div>
          </li>
          <li>
            <div class="box-inside-nav">
              <center>
                <img src="images/download copy.png"><br/>
               
                <span class="text-icon">INTERIOR</span>
              </center>
            </div>
          </li>
          <li>
            <div class="box-inside-nav">
              <center>
                <img src="images/rafting-hi copy.png"><br/>
             
                <span class="text-icon">KITCHEN</span>
              </center>
            </div>
          </li>
        </ul>
      </div>
    </div>
  </div>
</div>
<!--end bottom nav--> 
<!-- /.carousel -->
<!--best sellers-->
<div class="best-sellers" id="anchor">
  <div class="best-sellers padding-top-50px">
    <div class="container">
      <div class="row" >
        <center>
          <h1>Products</h1>
          <h3><i>Our collection of products .</i></h3>
        </center>
        <hr>
      </div>
      <div class="row">

        <?php
        $offset = 0;
        if(isset($_GET['offset']))
        {
          $offset = $_GET['offset'];
        }
        $query1 = $obj->selectpag('productstable',"", $offset);
        $total_row = $obj->count_table('productstable');
        //var_dump($total_row);die();
        $total_page = (int)($total_row/3);
        if((($total_row % 3) != 0))
        {
          $total_page++;
        }
        //var_dump($total_page);die();
         if($obj->num($query1)){
            while($row=$obj->fetch($query1))
            {
                  ?>
              <div class="col-md-4 col-sm-6 col-xs-12 mar-bottom-30px">
          <div class="image-wrapper"><img style="height: 100px; object-fit: cover;" src="http://localhost/admin/imagesproducts/<?php echo $row['file']; ?>"  class="img-responsive"><a href="detail.php" class="text-best-seller">
            <h4><?php echo $row['name']; ?></h4>
            </a><?php  $q = "SELECT * FROM categoriestable WHERE id = '".$row["category_id"]."' ";
//      var_dump($q);die();
      $r = $obj->execute($q);
      if($obj->num($r)> 0)
      {
        $row1 = $obj->fetch($r);
      }

                 echo $row1['name']; ?> <br>
           
            <hr>
            <div class="grid-info-text"><p><?php echo $row['description'] ?></p></div><br>
<div class="button"><a class="btn btn-lg btn-primary " href="detail.php?id=<?php echo $row['id'];?>" role="button">EXPLORE</a><a class="btn btn-lg btn-primary " href="#" role="button" style="float: right;">Add To Cart</a></div>            <hr>
            <div class="social-media">
              <p class="social-media-left"><b>$<?php echo $row['price'] ?></b></p>
              <div class="social-media-right"><img src="images/facebook-letter-logo_318-40258.png"><img src="images/twitter-xxl.png"><img src="images/g+.png"><img src="images/152817.png"></div>
            </div>
          </div>
        </div>
        <?php
            }
          }
      ?>
        
        
      </div>
      <div class="container" style="text-align: center;">
               
  <ul class="pagination center" >
    <?php
    //var_dump($total_page);die();
      for($i = 0; $i < $total_page ; $i++)
      {
        ?>
          <li><a href="index.php?offset=<?php echo  $i*3; ?>#anchor"><?php echo $i+1; ?></a></li>
        <?php
      }
    ?>
  </ul>
</div>


    </div>
  </div>
</div>

<!--special discount box-->

<!--end special discount box--> 
<!--special tours-->



<!--destination / adventure-->



<!--end special tours--> 

<!-- guides-->


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
