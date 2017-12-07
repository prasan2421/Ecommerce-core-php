<!DOCTYPE html>
<html>
<?php
include ('Inc.php');
$obj = new admin;
$obj->check_session_admin();
if(isset($_SESSION['admin']))
{
  $id = $_SESSION['admin'];
  $cond = "id='".$id."'";
  $query = $obj->select('admintable',$cond);
  //var_dump($query);die();
  $row = $obj->fetch($query);
  //var_dump($row);die();
}
?>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>AdminLTE 2 | Dashboard</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.7 -->
  <link rel="stylesheet" href="bower_components/bootstrap/dist/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="bower_components/font-awesome/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="bower_components/Ionicons/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/AdminLTE.min.css">
  <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
  <link rel="stylesheet" href="dist/css/skins/_all-skins.min.css">
  <!-- Morris chart -->
  <link rel="stylesheet" href="bower_components/morris.js/morris.css">
  <!-- jvectormap -->
  <link rel="stylesheet" href="bower_components/jvectormap/jquery-jvectormap.css">
  <!-- Date Picker -->
  <link rel="stylesheet" href="bower_components/bootstrap-datepicker/dist/css/bootstrap-datepicker.min.css">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="bower_components/bootstrap-daterangepicker/daterangepicker.css">
  <!-- bootstrap wysihtml5 - text editor -->
  <link rel="stylesheet" href="plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css">
<script src="https://developers.google.com/maps/documentation/javascript/examples/markerclusterer/markerclusterer.js"></script>
  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->

  <!-- Google Font -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
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
      #description {
        font-family: Roboto;
        font-size: 15px;
        font-weight: 300;
      }

      #infowindow-content .title {
        font-weight: bold;
      }

      #infowindow-content {
        display: none;
      }

      #map #infowindow-content {
        display: inline;
      }

      .pac-card {
        margin: 10px 10px 0 0;
        border-radius: 2px 0 0 2px;
        box-sizing: border-box;
        -moz-box-sizing: border-box;
        outline: none;
        box-shadow: 0 2px 6px rgba(0, 0, 0, 0.3);
        background-color: #fff;
        font-family: Roboto;
      }

      #pac-container {
        padding-bottom: 12px;
        margin-right: 12px;
      }

      .pac-controls {
        display: inline-block;
        padding: 5px 11px;
      }

      .pac-controls label {
        font-family: Roboto;
        font-size: 13px;
        font-weight: 300;
      }

      #pac-input {
        background-color: #fff;
        font-family: Roboto;
        font-size: 15px;
        font-weight: 300;
        margin-left: 12px;
        padding: 0 11px 0 13px;
        text-overflow: ellipsis;
        width: 400px;
      }

      #pac-input:focus {
        border-color: #4d90fe;
      }

      #title {
        color: #fff;
        background-color: #4d90fe;
        font-size: 25px;
        font-weight: 500;
        padding: 6px 12px;
      }
    </style>

