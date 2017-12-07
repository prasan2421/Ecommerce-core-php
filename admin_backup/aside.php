<aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
        <!-- Sidebar user panel -->
        <div class="user-panel">
            <div class="pull-left image">
                <img src="http://localhost/admin/images/<?php echo $row['file']; ?>" class="img-circle" alt="User Image">
            </div>
            <div class="pull-left info">
                <p><?php echo $row['name'] ?></p>

            </div>
        </div>
        <!-- search form -->

        <!-- /.search form -->
        <!-- sidebar menu: : style can be found in sidebar.less -->
        <ul class="sidebar-menu" data-widget="tree">
            <li class="header">MAIN NAVIGATION</li>
            <li class="active treeview">
                <a href="#">
                    <i class="fa fa-dashboard"></i> <span>Dashboard</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
                </a>
                <ul class="treeview-menu">
                    <li class="active"><a href="index.php"><i class="fa fa-circle-o"></i> Dashboard </a></li>
                    <li class="active"><a href="addmember.php"><i class="fa fa-circle-o"></i> Add Member </a></li>
                    <li class="active"><a href="memberlist.php"><i class="fa fa-circle-o"></i> Member List </a></li>
                     <li class="active"><a href="products.php"><i class="fa fa-circle-o"></i> Products </a></li> 
                      <li class="active"><a href="categories.php"><i class="fa fa-circle-o"></i> Categories</a></li>


                </ul>
            </li>





        </ul>
    </section>
    <!-- /.sidebar -->
</aside>