<?php
include('Inc.php');
$obj= new Sidebar;
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
<title>no sidebar</title>

<!-- Bootstrap -->
<link href="css/bootstrap.min.css" rel="stylesheet">
<link href="css/style.css" rel="stylesheet">
<link rel="stylesheet" href="fonts/font-awesome.min.css">
</head>
<body>
<!--header start-->

<?php
include('nav.php');
?>

<!--header end-->
<section class="container-fluid mar-bottom">
  <div class="row">
    <div class="col-mg-12 ">
      <div class="background">
        <div class="image"> 
          <!-- Carousel
    ================================================== -->
          <div id="myCarousel" class="carousel slide" data-ride="carousel"> 
            <!-- Indicators -->
            
            <div class="carousel-inner" role="listbox">
              <div class="item active"> <img class="first-slide" src="images/Langsisa-ri.jpg" alt="First slide">
                <div class="container">
                  <div class="carousel-caption"> 
                    <!-- <h1 class="font-70px">TRAVEL STYLES</h1>
              <p class="font-32px">THE RIGHT TOUR FOR THE <br/> RIGHT <b>TRAVELLER.</b> </p>--> 
                    
                  </div>
                </div>
              </div>
              <div class="item"> <img class="second-slide" src="images/Manaslu-Expedition-Himalayan-Experience.jpg" alt="Second slide">
                <div class="container">
                  <div class="carousel-caption">
                    <h1>MANASLU EXPEDITION</h1>
                  </div>
                </div>
              </div>
              <div class="item"> <img class="second-slide" src="images/Manaslu-Expedition.jpg" alt="Second slide">
                <div class="container">
                  <div class="carousel-caption"> 
                    <!--<h1 class="font-70px">TRAVEL STYLES</h1>
				<p class="font-32px">THE RIGHT TOUR FOR THE <br/> RIGHT <b>TRAVELLER.</b> </p>--> 
                    
                  </div>
                </div>
              </div>
              <div class="item"> <img class="second-slide" src="images/boudha.jpg" alt="Second slide">
                <div class="container">
                  <div class="carousel-caption">
                    <h1>BOUDHANATH</h1>
                    <p>World's Heritage Site - Nepal</p>
                  </div>
                </div>
              </div>
              <div class="item"> <img class="second-slide" src="images/ktm.jpg" alt="Second slide">
                <div class="container">
                  <div class="carousel-caption">
                    <h1>PATAN DURBAR SQUARE</h1>
                    <p>World's Heritage Site - <b>NEPAL</b> </p>
                  </div>
                </div>
              </div>
            </div>
            <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev"> <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span> <span class="sr-only">Previous</span> </a> <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next"> <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span> <span class="sr-only">Next</span> </a> </div>
          <!-- /.carousel --> 
        </div>
        <div class="triangle"><img src="images/transparent-bottom.png" class="img-responsive"> 
          <!--triangle-->
          <div class="base-wrapper1">
            <div class="base">
              <ul class="breadcrumb footer_menu">
                <li><a href="">Home</a></li>
                <li><a href=""><b>Adventures</b></a></li>
              </ul>
            </div>
          </div>
          <!--end pentagon--> 
        </div>
      </div>
    </div>
  </div>
</section>
<!--below header =form-->
<div class="base-wrapper2">
  <div class="base">
    <ul class="breadcrumb footer_menu">
      <li><a href="">Home</a></li>
      <li><a href=""><b>Adventures</b></a></li>
    </ul>
  </div>
