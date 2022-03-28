<!DOCTYPE html>
<html lang="en">
  <head>
    <title>About</title>
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
						    <span class="text">youremail@email.com</span>
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
          	<p class="breadcrumbs"><span class="mr-2"><a href="index.html">Home</a></span> <span>About us</span></p>
            <h1 class="mb-0 bread">About us</h1>
          </div>
        </div>
      </div>
    </div>

    <section class="ftco-section ftco-no-pb ftco-no-pt bg-light">
			<div class="container">
				<div class="row bg-white">
			
					<div class="col-md-15 py-5 wrap-about pb-md-5 ftco-animate">
	          <div class="heading-section-bold mb-4 mt-md-5">
	          	<div class="ml-md-0">
		            <h2 class="mb-4">Terms and Conditions </h2>
	            </div>
	          </div>
	          <div class="pb-md-5">
	          	<p>
<ol>
<li>What we do ?</li>

1.1 What we do ?
<ul>
<li>	Through our platform Peddle  links your home to your nearest wet market to you.When you place an order for Goods from our vendor , peddle acts an agent for the vendor to deliver your order to you.</li>
  </ul>
1.2 How to contact us  ?
<ul> <li>For our customer support you may reach us via email.(projectpeddle@gmail.com) </li></ul>
<li>Use of the platform and Peddle account.</li>
<ol>
2.1 You will need to register for a peddle  account for you to use the Platform. When you register for a peddle account we will ask you to provide your personal information including a valid email address, a mobile phone number and a unique password. To purchase an Order, depending on which payment method you option for. Your unique password should not be shared with anyone and you agree to keep it secret at all times. You are solely responsible for keeping your password safe. Save for cases of fraud or abuse which are not your fault, you accept that all Orders placed under your Peddle account are your sole responsibility. <br>
2.2 Peddle shall not be liable for Orders that encounter delivery issues due to incomplete, incorrect or missing information provided by you. You are obliged to provide information that is complete, accurate and truthful for the proper processing of the Order, including your delivery address and contact information. <br>
2.3 If you wish to delete your peddle account, please send us an email requesting the same. We may restrict, suspend or terminate your peddle account and/or use of the Platforms, if we reasonably believe that: 
  <ol>
2.3.1 someone other than you is using your foodpanda account; or <br>
2.3.2 where you are suspected or discovered to have been involved in any activity or conduct that is in breach of these Terms, our policies and guidelines, or involved in activity or conduct which we deem in our sole discretion to be an abuse of the Platforms.
</ol>
</ol>
<li>Restriction </li>
<ol>
3.1 Activities Prohibited on the Platforms
<ol>
The following is a non-exhaustive list of the types of conduct that are illegal or prohibited on the Platforms. peddle reserves the right to investigate and take appropriate legal action against anyone who, in peddle sole discretion, engages in any of the prohibited activities. Prohibited activities include, but are not limited to the following:<br>
3.1.1 using the Platforms for any purpose in violation of local, state, or federal laws or regulations;<br>
3.1.2 posting content that is unlawful, obscene, defamatory, threatening, harassing, abusive, slanderous, hateful, or embarrassing to any other person or entity as determined by Peddle in its sole discretion or pursuant to local community standards;<br>
3.1.3 posting content that constitutes cyber-bullying, as determined by Peddle in its sole discretion;<br>
3.1.4 posting telephone numbers, street addresses, or last names of any person;<br>
3.1.5 impersonating another person when posting content;<br>
3.1.6 harvesting or otherwise collecting information about others, including e-mail addresses, without their consent;<br>
3.1.7 allowing any other person or entity to use your identification for posting or viewing comments;<br>
3.1.8 harassing, threatening, stalking, or abusing any person on the Platforms;<br>
3.1.9 engaging in any other conduct that restricts or inhibits any other person from using or enjoying the Websites, or which, in the sole discretion of Peddle, exposes Peddle or any of its customers, suppliers, or any other parties to any liability or detriment of any type; or<br>
3.1.10 encouraging other people to engage in any prohibited activities as described herein. <br>
</ol>
3.2 Peddle reserves the right but is not obligated to do any or all of the following:
<ol>
3.2.1 investigate an allegation that any content posted on the Platforms does not conform to these 3.2.2 Terms and determine in its sole discretion to remove or request the removal of the content;remove content which is abusive, illegal, or disruptive, or that otherwise fails to conform with these Terms;<br>
3.2.2 suspend or terminate a user’s access to the Platforms or their Peddle Account upon any breach of these Terms;<br>
3.2.3 monitor, edit, or disclose any content on the Platforms; and<br>
3.2.4 edit or delete any content posted on the Platforms, regardless of whether such content violates these standards.<br>
</ol>
</ol>
<li>.Orders</li>
<ol>
4.1 When you place an Order with Peddle, Peddle will confirm your order by sending you a confirmation email containing the Order receipt. Where applicable, Orders will include delivery fees and any applicable tax (e.g. goods and services tax, value-added tax, etc.). <br>
4.2 Minimum Order Value - Some of our Vendors require a minimum order value (“MOV”) before an Order can be placed and delivered to you. Where an applicable Order fails to meet the MOV, you will have the option of paying the difference to meet the MOV or to add more Goods to your Order.<br>
4.3 Prior to placing the Order
<ol>
4.3.1 You are required to provide the delivery address in order for the Platform to display the Vendors available in your delivery area.<br>

