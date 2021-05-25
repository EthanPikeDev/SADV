<?php
$name=urldecode($_REQUEST["name"]);
$email=urldecode($_REQUEST["email"]);
$envelope=urldecode($_REQUEST["envelope"]);
$OrderNo=urldecode($_REQUEST["OrderNo"]);


die($name." >>> ".$email." >>> ".$envelope." >>> ".$OrderNo);

?>

<!DOCTYPE HTML>

<html>
	<head>
		<title>SADV Promo</title>
		<meta http-equiv="content-type" content="text/html; charset=utf-8" />
		<meta name="description" content="" />
		<meta name="keywords" content="" />
		<link href="http://fonts.googleapis.com/css?family=Open+Sans:300,600,700" rel="stylesheet" />
		<script src="js/jquery.min.js"></script>
		<script src="js/config.js"></script>
		<script src="js/skel.min.js"></script>
		<noscript>
			<link rel="stylesheet" href="css/skel-noscript.css" />
			<link rel="stylesheet" href="css/style.css" />
			<link rel="stylesheet" href="css/style-desktop.css" />
		</noscript>
		<!--[if lte IE 9]><link rel="stylesheet" href="css/ie9.css" /><![endif]-->
		<!--[if lte IE 8]><script src="js/html5shiv.js"></script><link rel="stylesheet" href="css/ie8.css" /><![endif]-->
		<!--[if lte IE 7]><link rel="stylesheet" href="css/ie7.css" /><![endif]-->
		
		
		
		
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
		<script src="https://cdn.datatables.net/1.10.12/js/jquery.dataTables.min.js"></script>
		<script src="https://cdn.datatables.net/1.10.12/js/dataTables.bootstrap.min.js"></script>		
		<link rel="stylesheet" href="https://cdn.datatables.net/1.10.12/css/dataTables.bootstrap.min.css" />
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
		<script src="JsLocalSearch.js"></script>
		<style> 
		.mark {
		  background-color: #d7ffe7 !important
		}

		.mark .gsearch{
		  font-size: 20px
		}

		.unmark {
		  background-color: #e8e8e8 !important
		}

		.unmark .gsearch{
		  font-size: 10px
		}
		
		.marktext
		{
			font-weight:bold;
			background-color: antiquewhite;
		}
		</style>
		<style>
		    /* Remove the navbar's default margin-bottom and rounded borders */ 
		    .navbar {
		      margin-bottom: 0;
		      border-radius: 0;
		    }
		    
		    /* Set height of the grid so .sidenav can be 100% (adjust as needed) */
		    .row.content {height: 450px}
		    
		    /* Set gray background color and 100% height */
		    .sidenav {
		      padding-top: 20px;
		      background-color: #f1f1f1;
		      height: 100%;
		    }
		    
		    /* Set black background color, white text and some padding */
		    footer {
		      background-color: #555;
		      color: white;
		      padding: 15px;
		    }
		    
		    /* On small screens, set height to 'auto' for sidenav and grid */
		    @media screen and (max-width: 767px) {
		      .sidenav {
		        height: auto;
		        padding: 15px;
		      }
		      .row.content {height:auto;} 
		    }
	  	</style>		
		
		
		
	</head>
	<body>

		<!-- Nav -->
			<nav id="nav">
				<ul>
					<li><a href="#top">Check Coverage</a></li>
					<li><a href="#work">View Products</a></li>
					<li><a href="#portfolio">Complete Details</a></li>
					<li><a href="#contact">Contact</a></li>
				</ul>
			</nav>

		<!-- Home -->
			<div class="wrapper wrapper-style1 wrapper-first">
				<article class="container" id="top">
					<div class="row">
						<div class="4u">
							<!--<span class="me image image-full"><img src="logo.png" alt="" /></span> -->
							
						</div>
						<div class="justify-content-center" style="text-align:center">
							<header>
                            <img src="logo.png" alt="" width="300" />
								<h1><strong>Thanks For Signing!</strong>.</h1>
							</header>
						</div>
					</div>						
				</article>
			</div>
			
			

		<!-- Work -->
			

		<!-- Portfolio -->
			

		<!-- Contact -->
			


	</body>
</html>


