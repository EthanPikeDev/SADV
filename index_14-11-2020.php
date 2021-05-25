<?php
require_once('nusoap/lib/nusoap.php');
$Server_Path='https://crm1.sadv.co.za/sadvcrm';
$client = new soapclient2($Server_Path."/vtigerservice.php?service=customerportal3", false, $proxy_host, $proxy_port, $proxy_username, $proxy_password);
$wbsrcs = $client->call('get_wbsrc_status', Array(Array()), $Server_Path, $Server_Path);
$wbstatus=array();
foreach ($wbsrcs as $key => $wbsrc)
{
	$title=trim($wbsrc["title"]);
	$status=trim($wbsrc["status"]);
	$status_str=$title.'@'.$status;
	array_push($wbstatus,$status_str);
}
$wbstatus_str=implode("##",$wbstatus);







?>



<!doctype html>
<!--<html lang="zxx">-->
    <html>
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <!-- Bootstrap Min CSS -->
        <link rel="stylesheet" href="assets/css/bootstrap.min.css">
        <!-- Animate Min CSS -->
        <link rel="stylesheet" href="assets/css/animate.min.css">
        <!-- FontAwesome Min CSS -->
        <link rel="stylesheet" href="assets/css/fontawesome.min.css">
        <!-- Magnific Popup Min CSS -->
        <link rel="stylesheet" href="assets/css/magnific-popup.min.css">
        <!-- Flaticon CSS -->
        <link rel="stylesheet" href="assets/css/flaticon.css">
        <!-- Nice Select Min CSS -->
        <link rel="stylesheet" href="assets/css/nice-select.min.css">
        <!-- MeanMenu CSS -->
        <link rel="stylesheet" href="assets/css/meanmenu.css">
        <!-- Owl Carousel Min CSS -->
        <link rel="stylesheet" href="assets/css/owl.carousel.min.css">
        <!-- Style CSS -->
        <link rel="stylesheet" href="assets/css/style.css">
        <!-- Responsive CSS -->
        <link rel="stylesheet" href="assets/css/responsive.css">


        <title>SADV</title>

        <link rel="icon" type="image/png" href="assets/img/favicon.png">
		
		
		    <!-- esri -->
			<!--
	<link rel="stylesheet" href="https://js.arcgis.com/4.4/esri/css/main.css">
	<script src="js/vk_esri.js"></script>  -->
    <!-- esri end -->
	<!--
    <link href="bootstrap_modal/css/bootstrap.css" rel="stylesheet" type="text/css" />
	<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
	<script type="text/javascript" language="javascript" src="bootstrap_modal/js/bootstrap.js"></script> -->
	<!--<script src="https://cdnjs.cloudflare.com/ajax/libs/1000hz-bootstrap-validator/0.11.5/validator.min.js"></script> -->  
		<!-- esri end -->
		
		
    </head>

    <body>

        <!-- Start Preloader Area -->
        <div class="preloader">
            <div class="spinner"></div>
        </div>
        <!-- End Preloader Area -->

        <!-- Start Header Area -->
        <header class="header-area">
            <div class="top-header">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-lg-5 col-md-5">
                            <div class="top-header-left">
                                <p><span>Customer Support:</span> <a href="tel:+27861104000">086 110 4000</a></p>
                            </div>
                        </div>

                        <div class="col-lg-7 col-md-7">
                            <div class="top-header-right">
                                <!-- <div class="login-signup-btn">
                                    <p><a href="#">Login</a> <span>or</span> <a href="#">Register</a></p>
                                </div> -->

                                <ul class="social">
                                    <li><a href="https://www.facebook.com/sadvfibre" target="_blank"><i class="fab fa-facebook-f"></i></a></li>
                                    <li><a href="https://www.twitter.com/sadvfibre" target="_blank"><i class="fab fa-twitter"></i></a></li>
                                    <!-- <li><a href="#" target="_blank"><i class="fab fa-linkedin-in"></i></a></li>
                                    <li><a href="#" target="_blank"><i class="fab fa-instagram"></i></a></li> -->
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

         
        </header>
        <!-- End Header Area -->

        <!-- Start Page Title Area -->
        <div class="page-title-area1" style="width:100% !important; max-width:100% !important">
        <img src="assets/img/page-title-bg.png" width="100%"/>
        <!--
            <div class="container" style="height: 70px; width:100% !important">
                <div class="page-title-content" style="width:100% !important">
                <img src="assets/img/page-title-bg.png"/>
                </div>
            </div>-->
        </div>
        <!-- End Page Title Area -->

        <!-- Start Wifi Benefits Box Area -->
        <section class="contact-info-box-area ptb-100 pb-0">
            <div class="container">
            	<div class="section-title">
                    <h2>The choice is yours!</h2>
                    <p>Choose between a lower monthly subscription or no upfront fees!
					Our Vumatel packages give you more choices.</p>
                </div>
                <div class="row">
                    <div class="col-lg-4 col-md-6 col-sm-6">
                        <div class="single-contact-info">
                            <div class="icon">
                                <i class="flaticon-router"></i>
                            </div>
                            <h3>Free Router</h3>
                            <p>Free to use router with your order when you signup to any of our packages.</p>

                            <div class="image-box">
                                <img src="assets/img/shape-image/1.png" alt="image">
                                <img src="assets/img/shape-image/1.png" alt="image">
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 col-sm-6">
                        <div class="single-contact-info">
                            <div class="icon">
                                <i class="flaticon-signal"></i>
                            </div>
                            <h3>Unlimited Data</h3>
                            <p>They call it uncapped, we say unlimited. Use all the data you want.</p>
                           

                            <div class="image-box">
                                <img src="assets/img/shape-image/1.png" alt="image">
                                <img src="assets/img/shape-image/1.png" alt="image">
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 col-sm-6 offset-lg-0 offset-md-3 offset-sm-3">
                        <div class="single-contact-info">
                            <div class="icon">
                                <i class="flaticon-pdf"></i>
                            </div>
                            <h3>No long term contracts</h3>
                            <p>Say bye to long term contracts.</p>
                            <br>

                            <div class="image-box">
                                <img src="assets/img/shape-image/1.png" alt="image">
                                <img src="assets/img/shape-image/1.png" alt="image">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Start Step 1 Area -->
		<!--
        <section class="pricing-area ptb-100">
            <div class="container">
            	<div class="section-title">
            		<span>Step 1 of 3</span>
            		<h2>Check availabilty in your area</h2>
                    <p>Click the button below to check availability</p>
                    <br>
                    <a href="#map" class="btn btn-primary">Check Availability</a>
            	</div>
            </div>
        </section> -->
        <!-- End Step 1 Area -->
		
		
		
		<!-- Start Step 1 Area -->
        <section class="pricing-area ptb-100">
            <div class="container">
            	<div class="section-title">
            		<span>Step 1 of 3</span>
            		<h2>Check availabilty in your area</h2>
                    <p>Click the button below to check availability</p>
                    <br>
                    <a href="#map1" class="btn btn-primary">Check Availability</a>
            	</div>
            </div>
        </section>
        <!-- End Step 1 Area -->
		
		

        <!-- Start Map Area -->
        <!--<div id="map"></div>-->
        <!-- End Map Area -->
		
		
		
        <!-- Start Map Area -->
        <div id="map1">
		
			<iframe src="https://signup.sadv.co.za/map.php" title="Coverage Map" width="100%" height="500" scrolling="no" seamless="seamless"></iframe>
		
		
		</div>
        <!-- End Map Area -->		
		

        <!-- Start Vuma Area -->
        <section>
            <div class="container">
            	<div>
            		<img src="assets/img/vuma-logo-bg.png" style="width: 200px;height: 90px" class="center">
            		<h4 style="text-align: center;">Get fast fibre for your home today!
					See all your available packages below.</h4>    
            	</div>
            </div>
        </section>
        <!-- End Vuma Area -->

        <!-- Start Pricing Area -->
        <section class="pricing-area ptb-100">
            <div class="container">
                <div class="section-title">
                	<span>Step 2 of 3</span>
                    <h2>View speed and plans</h2>
                </div>

                <!-- <div class="row"> -->
                	<div class="owl-carousel owl-theme">
                		<div class="item">
		                        <div class="single-pricing-table">
		                            <div class="pricing-header">
		                                <div class="icon">
		                                    <i class="flaticon-wifi"></i>
		                                </div>
		                                <span>Option 1</span>
		                                <h3>10Mbps/2Mbps</h3>
		                            </div>

		                            <div class="single-pricing-table-s">
		                           		<div class="pricing-header">

		                           			<span>No upfront fee package</span>
		                           			<br>
				                            <ul class="pricing-features-list">
				                               
				                                <li><i class="flaticon-check-mark"></i> Month-to-Month</li>
				                                
				                            </ul>

				                            <div class="price">
				                                <span>Fee</span>

				                                R695.00/pm
				                                
				                            </div>
				                        </div>
				                    </div>

				                    <div class="single-pricing-table-sg">
		                           		<div class="pricing-header">
		       
		                           			<span>Lower Subscription Packages</span>
		                           			<br>
				                            <ul class="pricing-features-list">
				                                <li><i class="flaticon-check-mark"></i> R1875.00 Connection Fee</li>
				                                <li><i class="flaticon-check-mark"></i> Month-to-Month</li>
				                            </ul>

				                            <div class="price">
				                                <span>Fee</span>
				                                
				                                R625.00/pm
				                                
				                            </div>
				                        </div>
				                    </div>

		                            <button class="view-plans-btn">View Plans</button>

		                            <div class="image-box">
		                                <img src="assets/img/shape-image/2.png" alt="image">
		                                <img src="assets/img/shape-image/2.png" alt="image">
		                            </div>
		                        </div>
		                    <!-- </div> -->
		                </div>

		                <div class="item"> 
		                    
		                        <div class="single-pricing-table">
		                            <div class="pricing-header">
		                                <div class="icon">
		                                    <i class="flaticon-wifi"></i>
		                                </div>

		                                <span>Option 2</span>
		                                <h3>10Mbps/10Mbps</h3>
		                            </div>

		                            <div class="single-pricing-table-s">
		                           		<div class="pricing-header">

		                           			<span>No upfront fee package</span>
		                           			<br>
				                            <ul class="pricing-features-list">
				                               
				                                <li><i class="flaticon-check-mark"></i> Month-to-Month</li>
				                                
				                            </ul>

				                            <div class="price">
				                                <span>Fee</span>
				                               
				                                R755.00/pm
				                               
				                            </div>
				                        </div>
				                    </div>

				                    <div class="single-pricing-table-sg">
		                           		<div class="pricing-header">
		       
		                           			<span>Lower Subscription Packages</span>
		                           			<br>
				                            <ul class="pricing-features-list">
				                                <li><i class="flaticon-check-mark"></i> R1390.00 Connection Fee</li>
				                                <li><i class="flaticon-check-mark"></i> Month-to-Month</li>
				                            </ul>

				                            <div class="price">
				                                <span>Fee</span>
				                             
				                                R695.00/pm
				                               
				                            </div>
				                        </div>
				                    </div>

		                            <button class="view-plans-btn">View Plans</button>

		                            <div class="image-box">
		                                <img src="assets/img/shape-image/2.png" alt="image">
		                                <img src="assets/img/shape-image/2.png" alt="image">
		                            </div>
		                        </div>
		                    <!-- </div> -->
		                </div>

		                <div class="item"> 
		                   
		                        <div class="single-pricing-table">
		                            <div class="pricing-header">
		                                <div class="icon">
		                                    <i class="flaticon-wifi"></i>
		                                </div>

		                                <span>Option 3</span>
		                                <h3>20Mbps/2Mbps</h3>
		                            </div>

		                            <div class="single-pricing-table-s">
		                           		<div class="pricing-header">

		                           			<span>No upfront fee package</span>
		                           			<br>
				                            <ul class="pricing-features-list">
				                               
				                                <li><i class="flaticon-check-mark"></i> Month-to-Month</li>
				                                
				                            </ul>

				                            <div class="price">
				                                <span>Fee</span>
				                                <!-- <span>R</span> -->
				                                R845.00/pm
				                                <!-- <span>/pm</span> -->
				                            </div>
				                        </div>
				                    </div>

				                    <div class="single-pricing-table-sg">
		                           		<div class="pricing-header">
		       
		                           			<span>Lower Subscription Packages</span>
		                           			<br>
				                            <ul class="pricing-features-list">
				                                <li><i class="flaticon-check-mark"></i> R1590.00 Connection Fee</li>
				                                <li><i class="flaticon-check-mark"></i> Month-to-Month</li>
				                            </ul>

				                            <div class="price">
				                                <span>Fee</span>
				                                <!-- <span>R</span> -->
				                                R795.00/pm
				                                <!-- <span>/pm</span> -->
				                            </div>
				                        </div>
				                    </div>

		                            <button class="view-plans-btn">View Plans</button>

		                            <div class="image-box">
		                                <img src="assets/img/shape-image/2.png" alt="image">
		                                <img src="assets/img/shape-image/2.png" alt="image">
		                            </div>
		                        </div>
		                    <!-- </div> -->
		                </div>

		                <div class="item"> 
		                    <!-- <div class="col-lg-4 col-md-6 col-sm-6"> -->
		                        <div class="single-pricing-table">
		                            <div class="pricing-header">
		                                <div class="icon">
		                                    <i class="flaticon-wifi"></i>
		                                </div>

		                                <span>Option 4</span>
		                                <h3>20Mbps/20Mbps</h3>
		                            </div>

		                            <div class="single-pricing-table-s">
		                           		<div class="pricing-header">

		                           			<span>No upfront fee package</span>
		                           			<br>
				                            <ul class="pricing-features-list">
				                               
				                                <li><i class="flaticon-check-mark"></i> Month-to-Month</li>
				                                
				                            </ul>

				                            <div class="price">
				                                <span>Fee</span>
				                                <!-- <span>R</span> -->
				                                R915.00/pm
				                                <!-- <span>/pm</span> -->
				                            </div>
				                        </div>
				                    </div>

				                    <div class="single-pricing-table-sg">
		                           		<div class="pricing-header">
		       
		                           			<span>Lower Subscription Packages</span>
		                           			<br>
				                            <ul class="pricing-features-list">
				                                <li><i class="flaticon-check-mark"></i> R1690.00 Connection Fee</li>
				                                <li><i class="flaticon-check-mark"></i> Month-to-Month</li>
				                            </ul>

				                            <div class="price">
				                                <span>Fee</span>
				                                <!-- <span>R</span> -->
				                                R845.00/pm
				                                <!-- <span>/pm</span> -->
				                            </div>
				                        </div>
				                    </div>

		                            <button class="view-plans-btn">View Plans</button>

		                            <div class="image-box">
		                                <img src="assets/img/shape-image/2.png" alt="image">
		                                <img src="assets/img/shape-image/2.png" alt="image">
		                            </div>
		                        </div>
		                    <!-- </div> -->
		                </div>
		                <div class="item"> 
		                    <!-- <div class="col-lg-4 col-md-6 col-sm-6"> -->
		                        <div class="single-pricing-table">
		                            <div class="pricing-header">
		                                <div class="icon">
		                                    <i class="flaticon-wifi"></i>
		                                </div>

		                                <span>Option 5</span>
		                                <h3>50Mbps/5Mbps</h3>
		                            </div>

		                            <div class="single-pricing-table-s">
		                           		<div class="pricing-header">

		                           			<span>No upfront fee package</span>
		                           			<br>
				                            <ul class="pricing-features-list">
				                               
				                                <li><i class="flaticon-check-mark"></i> Month-to-Month</li>
				                                
				                            </ul>

				                            <div class="price">
				                                <span>Fee</span>
				                                <!-- <span>R</span> -->
				                                R995.00/pm
				                                <!-- <span>/pm</span> -->
				                            </div>
				                        </div>
				                    </div>

				                    <div class="single-pricing-table-sg">
		                           		<div class="pricing-header">
		       
		                           			<span>Lower Subscription Packages</span>
		                           			<br>
				                            <ul class="pricing-features-list">
				                                <li><i class="flaticon-check-mark"></i> R1870.00 Connection Fee</li>
				                                <li><i class="flaticon-check-mark"></i> Month-to-Month</li>
				                            </ul>

				                            <div class="price">
				                                <span>Fee</span>
				                                <!-- <span>R</span> -->
				                                R935.00/pm
				                                <!-- <span>/pm</span> -->
				                            </div>
				                        </div>
				                    </div>

		                            <button class="view-plans-btn">View Plans</button>

		                            <div class="image-box">
		                                <img src="assets/img/shape-image/2.png" alt="image">
		                                <img src="assets/img/shape-image/2.png" alt="image">
		                            </div>
		                        </div>
		                    <!-- </div> -->
		                </div>
		                <div class="item"> 
		                    <!-- <div class="col-lg-4 col-md-6 col-sm-6"> -->
		                        <div class="single-pricing-table">
		                            <div class="pricing-header">
		                                <div class="icon">
		                                    <i class="flaticon-wifi"></i>
		                                </div>

		                                <span>Option 6</span>
		                                <h3>50Mbps/50Mbps</h3>
		                            </div>

		                            <div class="single-pricing-table-s">
		                           		<div class="pricing-header">

		                           			<span>No upfront fee package</span>
		                           			<br>
				                            <ul class="pricing-features-list">
				                               
				                                <li><i class="flaticon-check-mark"></i> Month-to-Month</li>
				                                
				                            </ul>

				                            <div class="price">
				                                <span>Fee</span>
				                                <!-- <span>R</span> -->
				                                R1055.00/pm
				                                <!-- <span>/pm</span> -->
				                            </div>
				                        </div>
				                    </div>

				                    <div class="single-pricing-table-sg">
		                           		<div class="pricing-header">
		       
		                           			<span>Lower Subscription Packages</span>
		                           			<br>
				                            <ul class="pricing-features-list">
				                                <li><i class="flaticon-check-mark"></i> R1970.00 Connection Fee</li>
				                                <li><i class="flaticon-check-mark"></i> Month-to-Month</li>
				                            </ul>

				                            <div class="price">
				                                <span>Fee</span>
				                                <!-- <span>R</span> -->
				                                R985.00/pm
				                                <!-- <span>/pm</span> -->
				                            </div>
				                        </div>
				                    </div>

		                            <button class="view-plans-btn">View Plans</button>

		                            <div class="image-box">
		                                <img src="assets/img/shape-image/2.png" alt="image">
		                                <img src="assets/img/shape-image/2.png" alt="image">
		                            </div>
		                        </div>
		                    <!-- </div> -->
		                </div>
		                <div class="item"> 
		                    <!-- <div class="col-lg-4 col-md-6 col-sm-6"> -->
		                        <div class="single-pricing-table">
		                            <div class="pricing-header">
		                                <div class="icon">
		                                    <i class="flaticon-wifi"></i>
		                                </div>

		                                <span>Option 7</span>
		                                <h3>100Mbps/10Mbps</h3>
		                            </div>

		                            <div class="single-pricing-table-s">
		                           		<div class="pricing-header">

		                           			<span>No upfront fee package</span>
		                           			<br>
				                            <ul class="pricing-features-list">
				                               
				                                <li><i class="flaticon-check-mark"></i> Month-to-Month</li>
				                                
				                            </ul>

				                            <div class="price">
				                                <span>Fee</span>
				                                <!-- <span>R</span> -->
				                                R1145.00/pm
				                                <!-- <span>/pm</span> -->
				                            </div>
				                        </div>
				                    </div>

				                    <div class="single-pricing-table-sg">
		                           		<div class="pricing-header">
		       
		                           			<span>Lower Subscription Packages</span>
		                           			<br>
				                            <ul class="pricing-features-list">
				                                <li><i class="flaticon-check-mark"></i> R2190.00 Connection Fee</li>
				                                <li><i class="flaticon-check-mark"></i> Month-to-Month</li>
				                            </ul>

				                            <div class="price">
				                                <span>Fee</span>
				                                <!-- <span>R</span> -->
				                                R1095.00/pm
				                                <!-- <span>/pm</span> -->
				                            </div>
				                        </div>
				                    </div>

		                            <button class="view-plans-btn">View Plans</button>

		                            <div class="image-box">
		                                <img src="assets/img/shape-image/2.png" alt="image">
		                                <img src="assets/img/shape-image/2.png" alt="image">
		                            </div>
		                        </div>
		                    <!-- </div> -->
		                </div>
		                <div class="item"> 
		                    <!-- <div class="col-lg-4 col-md-6 col-sm-6"> -->
		                        <div class="single-pricing-table">
		                            <div class="pricing-header">
		                                <div class="icon">
		                                    <i class="flaticon-wifi"></i>
		                                </div>

		                                <span>Option 8</span>
		                                <h3>100Mbps/100Mbps</h3>
		                            </div>

		                            <div class="single-pricing-table-s">
		                           		<div class="pricing-header">

		                           			<span>No upfront fee package</span>
		                           			<br>
				                            <ul class="pricing-features-list">
				                               
				                                <li><i class="flaticon-check-mark"></i> Month-to-Month</li>
				                                
				                            </ul>

				                            <div class="price">
				                                <span>Fee</span>
				                                <!-- <span>R</span> -->
				                                R1225.00/pm
				                                <!-- <span>/pm</span> -->
				                            </div>
				                        </div>
				                    </div>

				                    <div class="single-pricing-table-sg">
		                           		<div class="pricing-header">
		       
		                           			<span>Lower Subscription Packages</span>
		                           			<br>
				                            <ul class="pricing-features-list">
				                                <li><i class="flaticon-check-mark"></i> R2350.00 Connection Fee</li>
				                                <li><i class="flaticon-check-mark"></i> Month-to-Month</li>
				                            </ul>

				                            <div class="price">
				                                <span>Fee</span>
				                                <!-- <span>R</span> -->
				                                R1175.00/pm
				                                <!-- <span>/pm</span> -->
				                            </div>
				                        </div>
				                    </div>

		                            <button class="view-plans-btn">View Plans</button>

		                            <div class="image-box">
		                                <img src="assets/img/shape-image/2.png" alt="image">
		                                <img src="assets/img/shape-image/2.png" alt="image">
		                            </div>
		                        </div>
		                    <!-- </div> -->
		                </div>
		                <div class="item"> 
		                    <!-- <div class="col-lg-4 col-md-6 col-sm-6"> -->
		                        <div class="single-pricing-table">
		                            <div class="pricing-header">
		                                <div class="icon">
		                                    <i class="flaticon-wifi"></i>
		                                </div>

		                                <span>Option 9</span>
		                                <h3>200Mbps/20Mbps</h3>
		                            </div>

		                            <div class="single-pricing-table-s">
		                           		<div class="pricing-header">

		                           			<span>No upfront fee package</span>
		                           			<br>
				                            <ul class="pricing-features-list">
				                               
				                                <li><i class="flaticon-check-mark"></i> Month-to-Month</li>
				                                
				                            </ul>

				                            <div class="price">
				                                <span>Fee</span>
				                                <!-- <span>R</span> -->
				                                R1435.00/pm
				                                <!-- <span>/pm</span> -->
				                            </div>
				                        </div>
				                    </div>

				                    <div class="single-pricing-table-sg">
		                           		<div class="pricing-header">
		       
		                           			<span>Lower Subscription Packages</span>
		                           			<br>
				                            <ul class="pricing-features-list">
				                                <li><i class="flaticon-check-mark"></i> R2590.00 Connection Fee</li>
				                                <li><i class="flaticon-check-mark"></i> Month-to-Month</li>
				                            </ul>

				                            <div class="price">
				                                <span>Fee</span>
				                                <!-- <span>R</span> -->
				                                R1295.00/pm
				                                <!-- <span>/pm</span> -->
				                            </div>
				                        </div>
				                    </div>

		                            <button class="view-plans-btn">View Plans</button>

		                            <div class="image-box">
		                                <img src="assets/img/shape-image/2.png" alt="image">
		                                <img src="assets/img/shape-image/2.png" alt="image">
		                            </div>
		                        </div>
		                    <!-- </div> -->
		                </div>
		                <div class="item"> 
		                    <!-- <div class="col-lg-4 col-md-6 col-sm-6"> -->
		                        <div class="single-pricing-table">
		                            <div class="pricing-header">
		                                <div class="icon">
		                                    <i class="flaticon-wifi"></i>
		                                </div>

		                                <span>Option 10</span>
		                                <h3>200Mbps/200Mbps</h3>
		                            </div>

		                           <div class="single-pricing-table-s">
		                           		<div class="pricing-header">

		                           			<span>No upfront fee package</span>
		                           			<br>
				                            <ul class="pricing-features-list">
				                               
				                                <li><i class="flaticon-check-mark"></i> Month-to-Month</li>
				                                
				                            </ul>

				                            <div class="price">
				                                <span>Fee</span>
				                                <!-- <span>R</span> -->
				                                R1485.00/pm
				                                <!-- <span>/pm</span> -->
				                            </div>
				                        </div>
				                    </div>

				                    <div class="single-pricing-table-sg">
		                           		<div class="pricing-header">
		       
		                           			<span>Lower Subscription Packages</span>
		                           			<br>
				                            <ul class="pricing-features-list">
				                                <li><i class="flaticon-check-mark"></i> R2790.00 Connection Fee</li>
				                                <li><i class="flaticon-check-mark"></i> Month-to-Month</li>
				                            </ul>

				                            <div class="price">
				                                <span>Fee</span>
				                                <!-- <span>R</span> -->
				                                R1395.00/pm
				                                <!-- <span>/pm</span> -->
				                            </div>
				                        </div>
				                    </div>

		                            <button class="view-plans-btn">View Plans</button>


		                            <div class="image-box">
		                                <img src="assets/img/shape-image/2.png" alt="image">
		                                <img src="assets/img/shape-image/2.png" alt="image">
		                            </div>
		                        </div>
		                    <!-- </div> -->
		                </div>
		                <div class="item"> 
		                    <!-- <div class="col-lg-4 col-md-6 col-sm-6"> -->
		                        <div class="single-pricing-table">
		                            <div class="pricing-header">
		                                <div class="icon">
		                                    <i class="flaticon-wifi"></i>
		                                </div>

		                                <span>Option 11</span>
		                                <h3>1000Mbps/100Mbps</h3>
		                            </div>

		                            <div class="single-pricing-table-s">
		                           		<div class="pricing-header">

		                           			<span>No upfront fee package</span>
		                           			<br>
				                            <ul class="pricing-features-list">
				                               
				                                <li><i class="flaticon-check-mark"></i> Month-to-Month</li>
				                                
				                            </ul>

				                            <div class="price">
				                                <span>Fee</span>
				                                <!-- <span>R</span> -->
				                                R1495.00/pm
				                                <!-- <span>/pm</span> -->
				                            </div>
				                        </div>
				                    </div>

				                    <div class="single-pricing-table-sg">
		                           		<div class="pricing-header">
		       
		                           			<span>Lower Subscription Packages</span>
		                           			<br>
				                            <ul class="pricing-features-list">
				                                <li><i class="flaticon-check-mark"></i> No Connection Fee</li>
				                                <li><i class="flaticon-check-mark"></i> Month-to-Month</li>
				                            </ul>

				                            <div class="price">
				                                <span>Fee</span>
				                                <!-- <span>R</span> -->
				                                R1495.00/pm
				                                <!-- <span>/pm</span> -->
				                            </div>
				                        </div>
				                    </div>

		                            <button class="view-plans-btn">View Plans</button>

		                            <div class="image-box">
		                                <img src="assets/img/shape-image/2.png" alt="image">
		                                <img src="assets/img/shape-image/2.png" alt="image">
		                            </div>
		                        </div>
		                    <!-- </div> -->
		                </div>
		            </div>
		        <!-- </div> -->
        </section>

        <!-- Start Contact Area -->

        <section class="contact-info-box-area ptb-100">
            <div class="container">
                <div class="section-title">
                	<span>Step 3 of 3</span>
                    <h2>Signup for a package today</h2>
                    <p>Fill in your details below and we will do the rest</p>
                </div>

                <!--<form id="contactForm" id="frm_order">-->
				<form id="contactForm" method="post" action="php/order_post.php" class="frm_order" name="form5" enctype="multipart/form-data">
                    <div class="row">
                        
						<!-- Name -->
                        <div class="col-4">
                            <div class="form-group">
                                <input type="text" class="form-control" placeholder="Name" name="name" id="name" required data-error="Please enter your name">
                                <div class="help-block with-errors"></div>
                            </div>
                        </div>
						<!-- Surname -->
                        <div class="col-4">
                            <div class="form-group">
                                <input type="text" class="form-control" placeholder="Surname" name="surname" id="surname" required data-error="Please enter your surname">
                                <div class="help-block with-errors"></div>
                            </div>
                        </div>
                        <!-- Number -->
                        <div class="col-4">
                            <div class="form-group">
                                <input type="text" class="form-control" placeholder="Phone Number" name="number" id="number" required data-error="Please enter your phone number">
                                <div class="help-block with-errors"></div>
                            </div>
                        </div>
                        <!-- ID -->
                        <div class="col-lg-6 col-md-6">
                            <div class="form-group">
                                <input type="text" class="form-control" name="id_number" placeholder="ID Number" id="id_number" required data-error="Please enter your ID number">
                                <div class="help-block with-errors"></div>
                            </div>
                        </div>
                        <!-- Email -->
                        <div class="col-lg-6 col-md-6">
                            <div class="form-group">

                                <input type="email" class="form-control" name="email" placeholder="Email" id="email" required data-error="Please enter your email">
                                <div class="help-block with-errors"></div>
                            </div>
                        </div>
						<!-- Address -->
                        <div class="col-12">
                            <div class="form-group">
                                <input type="text" class="form-control" name="address" placeholder="Address" id="address" required data-error="Please enter your Address">
                                <div class="help-block with-errors"></div>
                            </div>
                        </div>
                      

                        <div class="col-12">
                        	<br>
                        	<div class="form-check form-check-inline">
  								<input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1">
  								<label class="form-check-label" for="inlineRadio1">Same as above</label>
							</div>
							<div class="form-check form-check-inline">
  								<input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2">
  								<label class="form-check-label" for="inlineRadio2">Another Address</label>
							</div>
						</div>

						<!-- Installation Address -->
                        <div class="col-12">
                        	<br>
                            <div class="form-group">
                                <input type="text" class="form-control" name="installation_address" placeholder=" Installation Address" id="installation_address">
                                <div class="help-block with-errors"></div>
                            </div>
                        </div>