4.3.2 Once you select a Vendor, you will be taken to that Vendor’s menu page for you to select and add your Goods to the cart. 
</ol>
4.4 Placing the Order
<ol>
4.4.1 To complete an Order, please follow the onscreen instructions after clicking ‘Checkout’. You may be required to provide additional details for us to complete your Order. You are required to review and confirm that all the information you provide, including the amounts, delivery details, personal details, payment information, and voucher codes (if applicable) is true, accurate and complete before you click “PLACE ORDER”. An Order is successfully placed when you receive an email confirmation containing your Order receipt from us.
</ol>
4.5 Cancelling an Order 
<ol>
4.5.1 Please contact us immediately via our in-app customer support chat feature if you wish to cancel your Order after it has been placed. You have the right to cancel your Order provided a Vendor has not yet accepted your Order. 
</ol>
</ol>
<li> Prices and Payments</li>

5.1 Prices quoted on the Platform shall be displayed in the E-Presyo of DTI (Department of trade and industries). <br>

5.2 Prices may vary :
<ol>
5.2.1 include GST, VAT or such other equivalent tax; or<br>
5.2.2 exclude GST, VAT or such other equivalent tax. <br>
5.2.3 when we have an high demand of the product <br>
5.2.4 It is seasonal here in the Philippines<br>
5.2.5 We have an disaster or storm 
</ol>
5.3 A breakdown of the prices and additional charges are displayed before Checkout. When you place an Order, you agree to all amounts, additional charges and the final ‘Total’ amount which is displayed to you.<br> 
<ol>
5.3.1 Delivery fees are chargeable on every Order unless:  <br>
5.3.2 you have a valid promotional or discount voucher and apply it at Checkout; or unless stated otherwise.
</ol>
5.4 Prices indicated on the Platforms are as at the time of each Order and may be subject to change.  <br>
5.5 You can choose to pay for an Order using any of the different payment methods offered on the Platforms including: 
<ol>
7.5.1 Our payment partners:GCash and Paymaya  <br>
7.5.2 Cash-on-Delivery; or  <br>
7.5.3 Such other payment method we offer from time to time. 
</ol>
5.6 If you have existing credit in your Peddle account or valid promotional or discount vouchers, you can use this pay for part or all of your Order as the case may be. . <br>
5.7 Payment Methods Peddle reserves the right to offer additional payment methods and/or remove existing payment methods at anytime in its sole discretion. If you choose to pay using an online payment method, the payment shall be processed by our third party payment service provider(s). With your consent <br>
5.8 You must ensure that you have sufficient funds on your GCash or Paymaya to fulfil payment of an Order. Insofar as required, Peddle takes responsibility for payments made on our Platforms, chargebacks, cancellations and dispute resolution, provided if reasonable and justifiable and in accordance with these Terms. <br>

