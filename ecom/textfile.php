<!DOCTYPE html>
<html>
<?php
include ('Inc.php');
$obj = new admin;
$obj->check_session_admin();
 // print_r($_SESSION['id']);
if (isset($_SESSION['admin']))
 {
  $id = $_SESSION['admin'];

  $cond = "id='".$id."'";
  $query = $obj->select('admintable',$cond);
  //var_dump($query);die();
  $row = $obj->fetch($query);
  
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

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->

  <!-- Google Font -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
  <script src="https://cloud.tinymce.com/stable/tinymce.min.js"></script>
  <script>tinymce.init({ selector:'textarea' });</script>
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
        <section class="col-lg-12 connectedSortable">
          <!-- Custom tabs (Charts with tabs)-->
          
          <!-- /.nav-tabs-custom -->

          <!-- Chat box -->
          
          <!-- /.box (chat box) -->

          <!-- TO DO List -->
          <div class="box box-primary">
            <div class="box-header">
              <i class="ion ion-clipboard"></i>

              <h3 class="box-title">Add Text File</h3>

              
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <!-- See dist/js/pages/dashboard.js to activate the todoList plugin -->
              <form action="" method="post" id="carform" enctype="multipart/form-data" >
                
                <div class="form-group has-feedback">
                  <input type="file" class="form-control"  name="file" id="file">                  
                </div>                
                <div class="row">
                  <!-- /.col -->
                  <div class="col-xs-4">
                    <button type="submit" class="btn btn-primary btn-block btn-flat" name="submit">Register File</button>
                  </div>
                  <!-- /.col -->
                </div>
              </form>
              <?php
              if(isset($_POST['submit']))
              {
                if(isset($_FILES['file']['name']))
                    {
                        $name = rand(1,999999999);
                        $ext_arr = explode('.',$_FILES['file']['name']);
                        $ext = end($ext_arr);
                        $name = $name.'.'.$ext;
                        move_uploaded_file($_FILES['file']['tmp_name'],'textfiles/'.$name);
                        $array['name']=$name;
                    }
                $q = $obj->insert('filetable', $array);         
                $exec = $obj->execute($q);
                $obj->redirect('textfile.php');
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
        
        <!-- right col -->
      </div>

      <div class="row">
        <!-- Left col -->
        <section class="col-lg-12 connectedSortable">
          <!-- Custom tabs (Charts with tabs)-->
          
          <!-- /.nav-tabs-custom -->

          <!-- Chat box -->
          
          <!-- /.box (chat box) -->

          <!-- TO DO List -->
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
                <div class="col-md-2"><b>Price</b></div>
                <div class="col-md-2"><b>Description</b></div>
                <div class="col-md-1"><b>Category</b></div>
                 <div class="col-md-1"><b>Piece</b></div>
                <div class="col-md-1"><b>Image</b></div>
                <div class="col-md-1"></div>
                <div class="col-md-2">Status</div>
              </div>
              <hr>
              <?php
              $query = $obj->select('productstable',"");
              if($obj->num($query)){
            while($row=$obj->fetch($query))
            {           
                  // $id = $row["category_id"];
                  // $cond = "id='".$id."'";
                  //$q = $obj->select('categoriestable',$cond);                  
                //var_dump($q);die();
               ?>
              <div class="row text-center">
                <div class="col-md-2"><?php echo $row["name"]; ?></div>
                <div class="col-md-2"><?php echo $row["price"]; ?></div>
                <div class="col-md-2"><?php echo $row["description"]; ?></div>
                <div class="col-md-1"><?php

      $q = "SELECT * FROM categoriestable WHERE id = '".$row["category_id"]."' ";
//      var_dump($q);die();
      $r = $obj->execute($q);
      if($obj->num($r)> 0)
      {
        $row1 = $obj->fetch($r);
      }

                 echo $row1['name']; ?></div>
                 <div class="col-md-1"><?php echo $row["piece"]; ?></div>
                <div class="col-md-1"><img src="http://localhost/admin/imagesproducts/<?php echo $row['file']; ?>" width="40px"></div>
               
               
                <div class="col-md-1"><a href="editproducts.php?id=<?php echo $row['id'];?>">Edit</a> / <a href="deleteproducts.php?id=<?php echo $row['id'];?>">Delete</a> </div>
                <div class="col-md-2">
                  <?php
            if(isset($row['status']) && $row['status'] == 1)
            {
              $active = 'btn-success';
              $inactive = '';
              // $color = 'style="color:white;"';
            }
            elseif(isset($row['status']) && $row['status'] == 0)
            {
                $active = '';
                $inactive = 'btn-danger';
                 
            }
           ?>
                  <a href="javascript:void(0)" id="status_col_active<?php echo $row['id']; ?>" data-id="<?php echo $row['id'];?>" data-status="1" class="btn status  <?php echo $active;?> btn-default">Active</a>
                   <a href="javascript:void(0)" id="status_col_inactive<?php echo $row['id']; ?>" data-id="<?php echo $row['id'];?>" data-status="0" class="btn status <?php echo $inactive;?> btn-default">Inactive</a>
                   <input type="hidden" id="status_id" value="">
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
  <!-- end display products-->

  <!-- Control Sidebar -->
  
  <!-- /.control-sidebar -->
  <!-- Add the sidebar's background. This div must be placed
       immediately after the control sidebar -->
  <div class="control-sidebar-bg"></div>
</div>
      <!-- /.row (main row) -->

    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  


  <!-- display products-->

<!-- ./wrapper -->

<!-- jQuery 3 -->
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
         var id = $(this).attr('data-id');
         var active = "#status_col_active"+id;
         var inactive = "#status_col_inactive"+id; 
         // alert(status);alert(id);
          // alert(active);alert(inactive);
         $.ajax({
          method:'POST',
          url:'product_status.php',
           data:'status='+status+'&id='+id,
           success:function(data) {
              // alert(data);
              if(data == 1)
                          {

                              $(active).addClass("btn-success");
                              $(inactive).removeClass("btn-danger");
                              
                          }
             else
                          {
                              $(active).removeClass("btn-success");
                              $(inactive).addClass("btn-danger");

                          }


             // $('#status_id').val(data);
        }
         });
      });
    });
  });
</script>
</body>
</html>
