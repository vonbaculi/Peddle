<!--user_management-->
<?php 
  if(empty($this->session->userdata('username')))
  {
    redirect('home');
  }
  if(empty($this->session->userdata('role')=='admin'))
  {
    redirect('errors');
  }
?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Dashboard</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1">
 
  <!-- Font Awesome -->
  <link rel="stylesheet" href=<?php echo base_url('assets/admin/plugins/fontawesome-free/css/all.min.css'); ?> > 		
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- DataTables -->
  <link rel="stylesheet" href=<?php echo base_url('assets/admin/plugins/datatables-bs4/css/dataTables.bootstrap4.css'); ?> >
  <link rel="stylesheet" href=<?php echo base_url('assets/admin/plugins/datatables-responsive/css/responsive.bootstrap4.min.css'); ?> >
  <!-- Theme style -->   

  <link rel="stylesheet" href=<?php echo base_url('assets/admin/dist/css/adminlte.css'); ?> >

  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
</head>
<body class="hold-transition sidebar-mini">
<div>  
  <script src=<?php echo base_url('assets/admin/plugins/jquery/jquery.min.js'); ?> ></script>

  <?php
  $this->load->view('alert');
  ?>
</div>
<div class="wrapper">
  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#"><i class="fas fa-bars"></i></a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href=<?php echo site_url('Home') ?> class="nav-link">Home</a>
      </li>
    </ul>


    
    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
      <!-- Messages Dropdown Menu -->
      <li class="nav-item">
        <a class="nav-link" data-widget="control-sidebar" data-slide="true" href="#">
          <i class="fas fa-th-large"></i>
        </a>
      </li>
      <li class="nav-item">
        <a href=<?php echo site_url('admin/dashboard/logout'); ?> class="nav-link">Logout </a>
      </li>
    </ul>
  </nav>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href=<?php echo site_url('admin/dashboard/index'); ?> class="brand-link">
      <img src=<?php echo base_url('assets/vegefoods/images/logo3.jpg'); ?> alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
           style="opacity: .8">
      <span class="brand-text font-weight-bolder">PEDDLE</span>
    </a>

    
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="<?php echo base_url()?>assets/vegefoods/images/<?php echo $this->session->userdata('acc_img');?>" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <?php echo $this->session->userdata('username');?>
        </div>
      </div>
      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item has-treeview">
            <a href=<?php echo site_url('admin/dashboard'); ?> class="nav-link">
              <i class="nav-icon fa fa-chart-line "></i>
              <p>Main</p>
            </a>
          </li>
          <li class="nav-item has-treeview">
            <a href=<?php echo site_url('admin/dashboard/notification'); ?> class="nav-link">
              <i class="nav-icon far fa-bell "></i>
              <p>Notifications<span class="badge badge-warning "><?php echo $this->db->where('notifiable_id', $this->session->userdata('account_id'))->count_all_results('notification'); ?></span></p>
            </a>
          </li>
          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon fa fa-bars "></i>
              <p>Account Management
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href=<?php echo site_url('admin/dashboard/user_management'); ?> class="nav-link">
                  <i class="fa fa-user-circle nav-icon"></i>
                  <p>User Management</p>
                </a>
              </li>
              <li class="nav-item">
                <a href=<?php echo site_url('admin/dashboard/partner_management'); ?> class="nav-link">
                  <i class="fa fa-user-circle nav-icon"></i>
                  <p>Partners Management</p>
                </a>
              </li>
              <li class="nav-item">
                <a href=<?php echo site_url('admin/dashboard/rider_management'); ?> class="nav-link">
                  <i class="fa fa-user-circle nav-icon"></i>
                  <p>Rider Management</p>
                </a>
              </li>
             
            </ul>
          </li> 
  <!-- MARKET MANAGEMENT -->
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
                with font-awesome or any other icon font library -->
          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon fa fa-bars "></i>
              <p>Market Management
              <i class="right fas fa-angle-left"></i>
            </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href=<?php echo site_url('admin/dashboard/market_management'); ?> class="nav-link">
                  <i class="fas fa-drumstick-bite nav-icon"></i>
                  <p>Market Settings</p>
                </a>
              </li>
            </ul>
          </li>   
 <!-- PRODUCT MANAGEMENT -->
          <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon fa fa-bars "></i>
              <p>Product Management
              <i class="right fas fa-angle-left"></i>
            </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href=<?php echo site_url('admin/dashboard/product_management'); ?> class="nav-link">
                  <i class="fas fa-drumstick-bite nav-icon"></i>
                  <p>Product Management</p>
                </a>
              </li> 
              <li class="nav-item">
                <a href=<?php echo site_url('admin/dashboard/order_details'); ?> class="nav-link">
                  <i class="fa fa-shopping-cart nav-icon"></i>
                  <p>Order Details</p>
                </a>
              </li>
            </ul>
          </li>   
