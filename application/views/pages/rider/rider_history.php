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
  <title>Rider History</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://fonts.googleapis.com/css?family=Poppins:200,300,400,500,600,700,800&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Lora:400,400i,700,700i&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Amatic+SC:400,700&display=swap" rel="stylesheet">

	<link rel="stylesheet" href=<?php echo base_url('assets/vegefoods/css/open-iconic-bootstrap.min.css'); ?> >
    <link rel="stylesheet" href=<?php echo base_url('assets/vegefoods/css/animate.css'); ?> >
      
    <link rel="stylesheet" href=<?php echo base_url('assets/vegefoods/css/owl.carousel.min.css'); ?> >
    <link rel="stylesheet" href=<?php echo base_url('assets/vegefoods/css/owl.theme.default.min.css'); ?> >
    <link rel="stylesheet" href=<?php echo base_url('assets/vegefoods/css/magnific-popup.css'); ?> >

    <link rel="stylesheet" href=<?php echo base_url('assets/vegefoods/css/aos.css'); ?> >

    <link rel="stylesheet" href=<?php echo base_url('assets/vegefoods/css/ionicons.min.css'); ?> >

    <link rel="stylesheet" href=<?php echo base_url('assets/vegefoods/css/bootstrap-datepicker.css'); ?> >
    <link rel="stylesheet" href=<?php echo base_url('assets/vegefoods/css/jquery.timepicker.css'); ?> >

      
    <link rel="stylesheet" href=<?php echo base_url('assets/vegefoods/css/flaticon.css'); ?> >
    <link rel="stylesheet" href=<?php echo base_url('assets/vegefoods/css/icomoon.css'); ?> >
    <link rel="stylesheet" href=<?php echo base_url('assets/vegefoods/css/style.css'); ?> >
  <!-- Font Awesome -->
  <link rel="stylesheet" href=<?php echo base_url('assets/admin/plugins/fontawesome-free/css/all.min.css'); ?> > 		
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- DataTables -->
    <link rel="stylesheet" href=<?php echo base_url('assets/admin/plugins/datatables-bs4/css/dataTables.bootstrap4.css'); ?> >
  <link rel="stylesheet" href=<?php echo base_url('assets/admin/plugins/datatables-responsive/css/responsive.bootstrap4.min.css'); ?> >
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
    <?php foreach($rider_data as $row) {?>
    <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Profile</h1>
          </div>
          <div class="col-sm-6">
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-3">

            <!-- Profile Image -->
            <div class="card card-primary card-outline">
              <div class="card-body box-profile">
                <div class="text-center">
                  <img class="profile-user-img img-fluid img-circle"
                   src="<?php echo base_url()?>assets/vegefoods/images/<?php echo $row->acc_img?>"
                       alt="User profile picture">
                </div>

                <h3 class="profile-username text-center"> <?php echo $row->firstname?> <?php echo $row->lastname?></h3>

                <p class="text-muted text-center"> <?php echo $row->address?></p>

                <ul class="list-group list-group-unbordered mb-3">
                  <li class="list-group-item">
                    <b>Username</b> <a class="float-right"><?php echo $row->username?></a>
                  </li>
                  <li class="list-group-item">
                    <b>Password</b> <a class="float-right"><?php echo $row->password?></a>
                  </li>
                  <li class="list-group-item">
                    <b>Address</b> <a class="float-right"><?php echo $row->address?></a>
                  </li>
                  <li class="list-group-item">
                    <b>Contact Number</b> <a class="float-right"><?php echo $row->contact_number?></a>
                  </li>
                </ul>

              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->

            <!-- About Me Box -->
     
            <!-- /.card -->
          </div>
          <!-- /.col -->
          <?php }?>
          <div class="col-md-9">
            <div class="card">
              <div class="card-header p-2">
                <ul class="nav nav-pills">
                  <li class="nav-item"><a class="nav-link active" href="#history" data-toggle="tab">History</a></li>
                </ul>
              </div><!-- /.card-header -->
              <div class="card-body">
                <div class="tab-content">
                  <div class="active tab-pane" id="history">
                    <!-- Post -->
                    
                    <div class="row">
                <div class="col-12 table-responsive">
                  <table class="table table-striped">
                    <thead>
                    <tr>
                      <th>ID</th>
                      <th>Items</th>
                      <th>Qty</th>
                      <th>Price</th>
                      <th>Total</th>
                      <th>Market</th>
                      <th>Date</th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php foreach($rider_history as $row) {?>
				<tr>
					<td><?php echo $row->cart_id;?></td>
                    <td><?php echo $row->product_name;?></td>
                    <td><?php echo $row->quantity;?></td>
                    <td><?php echo $row->product_price;?></td>
                    <td><?php echo $row->total;?></td>
                    <td><?php echo $row->market_name;?></td>
                    <td><?php echo $row->date;?></td>
             </tr>
             <?php }?> 
                    </tbody>
                  </table>
                </div>
              </div>
       
          </div>
                  <!-- /.tab-pane -->
                  <div class="tab-pane" id="reviews">
                    <!-- The timeline -->
                   <div class="row">
                <div class="col-12 table-responsive">
                  <table class="table table-striped">
                    <thead>
                    <tr>
                      <th>Message</th>
                      <th>Date</th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php foreach($reviews as $row) {?>
			              	<tr>
                    <td><?php echo $row->message;?></td>
                    <td><?php echo $row->date;?></td>


                    </tr><?php }?> 
                    </tbody>
                  </table>
                </div>
              </div>
            </div> 
                  <!-- /.tab-pane -->

                  <div class="tab-pane" id="settings">
                    <form class="form-horizontal">
                      <div class="form-group row">
                        <label for="inputName" class="col-sm-2 col-form-label">Name</label>
                        <div class="col-sm-10">
                          <input type="email" class="form-control" id="inputName" placeholder="Name">
                        </div>
                      </div>
                      <div class="form-group row">
                        <label for="inputEmail" class="col-sm-2 col-form-label">Email</label>
                        <div class="col-sm-10">
                          <input type="email" class="form-control" id="inputEmail" placeholder="Email">
                        </div>
                      </div>
                      <div class="form-group row">
                        <label for="inputName2" class="col-sm-2 col-form-label">Name</label>
                        <div class="col-sm-10">
                          <input type="text" class="form-control" id="inputName2" placeholder="Name">
                        </div>
                      </div>
                      <div class="form-group row">
                        <label for="inputExperience" class="col-sm-2 col-form-label">Experience</label>
                        <div class="col-sm-10">
                          <textarea class="form-control" id="inputExperience" placeholder="Experience"></textarea>
                        </div>
                      </div>
                      <div class="form-group row">
                        <label for="inputSkills" class="col-sm-2 col-form-label">Skills</label>
                        <div class="col-sm-10">
                          <input type="text" class="form-control" id="inputSkills" placeholder="Skills">
                        </div>
                      </div>
                      <div class="form-group row">
                        <div class="offset-sm-2 col-sm-10">
                          <div class="checkbox">
                            <label>
                              <input type="checkbox"> I agree to the <a href="#">terms and conditions</a>
                            </label>
                          </div>
                        </div>
                      </div>
                      <div class="form-group row">
                        <div class="offset-sm-2 col-sm-10">
                          <button type="submit" class="btn btn-danger">Submit</button>
                        </div>
                      </div>
                    </form>
                  </div>
                  <!-- /.tab-pane -->
                </div>
                <!-- /.tab-content -->
              </div><!-- /.card-body -->
            </div>
            <!-- /.nav-tabs-custom -->
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
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


