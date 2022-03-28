<!--user_management-->
<?php 
  if(empty($this->session->userdata('username')))
  {
    redirect('home');
  }
  if(empty($this->session->userdata('role')=='rider'))
  {
    redirect('errors');
  }
?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Notifications</title>
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

      <li class="nav-item">
        <a class="nav-link" data-widget="control-sidebar" data-slide="true" href="#">
          <i class="fas fa-th-large"></i>
        </a>
        <li class="nav-item ">
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
         <img src="<?php echo base_url()?>assets/vegefoods/images/<?php echo $this->session->userdata('acc_img');?>" class="img-circle elevation-2" alt="User Image">        </div>
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
            <a href=<?php echo site_url('rider/dashboard/notification'); ?> class="nav-link">
              <i class="nav-icon far fa-bell "></i>
              <p>Notifications<span class="badge badge-warning "><?php echo $this->db->where('notifiable_id', $this->session->userdata('account_id'))->count_all_results('notification'); ?></span></p>
            </a>
          </li>
          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
            <i class="nav-icon fa fa-bars "></i>
              <p>
              Dashboard
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              
              <li class="nav-item">
                <a href=<?php echo site_url('rider/dashboard/order_details'); ?> class="nav-link">
                <i class="fas fa-pizza-slice"></i>
                  <p>Order Details</p>
                </a>
              </li>
              <li class="nav-item">
                <a href=<?php echo site_url('rider/dashboard/delivery'); ?> class="nav-link">
                <i class="fas fa-biking"></i>
                  <p>Your Delivery</p>
                </a>
              </li>
              <li class="nav-item">
                <a href=<?php echo site_url('rider/dashboard/rider_history'); ?> class="nav-link">
                <i class="fas fa-history"></i>
                  <p>History</p>
                </a>
              </li>
              <li class="nav-item">
                <a href=<?php echo site_url('rider/dashboard/maps'); ?> class="nav-link">
                <i class="fas fa-map-pin"></i>
                  <p>Maps</p>
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
          <div class="col-sm-4">
            <h1>Notifications</h1>
           
          </div>
          <div class="col-sm-2">
            <h1>	
							     
            </h1>
           
          </div>
          <div class="col-sm-6">
      
					
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-12">
    

          <div class="card">
            <div class="card-header">
            <a>Message feature should be use for important announcement only. </a>
            </div>
			<!-- /.card-header -->
			
      <div class="card-body">
			<div class="x_title" class="col-sm-1 text-left">
			<button type="button" style="float: right;" class="btn btn-primary" data-toggle="modal" data-target="#message" >Send Message</button>
      

              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                    <th>Notifications ID</th>
                    <th>Sender</th>
                    <th>Role</th>
                    <th>Message</th>
                    <th>Date</th>
                   
                </tr>
                </thead>
                <tbody>
          <?php $count = 0; ?>
          <?php foreach($notif as $row) {?>
				<tr>
					<td><?php echo $row->notification_id;?></td>
					<td><?php echo $row->sender;?></td>
          <td><?php echo $row->role;?></td>
          <td><?php echo $row->message;?></td>
          <td><?php echo $row->date;?></td>
				
        
        
        

          <?php $count++; ?>

					</tr><?php }?> 
                </tbody>
                <tfoot>
                <tr>            
                    <th>Notifications ID</th>
                    <th>Sender</th>
                    <th>Role</th>
                    <th>Message</th>
                    <th>Date</th>
                   
                </tr>
                </tfoot>
              </table>
            </div>
            <!-- /.card-body -->
          </div>
          <!-- /.card -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
    </section>
    <!-- /.content -->
  </div>
  
   <!-- top of add user Modal -->
   <div class="modal fade" id="message" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Compose Message</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button>
        </div>
        
        <div class="modal-body">
        <form method='POST' action='<?php echo site_url('rider/dashboard/message') ?>'  enctype="multipart/form-data">      
          <div class="form-group">
            <input type="hidden" class="form-control" name ="seen" value="No" required>
          </div>
          <div class="form-group">
              <label for="exampleInputPassword1">Message</label>
              <textarea name="message" type="text" cols="30" rows="7"  name="message" class="form-control" placeholder="Message" required></textarea>
          </div>
          <div class="form-group">
            <label for="exampleFormControlSelect1">To:</label>
                <select class="form-control" name ="role" placeholder="status" id="exampleFormControlSelect1" required>
                  <option>All</option>
                  <option>Partner</option>
                  <option>Admin</option>

                </select>
          </div>
          <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="submit" onclick='return window.confirm("Are you sure you want to submit this");' class="btn btn-primary  ">Save changes</button>
          </div>   
        </form>
        </div>
      </div>
    </div>
      <!--bottom of add user Modal --> 
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