<!-- APPLICATIONS -->
          <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon fa fa-bars "></i>
              <p>Applications
              <i class="right fas fa-angle-left"></i>
            </p>
            </a>
            <ul class="nav nav-treeview">
            <li class="nav-item">
                <a href=<?php echo site_url('admin/dashboard/rider_app'); ?> class="nav-link">
                  <i class="fa fa-shopping-cart nav-icon"></i>
                  <p>Rider Applications</p>
                </a>
              </li>
              <li class="nav-item">
                <a href=<?php echo site_url('admin/dashboard/market_app'); ?> class="nav-link">
                  <i class="fa fa-shopping-cart nav-icon"></i>
                  <p>Market Applications</p>
                </a>
              </li> 
              <li class="nav-item">
                <a href=<?php echo site_url('admin/dashboard/pending_acc'); ?> class="nav-link">
                  <i class="fa fa-shopping-cart nav-icon"></i>
                  <p>User Applications</p>
                </a>
              </li>
            </ul>
          </li> 
<!-- REVIEWS MANAGEMENT -->
          <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
                with font-awesome or any other icon font library -->
          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon fa fa-bars "></i>
              <p>Reviews
              <i class="right fas fa-angle-left"></i>
            </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href=<?php echo site_url('admin/dashboard/reviews'); ?> class="nav-link">
                  <i class="fas fa-drumstick-bite nav-icon"></i>
                  <p>Customer's Feedback</p>
                </a>
              </li>
            </ul>
          </li>   
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Info</h1>
          </div>
          <div class="col-sm-6">
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">

      <!-- Default box -->
      <!-- Small Box (Stat card) -->
      <h5 class="mb-2 mt-4"></h5>
        <div class="row">
          <div class="col-lg-3 col-6">
            <!-- small card -->
            <div class="small-box " style="background-color: #55BAFF">
              <div class="inner">
                <h3><?php echo $this->db->count_all_results('order_tb'); ?></h3>

                <p>New Orders</p>
              </div>
              <div class="icon">
                <i class="fas fa-shopping-cart"></i>
              </div>
              <a href="#" class="small-box-footer">
                More info <i class="fas fa-arrow-circle-right"></i>
              </a>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small card -->
            <div class="small-box "style="background: #71CAFF">
              <div class="inner">
                <h3><?php 
                    $this->db->select('sum(total_order)as total');
                    $this->db->from('order_tb');
                    $this->db->where('rider_id !=',Null);
                    $this->db->where('payment_status','Paid');
                    $query = $this->db->get();
                    $result = $query->result();
                    echo $result[0]->total;
                    ?>
                </h3>

                <p>Total Sales</p>
              </div>
              <div class="icon">
                <i class="ion ion-stats-bars"></i>
              </div>
              <a href="#" class="small-box-footer">
                More info <i class="fas fa-arrow-circle-right"></i>
              </a>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small card -->
            <div class="small-box" style="background-color: #A7D8DE">
              <div class="inner">
                <h3><?php echo $this->db->where('Status','Approved')->where('role !=','admin')->count_all_results('account_tb'); ?></h3>

                <p>Registered Users</p>
              </div>
              <div class="icon">
                <i class="fas fa-user-plus"></i>
              </div>
              <a href="#" class="small-box-footer">
                More info <i class="fas fa-arrow-circle-right"></i>
              </a>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small card -->
            <div class="small-box" style="background-color: #FCF96E">
              <div class="inner">
                <h3><?php echo $this->db->where('payment_status','Paid')->count_all_results('order_tb'); ?></h3>

                <p>Orders Delivered</p>
              </div>
              <div class="icon">
                <i class="fas fa-chart-pie"></i>
              </div>
              <a href="#" class="small-box-footer">
                More info <i class="fas fa-arrow-circle-right"></i>
              </a>
            </div>
          </div>
          <div class="col-lg-3 col-6">
            <!-- small card -->
            <div class="small-box" style="background-color: #FFA318">
              <div class="inner">
                <h3><?php echo $this->db->where('payment_status','Paid')->count_all_results('order_tb'); ?></h3>

                <p>Orders Delivered</p>
              </div>
              <div class="icon">
                <i class="fas fa-chart-pie"></i>
              </div>
              <a href="#" class="small-box-footer">
                More info <i class="fas fa-arrow-circle-right"></i>
              </a>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small card -->
            <div class="small-box" style="background-color: #FF1F24">
              <div class="inner">
                <h3><?php echo $this->db->where('Status','Approved')->where('role ','rider')->count_all_results('account_tb'); ?></h3>

                <p>Registered Riders</p>
              </div>
              <div class="icon">
                <i class="fas fa-user-plus"></i>
              </div>
              <a href="#" class="small-box-footer">
                More info <i class="fas fa-arrow-circle-right"></i>
              </a>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small card -->
            <div class="small-box" style="background-color: #F7D8BA">
              <div class="inner">
                <h3><?php echo $this->db->where('Status','Approved')->where('role !=','narket')->count_all_results('account_tb'); ?></h3>

                <p>Registered Market</p>
              </div>
              <div class="icon">
                <i class="fas fa-user-plus"></i>
              </div>
              <a href="#" class="small-box-footer">
                More info <i class="fas fa-arrow-circle-right"></i>
              </a>
            </div>
          </div>
          <!-- ./col -->
        </div>
        <!-- /.row -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  <footer class="main-footer">
    <div class="float-right d-none d-sm-block">
      <b>Version</b> 3.0.2
    </div>
    <strong>Copyright &copy; 2014-2019 <a href="http://adminlte.io">AdminLTE.io</a>.</strong> All rights
    reserved.
  </footer>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<!-- jQuery -->
