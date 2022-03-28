<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Contact Us</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <link href="https://fonts.googleapis.com/css?family=Poppins:200,300,400,500,600,700,800&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Lora:400,400i,700,700i&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Amatic+SC:400,700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href=<?php echo base_url('assets/admin/plugins/fontawesome-free/css/all.min.css'); ?> > 		
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- DataTables -->
  <link rel="stylesheet" href=<?php echo base_url('assets/admin/plugins/datatables-bs4/css/dataTables.bootstrap4.css'); ?> >
  <!-- Theme style -->
  <link rel="stylesheet" href=<?php echo base_url('assets/admin/dist/css/adminlte.min.css'); ?> >
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
  <script>
            L_NO_TOUCH = false;
            L_DISABLE_3D = false;
        </script>
    
    <script src="https://cdn.jsdelivr.net/npm/leaflet@1.5.1/dist/leaflet.js"></script>
    <script src="https://code.jquery.com/jquery-1.12.4.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Leaflet.awesome-markers/2.0.2/leaflet.awesome-markers.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/leaflet@1.5.1/dist/leaflet.css"/>
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
                    left: 0.0%;
                    top: 0.0%;
                }
            </style>
  </head>
  <body class="goto-here">
		<div class="py-1 bg-primary">
    	<div class="container">
    		<div class="row no-gutters d-flex align-items-start align-items-center px-md-0">
	    		<div class="col-lg-12 d-block">
		    		<div class="row d-flex">
             <?php
    $this->load->view('alert');
    ?>
		    			<div class="col-md pr-4 d-flex topper align-items-center">
					    	<div class="icon mr-2 d-flex justify-content-center align-items-center"><span class="icon-phone2"></span></div>
						    <span class="text">09066165843</span>
					    </div>
					    <div class="col-md pr-4 d-flex topper align-items-center">
					    	<div class="icon mr-2 d-flex justify-content-center align-items-center"><span class="icon-paper-plane"></span></div>
						    <span class="text">peddle.ph@gmail.com</span>
					    </div>
					    <div class="col-md-5 pr-4 d-flex topper align-items-center text-lg-right">
						    <span class="text">3-5 Business days delivery &amp; Free Returns</span>
					    </div>
				    </div>
			    </div>
		    </div>
		  </div>
    </div>
    <nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
	    <div class="container">
	      <a class="navbar-brand" href="<?php echo site_url('Home') ?>">Peddle</a>
	      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
	        <span class="oi oi-menu"></span> Menu
	      </button>

	      <div class="collapse navbar-collapse" id="ftco-nav">
        <ul class="navbar-nav ml-auto">
            <li class="nav-item active"><a href="<?php echo site_url('Home') ?>" class="nav-link">Home</a></li>
            <li class="nav-item"><a href="<?php echo site_url('Market_con/Market') ?>" class="nav-link">Market</a></li>
	          <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle"  id="dropdown04" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Shop</a>
              <div class="dropdown-menu" aria-labelledby="dropdown04">
              	<a class="dropdown-item" href="<?php echo site_url('Product_con/Shop') ?>" >Shop</a>
                <a class="dropdown-item" href="<?php echo site_url('Shopping_cart') ?>">Cart</a>
                <a class="dropdown-item" href="<?php echo site_url('Page/Checkout') ?>">Checkout</a>
				
              </div>
            </li>
	          <li class="nav-item"><a href="<?php echo site_url('Page/About') ?>" class="nav-link">About</a></li>
	          	          <li class="nav-item"><a href="<?php echo site_url('Page/Recipe') ?>" class="nav-link">Recipe</a></li>

            <li class="nav-item"><a href="<?php echo site_url('Page/Contact') ?>" class="nav-link">Contact</a></li>

	          <li class="nav-item cta cta-colored"><a href="<?php echo site_url('Page/Cart') ?>" class="nav-link"><span class="icon-shopping_cart"></span><?php echo $this->cart->total_items(); ?></a></li>
            <li class="nav-item"><a href="<?php echo site_url('Login') ?>" class="nav-link">	
            				
            <?php 
            if($this->session->userdata('username')) {
              if($this->session->userdata('role')!='user'){
                  echo'Dashboard';}
                else{
                  echo 'Logout';}  
                }          
            else{echo'Login';}
            
            ?></a></li>
            
            <li class="nav-item"><a style="color:gray" class="nav-link"><strong>Welcome <?php echo $this->session->userdata('username');?></strong> </a></li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle1"  id="dropdown05" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Apply Now</a>
              <div class="dropdown-menu" aria-labelledby="dropdown05">
              	<a class="dropdown-item" href="<?php echo site_url('apply/apply_market') ?>" >Market</a>
                <a class="dropdown-item" href="<?php echo site_url('apply/apply_rider') ?>">Rider</a>
