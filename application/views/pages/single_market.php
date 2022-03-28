<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Market</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <link rel="stylesheet" href=<?php echo base_url('assets/vegefoods/css/open-iconic-bootstrap.min.css'); ?> >
	<link rel="stylesheet" href=<?php echo base_url('assets/vegefoods/css/animate.css'); ?> >
    
	<link rel="stylesheet" href=<?php echo base_url('assets/vegefoods/css/owl.carousel.min.css'); ?> >
	<link rel="stylesheet" href=<?php echo base_url('assets/vegefoods/css/owl.theme.default.min.css'); ?> >
	<link rel="stylesheet" href=<?php echo base_url('assets/vegefoods/css/magnific-popup.css'); ?> >

    <link rel="stylesheet" href=<?php echo base_url('assets/vegefoods/css/aos.css'); ?> >

    <link rel="stylesheet" href=<?php echo base_url('assets/vegefoods/css/ionicons.min.css'); ?> >

    <link rel="stylesheet" href=<?php echo base_url('assets/vegefoods/css/bootstrap-datepicker.css'); ?> >
    <link rel="stylesheet" href=<?php echo base_url('assets/vegefoods/css/jquery.timepicker.css'); ?> >

    <link rel="stylesheet" href=<?php echo base_url('assets/admin/plugins/fontawesome-free/css/all.min.css'); ?> > 		

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
		    			<div class="col-md pr-4 d-flex topper align-items-center">
					    	<div class="icon mr-2 d-flex justify-content-center align-items-center"><span class="icon-phone2"></span></div>
						    <span class="text">09066165843</span>
					    </div>
					    <div class="col-md pr-4 d-flex topper align-items-center">
					    	<div class="icon mr-2 d-flex justify-content-center align-items-center"><span class="icon-paper-plane"></span></div>
						    <span class="text">peddle@email.com</span>
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
	      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
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
            <h1 class="mb-0 bread">Hot Markets</h1>
          </div>
        </div>
      </div>
    </div>

    <?php foreach($single_market as $row) {?>
      <section class="ftco-section">
    	<div class="container">
    		<div class="row">
    			<div class="col-lg-6 mb-5 ftco-animate">
    				<a href="images/product-1.jpg" class="image-popup"><img src="<?php echo base_url()?>assets/vegefoods/images/<?php echo $row->market_img;?>" class="img-fluid" alt="Colorlib Template"></a>
    			</div>
    			<div class="col-lg-6 product-details pl-md-5 ftco-animate">
    				<h3><?php echo $row->market_name?></h3>
    				<div class="rating d-flex">
							<p class="text-left mr-4">
              <?php								
              echo round($time = ($distance/15)*60,2) . ' mins away from you';
              ?>
							</p>
							<p class="text-left mr-4">
              <a type="button" href="<?php echo site_url('Market_con/rating') ?>/<?php echo $row->rating?>/<?php echo $row->market_id?>/<?php echo $row->market_name?>" class="btn btn-success "> <?php echo $row->rating;?> Likes <i class="fas fa-thumbs-up"></i> </a>
							</p>
	
						</div>
    				<p><h5><?php echo $row->description?></h5></p>
						<div class="row mt-4">
							<div class="col-md-6">
								
							</div>							
          	</div>
    			</div>
          <div class="col-lg-6 mb-5 ftco-animate">
            <div class="card border ">
              <div class="card-header shadow-lg">
                  <div class="card-body">
                    <div class="shadow-lg border-4 " id="map1"  style="height: 400px;"></div>
                  </div>
                </div>
              </div>
            </div>
    			</div>
    		</div>
    	</div>
    </section>

  
    <?php }?>


    <section class="ftco-section">
    	<div class="container">
				<div class="row justify-content-center mb-3 pb-3">
          <div class="col-md-12 heading-section text-center ftco-animate">
          	<span class="subheading">Products</span>
            <h2 class="mb-4">Related Products</h2>
            <p>These Products are found on these market only</p>
          </div>
        </div>   		
    	</div>
    	<div class="container">
        <div class="row">
			<?php foreach($category_data as $row) {?>
    			<div class="col-md-6 col-lg-3 ftco-animate">
				<div class="product">
    					<a href=<?php echo site_url('Market_con/Market_Products') ?>\<?php echo $row->product_type;?>\<?php echo $row->market_name;?> class="img-prod"><img class="img-fluid" src="<?php echo base_url()?>assets/vegefoods/images/<?php echo $row->product_img;?>" alt="Colorlib Template">
    						<span class="status">	</span>
    						<div class="overlay"></div>
    					</a>
    					<div class="text py-3 pb-4 px-3 text-center">
							<h3><a href="#"><?php echo $row->product_type;?> </a></h3>
							<p><a class="price-sale"><?php echo $row->market_name;?></span></p></a>

    						<div class="d-flex">
    							<div class="pricing">
		    					</div>
	    					</div>
	    					<div class="bottom-area d-flex px-4">
	    						<div class="m-auto d-flex">
	    							
								
    							</div>
									<div class="col-md-5">
		                  </div>
    						</div>
    					</div>
    				</div>
    			</div>
				<?php }?>
    		<div class="row mt-5">
          <div class="col text-center">
            <div class="block-27">
              
            </div>
          </div>
        </div>
    	</div>
    </section>

		<section class="ftco-section ftco-no-pt ftco-no-pb py-5 bg-light">
      <div class="container py-4">
        <div class="row d-flex justify-content-center py-5">
          <div class="col-md-6">
          	<h2 style="font-size: 22px;" class="mb-0">Subcribe to our Newsletter</h2>
          	<span>Get e-mail updates about our latest shops and special offers</span>
          </div>
          <div class="col-md-6 d-flex align-items-center">
            <form action="#" class="subscribe-form">
              <div class="form-group d-flex">
                <input type="text" class="form-control" placeholder="Enter email address">
                <input type="submit" value="Subscribe" class="submit px-3">
              </div>
            </form>
          </div>
        </div>
      </div>
    </section>
    <footer class="ftco-footer ftco-section">
      <div class="container">
      	<div class="row">
      		<div class="mouse">
						<a href="#" class="mouse-icon">
							<div class="mouse-wheel"><span class="ion-ios-arrow-up"></span></div>
						</a>
					</div>
      	</div>
        <div class="row mb-5">
          <div class="col-md">
            <div class="ftco-footer-widget mb-4">
              <h2 class="ftco-heading-2">Vegefoods</h2>
              <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia.</p>
              <ul class="ftco-footer-social list-unstyled float-md-left float-lft mt-5">
                <li class="ftco-animate"><a href="#"><span class="icon-twitter"></span></a></li>
                <li class="ftco-animate"><a href="#"><span class="icon-facebook"></span></a></li>
                <li class="ftco-animate"><a href="#"><span class="icon-instagram"></span></a></li>
              </ul>
            </div>
          </div>
          <div class="col-md">
            <div class="ftco-footer-widget mb-4 ml-md-5">
              <h2 class="ftco-heading-2">Menu</h2>
              <ul class="list-unstyled">
                <li><a href="#" class="py-2 d-block">Shop</a></li>
                <li><a href="#" class="py-2 d-block">About</a></li>
                <li><a href="#" class="py-2 d-block">Journal</a></li>
                <li><a href="#" class="py-2 d-block">Contact Us</a></li>
              </ul>
            </div>
          </div>
          <div class="col-md-4">
             <div class="ftco-footer-widget mb-4">
              <h2 class="ftco-heading-2">Help</h2>
              <div class="d-flex">
	              <ul class="list-unstyled mr-l-5 pr-l-3 mr-4">
	                <li><a href="#" class="py-2 d-block">Shipping Information</a></li>
	                <li><a href="#" class="py-2 d-block">Returns &amp; Exchange</a></li>
	                <li><a href="#" class="py-2 d-block">Terms &amp; Conditions</a></li>
	                <li><a href="#" class="py-2 d-block">Privacy Policy</a></li>
	              </ul>
	              <ul class="list-unstyled">
	                <li><a href="#" class="py-2 d-block">FAQs</a></li>
	                <li><a href="#" class="py-2 d-block">Contact</a></li>
	              </ul>
	            </div>
            </div>
          </div>
          <div class="col-md">
            <div class="ftco-footer-widget mb-4">
            	<h2 class="ftco-heading-2">Have a Questions?</h2>
            	<div class="block-23 mb-3">
	              <ul>
	                <li><span class="icon icon-map-marker"></span><span class="text">203 Fake St. Mountain View, San Francisco, California, USA</span></li>
	                <li><a href="#"><span class="icon icon-phone"></span><span class="text">+2 392 3929 210</span></a></li>
	                <li><a href="#"><span class="icon icon-envelope"></span><span class="text">info@yourdomain.com</span></a></li>
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
  <div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00"/></svg></div>


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
 <script src=<?php echo base_url('https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false'); ?> ></script>
 <script src=<?php echo base_url('assets/vegefoods/js/google-map.js'); ?> ></script>
 <script src=<?php echo base_url('assets/vegefoods/js/main.js'); ?> ></script>
 <script type="text/javascript" src="<?php echo base_url().'assets/js/jquery-3.2.1.js'?>"></script>