</div>
<section>
  <div class="container mar-bottom-mid">
    <div class="row">
      <div class="col-md-3 col-sm-12 "><!--form select first-->
        <div class="form-group">
          <select class="form-control" id="sel1">
            <option>Select Adventure</option>
            <option>2</option>
            <option>3</option>
            <option>4</option>
          </select>
        </div>
      </div>
      <!--end form select -->
      <div class="col-md-3 col-sm-12 "><!--form select 2-->
        <div class="form-group">
          <select class="form-control" id="sel2">
            <option>Select your Destination</option>
            <option>2</option>
            <option>3</option>
            <option>4</option>
          </select>
        </div>
      </div>
      <!--end form select -->
      <div class="col-md-2 col-sm-12 "><!--form select 3-->
        <div class="form-group">
          <select class="form-control" id="sel3">
            <option>Date</option>
            <option>2</option>
            <option>3</option>
            <option>4</option>
          </select>
        </div>
      </div>
      <!--end form select -->
      <div class="col-md-2 col-sm-12 "><!--form select 4-->
        <div class="form-group">
          <select class="form-control" id="sel4">
            <option>Price</option>
            <option>2</option>
            <option>3</option>
            <option>4</option>
          </select>
        </div>
      </div>
      <!--end form select -->
      <div class="col-md-2 col-sm-12 padd "><!--form select 5-->
        
        <ul class="nav nav-tabs grid ">
          <li><a href="index.html">
            <div class="image2"></div>
            </a></li>
          <li><a href="index 2.html">
            <div class="image1"></div>
            </a></li>
        </ul>
      </div>
      <!--end form select --> 
    </div>
  </div>
</section>
<!--end header form--> 
<!--black/white nav-->
<section class="blackwhite-nav mar-bottom">
  <div class="container text-center">
    <div class="row">
      <div class="col-def col-lg-2 col-md-2"> 
        <!--image holding-->
        <div class="image-bw">
          <div class="image-holder"><img src="images/cycle black.PNG" class="image-black"><img src="images/cycle.PNG" class="image-white"></div>
          <h4>CYCLING</h4>
        </div>
        <!--end imahe holding--> 
      </div>
      <div class="col-def col-lg-2 col-md-2"> 
        <!--image holding-->
        <div class="image-bw">
          <div class="image-holder"><img src="images/family black.PNG" class="image-black"><img src="images/family.PNG" class="image-white"></div>
          <h4>FAMILY</h4>
        </div>
        <!--end imahe holding--> 
      </div>
      <div class="col-def col-lg-2 col-md-2"> 
        <!--image holding-->
        <div class="image-bw">
          <div class="image-holder"><img src="images/hiking black.PNG" class="image-black"><img src="images/hiking.PNG" class="image-white"></div>
          <h4>HIKING</h4>
        </div>
        <!--end imahe holding--> 
      </div>
      <div class="col-def col-lg-2 col-md-2"> 
        <!--image holding-->
        <div class="image-bw">
          <div class="image-holder"><img src="images/sailing black.PNG" class="image-black"><img src="images/sailing.PNG" class="image-white"></div>
          <h4>RAFTING</h4>
        </div>
        <!--end imahe holding--> 
      </div>
      <div class="col-def col-lg-2 col-md-2"> 
        <!--image holding-->
        <div class="image-bw">
          <div class="image-holder"><img src="images/polar black.PNG" class="image-black"><img src="images/polar.PNG" class="image-white"></div>
          <h4>POLAR</h4>
        </div>
        <!--end imahe holding--> 
      </div>
      <div class="col-def col-lg-2 col-md-2"> 
        <!--image holding-->
        <div class="image-bw">
          <div class="image-holder"><img src="images/wildlife black.PNG" class="image-black"><img src="images/wildlife.PNG" class="image-white"></div>
          <h4>WILDLIFE</h4>
        </div>
        <!--end imahe holding--> 
      </div>
    </div>
  </div>
</section>
<!--end black white nav--> 

<!--below informations-->
<section>
  <div class="container-fluid mar-bottom-mid">
    <div class="row">
      <div class="container txt-just">
        <div class="col-lg-4 col-md-4 col-sm-12"> 
          <!--texts-->
          
          <h3><b>ABOUT HIMALAYAN EXPERIENCE</b></h3>
          <p>Himalayan Experience offers world renowned guided mountaineering and trekking expeditions to Everest, Manaslu, Lobuche and Lhotse It is one of the longest established expedition organisers in the Himalaya, with an enviable reputation for summit success and an unrivalled client safety record.</p>
          
          <!--end txts--> 
        </div>
        <div class="col-lg-4 col-md-4 col-sm-12"> 
          <!--texts-->
          
          <h3><b>WHY WITH HIMALAYAN EXPERIENCE</b></h3>
          <p>Established in 1996, a team of an experienced mountaineers and expedition leaders who has guided in the Himalaya since 1980, Himalayan Experience provides superior and unmatched expedition leadership, logistics and support for its clients.</p>
          
          <!--end txts--> 
        </div>
        <div class="col-lg-4 col-md-4 col-sm-12"> 
          <!--texts-->
          
          <h3><b>QUALITY OF HIMALAYAN EXPERIENCE</b></h3>
          <p>We operate with the optimum client/guide ratio of 1:4 and a client/sherpa ratio of 1:1. We take pride in the quality of our longstanding team of staff, many of whom have been with Himalayan Experience since it began. This unique team results in the most advanced level of communication, understanding and support – factors which set Himalayan Experience apart.</p>
          
          <!--end txts--> 
        </div>
      </div>
    </div>
  </div>
