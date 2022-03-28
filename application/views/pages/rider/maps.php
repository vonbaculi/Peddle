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
      <li class="nav-item">
        <a href=<?php echo site_url('admin/dashboard/logout'); ?> class="nav-link">Logout </a>
      </li>
      </li>
    </ul>
  </nav>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href=<?php echo site_url('rider/dashboard/index'); ?> class="brand-link">
      <img src=<?php echo base_url('assets/vegefoods/images/logo3.JPG'); ?> alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
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
          <div class="col-sm-6">
            <h1>Partnered Markets</h1>
          </div>
           <div class="col-sm-6">
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <div class="card border ">
      <div class="card-header shadow-lg">
          <div class="card-body">
           <div class="shadow-lg border-4 " id="map1"  style="height: 400px;"></div>
          </div>
        </div>
      </div>
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
            var pritil_map = L.marker(
                [14.6177444,120.969789],
                {}
            ).addTo(map1);
        
    
            var pritil_icon = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "hamburger", "iconColor": "white", "markerColor": "purple", "prefix": "fa"}
            );
            pritil_map.setIcon(pritil_icon);
        
    
        var pritil_popup = L.popup({"maxWidth": "100%"});

        
            var pritil_content = $(`<a><img src="<?php echo base_url()?>assets/vegefoods/images/<?php echo $market_data[0]->market_img?>" height="500" width="500" class="img-fluid" alt="Colorlib Template"><?php echo $market_data[0]->market_name ?></a>`)[0];
            pritil_popup.setContent(pritil_content);
        

        pritil_map.bindPopup(pritil_popup)
        ;

        
    
    
            pritil_map.bindTooltip(
                `<div>
                     Pritil Market
                 </div>`,
                {"sticky": true}
            );
        
    
            var balintawak_map = L.marker(
                [14.6563, 121.000504],
                {}
            ).addTo(map1);
        
    
            var balintawak_icon = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "pizza-slice", "iconColor": "white", "markerColor": "red", "prefix": "fa"}
            );
            balintawak_map.setIcon(balintawak_icon);
        
    
        var balintawak_popup = L.popup({"maxWidth": "100%"});

        
            var balintawak_content = $(`<a><img src="<?php echo base_url()?>assets/vegefoods/images/<?php echo $market_data[1]->market_img?>" height="500" width="500" class="img-fluid" alt="Colorlib Template"><?php echo $market_data[1]->market_name ?></a>`)[0];
            balintawak_popup.setContent(balintawak_content);
        

        balintawak_map.bindPopup(balintawak_popup)
        ;

        
    
    
            balintawak_map.bindTooltip(
                `<div>
                     Balintawak Market
                 </div>`,
                {"sticky": true}
            );
        
    
            var quiapo_map = L.marker(
                [14.5984, 120.983],
                {}
            ).addTo(map1);
        
    
            var quiapo_icon = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "fish", "iconColor": "white", "markerColor": "blue", "prefix": "fa"}
            );
            quiapo_map.setIcon(quiapo_icon);
        
    
        var quiapo_popup = L.popup({"maxWidth": "100%"});

        
            var quiapo_content = $(`<a><img src="<?php echo base_url()?>assets/vegefoods/images/<?php echo $market_data[2]->market_img?>" height="500" width="500" class="img-fluid" alt="Colorlib Template"><?php echo $market_data[2]->market_name ?></a>`)[0];
            quiapo_popup.setContent(quiapo_content);
        

        quiapo_map.bindPopup(quiapo_popup)
        ;

        
    
    
            quiapo_map.bindTooltip(
                `<div>
                     Quiapo Market
                 </div>`,
                {"sticky": true}
            );
        
    
            var sta_mesa_map = L.marker(
                [14.6004877,121.0003739],
                {}
            ).addTo(map1);
        
    
            var sta_mesa_icon = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "carrot", "iconColor": "white", "markerColor": "orange", "prefix": "fa"}
            );
            sta_mesa_map.setIcon(sta_mesa_icon);
        
    
        var sta_mesa_popup = L.popup({"maxWidth": "100%"});

        
            var sta_mesa_content = $(`<a><img src="<?php echo base_url()?>assets/vegefoods/images/<?php echo $market_data[3]->market_img?>" height="500" width="500" class="img-fluid" alt="Colorlib Template"><?php echo $market_data[3]->market_name ?></a>`)[0];
            sta_mesa_popup.setContent(sta_mesa_content);
        

        sta_mesa_map.bindPopup(sta_mesa_popup)
        ;

        
    
    
            sta_mesa_map.bindTooltip(
                `<div>
                     Sta Mesa Market
                 </div>`,
                {"sticky": true}
            );
        
    
            var arranque_map = L.marker(
                [14.604066, 120.979797],
                {}
            ).addTo(map1);
        
    
            var arranque_icon = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "cookie", "iconColor": "white", "markerColor": "green", "prefix": "fa"}
            );
            arranque_map.setIcon(arranque_icon);
        
    
        var arranque_popup = L.popup({"maxWidth": "100%"});

        
            var arranque_content = $(`<a><img src="<?php echo base_url()?>assets/vegefoods/images/<?php echo $market_data[4]->market_img?>" height="500" width="500" class="img-fluid" alt="Colorlib Template"><?php echo $market_data[4]->market_name ?></a>`)[0];
            arranque_popup.setContent(arranque_content);
        

        arranque_map.bindPopup(arranque_popup)
        ;

        
    
    
            arranque_map.bindTooltip(
                `<div>
                     Arranque Market
                 </div>`,
                {"sticky": true}
            );
        





            var dagonoy_map = L.marker(
                [14.5721761,121.004961],
                {}
            ).addTo(map1);
        
    
            var dagonoy_icon = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "cheese", "iconColor": "white", "markerColor": "darkgreen", "prefix": "fa"}
            );
            dagonoy_map.setIcon(dagonoy_icon);
        
    
        var dagonoy_popup = L.popup({"maxWidth": "100%"});

        
            var dagonoy_content = $(`<a><img src="<?php echo base_url()?>assets/vegefoods/images/<?php echo $market_data[5]->market_img?>" height="500" width="500" class="img-fluid" alt="Colorlib Template"><?php echo $market_data[5]->market_name ?></a>`)[0];
            dagonoy_popup.setContent(dagonoy_content);
        

        dagonoy_map.bindPopup(dagonoy_popup)
        ;

        
    
    
            dagonoy_map.bindTooltip(
                `<div>
                     Dagonoy Market
                 </div>`,
                {"sticky": true}
            );




            var paco_map = L.marker(
                [14.578795,120.9932455],
                {}
            ).addTo(map1);
        
    
            var paco_icon = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "egg", "iconColor": "white", "markerColor": "lightred", "prefix": "fa"}
            );
            paco_map.setIcon(paco_icon);
        
    
        var paco_popup = L.popup({"maxWidth": "100%"});

        
            var paco_content = $(`<a><img src="<?php echo base_url()?>assets/vegefoods/images/<?php echo $market_data[6]->market_img?>" height="500" width="500" class="img-fluid" alt="Colorlib Template"><?php echo $market_data[6]->market_name ?></a>`)[0];
            paco_popup.setContent(paco_content);
        

        paco_map.bindPopup(paco_popup)
        ;

        
    
    
            paco_map.bindTooltip(
                `<div>
                     Paco Public Market
                 </div>`,
                {"sticky": true}
            );






            var san_andres_map = L.marker(
                [14.5695151, 120.9890084],
                {}
            ).addTo(map1);
        
    
            var san_andres_icon = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "drumstick-bite", "iconColor": "white", "markerColor": "darkpurple", "prefix": "fa"}
            );
            san_andres_map.setIcon(san_andres_icon);
        
    
        var san_andres_popup = L.popup({"maxWidth": "100%"});

        
            var san_andres_content = $(`<a><img src="<?php echo base_url()?>assets/vegefoods/images/<?php echo $market_data[7]->market_img?>" height="500" width="500" class="img-fluid" alt="Colorlib Template"><?php echo $market_data[7]->market_name ?></a>`)[0];
            san_andres_popup.setContent(san_andres_content);
        

        san_andres_map.bindPopup(san_andres_popup)
        ;

        
    
    
            san_andres_map.bindTooltip(
                `<div>
                     San Andres Market
                 </div>`,
                {"sticky": true}
            );