<!--
						<div class="col-4">
                            <div class="form-group">
                                <input type="text" class="form-control" name="provider" placeholder="Provider" id="provider" required data-error="Please enter your Address">
                                <div class="help-block with-errors"></div>
                            </div>
                        </div> -->

	                    <div class="col-12">

	                    	<div class="form-group col-md-4">
	    						<select class="form-control" id="sel_product">
			    					<option>Please choose a package&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</option>
									<option value="access-res-unc-10-2">Fibre Fast Uncapped 10/2 Mbps @ R695</option>
									<option value="access-res-unc-10-10">Fibre Fast Uncapped 10/10 Mbps @ R755</option>
									<option value="access-res-unc-20-2">Fibre Fast Uncapped 20/2 Mbps @ R845</option>
									<option value="access-res-unc-20-20">Fibre Fast Uncapped 20/20 Mbps @ R915</option>
									<option value="access-res-unc-50-5">Fibre Fast Uncapped 50/5 Mbps @ R995</option>
									<option value="access-res-unc-50-50">Fibre Fast Uncapped 50/50 Mbps @ R1055</option>
									<option value="access-res-unc-100-10">Fibre Fast Uncapped 100/10 Mbps @ R1145</option>
									<option value="access-res-unc-100-100">Fibre Fast Uncapped 100/100 Mbps @ R1225</option>
									<option value="access-res-unc-200-20">Fibre Fast Uncapped 200/20 Mbps @ R1435</option>
									<option value="access-res-unc-200-200">Fibre Fast Uncapped 200/200 Mbps @ R1485</option>
									<option value="access-res-unc-red-10-2">Fast Fibre Reduced Subscription 10/2 Mbps @ R1875 upfront & R625pm</option>
									<option value="access-res-unc-red-10-10">Fast Fibre Reduced Subscription 10/10 Mbps @ R1390 upfront & R695pm</option>
									<option value="access-res-unc-red-20-2">Fast Fibre Reduced Subscription 20/2 Mbps @ R1590 upfront & R795pm</option>
									<option value="access-res-unc-red-20-20">Fast Fibre Reduced Subscription 20/20 Mbps @ R1690 upfront & R845pm</option>
									<option value="access-res-unc-red-50-5">Fast Fibre Reduced Subscription 50/5 Mbps @ R1870 upfront & R935pm</option>
									<option value="access-res-unc-red-50-50">Fast Fibre Reduced Subscription 50/50 Mbps @ R1970 upfront & R985pm</option>
									<option value="access-res-unc-red-100-10">Fast Fibre Reduced Subscription 100/10 Mbps @ R2190 upfront & R1095pm</option>
									<option value="access-res-unc-red-100-100">Fast Fibre Reduced Subscription 100/100 Mbps @ R2350 upfront & R1175pm</option>
									<option value="access-res-unc-red-200-20">Fast Fibre Reduced Subscription 200/20 Mbps @ R2590 upfront & R1295pm</option>
									<option value="access-res-unc-red-200-200">Fast Fibre Reduced Subscription 200/200 Mbps @ R2790 upfront & R1395pm</option>
									<option value="access-res-unc-1000-100">Fibre Fast Uncapped 1000/100 Mbps @ R1495</option>
								</select>
							</div>
						</div>
						
						
						<div class="col-4">
						<br>
                            <div class="form-group">
                                <input readonly="readonly" type="text" class="form-control" name="provider" placeholder="Provider: Vumatel" id="provider" value="Provider: Vumatel" required data-error="Please enter your Address">
                                <div class="help-block with-errors"></div>
                            </div>
                        </div>
						

						<!--<div class="col-4">-->
						<div class="col-12" align="left">

                            <div class="form-group">
                                <input type="text" class="form-control" name="delivery_instructions" placeholder="Delivery Instructions" id="delivery_instructions">
                                <div class="help-block with-errors"></div>
                            </div>
                        </div>
						
                        <div class="col-lg-12 col-md-12">
	                        <div class="section-title-form">
	                    		<h4>Debit Order Details</h4>
	                    	</div>
                      	</div>

                      	<!-- Name -->
                        <!-- <div class="col-4">
                            <div class="form-group">
                                <input type="text" class="form-control" placeholder="Account Holder" name="account_holder" id="name" required data-error="Please enter your name">
                                <div class="help-block with-errors"></div>
                            </div>
                        </div> -->
                        <!-- Number -->
                        <div class="col-4">
                            <div class="form-group">
                                <input type="text" class="form-control" placeholder="Account Number" name="account_number" id="account_number" required data-error="Please enter your phone number">
                                <div class="help-block with-errors"></div>
                            </div>
                        </div>

                        <div class="col-4">
                        	<br>
                        	<div class="form-check form-check-inline">
  								<input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1">
  								<label class="form-check-label" for="inlineRadio1">Cheque</label>
							</div>
							<div class="form-check form-check-inline">
  								<input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2">
  								<label class="form-check-label" for="inlineRadio2">Credit</label>
							</div>
							<div class="form-check form-check-inline">
  								<input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2">
  								<label class="form-check-label" for="inlineRadio2">Debit</label>
							</div>
						</div>

                        <!-- Surname -->
                        <div class="col-4">
                            <div class="form-group">
                                <input type="text" class="form-control" placeholder="Bank" name="bank" id="bank" required data-error="Please enter your surname">
                                <div class="help-block with-errors"></div>
                            </div>
                        </div>
                        <!-- Surname -->
                        <div class="col-4">
                            <div class="form-group">
                                <input type="text" class="form-control" placeholder="Branch" name="branch" id="branch">
                                <div class="help-block with-errors"></div>
                            </div>
                        </div>
                        <!-- Surname -->
                        <div class="col-4">
                            <div class="form-group">
                                <input type="text" class="form-control" placeholder="Branch Code" name="branch_code" id="branch_code">
                                <div class="help-block with-errors"></div>
                            </div>
                        </div>
                        <div class="col-9" align="left">
							<br>
	                        <p>Please upload a certified copy of your ID or Passport.</p>
						</div>

                        <!--<div class="col-3">-->
                        <div class="col-9" align="left">

                        	<br>
                        	<div class="form-group form-inline">
    							<input type="file" class="form-control-file" id="idnum" name="idnum">
 						 	</div>
 						</div>

 						<div class="col-lg-12 col-md-12">
	                        <div class="section-title-form">
	                    		<h4>Confirmation of Order</h4>
	                    	</div>
                      	</div>

                        <div class="col-lg-12 col-md-12">
                            <button type="submit" class="btn btn-primary" name="btn_submit">Submit & Sign</button>
                            <div id="msgSubmit" class="h3 text-center hidden"></div>
                            <div class="clearfix"></div>
                        </div>
                    </div>
                </form>
            </div>
        </section>


       <!-- <div class="go-top"><i class="fas fa-arrow-up"></i></div>-->

        
		<script src="https://ajax.aspnetcdn.com/ajax/jQuery/jquery-3.4.1.min.js"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>

        <!-- jQuery Min JS -->
        <script src="assets/js/jquery.min.js"></script>
        <!-- Popper Min JS -->
        <script src="assets/js/popper.min.js"></script>
        <!-- View More JS -->
        <script src="assets/js/viewMore.js"></script>
        <!-- Bootstrap Min JS -->
        <script src="assets/js/bootstrap.min.js"></script>
        <!-- MeanMenu JS -->
        <script src="assets/js/jquery.meanmenu.js"></script>
        <!-- Magnific Popup Min JS -->
        <script src="assets/js/jquery.magnific-popup.min.js"></script>
        <!-- Owl Carousel Min JS -->
        <script src="assets/js/owl.carousel.min.js"></script>
        <!-- Parallax Min JS -->
        <script src="assets/js/parallax.min.js"></script>
        <!-- Nice Select Min JS -->
        <script src="assets/js/jquery.nice-select.min.js"></script>
        <!-- WOW Min JS -->
        <script src="assets/js/wow.min.js"></script>
        <!-- AjaxChimp Min JS -->
        <script src="assets/js/jquery.ajaxchimp.min.js"></script>
        <!-- Form Validator Min JS -->
        <script src="assets/js/form-validator.min.js"></script>
        <!-- Contact Form Min JS -->
        <script src="assets/js/contact-form-script.js"></script>
        <!-- Form Validator Min JS -->
        <script src="assets/js/form-validator.min.js"></script>
        <!-- Contact Form Min JS -->
        <script src="assets/js/contact-form-script.js"></script>
        <!-- Bahama Map JS -->
        <!--<script src="assets/js/bahama-map.js"></script>-->
        <!-- Map API JS FILES -->
        <!--<script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyApghCIIx9MpQhA768sKXxvR_Okg0SF2k4&callback=initMap"></script>-->
        <!-- Bahama Map JS -->
        <!--<script src="assets/js/bahama-map.js"></script>-->
        <!-- Main JS -->
        <script src="assets/js/main.js"></script>
		
		
		


