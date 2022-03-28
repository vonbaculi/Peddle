<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Checkout</title>
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
  <link rel="stylesheet" href=<?php echo base_url('assets/admin/dist/css/adminlte.css'); ?> >
  <!-- Google Font: Source Sans Pro -->
	<link rel="stylesheet" href=<?php echo base_url('assets/vegefoods/css/open-iconic-bootstrap.min.css'); ?> >
	<link rel="stylesheet" href=<?php echo base_url('assets/vegefoods/css/animate.css'); ?> >



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
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/3.2.1/css/font-awesome.min.css" rel="stylesheet" />
  <?php
    $this->load->view('alert');
    ?>
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
                if($this->session->userdata('role')=='admin'||'rider'||'partner'){
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

 

    <section class="ftco-section">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-xl-7 ftco-animate">
				<form id='myform' method='POST' name="Form"  action="<?php echo site_url('Shopping_cart/billing') ?>" class=" billing-form">
					<h3 class="mb-4 billing-heading">Billing Details</h3>
	          	<div class="row align-items-end">
              <div class="form-group">
                  <input type="hidden" class="form-control" name ="status"value = "Pending">
              </div>
              <div class="form-group">
                  <input type="hidden" class="form-control" name ="message"value = "New Order">
              </div>
              <div class="form-group">
                  <input type="hidden" class="form-control" name ="status_var"value = "Waiting">
              </div>
	          		<div class="col-md-6">
	                <div class="form-group">
	                	<label for="firstname">First Name</label>
	                  <input type="text" class="form-control" name ="firstname"  name ="password" placeholder="" required>
	                </div>
	              </div>
	              <div class="col-md-6">
	                <div class="form-group">
	                	<label for="lastname">Last Name</label>
	                  <input type="text" class="form-control" name ="lastname" placeholder="" required>
	                </div>
                </div>
                <div class="w-100"></div>
		            <div class="w-100"></div>
		            <div class="col-md-6">
		            	<div class="form-group">
	                	<label for="streetaddress">Street Address</label>
	                  <input type="text" class="form-control" name ="street_address" placeholder="House number and street name" required>
	                </div>
		            </div>
		            <div class="col-md-6">
		            	<div class="form-group">
	                  <input type="text" class="form-control" name ="apartment" placeholder="Apartment, suite, unit etc: (optional)" required>
	                </div>	
		            </div>
		            <div class="w-100"></div>
		            <div class="col-md-6">
		            	<div class="form-group">
	                	<label for="towncity">Town / City</label>
	                  <input type="text" class="form-control" name ="city" placeholder="" required>
	                </div>
		            </div>
		            <div class="col-md-6">
		            	<div class="form-group">
		            		<label for="postcodezip">Postcode / ZIP *</label>
	                  <input type="text" class="form-control" name ="zip" placeholder="" required>
	                </div>
		            </div>
		            <div class="w-100"></div>
		            <div class="col-md-6">
	                <div class="form-group">
	                	<label for="phone">Phone</label>
	                  <input type="tel" pattern="^(09|\+639)\d{9}$" class="form-control" name ="phone" placeholder="" required>
	                </div>
	              </div>
	              <div class="col-md-6">
	                <div class="form-group">
	                	<label for="emailaddress">Email Address</label>
	                  <input type="email" class="form-control"  name ="email" placeholder="" required>
	                </div>
                </div>
                <div class="w-100"></div>
                <div class="col-md-12">
                	<div class="form-group mt-4">
				
				</div>
                </div>
	            </div>
				<div class="col-md-12">
	          		<div class="cart-detail p-3 p-md-4">
	          			<h3 class="billing-heading mb-4">Payment Method</h3>
						<div class="form-group">
							<div class="col-md-12">
								
							</div>
						</div>
						<div class="form-group">
							<div class="col-md-12">
								<div class="radio">
									<label><input type="radio" value="COD" name="payment_method" class="mr-2">COD</label>
								</div>
							</div>
						</div>
						<div class="form-group">
						<div class="col-md-12">
							<div class="checkbox">
								<label><input type="checkbox"  id="terms" value="terms" name="terms" class=" checkbox mr-2" required> I have read and accept the <a href="terms">terms and conditions</a>.</label>
							</div>
						</div>
					</div> 
<?php 
$total_q = 0;
foreach($this->cart->contents() as $items) {
    if ('kg'==  $items['per']){
        $new_item[] = $items; 
    foreach ($new_item as $items) {
      $total_q += $items['quantity'];
      }  
    }

}
if($this->cart->total_items()==0){
    echo '<input type="button" value="Submit" class="empty_cart btn btn-primary py-3 px-4"Place an order>';
}
else{
    if ($total_q > 10) {
        echo '<input type="button" value="Submit"  data-toggle="modal" data-target="#overweight" class=" btn btn-primary py-3 px-4"Place an order>';
    }
    elseif ($total_q == 0 or $total_q == NULL) {
      if($this->session->userdata('username')) {
        echo  '<input type="submit" value="Submit" id="signup"  class=" checkout btn btn-primary py-3 px-4"Place an order>';
      }
      else{
          $here = '<input type="button" value="Submit" data-toggle="modal" data-target="#LoginFirst" class=" btn btn-primary py-3 px-4"Place an order>';
          echo $here; 
      }
    }
    else{
      if($this->session->userdata('username')) {
        echo  '<input type="submit" value="Submit" id="signup"  class=" checkout btn btn-primary py-3 px-4"Place an order>';
      }
      else{
          $here = '<input type="button" value="Submit" data-toggle="modal" data-target="#LoginFirst" class=" btn btn-primary py-3 px-4"Place an order>';
          echo $here; 
      }
    }
}
   
    

    ;?>
    </div>
    </div>
    </form><!-- END -->
    </div>
    <div class="col-xl-5">
    <div class="row mt-5 pt-3">
    <div class="col-md-12 d-flex mb-5">
    <div class="cart-detail cart-total p-3 p-md-4">
    <h3 class="billing-heading mb-4">Cart Total</h3>
    <p class="d-flex">
    <span>Subtotal</span>
    <span>
    <?php if($this->cart->total()<0){
    echo '₱0.00';
    }
    else{
    echo	$this->cart->total() ;
}
;?>
							</span>
						</p>
						<p class="d-flex">
							<span>Delivery</span>
							<span>₱10.00</span>
						</p>
						<p class="d-flex">
							<span>Discount</span>
							<span>₱0.00</span>
						</p>
						<hr>
						<p class="d-flex total-price">
							<span>Total</span>
							<span>₱ <?php echo $total =  $this->cart->total()  + 10   ;?></span>
              
						</p>
            <?php if($this->session->userdata('username')){?>
           
           <a href=<?php echo site_url('shopping_cart/invoice') ?> class="btn btn-primary py-3 px-4" Place an order> Check Order Status</a>
           <?php }?>
            
           
            
						</div>
	          	</div>

	          </div>
          </div> <!-- .col-md-8 -->
        </div>
      </div>
    </section> <!-- .section -->

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
                <input type="submit"value="Subscribe" class="submit px-3">
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
    
	<div class="modal fade" id="modal-warning">
        <div class="modal-dialog">
          <div class="modal-content bg-success">
            <div class="modal-header">
              <h4 class="modal-title">Read First</h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span></button>
            </div>
            <div class="modal-body">
              <p>Terms and Conditions&hellip;</p>
            </div>
            <div class="modal-footer justify-content-between">
              <button type="button" class="btn btn-outline-dark" data-dismiss="modal">Close</button>
              <button type="button" class="btn btn-outline-dark">Save changes</button>
            </div>
          </div>
          <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
      </div>
      <div class="modal fade" id="overweight">
        <div class="modal-dialog">
        <div class="modal-content " style="background-color:#28a745">
            <div class="modal-header">
              <h4 class="modal-title" style="color:white">Too much products  &#9785; </h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span></button>
            </div>
            <div class="modal-body">
              <p style="color:white">Rider can only carry 10kg of products.</p>
            </div>
            <div class="modal-footer justify-content-between">
              <button type="button" class="btn btn-outline-light" data-dismiss="modal">Close</button>
              <button type="button" class="btn btn-outline-light">Save changes</button>
            </div>
          </div>
          <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
      </div>
	<div class="modal fade" id="LoginFirst">
        <div class="modal-dialog">
          <div class="modal-content " style="background-color:#28a745">
            <div class="modal-header">
              <h4 class="modal-title" style="color:white">Error</h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
              <p style="color:white">Log In First&hellip;</p>
            </div>
            <div class="modal-footer justify-content-between">
              <button type="button" class="btn btn-outline-light" data-dismiss="modal">Close</button>
              <a type="button" href="<?php echo site_url('Login') ?>" class="btn btn-outline-light">Ok</a>
            </div>
          <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
      </div>
	  
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
        $('.checkout').click(function(){
            var product_id    = $(this).data("productid");
            var product_name  = $(this).data("productname");
            var product_price = $(this).data("productprice");
            var quantity      = $('#' + product_id).val();
            $.ajax({
                url : "<?php echo site_url('Shopping_cart/checkout_cart');?>",
                method : "POST",
                data : {product_id: product_id, product_name: product_name, product_price: product_price, quantity: quantity},
                success: function(data){
                    $('#detail_cart').html(data);
                }
            });
        }); 

  }
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
        body: 'Lorem ipsum dolor sit amet, consetetur sadipscing elitr.'
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
        delay: 3000,
        showMethod: "fadeIn",
        hideMethod: "fadeOut",
        body: 'Lorem ipsum dolor sit amet, consetetur sadipscing elitr.'
      })
    });
    $('.empty_cart').click(function() {
      $(document).Toasts('create', {
        class: 'bg-orange', 
        title: 'Toast Title',
        subtitle: '',
        autohide: true,
        progressBar: true,
        newestOnTop: true,
        delay: 3000,
        showMethod: "fadeIn",
        hideMethod: "fadeOut",
        body: 'Your cart is empty, Please go to shop.'
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
        delay: 3000,
        showMethod: "fadeIn",
        hideMethod: "fadeOut",
        body: 'Lorem ipsum dolor sit amet, consetetur sadipscing elitr.'
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
        delay: 3000,
        showMethod: "fadeIn",
        hideMethod: "fadeOut",
        body: 'Lorem ipsum dolor sit amet, consetetur sadipscing elitr.'
      })
    });
  });
		});
	</script>
   
  </body>
</html>