////////////////////////////////////////////////////////////////////////////////////////////
            var marker_aa19297202eb48eb817843681f1c7299 = L.marker(
              [lat2, longg2],
                {}
            ).addTo(map1);
        
    
            var icon_12596fc4675548ea8bb7c580b0d7cf98 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "motorcycle", "iconColor": "white", "markerColor": "darkgreen", "prefix": "fa"}
            );
            marker_aa19297202eb48eb817843681f1c7299.setIcon(icon_12596fc4675548ea8bb7c580b0d7cf98);
        
    
        var popup_38e3cc262ccc426a973dc9b4e76441e8 = L.popup({"maxWidth": "100%"});

        
            var html_13a2ee91229a4b3dacbd1710a17b656d = $(`<a><img src="<?php echo base_url()?>assets/vegefoods/images/<?php echo $this->session->userdata('acc_img');?>" height="500" width- class="img-fluid" alt="Colorlib Template"><?php echo $this->session->userdata('firstname') ?></a>`)[0];
            popup_38e3cc262ccc426a973dc9b4e76441e8.setContent(html_13a2ee91229a4b3dacbd1710a17b656d);
        

        marker_aa19297202eb48eb817843681f1c7299.bindPopup(popup_38e3cc262ccc426a973dc9b4e76441e8)
        ;

        
    
    
            marker_aa19297202eb48eb817843681f1c7299.bindTooltip(
                `<div>
                    You.
                 </div>`,
                {"sticky": true}
            );
  
        
</script>
</body>
</html>
