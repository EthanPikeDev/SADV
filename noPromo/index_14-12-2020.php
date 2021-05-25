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
		
		<!--
<style>
#sel_product{
	width:1000px !important;
}

#sel_product option{
	width:1000px !important;
}
</style>-->
		
		
<!-- Google Tag Manager -->
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-WNSQ3WD');</script>
<!-- End Google Tag Manager -->


<!-- Hotjar Tracking Code for https://signup.sadv.co.za/ -->
<script>
    (function(h,o,t,j,a,r){
        h.hj=h.hj||function(){(h.hj.q=h.hj.q||[]).push(arguments)};
        h._hjSettings={hjid:2133372,hjsv:6};
        a=o.getElementsByTagName('head')[0];
        r=o.createElement('script');r.async=1;
        r.src=t+h._hjSettings.hjid+j+h._hjSettings.hjsv;
        a.appendChild(r);
    })(window,document,'https://static.hotjar.com/c/hotjar-','.js?sv=');
</script>

		
		
    </head>
	

	

    <body>
	
<!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-WNSQ3WD"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->	

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
        <img src="assets/img/SADV_Banners.png" width="100%"/>
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
                    <p style="font-size:20px !important;">Choose between a lower monthly subscription or no upfront fees!
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
            		<h2>Check availability in your area</h2>
                    <p style="font-size:20px !important;">Click the button below to check availability</p>
                    <br>
                    <a href="#map1" class="btn btn-primary2">Check Availability on the Vumatel Network</a>
					<br><br><br>
					Or all other networks
					<br>
					<a href="https://signup.sadv.co.za/2/" target="_blank" class="btn btn-primary">Nelspruit Fibre</a>
					<a href="https://signup.sadv.co.za/2/" target="_blank" class="btn btn-primary">Serengeti Estate Fibre</a>	
					<a href="https://signup.sadv.co.za/2/" target="_blank" class="btn btn-primary">SADV Complexes</a>
            	</div>
            </div>
        </section>
        <!-- End Step 1 Area -->
		
		

        <!-- Start Map Area -->
        <!--<div id="map"></div>-->
        <!-- End Map Area -->
		
		
		
        <!-- Start Map Area -->
        <div id="map1">
		
			<!--<iframe src="https://signup.sadv.co.za/map.php" title="Coverage Map" width="100%" height="500" scrolling="no" seamless></iframe>-->
		    <div id="viewDiv" class="has-parallax" style="height:500px; width:90%; margin: 0;padding: 0;margin-right: auto;margin-left: auto;"></div>

		
		</div>
        <!-- End Map Area -->		
		

        <!-- Start Vuma Area -->
        <section>
            <div class="container" id="pickpackage">
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
            <div class="container" id="div_linespeed">
                <div class="section-title">
                	<span>Step 2 of 3</span>
                    <h2>View speed and plans</h2>
                </div>

                <!-- <div class="row"> -->
                	<div class="owl-carousel owl-theme">
					
					
									


		                <div class="item"> 
		                    <!-- <div class="col-lg-4 col-md-6 col-sm-6"> -->
		                        <div class="single-pricing-table">
		                            <div class="pricing-header">
		                                <div class="icon">
		                                    <i class="flaticon-wifi"></i>
		                                </div>

		                                <!--<span>Option 11</span>-->
		                                <h3>1000Mbps&#8595; / 100Mbps&#8593;</h3>
		                            </div>

		                            <div class="single-pricing-table-s">
		                           		<div class="pricing-header">

		                           			<span>No upfront fee package</span>
		                           			<br>
				                            <ul class="pricing-features-list">
				                               
				                                <li><i class="flaticon-check-mark"></i> No long term contract</li>
												<li><i class="flaticon-check-mark"></i> All package prices include data and line rental</li>
												
												<li> *Terms and conditions apply</li>
				                                
				                            </ul>
											

				                            <div class="price">
				                                <span>Fee</span>
				                                <!-- <span>R</span> -->
				                                R1495.00/pm
												<br>
												
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
				                                <li><i class="flaticon-check-mark"></i> No long term contract</li>
												<li><i class="flaticon-check-mark"></i> All package prices include data and line rental</li>
													
												<li> *Terms and conditions apply</li>
				                            </ul>

				                            <div class="price">
				                                <span>Fee</span>
				                                <!-- <span>R</span> -->
				                                R1495.00/pm
												<br>
												
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

		                                <!--<span>Option 10</span>-->
		                                <h3>200Mbps&#8595; / 200Mbps&#8593;</h3>
		                            </div>

		                           <div class="single-pricing-table-s">
		                           		<div class="pricing-header">

		                           			<span>No upfront fee package</span>
		                           			<br>
				                            <ul class="pricing-features-list">
				                               
				                                <li><i class="flaticon-check-mark"></i> No long term contract</li>
												<li><i class="flaticon-check-mark"></i> All package prices include data and line rental</li>
												
												<li> *Terms and conditions apply</li>
				                                
				                            </ul>

				                            <div class="price">
				                                <span>Fee</span>
				                                <!-- <span>R</span> -->
				                                R1485.00/pm
												<br>
												
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
				                                <li><i class="flaticon-check-mark"></i> No long term contract</li>
												<li><i class="flaticon-check-mark"></i> All package prices include data and line rental</li>
												
												<li> *Terms and conditions apply</li>
				                            </ul>

				                            <div class="price">
				                                <span>Fee</span>
				                                <!-- <span>R</span> -->
				                                R1395.00/pm
												<br>
												
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

		                                <!--<span>Option 9</span>-->
		                                <h3>200Mbps&#8595; / 20Mbps&#8593;</h3>
		                            </div>

		                            <div class="single-pricing-table-s">
		                           		<div class="pricing-header">

		                           			<span>No upfront fee package</span>
		                           			<br>
				                            <ul class="pricing-features-list">
				                               
				                                <li><i class="flaticon-check-mark"></i> No long term contract</li>
												<li><i class="flaticon-check-mark"></i> All package prices include data and line rental</li>
																								
				                                <li> *Terms and conditions apply</li>
				                            </ul>

				                            <div class="price">
				                                <span>Fee</span>
				                                <!-- <span>R</span> -->
				                                R1435.00/pm
												<br>
												
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
				                                <li><i class="flaticon-check-mark"></i> No long term contract</li>
												<li><i class="flaticon-check-mark"></i> All package prices include data and line rental</li>
													
												<li> *Terms and conditions apply</li>
				                            </ul>

				                            <div class="price">
				                                <span>Fee</span>
				                                <!-- <span>R</span> -->
				                                R1295.00/pm
												<br>
												
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

		                                <!--<span>Option 8</span>-->
		                                <h3>100Mbps&#8595; / 100Mbps&#8593;</h3>
		                            </div>

		                            <div class="single-pricing-table-s">
		                           		<div class="pricing-header">

		                           			<span>No upfront fee package</span>
		                           			<br>
				                            <ul class="pricing-features-list">
				                               
				                                <li><i class="flaticon-check-mark"></i> No long term contract</li>
												<li><i class="flaticon-check-mark"></i> All package prices include data and line rental</li>
													
												<li> *Terms and conditions apply</li>
				                                
				                            </ul>

				                            <div class="price">
				                                <span>Fee</span>
				                                <!-- <span>R</span> -->
				                                R1225.00/pm
												<br>
												
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
				                                <li><i class="flaticon-check-mark"></i> No long term contract</li>
												<li><i class="flaticon-check-mark"></i> All package prices include data and line rental</li>
													
												<li> *Terms and conditions apply</li>
				                            </ul>

				                            <div class="price">
				                                <span>Fee</span>
				                                <!-- <span>R</span> -->
				                                R1175.00/pm
												<br>
												
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

		                                <!--<span>Option 7</span>-->
		                                <h3>100Mbps&#8595; / 10Mbps&#8593;</h3>
		                            </div>

		                            <div class="single-pricing-table-s">
		                           		<div class="pricing-header">

		                           			<span>No upfront fee package</span>
		                           			<br>
				                            <ul class="pricing-features-list">
				                               
				                                <li><i class="flaticon-check-mark"></i> No long term contract</li>
												<li><i class="flaticon-check-mark"></i> All package prices include data and line rental</li>
												
												<li> *Terms and conditions apply</li>
				                                
				                            </ul>

				                            <div class="price">
				                                <span>Fee</span>
				                                <!-- <span>R</span> -->
				                                R1145.00/pm
												<br>
												
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
				                                <li><i class="flaticon-check-mark"></i> No long term contract</li>
												<li><i class="flaticon-check-mark"></i> All package prices include data and line rental</li>
												
												<li> *Terms and conditions apply</li>
				                            </ul>

				                            <div class="price">
				                                <span>Fee</span>
				                                <!-- <span>R</span> -->
				                                R1095.00/pm
												<br>
												
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

		                                <!--<span>Option 6</span>-->
		                                <h3>50Mbps&#8595; / 50Mbps&#8593;</h3>
		                            </div>

		                            <div class="single-pricing-table-s">
		                           		<div class="pricing-header">

		                           			<span>No upfront fee package</span>
		                           			<br>
				                            <ul class="pricing-features-list">
				                               
				                                <li><i class="flaticon-check-mark"></i> No long term contract</li>
												<li><i class="flaticon-check-mark"></i> All package prices include data and line rental</li>
													
												<li> *Terms and conditions apply</li>
				                                
				                            </ul>

				                            <div class="price">
				                                <span>Fee</span>
				                                <!-- <span>R</span> -->
				                                R1055.00/pm
												<br>
												
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
				                                <li><i class="flaticon-check-mark"></i> No long term contract</li>
												<li><i class="flaticon-check-mark"></i> All package prices include data and line rental</li>
												
												<li> *Terms and conditions apply</li>
				                            </ul>

				                            <div class="price">
				                                <span>Fee</span>
				                                <!-- <span>R</span> -->
				                                R985.00/pm
												<br>
												
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

		                                <!--<span>Option 5</span>-->
		                                <h3>50Mbps&#8595; / 5Mbps&#8593;</h3>
		                            </div>

		                            <div class="single-pricing-table-s">
		                           		<div class="pricing-header">

		                           			<span>No upfront fee package</span>
		                           			<br>
				                            <ul class="pricing-features-list">
				                               
				                                <li><i class="flaticon-check-mark"></i> No long term contract</li>
												<li><i class="flaticon-check-mark"></i> All package prices include data and line rental</li>
													
												<li> *Terms and conditions apply</li>
				                                
				                            </ul>

				                            <div class="price">
				                                <span>Fee</span>
				                                <!-- <span>R</span> -->
				                                R995.00/pm
												<br>
												
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
				                                <li><i class="flaticon-check-mark"></i> No long term contract</li>
												<li><i class="flaticon-check-mark"></i> All package prices include data and line rental</li>
													
												<li> *Terms and conditions apply</li>
				                            </ul>

				                            <div class="price">
				                                <span>Fee</span>
				                                <!-- <span>R</span> -->
				                                R935.00/pm
												<br>
												
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

		                                <!--<span>Option 4</span>-->
		                                <h3>20Mbps&#8595; / 20Mbps&#8593;</h3>
		                            </div>

		                            <div class="single-pricing-table-s">
		                           		<div class="pricing-header">

		                           			<span>No upfront fee package</span>
		                           			<br>
				                            <ul class="pricing-features-list">
				                               
				                                <li><i class="flaticon-check-mark"></i> No long term contract</li>
												<li><i class="flaticon-check-mark"></i> All package prices include data and line rental</li>
													
												<li> *Terms and conditions apply</li>
				                                
				                            </ul>

				                            <div class="price">
				                                <span>Fee</span>
				                                <!-- <span>R</span> -->
				                                R915.00/pm
												<br>
												
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
				                                <li><i class="flaticon-check-mark"></i> No long term contract</li>
												<li><i class="flaticon-check-mark"></i> All package prices include data and line rental</li>
												
												<li> *Terms and conditions apply</li>
				                            </ul>

				                            <div class="price">
				                                <span>Fee</span>
				                                <!-- <span>R</span> -->
				                                R845.00/pm
												<br>
												
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
		                   
		                        <div class="single-pricing-table">
		                            <div class="pricing-header">
		                                <div class="icon">
		                                    <i class="flaticon-wifi"></i>
		                                </div>

		                                <!--<span>Option 3</span>-->
		                                <h3>20Mbps&#8595; / 2Mbps&#8593;</h3>
		                            </div>

		                            <div class="single-pricing-table-s">
		                           		<div class="pricing-header">

		                           			<span>No upfront fee package</span>
		                           			<br>
				                            <ul class="pricing-features-list">
				                               
				                                <li><i class="flaticon-check-mark"></i> No long term contract</li>
												<li><i class="flaticon-check-mark"></i> All package prices include data and line rental</li>
														
												<li> *Terms and conditions apply</li>
				                                
				                            </ul>

				                            <div class="price">
				                                <span>Fee</span>
				                                <!-- <span>R</span> -->
				                                R845.00/pm
												<br>
												
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
				                                <li><i class="flaticon-check-mark"></i> No long term contract</li>
												<li><i class="flaticon-check-mark"></i> All package prices include data and line rental</li>
													
												<li> *Terms and conditions apply</li>
				                            </ul>

				                            <div class="price">
				                                <span>Fee</span>
				                                <!-- <span>R</span> -->
				                                R795.00/pm
												<br>
												
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
		                    
		                        <div class="single-pricing-table">
		                            <div class="pricing-header">
		                                <div class="icon">
		                                    <i class="flaticon-wifi"></i>
		                                </div>

		                                <!--<span>Option 2</span>-->
		                                <h3>10Mbps&#8595; / 10Mbps&#8593;</h3>
		                            </div>

		                            <div class="single-pricing-table-s">
		                           		<div class="pricing-header">

		                           			<span>No upfront fee package</span>
		                           			<br>
				                            <ul class="pricing-features-list">
				                               
				                                <li><i class="flaticon-check-mark"></i> No long term contract</li>
												<li><i class="flaticon-check-mark"></i> All package prices include data and line rental</li>
													
												<li> *Terms and conditions apply</li>
				                                
				                            </ul>

				                            <div class="price">
				                                <span>Fee</span>
				                               
				                                R755.00/pm
												<br>
												
				                               
				                            </div>
				                        </div>
				                    </div>

				                    <div class="single-pricing-table-sg">
		                           		<div class="pricing-header">
		       
		                           			<span>Lower Subscription Packages</span>
		                           			<br>
				                            <ul class="pricing-features-list">
				                                <li><i class="flaticon-check-mark"></i> R1390.00 Connection Fee</li>
				                                <li><i class="flaticon-check-mark"></i> No long term contract</li>
												<li><i class="flaticon-check-mark"></i> All package prices include data and line rental</li>
												
												<li> *Terms and conditions apply</li>
				                            </ul>

				                            <div class="price">
				                                <span>Fee</span>
				                             
				                                R695.00/pm
												<br>
												
				                               
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
		                                <!--<span>Option 1</span>-->
		                                <h3>10Mbps&#8595; / 2Mbps&#8593;</h3>
		                            </div>

		                            <div class="single-pricing-table-s">
		                           		<div class="pricing-header">

		                           			<span>No upfront fee package</span>
		                           			<br>
				                            <ul class="pricing-features-list">
				                               
				                                <li><i class="flaticon-check-mark"></i> No long term contract</li>
												<li><i class="flaticon-check-mark"></i> All package prices include data and line rental</li>
												
												<li> *Terms and conditions apply</li>
				                                
				                            </ul>

				                            <div class="price">
				                                <span>Fee</span>

				                                R695.00/pm
				                                <br>
												
				                            </div>
				                        </div>
				                    </div>

				                    <div class="single-pricing-table-sg">
		                           		<div class="pricing-header">
		       
		                           			<span>Lower Subscription Packages</span>
		                           			<br>
				                            <ul class="pricing-features-list">
				                                <li><i class="flaticon-check-mark"></i> R1875.00 Connection Fee</li>
				                                <li><i class="flaticon-check-mark"></i> No long term contract</li>
												<li><i class="flaticon-check-mark"></i> All package prices include data and line rental</li>
													
												<li> *Terms and conditions apply</li>
				                            </ul>

				                            <div class="price">
				                                <span>Fee</span>
				                                
				                                R625.00/pm
				                                <br>
												
				                            </div>
				                        </div>
				                    </div>

		                            <button class="view-plans-btn">View Plans</button>
                                    <!--<button class="view-plans-btn btn_plan" data-planval="access-res-unc-10-2">Select This Plan</button>-->

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

		                                <!--<span>Option 11</span>-->
		                                <h3>1000Mbps&#8595; / 100Mbps&#8593;</h3>
		                            </div>

		                            <div class="single-pricing-table-s">
		                           		<div class="pricing-header">

		                           			<span>No upfront fee package</span>
		                           			<br>
				                            <ul class="pricing-features-list">
				                               
				                                <li><i class="flaticon-check-mark"></i> No long term contract</li>
												<li><i class="flaticon-check-mark"></i> All package prices include data and line rental</li>
												
												<li> *Terms and conditions apply</li>
				                                
				                            </ul>
											

				                            <div class="price">
				                                <span>Fee</span>
				                                <!-- <span>R</span> -->
				                                R1495.00/pm
												<br>
												
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

		                                <!--<span>Option 10</span>-->
		                                <h3>200Mbps&#8595; / 200Mbps&#8593;</h3>
		                            </div>

		                           <div class="single-pricing-table-s">
		                           		<div class="pricing-header">

		                           			<span>No upfront fee package</span>
		                           			<br>
				                            <ul class="pricing-features-list">
				                               
				                                <li><i class="flaticon-check-mark"></i> No long term contract</li>
												<li><i class="flaticon-check-mark"></i> All package prices include data and line rental</li>
												
												<li> *Terms and conditions apply</li>
				                                
				                            </ul>

				                            <div class="price">
				                                <span>Fee</span>
				                                <!-- <span>R</span> -->
				                                R1395.00/pm
												<br>
												
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

		                                <!--<span>Option 9</span>-->
		                                <h3>200Mbps&#8595; / 20Mbps&#8593;</h3>
		                            </div>

		                            <div class="single-pricing-table-s">
		                           		<div class="pricing-header">

		                           			<span>No upfront fee package</span>
		                           			<br>
				                            <ul class="pricing-features-list">
				                               
				                                <li><i class="flaticon-check-mark"></i> No long term contract</li>
												<li><i class="flaticon-check-mark"></i> All package prices include data and line rental</li>
																								
				                                <li> *Terms and conditions apply</li>
				                            </ul>

				                            <div class="price">
				                                <span>Fee</span>
				                                <!-- <span>R</span> -->
				                                R1295.00/pm
												<br>
												
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

		                                <!--<span>Option 8</span>-->
		                                <h3>100Mbps&#8595; / 100Mbps&#8593;</h3>
		                            </div>

		                            <div class="single-pricing-table-s">
		                           		<div class="pricing-header">

		                           			<span>No upfront fee package</span>
		                           			<br>
				                            <ul class="pricing-features-list">
				                               
				                                <li><i class="flaticon-check-mark"></i> No long term contract</li>
												<li><i class="flaticon-check-mark"></i> All package prices include data and line rental</li>
													
												<li> *Terms and conditions apply</li>
				                                
				                            </ul>

				                            <div class="price">
				                                <span>Fee</span>
				                                <!-- <span>R</span> -->
				                                R1175.00/pm
												<br>
												
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

		                                <!--<span>Option 7</span>-->
		                                <h3>100Mbps&#8595; / 10Mbps&#8593;</h3>
		                            </div>

		                            <div class="single-pricing-table-s">
		                           		<div class="pricing-header">

		                           			<span>No upfront fee package</span>
		                           			<br>
				                            <ul class="pricing-features-list">
				                               
				                                <li><i class="flaticon-check-mark"></i> No long term contract</li>
												<li><i class="flaticon-check-mark"></i> All package prices include data and line rental</li>
												
												<li> *Terms and conditions apply</li>
				                                
				                            </ul>

				                            <div class="price">
				                                <span>Fee</span>
				                                <!-- <span>R</span> -->
				                                R1095.00/pm
												<br>
												
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

		                                <!--<span>Option 6</span>-->
		                                <h3>50Mbps&#8595; / 50Mbps&#8593;</h3>
		                            </div>

		                            <div class="single-pricing-table-s">
		                           		<div class="pricing-header">

		                           			<span>No upfront fee package</span>
		                           			<br>
				                            <ul class="pricing-features-list">
				                               
				                                <li><i class="flaticon-check-mark"></i> No long term contract</li>
												<li><i class="flaticon-check-mark"></i> All package prices include data and line rental</li>
													
												<li> *Terms and conditions apply</li>
				                                
				                            </ul>

				                            <div class="price">
				                                <span>Fee</span>
				                                <!-- <span>R</span> -->
				                                R985.00/pm
												<br>
												
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

		                                <!--<span>Option 5</span>-->
		                                <h3>50Mbps&#8595; / 5Mbps&#8593;</h3>
		                            </div>

		                            <div class="single-pricing-table-s">
		                           		<div class="pricing-header">

		                           			<span>No upfront fee package</span>
		                           			<br>
				                            <ul class="pricing-features-list">
				                               
				                                <li><i class="flaticon-check-mark"></i> No long term contract</li>
												<li><i class="flaticon-check-mark"></i> All package prices include data and line rental</li>
													
												<li> *Terms and conditions apply</li>
				                                
				                            </ul>

				                            <div class="price">
				                                <span>Fee</span>
				                                <!-- <span>R</span> -->
				                                R935.00/pm
												<br>
												
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

		                                <!--<span>Option 4</span>-->
		                                <h3>20Mbps&#8595; / 20Mbps&#8593;</h3>
		                            </div>

		                            <div class="single-pricing-table-s">
		                           		<div class="pricing-header">

		                           			<span>No upfront fee package</span>
		                           			<br>
				                            <ul class="pricing-features-list">
				                               
				                                <li><i class="flaticon-check-mark"></i> No long term contract</li>
												<li><i class="flaticon-check-mark"></i> All package prices include data and line rental</li>
													
												<li> *Terms and conditions apply</li>
				                                
				                            </ul>

				                            <div class="price">
				                                <span>Fee</span>
				                                <!-- <span>R</span> -->
				                                R845.00/pm
												<br>
												
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
		                   
		                        <div class="single-pricing-table">
		                            <div class="pricing-header">
		                                <div class="icon">
		                                    <i class="flaticon-wifi"></i>
		                                </div>

		                                <!--<span>Option 3</span>-->
		                                <h3>20Mbps&#8595; / 2Mbps&#8593;</h3>
		                            </div>

		                            <div class="single-pricing-table-s">
		                           		<div class="pricing-header">

		                           			<span>No upfront fee package</span>
		                           			<br>
				                            <ul class="pricing-features-list">
				                               
				                                <li><i class="flaticon-check-mark"></i> No long term contract</li>
												<li><i class="flaticon-check-mark"></i> All package prices include data and line rental</li>
														
												<li> *Terms and conditions apply</li>
				                                
				                            </ul>

				                            <div class="price">
				                                <span>Fee</span>
				                                <!-- <span>R</span> -->
				                                R795.00/pm
												<br>
												
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
		                    
		                        <div class="single-pricing-table">
		                            <div class="pricing-header">
		                                <div class="icon">
		                                    <i class="flaticon-wifi"></i>
		                                </div>

		                                <!--<span>Option 2</span>-->
		                                <h3>10Mbps&#8595; / 10Mbps&#8593;</h3>
		                            </div>

		                            <div class="single-pricing-table-s">
		                           		<div class="pricing-header">

		                           			<span>No upfront fee package</span>
		                           			<br>
				                            <ul class="pricing-features-list">
				                               
				                                <li><i class="flaticon-check-mark"></i> No long term contract</li>
												<li><i class="flaticon-check-mark"></i> All package prices include data and line rental</li>
													
												<li> *Terms and conditions apply</li>
				                                
				                            </ul>

				                            <div class="price">
				                                <span>Fee</span>
				                               
				                                R695.00/pm
												<br>
												
				                               
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
		                                <!--<span>Option 1</span>-->
		                                <h3>10Mbps&#8595; / 2Mbps&#8593;</h3>
		                            </div>

		                            <div class="single-pricing-table-s">
		                           		<div class="pricing-header">

		                           			<span>No upfront fee package</span>
		                           			<br>
				                            <ul class="pricing-features-list">
				                               
				                                <li><i class="flaticon-check-mark"></i> No long term contract</li>
												<li><i class="flaticon-check-mark"></i> All package prices include data and line rental</li>
												
												<li> *Terms and conditions apply</li>
				                                
				                            </ul>

				                            <div class="price">
				                                <span>Fee</span>

				                                R625.00/pm
				                                <br>
												
				                            </div>
				                        </div>
				                    </div>



		                            <button class="view-plans-btn">View Plans</button>
                                    <!--<button class="view-plans-btn btn_plan" data-planval="access-res-unc-10-2">Select This Plan</button>-->

		                            <div class="image-box">
		                                <img src="assets/img/shape-image/2.png" alt="image">
		                                <img src="assets/img/shape-image/2.png" alt="image">
		                            </div>
		                        </div>
		                    <!-- </div> -->
		                </div>












						
						
		            </div>
					<!--
					<p>
					* DSL Promotion Promotion is only available for new fibre signups (no existing installations)
					<br>
					
					</p>-->
		        <!-- </div> -->
        </section>

        <!-- Start Contact Area -->

        <section class="contact-info-box-area ptb-100">
            <div class="container signupform">
                <div class="section-title">
                	<span>Step 3 of 3</span>
                    <h2>Signup for a package today</h2>
                    <p style="font-size:20px !important;">Fill in your details below and we will do the rest</p>
                </div>

                <!--<form id="contactForm" id="frm_order">-->
				<form id="contactForm" method="post" action="php/order_post.php" class="frm_order" name="form5" enctype="multipart/form-data">
                <input name="hdn_site_Acc_id" id="hdn_site_Acc_id" type="hidden" value="">
                    <div class="row">
                        <input name="promocode" id="promocode" type="hidden" value="VumaPromo1">
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
                                <input type="text" class="form-control" name="id_number" placeholder="ID Number / Passport Number" id="id_number" required data-error="Please enter your ID number / Passport number">
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
						
						<!--
						<div class="col-lg-12 col-md-12">
	                        <div class="section-title-form">
	                    		<a href="#pickpackage" class="btn btn-primary">Choose a product</a>
	                    	</div>
                      	</div>	-->
						
						<!--
						<div class="col-lg-6 col-md-6">
	                        <div class="section-title-form">
							
							<a href="#pickpackage" class="btn btn-primary">Choose a product</a>

	                    	</div>
                      	</div>		-->					
						
						
						<div class="col-lg-12 col-md-12">
	                        <div class="section-title-form">
							
	    						<select class="form-control" id="sel_product" name="sel_product">
			    					<option>Please select a product</option>
									
								</select>
                                <small id="Help" class="form-text text-muted">If no products are displaying then you have not completed Step 1</small>
	                    	</div>
                      	</div>						
						
			
						

						
						
						<div class="col-4">
						<br>
                            <div class="form-group">
                                <input readonly type="text" class="form-control" name="provider" placeholder="Provider: Vumatel" id="provider" value="Provider: Vumatel" required data-error="Please enter your Address">
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
	                    		<h4>Delivery Details</h4>
	                    	</div>
                      	</div>					

                        <div class="col-12">
                            <div class="form-group">
                                <input type="text" class="form-control" name="del_address" placeholder="Delivery Address" id="del_address" required data-error="Please enter your delivery Address">
                                <div class="help-block with-errors"></div>
                            </div>
                        </div>				

                        <div class="col-12">
                            <div class="form-group">
                                <input type="text" class="form-control" name="del_contact_no" placeholder="Delivery Contact Number" id="del_contact_no" required data-error="Delivery contact number">
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
  								<input class="form-check-input" type="radio" name="account_type" id="inlineRadio1" value="Transmission">
  								<label class="form-check-label" for="inlineRadio1">Transmisssion</label>
							</div>
							<div class="form-check form-check-inline">
  								<input class="form-check-input" type="radio" name="account_type" id="inlineRadio2" value="Savings">
  								<label class="form-check-label" for="inlineRadio2">Savings</label>
							</div>
							<div class="form-check form-check-inline">
  								<input class="form-check-input" type="radio" name="account_type" id="inlineRadio2" value="Cheque">
  								<label class="form-check-label" for="inlineRadio2">Cheque</label>
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
						<!--
                        <div class="col-4">
                            <div class="form-group">
                                <input type="text" class="form-control" placeholder="Account Name" name="acc_name" id="acc_name">
                                <div class="help-block with-errors"></div>
                            </div>
                        </div>						-->
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
	                        <div class="section-title-form">
							<p style="font-size:20px !important;"><input type="checkbox" id="tnc" name="tnc" value="tnc" required data-error="Please agree to the terms and conditions">
							<label for="tnc"><a href="https://www.sadv.co.za/legal/home-fibre-terms-and-conditions/" target="_blank">&nbsp;&nbsp;&nbsp;I agree to SADV's Home Fibre Terms and Conditions</a></label>
	                    		<!--<a href="https://www.sadv.co.za/legal/home-fibre-terms-and-conditions/" target="_blank">I agree to SADV's Home Fibre Terms and Conditions</a>--></p>
	                    	</div>
								                        <!--<div class="section-title-form">
							<p><input type="checkbox" id="tnc" name="tnc" value="tnc">
	                    		<a href="https://www.sadv.co.za/legal/home-fibre-terms-and-conditions/" target="_blank">I agree to SADV's Home Fibre Terms and Conditions</a></p>
	                    	</div>-->
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
        