<script type="text/javascript" src="<?php echo base_url().'assets/js/bootstrap.js'?>"></script>
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
<script type="text/javascript">

    $(document).ready(function(){
        $('.add_cart').click(function(){
            var product_id    = $(this).data("productid");
            var product_name  = $(this).data("productname");
            var product_price = $(this).data("productprice");
            var quantity      = $('#' + product_id).val();
            $.ajax({
                url : "<?php echo site_url('Shopping_cart/add_to_cart');?>",
                method : "POST",
                data : {product_id: product_id, product_name: product_name, product_price: product_price, quantity: quantity},
                success: function(data){
                    $('#detail_cart').html(data);
                }
            });
        });
 
         
        $('#detail_cart').load("<?php echo site_url('Shopping_cart/load_cart');?>");
 
         
        $(document).on('click','.romove_cart',function(){
            var row_id=$(this).attr("id"); 
            $.ajax({
                url : "<?php echo site_url('Shopping_cart/delete_cart');?>",
                method : "POST",
                data : {row_id : row_id},
                success :function(data){
                    $('#detail_cart').html(data);
                }
            });
        });
        $('.toastsDefaultMaroon').click(function() {
      $(document).Toasts('create', {
        class: 'bg-maroon', 
        title: 'Toast Title',
        subtitle: 'Subtitle',
        body: 'Lorem ipsum dolor sit amet, consetetur sadipscing elitr.',
        autohide: true,
        progressBar: true,
        newestOnTop: true,
        delay: 1000,
        showMethod: "fadeIn",
        hideMethod: "fadeOut",

      })
    }); 
    });

	

	
