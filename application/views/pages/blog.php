<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Blog</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
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
          	<p class="breadcrumbs"><span class="mr-2"><a href="index.html">Home</a></span> <span>Blog</span></p>
            <h1 class="mb-0 bread">Blog</h1>
          </div>
        </div>
      </div>
    </div>

    <section class="ftco-section ftco-degree-bg">
      <div class="container">
        <div class="row">
          <div class="col-lg-8 ftco-animate">
						<div class="row">
							<div class="col-md-12 d-flex ftco-animate">
		            <div class="blog-entry align-self-stretch d-md-flex">
		              <a href="blog-single.html" class="block-20" style="background-image: url('<?php echo base_url('assets/vegefoods/images/image_1.jpg'); ?>');">
		              </a>
		              <div class="text d-block pl-md-4">
		              	<div class="meta mb-3">
		                  <div><a href="javascript:void(0);">July 20, 2019</a></div>
		                  <div><a href="javascript:void(0);">Admin</a></div>
		                  <div><a href="javascript:void(0);" class="meta-chat"><span class="icon-chat"></span> 3</a></div>
		                </div>
		                <h3 class="heading"><a href="javascript:void(0);">Even the all-powerful Pointing has no control about the blind texts</a></h3>
		                <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
		                <p><a href="blog-single.html" class="btn btn-primary py-2 px-3">Read more</a></p>
		              </div>
		            </div>
		          </div>
						</div>
          </div> <!-- .col-md-8 -->
          <div class="col-lg-4 sidebar ftco-animate">
            <div class="sidebar-box">
              <form action="javascript:void(0);" class="search-form">
                <div class="form-group">
                  <span class="icon ion-ios-search"></span>
                  <input type="text" class="form-control" placeholder="Search...">
                </div>
              </form>
            </div>
            <div class="sidebar-box ftco-animate">
            	<h3 class="heading">Categories</h3>
              <ul class="categories">
                <li><a href="javascript:void(0);">Vegetables <span>(12)</span></a></li>
                <li><a href="javascript:void(0);">Fruits <span>(22)</span></a></li>
                <li><a href="javascript:void(0);">Juice <span>(37)</span></a></li>
                <li><a href="javascript:void(0);">Dries <span>(42)</span></a></li>
              </ul>
            </div>

            <div class="sidebar-box ftco-animate">
              <h3 class="heading">Recent Blog</h3>
              <div class="block-21 mb-4 d-flex">
                <a class="blog-img mr-4" style="background-image: url('<?php echo base_url('assets/vegefoods/images/image_1.jpg'); ?>');">
                <div class="text">
                  <h3 class="heading-1"><a href="javascript:void(0);">Even the all-powerful Pointing has no control about the blind texts</a></h3>
                  <div class="meta">
                    <div><a href="javascript:void(0);"><span class="icon-calendar"></span> April 09, 2019</a></div>
                    <div><a href="javascript:void(0);"><span class="icon-person"></span> Admin</a></div>
                    <div><a href="javascript:void(0);"><span class="icon-chat"></span> 19</a></div>
                  </div>
                </div>
              </div>
              <div class="block-21 mb-4 d-flex">
                <a class="blog-img mr-4" style="background-image:url('<?php echo base_url('assets/vegefoods/images/image_2.jpg'); ?>');">
                <div class="text">
                  <h3 class="heading-1"><a href="javascript:void(0);">Even the all-powerful Pointing has no control about the blind texts</a></h3>
                  <div class="meta">
                    <div><a href="javascript:void(0);"><span class="icon-calendar"></span> April 09, 2019</a></div>
                    <div><a href="javascript:void(0);"><span class="icon-person"></span> Admin</a></div>
                    <div><a href="javascript:void(0);"><span class="icon-chat"></span> 19</a></div>
                  </div>
                </div>
              </div>
              <div class="block-21 mb-4 d-flex">
                <a class="blog-img mr-4" style="background-image: url('<?php echo base_url('assets/vegefoods/images/image_3.jpg'); ?>');">
                <div class="text">
                  <h3 class="heading-1"><a href="javascript:void(0);">Even the all-powerful Pointing has no control about the blind texts</a></h3>
                  <div class="meta">
                    <div><a href="javascript:void(0);"><span class="icon-calendar"></span> April 09, 2019</a></div>
                    <div><a href="javascript:void(0);"><span class="icon-person"></span> Admin</a></div>
                    <div><a href="javascript:void(0);"><span class="icon-chat"></span> 19</a></div>
                  </div>
                </div>
              </div>
            </div>

            <div class="sidebar-box ftco-animate">
              <h3 class="heading">Tag Cloud</h3>
              <div class="tagcloud">
                <a href="javascript:void(0);" class="tag-cloud-link">fruits</a>
                <a href="javascript:void(0);" class="tag-cloud-link">tomatoe</a>
                <a href="javascript:void(0);" class="tag-cloud-link">mango</a>
                <a href="javascript:void(0);" class="tag-cloud-link">apple</a>
                <a href="javascript:void(0);" class="tag-cloud-link">carrots</a>
                <a href="javascript:void(0);" class="tag-cloud-link">orange</a>
                <a href="javascript:void(0);" class="tag-cloud-link">pepper</a>
                <a href="javascript:void(0);" class="tag-cloud-link">eggplant</a>
              </div>
            </div>

            <div class="sidebar-box ftco-animate">
              <h3 class="heading">Paragraph</h3>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ducimus itaque, autem necessitatibus voluptate quod mollitia delectus aut, sunt placeat nam vero culpa sapiente consectetur similique, inventore eos fugit cupiditate numquam!</p>
            </div>
          </div>

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
 <script src=<?php echo base_url('assets/vegefoods/https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false'); ?> ></script>
 <script src=<?php echo base_url('assets/vegefoods/js/google-map.js'); ?> ></script>
 <script src=<?php echo base_url('assets/vegefoods/js/main.js'); ?> ></script>
    
  </body>
</html>