<!-- esri / crm -->
<!--
<script>
jQuery(document).ready(function() {
	
	jQuery('.product_container').find('.form-control').each(function(e) { 
           var sel = jQuery(e.currentTarget);
		   var class_name=sel.attr('class');
		   console.log(class_name+' >> |||');
		/*$(document).on('change', '.'+class_name, function(e) {
			var currentTarget = jQuery(e.currentTarget);
			var price=currentTarget.val();
			var form=currentTarget.closest('form');
		    if(price!='' || typeof price != 'undefined'){
					if ( price.indexOf('@') > -1 ){
						price_str=price.split("@");
						cost +=price_str[1];
					}
			 }
		
		
		});
		   */
    });
	
	
	jQuery('#ComplexName_List').empty();
	jQuery('#ComplexName_List').append('<option value="">Choose a Region</option>');
	var i = {operation: 'get_Region'};
	jQuery.ajax({
        data: i,
        url: "webservice.php",
        type: "post",
        success: function(i) {
           var returnedData = JSON.parse(i);
		   var html='';
		   for(var t=0;t<returnedData.length;t++)
		   {
			   var region=returnedData[t];
			  html +='<option value="'+region+'">'+region+'</option>';
		   }
		  // console.log(returnedData.length);
		   jQuery('#ComplexName_List').append(html);
        }
    });
	
	
	jQuery('#ComplexName_List').on('change',function(e){
		jQuery('#Site_List').empty();
		jQuery('#Site_List').append('<option value="">Choose a Site</option>');
		var currentTarget = jQuery(e.currentTarget);
		console.log(currentTarget.val());
		//Calling Ajax
		    var i = {operation: 'get_site',region: currentTarget.val()};
			jQuery.ajax({
        data: i,
        url: "webservice.php",
        type: "post",
        success: function(i) {
           var returnedData = JSON.parse(i);
		   var sites=returnedData.sites;
		  // var isp_lists=returnedData.isp_lists;
		   var html='';
		   for(var t=0;t<sites.length;t++)
		   {
			   var unit_data=sites[t];
			   var websourceid=unit_data.websourceid;
			   var site_acc_id=unit_data.site_acc_id;
			   var title=unit_data.title;
			   
			  //html +='<option value="'+websourceid+'">'+title+'</option>';
			  var dd_val=title+'##'+site_acc_id;
			  html +='<option value="'+dd_val+'">'+title+'</option>';
		   }
		   jQuery('#Site_List').append(html);
		  
		   
		   
		   
        }
    })
		//Calling Ajax
	});
	
	jQuery('#Site_List').on('change',function(e){
		var currentTarget = jQuery(e.currentTarget);
		var region=jQuery('#ComplexName_List').val();
		var site_id=currentTarget.val();
		site_id_split=site_id.split("##");
		site_id=site_id_split[0];
		jQuery('#hdn_websource_id').val(site_id);
		//Calling Ajax
		    var i = {operation: 'get_isps',region: region,site_id: site_id};
			jQuery.ajax({
        data: i,
        url: "webservice.php",
        type: "post",
        success: function(i) {
           var returnedData = JSON.parse(i);
		   var isp_lists=returnedData.isp_lists;
		  var isp_lists_str= JSON.stringify(isp_lists);
		  jQuery('#isp_lists_str').val(isp_lists_str);
		  /* var html2='';
		   for(var t=0;t<isp_lists.length;t++)
		   {
			   var isp=isp_lists[t];
			   var ispid=isp.ispid;
			   var title=isp.title;
			   var isp_image=isp.isp_image;
			   var isp_url=isp.url;
			   isp_url +='?ispid='+ispid;
			  html2 +='<a href="'+isp_url+'" target="_blank" ><img style=" padding:3px; float:left; display:inline" src="images/'+isp_image+'" width="160" height="90" alt="'+title+'" /></a>';
		   }
		   jQuery('#isp_list').html(html2);*/
		   
		   var categories=returnedData.categories;
		   jQuery('#signup_category').empty();
		   jQuery('#signup_category').append('<option value="">Choose a Category</option>');
		   var html='';
		   for(var t=0;t<categories.length;t++)
		   {
			   var category=categories[t];
			  html +='<option value="'+category+'">'+category+'</option>';
		   }
		   jQuery('#signup_category').append(html);
		   
		    var units=returnedData.units;
			var units_str = JSON.stringify(units);
		    jQuery('#hdn_units').val(units_str);
			
			var onceoff_amt=returnedData.onceoff_amt;
			 jQuery('#hdn_onceoff').val(onceoff_amt);
			var gtu_val=returnedData.gtu_val; 
			 jQuery('#hdn_gtu_val').val(gtu_val);
			
        }
    })
		//Calling Ajax
	});
	jQuery('#signup_category').on('change',function(e){
		var cat = jQuery(e.currentTarget).val();
		if(cat=='Business') var modal_page='biz_signup.php';
		else if(cat=='Residential') var modal_page='res_signup.php';
		else if(cat=='Retail') var modal_page='ret_signup.php';
		var sitename=jQuery('#Site_List').val();
		var sitename_split=sitename.split("##");
		sitename=sitename_split[0];
		var $modal = $('#load_popup_modal_show_id');
		
		var region=jQuery('#ComplexName_List').val();
		
		var place_name=jQuery('#Site_List').val();
		var pl_split=place_name.split("##");
		place_name=pl_split[0];
		var site_acc_id=pl_split[1];
		var loc_arr = [place_name,'','','',region,'',''];
		var loc_arr_str = loc_arr.join('##');	
		
		open_form(loc_arr_str,cat,sitename,site_acc_id)
	});
	
	jQuery('.signup_bc').on('click',function(e){
		var $modal = $('#load_popup_modal_show_id');
		$modal.load('buff_bcoc.php',{},
		function(){
		$modal.modal('show');
		});
	});
	
	jQuery('.signup_ho').on('click',function(e){
		var $modal = $('#load_popup_modal_show_id');
		$modal.load('buff_hoac.php',{},
		function(){
		$modal.modal('show');
		});
	});
	
	jQuery('#signup_category_').on('change',function(e){
		var currentTarget = jQuery(e.currentTarget);
		var signupcategory=currentTarget.val();
		var site_id=jQuery('#Site_List').val();
		//Calling Ajax
		    var i = {operation: 'get_products',signupcategory: signupcategory,site_id: site_id};
			jQuery.ajax({
        data: i,
        url: "webservice.php",
        type: "post",
        success: function(i) {
           var returnedData = JSON.parse(i);
		   var products=returnedData.products;
		   var additonal_products=returnedData.additonal_products;
		    var products_str= JSON.stringify(products);
			var additonal_products_str= JSON.stringify(additonal_products);
		  jQuery('#products_str').val(products_str);
		  jQuery('#addtional_products_str').val(additonal_products_str);
		   var isp_lists_str=jQuery('#isp_lists_str').val();
		   var isp_lists=JSON.parse(isp_lists_str);
		   
		   var html2='<div><header><h1 class="no-bottom-margin no-border">Please select your preferred internet service provider</h1></header></br><p>*If you select SADV, please click on the logo and scroll down to complete the signup form.</p></div>';
		   for(var t=0;t<isp_lists.length;t++)
		   {
			   var isp=isp_lists[t];
			   var ispid=isp.ispid;
			   var title=isp.title;
			   var isp_image=isp.isp_image;
			   var isp_url=isp.url;
			   isp_url +='?ispid='+ispid;
			       $("html,body").animate({
            scrollTop:$("#isp_list").offset().top - 150,
            });
			  html2 +='<a class="isptitle" data-title="'+title+'" data-url="'+isp_url+'" target="_blank" ><img style=" padding:10px; float:left; display:inline" src="images/'+isp_image+'" width="200" height="130" alt="'+title+'" /></a>';
		   }
		   jQuery('#isp_list').html(html2);
		   
		  
		  /* var products_html='';
		   for(var t=0;t<products.length;t++)
		   {
				var product=products[t];
				var productid=product.productid;
				var productname=product.productname;
				products_html +='<option value="'+productid+'">'+productname+'</option>';
		   }
		   var unitstr= jQuery('#hdn_units').val();
		   var unitarr = JSON.parse(unitstr);
		   var html_units='';
		   jQuery.each(unitarr, function(index, val) {
			   var unitid=val.unitid;
			   var unit_title=val.title;
			   html_units +='<option value="'+unitid+'">'+unit_title+'</option>';
		   });
		  
		  if(signupcategory=='Residential'){
				$("#Residential_Form").show();
				var form = $('form[name="resform"]')
				var unit_all=form.find('[name="unit"]');
				var product=form.find('[name="product"]');
				form.find('[name="hdn_siteid"]').val(site_id);
				
				unit_all.empty();
				unit_all.append('<option value="">Choose a Unit</option>');
				unit_all.append(html_units);
				
				product.empty();
				product.append('<option value="">Choose a Unit</option>');
				product.append(products_html);
				
				var position = $("#Residential_Form").position();
				scroll(0,position.top);
		  }else if(signupcategory=='Retail'){
				$("#Retail_Form").show();
				
				var form = $('form[name="retailform"]')
				var unit_all=form.find('[name="unit"]');
				var product=form.find('[name="product"]');
				form.find('[name="hdn_siteid"]').val(site_id);
				unit_all.empty();
				unit_all.append('<option value="">Choose a Unit</option>');
				unit_all.append(html_units);
				
				product.empty();
				product.append('<option value="">Choose a Unit</option>');
				product.append(products_html);
				
				var position = $("#Retail_Form").position();
				scroll(0,position.top);
		  }else if(signupcategory=='Business'){
				$("#Business_Form").show();
				
				var form = $('form[name="businessform"]')
				var unit_all=form.find('[name="unit"]');
				var product=form.find('[name="product"]');
				form.find('[name="hdn_siteid"]').val(site_id);
				
				unit_all.empty();
				unit_all.append('<option value="">Choose a Unit</option>');
				unit_all.append(html_units);
				
				product.empty();
				product.append('<option value="">Choose a Unit</option>');
				product.append(products_html);
				
				var position = $("#Business_Form").position();
				scroll(0,position.top);   
		  }*/
		   
		   
		   
        }
    })
		//Calling Ajax
		
		
		
		/*if(signupcategory=='Residential'){
			     {
        $("#Residential_Form").show();
        var position = $("#Residential_Form").position();
			scroll(0,position.top);
      }
		}else if(signupcategory=='Retail'){
			     {
        $("#Retail_Form").show();
        var position = $("#Retail_Form").position();
			scroll(0,position.top);
      }
		}else if(signupcategory=='Business'){
			     {
        $("#Business_Form").show();
        var position = $("#Business_Form").position();
			scroll(0,position.top);        
      }

		}*/
		
	});
	//$(document).on('change', '.phoneline', function(e) {
		
		$(document).on('change',".Phone_Lines", function(e){
	//jQuery('.phoneline').on('change',function(e){
		console.log("fvfvfv")
		var currentTarget = jQuery(e.currentTarget);
		var form=currentTarget.closest('form');
		var phone_line_val=currentTarget.val();
		
		var product_selected=form.find('[name="product"]').val();
		if(phone_line_val!='' && product_selected==''){
			alert("You must Select a Product");
			form.find('[name="product"]').focus();
			//currentTarget.find('option:first').attr('selected', 'selected');
			currentTarget.prop('selectedIndex',0);
			return false;
		}
		//calculate_onceoff_installation_cost(form);
		
		
	});
	
	$(document).on('change', '.GTU', function(e) {
	//jQuery('.gtu').live('change',function(e){
		var currentTarget = jQuery(e.currentTarget);
		var form=currentTarget.closest('form');
		//calculate_onceoff_installation_cost(form);
	});
	$(document).on('click',".isptitle", function(e){
		e.preventDefault();
		e.stopPropagation();
		var currentTarget = jQuery(e.currentTarget);
		var form=currentTarget.closest('form');
		var hdn_isp_signedup_val=form.find('[name="hdn_isp_signedup"]').val();
		var title=currentTarget.data('title');
		if(hdn_isp_signedup_val=='Yes' && title!='SADV'){
			var isp_url=currentTarget.data("url");
			window.open(isp_url, "_blank"); return;
		}
		
		console.log(title+'>>>ccecece');
		$('.selected').removeClass('selected');
    $(this).addClass('selected');
		
		
		var product_container=jQuery('#product_container');
		var isp_container=jQuery('#isp_container');
		if(title=='SADV'){
			
			$("#product").prop('required',true);
			$("#product").validator('update');
			jQuery('#ISPFIELD').hide();
			jQuery('#submit_popup').attr('value', 'Submit');
			
			product_container.show();
			product_container.find('input, textarea, button, select').prop("disabled", false);
			isp_container.hide();
			isp_container.find('input, textarea, button, select').prop("disabled", true);
			jQuery('#submit_popup').show();
		}else{
			
			$("#product").prop('required',false);
			$("#product").validator('destroy');
			var ispinfo=currentTarget.data("ispinfo");
			var isp_url=currentTarget.data("url");
			var isp_title=currentTarget.data("title");
			var isp_signed_up=jQuery('#hdn_isp_signedup').val();
			
			product_container.find('input, textarea, button, select').prop("disabled", true);
			product_container.hide();
			//isp_container.find('input, textarea, button, select').prop("disabled", false);
			/*isp_container.html('<p style="color:#F36"><span id="isp_notify">Please submit the form to browse products and service of <b>'+isp_title+'</b></span></p>');*/
			
			isp_container.html('<p style="color:#F36"><span id="isp_notify">You are required to click on the "Next" button below before you are able to view the links to the various open access ISP products. Please click on the "Next" button below now.</span></p>');
			
			isp_container.append(ispinfo);
			
			if(isp_signed_up=='Yes') var style="";
			else style="display:none";
			
			var link_to_isp='<br /><br /><span style="'+style+'" class="isp_link"><a href="'+isp_url+'" target="_blank">Click here</a> to browse all products and services of '+isp_title+'.</span>';
			//isp_container.append(link_to_isp);
			isp_container.show();
			jQuery('#submit_popup').attr('value', 'Next'); 
		}
		var form=currentTarget.closest('form');
		form.find('[name="hdn_isp_name"]').val(title);
		
	});
	
	
})
function calculate_onceoff_installation_cost(form)
{
	var product_val=form.find('[name="product"]').val();
	var phone_line_val=form.find('[name="Phone_Lines"]').find('option:selected').val();
	
	var phval=0;
	var gtval='';
	
	var gtu_val=form.find('[name="GTU"]').length>0 ? form.find('[name="GTU"]').find('option:selected').val(): '';
	
	
	if(phone_line_val!=''){
	phone_line_val=phone_line_val.split("@");
	phval=phone_line_val[1];
	
	}
	
	if(gtu_val!='' || gtu_val!='undefined'){
		if ( gtu_val.indexOf('@') > -1 ){
			gtu_val=gtu_val.split("@");
			gtval=gtu_val[1];
		}
	}
	
	var once_off=jQuery('#hdn_onceoff').val()!="" ? parseFloat(jQuery('#hdn_onceoff').val()):0;
	
	/*if(product_val!='' && phval!='' && gtval!='') totalcost=parseFloat(phval)+parseFloat(once_off)+parseFloat(gtval);
	else if(gtval!='') totalcost=parseFloat(gtval);
	else if(gtval=='' && product_val!='' && phval!='') totalcost=parseFloat(phval)+parseFloat(once_off);
	else totalcost=0;*/
	//totalcost=parseFloat(phval)+parseFloat(once_off)+parseFloat(gtval);
	
	var totalcost=0;
	if(phval!='') totalcost=totalcost+parseFloat(phval);
	if(once_off!='') totalcost=totalcost+parseFloat(once_off);
	if(gtval!='') totalcost=totalcost+parseFloat(gtval);
	
	form.find('[name="installation_cost"]').html(once_off);
	form.find('[name="once_off"]').html(totalcost);
	
	console.log(phval+' >> '+gtval+' >>> '+once_off);
	return;
}