</section>
<!--end informations--> 

<!--images below-->
<section class="image-cont mar-bottom">
  <div class="container">
    <h3><b>OUR BEST SELLER EXPEDITIONS & TREKS</b></h3>
    <hr>
    <div class="row mar-bottom-mid">
      <div class="col-md-4 col-sm-6 col-xs-12">
        <div class="hovereffect"> <img class="img-thumbnail-costom" src="images/DSC_4982.jpg"> 
          <!-- Static Header -->
          <div class="header-text ">
            <div class="col-md-12 text-center text-size"> <strong>EVEREST BASE CAMP 5,267m</strong> </div>
          </div>
          <!-- /header-text -->
          <div class="overlay">
            <h2>Hover effect 1</h2>
            <a class="info" href="everest.html">link here</a> </div>
        </div>
      </div>
      <div class="col-md-4 col-sm-6 col-xs-12">
        <div class="hovereffect"> <img class="img-thumbnail-costom" src="images/im03.jpg"> 
          <!-- Static Header -->
          <div class="header-text ">
            <div class="col-md-12 text-center text-size"> <strong>LHOTSE 8,516m</strong> </div>
          </div>
          <!-- /header-text -->
          <div class="overlay">
            <h2>Hover effect 1</h2>
            <a class="info" href="#">link here</a> </div>
        </div>
      </div>
      <div class="col-md-4 col-sm-6 col-xs-12">
        <div class="hovereffect"> <img class="img-thumbnail-costom" src="images/DSC_6308.jpg"> 
          <!-- Static Header -->
          <div class="header-text ">
            <div class="col-md-12 text-center text-size"> <strong>EVEREST SOUTH SIDE 8,848m</strong> </div>
          </div>
          <!-- /header-text -->
          <div class="overlay">
            <h2>Hover effect 1</h2>
            <a class="info" href="#">link here</a> </div>
        </div>
      </div>
      <div class="col-md-4 col-sm-6 col-xs-12">
        <div class="hovereffect"> <img class="img-thumbnail-costom" src="images/k2.jpg"> 
          <!-- Static Header -->
          <div class="header-text ">
            <div class="col-md-12 text-center text-size"> <strong>K2 8,616m</strong> </div>
          </div>
          <!-- /header-text -->
          <div class="overlay">
            <h2>Hover effect 1</h2>
            <a class="info" href="#">link here</a> </div>
        </div>
      </div>
      <div class="col-md-4 col-sm-6 col-xs-12">
        <div class="hovereffect"> <img class="img-thumbnail-costom" src="images/DSC_5563.jpg"> 
          <!-- Static Header -->
          <div class="header-text ">
            <div class="col-md-12 text-center text-size"> <strong>LOBUCHE 6,119m</strong> </div>
          </div>
          <!-- /header-text -->
          <div class="overlay">
            <h2>Hover effect 1</h2>
            <a class="info" href="#">link here</a> </div>
        </div>
      </div>
      <div class="col-md-4 col-sm-6 col-xs-12">
        <div class="hovereffect"> <img class="img-thumbnail-costom" src="images/k2 (1).jpg"> 
          <!-- Static Header -->
          <div class="header-text ">
            <div class="col-md-12 text-center text-size"> <strong>K2 8,616m</strong> </div>
          </div>
          <!-- /header-text -->
          <div class="overlay">
            <h2>Hover effect 1</h2>
            <a class="info" href="#">link here</a> </div>
        </div>
      </div>
      <div class="col-md-4 col-sm-6 col-xs-12">
        <div class="hovereffect"> <img class="img-thumbnail-costom" src="images/IMG_4934.jpg"> 
          <!-- Static Header -->
          <div class="header-text ">
            <div class="col-md-12 text-center text-size"> <strong>MANASLU 8,163m</strong> </div>
          </div>
          <!-- /header-text -->
          <div class="overlay">
            <h2>Hover effect 1</h2>
            <a class="info" href="#">link here</a> </div>
        </div>
      </div>
    </div>
  </div>
  <!--pagination-->
  <div class="row">
    <div class="col-md-12">
      <center>
        <nav aria-label="Page navigation">
          <ul class="pagination">
            <li> <a href="#" aria-label="Previous"> <span aria-hidden="true">&laquo;</span> </a> </li>
            <li><a href="#">1</a></li>
            <li><a href="#">2</a></li>
            <li><a href="#">3</a></li>
            <li><a href="#">4</a></li>
            <li><a href="#">5</a></li>
            <li> <a href="#" aria-label="Next"> <span aria-hidden="true">&raquo;</span> </a> </li>
          </ul>
        </nav>
      </center>
    </div>
  </div>
  <!--end pagination--> 
  
