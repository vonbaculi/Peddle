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
  <title>Partner Management</title>
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
            <h1>Partner Management</h1>
           
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
               
            </div>
			<!-- /.card-header -->
			
      <div class="card-body">
			<div class="x_title" class="col-sm-1 text-left">
			<button type="button" style="float: right;" class="btn btn-primary" data-toggle="modal" data-target="#addpartnermodal" >Add Parter</button>
      

              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
					<th>Account ID</th>
					<th>First Name</th>
					<th>Last Name</th>
					<th>Username</th>
					<th>Password</th>
          <th>Number</th>
          <th>Email</th>
          <th>Market Name</th>
          <th>Status</th>
          <th>Mail</th>
					<th>Action</th>
                </tr>
                </thead>
                <tbody>
          <?php $count = 0; ?>
          <?php foreach($users_data as $row) {?>
				<tr>
					<td><?php echo $row->account_id;?></td>
					<td><?php echo $row->firstname;?></td>
					<td><?php echo $row->lastname;?></td>
					<td><?php echo $row->username;?></td>
					<td><?php echo $row->password;?></td>
          <td><?php echo $row->contact_number;?></td>
          <td><?php echo $row->email;?></td>
          <td><?php echo $row->market;?></td>
          <td><a href="<?php echo site_url('admin/dashboard/status') ?>" class="btn btn-success" data-toggle="modal" data-target="#status<?php echo $count; ?>"><?php echo $row->status ?> </a></td>

          <td><a href="<?php echo site_url('Sms/itexmo') ?>" class="btn btn-info" data-toggle="modal" data-target="#message<?php echo $count; ?>">Message</a>
          </td>

           <div class="modal" id="status<?php echo $count; ?>">
                  <div class="modal-dialog" role="document">
                    <div class="modal-content">
                      <div class="modal-header">
                        <h5 class="modal-title">Status</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                          <span aria-hidden="true">&times;</span>
                        </button>
                      </div>
                      <div class="modal-body">
                      <form method='POST' action="<?php echo site_url('admin/dashboard/status'); ?>">
                          <div class="form-group">
                              <input type="hidden" class="form-control" name ="account_id"value = "<?php echo $row->account_id ?>" required>
                          </div>
                          <div class="form-group">
                            <label for="exampleFormControlSelect1">Status</label>
                                <select class="form-control" name ="status" placeholder="status" id="exampleFormControlSelect1" required>
                                  <option>Approved</option>
                                  <option>Pending</option>

                                </select>
                          </div>
                          <div class="modal-footer">
                              <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                              <button type="submit" onclick='return window.confirm("Are you sure you want to submit this");' class="btn btn-primary">Save changes</button>
                          </div>
                      </form>
                </div>
              </div>
            </div>
          </div> 
          <div class="modal" id="message<?php echo $count; ?>">
                  <div class="modal-dialog" role="document">
                    <div class="modal-content">
                      <div class="modal-header">
                        <h5 class="modal-title">Modal title</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                          <span aria-hidden="true">&times;</span>
                        </button>
                      </div>
                      <div class="modal-body">
                      <form method='POST' action="<?php echo site_url('EmailController/send_partner') ?>">
                          <div class="form-group">
                              <input type="hidden" class="form-control" name ="email"value = "<?php echo $row->email ?>">
                          </div>
                          <div class="form-group">
                              <label for="exampleInputLastName1">Message</label>
                              <input type="text" class="form-control" name ="message" placeholder="Message" >
                          </div>
                         
                        
                          <div class="modal-footer">
                              <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                              <button type="submit"  onclick='return window.confirm("Are you sure you want to submit this");' class="btn btn-primary">Save changes</button>
                          </div>
                      </form>
                </div>
              </div>
            </div>
          </div>


					<td><a href="<?php echo site_url('admin/dashboard/delete_partner'); ?>/<?php echo $row->account_id?>" onclick='return window.confirm("Are you sure you want to delete this account  ");' class="btn btn-danger fas fa-trash-alt"></a>
           <a href="<?php echo site_url('admin/dashboard/update_partner') ?>" class="btn btn-primary fas fa-edit" data-toggle="modal" data-target="#updatemodal<?php echo $count; ?>"></a>  </td>
           <div class="modal" id="updatemodal<?php echo $count; ?>">
                  <div class="modal-dialog" role="document">
                    <div class="modal-content">
                      <div class="modal-header">
                      <h5 class="modal-title">Update <?php echo $row->firstname ?> <?php echo $row->lastname ?> Account</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                          <span aria-hidden="true">&times;</span>
                        </button>
                      </div>
                      <div class="modal-body">
                      <form method='POST' action="<?php echo site_url('admin/dashboard/update_partner'); ?>"  enctype="multipart/form-data">
                          <div class="form-group">
                              <input type="hidden" class="form-control" name ="account_id"value = "<?php echo $row->account_id ?>">
                          </div>
                          <div class="form-group">
                              <input type="hidden" class="form-control" name ="role"value = "<?php echo $row->role ?>">
                          </div>
                          <div class="form-group">
                              <label for="exampleInputFirstName1">First Name</label>
                              <input type="text" class="form-control" name ="firstname" placeholder="First Name" value = "<?php echo $row->firstname ?>" required>
                          </div>
                          <div class="form-group">
                              <label for="exampleInputLastName1">Last Name</label>
                              <input type="text" class="form-control" name ="lastname" placeholder="Last Name" value = "<?php echo $row->lastname ?>" required>
                          </div>
                          <div class="form-group">
                              <label for="exampleInputEmail1">Username</label>
                              <input type="text" class="form-control" name ="username" placeholder="Username" value = "<?php echo $row->username ?>" required>
                          </div>
                          <div class="form-group">
                              <label for="exampleInputPassword1">Password</label>
                              <input type="password" class="form-control"  name ="password" placeholder="Password" value = "<?php echo $row->password ?>" required>
                          </div>  
                          <div class="form-group">
                              <label for="exampleInputPassword1">Market Name</label>
                              <input type="text" class="form-control" name ="market" placeholder="Market Name" value = "<?php echo $row->market ?>" required>
                          </div>
                          <div class="form-group">
                              <label for="exampleInputPassword1">Address</label>
                              <input type="text" class="form-control" name ="address" placeholder="Address" value = "<?php echo $row->address ?>" required>
                          </div>
                          <div class="form-group">
                              <label for="exampleInputPassword1">Number</label>
                              <input  type="tel" pattern="^(09|\+639)\d{9}$"  class="form-control" name="contact_number" value = "<?php echo $row->contact_number ?>" placeholder="Number" required>
                          </div>
                          <div class="form-group">
                              <label for="exampleInputPassword1">Email</label>
                              <input type="email" class="form-control" name ="email" placeholder="Email" value = "<?php echo $row->email ?>" required>
                          </div>
                          <div class="form-group">
                              <label for="exampleInputPassword1">Account Image</label>
                              <input type="file" name="userfile" value="userfile"class="form-control" accept="image/x-png,image/gif,image/jpeg"  placeholder="" required>
                          </div>
                          <div class="form-group">
                            <label for="exampleFormControlSelect1">Status</label>
                                <select class="form-control" name ="status" placeholder="status" id="exampleFormControlSelect1"<?php echo $row->status ?>>
                                  <option>Approved</option>
                                  <option>Pending</option>
                                  <option>Rejected</option>
                                </select>
                          </div>
                          <div class="modal-footer">
                              <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                              <button type="submit"  class="btn btn-primary toastsDefaultSuccess">Save changes</button>
                          </div>
                      </form>
                </div>
              </div>
            </div>
          </div>
        
          
          <?php $count++; ?>

					</tr><?php }?> 
                </tbody>
                <tfoot>
                <tr>
               
          <th>Account ID</th>
					<th>First Name</th>
					<th>Last Name</th>
					<th>Username</th>
					<th>Password</th>
          <th>Number</th>
          <th>Email</th>
          <th>Market Name</th>
          <th>Status</th>
          <th>Mail</th>
					<th>Action</th>
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
   <div class="modal fade" id="addpartnermodal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">INSERT DATA</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button>
        </div>
        
        <div class="modal-body">
        <form method='POST' action='<?php echo site_url('admin/dashboard/addpartner') ?>'  enctype="multipart/form-data">
                <div class="form-group">
                    <input type="hidden" class="form-control" name ="status" value = "Pending" required>
                </div>
                <div class="form-group">
                    <input type="hidden" class="form-control" name ="role"value = "partner">
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">First Name</label>
                    <input type="text" class="form-control" name ="firstname" placeholder="First Name" value = "" required>
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">Last Name</label>
                    <input type="text" class="form-control" name ="lastname" placeholder="Last Name" value = "" required>
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Username</label>
                    <input type="text" class="form-control" name ="username" placeholder="Username" value = "" required>
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">Password</label>
                    <input type="password" class="form-control" name ="password" placeholder="Password" value = "" required>
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">Market Name</label>
                    <input type="text" class="form-control" name ="market" placeholder="Market Name" value = "" required>
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">Address</label>
                    <input type="text" class="form-control" name ="address" placeholder="Address" value = "" required>
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">Number</label>
                    <input  type="tel" pattern="^(09|\+639)\d{9}$"  class="form-control" name="contact_number" value = "" placeholder="Number" required>
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">Email</label>
                    <input type="email" class="form-control" name ="email" placeholder="Email" value = """ required>
                          </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">Account Image</label>
                    <input type="file" name="userfile" value="userfile"class="form-control" accept="image/x-png,image/gif,image/jpeg"  placeholder="" required>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="submit"  class="btn btn-primary toastsDefaultSuccess">Save changes</button>
            </div>
        </form>
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

</html>
