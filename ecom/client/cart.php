<?php
include ('../Inc.php');
$obj = new admin;
$obj->check_session_client();
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

<h2 class="text-center">CART</h2>  
     </div>
</section>
    <!---------------------------------travel selling-------------------------------------->
    <div class="best-sellers">
  <div class="best-sellers padding-top-50px">
    <div class="container">
     
      <div class="row">
        <div class="col-sm-12 col-md-10 col-md-offset-1">
            <table class="table table-hover">
                <thead>
                    <tr>
                        <th>Product</th>
                        <th>Quantity</th>
                        <th class="text-center">Price</th>
                        <th class="text-center">Total</th>
                        <th> </th>
                    </tr>
                </thead>
                <tbody>
                  <?php
    if(!empty($_SESSION["cart"]))
      {
        $subtotal = 0;
        foreach ($_SESSION["cart"] as $values) 
        {
          ?>
            <div class="col-md-4">
          <tr>

                        <td class="col-sm-8 col-md-6">
                        <div class="media">
                            <div class="thumbnail pull-left" > <img class="media-object" 
                              src="http://localhost/admin/imagesproducts/<?php echo $values['item_file']; ?>" style="width: 72px; height: 72px;"> 
                            </div>
                            <div class="media-body">
                                <h4 class="media-heading"><?php echo $values['item_name']; ?></h4>
                                <h5 class="media-heading"> Category:<?php echo $values['item_category']; ?></h5>
                                <span>Status: </span><span class="text-success"><strong>In Stock</strong></span>
                            </div>
                        </div></td>
                        <td class="col-sm-1 col-md-1" style="text-align: center">
                          <form method="POST" action="index.php?action=change&id=<?php echo $values['item_id']; ?>" >
                            <input type="hidden" name="hidden_category" class="btn btn-lg btn-primary " value="<?php echo $values['item_category']; ?>" style="float: right;">
            <input type="hidden" name="hidden_name" class="btn btn-lg btn-primary " value="<?php echo $values['item_name']; ?>" style="float: right;">
            <input type="hidden" name="hidden_price" class="btn btn-lg btn-primary " value="<?php echo $values['item_price']; ?>" style="float: right;">
            <input type="hidden" name="hidden_file" class="btn btn-lg btn-primary " value="<?php echo $values['item_file']; ?>" style="float: right;">
            <input type="hidden" name="hidden_category" class="btn btn-lg btn-primary " value="<?php echo $values['item_category']; ?>" style="float: right;">
                        <input type="number" class="form-control" name="quantity" id="quantity" style="color: black;" 
                        value="<?php
                        if($values['item_quantity']==''){
                          echo 1;
                        }
                        else
                        {
                          echo $values['item_quantity']; 
                        }
                         
                         ?>"><br><input type="submit" name="ok" value="OK">
                      </form>
                        </td>
                        <td class="col-sm-1 col-md-1 text-center"><strong>$<?php echo $values['item_price']; ?></strong></td>
                        <td class="col-sm-1 col-md-1 text-center"><strong>$<?php 
                         if($values['item_quantity']==''){
                           echo ($values['item_price']); 
                        }
                        else
                        {
                          echo ($values['item_price']*$values['item_quantity']); 
                        }
                        
                        ?></strong></td>
                        <td class="col-sm-1 col-md-1">
                          <a href="index.php?action=delete&id=<?php echo $values['item_id'];
                          ?>">
                        <button type="button" class="btn btn-danger">
                            <span class="glyphicon glyphicon-remove"></span> Remove
                        </button>
                          </a>
                        </td>
                    </tr>
        </div> 

          <?php
          if($values['item_quantity']==''){
                         $subtotal = $subtotal + ($values['item_price']*1);
                        }
                        else
                        {
                       $subtotal = $subtotal + ($values['item_price']*$values['item_quantity']);
                        }
          
         
        }
        ?>
 <tr>
                        <td>   </td>
                        <td>   </td>
                        <td>   </td>
                        <td><h5>Subtotal</h5></td>

                        <td class="text-right"><h5><strong>$<?php echo number_format($subtotal,2); ?></strong></h5></td>
                    </tr>
        
                   
                    <tr>
                        <td>   </td>
                        <td>   </td>
                        <td>   </td>
                        <td><h5>Estimated shipping</h5></td>
                        <td class="text-right"><h5><strong>$6.94</strong></h5></td>
                    </tr>
                    <tr>
                        <td>   </td>
                        <td>   </td>
                        <td>   </td>
                        <td><h3>Total</h3></td>
                        <td class="text-right"><h3><strong>$<?php echo ($subtotal + '6.94') ?></strong></h3></td>
                    </tr>
                    <?php
      }
        ?>
                    <tr>
                        <td>   </td>
                        <td>   </td>
                        <td>   </td>
                        <td>
                        <a href="index.php" type="button" class="btn btn-default">
                            <span class="glyphicon glyphicon-shopping-cart"></span> Continue Shopping
                        </button></td>
                        <td>
                        <a href="checkout.php" type="button" class="btn btn-success">
                            Checkout <span class="glyphicon glyphicon-play"></span>
                        </button></td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>

    
      
    </div>
  </div>
</div>
     <!---------------------------------end travel selling-------------------------------------->
    <hr>
   

 
 
<!--special discount box-->


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
  <script type="text/javascript" src="searchscript.js"></script>
</body>
</html>