///////////////////////////////////Vivek/////////////////////////////////////

require([
	  "dojo/dom",
	  "dojo/_base/lang",
	  "dojo/on",	
	  "esri/Map",

      "esri/views/MapView",
	  "esri/widgets/Locate",
	  "esri/layers/FeatureLayer",
	  "esri/layers/GraphicsLayer",
	  "esri/tasks/QueryTask",
	  "esri/tasks/support/Query",
	  "esri/renderers/UniqueValueRenderer",
      "esri/symbols/SimpleFillSymbol",
	  "esri/widgets/Search",
	  "esri/tasks/Locator",
	  "esri/geometry/Point",
	  "dojo/_base/array",
      "dojo/domReady!"
    ], 
	
	function(dom, lang, on, Map, MapView, Locate, FeatureLayer, GraphicsLayer, QueryTask, Query, UniqueValueRenderer, SimpleFillSymbol, Search, Locator, Point, arrayUtils,)
	{
		//layers
		//var _dfa_buffer = "https://services8.arcgis.com/TtfEhzNWkBKhyztb/arcgis/rest/services/DFA_Buffer2019/FeatureServer/0";	
		var _bc_hoa = "https://services8.arcgis.com/TtfEhzNWkBKhyztb/arcgis/rest/services/BCHOA_2019/FeatureServer/0";
		
		var _sadv_suburbia = "https://services8.arcgis.com/TtfEhzNWkBKhyztb/arcgis/rest/services/SADV_BUFFER_V2_2019/FeatureServer/0";	

//vuma layers
		var _vuma_gpon_live = "https://services8.arcgis.com/TtfEhzNWkBKhyztb/arcgis/rest/services/VumaMasterCoverageGPONL/FeatureServer/1";	
		var _vuma_gpon_build = "https://services8.arcgis.com/TtfEhzNWkBKhyztb/arcgis/rest/services/VumaMasterCoverageGPONB/FeatureServer/1";			
		var _vuma_ae_live = "https://services8.arcgis.com/TtfEhzNWkBKhyztb/arcgis/rest/services/VumaMasterCoverageAEL/FeatureServer/1";	
		var _vuma_ae_build = "https://services8.arcgis.com/TtfEhzNWkBKhyztb/arcgis/rest/services/VumaMasterCoverageAEB/FeatureServer/1";	
//vuma layers end		


//DNATel layers
		var _dnatel_live = "https://services8.arcgis.com/TtfEhzNWkBKhyztb/arcgis/rest/services/DNAtel_areas/FeatureServer/1";	
//DNATel layers end	
		
		var _business_layer = "https://services8.arcgis.com/TtfEhzNWkBKhyztb/arcgis/rest/services/SADV_BIZ_SITES_2019/FeatureServer/0";
		var _complex_layer = "https://services8.arcgis.com/TtfEhzNWkBKhyztb/arcgis/rest/services/Residential_2019/FeatureServer/0";		
		var _sdu_layer = "https://services8.arcgis.com/TtfEhzNWkBKhyztb/arcgis/rest/services/Residential_SDU_2019/FeatureServer/0";	
		
		var _complex_layer2 = "https://services8.arcgis.com/TtfEhzNWkBKhyztb/arcgis/rest/services/Residential_2_2019/FeatureServer/0";	
		
		var _no_coverage = "https://services8.arcgis.com/TtfEhzNWkBKhyztb/arcgis/rest/services/NoCoverage_2019/FeatureServer/0";	
		//var _bc_hoa = "https://services8.arcgis.com/TtfEhzNWkBKhyztb/arcgis/rest/services/BCHOA_2019/FeatureServer/1";


		
		//
		//  Complex Selection Function
		//
		//This function kicks off after a complex is selected from the dorp down
		function Complex_Selected()
		{
			var name = dom.byId("Site_List").value;
			
			//var queryTask = new QueryTask({ url: _bc_hoa, _complex_layer, _sdu_layer, _business_layer, _sadv_suburbia, _dfa_buffer, _complex_layer2, _no_coverage, _vuma_gpon_live, _vuma_gpon_build, _vuma_ae_live, _vuma_ae_build});
			var queryTask = new QueryTask({ url: _bc_hoa, _complex_layer, _sdu_layer, _business_layer, _sadv_suburbia, _complex_layer2, _no_coverage, _vuma_gpon_live, _vuma_gpon_build, _vuma_ae_live, _vuma_ae_build, _dnatel_live});
				var query = new Query();
				query.returnGeometry = true;
				query.outFields = ["*"];
				query.where = "Name = '" + name + "'";
				queryTask.execute(query).then(function(results)
				{
					var ResultsArray = arrayUtils.map(results.features, function(feature)
					{
						view.goTo(feature);
						newPoint = new Point(feature.geometry.centroid.x,feature.geometry.centroid.y,map.spatialReference);
						var site_status = feature.attributes["Status"];
					});
				});
		};
		
		on(dom.byId("Site_List"), "change",lang.hitch(this,Complex_Selected));
		
		
		// Symbols for Complexes
		//In Progress
        var _inProgress_symbol = new SimpleFillSymbol({
			color: [ 216, 198, 60, 0.5 ],
			style: "solid",
			outline: {  
				color: "orange",
				width: 0
			}
        });

        // Live
        var _live_symbol = new SimpleFillSymbol({
			color: [ 28, 191, 63, 0.5 ],
			style: "solid",
			outline: {  
				color: "green",
				width: 0
			}
        });
        
 
        // NoCoverage
      //  var _nocoverage_symbol = new SimpleFillSymbol({
		//	color: [ 0, 0, 0, 0 ],
		//	style: "solid",
			//opacity: "0",
			//outline: {  
			//	color: "blue",
			//	width: 0
			//}
      //  });

        // BCHOA
        //var _bchoa_symbol = new SimpleFillSymbol.STYLE_NULL({
			//color: [ 0, 0, 0, 0.5 ],
			//style: "solid",
			//opacity: "0",
			//outline: {  
			//	color: "blue",
			//	width: 0
			//}
        //});
       
		
		//Create Unigue Value Renderer:
		
		var complexRenderer = new UniqueValueRenderer({
			field: "Status",
			uniqueValueInfos: [
			{
				value: "In Progress",
				symbol: _inProgress_symbol,
				label: "In Progress"
			}, 
			{
				value: "Live",
				symbol: _live_symbol,
				label: "Live"
			}]
		});

	//	var complexRenderer = new UniqueValueRenderer({
	//		field: "Name",
	//		uniqueValueInfos: [
	//		{
	//			value: "No Name",
	//			symbol: _nocoverage_symbol,
	//			label: "No Name"
	//		}] 
	//	});
		
		//var complexRenderer = new UniqueValueRenderer({
		//	field: "Name",
		//	uniqueValueInfos: [
		//	{
		//		value: "Complex",
		//		symbol: _bchoa_symbol,
		//		label: "Complex"
		//	}] 
		//});


		var No_Coverage_Layer = new FeatureLayer({ 
			url: _no_coverage, 
			outFields: ["*"]
		});
		
/*
		var DFA_Buffer_Layer = new FeatureLayer({ 
			url: _dfa_buffer, 
			outFields: ["*"]
		}); */


		var SADV_Suburbia_Layer = new FeatureLayer({ 
			url: _sadv_suburbia, 
			outFields: ["*"]
		});

//vuma		
		var Vuma_Gpon_Live_Layer = new FeatureLayer({ 
			url: _vuma_gpon_live, 
			outFields: ["*"]
		});		

		var Vuma_Gpon_Build_Layer = new FeatureLayer({ 
			url: _vuma_gpon_build, 
			outFields: ["*"]
		});

		var Vuma_AE_Live_Layer = new FeatureLayer({ 
			url: _vuma_ae_live, 
			outFields: ["*"]
		});
		
		var Vuma_AE_Build_Layer = new FeatureLayer({ 
			url: _vuma_ae_build, 
			outFields: ["*"]
		});		

//vuma end


//DNATel		
		var DNATel_Live_Layer = new FeatureLayer({ 
			url: _dnatel_live, 
			outFields: ["*"]
		});		
	

//DNATel end

		var BCHOA_Layer = new FeatureLayer({ 
			url: _bc_hoa, 
			outFields: ["*"]
		});

		
		var Complex_Layer = new FeatureLayer({ 
			url: _complex_layer, renderer: complexRenderer,
			outFields: ["*"]
		});
		
		var Complex_Layer2 = new FeatureLayer({ 
			url: _complex_layer2, renderer: complexRenderer,
			outFields: ["*"]
		});


		var SDU_Layer = new FeatureLayer({ 
			url: _sdu_layer, renderer: complexRenderer,
			outFields: ["*"]
		});



		var Business_Layer = new FeatureLayer({ 
			url: _business_layer, 
			outFields: ["*"]
		});
		



		// Create a locator task using the world geocoding service
		var locatorTask = new Locator({
			url: "https://geocode.arcgis.com/arcgis/rest/services/World/GeocodeServer",
			outFields: ["*"]
		});
		
		/*var map = new Map({
			basemap: "hybrid",
			layers: [DFA_Buffer_Layer, SADV_Suburbia_Layer, Business_Layer, Complex_Layer]
			
		});*/
		
		var map = new Map({
			basemap: "gray",
			//layers:[No_Coverage_Layer, BCHOA_Layer, DFA_Buffer_Layer, SADV_Suburbia_Layer, Business_Layer, Complex_Layer, SDU_Layer,Complex_Layer2,Vuma_Gpon_Live_Layer,Vuma_Gpon_Build_Layer,Vuma_AE_Live_Layer,Vuma_AE_Build_Layer]
			layers:[No_Coverage_Layer, BCHOA_Layer, SADV_Suburbia_Layer, Business_Layer, Complex_Layer, SDU_Layer,Complex_Layer2,Vuma_Gpon_Live_Layer,Vuma_Gpon_Build_Layer,Vuma_AE_Live_Layer,Vuma_AE_Build_Layer,DNATel_Live_Layer]
			
		});
		
		

		/*var view = new MapView({
			map: map,
			container: "viewDiv",
			center: [28.092, -26.072],
			zoom: 14
		});*/
		//var _center_lat=-Math(jQuery('#hdn_latitude').val());
		//var _center_long=Math(jQuery('#hdn_longitude').val());
		var searchParams = new URLSearchParams(window.location.search);
		var _center_lat = searchParams.get('latitude_val');
		var _center_long = searchParams.get('longitude_val');
		var _address=searchParams.get('address');
		//alert(_center_lat);
		//_center_lat='-26.072';
		//_center_long='28.092';
		//if(_center_lat=='' || _center_lat==null ) _center_lat='-26';
		//if(_center_long=='' || _center_long==null ) _center_long='28';
		var _center_lat=String(_center_lat);
		var _center_long=String(_center_long);
		  var view = new MapView({
			map: map,
			container: "viewDiv",
			center: [_center_long,_center_lat],
			zoom: 14
		});	
		
  view.then(function(event) {
	//  var Site_Account_ID=hitTestResults.attributes["Site_Account_ID"];
	 var Site_Account_ID=0;
        var peak = new Point({
          latitude: _center_lat,
          longitude: _center_long
        });
        view.popup.open({
          location: peak,
          title: "Your Location",
          content: _address+Site_Account_ID
        });
	  		
		
      });
	

	  
		
		var place_name;
		var street_number;
		var street_name;
		var region;
		var city;
		var postal_code;
		
		
		
		
		
		view.on("click", function(event) {
			event.stopPropagation();
			view.popup.content = "";
var inside_layers=false;
			// Get the coordinates of the click on the view
			// around the decimals to 3 decimals
			var lat = Math.round(event.mapPoint.latitude * 1000) / 1000;
			var lon = Math.round(event.mapPoint.longitude * 1000) / 1000;
			
			jQuery('#hdn_latitude').val(lat);
			jQuery('#hdn_longitude').val(lon);

			view.popup.open({
				// Set the popup's title to the coordinates of the clicked location
				title: "Coordinates: [" + lon + ", " + lat + "].",
				location: event.mapPoint,// Set the location of the popup to the clicked location
				
			});
			
			
			// Display the popup
			// Execute a reverse geocode using the clicked location
			locatorTask.locationToAddress(event.mapPoint).then(function(response) {
				$("#Request_Form").show();
				// If an address is successfully found, show it in the popup's content
				var newPoint = new Point(response.location.x,response.location.y,response.location.spatialReference);
				
				//The QueryTask checks whether the location you clicked on is within a complex in your layer
				var _sadv_suburbia = "https://services8.arcgis.com/TtfEhzNWkBKhyztb/arcgis/rest/services/SADV_BUFFER_V2_2019/FeatureServer/0";
				
				var suburbia_queryTask = new QueryTask({ url: "https://services8.arcgis.com/TtfEhzNWkBKhyztb/arcgis/rest/services/SADV_BUFFER_V2_2019/FeatureServer/0" });
				var suburbia_query = new Query();
				
//vuma
				var vumagponl_queryTask = new QueryTask({ url: "https://services8.arcgis.com/TtfEhzNWkBKhyztb/arcgis/rest/services/VumaMasterCoverageGPONL/FeatureServer/1" });
				var vumagponl_query = new Query();
				
				var vumagponb_queryTask = new QueryTask({ url: "https://services8.arcgis.com/TtfEhzNWkBKhyztb/arcgis/rest/services/VumaMasterCoverageGPONB/FeatureServer/1" });
				var vumagponb_query = new Query();			
				
				var vumaael_queryTask = new QueryTask({ url: "https://services8.arcgis.com/TtfEhzNWkBKhyztb/arcgis/rest/services/VumaMasterCoverageAEL/FeatureServer/1" });
				var vumaael_query = new Query();				

				var vumaaeb_queryTask = new QueryTask({ url: "https://services8.arcgis.com/TtfEhzNWkBKhyztb/arcgis/rest/services/VumaMasterCoverageAEB/FeatureServer/1" });
				var vumaaeb_query = new Query();					
				
//vuma end				


//DNATel
				var dnatel_queryTask = new QueryTask({ url: "https://services8.arcgis.com/TtfEhzNWkBKhyztb/arcgis/rest/services/DNAtel_areas/FeatureServer/1" });
				var dnatel_query = new Query();
									
				
//DNATel end		

				var bchoa_queryTask = new QueryTask({ url: "https://services8.arcgis.com/TtfEhzNWkBKhyztb/arcgis/rest/services/BCHOA_2019/FeatureServer/0" });
				var bchoa_query = new Query();

				
				// var _dfa_buffer = "https://services8.arcgis.com/TtfEhzNWkBKhyztb/arcgis/rest/services/DFA_Buffer2019/FeatureServer/0";
				
				//var buf_queryTask = new QueryTask({ url: "https://services8.arcgis.com/TtfEhzNWkBKhyztb/arcgis/rest/services/DFA_Buffer2019/FeatureServer/0" });
				//var buf_query = new Query();


				
				var coverage_queryTask = new QueryTask({ url: "https://services8.arcgis.com/TtfEhzNWkBKhyztb/arcgis/rest/services/Residential_2019/FeatureServer/0" });
				
				
				var coverage_query = new Query();

				var coveragesdu_queryTask = new QueryTask({ url: "https://services8.arcgis.com/TtfEhzNWkBKhyztb/arcgis/rest/services/Residential_SDU_2019/FeatureServer/0" });
				var coveragesdu_query = new Query();

				var nocoverage_queryTask = new QueryTask({ url: "https://services8.arcgis.com/TtfEhzNWkBKhyztb/arcgis/rest/services/NoCoverage_2019/FeatureServer/0" });
				var nocoverage_query = new Query();


				var coverageb_queryTask = new QueryTask({ url: "https://services8.arcgis.com/TtfEhzNWkBKhyztb/arcgis/rest/services/SADV_BIZ_SITES_2019/FeatureServer/0" });
				var coverageb_query = new Query();
				
				
				var coverage_queryTask2 = new QueryTask({ url: "https://services8.arcgis.com/TtfEhzNWkBKhyztb/arcgis/rest/services/Residential_2_2019/FeatureServer/0" });
				var coverage_query2 = new Query();
				
				suburbia_query.returnGeometry = false;
				suburbia_query.geometry = event.mapPoint;
				suburbia_query.outFields = ["Name", "Open_Access", "Status", "Installation_Fee","Site_Account_ID"];
				
//vuma
				vumagponl_query.returnGeometry = false;
				vumagponl_query.geometry = event.mapPoint;
				vumagponl_query.outFields = ["Name"];
				
				vumagponb_query.returnGeometry = false;
				vumagponb_query.geometry = event.mapPoint;
				vumagponb_query.outFields = ["Name"];	

				vumaael_query.returnGeometry = false;
				vumaael_query.geometry = event.mapPoint;
				vumaael_query.outFields = ["Name"];		

				vumaaeb_query.returnGeometry = false;
				vumaaeb_query.geometry = event.mapPoint;
				vumaaeb_query.outFields = ["Name"];				
				
//vuma end		



//DNATel
				dnatel_query.returnGeometry = false;
				dnatel_query.geometry = event.mapPoint;
				dnatel_query.outFields = ["Name"];
								
				
//DNATel end			

				//buf_query.returnGeometry = false;
				//buf_query.geometry = event.mapPoint;
				//buf_query.outFields = ["Name"];
				
				
				coverage_query.returnGeometry = false;
				coverage_query.geometry = event.mapPoint;
				coverage_query.outFields = ["Name", "Open_Access", "Status", "Installation_Fee","Site_Account_ID"];
				
				coverage_query2.returnGeometry = false;
				coverage_query2.geometry = event.mapPoint;
				coverage_query2.outFields = ["Name", "Open_Access", "Status", "Installation_Fee","Site_Account_ID"];

				nocoverage_query.returnGeometry = false;
				nocoverage_query.geometry = event.mapPoint;
				nocoverage_query.outFields = ["Name"];
				
				bchoa_query.returnGeometry = false;
				bchoa_query.geometry = event.mapPoint;
				bchoa_query.outFields = ["Name"];
				

				coverageb_query.returnGeometry = false;
				coverageb_query.geometry = event.mapPoint;
				coverageb_query.outFields = ["Name", "Open_Access", "Status", "Installation_Fee","Site_Account_ID"];	
				
			
						var place_name=response.attributes.PlaceName;
						var street_number=response.attributes.AddNum;
						var street_name=response.attributes.Address.replace(response.attributes.AddNum + ' ', '');
						var district=response.attributes.District;
						var region=response.attributes.Region;
						var city=response.attributes.City;
						var postal_code=response.attributes.Postal;
									
		                var loc_arr = [place_name,street_number,street_name,district,region,city,postal_code,lon,lat];
						var loc_arr_str = loc_arr.join('##');		
			
				//var inside_layers=false;
				
				/*
				buf_queryTask.execute(buf_query).then(function(results)
				{
					inside_layers=true;
					console.log("Buffer");
					jQuery('#hdn_inside_layers').val('1');
					if (results.features.length > 0)
						var ResultsArray = arrayUtils.map(results.features, function(feature)
						{	
						var site_name=feature.attributes["Name"];
						var Site_Account_ID=feature.attributes["Site_Account_ID"];
						//var esri_res = JSON.stringify(results.features);
						//console.log("ESRI RESPONSE"+esri_res);								
								 var html='<ul style="font-size:12px"><li>Please check if your address/complex (as applicable) details are correct.</li><li>If correct, please choose your signup category from the drop down menu and click "Next".</li><li>•	If incorrect, please close this window and start the process again.</li></ul>';
								html +='<p>&nbsp;</p><div class="form-group"><select class="form-control" id="sel_category_ord" class="sel_category_ord" name="sel_category_ord"><option value="">Select Signup Category</option><option value="Business Signup">Business Signup</option><option  value="Residential Signup">Residential Signup</option><option value="Retail Signup">Retail Signup</option><option value="Body Corporate Online Contract">Body Corporate Online Contract</option><option value="Home Owners Association Contract">Home Owners Association Contract</option></select></div><br/>';

			html +="<p>"+response.address+"</p>" +
          "<p><span style=\"background:#9c6f18;color:#FFF; border:#9c6f18 solid 1px; padding:3px\" id=\"dyn_content\">Please select a category above, then click Next.</span><br /><br /><span style=\"text-align:right\"><input id=\"btn_order\" name=\"btn_order\" type=\"button\" class=\"btn btn-success\" value=\"Next\" onclick=\"open_form('"+loc_arr_str+"','Buffer','"+site_name+"','"+Site_Account_ID+"')\" /></span></P>";
								
								view.popup.content =html;							
						});
					else 
					{
						
					}
				
			});
				*/



				bchoa_queryTask.execute(bchoa_query).then(function(results)
				{
					console.log("BCHOA");
					
					inside_layers=true;
					jQuery('#hdn_inside_layers').val('1');
					if (results.features.length > 0)
						var ResultsArray = arrayUtils.map(results.features, function(feature)
						{	
						var site_name=feature.attributes["Name"];
					//	var Site_Account_ID=feature.attributes["Site_Account_ID"];	
					//	var esri_res = JSON.stringify(results.features);
					//	console.log("ESRI RESPONSE"+esri_res);							
								 var html='<ul style="font-size:12px"><li>Please check if your address/complex (as applicable) details are correct.</li><li>If correct, please choose your signup category from the drop down menu and click "Next"</li><li>•	If incorrect, please close this window and start the process again.</li></ul>';
								html +='<p>&nbsp;</p><div class="form-group"><select class="form-control" id="sel_category_ord" class="sel_category_ord" name="sel_category_ord"><option value="">Select Signup Category</option><option value="Body Corporate Online Contract">Body Corporate</option><option value="Home Owners Association Contract">Home Owners Association</option></select></div><br/>';
			
			
			html +="<p>"+response.address+"</p>";
			html +="<div class=\"row\" style=\"width:90%\"><div class=\"col-md-1 pull-left\"><button type=\"button\" class=\"btn btn-info\" onclick=\"open_form2('"+site_name+"')\">Detailed Site Status</button></div><div class=\"col-md-1 pull-right\"><button name=\"btn_order\" type=\"button\" class=\"btn btn-success\" onclick=\"open_form('"+loc_arr_str+"','BCHOA','"+site_name+"')\">Next</button></div></div>";
			
			
			/*html +="<p>"+response.address+"</p>" +
          "<p><span style=\"background:#9c6f18;color:#FFF; border:#9c6f18 solid 1px; padding:3px\" id=\"dyn_content\">Please select a category above, then click Next.</span><br /><br /><span style=\"text-align:right\"><input id=\"btn_order\" name=\"btn_order\" type=\"button\" value=\"Next\" class=\"btn btn-success\" onclick=\"open_form('"+loc_arr_str+"','Suburbia','"+site_name+"')\" /></span></P>";*/
								
								
								view.popup.content =html
						});
					else 
					{
						
					}
				
			});



				
				suburbia_queryTask.execute(suburbia_query).then(function(results)
				{
					console.log("Suburbia");
					
					inside_layers=true;
					jQuery('#hdn_inside_layers').val('1');
					if (results.features.length > 0)
						var ResultsArray = arrayUtils.map(results.features, function(feature)
						{	
						var site_name=feature.attributes["Name"];
						var Site_Account_ID=feature.attributes["Site_Account_ID"];	
					//	var esri_res = JSON.stringify(results.features);
					//	console.log("ESRI RESPONSE"+esri_res);							
								 var html='<ul style="font-size:12px"><li>Please check if your address/complex (as applicable) details are correct.</li><li>If correct, please choose your signup category from the drop down menu and click "Next"</li><li>•	If incorrect, please close this window and start the process again.</li></ul>';
								html +='<p>&nbsp;</p><div class="form-group"><select class="form-control" id="sel_category_ord" class="sel_category_ord" name="sel_category_ord"><option value="">Select Signup Category</option><option value="Business Signup">Business Signup</option><option  value="Residential Signup">Residential Signup</option><option value="Retail Signup">Retail Signup</option><option value="Body Corporate Online Contract">Body Corporate Online Contract</option><option value="Home Owners Association Contract">Home Owners Association Contract</option></select></div><br/>';
			
			
			html +="<p>"+response.address+"</p>";
			html +="<div class=\"row\" style=\"width:90%\"><div class=\"col-md-1 pull-left\"><button type=\"button\" class=\"btn btn-info\" onclick=\"open_form2('"+site_name+"','"+Site_Account_ID+"')\">Detailed Site Status</button></div><div class=\"col-md-1 pull-right\"><button name=\"btn_order\" type=\"button\" class=\"btn btn-success\" onclick=\"open_form('"+loc_arr_str+"','Suburbia','"+site_name+"','"+Site_Account_ID+"')\">Next</button></div></div>";
			
			
			/*html +="<p>"+response.address+"</p>" +
          "<p><span style=\"background:#9c6f18;color:#FFF; border:#9c6f18 solid 1px; padding:3px\" id=\"dyn_content\">Please select a category above, then click Next.</span><br /><br /><span style=\"text-align:right\"><input id=\"btn_order\" name=\"btn_order\" type=\"button\" value=\"Next\" class=\"btn btn-success\" onclick=\"open_form('"+loc_arr_str+"','Suburbia','"+site_name+"')\" /></span></P>";*/
								
								
								view.popup.content =html
						});
					else 
					{
						
					}
				
			});
			




//vuma

				vumagponl_queryTask.execute(vumagponl_query).then(function(results)
				{
					console.log("VumaGponLive");
					
					inside_layers=true;
					jQuery('#hdn_inside_layers').val('1');
					if (results.features.length > 0)
						var ResultsArray = arrayUtils.map(results.features, function(feature)
						{	
						var site_name=feature.attributes["Name"];
						var Site_Account_ID=feature.attributes["Site_Account_ID"];	
					//	var esri_res = JSON.stringify(results.features);
					//	console.log("ESRI RESPONSE"+esri_res);							
								 //var html='<ul style="font-size:12px"><li>Please check if your address/complex (as applicable) details are correct.</li><li>If incorrect, please close this window and start the process again.</li></ul>';
								 var html='<ul style="font-size:12px"><li>Congratulations! You have fibre coverage.</li><li>Please click to continue.</li></ul>';
								/*html +='<p>&nbsp;</p><div class="form-group"><select class="form-control" id="sel_category_ord" class="sel_category_ord" name="sel_category_ord"><option value="">Select Signup Category</option><option  value="Residential">Residential Signup</option></select></div><br/>';*/
			
			
			html +="<p>"+response.address+"</p>";
			html +="<div class=\"row\" style=\"width:90%\"><div class=\"col-md-1 pull-left\"></div><div class=\"col-md-1 pull-right\"><button name=\"btn_order\" type=\"button\" class=\"btn btn-success\" onclick=\"open_form('"+loc_arr_str+"','VumaGponLive','"+site_name+"','vumatelgpon01')\">Next</button></div></div>";
			
			
			/*html +="<p>"+response.address+"</p>" +
          "<p><span style=\"background:#9c6f18;color:#FFF; border:#9c6f18 solid 1px; padding:3px\" id=\"dyn_content\">Please select a category above, then click Next.</span><br /><br /><span style=\"text-align:right\"><input id=\"btn_order\" name=\"btn_order\" type=\"button\" value=\"Next\" class=\"btn btn-success\" onclick=\"open_form('"+loc_arr_str+"','Suburbia','"+site_name+"')\" /></span></P>";*/
								
								
								view.popup.content =html
						});
					else 
					{
						
					}
				
			});
			
			
			
			
			
				vumagponb_queryTask.execute(vumagponb_query).then(function(results)
				{
					console.log("VumaGponBuild");
					
					inside_layers=true;
					jQuery('#hdn_inside_layers').val('1');
					if (results.features.length > 0)
						var ResultsArray = arrayUtils.map(results.features, function(feature)
						{	
						var site_name=feature.attributes["Name"];
						var Site_Account_ID=feature.attributes["Site_Account_ID"];	
					//	var esri_res = JSON.stringify(results.features);
					//	console.log("ESRI RESPONSE"+esri_res);							
								 var html='<ul style="font-size:12px"><li>Please check if your address/complex (as applicable) details are correct.</li><li>If correct, please choose your signup category from the drop down menu and click "Next"</li><li>•	If incorrect, please close this window and start the process again.</li></ul>';
								 //var html='<ul style="font-size:12px"><li>Congratulations! You have fibre coverage.</li><li>Please click to continue.</li></ul>';
								/*html +='<p>&nbsp;</p><div class="form-group"><select class="form-control" id="sel_category_ord" class="sel_category_ord" name="sel_category_ord"><option value="">Select Signup Category</option><option value="Business Signup">Business Signup</option><option  value="Residential Signup">Residential Signup</option><option value="Retail Signup">Retail Signup</option><option value="Body Corporate Online Contract">Body Corporate Online Contract</option><option value="Home Owners Association Contract">Home Owners Association Contract</option></select></div><br/>';*/
			
			
			html +="<p>"+response.address+"</p>";
			html +="<div class=\"row\" style=\"width:90%\"><div class=\"col-md-1 pull-left\"><button type=\"button\" class=\"btn btn-info\" onclick=\"open_form2('"+site_name+"','"+Site_Account_ID+"')\">Detailed Site Status</button></div><div class=\"col-md-1 pull-right\"><button name=\"btn_order\" type=\"button\" class=\"btn btn-success\" onclick=\"open_form('"+loc_arr_str+"','VumaGponBuild','"+site_name+"','vumatelbuild01')\">Next</button></div></div>";
			
			
			/*html +="<p>"+response.address+"</p>" +
          "<p><span style=\"background:#9c6f18;color:#FFF; border:#9c6f18 solid 1px; padding:3px\" id=\"dyn_content\">Please select a category above, then click Next.</span><br /><br /><span style=\"text-align:right\"><input id=\"btn_order\" name=\"btn_order\" type=\"button\" value=\"Next\" class=\"btn btn-success\" onclick=\"open_form('"+loc_arr_str+"','Suburbia','"+site_name+"')\" /></span></P>";*/
								
								
								view.popup.content =html
						});
					else 
					{
						
					}
				
			});			
			
			
			
			
				vumaael_queryTask.execute(vumaael_query).then(function(results)
				{
					console.log("VumaAELive");
					
					inside_layers=true;
					jQuery('#hdn_inside_layers').val('1');
					if (results.features.length > 0)
						var ResultsArray = arrayUtils.map(results.features, function(feature)
						{	
						var site_name=feature.attributes["Name"];
						var Site_Account_ID=feature.attributes["Site_Account_ID"];	
					//	var esri_res = JSON.stringify(results.features);
					//	console.log("ESRI RESPONSE"+esri_res);							
								 //var html='<ul style="font-size:12px"><li>Please check if your address/complex (as applicable) details are correct.</li><li>If correct, please choose your signup category from the drop down menu and click "Next"</li><li>•	If incorrect, please close this window and start the process again.</li></ul>';
								 var html='<ul style="font-size:12px"><li>Congratulations! You have fibre coverage.</li><li>Please click to continue.</li></ul>';
								/*html +='<p>&nbsp;</p><div class="form-group"><select class="form-control" id="sel_category_ord" class="sel_category_ord" name="sel_category_ord"><option value="">Select Signup Category</option><option value="Business Signup">Business Signup</option><option  value="Residential Signup">Residential Signup</option><option value="Retail Signup">Retail Signup</option><option value="Body Corporate Online Contract">Body Corporate Online Contract</option><option value="Home Owners Association Contract">Home Owners Association Contract</option></select></div><br/>';*/
			
			
			html +="<p>"+response.address+"</p>";
			html +="<div class=\"row\" style=\"width:90%\"><div class=\"col-md-1 pull-left\"><button type=\"button\" class=\"btn btn-info\" onclick=\"open_form2('"+site_name+"','"+Site_Account_ID+"')\">Detailed Site Status</button></div><div class=\"col-md-1 pull-right\"><button name=\"btn_order\" type=\"button\" class=\"btn btn-success\" onclick=\"open_form('"+loc_arr_str+"','VumaAELive','"+site_name+"','vumatelae01')\">Next</button></div></div>";
			
			
			/*html +="<p>"+response.address+"</p>" +
          "<p><span style=\"background:#9c6f18;color:#FFF; border:#9c6f18 solid 1px; padding:3px\" id=\"dyn_content\">Please select a category above, then click Next.</span><br /><br /><span style=\"text-align:right\"><input id=\"btn_order\" name=\"btn_order\" type=\"button\" value=\"Next\" class=\"btn btn-success\" onclick=\"open_form('"+loc_arr_str+"','Suburbia','"+site_name+"')\" /></span></P>";*/
								
								
								view.popup.content =html
						});
					else 
					{
						
					}
				
			});					
			
			
				vumaaeb_queryTask.execute(vumaaeb_query).then(function(results)
				{
					console.log("VumaAEBuild");
					
					inside_layers=true;
					jQuery('#hdn_inside_layers').val('1');
					if (results.features.length > 0)
						var ResultsArray = arrayUtils.map(results.features, function(feature)
						{	
						var site_name=feature.attributes["Name"];
						var Site_Account_ID=feature.attributes["Site_Account_ID"];	
					//	var esri_res = JSON.stringify(results.features);
					//	console.log("ESRI RESPONSE"+esri_res);							
								 var html='<ul style="font-size:12px"><li>Please check if your address/complex (as applicable) details are correct.</li><li>If correct, please choose your signup category from the drop down menu and click "Next"</li><li>•	If incorrect, please close this window and start the process again.</li></ul>';
								/*html +='<p>&nbsp;</p><div class="form-group"><select class="form-control" id="sel_category_ord" class="sel_category_ord" name="sel_category_ord"><option value="">Select Signup Category</option><option value="Business Signup">Business Signup</option><option  value="Residential Signup">Residential Signup</option><option value="Retail Signup">Retail Signup</option><option value="Body Corporate Online Contract">Body Corporate Online Contract</option><option value="Home Owners Association Contract">Home Owners Association Contract</option></select></div><br/>';*/
			
			
			html +="<p>"+response.address+"</p>";
			html +="<div class=\"row\" style=\"width:90%\"><div class=\"col-md-1 pull-left\"><button type=\"button\" class=\"btn btn-info\" onclick=\"open_form2('"+site_name+"','"+Site_Account_ID+"')\">Detailed Site Status</button></div><div class=\"col-md-1 pull-right\"><button name=\"btn_order\" type=\"button\" class=\"btn btn-success\" onclick=\"open_form('"+loc_arr_str+"','VumaAEBuild','"+site_name+"','vumatelbuild01')\">Next</button></div></div>";
			
			
			/*html +="<p>"+response.address+"</p>" +
          "<p><span style=\"background:#9c6f18;color:#FFF; border:#9c6f18 solid 1px; padding:3px\" id=\"dyn_content\">Please select a category above, then click Next.</span><br /><br /><span style=\"text-align:right\"><input id=\"btn_order\" name=\"btn_order\" type=\"button\" value=\"Next\" class=\"btn btn-success\" onclick=\"open_form('"+loc_arr_str+"','Suburbia','"+site_name+"')\" /></span></P>";*/
								
								
								view.popup.content =html
						});
					else 
					{
						
					}
				
			});					
			
			
			

//vuma end			
			








//DNATel

				dnatel_queryTask.execute(dnatel_query).then(function(results)
				{
					console.log("DNATelLive");
					
					inside_layers=true;
					jQuery('#hdn_inside_layers').val('1');
					if (results.features.length > 0)
						var ResultsArray = arrayUtils.map(results.features, function(feature)
						{	
						var site_name=feature.attributes["Name"];
						var Site_Account_ID=feature.attributes["Site_Account_ID"];	
					//	var esri_res = JSON.stringify(results.features);
					//	console.log("ESRI RESPONSE"+esri_res);							
								 //var html='<ul style="font-size:12px"><li>Please check if your address/complex (as applicable) details are correct.</li><li>If incorrect, please close this window and start the process again.</li></ul>';
								 var html='<ul style="font-size:12px"><li>Congratulations! You have fibre coverage.</li><li>Please click to continue.</li></ul>';
								/*html +='<p>&nbsp;</p><div class="form-group"><select class="form-control" id="sel_category_ord" class="sel_category_ord" name="sel_category_ord"><option value="">Select Signup Category</option><option  value="Residential">Residential Signup</option></select></div><br/>';*/
			
			
			html +="<p>"+response.address+"</p>";
			html +="<div class=\"row\" style=\"width:90%\"><div class=\"col-md-1 pull-left\"></div><div class=\"col-md-1 pull-right\"><button name=\"btn_order\" type=\"button\" class=\"btn btn-success\" onclick=\"open_form('"+loc_arr_str+"','DNATelLive','"+site_name+"','dnatel01')\">Next</button></div></div>";
			
			
			/*html +="<p>"+response.address+"</p>" +
          "<p><span style=\"background:#9c6f18;color:#FFF; border:#9c6f18 solid 1px; padding:3px\" id=\"dyn_content\">Please select a category above, then click Next.</span><br /><br /><span style=\"text-align:right\"><input id=\"btn_order\" name=\"btn_order\" type=\"button\" value=\"Next\" class=\"btn btn-success\" onclick=\"open_form('"+loc_arr_str+"','Suburbia','"+site_name+"')\" /></span></P>";*/
								
								
								view.popup.content =html
						});
					else 
					{
						
					}
				
			});
				
				
			

//DNATel end			


			
			
			
			
				coveragesdu_queryTask.execute(coverage_query).then(function(results)
				{
					console.log("coveragesdu_queryTask");
					inside_layers=true;
					jQuery('#hdn_inside_layers').val('1');
					if (results.features.length > 0)
						var ResultsArray = arrayUtils.map(results.features, function(feature)
						{
							var site_name=feature.attributes["Name"];
							var Site_Account_ID=feature.attributes["Site_Account_ID"];
							//var esri_res = JSON.stringify(results.features);
						  //  console.log("ESRI RESPONSE"+esri_res);	
							 var hdn_wbstatus=jQuery('#hdn_wbstatus').val();
							 hdn_wbstatus_arr=hdn_wbstatus.split('##');
							 var site_statusval='';
							 for(var i=0;i<hdn_wbstatus_arr.length;i++)
							 {
								 var site_str=hdn_wbstatus_arr[i];
								 site_str_splt=site_str.split('@');
								 var sitename=site_str_splt[0];
								 var sitestatus=site_str_splt[1];
								 if(sitename==site_name)
								 { 
								   site_statusval=sitestatus!='' ? sitestatus : 'To be updated';
								   break;
								 }
							 }
							
								/*view.popup.content ="<p><strong>Site Name: "+site_name+"</strong></p>" + "<p>Build Status: "+site_statusval+"</p>" + "<p>"+response.address+" </p>" +
          "<ul><li><input name=\"btn_order\" type=\"button\" value=\"Next\" onclick=\"open_form('"+loc_arr_str+"','Residential','"+site_name+"')\" /></li></ul>";*/
		                     var html='<ul style="font-size:12px"><li>Please check if your address/complex (as applicable) details are correct.</li><li>If correct, please click "Next". If incorrect, please close this window and start the process again.</li></ul>';
		                   html +="<p><strong>Site Name: "+site_name+"</strong></p>" + "<p>Build Status: </p>" + "<p>"+response.address+" </p>";
			 html +="<div class=\"row\" style=\"width:90%\"><div class=\"col-md-1 pull-left\"><button type=\"button\" class=\"btn btn-info\" onclick=\"open_form2('"+site_name+"','"+Site_Account_ID+"')\">Detailed Site Status</button></div><div class=\"col-md-1 pull-right\"><button name=\"btn_order\" type=\"button\" class=\"btn btn-success\" onclick=\"open_form('"+loc_arr_str+"','Residential','"+site_name+"','"+Site_Account_ID+"')\">Next</button></div></div>";
			 view.popup.content=html;
		  
		  
						});
					else 
					{
						
					}
				
			});





				nocoverage_queryTask.execute(coverage_query).then(function(results)
				{
					console.log("nocoverage_queryTask");
					inside_layers=true;
					jQuery('#hdn_inside_layers').val('1');
					if (results.features.length > 0)
						var ResultsArray = arrayUtils.map(results.features, function(feature)
						{
							var site_name=feature.attributes["Name"];
							//var Site_Account_ID=feature.attributes["Site_Account_ID"];
							//var esri_res = JSON.stringify(results.features);
						  //  console.log("ESRI RESPONSE"+esri_res);	
							// var hdn_wbstatus=jQuery('#hdn_wbstatus').val();
							// hdn_wbstatus_arr=hdn_wbstatus.split('##');
						//	 var site_statusval='';
						//	 for(var i=0;i<hdn_wbstatus_arr.length;i++)
						//	 {
						//		 var site_str=hdn_wbstatus_arr[i];
						//		 site_str_splt=site_str.split('@');
						//		 var sitename=site_str_splt[0];
						//		 var sitestatus=site_str_splt[1];
						//		 if(sitename==site_name)
						//		 { 
						//		   site_statusval=sitestatus!='' ? sitestatus : 'To be updated';
						//		   break;
						//		 }
						//	 }
							
								/*view.popup.content ="<p><strong>Site Name: "+site_name+"</strong></p>" + "<p>Build Status: "+site_statusval+"</p>" + "<p>"+response.address+" </p>" +
          "<ul><li><input name=\"btn_order\" type=\"button\" value=\"Next\" onclick=\"open_form('"+loc_arr_str+"','Residential','"+site_name+"')\" /></li></ul>";*/
		                     var html='<ul style="font-size:12px"><li>Unfortunately we have no coverage here.</li></ul>';
		                 //  html +="<p><strong>Site Name: "+site_name+"</strong></p>" + "<p>Build Status: </p>" + "<p>"+response.address+" </p>";
			// html +="<div class=\"row\" style=\"width:90%\"><div class=\"col-md-1 pull-left\"><button type=\"button\" class=\"btn btn-info\" onclick=\"open_form2('"+site_name+"','"+Site_Account_ID+"')\">Detailed Site Status</button></div><div class=\"col-md-1 pull-right\"><button name=\"btn_order\" type=\"button\" class=\"btn btn-success\" onclick=\"open_form('"+loc_arr_str+"','Residential','"+site_name+"','"+Site_Account_ID+"')\">Next</button></div></div>";
			 view.popup.content=html;
		  
		  
						});
					else 
					{
						
					}
				
			});



				
			
				
				coverageb_queryTask.execute(coverageb_query).then(function(results)
				{
					console.log("coverageb_queryTask");
					inside_layers=true;
					jQuery('#hdn_inside_layers').val('1');
					if (results.features.length > 0)
						var ResultsArray = arrayUtils.map(results.features, function(feature)
						{
							var site_name=feature.attributes["Name"];
							var Site_Account_ID=feature.attributes["Site_Account_ID"];
							//var esri_res = JSON.stringify(results.features);
						//console.log("ESRI RESPONSE"+esri_res);	
							var hdn_wbstatus=jQuery('#hdn_wbstatus').val();
							 hdn_wbstatus_arr=hdn_wbstatus.split('##');
							 var site_statusval='';
							 for(var i=0;i<hdn_wbstatus_arr.length;i++)
							 {
								 var site_str=hdn_wbstatus_arr[i];
								 site_str_splt=site_str.split('@');
								 var sitename=site_str_splt[0];
								 var sitestatus=site_str_splt[1];
								 if(sitename==site_name)
								 { 
								   site_statusval=sitestatus!='' ? sitestatus : 'To be updated';
								   break;
								 }
							 }
							
								/* view.popup.content ="<p><strong>Site Name: "+site_name+"</strong></p>" + "<p>Build Status:"+site_statusval+" </p>" + "<p>"+response.address+"</p>" +
          "<ul><li><input name=\"btn_order\" type=\"button\" value=\"Next\" onclick=\"open_form('"+loc_arr_str+"','Business','"+site_name+"')\" /></li></ul>"; */
		          
				  var html='<ul style="font-size:12px"><li>Please check if your address/complex (as applicable) details are correct.</li><li>If correct, please click "Next". If incorrect, please close this window and start the process again.</li></ul>';
								
				  html +="<p><strong>Site Name: "+site_name+"</strong></p>" + "<p>Build Status: </p>" + "<p>"+response.address+" </p>";
			 html +="<div class=\"row\" style=\"width:90%\"><div class=\"col-md-1 pull-left\"><button type=\"button\" class=\"btn btn-info\" onclick=\"open_form2('"+site_name+"','"+Site_Account_ID+"')\">Detailed Site Status</button></div><div class=\"col-md-1 pull-right\"><button name=\"btn_order\" type=\"button\" class=\"btn btn-success\" onclick=\"open_form('"+loc_arr_str+"','Business','"+site_name+"','"+Site_Account_ID+"')\">Next</button></div></div>";
			 view.popup.content=html;
		  
		      
						});
					else
					{ 
					}
								
					
				});	
				coverage_queryTask2.execute(coverage_query2).then(function(results)
				{
					console.log("coverage_queryTask2");
					inside_layers=true;
					jQuery('#hdn_inside_layers').val('1');
					if (results.features.length > 0)
						var ResultsArray = arrayUtils.map(results.features, function(feature)
						{
							var site_name=feature.attributes["Name"];
							var Site_Account_ID=feature.attributes["Site_Account_ID"];
						//	var esri_res = JSON.stringify(results.features);
						//console.log("ESRI RESPONSE"+esri_res);	
							 var hdn_wbstatus=jQuery('#hdn_wbstatus').val();
							 hdn_wbstatus_arr=hdn_wbstatus.split('##');
							 var site_statusval='';
							 for(var i=0;i<hdn_wbstatus_arr.length;i++)
							 {
								 var site_str=hdn_wbstatus_arr[i];
								 site_str_splt=site_str.split('@');
								 var sitename=site_str_splt[0];
								 var sitestatus=site_str_splt[1];
								 if(sitename==site_name)
								 { 
								   site_statusval=sitestatus!='' ? sitestatus : 'To be updated';
								   break;
								 }
							 }
							
								/*view.popup.content ="<p><strong>Site Name: "+site_name+"</strong></p>" + "<p>Build Status: "+site_statusval+"</p>" + "<p>"+response.address+" </p>" +
          "<ul><li><input name=\"btn_order\" type=\"button\" value=\"Next\" onclick=\"open_form('"+loc_arr_str+"','Residential','"+site_name+"')\" /></li></ul>";*/
		 
		                    var html='<ul style="font-size:12px"><li>Please check if your address/complex (as applicable) details are correct.</li><li>If correct, please click "Next". If incorrect, please close this window and start the process again.</li></ul>';
		                   html +="<p><strong>Site Name: "+site_name+"</strong></p>" + "<p>Build Status: </p>" + "<p>"+response.address+" </p>";
			 html +="<div class=\"row\" style=\"width:90%\"><div class=\"col-md-1 pull-left\"><button type=\"button\" class=\"btn btn-info\" onclick=\"open_form2('"+site_name+"','"+Site_Account_ID+"')\">Detailed Site Status</button></div><div class=\"col-md-1 pull-right\"><button name=\"btn_order\" type=\"button\" class=\"btn btn-success\" onclick=\"open_form('"+loc_arr_str+"','Residential','"+site_name+"','"+Site_Account_ID+"')\">Next</button></div></div>";
			 view.popup.content=html;
		  
		  
						});
					else 
					{
						
					}
				
			});
				coverage_queryTask.execute(coverage_query).then(function(results)
				{
					console.log("coverage_queryTask");
					inside_layers=true;
					jQuery('#hdn_inside_layers').val('1');
					if (results.features.length > 0)
						var ResultsArray = arrayUtils.map(results.features, function(feature)
						{
							var site_name=feature.attributes["Name"];
							var Site_Account_ID=feature.attributes["Site_Account_ID"];
							//var esri_res = JSON.stringify(results.features);
							 var hdn_wbstatus=jQuery('#hdn_wbstatus').val();
							 hdn_wbstatus_arr=hdn_wbstatus.split('##');
							 var site_statusval='';
							 for(var i=0;i<hdn_wbstatus_arr.length;i++)
							 {
								 var site_str=hdn_wbstatus_arr[i];
								 site_str_splt=site_str.split('@');
								 var sitename=site_str_splt[0];
								 var sitestatus=site_str_splt[1];
								 if(sitename==site_name)
								 { 
								   site_statusval=sitestatus!='' ? sitestatus : 'To be updated';
								   break;
								 }
							 }
							
								/*view.popup.content ="<p><strong>Site Name: "+site_name+"</strong></p>" + "<p>Build Status: "+site_statusval+"</p>" + "<p>"+response.address+" </p>" +
          "<ul><li><input name=\"btn_order\" type=\"button\" value=\"Next\" onclick=\"open_form('"+loc_arr_str+"','Residential','"+site_name+"')\" /></li></ul>";*/
		 
		                    var html='<ul style="font-size:12px"><li>Please check if your address/complex (as applicable) details are correct.</li><li>If correct, please click "Next". If incorrect, please close this window and start the process again.</li></ul>';
		                   html +="<p><strong>Site Name: "+site_name+"</strong></p>" + "<p>Build Status: </p>" + "<p>"+response.address+" </p>";
			 html +="<div class=\"row\" style=\"width:90%\"><div class=\"col-md-1 pull-left\"><button type=\"button\" class=\"btn btn-info\" onclick=\"open_form2('"+site_name+"','"+Site_Account_ID+"')\">Detailed Site Status</button></div><div class=\"col-md-1 pull-right\"><button name=\"btn_order\" type=\"button\" class=\"btn btn-success\" onclick=\"open_form('"+loc_arr_str+"','Residential','"+site_name+"','"+Site_Account_ID+"')\">Next</button></div></div>";
			 view.popup.content=html;
		  
		  
						});
					else 
					{
						
					}
				
			});
			var hdn_inside_layers_val=jQuery('#hdn_inside_layers').val();
			//if(hdn_inside_layers_val=='0'){
			if(!inside_layers){
			//	view.popup.content ='<p><span style=\"text-align:right\"><input id=\"btn_order\" class=\"btn btn-info\" name=\"btn_order\" type=\"button\" value=\"Signup For Fibre\" /></span></P>';
			 var html ="<div class=\"col-md-1 pull-right\"><button name=\"btn_order\" type=\"button\" class=\"btn btn-success\" onclick=\"open_form3('"+loc_arr_str+"','Residential')\">Express Your Interest</button></div>";
			 view.popup.content=html;
		
			
			}
				console.log("not inside layer: ");	 		
				//Populate the form fields
				document.getElementById("place_name").value = response.attributes.PlaceName;
				document.getElementById("street_number").value = response.attributes.AddNum;
				document.getElementById("street_name").value = response.attributes.Address.replace(response.attributes.AddNum + ' ', '');
				document.getElementById("district").value = response.attributes.District;
				document.getElementById("region").value = response.attributes.Region;
				document.getElementById("city").value = response.attributes.City;
				document.getElementById("postal_code").value = response.attributes.Postal;
			}).otherwise(function(err) {
				//console.log("not inside layer: "+err);
				// If the promise fails and no result is found, show a generic message
				//view.popup.content = "We do not have coverage here yet." + "<p>Please scroll down and complete the fibre request form</p>";
				//view.popup.content ='<p><span style=\"text-align:right\"><input id=\"btn_order\" class=\"btn btn-info\" name=\"btn_order\" type=\"button\" value=\"Signup For Fibre\" /></span></P>';
				//$("#Onnet_Form").hide();
			});
		});
		
		/////////////////////// default location ////////////
		
		
		
		/////////////////////// default location ///////////
		
		
		
		
		var searchWidget = new Search({
			view: view
		});
		searchWidget.startup();

		// Add the search widget to the top left corner of the view
		view.ui.add(searchWidget, {
			position: "top-right",
			index: 0
		});	
		//searchWidget.startup();

		/* search.ui.add(searchWidget, {
			position: "top-left",
			index: 0
		}); */
		
		var gl = new GraphicsLayer();
		map.add(gl);
		
		var locateWidget = new Locate({
			view: view,   // Attaches the Locate button to the view
			graphicsLayer: gl  // The layer the locate graphic is assigned to
		});
		
		
		locateWidget.on("locate", dothat);  
        function dothat(evt){  
          circle = new Circle({  
            center: evt.graphic.geometry,  
            geodesic: true,  
            radius: 5,  
            radiusUnit: "esriMiles"  
          });
		  
		  
          map.graphics.clear();  
          map.infoWindow.hide();  
          var graphic = new Graphic(circle, circleSymb);  
          map.graphics.add(graphic);  
		  
		 
		 
  
          var query = new Query();  
          query.geometry = circle.getExtent();  
  
          featureLayer.queryFeatures(query, selectInBuffer);  
		  
		  
		  
		  
        };  
		
view.zoom = 16 
 var callback = function(){alert();}
setTimeout(function() {
      /*jQuery('.esri-icon-locate').trigger('click',function(){
		  });*/
	 
jQuery('.esri-icon-locate').trigger("click");

setTimeout(function() {
		  view.zoom = 16  
}, 5000);

	  
		  
}, 5000);

		view.ui.add(locateWidget, "top-left");
		
		searchWidget.on('select-result', function(event) 
		{
			view.popup.visible = false;
			var newPoint = new Point(event.result.extent.center.x,event.result.extent.center.y,event.result.extent.center.spatialReference);
			locatorTask.locationToAddress(newPoint).then(function(response) {
				
				view.popup.content=response.address+'<p>Click Here</p>';
				
				//Populate the form fields
				document.getElementById("place_name").value = response.attributes.PlaceName;
				document.getElementById("street_number").value = response.attributes.AddNum;
				document.getElementById("street_name").value = response.attributes.Address.replace(response.attributes.AddNum + ' ', '');
				document.getElementById("district").value = response.attributes.District;
				document.getElementById("region").value = response.attributes.Region;
				document.getElementById("city").value = response.attributes.City;
				document.getElementById("postal_code").value = response.attributes.Postal;

			});

		});
		view.popup.visible = false;
		
		
		
		
		
		
		
    }
)