</section>
<!--end images below--> 
<!--latest blog large-->
<section class="latest-blog-large">
  <div class="container-fluid bg-gray">
    <div class="row mar-bottom margin-top">
      <div class="col-lg-12">
        <div class="container">
          <div class="row mar-bottom-mid2">
            <div class="col-lg-12 center-fonts text-center">
              <h2>LATEST <strong>BLOG POSTS</strong></h2>
              <hr>
              Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque dolor turpis, pulvinar varius dui<br/>
              id, convallis iaculis eros. Praesent porta lacinia elementum. </div>
          </div>
          <div class="row">
            <div class="col-md-6 col-sm-12 column-wrapper">
              <div class="img-thumbnail">
                <div class="hovereffect1"><!--hover effect image--> 
                  <img src="images/1(2).jpg">
                  <div class="overlay1"> <a class="info" ></a> </div>
                </div>
                <!--end hover effect--> 
              </div>
              <div class="sidebox-left"><strong>WHAT IS TRAVEL? WE ANSWER THE BIG, BURNING QUESTION.....</strong><br>
                <br>
                The question of What Travel Is is inter- esting, but more for what it tells you about the people doing the asking.<br>
                <br>
                <button type="button" class="btn btn-default">Default</button>
              </div>
              <div class="sidebox-smalltop">10</div>
              <div class="triangle-topright-up"></div>
              <div class="sidebox-smallbottom">AUG</div>
              <div class="triangle-topright-down"></div>
              <div class="triangle-topleft"></div>
            </div>
            <div class="col-md-6 col-sm-12 column-wrapper">
              <div class="img-thumbnail">
                <div class="hovereffect1"><!--hover effect image--> 
                  <img src="images/2(2).jpg">
                  <div class="overlay1"> <a class="info" ></a> </div>
                </div>
                <!--end hover effect--></div>
              <div class="sidebox-right"><strong>WHAT IS TRAVEL? WE ANSWER THE BIG, BURNING QUESTION.....</strong><br>
                <br>
                The question of What Travel Is is inter- esting, but more for what it tells you about the people doing the asking.<br>
                <br>
                <button type="button" class="btn btn-default">Default</button>
              </div>
              <div class="sidebox-smalltop">10</div>
              <div class="triangle-topright-up"></div>
              <div class="sidebox-smallbottom">AUG</div>
              <div class="triangle-topright-down"></div>
              <div class="triangle-topleft"></div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<!--end latest blog large--> 