<li>Delivery</li>
6.1 Delivery Areas You understand that our Vendors offer their Goods in specific delivery areas and our Vendors vary from delivery area to delivery area. By entering your delivery address on the Platforms, you will see the Vendors that we make available to you at that time. Delivery areas may expand, shrink or change depending on weather and traffic conditions and situations of force majeure.  <br>
6.2 Delivery Time
<ol>
6.2.1 Peddle shall deliver your Order to the delivery address provided by You. You may choose for your Order to be delivered “ASAP” or scheduled for a specific time. An estimated delivery time will be provided to you in your email confirmation but delivery times shall vary depending on factors that are not controlled by us (e.g. order quantity, distance, time of day (peak periods), weather conditions, traffic conditions, etc.). You can view the remaining delivery time of an Order when you click on ‘My orders’ on the Platforms. You acknowledge that the delivery time we provide is only an estimate and Orders may arrive earlier or later. To ensure that you do not miss a delivery of an Order, you should ensure that either you or someone is at the delivery location to receive the Order once an Order is placed. If your Order contains Alcohol or Tobacco (if applicable) and you or the recipient is or appears to be below the legal age, or fails to provide a valid proof of ID, Peddle reserves the right not to deliver your Order to you.<br>
</ol>
6.3 Unsuccessful or Failed Deliveries 
<ol>
6.3.1 In cases where we attempt to deliver an Order but we are unable to do so due to the reasons caused by you, including but not limited to:
  <ol>
(i) no one was present or available to receive the Order; or <br>
(ii) customer was uncontactable despite attempts to reach the customer via the phone number provided; or<br>
(iii) lack of appropriate or sufficient access to deliver the Order successfully; <br>
(iv) lack of a suitable or secure location to leave the Order; or<br>
(v) in the case of Restricted Goods, customer did not meet the statutory age requirements or delivery did not deem it safe or appropriate for the customer to receive the Restricted Goods.
</ol>
6.3.2 No-show Cancellations 
</ol>
<ol>
If you remain uncontactable or fail to receive the Order within ten (10) minutes from the time the Order arrives at your delivery address, Peddle  reserves the right to cancel the Order without refund or remedy to you. 
</ol>

6.4 Wrong Order, Missing Items, Defective Goods 
<ol>
Upon receipt of your Order, if you discover that there are issues with your Order (e.g. wrong order, defective order, or missing items) please contact customer support via one of the methods indicated in Clause 1.3 above immediately. In some cases, peddle may request for photographic proof and/or additional information to properly investigate the issue with your Order. If we determine that the Order and/or Goods you received are not of satisfactory condition or quality, we will compensate you for your Order or parts of your Order.
</ol>
<li>Personal Data (Personal Information) Protection </li>
<ol>
You agree and consent to Peddle and any of its affiliate companies collecting, using, processing and disclosing your Personal Data in accordance with these Terms and as further described in our Privacy Policy. Our Privacy Policy is available via the links on our Platforms, and shall form a part of these Terms.<br>
7.1 Personal information collected or otherwise processed by Peddle<br>
<ol>
Peddle collects and processes personal data from or pertaining to the User and/or Participating Driver when the User and/or Participating Driver registers on the Website, is accredited as a Participating Driver by Peddle or avails of Peddle services whether through the Website in order to avail of Private Carrier Services from Participating Drivers or provide Private Carrier Services to Users.<br>


Such personal data from or pertaining to the User are as follows:<br>

Name;<br>
Mobile or landline number;<br>
Residential/office/billing address or location;<br>
E-mail address;<br>


Such personal data from or pertaining to the Participating Driver are as follows:<br>

Name;<br>
Mobile or landline number;<br>
Residential/office/billing address or location of the Participating Driver through the tracking of the booked vehicle(s);<br>
Driver’s License details;<br>
Other relevant government-issued ID details including but not limited to NBI or Police Clearance<br>
E-mail address;<br>
Average Monthly Income<br>
Date of birth<br>

Users and Participating Drivers accept that Peddle or its authorized service providers, third party vendors, contractors, subcontractors, agents and corporate partners (“Third Parties”), as well as said Third Parties’ member companies, affiliates and/or service providers, may use cookies to store information on the Users and Participating Drivers in order to provide Users and Participating Drivers with a customized and more efficient experience in accessing or using the Website and/or the Peddle App.<br>