function open_form(location,signup_type,site_name,site_account_id)  //place_name,street_number,street_name,district,region,city,postal_code
{
	if(signup_type=='Suburbia' || signup_type=='Buffer' | signup_type=='BCHOA'){
		var sel_category_ord=jQuery('#sel_category_ord').val();
		if(sel_category_ord==''){
			alert("Please select Category");
			return false;
		}
	}
	var location_splt=location.split('##');
	var place_name=location_splt[0];
	var street_number=location_splt[1];
	var street_name=location_splt[2];
	var district=location_splt[3];
	var region=location_splt[4];
	var city=location_splt[5];
	var postal_code=location_splt[6];
	var $modal = $('#load_popup_modal_show_id');
	if(signup_type=='Suburbia')
	{ 
	   if(sel_category_ord=='Business Signup'){
		    var modal_page='sub_biz.php';
			signup_type='Business';
	   }
	   else if(sel_category_ord=='Residential Signup'){
		    var modal_page='sub_res.php';
			signup_type='Residential';
	   }
	   
//vuma

	  /* else if(sel_category_ord=='Residential Signup'){
		    var modal_page='vuma_gpon.php';
			signup_type='VumaGponLive';
	   }
	   
	   else if(sel_category_ord=='Residential Signup'){
		    var modal_page='vuma_build.php';
			signup_type='VumaGponBuild';
	   }	   

	   else if(sel_category_ord=='Residential Signup'){
		    var modal_page='vuma_ae.php';
			signup_type='VumaAELive';
	   }
	   
	   else if(sel_category_ord=='Residential Signup'){
		    var modal_page='vuma_build.php';
			signup_type='VumaAEBuild';
	   }	*/

//vuma end	   
	   
	   else if(sel_category_ord=='Retail Signup'){
		    var modal_page='sub_ret.php';
			signup_type='Retail';
	   }
	   else if(sel_category_ord=='Body Corporate Online Contract'){
		    var modal_page='sub_bcoc.php';
			signup_type=sel_category_ord;
	   }
	   else if(sel_category_ord=='Home Owners Association Contract'){
		    var modal_page='sub_hoac.php';
			signup_type=sel_category_ord;
	   }
	}
	else if(signup_type=='BCHOA')
	{ 
	   if(sel_category_ord=='Home Owners Association Contract'){
		    var modal_page='sub_hoac.php';
			signup_type=sel_category_ord;
	   }
	   else if(sel_category_ord=='Body Corporate Online Contract'){
		    var modal_page='sub_bcoc.php';
			signup_type=sel_category_ord;
	   }
	}

	else if(signup_type=='Residential') var modal_page='res_signup.php';
	else if(signup_type=='Business') var modal_page='biz_signup.php';
	else if(signup_type=='Buffer') 
	{ 
	   if(sel_category_ord=='Business Signup'){
		    var modal_page='buff_biz.php';
			signup_type='Business';
	   }
	   else if(sel_category_ord=='Residential Signup'){
		    var modal_page='buff_res.php';
			signup_type='Residential';
	   }
	   else if(sel_category_ord=='Retail Signup'){
		    var modal_page='buff_ret.php';
			signup_type='Retail';
	   }
	   else if(sel_category_ord=='Body Corporate Online Contract'){
		    var modal_page='buff_bcoc.php';
			signup_type=sel_category_ord;
	   }
	   else if(sel_category_ord=='Home Owners Association Contract'){
		    var modal_page='buff_hoac.php';
			signup_type=sel_category_ord;
	   }
	}
	else if(signup_type=='Retail') var modal_page='ret_signup.php';
	///////////////////// Vivek For VUMA ////////////////////
	else if(signup_type=='VumaAEBuild' || signup_type=='VumaGponBuild') 
	{
		var modal_page='vuma_build.php';
		signup_type='Residential';
	}
	else if(signup_type=='VumaAELive') 
	{
		var modal_page='vuma_ae.php';
		signup_type='Residential';
	}
	else if(signup_type=='VumaGponLive') 
	{
		var modal_page='vuma_gpon.php';
		signup_type='Residential';
	}
	///////////////////// Vivek For VUMA ////////////////////
	
	
	
	
	
		///////////////////// Cobus For DNATEL ////////////////////

	else if(signup_type=='DNATelLive') 
	{
		var modal_page='dnatel.php';
		signup_type='Residential';
	}
	///////////////////// Cobus For DNATEL ////////////////////
	
	
	
	
	else  var modal_page='load-modal.php';
	console.log(modal_page+' >>>> '+signup_type);
	
	var latitude_val=jQuery('#hdn_latitude').val();
	var longitude_val=jQuery('#hdn_longitude').val();
	
	$modal.load(modal_page,{'place_name': place_name, 'street_number': street_number, 'street_name': street_name, 'district': district,'region': region,'city': city,'postal_code': postal_code ,'signup_type': signup_type,'site_name': site_name,'sel_category_ord':sel_category_ord,'latitude_val': latitude_val,'longitude_val': longitude_val,'site_account_id':site_account_id},
		function(){
		$modal.modal('show');
		});
}