</head>
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">

  <?php
  include ('nav.php');
  ?>
  <!-- Left side column. contains the logo and sidebar -->
  <?php
  include ('aside.php');
  ?>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Dashboard
        <small>Control panel</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Dashboard</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <!-- Small boxes (Stat box) -->
      
      <!-- /.row -->
      <!-- Main row -->
      <div class="row">
        <!-- Left col -->
        <section class="col-lg-6 connectedSortable" >
          <!-- Custom tabs (Charts with tabs)-->
          
          <!-- /.nav-tabs-custom -->

          <!-- Chat box -->
          
          <!-- /.box (chat box) -->

          <!-- TO DO List -->
          <div class="box box-primary" style="height:400px;">
            <div class="box-header">
              <i class="ion ion-clipboard"></i>

              <h3 class="box-title">Add Branch</h3>

              
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <!-- See dist/js/pages/dashboard.js to activate the todoList plugin -->
              <form action="" method="post" id="carform" enctype="multipart/form-data" >
                <div class="form-group has-feedback">
                  <input type="text" class="form-control" placeholder="Name" name="name" id="name">

                </div>
                <div class="form-group has-feedback" >                  
                   <input type="text" id="pac-input" name="pac-input" class="form-control" placeholder="Enter a location" style="width: 100%; margin-left: 0px;">
                   <input type="hidden" name="lat" id="lat">
                   <input type="hidden" name="lng" id="lng">
                </div>
                <div class="form-group has-feedback">
                  <input type="number" class="form-control" placeholder="Phone" name="phone" id="phone">
                  
                </div>
               
               
                
                <div class="row">

                  <!-- /.col -->
                  <div class="col-xs-4">
                    <button type="submit" class="btn btn-primary btn-block btn-flat" name="submit">Register Branch</button>
                  </div>
                  <!-- /.col -->
                </div>
              </form>

              <?php
              if(isset($_POST['submit']))
              {
                $array['name']=$_POST['name'];
                $array['location']=$_POST['pac-input'];
                $array['number']=$_POST['phone'];
                $array['lat']=$_POST['lat'];
                 $array['lng']=$_POST['lng'];
                $q = $obj->insert('officetable', $array);
          
                $exec = $obj->execute($q);

                $obj->redirect('office.php');
//          var_dump($exec);die();

              }

              ?>
            </div>
            <!-- /.box-body -->
            
          </div>
          <!-- /.box -->

          <!-- quick email widget -->
          

        </section>
        <!-- /.Left col -->
        <!-- right col (We are only adding the ID to make the widgets sortable)-->
        <section class="col-lg-6 connectedSortable">
          
     <div id="map" style="width:100%;height:400px;background:yellow"></div>
    <div id="infowindow-content"> 
      <img src="" width="16" height="16" id="place-icon">
      <span id="place-name"  class="title"></span><br>
      <span id="place-address"></span>
    </div>
         
        </section>
        <!-- right col -->
      </div>

      <div class="row">
        <!-- Left col -->
        <section class="col-lg-12 connectedSortable">
          <div class="box box-primary">
            <div class="box-header">
              <i class="ion ion-clipboard"></i>

              <h3 class="box-title">Products List</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <!-- See dist/js/pages/dashboard.js to activate the todoList plugin -->
              <div class="row text-center">

                <div class="col-md-2"><b>NAME</b></div>
                <div class="col-md-3"><b>Location</b></div>
                <div class="col-md-1"><b>Latitude</b></div>
                <div class="col-md-1"><b>Longitude</b></div>
                <div class="col-md-2"><b>Number</b></div>
                <div class="col-md-2"><b>Status</b></div>
              </div>
              <hr>
              <?php
              $query = $obj->select('officetable',"");
              if($obj->num($query)){
            while($row=$obj->fetch($query))
            {
              ?>
              <div class="row text-center">

                <div class="col-md-2"><?php echo $row["name"]; ?></div>
                <div class="col-md-3 "><?php echo $row["location"]; ?></div>
                <div class="col-md-1 "><?php echo $row["lat"]; ?></div>
                <div class="col-md-1 "><?php echo $row["lng"]; ?></div>
                <div class="col-md-2"><?php echo $row["number"]; ?></div>
                <div class="col-md-2"><a href="deleteoffice.php?id=<?php echo $row['id'];?>">Delete</a>
                 
           <?php
            if(isset($row['status']) && $row['status'] == 1)
            {
              $active = 'btn-success';
              $inactive = '';
              $default = 'btn-default';
            }
            elseif(isset($row['status']) && $row['status'] == 0)
            {
                $active = '';
                $inactive = 'btn-danger';
                $default = 'btn-default';
            }
           ?>
              <a href="javascript:void(0)" class="btn <?php echo $active; ?> <?php echo $default; ?> status" data-status="1" data-id="<?php echo $row['id']; ?>">Active</a> 
              
              <a href="javascript:void(0)" class="btn <?php echo $inactive; ?> <?php echo $default; ?>  status" data-status="0" data-id="<?php echo $row['id']; ?>">Inactive</a> 
             
           </div>
                               
              </div>
                <?php
              }
            }

?>

            </div>
            <!-- /.box-body -->
            
          </div>
          <!-- /.box -->

          <!-- quick email widget -->
          

        </section>
        <!-- /.Left col -->
        <!-- right col (We are only adding the ID to make the widgets sortable)-->
        
        <!-- right col -->
      </div>
  <div class="control-sidebar-bg"></div>
