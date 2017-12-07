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
</section>
<!--end bottom nav--> 
<!-- /.carousel -->
<section class="mar-top-50px" id="anchor">
  <div class="container">
    <div class="row">

<h2 >CATEGORY</h2>
<div class="col-md-3 col-sm-3 col-xs-3">
<a class="btn btn-primary btn-sm" href="grid.php">All</a>
</div>
<?php
 $query = $obj->select('categoriestable',"");

foreach ($query as $q) {
  ?>
    <div class="col-md-3 col-sm-3 col-xs-3">
    <a class="btn btn-primary btn-sm" href="grid.php?id=<?php echo $q['id'];?>"><?php echo $q['name']; ?></a>
  </div>
  <?php
}

?>

     <!-- <div class="col-md-2 col-sm-6 col-xs-12"><a class="btn btn-primary btn-select">
                <input type="hidden" class="btn-select-input" id="" name="" value="" />
                <span class="btn-select-value">CATAGORIES</span>
                <span class="btn-select-arrow glyphicon glyphicon-chevron-down"></span>
                <?php

                ?>
                <ul>
                    <li>Option 1</li>
                    <li>Option 2</li>
                    <li>Option 3</li>
                    <li>Option 4</li>
                </ul>
            </a></div> -->
     <!-- <div class="col-md-2 col-sm-6 col-xs-12"><div class="select-box">
      <a class="btn btn-primary btn-select">
                <input type="hidden" class="btn-select-input" id="" name="" value="" />
                <span class="btn-select-value">BRAND</span>
                <span class="btn-select-arrow glyphicon glyphicon-chevron-down"></span>
                <ul>
                    <li>Option 1</li>
                    <li>Option 2</li>
                    <li>Option 3</li>
                    <li>Option 4</li>
                </ul>
            </a>
     </div></div>
     <div class="col-md-2 col-sm-6 col-xs-12"><div class="select-box">
      <a class="btn btn-primary btn-select">
                <input type="hidden" class="btn-select-input" id="" name="" value="" />
                <span class="btn-select-value">PRICE RANGE</span>
                <span class="btn-select-arrow glyphicon glyphicon-chevron-down"></span>
                <ul>
                    <li>Option 1</li>
                    <li>Option 2</li>
                    <li>Option 3</li>
                    <li>Option 4</li>
                </ul>
            </a>
     </div></div>
     <div class="col-md-2 col-sm-6 col-xs-12"><div class="select-box">
      <a class="btn btn-primary btn-select">
                <input type="hidden" class="btn-select-input" id="" name="" value="" />
                <span class="btn-select-value">SORT ORDER</span>
                <span class="btn-select-arrow glyphicon glyphicon-chevron-down"></span>
                <ul>
                    <li>Option 1</li>
                    <li>Option 2</li>
                    <li>Option 3</li>
                    <li>Option 4</li>
                </ul>
            </a>
     </div></div>
     <div class="col-md-2 col-sm-6 col-xs-12"><div class="select-box">
      <a class="btn btn-primary btn-select">
                <input type="hidden" class="btn-select-input" id="" name="" value="" />
                <span class="btn-select-value">PRICE RANGE</span>
                <span class="btn-select-arrow glyphicon glyphicon-chevron-down"></span>
                <ul>
                    <li>Option 1</li>
                    <li>Option 2</li>
                    <li>Option 3</li>
                    <li>Option 4</li>
                </ul>
            </a>
     </div></div>
     <div class="col-md-2 col-sm-6 col-xs-12"><div class="select-box"><ul class=" grid ">
      <li><a href=""><div class="image2"></div></a></li>
      <li><a href=""><div class="image1"></div></a></li>
    </ul></div></div>
    </div> -->
    
     </div>