function open_form2(site_name,site_account_id)
{
	var $modal = $('#load_popup_modal_show_id');
	var modal_page='site_status.php';
	$modal.load(modal_page,{'site_name': site_name,'site_account_id':site_account_id},
		function(){
		$modal.modal('show');
		});
}

function open_form3(location)
{
	
	var location_splt=location.split('##');
	var place_name=location_splt[0];
	var street_number=location_splt[1];
	var street_name=location_splt[2];
	var district=location_splt[3];
	var region=location_splt[4];
	var city=location_splt[5];
	var postal_code=location_splt[6];
	var lon=location_splt[7];
	var lat=location_splt[8];
	var $modal = $('#load_popup_modal_show_id');
	var modal_page='request_fibre.php';
	
	var latitude_val=jQuery('#hdn_latitude').val();
	var longitude_val=jQuery('#hdn_longitude').val();
	
	//var loc_arr = [place_name,street_number,street_name,district,region,city,postal_code,lon,lat];
	
	$modal.load(modal_page,{'place_name': place_name, 'street_number': street_number, 'street_name': street_name, 'district': district,'region': region,'city': city,'postal_code': postal_code ,'latitude_val': latitude_val,'longitude_val': longitude_val},
		function(){
		$modal.modal('show');
		});
}
///////////////////////////////////Vivek////////////////////////////////////