</div>
      <!-- /.row (main row) -->
    </section>
    <!-- /.content -->
  </div>
 <script>
      // This example requires the Places library. Include the libraries=places
      // parameter when you first load the API. For example:
      // <script src="https://maps.googleapis.com/maps/api/js?key=YOUR_API_KEY&libraries=places">

      function initMap() {
        var map = new google.maps.Map(document.getElementById('map'), {
          center: {lat: 27.7172453, lng: 85.3239605},
           mapTypeId: google.maps.MapTypeId.ROADMAP,
          zoom: 8
        });
        var card = document.getElementById('pac-card');
        var input = document.getElementById('pac-input');
        var types = document.getElementById('type-selector');
        var strictBounds = document.getElementById('strict-bounds-selector');

        map.controls[google.maps.ControlPosition.TOP_RIGHT].push(card);

        var autocomplete = new google.maps.places.Autocomplete(input);

        // Bind the map's bounds (viewport) property to the autocomplete object,
        // so that the autocomplete requests use the current map bounds for the
        // bounds option in the request.
        autocomplete.bindTo('bounds', map);

        var infowindow = new google.maps.InfoWindow();
        var infowindowContent = document.getElementById('infowindow-content');
        infowindow.setContent(infowindowContent);
        var marker = new google.maps.Marker({
          map: map,
          position: {lat: 27.7172453, lng: 85.3239605},
          draggable: true,
          animation: google.maps.Animation.DROP,
          anchorPoint: new google.maps.Point(0, -29)
        });
    
  // marker.addListener('click', toggleBounce);


        autocomplete.addListener('place_changed', function() {
          infowindow.close();
          marker.setVisible(false);
          
          var place = autocomplete.getPlace();
          if (!place.geometry) {
            // User entered the name of a Place that was not suggested and
            // pressed the Enter key, or the Place Details request failed.
            window.alert("No details available for input: '" + place.name + "'");
            return;
          }

          // If the place has a geometry, then present it on a map.
          if (place.geometry.viewport) {
            map.fitBounds(place.geometry.viewport);
          } else {
            map.setCenter(place.geometry.location);
            map.setZoom(17);  // Why 17? Because it looks good.
          }
          marker.setPosition(place.geometry.location);
          marker.setVisible(true);

//latitude and longitude
          var item_lat = marker.getPosition().lat();
          var item_lng = marker.getPosition().lng();
          var item_location = place.formatted_address;
          $("#lat").val(item_lat);
           $("#lng").val(item_lng);
            $("#location").val(item_location);
// alert("Lat="+item_lat+"___Lang="+item_lng+"___Location="+item_location);
    var address = '';
          if (place.address_components) {
            address = [
              (place.address_components[0] && place.address_components[0].short_name || ''),
              (place.address_components[1] && place.address_components[1].short_name || ''),
              (place.address_components[2] && place.address_components[2].short_name || '')
            ].join(' ');
          }

          infowindowContent.children['place-icon'].src = place.icon;
          infowindowContent.children['place-name'].textContent = place.name;
          infowindowContent.children['place-address'].textContent = address;
          infowindow.open(map, marker);
        });



// marker locate

        

        google.maps.event.addListener(marker, 'dragend', function() {

geocoder.geocode({'latLng': marker.getPosition()}, function(results, status) {

$("#location").val(place.formatted_address);
$('#lat').val(marker.getPosition().lat());
$('#lng').val(marker.getPosition().lng());

infowindow.setContent(results[0].formatted_address);
infowindow.open(map, marker);

});
});

 // end marker locate

        // Sets a listener on a radio button to change the filter type on Places
        // Autocomplete.
        function setupClickListener(id, types) {
          var radioButton = document.getElementById(id);
          radioButton.addEventListener('click', function() {
            autocomplete.setTypes(types);
          });
        }

        setupClickListener('changetype-all', []);
        setupClickListener('changetype-address', ['address']);
        setupClickListener('changetype-establishment', ['establishment']);
        setupClickListener('changetype-geocode', ['geocode']);

        document.getElementById('use-strict-bounds')
            .addEventListener('click', function() {
              console.log('Checkbox clicked! New state=' + this.checked);
              autocomplete.setOptions({strictBounds: this.checked});
            });
      }
    </script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyD5KR40RrKJCx1W3iP37RL1PnrhXk1HAL0&libraries=places&callback=initMap"
        async defer></script>
    
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script> 
<script src="bower_components/jquery/dist/jquery.min.js"></script>
<!-- jQuery UI 1.11.4 -->
<script src="bower_components/jquery-ui/jquery-ui.min.js"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button);
</script>
<!-- Bootstrap 3.3.7 -->
<script src="bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
<!-- Morris.js charts -->
<script src="bower_components/raphael/raphael.min.js"></script>
<script src="bower_components/morris.js/morris.min.js"></script>
<!-- Sparkline -->
<script src="bower_components/jquery-sparkline/dist/jquery.sparkline.min.js"></script>
<!-- jvectormap -->
<script src="plugins/jvectormap/jquery-jvectormap-1.2.2.min.js"></script>
<script src="plugins/jvectormap/jquery-jvectormap-world-mill-en.js"></script>
<!-- jQuery Knob Chart -->
<script src="bower_components/jquery-knob/dist/jquery.knob.min.js"></script>
<!-- daterangepicker -->
<script src="bower_components/moment/min/moment.min.js"></script>
<script src="bower_components/bootstrap-daterangepicker/daterangepicker.js"></script>
<!-- datepicker -->
<script src="bower_components/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js"></script>
<!-- Bootstrap WYSIHTML5 -->
<script src="plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js"></script>
<!-- Slimscroll -->
<script src="bower_components/jquery-slimscroll/jquery.slimscroll.min.js"></script>
<!-- FastClick -->
<script src="bower_components/fastclick/lib/fastclick.js"></script>
<!-- AdminLTE App -->
<script src="dist/js/adminlte.min.js"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="dist/js/pages/dashboard.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="dist/js/demo.js"></script>
<script type="text/javascript">
  $(document).ready(function(){
    $('.status').each(function(){
        $(this).on('click',function(){
        var status = $(this).attr('data-status');
        var row_id = $(this).attr('data-id');       
         // alert(status);alert(row_id);
         $.ajax({
          type:'POST',
          data:'status='+status+'&row_id='+row_id,
          url:'status.php',
          success:function(data) {
              //alert(data);
              if(data == true)
              {
                //alert('true');
                window.location = 'contact.php';

              }
        }
        });
       
      });
    });
  });
</script>

</body>
</html>