<!-- AdminLTE App -->
<script src=<?php echo base_url('assets/admin/dist/js/adminlte.min.js'); ?> ></script>
<!-- AdminLTE for demo purposes -->
<script src=<?php echo base_url('assets/admin/dist/js/demo.js'); ?> ></script>
<!-- page script -->
<script>
  $(function () {
    $("#example1").DataTable();
    $('#example2').DataTable({
      "paging": true,
      "lengthChange": false,
      "searching": false,
      "ordering": true,
      "info": true,
      "autoWidth": false,
    });
    $('.toastsDefaultSuccess').click(function() {
      $(document).Toasts('create', {
        class: 'bg-success', 
        title: 'Toast Title',
        subtitle: 'Subtitle',
        autohide: true,
        progressBar: true,
        newestOnTop: true,
        showMethod: "fadeIn",
        hideMethod: "fadeOut",
        body: 'Lorem ipsum dolor sit amet, consetetur sadipscing elitr'
            })
    });
    $('.toastsDefaultInfo').click(function() {
      $(document).Toasts('create', {
        class: 'bg-info', 
        title: 'Toast Title',
        subtitle: 'Subtitle',
        autohide: true,
        progressBar: true,
        newestOnTop: true,
        delay: 1000,
        showMethod: "fadeIn",
        hideMethod: "fadeOut",
        body: 'Lorem ipsum dolor sit amet, consetetur sadipscing elitr.'
      })
    });
    $('.toastsDefaultWarning').click(function() {
      $(document).Toasts('create', {
        class: 'bg-warning', 
        title: 'Toast Title',
        subtitle: 'Subtitle',
        autohide: true,
        progressBar: true,
        newestOnTop: true,
        delay: 1000,
        showMethod: "fadeIn",
        hideMethod: "fadeOut",
        body: 'Lorem ipsum dolor sit amet, consetetur sadipscing elitr.'
      })
    });
    $('.toastsDefaultDanger').click(function() {
      $(document).Toasts('create', {
        class: 'bg-danger', 
        title: 'Toast Title',
        subtitle: 'Subtitle',
        autohide: true,
        progressBar: true,
        newestOnTop: true,
        delay: 1000,
        showMethod: "fadeIn",
        hideMethod: "fadeOut",
        body: 'Account Deleted'
      })
    });
    $('.toastsDefaultMaroon').click(function() {  
      $(document).Toasts('create', {
        class: 'bg-maroon', 
        title: 'Toast Title',
        subtitle: 'Subtitle',
        autohide: true,
        progressBar: true,
        newestOnTop: true,
        delay: 1000,
        showMethod: "fadeIn",
        hideMethod: "fadeOut",
        body: 'Lorem ipsum dolor sit amet, consetetur sadipscing elitr.'
      })
    });
  });

</script>
<!-- ALERTS -->
<div class="modal fade" id="modal-success">
        <div class="modal-dialog">
          <div class="modal-content bg-success">
            <div class="modal-header">
              <h4 class="modal-title">Success Modal</h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span></button>
            </div>
            <div class="modal-body">
              <p>One fine body&hellip;</p>
            </div>
            <div class="modal-footer justify-content-between">
              <button type="button" class="btn btn-outline-light" data-dismiss="modal">Close</button>
              <button type="button" class="btn btn-outline-light">Save changes</button>
            </div>
          </div>
</body>
</html>