<!-- latest blog small-->
<section class="latest-blog-small">
  <div class="container-fluid bg-gray">
    <div class="row mar-bottom margin-top">
      <div class="col-lg-12">
        <div class="container">
          <div class="row mar-bottom-mid2">
            <div class="col-lg-12 center-fonts text-center">
              <h2>LATEST <strong>BLOG POSTS</strong></h2>
              <hr>
              Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque dolor turpis, pulvinar varius dui<br/>
              id, convallis iaculis eros. Praesent porta lacinia elementum. </div>
          </div>
          <div class="row ">
            <div class="col-md-12 col-sm-12 column-wrapper mar-bottom">
              <center>
                <div class="img-thumbnail">
                  <div class="hovereffect1"><!--hover effect image--> 
                    <img src="images/1(2).jpg" class="image-sizing"  >
                    <div class="overlay1"> <a class="info" ></a> </div>
                  </div>
                  <!--end hover effect--> 
                </div>
                <div class="sidebox-left"><strong>WHAT IS TRAVEL? WE ANSWER THE BIG, BURNING QUESTION.....</strong><br>
                  <br>
                  The question of What Travel Is is inter- esting, but more for what it tells you about the people doing the asking.<br>
                  <br>
                  <button type="button" class="btn btn-default">Default</button>
                </div>
              </center>
            </div>
            <div class="col-md-12 col-sm-12 column-wrapper">
              <center>
                <div class="img-thumbnail">
                  <div class="hovereffect1"><!--hover effect image--> 
                    <img src="images/2(2).jpg" class="image-sizing" >
                    <div class="overlay1"> <a class="info" ></a> </div>
                  </div>
                  <!--end hover effect--></div>
                <div class="sidebox-left"><strong>WHAT IS TRAVEL? WE ANSWER THE BIG, BURNING QUESTION.....</strong><br>
                  <br>
                  The question of What Travel Is is inter- esting, but more for what it tells you about the people doing the asking.<br>
                  <br>
                  <button type="button" class="btn btn-default">Default</button>
                </div>
              </center>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<!--end latest blog small--> 
<!--before footer-->
<div class="container-fluid mar-bottom-high">
  <div class="row margin-top-60px">
    <div class="col-md-12">
      <center>
        <h2> OUR <strong>PARTNERS</strong></h2>
      </center>
    </div>
  </div>
  <div class="row ">
    <div class="col-md-12"> <img src="images/footer image.png"> </div>
  </div>
  <!--carousel-->
  <div class="col-md-12 margin-top-60px">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="carousel slide multi-item-carousel" id="theCarousel">
            <div class="carousel-inner">
              <div class="item active">
                <div class="col-xs-4"><a href="#1"><img src="images/1(3).jpg" class="img-responsive"></a></div>
              </div>
              <div class="item">
                <div class="col-xs-4"><a href="#1"><img src="images/2(3).jpg" class="img-responsive"></a></div>
              </div>
              <div class="item">
                <div class="col-xs-4"><a href="#1"><img src="images/3(1).jpg" class="img-responsive"></a></div>
              </div>
              <div class="item">
                <div class="col-xs-4"><a href="#1"><img src="images/4(1).jpg" class="img-responsive"></a></div>
              </div>
              <div class="item">
                <div class="col-xs-4"><a href="#1"><img src="images/1(3).jpg" class="img-responsive"></a></div>
              </div>
              <div class="item">
                <div class="col-xs-4"><a href="#1"><img src="images/2(3).jpg" class="img-responsive"></a></div>
              </div>
              <!-- add  more items here --> 
              <!-- Example item start:  --> 
              
              <!--  Example item end --> 
            </div>
            <a class="left carousel-control" href="#theCarousel" data-slide="prev"><i class="glyphicon glyphicon-chevron-left"></i></a> <a class="right carousel-control" href="#theCarousel" data-slide="next"><i class="glyphicon glyphicon-chevron-right"></i></a> </div>
        </div>
      </div>
    </div>
  </div>
  <!--end carousel--> 
  