If a User and/or Participating Driver provides the personal data of a third party to peddle , the User or Participating Driver warrants that the required consent from the third party concerned was secured by the User and/or Participating Driver prior to providing the personal data pertaining to said third party to Peddle.<br>
</ol>

7.2  Purpose of collection and other processing of personal information by Peddle<br>
Peddle collects and otherwise processes the above personal data for the following purposes:<br>
To publish a User’s proposal to engage the services of a Participating Driver, which include Private Carrier Services of the User’s package/s, parcel/s, delivery item/s or part thereof (“Shipment”) for compensation to be determined in accordance with the prevailing rates on the Website
<ol>

1.)To monitor Users’ and Participating Drivers’ use of the Website App;<br>

2.)To comply with the orders or regulations of enforcement agencies, judicial and quasi-judicial bodies, or other competent government authority;<br>

3.)To fulfill the legitimate objectives of Peddle as a duly registered corporation, including any and all contractual obligations that Lalamove may have entered into that are necessary or directly related to the services provided, the performance of which being at all times consistent with the DPA and the DPA IRR, issuances of the NPC and other applicable laws and regulations on data privacy;<br>

4.)To protect Users and Participating Drivers;<br>
5.)To establish, exercise or defend legal claims in favor of or against Peddle;<br>
6.)To prevent fraud and illegal activities;<br>
7.)To provide information on promos or discounts;<br>
8.)To market Peddle’s services;<br>
9.)To fulfill any purpose directly related to the above purpose<br>


D. Sharing of Participating Drivers’ personal information by Peddle<br>

Peddle may share Users’ and Participating Drivers’ personal data to third parties for the fulfillment of any of the purposes enumerated above or, in extraordinary circumstances, when Peddle believes that the sharing of such personal data is necessary to prevent a threat to the life or health of another. Such third parties include but are not limited to the following:<br>


Users and Participating Drivers;<br>

Subsidiaries, parent company or other related companies;<br>

Service providers who provide technical, operational and/or logistical support for all functions necessary, desirable to or in any manner related to the business of Peddle;<br>

Courts, quasi-judicial agencies and tribunals, as a response to an order, subpoena or other legal processes;<br>

Law enforcement personnel, government agencies and other state entities in the exercise of their investigative or regulatory powers;<br>

Entities engaged by Peddle to assist in establishing, exercising or defending legal claims or protecting Peddle rights and assets;<br>

Corporate and institutional partners;<br>


In all instances where the sharing of personal data is for commercial purposes, Peddle shall ensure that the same is covered by a data sharing agreement which shall establish, <br>or oblige the Personal Information Controller (“PIC”) or Personal Information Processor (“PIP”) to whom the User’s and Participating Driver’s personal data will be shared to establish, organizational, physical and technical safeguards for data privacy and security no less than those provided in this Privacy Policy (For Users and Participating Drivers), which in all instances shall comply with the DPA, the DPA IRR, issuances of the NPC and other applicable laws and regulations on data privacy. <br>

Before a User’s and Participating Driver’s personal data is shared, Peddle shall obtain the User’s and Participating Driver’s consent and provide the Participating Driver with the following information:<br>


Identity of the PIC or PIP to whom the User’s and Participating Driver’s personal information will be shared;<br>

Purpose of the data sharing;

Categories of personal data to be shared;

Intended recipients or categories of recipients of the personal data;

Existence of the User’s and Participating Driver’s rights as a data subject under the DPA, the DPA IRR, issuances of the NPC, other applicable laws and regulations on data privacy and the data sharing agreement between Peddle and the PIC or PIP to whom the Participating Driver’s personal data will be shared; and<br>

Other information that would sufficiently notify the User and Participating Driver of the nature and extent of the data sharing involved and the manner of the processing of his/her personal data.<br>

E. Outsourcing by Peddle of the processing of Users’ and Participating Drivers’ personal information
Peddle may engage a third party to process Participating Drivers’ personal data. Such engagement will be covered by an outsourcing agreement mandating said third party to put in place the organizational, physical and technical measures no less than those provided in this Privacy Policy (For Users and Participating Drivers), which in all instances shall comply with the DPA, the DPA IRR, issuances of the NPC and other applicable laws and regulations on data privacy. <br>