</div>
        </ul>
	      </div>
	    </div>
	  </nav>
    <!-- END nav -->

    <div class="hero-wrap hero-bread" style="background-image: url('<?php echo base_url('assets/vegefoods/images/bg_1.jpg'); ?>');">
      <div class="container">
        <div class="row no-gutters slider-text align-items-center justify-content-center">
          <div class="col-md-9 ftco-animate text-center">
          	<p class="breadcrumbs"><span class="mr-2"><a href="index.html">Home</a></span> <span>Contact us</span></p>
            <h1 class="mb-0 bread">Contact us</h1>
          </div>
        </div>
      </div>
    </div>

    <section class="ftco-section contact-section bg-light">
      <div class="container">
      	<div class="row d-flex mb-5 contact-info">
          <div class="w-100"></div>
          <div class="col-md-3 d-flex">
          	<div class="info bg-white p-4">
	            <p><span>Address:</span> 198 West 21th Street, Suite 721 New York NY 10016</p>
	          </div>
          </div>
          <div class="col-md-3 d-flex">
          	<div class="info bg-white p-4">
	            <p><span>Phone:</span> <a href="tel://1234567920">09066165843</a></p>
	          </div>
          </div>
          <div class="col-md-3 d-flex">
          	<div class="info bg-white p-4">
	            <p><span>Email:</span> <a href="mailto:info@yoursite.com">peddle.ph@gmail.com</a></p>
	          </div>
          </div>
          
          <div class="col-md-3 d-flex">
          	<div class="info bg-white p-4">
	            <p><span>Website</span> <a href="javascript:void(0);">yoursite.com</a></p>
	          </div>
          </div>
        </div>
        <div class="row block-9">
          <div class="col-md-6 order-md-last d-flex">
            <form method='POST' action="<?php echo site_url('admin/dashboard/contact'); ?>" class="bg-white p-5 contact-form" enctype="multipart/form-data">
              <div class="form-group">
                <input type="text" class="form-control" name="name" placeholder="Your Name" required>
              </div>
              <div class="form-group">
                <input type="hidden" class="form-control" name="account_id" value = "<?php $this->session->userdata('account_id') ?>" placeholder="this" required>
              </div>
              <div class="form-group">
                <input type="email" class="form-control"  name="email" placeholder="Your Email" required>
              </div>
              <div class="form-group">
                <input type="tel" pattern="^(09|\+639)\d{9}$" class="form-control" name="number" placeholder="Your Number" required>
              </div>
              <div class="form-group">
                <textarea name="message" type="text" cols="30" rows="7"  name="message" class="form-control" placeholder="Message" required></textarea>
              </div>
              <div class="form-group">
               

              <?php if($this->session->userdata('username')) {?>
                <input type="Submit" value="Submit" onclick='return window.confirm("Are you sure you want to submit this");'  class=" btn btn-primary py-3 px-5" Subtmit>
              <?php }?>
              <?php if(empty($this->session->userdata('username'))) {?>
                <input type="button" value="Submit" class="toastsDefaultWarning btn btn-primary py-3 px-5" Subtmit>';
              <?php }?>
                <div class="modal fade" id="myModal" role="dialog">
                <div class="modal-dialog modal-md">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h4 class="modal-title">Modal Header</h4>
                      <button type="button" class="close" data-dismiss="modal">&times;</button>

                    </div>
                    <div class="modal-body">
                      <p>This is a small modal.</p>
                    </div>
                    <div class="modal-footer">
                      <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                      <button type="submit" class="btn btn-default" data-dismiss="modal">Submit</button>
                    </div>
                  </div>
                </div>
              </div>
              </div>
            </form>
          </div>

          <div class="col-md-6 d-flex">
          <div class="folium-map" id="map1" ></div>
          </div>
        </div>
      </div>
    </section>
    <footer class="ftco-footer ftco-section">
      <div class="container">
      	<div class="row">
      		<div class="mouse">
						<a href="javascript:void(0);" class="mouse-icon">
							<div class="mouse-wheel"><span class="ion-ios-arrow-up"></span></div>
						</a>
					</div>
      	</div>
        <div class="row mb-5">
          <div class="col-md">
            <div class="ftco-footer-widget mb-4">
            <h2 class="ftco-heading-2">Peddle</h2>
              <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia.</p>
              <ul class="ftco-footer-social list-unstyled float-md-left float-lft mt-5">
                <li class="ftco-animate"><a href="javascript:void(0);"><span class="icon-twitter"></span></a></li>
                <li class="ftco-animate"><a href="javascript:void(0);"><span class="icon-facebook"></span></a></li>
                <li class="ftco-animate"><a href="javascript:void(0);"><span class="icon-instagram"></span></a></li>
              </ul>
            </div>
          </div>
          <div class="col-md">
            <div class="ftco-footer-widget mb-4 ml-md-5">
              <h2 class="ftco-heading-2">Menu</h2>
              <ul class="list-unstyled">
                <li><a href="<?php echo site_url('Product_con/Shop') ?>" class="py-2 d-block">Shop</a></li>
                <li><a href="<?php echo site_url('Page/About') ?>" class="py-2 d-block">About</a></li>
                <li><a href="<?php echo site_url('Page/Blog') ?>" class="py-2 d-block">Blog</a></li>
                <li><a href="<?php echo site_url('Page/Contact') ?>" class="py-2 d-block">Contact Us</a></li>
              </ul>
            </div>
          </div>
          <div class="col-md-4">
             <div class="ftco-footer-widget mb-4">
              <h2 class="ftco-heading-2">Help</h2>
              <div class="d-flex">
	              <ul class="list-unstyled mr-l-5 pr-l-3 mr-4">
	                <li><a href="javascript:void(0);" class="py-2 d-block">Shipping Information</a></li>
	                <li><a href="javascript:void(0);" class="py-2 d-block">Returns &amp; Exchange</a></li>
	                <li><a href="javascript:void(0);" class="py-2 d-block">Terms &amp; Conditions</a></li>
	                <li><a href="javascript:void(0);" class="py-2 d-block">Privacy Policy</a></li>
	              </ul>
	              <ul class="list-unstyled">
	                <li><a href="javascript:void(0);" class="py-2 d-block">FAQs</a></li>
	              </ul>
	            </div>
            </div>
          </div>
          <div class="col-md">
            <div class="ftco-footer-widget mb-4">
            	<h2 class="ftco-heading-2">Have a Questions?</h2>
            	<div class="block-23 mb-3">
	              <ul>
	                <li><span class="icon icon-map-marker"></span><span class="text">TIP MANILA</span></li>
	                <li><a href="javascript:void(0);"><span class="icon icon-phone"></span><span class="text">0906165843</span></a></li>
	                <li><a href="javascript:void(0);"><span class="icon icon-envelope"></span><span class="text">peddle.ph@gmail.com</span></a></li>
	              </ul>
	            </div>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-12 text-center">

            <p><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
						  Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="icon-heart color-danger" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
						  <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
						</p>
          </div>
        </div>
      </div>
    </footer>
    
  

  <!-- loader -->
  <div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="javascript:void(0);eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="javascript:void(0);F96D00"/></svg></div>


 <script src=<?php echo base_url('assets/vegefoods/js/jquery.min.js'); ?> ></script>
 <script src=<?php echo base_url('assets/vegefoods/js/jquery-migrate-3.0.1.min.js'); ?> ></script>
 <script src=<?php echo base_url('assets/vegefoods/js/popper.min.js'); ?> ></script>
 <script src=<?php echo base_url('assets/vegefoods/js/bootstrap.min.js'); ?> ></script> 
 <script src=<?php echo base_url('assets/vegefoods/js/jquery.easing.1.3.js'); ?> ></script>
 <script src=<?php echo base_url('assets/vegefoods/js/jquery.waypoints.min.js'); ?> ></script>
 <script src=<?php echo base_url('assets/vegefoods/js/jquery.stellar.min.js'); ?> ></script>
 <script src=<?php echo base_url('assets/vegefoods/js/owl.carousel.min.js'); ?> ></script>
 <script src=<?php echo base_url('assets/vegefoods/js/jquery.magnific-popup.min.js'); ?> ></script>
 <script src=<?php echo base_url('assets/vegefoods/js/aos.js'); ?> ></script>
 <script src=<?php echo base_url('assets/vegefoods/js/jquery.animateNumber.min.js'); ?> ></script>
 <script src=<?php echo base_url('assets/vegefoods/js/bootstrap-datepicker.js'); ?> ></script>
 <script src=<?php echo base_url('assets/vegefoods/js/scrollax.min.js'); ?> ></script>
 <script src=https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false'); ?> ></script>
 <script src=<?php echo base_url('assets/vegefoods/js/google-map.js'); ?> ></script>
 <script src=<?php echo base_url('assets/vegefoods/js/main.js'); ?> ></script>
    <!-- jQuery -->