</div>
<!--end before footer-->
<footer class="background-footer ">
  <div class="footer-bar"> <img src="images/transparent.png" class="img-responsive"> </div>
  <div class="container-fluid bg-overlay">
    <div class="container margin-top-150px"> 
      <!--footer bar--> 
      
      <!--end footer bar-->
      <div class="row">
        <div class="col-md-3 col-sm-3 col-xs-12"> <span class="footer-heading">
          <h4><b>CONTACT US</b></h4>
          </span> 
          <!--listing-->
          <ul class="ul-triangle">
            <li class="li-triangle">19 Charlotte Street, Toronto Ontario, M5V 2H5</li>
            <li class="li-triangle">admin@power-boosts.com</li>
            <li class="li-triangle">+ 001 666 8989 55</li>
          </ul>
          <!--end listing--> 
        </div>
        <div class="col-md-2 col-sm-2 col-xs-12"> <span class="footer-heading">
          <h4><b>ABOUT US</b></h4>
          </span> 
          <!--listing-->
          <ul class="ul-triangle">
            <li class="li-triangle">Why Us</li>
            <li class="li-triangle">Our trips</li>
            <li class="li-triangle">Responsible Business</li>
            <li class="li-triangle">Our History</li>
            <li class="li-triangle">Our Core Values</li>
          </ul>
          
          <!--end listing--> 
          
        </div>
        <div class="col-md-2 col-sm-2 col-xs-12"> <span class="footer-heading">
          <h4><b>DESIGN THEMES</b></h4>
          </span> 
          <!--listing-->
          <ul class="ul-triangle">
            <li class="li-triangle">Africa</li>
            <li class="li-triangle">Asia</li>
            <li class="li-triangle">Central America</li>
            <li class="li-triangle">Europe</li>
            <li class="li-triangle">Middle East</li>
            <li class="li-triangle">North America</li>
            <li class="li-triangle">Oceania</li>
            <li class="li-triangle">South America</li>
          </ul>
          
          <!--end listing--> 
        </div>
        <div class="col-md-2 col-sm-2 col-xs-12"> <span class="footer-heading">
          <h4><b>DESTINATIONS</b></h4>
          </span> 
          <!--listing-->
          <ul class="ul-triangle">
            <li class="li-triangle"> Adventure</li>
            <li class="li-triangle">Hiking and Camping</li>
            <li class="li-triangle">Walking and Trekking</li>
            <li class="li-triangle">Safari Trip</li>
            <li class="li-triangle">Polar</li>
            <li class="li-triangle">Sailing</li>
            <li class="li-triangle">Climbing</li>
          </ul>
          <!--end listing--> 
        </div>
        <div class="col-md-3 col-sm-3 col-xs-12"> <span class="footer-heading">
          <h4><b>LATEST TWEETS</b></h4>
          </span> 
          <!--listing-->
          <ul class="ul-triangle">
            <li class="li-triangle">@Power-Boosts Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremq-ue laudantium. Power-Boosts.com/building-a-website</li>
            <li class="li-triangle">@Power-Boosts Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremq-ue laudantium. Power-Boosts.com/building-a-website</li>
          </ul>
          <!--end listing--> 
        </div>
      </div>
      <div class="row mar-bottom-mid2 margin-top-60px">
        <div class="col-md-6 col-xs-12 col-sm-12">
          <ul class="listing-side center mar-bottom">
            <li><img src="images/facebook gray.png"></li>
            <li><img src="images/graytwitter copy.png"></li>
            <li><img src="images/white g gray.PNG"></li>
            <li><img src="images/gray in copy.PNG"></li>
            <li><img src="images/gray wifi copy.PNG"></li>
          </ul>
        </div>
        <center>
          <div class="col-md-6 col-xs-12 col-sm-12" >
            <div class="center"><img src="images/payment (1).png" class="img-responsive" style="float: left;"></div>
          </div>
        </center>
      </div>
    </div>
  </div>
  <div class="container-fluid bottom-bar">
    <div class="container">
      <div class="row">
        <center>
          <div class="color-white">Copyright © 2016 Power-Boosts. All rights reserved.</div>
        </center>
      </div>
    </div>
  </div>
</footer>

<!-- jQuery (necessary for Bootstrap's JavaScript plugins) --> 
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script> 
<!-- Include all compiled plugins (below), or include individual files as needed --> 
<script src="js/bootstrap.min.js"></script> 
<script>
		// Instantiate the Bootstrap carousel
$('.multi-item-carousel').carousel({
  interval: false
});

// for every slide in carousel, copy the next slide's item in the slide.
// Do the same for the next, next item.
$('.multi-item-carousel .item').each(function(){
  var next = $(this).next();
  if (!next.length) {
    next = $(this).siblings(':first');
  }
  next.children(':first-child').clone().appendTo($(this));
  
  if (next.next().length>0) {
    next.next().children(':first-child').clone().appendTo($(this));
  } else {
  	$(this).siblings(':first').children(':first-child').clone().appendTo($(this));
  }
});
	</script>
</body>
</html>