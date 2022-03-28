<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Products</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <link href="https://fonts.googleapis.com/css?family=Poppins:200,300,400,500,600,700,800&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Lora:400,400i,700,700i&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Amatic+SC:400,700&display=swap" rel="stylesheet">
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
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/3.2.1/css/font-awesome.min.css" rel="stylesheet" />
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
              <a class="nav-link dropdown-toggle" id="dropdown04" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Shop</a>
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
              <a class="nav-link dropdown-toggle1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Apply Now</a>
              <div class="dropdown-menu" aria-labelledby="dropdown04">
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
          	<p class="breadcrumbs"><span class="mr-2"><a href="index.html"></a></span> <span></span></p>
            <h1 class="mb-0 bread">Our Products</h1>
          </div>
        </div>
      </div>
    </div>
    <?php
    $this->load->view('alert');
    ?>
    <section class="ftco-section-1 ftco-degree-bg">
      <div class="container">
        <div class="row">
        <div class="col-lg-4 sidebar ftco-animate">
            <div class="sidebar-box1">
              <form  method='POST' action="<?php echo site_url('Product_con/search')?>" class="search-form">
                <div class="form-group">
                  <span class="icon ion-ios-search"></span>
                  <input type="text" class="form-control" name="search" placeholder="Search...">
                </div>
              </form>
            </div>
            <div class="sidebar-box ftco-animate">
            	<h3 class="heading">Categories</h3>
              <ul class="categories">
              <li><a href="<?php echo site_url('Product_con/shop') ?>">All</a></li>
              <?php foreach($cat_data as $row) {?>
                <li><a href="<?php echo site_url('Product_con/Shop_filter') ?>/<?php echo $row->product_type?>"><?php echo $row->product_type;?><span>(<?php echo $this->db->where('product_type', $row->product_type)->count_all_results('product_tb'); ?>)</span></a></li>
                <?php }?>
              </ul>
            </div>
          </div>
          <div class="col-lg-8 ftco-animate">
						<div class="row">
              <?php foreach($product_data as $row) {?>
              <div class="col-md-6 col-lg-3 ftco-animate">
                <div class="product">
                  <a href="javascript:void(0);" class="img-prod"><img class="img-fluid" src="<?php echo base_url()?>assets/vegefoods/images/<?php echo $row->product_img;?>" alt="Colorlib Template">
                    <span class="status"><?php echo $row->product_status;?></span>
                    <div class="overlay"></div>
                  </a>
                  <div class="text py-3 pb-4 px-3 text-center">
                   <p class="mt-0 mb-0 pb-0"><?php echo $row->market_name;?></a></p>
                   <?php echo $row->product_name;?>
                  
                    <div class="d-flex">
                      <div class="pricing">
                        <a class="price"><span class="price-sale"><?php echo $row->product_price;?> / <?php echo $row->per;?></span></a>
                      </div>
                    </div>
                    <div class="bottom-area d-flex px-3">
                      <div class="m-auto d-flex">
                        <?php if($row->product_status != 'Available') {?>
                        <a href="javascript:void(0);" class="buy-now d-flex justify-content-center align-items-center px-3">
                        <button  style="border: none; background-color: transparent;" class=" btn btn-success toastsDefaultWarning" 
                        data-productid="<?php echo $row->product_id;?>" data-productname="<?php echo $row->product_name;?>" data-productprice="<?php echo $row->product_price;?>" data-marketname="<?php echo $row->market_name;?>"><span><i class="ion-ios-cart"></i></span></button>
                        <?php }?>
                        <?php if($row->product_status == 'Available') {?>
                        <a href="javascript:void(0);" class="buy-now d-flex justify-content-center align-items-center px-3 ">
                        <button  style="border: none; background-color: transparent;" class="add_cart btn btn-success ion-ios-cart add_cart_toast" 
                        data-productid="<?php echo $row->product_id;?>" data-productname="<?php echo $row->product_name;?>" data-productprice="<?php echo $row->product_price;?>" data-marketname="<?php echo $row->market_name;?>" data-per="<?php echo $row->per;?>"></button>
                        <?php }?>
                        </a>
                        <a href="javascript:void(0);" class="buy-now d-flex justify-content-center align-items-center px-3 ">
                        <button  style="border: none; background-color: transparent;" class="likes ion-ios-heart btn btn-success liked" 
                        data-productid="<?php echo $row->product_id;?>" data-productname="<?php echo $row->product_name;?>" data-productprice="<?php echo $row->product_price;?>" data-likes="<?php echo $row->likes;?>" data-per="<?php echo $row->per;?>"></button>
                        </a>
                        
                        <input type="number"  name="quantity" id="<?php echo $row->product_id;?>" value="1" min="1" max="100" class="quantity quantity d-flex justify-content-center align-items-center px-1">

                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <?php }?>
						</div>
          </div> <!-- .col-md-8 -->


        </div>
      </div>
    </section> <!-- .section -->

    <footer class="ftco-footer ftco-section bg-light">
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
        $(document.body).on("click", ".add_cart", function($e) {
        
            var product_id    = $(this).data("productid");
            var product_name  = $(this).data("productname");
            var product_price = $(this).data("productprice");
            var market_name = $(this).data("marketname");
            var per = $(this).data("per");
            var quantity      = $('#' + product_id).val();
            $.ajax({
                url : "<?php echo site_url('Shopping_cart/add_to_cart');?>",
                method : "POST",
                data : {product_id: product_id, product_name: product_name, product_price: product_price, quantity: quantity, market_name: market_name, per:per,},
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
        $(document.body).on("click", ".liked", function($e) {
          $(this).removeClass('liked');
    
          var product_id    = $(this).data("productid");
            var likes  = $(this).data("likes");
            $.ajax({
                method : "POST",
                data : {product_id : product_id,likes:likes},
                success :function(data){
                    $('#detail_cart').html(data);
                    $(this).removeClass("liked");
               
                }
            });
        });


        $(document.body).on("click", ".likes", function($e) {
          $(this).removeClass('likes');

          var product_id    = $(this).data("productid");
            var likes  = $(this).data("likes");
            $.ajax({
                url : "<?php echo site_url('Shopping_cart/likes');?>",
                method : "POST",
                data : {product_id : product_id,likes:likes},
                success :function(data){
                    $('#detail_cart').html(data);
                    $(this).removeClass("likes");
                }
            });
        });
      
    });
</script>

<!-- ALERTS -->

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
    $('.add_cart_toast').click(function() {
      $(document).Toasts('create', {
        class: 'bg-blue', 
        title: 'Add to cart',
        subtitle: 'Added',
        autohide: true,
        progressBar: true,
        newestOnTop: true,
        delay: 3000,
        showMethod: "fadeIn",
        hideMethod: "fadeOut",
        body: 'This item is added to your cart'
            })
    });
     $(document.body).on("click", ".likes", function($e) {
      $(document).Toasts('create', {
        class: 'bg-purple', 
        title: 'LIKED',
        subtitle: '',
        autohide: true,
        progressBar: true,
        newestOnTop: true,
        delay: 3000,
        showMethod: "fadeIn",
        hideMethod: "fadeOut",
        body: 'Thanks for liking this product'
      })
    });
    $('.toastsDefaultWarning').click(function() {
      $(document).Toasts('create', {
        class: 'bg-warning', 
        title: 'Out of Stock',
        subtitle: 'sorry',
        autohide: true,
        progressBar: true,
        newestOnTop: true,
        delay: 1000,
        showMethod: "fadeIn",
        hideMethod: "fadeOut",
        body: 'This Product is currently out of stock'
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
        delay: 5000,
        showMethod: "fadeIn",
        hideMethod: "fadeOut",
        body: 'Lorem ipsum dolor sit amet, consetetur sadipscing elitr.'
      })
    });
  });

</script>
<script>


     

  $(document).ready(function() {

      setInterval(function () {
        $(document).Toasts('create', {
          position	: 'bottomLeft',
          class: 'bg-wbite', 
          title: '<a href="Product_con/recipe"> Feeling Productive?</a>',
          autohide: true,
          image: 'https://www.boholonlinestore.com/wp-content/uploads/2019/06/MAGGI-MAGIC-SARAP-SEASONING-MIX-8G-X12.png',
          progressBar: true,
          url: 'asd',
          newestOnTop: true,
          delay: 5000,
          showMethod: "fadeIn",
          hideMethod: "fadeOut",
          body: ' <a href="Product_con/recipe">   <img src="https://www.palengkeboy.com/public/img/products/207/207-1-500x500.jpg" width="250" height="230"> </a>            '
        });
      }, 30000);
  });


</script>
  </body>
</html>