Peddle guarantees that it will not sell Users’ and Participating Drivers’ personal data.<br>



F. Peddle storage and retention of Users’ and Participating Drivers’ personal data<br>


Users’ and Participating Drivers’ personal data collected or otherwise processed by Peddle shall be stored in secure online storage platforms, protected cloud infrastructure and on-site drives of Peddle. Users’ and Participating Drivers’ personal data collected or otherwise processed by Peddle shall be stored in secure online storage platforms, protected cloud infrastructure and on-site drives of Peddle which are only accessible to Peddle employees. Peddle uses industry-standard encryption to provide protection for the information and requires users and drivers to verify their identity through their log-in username and password before they can amend information on their accounts. Physical copies of said personal data, if any, shall be stored in Peddle offices in secure and monitored rooms accessible only to duly authorized personnel.<br>



Peddle will retain Users’ and Participating Drivers’ personal data for as long as the purposes for which they are being processed are not accomplished.<br>


References.<br>
<a href="https://www.grab.com/id/en/merchant/food/merchant-terms/">https://www.grab.com/id/en/merchant/food/merchant-terms/</a><br>
foodpanda.sg/contents/terms-and-conditions.htm

</ol>  

</ol>




</p>
							<p><a href="<?php echo site_url('Product_con/Shop') ?>" class="btn btn-primary">Shop now</a></p>
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
            <form action="javascript:void(0);" class="subscribe-form">
              <div class="form-group d-flex">
                <input type="text" class="form-control" placeholder="Enter email address">
                <input type="submit" value="Subscribe" class="submit px-3">
              </div>
            </form>
          </div>
        </div>
      </div>
    </section>
		<section class="ftco-section ftco-counter img" id="section-counter" style="background-image: url('<?php echo base_url('assets/vegefoods/images/bg_3.jpg'); ?>s');">
    	<div class="container">
    		<div class="row justify-content-center py-5">
    			<div class="col-md-10">
		    		<div class="row">
		          <div class="col-md-3 d-flex justify-content-center counter-wrap ftco-animate">
		            <div class="block-18 text-center">
		              <div class="text">
		                <strong class="number" data-number="10000">0</strong>
		                <span>Happy Customers</span>
		              </div>
		            </div>
		          </div>
		          <div class="col-md-3 d-flex justify-content-center counter-wrap ftco-animate">
		            <div class="block-18 text-center">
		              <div class="text">
		                <strong class="number" data-number="100">0</strong>
		                <span>Branches</span>
		              </div>
		            </div>
		          </div>
		          <div class="col-md-3 d-flex justify-content-center counter-wrap ftco-animate">
		            <div class="block-18 text-center">
		              <div class="text">
		                <strong class="number" data-number="1000">0</strong>
		                <span>Partner</span>
		              </div>
		            </div>
		          </div>
		          <div class="col-md-3 d-flex justify-content-center counter-wrap ftco-animate">
		            <div class="block-18 text-center">
		              <div class="text">
		                <strong class="number" data-number="100">0</strong>
		                <span>Awards</span>
		              </div>
		            </div>
		          </div>
		        </div>
	        </div>
        </div>
    	</div>
    </section>
		
      <div class="container">
        <div class="row justify-content-center mb-5 pb-3">
          <div class="col-md-7 heading-section ftco-animate text-center">
          	<span class="subheading">Team Peddle</span>
            <h2 class="mb-4">The Creators of Peddle</h2>
            <p></p>
          </div>
        </div>
        <div class="row ftco-animate">
          <div class="col-md-12">
            <div class="carousel-testimony owl-carousel">
              <div class="item">
                <div class="testimony-wrap p-4 pb-5">
                  <div class="user-img mb-5" style="background-image: url('<?php echo base_url('assets/vegefoods/images/vonbaculi.jpg'); ?>');">
                    <span class="quote d-flex align-items-center justify-content-center">
                      <i class="icon-quote-left"></i>
                    </span>
                  </div>
                  <div class="text text-center">
                    <p class="mb-5 pl-4 line">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                    <p class="name">Von Baculi</p>
                    <span class="position">Web Developer</span>
                  </div>
                </div>
              </div>
              <div class="item">
                <div class="testimony-wrap p-4 pb-5">
                  <div class="user-img mb-5" style="background-image: url('<?php echo base_url('assets/vegefoods/images/marco.jpg'); ?>');">
                    <span class="quote d-flex align-items-center justify-content-center">
                      <i class="icon-quote-left"></i>
                    </span>
                  </div>
                  <div class="text text-center">
                    <p class="mb-5 pl-4 line">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                    <p class="name">Marco Galias</p>
                    <span class="position">Interface Designer</span>
                  </div>
                </div>
              </div>
              <div class="item">
                <div class="testimony-wrap p-4 pb-5">
                  <div class="user-img mb-5" style="background-image: url('<?php echo base_url('assets/vegefoods/images/bert.jpg'); ?>');">
                    <span class="quote d-flex align-items-center justify-content-center">
                      <i class="icon-quote-left"></i>
                    </span>
                  </div>		

                  <div class="text text-center">
                    <p class="mb-5 pl-4 line">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                    <p class="name">Robert Develles</p>
                    <span class="position">UI Designer</span>
                  </div>
                </div>
              </div>
              <div class="item">
                <div class="testimony-wrap p-4 pb-5">
                  <div class="user-img mb-5" style="background-image: url('<?php echo base_url('assets/vegefoods/images/gantong.jpg'); ?>');">
                    <span class="quote d-flex align-items-center justify-content-center">
                      <i class="icon-quote-left"></i>
                    </span>
                  </div>
                  <div class="text text-center">
                    <p class="mb-5 pl-4 line">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                    <p class="name">Ludwick Gantong</p>
                    <span class="position">Marketing Manager</span>
                  </div>
                </div>
              </div>
              <div class="item">
                <div class="testimony-wrap p-4 pb-5">
                  <div class="user-img mb-5" style="background-image: url('<?php echo base_url('assets/vegefoods/images/eze.jpg'); ?>');">
                    <span class="quote d-flex align-items-center justify-content-center">
                      <i class="icon-quote-left"></i>
                    </span>
                  </div>
                  <div class="text text-center">
                    <p class="mb-5 pl-4 line">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                    <p class="name">Ezekiel Del Rosario</p>
                    <span class="position">System Analyst</span>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section class="ftco-section bg-light">
			<div class="container">
				<div class="row no-gutters ftco-services">
          <div class="col-lg-3 text-center d-flex align-self-stretch ftco-animate">
            <div class="media block-6 services mb-md-0 mb-4">
              <div class="icon bg-color-1 active d-flex justify-content-center align-items-center mb-2">
            		<span class="flaticon-shipped"></span>
              </div>
              <div class="media-body">
                <h3 class="heading">Free Shipping</h3>
                <span>On order over $100</span>
              </div>
            </div>      
          </div>
          <div class="col-lg-3 text-center d-flex align-self-stretch ftco-animate">
            <div class="media block-6 services mb-md-0 mb-4">
              <div class="icon bg-color-2 d-flex justify-content-center align-items-center mb-2">
            		<span class="flaticon-diet"></span>
              </div>
              <div class="media-body">
                <h3 class="heading">Always Fresh</h3>
                <span>Product well package</span>
              </div>
            </div>    
          </div>
          <div class="col-lg-3 text-center d-flex align-self-stretch ftco-animate">
            <div class="media block-6 services mb-md-0 mb-4">
              <div class="icon bg-color-3 d-flex justify-content-center align-items-center mb-2">
            		<span class="flaticon-award"></span>
              </div>
              <div class="media-body">
                <h3 class="heading">Superior Quality</h3>
                <span>Quality Products</span>
              </div>
            </div>      
          </div>
          <div class="col-lg-3 text-center d-flex align-self-stretch ftco-animate">
            <div class="media block-6 services mb-md-0 mb-4">
              <div class="icon bg-color-4 d-flex justify-content-center align-items-center mb-2">
            		<span class="flaticon-customer-service"></span>
              </div>
              <div class="media-body">
                <h3 class="heading">Support</h3>
                <span>24/7 Support</span>
              </div>
            </div>      
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
	                <li><a href="javascript:void(0);"><span class="icon icon-envelope"></span><span class="text">peddle@yourdomain.com</span></a></li>
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