jQuery(document).ready(function() {
	$(document).on('change', '.sel_category_ord', function(e) {
		var category = jQuery(e.currentTarget).val();
		console.log(category+'>>>');
		if(category=='Body Corporate Online Contract' || category=='Home Owners Association Contract')
		jQuery('#btn_order').val("Submit");
		else
		jQuery('#btn_order').val("Next");
	
		jQuery('#dyn_content').html(category);
	});
})


function showPosition(position) {
  /*  x.innerHTML = "Latitude: " + position.coords.latitude + 
    "<br>Longitude: " + position.coords.longitude;*/
	jQuery('#hdn_latitude').val(position.coords.latitude);
	jQuery('#hdn_longitude').val(position.coords.longitude);
}
function getLocation() {
    if (navigator.geolocation) {
        navigator.geolocation.getCurrentPosition(showPosition);
    } else { 
        x.innerHTML = "Geolocation is not supported by this browser.";
    }
}
jQuery(document).ready(function() {
	//getLocation();
	
	$.when( getLocation() ).done(function() {
		setTimeout(function() {
    var latitude=jQuery('#hdn_latitude').val();
		var longitude=jQuery('#hdn_longitude').val();
	console.log("latitude : "+latitude+"   >>  longitude: "+longitude);
	   
	     var i = {latitude: latitude,longitude: longitude};
	jQuery.ajax({
        data: i,
        url: "get_user_location.php",
        type: "post",
        success: function(i) {
          console.log("current location : "+i);

		  jQuery('#mapsearch_input').val(i);
		  jQuery('#mapsearch_input').trigger('change');
		// jQuery('.esri-icon-locate').trigger('click');
		 //$('#viewDiv').scrollTop( $('#viewDiv').height() )
		//jQuery('.esri-icon-locate').trigger('click')
		//////////////////////////
		//jQuery('MapView').MapView.zoom = 13;
		//$("div[title|='Zoom Out']").trigger('click');
		
	
		
		///////////////////////////////
		  
		  
		  
        }
    })
	
	   
    }, 8000);
		
		
    });
	
	

	
	/*var i = {latitude: latitude,longitude: longitude};
	jQuery.ajax({
        data: i,
        url: "get_user_location.php",
        type: "post",
        success: function(i) {
          console.log("current location : "+i);
        }
    })
	*/
	
	
	
});

