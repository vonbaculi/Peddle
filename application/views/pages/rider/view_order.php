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
    <title>Order Details</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script>
              L_NO_TOUCH = false;
              L_DISABLE_3D = false;
          </script>
      
      <script src="https://cdn.jsdelivr.net/npm/leaflet@1.5.1/dist/leaflet.js"></script>
      <script src="https://code.jquery.com/jquery-1.12.4.min.js"></script>
      <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/Leaflet.awesome-markers/2.0.2/leaflet.awesome-markers.js"></script>
      <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/leaflet@1.5.1/dist/leaflet.css"/>
      <!-- Nawawala Yung design -->
      <!--<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css"/>-->

      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap-theme.min.css"/>
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css"/>
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Leaflet.awesome-markers/2.0.2/leaflet.awesome-markers.css"/>
      <link rel="stylesheet" href="https://rawcdn.githack.com/python-visualization/folium/master/folium/templates/leaflet.awesome.rotate.css"/>
      <style>html, body {width: 100%;height: 100%;margin: 0;padding: 0;}</style>
      <style>#map {position:absolute;top:0;bottom:0;right:0;left:0;}</style>
      
              <meta name="viewport" content="width=device-width,
                  initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
              <style>
                  #map1 {
                      position: relative;
                      width: 100.0%;
                      height: 100.0%;
                      top: 0.0%;
                  }
              </style>
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
        <img src=<?php echo base_url('assets/vegefoods/images/logo3.JPG'); ?> alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
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
      <?php foreach($view_data as $row) {?>
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
                    src="<?php echo base_url()?>assets/vegefoods/user_files/<?php echo $row->acc_img?>"
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
                    <li class="nav-item"><a class="nav-link active" href="#maps" data-toggle="tab">Maps</a></li>
                    <li class="nav-item"><a class="nav-link " href="#Order" data-toggle="tab">Order</a></li>
                  </ul>
                </div><!-- /.card-header -->
                <div class="card-body">
                  <div class="tab-content">
                    <div class="active tab-pane" id="maps">
                      <!-- Post -->
                      <div class="row">
                        <div class="col-12 table-responsive">
                          <div class="card border ">
                            <div class="card-header shadow-lg">
                              <div class="card-body">
                                <div class="shadow-lg border-4" id="map1"  style="height: 400px;"></div>
                              </div>
                            </div>
                          </div>
                      </div>
                    </div>
                  </div> 

                    <!-- /.tab-pane -->
                <div class="tab-pane" id="Order">
                <div class="row">
                  <div class="col-12 table-responsive">
                    <table class="table table-striped">
                      <thead>
                      <tr>
                      <?php $count = 0; ?>

                        <th>ID</th>
                        <th>Items</th>
                        <th>Qty</th>
                        <th>Price</th>
                        <th>Market</th>
                        <th>Date</th>
                        <th>Actions</th>
                        <th></th>
                      </tr>
                      </thead>
                      <tbody>
                      <?php foreach($pending_order as $row) {?>
                      <tr>
                      <td><?php echo $row->order_id;?></td>
                      <td><?php echo $row->product_name;?></td>
                      <td><?php echo $row->quantity;?></td>
                      <td><?php echo $row->product_price;?></td>
                      <td><?php echo $row->market_name;?></td>
                      <td><?php echo $row->date;?></td>
                      <td>
                      <a href="<?php echo site_url('rider/dashboard/accept') ?>" class="btn btn-success" data-toggle="modal" data-target="#status<?php echo $count; ?>"><?php echo $row->status_val ?> </a>

          </td>


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

  </script>
  <script>    

  var lat = <?php echo json_encode($view_data[0]->lat) ?>; // 7
      var longg = <?php echo json_encode($view_data[0]->lng) ?>; // 7
      var lat2 = <?php echo json_encode($this->session->userdata('lat')) ?>; // 7
      var longg2 = <?php  echo json_encode($this->session->userdata('long'))  ?>; // 7
      var name2 = <?php echo json_encode($this->session->userdata('firstname'))  ?>; // 7
        var map1 = L.map(
        "map1",
        {
        center: [14.5995, 120.9842],
        crs: L.CRS.EPSG3857,
        zoom: 12,
        zoomControl: true,
        preferCanvas: false,
        }
        );

        var tile_layer_94c63f1b6ecc477a84430b40ff25451e = L.tileLayer(
        "https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png",
        {"attribution": "Data by \u0026copy; \u003ca href=\"http://openstreetmap.org\"\u003eOpenStreetMap\u003c/a\u003e, under \u003ca href=\"http://www.openstreetmap.org/copyright\"\u003eODbL\u003c/a\u003e.", "detectRetina": false, "maxNativeZoom": 18, "maxZoom": 18, "minZoom": 0, "noWrap": false, "opacity": 1, "subdomains": "abc", "tms": false}
        ).addTo(map1);



        var market_map = L.marker(
          [lat, longg],
          {}
      ).addTo(map1);


      var icon_18269c728c3e4dc59b4940f15f63c07f = L.AwesomeMarkers.icon(
          {"extraClasses": "fa-rotate-0", "icon": "fa fa-cutlery", "iconColor": "white", "markerColor": "red", "prefix": "glyphicon"}
      );
      market_map.setIcon(icon_18269c728c3e4dc59b4940f15f63c07f);


  var popup_3d3d30a2ceed4e319bf2f71c9123d0f1 = L.popup({"maxWidth": "100%"});


      var html_b78e085cda3a4ce2956de0c77f64d383 = $(`<a><img src="<?php echo base_url()?>assets/vegefoods/images/<?php echo $view_data[0]->acc_img;?>" height="500" width- class="img-fluid" alt="Colorlib Template"><?php echo $view_data[0]->firstname ?></a>`)[0];
      popup_3d3d30a2ceed4e319bf2f71c9123d0f1.setContent(html_b78e085cda3a4ce2956de0c77f64d383);


  market_map.bindPopup(popup_3d3d30a2ceed4e319bf2f71c9123d0f1)
  ;




      market_map.bindTooltip(
          `<div>
              Customer
          </div>`,
          {"sticky": true}
      );









        var rider_map = L.marker(
        [lat2, longg2],
        {}
        ).addTo(map1);


        var icon_12596fc4675548ea8bb7c580b0d7cf98 = L.AwesomeMarkers.icon(
        {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "green", "prefix": "glyphicon"}
        );
        rider_map.setIcon(icon_12596fc4675548ea8bb7c580b0d7cf98);


        var popup_38e3cc262ccc426a973dc9b4e76441e8 = L.popup({"maxWidth": "100%"});


        var html_13a2ee91229a4b3dacbd1710a17b656d = $(`<a><img src="<?php echo base_url()?>assets/vegefoods/images/<?php echo $this->session->userdata('img');?>" height="500" width- class="img-fluid" alt="Colorlib Template"><?php echo $this->session->userdata('firstname') ?></a>`)[0];
        popup_38e3cc262ccc426a973dc9b4e76441e8.setContent(html_13a2ee91229a4b3dacbd1710a17b656d);


        rider_map.bindPopup(popup_38e3cc262ccc426a973dc9b4e76441e8)
        ;




        rider_map.bindTooltip(
        `<div>
        Available Market in Metro Manila
        </div>`,
        {"sticky": true}
        );



      

  </script>
  </body>
  </html>
