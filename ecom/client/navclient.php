<nav class="navbar navbar-default  ">
  <div class="container-fluid"> 
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="row">
      <div class="col-md-2">
        <div class="navbar-header">
           <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
      <span class="icon-bar"></span>
      <span class="icon-bar"></span>
      <span class="icon-bar"></span>
    </button>
          <a class="navbar-brand" href="#"><img src="images/logo-1-1.png" class="img-logo"></a> </div>
      </div>
      <div class="col-md-10"> 
        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
          <ul class="nav navbar-nav navbar-right">
            <li> 
    
</li>
<li>
  
   <div class="form-group" style="width: 300px; margin-bottom: 0px; ">
    <div class="input-group" style="width: 300px;">
     
     <input type="text" name="search_text" id="search_text" placeholder="Search " class="form-control" />
    </div>
   </div>

   <div id="result">
    
   </div>
                               
                  

 
</li>
             <li> <a href="index.php" class="dropdown-toggle" >HOME<span class="caret"></span></a>
              
            </li>
           
           <li> <a href="grid.php" class="dropdown-toggle" >Products<span class="caret"></span></a>
             
            </li>
            <li> <a href="gallery.php" class="dropdown-toggle" >Gallery<span class="caret"></span></a>
             
            </li>
             <li> <a href="contact.php" class="dropdown-toggle" >Contact Us<span class="caret"></span></a>
             
            </li>
           
            <li> <a href="logout.php" class="dropdown-toggle" >LOG-OUT</a> </li>
             <li> <a href="register.php" class="dropdown-toggle" >REGISTER</a> </li>
             <li> <a href="cart.php" class="dropdown-toggle" >CART<span class="img-circle" style="background-color: red; color: white;padding: 3px; margin-left: 5px;">
              <?php
              if(!isset($_SESSION['cart'])){
            echo 0;
             }
             else{
              echo count($_SESSION['cart']);
             }
              ?>
            </span></a> </li>
             
           
          </ul>
          <!--nav bar dropdowns--> 
        </div>
        <!-- /.navbar-collapse --> 
      </div>
    </div>
  </div>
  <!-- /.container-fluid --> 
</nav>