</script>-->
<!-- esri / crm -->
		
		
		
    </body>
</html>



<!--
<script>
$(document).ready(function(){
	///////////////////////////////////////////////// POST ORDER /////////////////////////////////////////////
	
	$("body").on("submit", ".contactForm", function(event) {
		 var currentElement = jQuery(event.currentTarget);
		 event.preventDefault();
		 

		 
		 
		 var name=jQuery('#name').val();
		 var surname = jQuery('#surname').val();
		 var email=jQuery('#email').val();
		 var number=jQuery('#number').val();
		 var address=jQuery('#address').val();
		 var sel_product=jQuery('#sel_product').val();
		 
		 
		 
		 var name=jQuery.trim(name);
		 var surname=jQuery.trim(surname);
		 var email=jQuery.trim(email);
		 var number=jQuery.trim(number);
		 var address=jQuery.trim(address);
		 var sel_product=jQuery.trim(sel_product);
		 
		 var file_data_res = jQuery('#idnum').prop('files')[0];
		 var exten = jQuery('#idnum').val().split('.').pop().toLowerCase();

		 
		 if(name==''){
			 alert("Firstname Cann't Be Blank");
			 jQuery('#name').focus();
			 return false;
		 }
		 else if(surname==''){
			 alert("Lastname Cann't Be Blank");
			 jQuery('#surname').focus();
			 return false;
		 }
		 else if(!isValidEmailAddress(email)){
			 alert( 'Email address ' + email + ' is not valid...' );
			 jQuery('#email').focus();
			 return false;
		 }
		 else if(number==''){
			 alert("Contactnumber Cann't Be Blank");
			 jQuery('#number').focus();
			 return false;
		 }
		else if(address==''){
			 alert("Address Cann't Be Blank");
			 jQuery('#address').focus();
			 return false;
		 }
		 else if(sel_product==''){
			 alert("Please select a Product");
			 jQuery('#sel_product').focus();
			 return false;
		 }
		 
		 else if (jQuery.inArray(exten, ['jpg', 'jpeg', 'pdf']) == -1) 
		 {
			alert("Invalid File");
			return false;
		 }
		 else
		 {
			 
			  if(confirm("You hereby confirm the supplied details are true and correct."))
				 {
					
					$.LoadingOverlay("show", {
					image       : "",
					text        : "Order being created. Please wait...."
					});
					
					var $form = $("#contactForm"),
					url = $form.attr( 'action' );
					var postdata=$form.serialize();
					// var form_data = new FormData();     
					// postdata.append('file_data_res', file_data_res);
					// postdata.append('file_data_biz', file_data_biz);
					 
					 var formData = new FormData($('#contactForm')[0]);
					 formData.append('file_data_res', file_data_res);
					
					 $.ajax({
							url: 'php/order_post.php',  
							type: 'POST',
							data: formData,
							dataType: 'json',
							success:function(data){
								$.LoadingOverlay("hide");
								var returnedData = data;
								var response_status=returnedData.response_status;
								var message=returnedData.message;
								
								if(response_status){
									$form[0].reset();
									var data=returnedData.data;
									var order_no=data[1];
									var potentialname=data[2];
									var mobile=data[3];
									var emailid=data[4];
									
									setTimeout(function(){
    $.LoadingOverlay("show", {
										image       : "",
										text        : "Order Created.Redirecting To Singing Page.Please Wait....."
									});
}, 1000);
							
							setTimeout(function(){
								window.location.href = 'https://na2.docusign.net/Member/PowerFormSigning.aspx?PowerFormId=179216cc-9b58-4e4b-820f-ce4ffbc1c872&env=na2&acct=bad7516a-5447-484c-a1f6-31d26d15e563&v=2&OrderNo='+order_no+'&name='+potentialname+'&number='+mobile+'&email='+emailid;
   
}, 2000);		
									
									
							
								}
								
								
							},
							cache: false,
							contentType: false,
							processData: false
					});
					 
				 }
			 
		 }
		
		 
		  
		 
		
		})
	
	///////////////////////////////////////////////// POST ORDER /////////////////////////////////////////////
	
	
	
	
	$('#gsearchsimple').keyup(function(){
		console
		var query = $('#gsearchsimple').val();
		$('#detail').html('');
		$('.list-group').css('display', 'block');
		
		if(query.length > 2)
		{
			console.log(query+' >>>>');
			$.ajax({
				url:"fetch.php",
				method:"POST",
				data:{query:query},
				success:function(data)
				{
					$('.list-group').html(data);
				}
			})
		}
		if(query.length == 0)
		{
			$('.list-group').css('display', 'none');
		}
	});

	$('#localSearchSimple').jsLocalSearch({
		action:"Show",
		html_search:true,

		mark_text:"marktext"
	});

	$(document).on('click', '.gsearch', function(){
		var email = $(this).text();
		var magickey=$(this).data('magickey');
		
		$('#gsearchsimple').val(email);
		$('.list-group').css('display', 'none');
		$.ajax({
			url:"fetch.php",
			method:"POST",
			data:{email:email,magickey:magickey},
			success:function(data)
			{
				var returnedData = JSON.parse(data);
				var lat=returnedData.lat;
				var lng=returnedData.lng;
				$('#hdn_lat').val(lat);
				$('#hdn_lng').val(lng);
			}
		})
	});
	
	$(document).on('click', '.btn_proceed', function(){
		var location = jQuery('#gsearchsimple').val();
		var hdn_lat=jQuery('#hdn_lat').val();
		var hdn_lng=jQuery('#hdn_lng').val();
		
	 //   var url='http://test.sadv.co.za/website/searchresult.php?search=true';
	    var url='http://test.sadv.co.za/Promo/searchresult.php?search=true';
		if(hdn_lat!="") url +='&latitude_val='+hdn_lat;
		if(hdn_lng!="") url +='&longitude_val='+hdn_lng;
		if(location!="") url +='&address='+location;
		window.location.href=url;
	});
	
	
	
});
function isValidEmailAddress(emailAddress) {
 var pattern = new RegExp(/^((([a-z]|\d|[!#\$%&'\*\+\-\/=\?\^_`{\|}~]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])+(\.([a-z]|\d|[!#\$%&'\*\+\-\/=\?\^_`{\|}~]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])+)*)|((\x22)((((\x20|\x09)*(\x0d\x0a))?(\x20|\x09)+)?(([\x01-\x08\x0b\x0c\x0e-\x1f\x7f]|\x21|[\x23-\x5b]|[\x5d-\x7e]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])|(\\([\x01-\x09\x0b\x0c\x0d-\x7f]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]))))*(((\x20|\x09)*(\x0d\x0a))?(\x20|\x09)+)?(\x22)))@((([a-z]|\d|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])|(([a-z]|\d|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])([a-z]|\d|-|\.|_|~|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])*([a-z]|\d|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])))\.)+(([a-z]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])|(([a-z]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])([a-z]|\d|-|\.|_|~|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])*([a-z]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])))\.?$/i);
 return pattern.test(emailAddress);
}

</script>-->