<script src="https://ajax.aspnetcdn.com/ajax/jQuery/jquery-3.4.1.min.js"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
        	<link rel="stylesheet" href="https://js.arcgis.com/4.4/esri/css/main.css">

        <style>
		.esri-popup__main-container{max-height:350px !important;}
		</style>

        <!-- jQuery Min JS -->
        <script src="assets/js/jquery.min.js"></script>
        <!-- Popper Min JS -->
        <script src="assets/js/popper.min.js"></script>
        <!-- View More JS -->
        <!--<script src="assets/js/viewMore.js"></script>-->
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
       
        <!-- Bahama Map JS -->
        <!--<script src="assets/js/bahama-map.js"></script>-->
        <!-- Map API JS FILES -->
        <!--<script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyApghCIIx9MpQhA768sKXxvR_Okg0SF2k4&callback=initMap"></script>-->
        <!-- Bahama Map JS -->
        <!--<script src="assets/js/bahama-map.js"></script>-->
        <!-- Main JS -->
        <script src="assets/js/main.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/gasparesganga-jquery-loading-overlay@2.1.6/dist/loadingoverlay.min.js"></script>

        	<link rel="stylesheet" href="https://js.arcgis.com/4.4/esri/css/main.css">
	<script src="js/vk_esri.js"></script> 
		
		
		