</script>

  <script>
		$(document).ready(function(){

		var quantitiy=0;
		   $('.quantity-right-plus').click(function(e){
		        
		        // Stop acting like a button
		        e.preventDefault();
		        // Get the field name
		        var quantity = parseInt($('#quantity').val());
		        
		        // If is not undefined
		            
		            $('#quantity').val(quantity + 1);

		          
		            // Increment
		        
		    });

		     $('.quantity-left-minus').click(function(e){
		        // Stop acting like a button
		        e.preventDefault();
		        // Get the field name
		        var quantity = parseInt($('#quantity').val());
		        
		        // If is not undefined
		      
		            // Increment
		            if(quantity>0){
		            $('#quantity').val(quantity - 1);
		            }
		    });
		    
		});
	</script>
<script>    
    var lat = <?php echo json_encode($single_market[0]->lat) ?>; // 7
    var longg = <?php echo json_encode($single_market[0]->longg) ?>; // 7
    var name = <?php echo json_encode($single_market[0]->market_name) ?>; // 7
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


    var html_b78e085cda3a4ce2956de0c77f64d383 = $(`<a><img src="<?php echo base_url()?>assets/vegefoods/images/<?php echo $single_market[0]->market_img;?>" height="500" width- class="img-fluid" alt="Colorlib Template"><?php echo $single_market[0]->market_name ?></a>`)[0];
    popup_3d3d30a2ceed4e319bf2f71c9123d0f1.setContent(html_b78e085cda3a4ce2956de0c77f64d383);


market_map.bindPopup(popup_3d3d30a2ceed4e319bf2f71c9123d0f1)
;




    market_map.bindTooltip(
        `<div>
        <?php echo $single_market[0]->market_name ?> Market
         </div>`,
        {"sticky": true}
    );

/////////////////////////////////////////////////////////////////////////////////
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