</section>
    <!---------------------------------travel selling-------------------------------------->
    <div class="best-sellers">
  <div class="best-sellers padding-top-50px">
    <div class="container">
     
      <div class="row" >
        <?php
            if(isset($_GET['id']))
              {
                
                $id = $_GET['id'];
                $cond = "category_id='".$id."'";
                $offset = 0;
                if(isset($_GET['offset']))
                  {
                    $offset = $_GET['offset'];
                  }
                 $query1 = $obj->selectpag('productstable',$cond, $offset);
                 $total_row1 = $obj->count_table('productstable',$cond);

                  //var_dump($total_row);die();
                  $total_page1 = (int)($total_row1/3);

                  if((($total_row1 % 3) != 0))
                  {
                    $total_page1++;
                  }

              }
              else
              {
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
              }


                if($obj->num($query1))
                {
                  while($row=$obj->fetch($query1))
                  {
                    ?>
                    <div class="col-md-4 col-sm-6 col-xs-12 mar-bottom-30px">
                      <div class="image-wrapper"><img style="height: 100px; object-fit: cover;" class="img-responsive" src="http://localhost/admin/imagesproducts/<?php echo $row['file']; ?>"><a href="" class="text-best-seller">
                        <h4><?php echo $row['name']; ?></h4>
                        </a><a href="">City Tours, </a><a href="detail.html">Urban</a><br>
                        <img src="images/globe-01-512.png"> 12 Countries <img src="images/Icon_World_People-512.png"> 1 Activity
                        <hr>
                        <div class="grid-info-text"><p><?php echo $row['description']; ?></p></div><br>
                          <div class="button"><a class="btn btn-lg btn-primary " href="detail.html" role="button">EXPLORE</a></div>            <hr>
                        <div class="social-media">
                          <p class="social-media-left"><b>£429</b></p>
                          <div class="social-media-right"><img src="images/facebook-letter-logo_318-40258.png"><img src="images/twitter-xxl.png"><img src="images/g+.png"><img src="images/152817.png"></div>
                        </div>
                      </div>
                    </div>
                    <?php
                  }
                }
              
        
        
?>        
        
      </div>
      <ul class="pagination center" >
    <?php
    //var_dump($total_page);die();
if(isset($_GET['id']))
{
  $id = $_GET['id'];
   $cond = "id='".$id."'";
                $query = $obj->select('categoriestable',$cond);
                $row = $obj->fetch($query);
  for($i = 0; $i < $total_page1 ; $i++)
      {
        ?>
          <li><a href="grid.php?id=<?php echo $row['id']; ?>&offset=<?php echo  $i*3; ?>#anchor"> <?php echo $i+1; ?></a></li>
        <?php
      }
}
// id=<?php echo $q['id']; 
else
{
  for($i = 0; $i < $total_page ; $i++)
      {
        ?>
          <li><a href="grid.php?offset=<?php echo  $i*3; ?>#anchor"><?php echo $i+1; ?></a></li>
        <?php
      }
}
      
    ?>
  </ul>
    </div>
  </div>
</div>
     <!---------------------------------end travel selling-------------------------------------->
    <hr>
   

 
 
<!--special discount box-->
<section>
  <div class="" >
    <div class="clearfix">
      <div class="background-darkgray">
        <center>
          <h1>Get special discount on select treks, this week. Call +1 5775 7525</h1>
        </center>
      </div>
    </div>
  </div>
</section>
<!--end special discount box--> 

<section>
  <div class="container-fluid banner ">
    <div class="row">
      <div class="image-holder"></div>
       <div class="bottom-right container"> 
        
        <!--inside carousel text-->
        
        <div id="myCarousel1" class="carousel slide" data-ride="carousel" >
          <div class="carousel-inner" role="listbox">
            <div class="item" style="height: 200px;">
              <div class="container">
                <div class="carousel-caption1">
                  <h1>Example headline.</h1>
                  <p>Note: If you're viewing this page via a <code>file://</code> URL, the "next" and "previous" Glyphicon buttons on the left and right might not load/display properly due to web browser security rules.</p>
                </div>
              </div>
            </div>
            <div class="item active" style="height: 200px;">
              <div class="container">
                <div class="carousel-caption1">
                  <h1>Another example headline.</h1>
                  <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
                </div>
              </div>
            </div>
            <div class="item" style="height: 200px;">
              <div class="container">
                <div class="carousel-caption1">
                  <h1>One more for good measure.</h1>
                  <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
                </div>
              </div>
            </div>
          </div>
          <a class="left2 carousel-control" href="#myCarousel1" role="button" data-slide="prev"> <span class="glyphicon glyphicon-chevron-left icon2" aria-hidden="true"></span> <span class="sr-only">Previous</span> </a> <a class="right2 carousel-control " href="#myCarousel1" role="button" data-slide="next"> <span class="glyphicon glyphicon-chevron-right icon2" aria-hidden="true"></span> <span class="sr-only">Next</span> </a> </div>
        <!--carousel ends--> 
        
        <!--end inside carousel text--> 
      </div>
    </div>
  </div>
</section>
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
</body>
</html>