<script>
$(window).load(function() {
	/*$("body").on("click", ".view-plans-btn-dummy", function(event) {
		alert("dede");	
	 $(".single-pricing-table-s,.single-pricing-table-sg").toggle(300);
	});
	$("body").on("click", ".view-plans-btn-dummy", function(event) {	
	  $("p").show(500);
	});*/
})
jQuery(document).ready(function() {
	$( "input:radio[name=inlineRadioOptions]").on( "change", function() {
         if($(this).val()=='option1'){
			 var address=jQuery('#address').val();
			 jQuery('#installation_address').val(address);
			 jQuery('#installation_address').prop("readonly", true);
		 }
		 else{
			 jQuery('#installation_address').val('');
			 jQuery('#installation_address').prop("readonly", false);

		 }
		 
    });
	$("body").on("click", ".btn_plan", function(event) {	
	//jQuery('.btn_plan').on('click',function(event){
		 var currentElement = jQuery(event.currentTarget);
		 var planval=currentElement.data('planval');
		$("#sel_product").val(planval);
		 $("#sel_product").niceSelect('update');
		/* $('html,body').animate({
        scrollTop: $(".signupform").offset(500).top},
        'slow');*/
	});
	$("body").on("click", ".view-plans-btn", function(event) {	
	 $(".single-pricing-table-s,.single-pricing-table-sg").toggle(300);
	});
	$("body").on("click", ".view-plans-btn1", function(event) {	
	  $("p").show(500);
	});
	
	
	//jQuery('.scroll_next').on('click', function(event) {
	$("body").on("click", ".scroll_next", function(event) {	
		 $.LoadingOverlay("show");
		////////////////////////  Ajax /////////////////////////////
		 var currentElement = jQuery(event.currentTarget);
		 var site_acc_id=currentElement.data('site_acc_id');
		//Calling Ajax
		    var i = {site_acc_id: site_acc_id };
			jQuery.ajax({
        data: i,
        url: "get_products_to_wbsrc.php",
        type: "post",
        success: function(i) {
           var response = JSON.parse(i);
		   var status=response.status;
		   var res=response.return_data;
		   var product_html=res.product_html;
		   var product_arr=res.parr;
		   
		   jQuery('.owl-carousel').html('').trigger("destroy.owl.carousel");
		   jQuery('.owl-carousel').html(product_html).trigger("destroy.owl.carousel").owlCarousel({
    // Here goes default configs
    responsive : {
      // breakpoint from 0 up
      0 : {
        stagePadding: 0,
        loop: false,
        responsiveClass: true,
        dots: false,
        nav: true,
        autoHeight: true,
        items: 1
      },
      // breakpoint from 768 up
      768 : {
        items: 3
      }
    }
  });
		   
		   var html='';
		   html +='<option value="">--Please select a package--</option>';
		   $.each(product_arr, function (key, val) {
           		 html +='<option value="'+key+'">'+val+'</option>';
    		});
			
			 jQuery('#sel_product').append(html);
			 $("#sel_product").niceSelect('update');
			  $.LoadingOverlay("hide");
        }
    })
		//Calling Ajax
		////////////////////////  Ajax /////////////////////////////
		
		

   /* // Make sure this.hash has a value before overriding default behavior
    if (this.hash !== "") {
      // Prevent default anchor click behavior
      event.preventDefault();

      // Store hash
      var hash = this.hash;

      // Using jQuery's animate() method to add smooth page scroll
      // The optional number (800) specifies the number of milliseconds it takes to scroll to the specified area
      $('html, body').animate({
        scrollTop: $(hash).offset().top
      }, 800, function(){
   
        // Add hash (#) to URL when done scrolling (default click behavior)
        window.location.hash = hash;
      });
    } // End if*/
  });
  
  
  ///////////////////////////////////////////////// POST ORDER /////////////////////////////////////////////
	
	$("body").on("submit", ".frm_order", function(event) {
		 var currentElement = jQuery(event.currentTarget);
		 event.preventDefault();
		 

		 
		 
		 var name=jQuery('#name').val();
		 var surname = jQuery('#surname').val();
		 var number=jQuery('#number').val();
		 var id_number=jQuery('#id_number').val();
		 var email=jQuery('#email').val();
		 var address=jQuery('#address').val();
		 var installation_address=jQuery('#installation_address').val();
		 var sel_product=jQuery('#sel_product').val();
		 var provider=jQuery('#provider').val();
		 var delivery_instructions=jQuery('#delivery_instructions').val();
		 var account_number=jQuery('#account_number').val();
		 var account_type=jQuery('#account_type').val();
		 var bank=jQuery('#bank').val();
		 var branch=jQuery('#branch').val();
		 var branch_code=jQuery('#branch_code').val();
		 
		 
		 
		 var name=jQuery.trim(name);
		 var surname=jQuery.trim(surname);
		 var number=jQuery.trim(number);
		 var id_number=jQuery.trim(id_number);
		 var email=jQuery.trim(email);
		 var address=jQuery.trim(address);
		 var installation_address=jQuery.trim(installation_address);
		 var sel_product=jQuery.trim(sel_product);
		 var provider=jQuery.trim(provider);
		 var delivery_instructions=jQuery.trim(delivery_instructions);
		 var account_number=jQuery.trim(account_number);
		 var account_type=jQuery.trim(account_type);
		 var bank=jQuery.trim(bank);
		 var branch=jQuery.trim(branch);
		 var branch_code=jQuery.trim(branch_code);
		 
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
		 else if(number==''){
			 alert("Phonenumber Cann't Be Blank");
			 jQuery('#number').focus();
			 return false;
		 }
		 else if(id_number==''){
			 alert("ID Number Cann't Be Blank");
			 jQuery('#id_number').focus();
			 return false;
		 }
		 else if(!isValidEmailAddress(email)){
			 alert( 'Email address ' + email + ' is not valid...' );
			 jQuery('#email').focus();
			 return false;
		 }
		 else if(address==''){
			 alert("Please enter the Address");
			 jQuery('#address').focus();
			 return false;
		 }
		else if(installation_address==''){
			 alert("Please enter teh Installation Address");
			 jQuery('#installation_address').focus();
			 return false;
		 }
		 else if(sel_product==''){
			 alert("Please select a Product");
			 jQuery('#sel_product').focus();
			 return false;
		 }
		 else if(provider==''){
			 alert("Provider Cannot Be Blank");
			 jQuery('#provider').focus();
			 return false;
		 }
		 else if(delivery_instructions==''){
			 alert("Please provide delivery instructions");
			 jQuery('#delivery_instructions').focus();
			 return false;
		 }
		 else if(account_number==''){
			 alert("Please enter your Account Number");
			 jQuery('#account_number').focus();
			 return false;
		 }
		  else if(!$("input[name='account_type']:checked").val()){
			 alert("Please select the Account Type");
			 jQuery('#account_type').focus();
			 return false;
		 }
		 else if(bank==''){
			 alert("Please enter the Bank Name");
			 jQuery('#bank').focus();
			 return false;
		 }
		 else if(branch==''){
			 alert("Please enter the Branch Name");
			 jQuery('#branch').focus();
			 return false;
		 }
		 else if(branch_code==''){
			 alert("Please enter the Branch Code");
			 jQuery('#branch_code').focus();
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
					text        : "Please wait while we create your order...."
					});
					
					var $form = $("#contactForm"),
					url = $form.attr( 'action' );
					var postdata=$form.serialize();
					// var form_data = new FormData();     
					// postdata.append('file_data_res', file_data_res);
					// postdata.append('file_data_biz', file_data_biz);
					 
					 var formData = new FormData($('#contactForm')[0]);
					 formData.append('file_data_res', file_data_res);
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
									var id_number=data[5];
									var address=data[6];
									var productcode=data[7];
									var accountno=data[8];
									var account_type=data[9];
									var bank=data[10];
									var branch=data[11];
									var branchcode=data[12];
									var productname=data[13];
									var acc_name=data[14];
									
									var order_no = encodeURIComponent(order_no);
									var potentialname = encodeURIComponent(potentialname);
									var mobile = encodeURIComponent(mobile);
									var emailid = encodeURIComponent(emailid);
									var id_number = encodeURIComponent(id_number);
									var address = encodeURIComponent(address);
									var productcode = encodeURIComponent(productcode);
									var accountno = encodeURIComponent(accountno);
									var account_type = encodeURIComponent(account_type);
									var bank = encodeURIComponent(bank);
									var branch = encodeURIComponent(branch);
									var branchcode = encodeURIComponent(branchcode);
									var productname = encodeURIComponent(productname);
									var acc_name = encodeURIComponent(acc_name);
									
									setTimeout(function(){
    $.LoadingOverlay("show", {
										image       : "",
										text        : "Order Created. Please wait to be directed to the the contract for your digital signature....."
									});
}, 1000);
							
							setTimeout(function(){
								window.location.href = 'https://na2.docusign.net/Member/PowerFormSigning.aspx?PowerFormId=cc3b595b-6690-4665-8a63-403ed18400f8&env=na2&acct=bad7516a-5447-484c-a1f6-31d26d15e563&v=2&OrderNo='+order_no+'&name='+potentialname+'&number='+mobile+'&email='+emailid+'&idnumber='+id_number+'&customer address line 1='+address+'&desired_package='+productname+'&account number='+accountno+'&Drop Down 33='+account_type+'&bank='+bank+'&branch name='+branch+'&branch number='+branchcode+'&Product_SKU='+productcode+'&account name='+acc_name;
   
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
  
  
});

function isValidEmailAddress(emailAddress) {
 var pattern = new RegExp(/^((([a-z]|\d|[!#\$%&'\*\+\-\/=\?\^_`{\|}~]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])+(\.([a-z]|\d|[!#\$%&'\*\+\-\/=\?\^_`{\|}~]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])+)*)|((\x22)((((\x20|\x09)*(\x0d\x0a))?(\x20|\x09)+)?(([\x01-\x08\x0b\x0c\x0e-\x1f\x7f]|\x21|[\x23-\x5b]|[\x5d-\x7e]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])|(\\([\x01-\x09\x0b\x0c\x0d-\x7f]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]))))*(((\x20|\x09)*(\x0d\x0a))?(\x20|\x09)+)?(\x22)))@((([a-z]|\d|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])|(([a-z]|\d|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])([a-z]|\d|-|\.|_|~|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])*([a-z]|\d|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])))\.)+(([a-z]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])|(([a-z]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])([a-z]|\d|-|\.|_|~|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])*([a-z]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])))\.?$/i);
 return pattern.test(emailAddress);
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
		var _vuma_ae_adsl = "https://services8.arcgis.com/TtfEhzNWkBKhyztb/arcgis/rest/services/ADSL_AE/FeatureServer/1";
		var _vuma_gpon_adsl = "https://services8.arcgis.com/TtfEhzNWkBKhyztb/arcgis/rest/services/ADSL_GPON/FeatureServer/1";

		var _vuma_gpon_live = "https://services8.arcgis.com/TtfEhzNWkBKhyztb/arcgis/rest/services/VumaGPONLive/FeatureServer/1";
		var _vuma_gpon_build = "https://services8.arcgis.com/TtfEhzNWkBKhyztb/arcgis/rest/services/VumaGPONBuild/FeatureServer/1";			
		var _vuma_ae_live = "https://services8.arcgis.com/TtfEhzNWkBKhyztb/arcgis/rest/services/VumaAELive/FeatureServer/1";
		var _vuma_ae_build = "https://services8.arcgis.com/TtfEhzNWkBKhyztb/arcgis/rest/services/VumaAEBuild/FeatureServer/1";

		
		
		
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


		var Vuma_AE_ADSL_Layer = new FeatureLayer({ 
			url: _vuma_ae_adsl, 
			outFields: ["*"]
		});
		
		var Vuma_GPON_ADSL_Layer = new FeatureLayer({ 
			url: _vuma_gpon_adsl, 
			outFields: ["*"]
		});	
	
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




		var locatorTask = new Locator({
			url: "https://geocode.arcgis.com/arcgis/rest/services/World/GeocodeServer",
			outFields: ["*"]
		});
		
		var map = new Map({
			basemap: "osm",
			// layers:[Vuma_AE_ADSL_Layer, Vuma_GPON_ADSL_Layer]
			//layers:[Vuma_Gpon_Live_Layer,Vuma_Gpon_Build_Layer,Vuma_AE_Live_Layer,Vuma_AE_Build_Layer]
			//all layers// 
			layers:[Vuma_AE_ADSL_Layer, Vuma_GPON_ADSL_Layer,Vuma_Gpon_Live_Layer,Vuma_Gpon_Build_Layer,Vuma_AE_Live_Layer,Vuma_AE_Build_Layer]
			
		});
		
		

		var view = new MapView({
			map: map,
			container: "viewDiv",
			center: [28.01, -26.14],
			zoom: 14,
//  navigation: {
//    gamepad: {
//      enabled: false
//    },
//    browserTouchPanEnabled: false,
//    momentumEnabled: false,
//    mouseWheelZoomEnabled: false
//  }
//  navigation: {
//    browserTouchPanEnabled: false,
//    momentumEnabled: false,
//    mouseWheelZoomEnabled: false
//  }
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
			var lat = Math.round(event.mapPoint.latitude * 1000) / 1000;
			var lon = Math.round(event.mapPoint.longitude * 1000) / 1000;
			
			jQuery('#hdn_latitude').val(lat);
			jQuery('#hdn_longitude').val(lon);

			view.popup.open({
				// Set the popup's title to the coordinates of the clicked location
				title: "Coordinates: [" + lon + ", " + lat + "].",
				location: event.mapPoint,// Set the location of the popup to the clicked location
				
			});
			
			locatorTask.locationToAddress(event.mapPoint).then(function(response) {
				$("#Request_Form").show();
				var newPoint = new Point(response.location.x,response.location.y,response.location.spatialReference);
				var vumagponl_queryTask = new QueryTask({ url: "https://services8.arcgis.com/TtfEhzNWkBKhyztb/arcgis/rest/services/VumaGPONLive/FeatureServer/1" });
				var vumagponl_query = new Query();
				var vumagponb_queryTask = new QueryTask({ url: "https://services8.arcgis.com/TtfEhzNWkBKhyztb/arcgis/rest/services/VumaGPONBuild/FeatureServer/1" });
				var vumagponb_query = new Query();			
				var vumaael_queryTask = new QueryTask({ url: "https://services8.arcgis.com/TtfEhzNWkBKhyztb/arcgis/rest/services/VumaAELive/FeatureServer/1" });
				var vumaael_query = new Query();				
				var vumaaeb_queryTask = new QueryTask({ url: "https://services8.arcgis.com/TtfEhzNWkBKhyztb/arcgis/rest/services/VumaAEBuild/FeatureServer/1" });
				var vumaaeb_query = new Query();		

//adsl start
				var vumaaeadsl_queryTask = new QueryTask({ url: "https://services8.arcgis.com/TtfEhzNWkBKhyztb/arcgis/rest/services/ADSL_AE/FeatureServer/1" });
				var vumaaeadsl_query = new Query();				
				var vumagponadsl_queryTask = new QueryTask({ url: "https://services8.arcgis.com/TtfEhzNWkBKhyztb/arcgis/rest/services/ADSL_GPON/FeatureServer/1" });
				var vumagponadsl_query = new Query();
//adsl end
				
				
				//var coverage_queryTask = new QueryTask({ url: "https://services8.arcgis.com/TtfEhzNWkBKhyztb/arcgis/rest/services/Residential_2019/FeatureServer/0" });
				
				
				var coverage_query = new Query();

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
				
				
				vumaaeadsl_query.returnGeometry = false;
				vumaaeadsl_query.geometry = event.mapPoint;
				vumaaeadsl_query.outFields = ["Name"];		

				vumagponadsl_query.returnGeometry = false;
				vumagponadsl_query.geometry = event.mapPoint;
				vumagponadsl_query.outFields = ["Name"];					
				
			
						var place_name=response.attributes.PlaceName;
						var street_number=response.attributes.AddNum;
						var street_name=response.attributes.Address.replace(response.attributes.AddNum + ' ', '');
						var district=response.attributes.District;
						var region=response.attributes.Region;
						var city=response.attributes.City;
						var postal_code=response.attributes.Postal;
									
		                var loc_arr = [place_name,street_number,street_name,district,region,city,postal_code,lon,lat];
						var loc_arr_str = loc_arr.join('##');		
			

				vumagponl_queryTask.execute(vumagponl_query).then(function(results)
				{
					console.log("VumaGponLive");
					
					inside_layers=true;
					jQuery('#hdn_inside_layers').val('1');
					if (results.features.length > 0)
						var ResultsArray = arrayUtils.map(results.features, function(feature)
						{	
						var site_name=feature.attributes["Name"];
						//var Site_Account_ID=feature.attributes["Site_Account_ID"];	
						var Site_Account_ID="vumatelgpon01";
								 var html='<ul style="font-size:12px"><li><span style="color: #ec008c"><strong>Congratulations!</strong></span> You have Vuma fibre coverage.</li><li>Please click "Next" to continue.</li></ul>';
			
			
			html +="<p>"+response.address+"</p>";
			
			jQuery('#hdn_site_Acc_id').val(Site_Account_ID);	
			jQuery('#address').val(response.address);	
			
			var loc_arr_str=response.address;
			html +="<a style=\"width:40%\" class=\"btn btn-info scroll_next\" data-site_acc_id=\""+Site_Account_ID+"\"   href=\"#div_linespeed\">Next</a><br />";
			/*html +="<div class=\"row\" style=\"width:90%\"><div class=\"col-md-1 pull-left\"></div><div class=\"col-md-1 pull-right\"><button name=\"btn_order\" type=\"button\" class=\"btn btn-success scroll_next\" data-loc_arr_str=\"'"+loc_arr_str+"'\" data-site_name=\"'"+site_name+"'\" data-Site_Account_ID=\"'"+Site_Account_ID+"'\">Next</button></div></div>";	*/	
			
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
						//var Site_Account_ID=feature.attributes["Site_Account_ID"];
						var Site_Account_ID="vumatelbuild01";						
								 var html='<ul style="font-size:12px"><li>Please check if your address/complex (as applicable) details are correct.</li><li>If correct, please choose your signup category from the drop down menu and click "Next"</li><li>•	If incorrect, please close this window and start the process again.</li></ul>';
			
			
			html +="<p>"+response.address+"</p>";
								
								
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
						//var Site_Account_ID=feature.attributes["Site_Account_ID"];	
						var Site_Account_ID="vumatelae01";
								 var html='<ul style="font-size:12px"><li><span style="color: #ec008c"><strong>Congratulations!</strong></span> You have Vuma fibre coverage.</li><li>Please click "Next" to continue.</li></ul>';
			
			
			html +="<p>"+response.address+"</p>";
						jQuery('#hdn_site_Acc_id').val(Site_Account_ID);	
						jQuery('#address').val(response.address);
			
							/*html +="<div class=\"row\" style=\"width:90%\"><div class=\"col-md-1 pull-left\"></div><div class=\"col-md-1 pull-right\"><button name=\"btn_order\" type=\"button\" class=\"btn btn-success scroll_next\" data-loc_arr_str=\"'"+loc_arr_str+"'\" data-site_name=\"'"+site_name+"'\" data-Site_Account_ID=\"'"+Site_Account_ID+"'\">Next</button></div></div>";		*/
					//	html +='<a class=\""scroll_next\" href="#div_linespeed">Next</a><br />';
						//html +='<a style=\"width:40%\" class=\"btn btn-info scroll_next\" href="#div_linespeed">Next</a><br />';
						html +="<a style=\"width:40%\" class=\"btn btn-info scroll_next\" data-site_acc_id=\""+Site_Account_ID+"\"   href=\"#div_linespeed\">Next</a><br />";	
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
						//var Site_Account_ID=feature.attributes["Site_Account_ID"];	
						var Site_Account_ID="vumatelbuild01";
								 var html='<ul style="font-size:12px"><li>Please check if your address/complex (as applicable) details are correct.</li><li>If correct, please choose your signup category from the drop down menu and click "Next"</li><li>•	If incorrect, please close this window and start the process again.</li></ul>';
			
			
			html +="<p>"+response.address+"</p>";
			html +="<div class=\"row\" style=\"width:90%\"><div class=\"col-md-1 pull-left\"><button type=\"button\" class=\"btn btn-info\" onclick=\"open_form2('"+site_name+"','"+Site_Account_ID+"')\">Detailed Site Status</button></div><div class=\"col-md-1 pull-right\"><button name=\"btn_order\" type=\"button\" class=\"btn btn-success\" onclick=\"open_form('"+loc_arr_str+"','VumaAEBuild','"+site_name+"','vumatelbuild01')\">Next</button></div></div>";
								
								view.popup.content =html
						});
					else 
					{
						
					}
				
			});					
			
			
			
			
			
			
				
			
			
	
			
			
			
			
			
			
				
			
			
			



				vumaaeadsl_queryTask.execute(vumaaeadsl_query).then(function(results)
				{
					console.log("VumaAEadsl");
					
					inside_layers=true;
					jQuery('#hdn_inside_layers').val('1');
					if (results.features.length > 0)
						var ResultsArray = arrayUtils.map(results.features, function(feature)
						{	
						var site_name=feature.attributes["Name"];
						//var Site_Account_ID=feature.attributes["Site_Account_ID"];
						var Site_Account_ID="vumateladslae";
								 var html='<ul style="font-size:12px"><li><span style="color: #ec008c"><strong>Congratulations!</strong></span> You have Vuma fibre coverage.</li><li>Please click "Next" to continue.</li></ul>';
			
			
			html +="<p>"+response.address+"</p>";
						jQuery('#hdn_site_Acc_id').val(Site_Account_ID);	
						jQuery('#address').val(response.address);
			
							/*html +="<div class=\"row\" style=\"width:90%\"><div class=\"col-md-1 pull-left\"></div><div class=\"col-md-1 pull-right\"><button name=\"btn_order\" type=\"button\" class=\"btn btn-success scroll_next\" data-loc_arr_str=\"'"+loc_arr_str+"'\" data-site_name=\"'"+site_name+"'\" data-Site_Account_ID=\"'"+Site_Account_ID+"'\">Next</button></div></div>";		*/
					//	html +='<a class=\""scroll_next\" href="#div_linespeed">Next</a><br />';
						//html +='<a style=\"width:40%\" class=\"btn btn-info scroll_next\" href="#div_linespeed">Next</a><br />';
						html +="<a style=\"width:40%\" class=\"btn btn-info scroll_next\" data-site_acc_id=\""+Site_Account_ID+"\"   href=\"#div_linespeed\">Next</a><br />";	
								view.popup.content =html
							
						});
					else 
					{
						
					}
				
			});	





				vumagponadsl_queryTask.execute(vumagponadsl_query).then(function(results)
				{
					console.log("VumaGPONadsl");
					
					inside_layers=true;
					jQuery('#hdn_inside_layers').val('1');
					if (results.features.length > 0)
						var ResultsArray = arrayUtils.map(results.features, function(feature)
						{	
						var site_name=feature.attributes["Name"];
						//var Site_Account_ID=feature.attributes["Site_Account_ID"];
						var Site_Account_ID="vumateladslgpon";						
								 var html='<ul style="font-size:12px"><li><span style="color: #ec008c"><strong>Congratulations!</strong></span> You have Vuma fibre coverage.</li><li>Please click "Next" to continue.</li></ul>';
			
			
			html +="<p>"+response.address+"</p>";
						jQuery('#hdn_site_Acc_id').val(Site_Account_ID);	
						jQuery('#address').val(response.address);
			
							/*html +="<div class=\"row\" style=\"width:90%\"><div class=\"col-md-1 pull-left\"></div><div class=\"col-md-1 pull-right\"><button name=\"btn_order\" type=\"button\" class=\"btn btn-success scroll_next\" data-loc_arr_str=\"'"+loc_arr_str+"'\" data-site_name=\"'"+site_name+"'\" data-Site_Account_ID=\"'"+Site_Account_ID+"'\">Next</button></div></div>";		*/
					//	html +='<a class=\""scroll_next\" href="#div_linespeed">Next</a><br />';
						//html +='<a style=\"width:40%\" class=\"btn btn-info scroll_next\" href="#div_linespeed">Next</a><br />';
						html +="<a style=\"width:40%\" class=\"btn btn-info scroll_next\" data-site_acc_id=\""+Site_Account_ID+"\"   href=\"#div_linespeed\">Next</a><br />";	
								view.popup.content =html
							
						});
					else 
					{
						
					}
				
			});	
	
			
			
			
			
			

			
			
			
			
			
			

			var hdn_inside_layers_val=jQuery('#hdn_inside_layers').val();
			//if(hdn_inside_layers_val=='0'){
			if(!inside_layers){
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
			});
		});
		
		
// Cobus Added 11122020 //
      var searchWidget = new Search({
        view: view,
        includeDefaultSources: false,
		suggestionsEnabled: true,
        sources: [
		
	
		
		
		/*
		{
          featureLayer: new FeatureLayer({
            url: "https://services8.arcgis.com/TtfEhzNWkBKhyztb/ArcGIS/rest/services/SADV_FNO_Coverage_NEW/FeatureServer/1",
          }),
          searchFields: ["Name"],
          exactMatch: false,
          outFields: ["*"],
          name: "Site Name",
        }, 
		*/
		
		{
          featureLayer: new FeatureLayer({
            url: "https://services8.arcgis.com/TtfEhzNWkBKhyztb/arcgis/rest/services/ADSL_AE/FeatureServer/1",
          }),
          searchFields: ["Name"],
          exactMatch: false,
          outFields: ["*"],
          name: "Site Name",
        }, 		
		
		
		{
          featureLayer: new FeatureLayer({
            url: "https://services8.arcgis.com/TtfEhzNWkBKhyztb/arcgis/rest/services/ADSL_GPON/FeatureServer/1",
          }),
          searchFields: ["Name"],
          exactMatch: false,
          outFields: ["*"],
          name: "Site Name",
        }, 			


		{
          featureLayer: new FeatureLayer({
            url: "https://services8.arcgis.com/TtfEhzNWkBKhyztb/arcgis/rest/services/VumaGPONBuild/FeatureServer/1",
          }),
          searchFields: ["Name"],
          exactMatch: false,
          outFields: ["*"],
          name: "Site Name",
        }, 		



		{
          featureLayer: new FeatureLayer({
            url: "https://services8.arcgis.com/TtfEhzNWkBKhyztb/arcgis/rest/services/VumaAELive/FeatureServer/1",
          }),
          searchFields: ["Name"],
          exactMatch: false,
          outFields: ["*"],
          name: "Site Name",
        }, 		



		{
          featureLayer: new FeatureLayer({
            url: "https://services8.arcgis.com/TtfEhzNWkBKhyztb/arcgis/rest/services/VumaAEBuild/FeatureServer/1",
          }),
          searchFields: ["Name"],
          exactMatch: false,
          outFields: ["*"],
          name: "Site Name",
        }, 		


		
		
		/*
		    {
      locator: new Locator({
        url: "https://geocode.arcgis.com/arcgis/rest/services/World/GeocodeServer"
      }),
	  outFields: ["*"],
			},*/
		
		{
          featureLayer: new FeatureLayer({
            url: "https://services8.arcgis.com/TtfEhzNWkBKhyztb/arcgis/rest/services/VumaGPONLive/FeatureServer/1",
          }),
          searchFields: ["Name"],
          exactMatch: false,
          outFields: ["*"],
          name: "Site Name",
        },
		
		
				
		    {
      locator: new Locator({
        url: "https://geocode.arcgis.com/arcgis/rest/services/World/GeocodeServer"
      }),
	  outFields: ["*"],
			},	
		
		
		
		]
      });
// Cobus Added 11122020 //






		
//		var searchWidget = new Search({
//			view: view
//		});
		searchWidget.startup();

		// Add the search widget to the top left corner of the view
		view.ui.add(searchWidget, {
			position: "top-right",
			index: 0
		});	
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
		
view.zoom = 14 
 var callback = function(){alert();}
setTimeout(function() {
      /*jQuery('.esri-icon-locate').trigger('click',function(){
		  });*/
	 
jQuery('.esri-icon-locate').trigger("click");

setTimeout(function() {
		  view.zoom = 14  
}, 5000);

	  
		  
}, 5000);

		view.ui.add(locateWidget, "top-left");
		
		searchWidget.on('select-result', function(event) 
		{
			view.popup.visible = true;
			//dockEnabled = false;
			var newPoint = new Point(event.result.extent.center.x,event.result.extent.center.y,event.result.extent.center.spatialReference);
			locatorTask.locationToAddress(newPoint).then(function(response) {
				
				view.popup.content=response.address+'<p style="color: #ec008c"><br><strong>Please click on the map to confirm your address.</strong></p>';
				
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
		view.popup.visible = true;
		//dockEnabled = false;
		
		
  view.popup.dockOptions = {
  // Disables the dock button from the popup
  buttonEnabled: false,
  // Ignore the default sizes that trigger responsive docking
  breakpoint: false,
};
		
		
		
		
    }
)










///////////////////////////////////Vivek////////////////////////////////////

</script>