<script src=<?php echo base_url('assets/admin/plugins/jquery/jquery.min.js'); ?> ></script>
<!-- Bootstrap 4 -->
<script src=<?php echo base_url('assets/admin/plugins/bootstrap/js/bootstrap.bundle.min.js'); ?> ></script>
<!-- DataTables -->
<script src=<?php echo base_url('assets/admin/plugins/datatables/jquery.dataTables.js'); ?> ></script>
<script src=<?php echo base_url('assets/admin/plugins/datatables-bs4/js/dataTables.bootstrap4.js'); ?> ></script>
<script src=<?php echo base_url('assets/admin/plugins/datatables-responsive/js/dataTables.responsive.min.js'); ?> ></script>
<script src=<?php echo base_url('assets/admin/plugins/datatables-responsive/js/responsive.bootstrap4.min.js'); ?> ></script>
<!-- AdminLTE App -->
<script src=<?php echo base_url('assets/admin/dist/js/adminlte.min.js'); ?> ></script>
<!-- AdminLTE for demo purposes -->
<script src=<?php echo base_url('assets/admin/dist/js/demo.js'); ?> ></script>
<!-- page script -->
<script>
  $(function () {
    $("#example1").DataTable({
      "responsive": true,
      "autoWidth": false,
    });
    $('#example2').DataTable({
      "paging": true,
      "lengthChange": false,
      "searching": false,
      "ordering": true,
      "info": true,
      "autoWidth": false,
      "responsive": true,
    });
  });
</script>
</body>
</html>
</body>
</html>