<script src=<?php echo base_url('assets/admin/plugins/jquery/jquery.min.js'); ?> ></script>
<!-- Bootstrap 4 -->
<script src=<?php echo base_url('assets/admin/plugins/bootstrap/js/bootstrap.bundle.min.js'); ?> ></script>
<!-- DataTables -->
<script src=<?php echo base_url('assets/admin/plugins/datatables/jquery.dataTables.js'); ?> ></script>
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
        title: 'Add to cart',
        subtitle: 'Added',
        autohide: true,
        progressBar: true,
        newestOnTop: true,
        showMethod: "fadeIn",
        hideMethod: "fadeOut",
        body: 'This item is added to your cart'
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
        title: 'Please Login first',
        subtitle: 'sorry',
        autohide: true,
        progressBar: true,
        newestOnTop: true,
        delay: 1000,
        showMethod: "fadeIn",
        hideMethod: "fadeOut",
        body: 'Login first to send your message! '
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

<script>    
    
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
                {"extraClasses": "fa-rotate-0", "icon": "cutlery", "iconColor": "white", "markerColor": "purple", "prefix": "fa"}
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
                {"extraClasses": "fa-rotate-0", "icon": "fa fa-cutlery", "iconColor": "white", "markerColor": "red", "prefix": "glyphicon"}
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
                {"extraClasses": "fa-rotate-0", "icon": "fa fa-cutlery", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
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
                {"extraClasses": "fa-rotate-0", "icon": "fa fa-cutlery", "iconColor": "white", "markerColor": "orange", "prefix": "glyphicon"}
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
                {"extraClasses": "fa-rotate-0", "icon": "fa fa-cutlery", "iconColor": "white", "markerColor": "green", "prefix": "glyphicon"}
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
                {"extraClasses": "fa-rotate-0", "icon": "fa fa-cutlery", "iconColor": "white", "markerColor": "darkgreen", "prefix": "glyphicon"}
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
                {"extraClasses": "fa-rotate-0", "icon": "fa fa-cutlery", "iconColor": "white", "markerColor": "lightred", "prefix": "glyphicon"}
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
                {"extraClasses": "fa-rotate-0", "icon": "fa fa-cutlery", "iconColor": "white", "markerColor": "darkpurple", "prefix": "glyphicon"}
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
            var lat2 = <?php echo json_encode($this->session->userdata('lat')) ?>; // 7
    var longg2 = <?php  echo json_encode($this->session->userdata('long'))  ?>; // 7

            var you_map = L.marker(
                [lat2, longg2],
                {}
            ).addTo(map1);
        
    
            var icon_12596fc4675548ea8bb7c580b0d7cf98 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0",
                "icon": "user-circle",
                "iconColor": "white",
                "markerColor": "orange",
                "prefix": "fa"}
            );
            you_map.setIcon(icon_12596fc4675548ea8bb7c580b0d7cf98);
        
    
        var popup_38e3cc262ccc426a973dc9b4e76441e8 = L.popup({"maxWidth": "100%"});

        
            var html_13a2ee91229a4b3dacbd1710a17b656d = $(`<a><img src="<?php echo base_url()?>assets/vegefoods/images/<?php echo $this->session->userdata('acc_img');?>" height="500" width- class="img-fluid" alt="Colorlib Template"><?php echo $this->session->userdata('firstname') ?></a>`)[0];
            popup_38e3cc262ccc426a973dc9b4e76441e8.setContent(html_13a2ee91229a4b3dacbd1710a17b656d);
        

        you_map.bindPopup(popup_38e3cc262ccc426a973dc9b4e76441e8)
        ;

        
    
    
            you_map.bindTooltip(
                `<div>
                You're here <?php echo $this->session->userdata('firstname') ?>
                 </div>`,
                {"sticky": true}
            );


        
</script>
  </body> 
</html>