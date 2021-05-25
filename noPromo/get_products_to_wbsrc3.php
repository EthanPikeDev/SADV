<?php
$site_account_id=$_REQUEST["site_acc_id"];

$site_account_id='vumateladslae';
$all_products=get_products($site_account_id);

echo "<pre>";
print_r($all_products);
die();

$html='';
$parr=array();
foreach ($all_products as $key => $value)
{
	$productcode=$key;
    $product1=$value[0];
	$product2=$value[1];
	
	
	
	$p1_productname=$product1["productname"];
	$p1_price=$product1["price"];
	$p1_connectionfee=$product1["connectionfee"];
	$p1_productcode=$product1["pproductcode"];
	$p1_disclaimer=$product1["disclaimer"];
	
	$parr[$p1_productcode]=$p1_productname;
	
	if(count($product2)>0)
	{
		$p2_productname=$product2["productname"];
		$p2_price=$product2["price"];
		$p2_connectionfee=$product2["connectionfee"];
		$p2_productcode=$product2["pproductcode"];
		$p2_disclaimer=$product2["disclaimer"];
		$parr[$p2_productcode]=$p2_productname;
	}
	
	
	$html .= '<div class="item"> 
		                    <!-- <div class="col-lg-4 col-md-6 col-sm-6"> -->
		                        <div class="single-pricing-table">
		                            <div class="pricing-header">
		                                <div class="icon">
		                                    <i class="flaticon-wifi"></i>
		                                </div>

		                                <!--<span>Option 11</span>-->
		                                <h3>'.$p1_productname.'</h3>
		                            </div>

		                            <div class="single-pricing-table-s">
		                           		<div class="pricing-header">

		                           			<span>No upfront fee package</span>
		                           			<br>
				                            <ul class="pricing-features-list">';
				                      if(count($p1_disclaimer)>0)
										{
											 foreach ($p1_disclaimer as $key => $disc)
											 {  	         
				                               $html .='<li><i class="flaticon-check-mark"></i>'.$disc.'</li>';
											 }
										}

												$html .='<li> *Terms and conditions apply</li>
				                                
				                            </ul>';
											

				                          $html .='<div class="price">
				                                <span>Fee</span>
				                                <!-- <span>R</span> -->
				                                R'.$p1_price.'/pm
												<br>
												<button class="view-plans-btn btn_plan promo1" data-planval="'.$p1_productcode.'">Select This Plan</button>
				                                <!-- <span>/pm</span> -->
				                            </div>';
				                   $html .='</div>
				                    </div>';
							if(count($product2)>0)
							{
				                  $html .='<div class="single-pricing-table-sg">
		                           		<div class="pricing-header">
		       
		                           			<span>Lower Subscription Packages</span>
		                           			<br>
				                            <ul class="pricing-features-list">
				                             <li><i class="flaticon-check-mark"></i> No Connection Fee</li>';
				                              if(count($p2_disclaimer)>0)
											{ 
												 foreach ($p2_disclaimer as $key => $disc2)
												 {      
											   $html .='<li><i class="flaticon-check-mark"></i>'.$disc2.'</li>';
												 }
											}
	
												$html .='<li> *Terms and conditions apply</li>
				                            </ul>';

				                            $html .='<div class="price">
				                                <span>Fee</span>
				                                <!-- <span>R</span> -->
				                                R'.$p2_price.'/pm
												<br>
												<button class="view-plans-btn btn_plan promo1" data-planval="'.$p2_productcode.'">Select This Plan</button>
				                                <!-- <span>/pm</span> -->
				                            </div>';
							}
				                    $html .='</div>
				                    </div>


		                            <button class="view-plans-btn">View Plans</button>
									<!--<button class="view-plans-btn btn_plan" data-planval="access-res-unc-1000-100">Select This Plan</button>-->

		                            <div class="image-box">
		                                <img src="assets/img/shape-image/2.png" alt="image">
		                                <img src="assets/img/shape-image/2.png" alt="image">
		                            </div>
		                        </div>
		                    <!-- </div> -->
		                </div>';


	
}

$return=array("msg_id"=>118,"status"=>true,"return_data"=>array("product_html"=>$html,"parr"=>$parr));

$return_str=json_encode($return);
print($return_str); exit;


function get_products($site_account_id)
{
	$dis_access_res_unc_200_200=array("No long term contract","All package prices include data and line rental");
$dis_access_res_unc_red_200_200=array("R2790.00 Connection Fee","No long term contract","All package prices include data and line rental");

$dis_access_res_unc_200_20=array("No long term contract","All package prices include data and line rental");
$dis_access_res_unc_red_200_20=array("R2590.00 Connection Fee","No long term contract","All package prices include data and line rental");

$dis_access_res_unc_100_100=array("No long term contract","All package prices include data and line rental");
$dis_access_res_unc_red_100_100=array("R2350.00 Connection Fee","No long term contract","All package prices include data and line rental");

$dis_access_res_unc_100_10=array("No long term contract","All package prices include data and line rental");
$dis_access_res_unc_red_100_10=array("R1095.00 Connection Fee","No long term contract","All package prices include data and line rental");

$dis_access_res_unc_50_50=array("No long term contract","All package prices include data and line rental");
$dis_access_res_unc_red_50_50=array("R1970.00 Connection Fee","No long term contract","All package prices include data and line rental");

$dis_access_res_unc_50_5=array("No long term contract","All package prices include data and line rental");
$dis_access_res_unc_red_50_5=array("R1870.00 Connection Fee","No long term contract","All package prices include data and line rental");

$dis_access_res_unc_20_20=array("No long term contract","All package prices include data and line rental");
$dis_access_res_unc_red_20_20=array("R1690.00 Connection Fee","No long term contract","All package prices include data and line rental");

$dis_access_res_unc_20_2=array("No long term contract","All package prices include data and line rental");
$dis_access_res_unc_red_20_2=array("R1590.00 Connection Fee","No long term contract","All package prices include data and line rental");

$dis_access_res_unc_10_10=array("No long term contract","All package prices include data and line rental");
$dis_access_res_unc_red_10_10=array("R1390.00 Connection Fee","No long term contract","All package prices include data and line rental");

$dis_access_res_unc_10_2=array("No long term contract","All package prices include data and line rental");
$dis_access_res_unc_red_10_2=array("R1870.00 Connection Fee","No long term contract","All package prices include data and line rental");


//adsl disclaimers start

$dis_adsl_access_res_1000_100=array("No long term contract","All package prices include data and line rental","Offer available until 31 January","Only available for new installations");
$dis_adsl_access_res_200_200=array("No long term contract","All package prices include data and line rental","Offer available until 31 January","Only available for new installations");
$dis_adsl_access_res_200_20=array("No long term contract","All package prices include data and line rental","Offer available until 31 January","Only available for new installations");
$dis_adsl_access_res_100_100=array("No long term contract","All package prices include data and line rental","Offer available until 31 January","Only available for new installations");
$dis_adsl_access_res_100_10=array("No long term contract","All package prices include data and line rental","Offer available until 31 January","Only available for new installations");
$dis_adsl_access_res_50_50=array("No long term contract","All package prices include data and line rental","Offer available until 31 January","Only available for new installations");
$dis_adsl_access_res_50_5=array("No long term contract","All package prices include data and line rental","Offer available until 31 January","Only available for new installations");
$dis_adsl_access_res_20_20=array("No long term contract","All package prices include data and line rental","Offer available until 31 January","Only available for new installations");
$dis_adsl_access_res_20_2=array("No long term contract","All package prices include data and line rental","Offer available until 31 January","Only available for new installations");
$dis_adsl_access_res_10_10=array("No long term contract","All package prices include data and line rental","Offer available until 31 January","Only available for new installations");
$dis_adsl_access_res_10_2=array("No long term contract","All package prices include data and line rental","Offer available until 31 January","Only available for new installations");


//adsl disclaimers end



//vumatelgpon01 start
$vumatelgpon01_slide1=array("0"=>array("productname"=>"Fibre Fast Uncapped 1000/100 Mbps @ R1495" ,"price"=>"1495","connectionfee"=>"0","pproductcode"=>"access-res-unc-1000-100","disclaimer"=>$dis_access_res_unc_1000_100),"1"=>array("productname"=>"Fibre Fast Uncapped 1000/100 Mbps @ R1495" ,"price"=>"1495","connectionfee"=>"0","productcode"=>"access-res-unc-1000-100","disclaimer"=>$dis_access_res_unc_1000_100));

$vumatelgpon01_slide2=array("0"=>array("productname"=>"Fibre Fast Uncapped 200/200 Mbps @ R1485" ,"price"=>"1485","connectionfee"=>"0","pproductcode"=>"access-res-unc-200-200","disclaimer"=>$dis_access_res_unc_200_200),"1"=>array("productname"=>"Fast Fibre Reduced Subscription 200/200 Mbps @ R2790 upfront & R1395pm" ,"price"=>"1395","connectionfee"=>"0","productcode"=>"access-res-unc-red-200-200","disclaimer"=>$dis_access_res_unc_red_200_200));

$vumatelgpon01_slide3=array("0"=>array("productname"=>"Fibre Fast Uncapped 200/20 Mbps @ R1435" ,"price"=>"1435","connectionfee"=>"0","pproductcode"=>"access-res-unc-200-20","disclaimer"=>$dis_access_res_unc_200_20),"1"=>array("productname"=>"Fast Fibre Reduced Subscription 200/20 Mbps @ R2590 upfront & R1295pm" ,"price"=>"1295","connectionfee"=>"0","productcode"=>"access-res-unc-red-200-20","disclaimer"=>$dis_access_res_unc_red_200_20));

$vumatelgpon01_slide4=array("0"=>array("productname"=>"Fibre Fast Uncapped 100/100 Mbps @ R1225" ,"price"=>"1225","connectionfee"=>"0","pproductcode"=>"access-res-unc-100-100","disclaimer"=>$dis_access_res_unc_100_100),"1"=>array("productname"=>"Fast Fibre Reduced Subscription 100/100 Mbps @ R2350 upfront & R1175pm" ,"price"=>"1175","connectionfee"=>"0","productcode"=>"access-res-unc-red-100-100","disclaimer"=>$dis_access_res_unc_red_100_100));

$vumatelgpon01_slide5=array("0"=>array("productname"=>"Fibre Fast Uncapped 100/10 Mbps @ R1145" ,"price"=>"1145","connectionfee"=>"0","pproductcode"=>"access-res-unc-100-10","disclaimer"=>$dis_access_res_unc_100_10),"1"=>array("productname"=>"Fast Fibre Reduced Subscription 100/10 Mbps @ R2190 upfront & R1095pm" ,"price"=>"1095","connectionfee"=>"0","productcode"=>"access-res-unc-red-100-10","disclaimer"=>$dis_access_res_unc_red_100_10));

$vumatelgpon01_slide6=array("0"=>array("productname"=>"Fibre Fast Uncapped 50/50 Mbps @ R1055" ,"price"=>"1055","connectionfee"=>"0","pproductcode"=>"access-res-unc-50-50","disclaimer"=>$dis_access_res_unc_50_50),"1"=>array("productname"=>"Fast Fibre Reduced Subscription 50/50 Mbps @ R1970 upfront & R985pm" ,"price"=>"985","connectionfee"=>"0","productcode"=>"access-res-unc-red-50-50","disclaimer"=>$dis_access_res_unc_red_50_50));

$vumatelgpon01_slide7=array("0"=>array("productname"=>"Fibre Fast Uncapped 50/5 Mbps @ R995" ,"price"=>"995","connectionfee"=>"0","pproductcode"=>"access-res-unc-50-5","disclaimer"=>$dis_access_res_unc_50_5),"1"=>array("productname"=>"Fast Fibre Reduced Subscription 50/5 Mbps @ R1870 upfront & R935pm" ,"price"=>"935","connectionfee"=>"0","productcode"=>"access-res-unc-red-50-5","disclaimer"=>$dis_access_res_unc_red_50_5));

$vumatelgpon01_slide8=array("0"=>array("productname"=>"Fibre Fast Uncapped 20/20 Mbps @ R915" ,"price"=>"915","connectionfee"=>"0","pproductcode"=>"access-res-unc-20-20","disclaimer"=>$dis_access_res_unc_20_20),"1"=>array("productname"=>"Fast Fibre Reduced Subscription 20/20 Mbps @ R1690 upfront & R845pm" ,"price"=>"845","connectionfee"=>"0","productcode"=>"access-res-unc-red-20-20","disclaimer"=>$dis_access_res_unc_red_20_20));

$vumatelgpon01_slide9=array("0"=>array("productname"=>"Fibre Fast Uncapped 20/2 Mbps @ R845" ,"price"=>"845","connectionfee"=>"0","pproductcode"=>"access-res-unc-20-2","disclaimer"=>$dis_access_res_unc_20_2),"1"=>array("productname"=>"Fast Fibre Reduced Subscription 20/2 Mbps @ R1590 upfront & R795pm" ,"price"=>"795","connectionfee"=>"0","productcode"=>"access-res-unc-red-20-2","disclaimer"=>$dis_access_res_unc_red_20_2));

$vumatelgpon01_slide10=array("0"=>array("productname"=>"Fibre Fast Uncapped 10/10 Mbps @ R755" ,"price"=>"755","connectionfee"=>"0","pproductcode"=>"access-res-unc-10-10","disclaimer"=>$dis_access_res_unc_10_10),"1"=>array("productname"=>"Fast Fibre Reduced Subscription 10/10 Mbps @ R1390 upfront & R695pm" ,"price"=>"695","connectionfee"=>"0","productcode"=>"access-res-unc-red-10-10","disclaimer"=>$dis_access_res_unc_red_10_10));

$vumatelgpon01_slide11=array("0"=>array("productname"=>"Fibre Fast Uncapped 10/2 Mbps @ R695" ,"price"=>"695","connectionfee"=>"0","pproductcode"=>"access-res-unc-10-2","disclaimer"=>$dis_access_res_unc_10_2),"1"=>array("productname"=>"Fast Fibre Reduced Subscription 10/2 Mbps @ R1875 upfront & R625pm" ,"price"=>"625","connectionfee"=>"0","productcode"=>"access-res-unc-red-10-2","disclaimer"=>$dis_access_res_unc_red_10_2));
//vumatelgpon01 end




//vumatelae01 start
$vumatelae01_slide1=array("0"=>array("productname"=>"Fibre Fast Uncapped 1000/100 Mbps @ R1495" ,"price"=>"1495","connectionfee"=>"0","pproductcode"=>"ae-res-res-unc-1000-100","disclaimer"=>$dis_access_res_unc_1000_100),"1"=>array("productname"=>"Fibre Fast Uncapped 1000/100 Mbps @ R1495" ,"price"=>"1495","connectionfee"=>"0","productcode"=>"access-res-unc-1000-100","disclaimer"=>$dis_access_res_unc_1000_100));

$vumatelae01_slide2=array("0"=>array("productname"=>"Fibre Fast Uncapped 200/200 Mbps @ R1485" ,"price"=>"1485","connectionfee"=>"0","pproductcode"=>"ae-res-res-unc-200-200","disclaimer"=>$dis_access_res_unc_200_200),"1"=>array("productname"=>"Fast Fibre Reduced Subscription 200/200 Mbps @ R2790 upfront & R1395pm" ,"price"=>"1395","connectionfee"=>"0","productcode"=>"access-res-unc-red-ae-200-200","disclaimer"=>$dis_access_res_unc_red_200_200));

$vumatelae01_slide3=array("0"=>array("productname"=>"Fibre Fast Uncapped 200/20 Mbps @ R1435" ,"price"=>"1435","connectionfee"=>"0","pproductcode"=>"ae-res-res-unc-200-20","disclaimer"=>$dis_access_res_unc_200_20),"1"=>array("productname"=>"Fast Fibre Reduced Subscription 200/20 Mbps @ R2590 upfront & R1295pm" ,"price"=>"1295","connectionfee"=>"0","productcode"=>"access-res-unc-red-ae-200-20","disclaimer"=>$dis_access_res_unc_red_200_20));

$vumatelae01_slide4=array("0"=>array("productname"=>"Fibre Fast Uncapped 100/100 Mbps @ R1225" ,"price"=>"1225","connectionfee"=>"0","pproductcode"=>"ae-res-res-unc-100-100","disclaimer"=>$dis_access_res_unc_100_100),"1"=>array("productname"=>"Fast Fibre Reduced Subscription 100/100 Mbps @ R2350 upfront & R1175pm" ,"price"=>"1175","connectionfee"=>"0","productcode"=>"access-res-unc-red-ae-100-100","disclaimer"=>$dis_access_res_unc_red_100_100));

$vumatelae01_slide5=array("0"=>array("productname"=>"Fibre Fast Uncapped 100/10 Mbps @ R1145" ,"price"=>"1145","connectionfee"=>"0","pproductcode"=>"ae-res-res-unc-100-10","disclaimer"=>$dis_access_res_unc_100_10),"1"=>array("productname"=>"Fast Fibre Reduced Subscription 100/10 Mbps @ R2190 upfront & R1095pm" ,"price"=>"1095","connectionfee"=>"0","productcode"=>"access-res-unc-red-ae-100-10","disclaimer"=>$dis_access_res_unc_red_100_10));

$vumatelae01_slide6=array("0"=>array("productname"=>"Fibre Fast Uncapped 50/50 Mbps @ R1055" ,"price"=>"1055","connectionfee"=>"0","pproductcode"=>"ae-res-res-unc-50-50","disclaimer"=>$dis_access_res_unc_50_50),"1"=>array("productname"=>"Fast Fibre Reduced Subscription 50/50 Mbps @ R1970 upfront & R985pm" ,"price"=>"985","connectionfee"=>"0","productcode"=>"access-res-unc-red-ae-50-50","disclaimer"=>$dis_access_res_unc_red_50_50));

$vumatelae01_slide7=array("0"=>array("productname"=>"Fibre Fast Uncapped 50/5 Mbps @ R995" ,"price"=>"995","connectionfee"=>"0","pproductcode"=>"ae-res-res-unc-50-5","disclaimer"=>$dis_access_res_unc_50_5),"1"=>array("productname"=>"Fast Fibre Reduced Subscription 50/5 Mbps @ R1870 upfront & R935pm" ,"price"=>"935","connectionfee"=>"0","productcode"=>"access-res-unc-red-ae-50-5","disclaimer"=>$dis_access_res_unc_red_50_5));

$vumatelae01_slide8=array("0"=>array("productname"=>"Fibre Fast Uncapped 20/20 Mbps @ R915" ,"price"=>"915","connectionfee"=>"0","pproductcode"=>"ae-res-res-unc-20-20","disclaimer"=>$dis_access_res_unc_20_20),"1"=>array("productname"=>"Fast Fibre Reduced Subscription 20/20 Mbps @ R1690 upfront & R845pm" ,"price"=>"845","connectionfee"=>"0","productcode"=>"access-res-unc-red-ae-20-20","disclaimer"=>$dis_access_res_unc_red_20_20));

$vumatelae01_slide9=array("0"=>array("productname"=>"Fibre Fast Uncapped 20/2 Mbps @ R845" ,"price"=>"845","connectionfee"=>"0","pproductcode"=>"ae-res-res-unc-20-2","disclaimer"=>$dis_access_res_unc_20_2),"1"=>array("productname"=>"Fast Fibre Reduced Subscription 20/2 Mbps @ R1590 upfront & R795pm" ,"price"=>"795","connectionfee"=>"0","productcode"=>"access-res-unc-red-ae-20-2","disclaimer"=>$dis_access_res_unc_red_20_2));

$vumatelae01_slide10=array("0"=>array("productname"=>"Fibre Fast Uncapped 10/10 Mbps @ R755" ,"price"=>"755","connectionfee"=>"0","pproductcode"=>"ae-res-res-unc-10-10","disclaimer"=>$dis_access_res_unc_10_10),"1"=>array("productname"=>"Fast Fibre Reduced Subscription 10/10 Mbps @ R1390 upfront & R695pm" ,"price"=>"695","connectionfee"=>"0","productcode"=>"access-res-unc-red-ae-10-10","disclaimer"=>$dis_access_res_unc_red_10_10));

$vumatelae01_slide11=array("0"=>array("productname"=>"Fibre Fast Uncapped 10/2 Mbps @ R695" ,"price"=>"695","connectionfee"=>"0","pproductcode"=>"ae-res-res-unc-10-2","disclaimer"=>$dis_access_res_unc_10_2),"1"=>array("productname"=>"Fast Fibre Reduced Subscription 10/2 Mbps @ R1875 upfront & R625pm" ,"price"=>"625","connectionfee"=>"0","productcode"=>"access-res-unc-red-ae-10-2","disclaimer"=>$dis_access_res_unc_red_10_2));
//vumatelae01 end


//vumateladslgpon start
$vumateladslgpon_slide1=array("0"=>array("productname"=>"Fast Fibre 1000/100 Mbps Reduced Price @ R1495pm" ,"price"=>"1495","connectionfee"=>"0","productcode"=>"adsl-access-res-1000-100","disclaimer"=>$dis_adsl_access_res_1000_100));

$vumateladslgpon_slide2=array("0"=>array("productname"=>"Fast Fibre 200/200 Mbps Reduced Price @ R1395pm" ,"price"=>"1395","connectionfee"=>"0","productcode"=>"adsl-access-res-200-200","disclaimer"=>$dis_adsl_access_res_200_200));

$vumateladslgpon_slide3=array("0"=>array("productname"=>"Fast Fibre 200/20 Mbps Reduced Price @ R1295pm" ,"price"=>"1295","connectionfee"=>"0","productcode"=>"adsl-access-res-200-20","disclaimer"=>$dis_adsl_access_res_200_20));

$vumateladslgpon_slide4=array("0"=>array("productname"=>"Fast Fibre 100/100 Mbps Reduced Price @ R1175pm" ,"price"=>"1175","connectionfee"=>"0","productcode"=>"adsl-access-res-100-100","disclaimer"=>$dis_adsl_access_res_100_100));

$vumateladslgpon_slide5=array("0"=>array("productname"=>"Fast Fibre 100/10 Mbps Reduced Price @ R1095pm" ,"price"=>"1095","connectionfee"=>"0","productcode"=>"adsl-access-res-100-10","disclaimer"=>$dis_adsl_access_res_100_10));

$vumateladslgpon_slide6=array("0"=>array("productname"=>"Fast Fibre 50/50 Mbps Reduced Price @ R985pm" ,"price"=>"985","connectionfee"=>"0","productcode"=>"adsl-access-res-50-50","disclaimer"=>$dis_adsl_access_res_50_50));

$vumateladslgpon_slide7=array("0"=>array("productname"=>"Fast Fibre 50/5 Mbps Reduced Price @ R935pm" ,"price"=>"935","connectionfee"=>"0","productcode"=>"adsl-access-res-50-5","disclaimer"=>$dis_adsl_access_res_50_5));

$vumateladslgpon_slide8=array("0"=>array("productname"=>"Fast Fibre 20/20 Mbps Reduced Price @ R845pm" ,"price"=>"845","connectionfee"=>"0","productcode"=>"adsl-access-res-20-20","disclaimer"=>$dis_adsl_access_res_20_20));

$vumateladslgpon_slide9=array("0"=>array("productname"=>"Fast Fibre 20/2 Mbps Reduced Price @ R795pm" ,"price"=>"795","connectionfee"=>"0","productcode"=>"adsl-access-res-20-2","disclaimer"=>$dis_adsl_access_res_20_2));

$vumateladslgpon_slide10=array("0"=>array("productname"=>"Fast Fibre 10/10 Mbps Reduced Price @ R695pm" ,"price"=>"695","connectionfee"=>"0","productcode"=>"adsl-access-res-10-10","disclaimer"=>$dis_adsl_access_res_10_10));

$vumateladslgpon_slide11=array("0"=>array("productname"=>"Fast Fibre 10/2 Mbps Reduced Price @ R625pm" ,"price"=>"625","connectionfee"=>"0","productcode"=>"adsl-access-res-10-2","disclaimer"=>$dis_adsl_access_res_10_2));
//vumateladslgpon end



//vumateladslae start
$vumateladslae_slide1=array("0"=>array("productname"=>"Fast Fibre 1000/100 Mbps Reduced Price @ R1495pm" ,"price"=>"1495","connectionfee"=>"0","productcode"=>"adsl-ae-access-res-1000-100","disclaimer"=>$dis_adsl_access_res_1000_100));

$vumateladslae_slide2=array("0"=>array("productname"=>"Fast Fibre 200/200 Mbps Reduced Price @ R1395pm" ,"price"=>"1395","connectionfee"=>"0","productcode"=>"adsl-ae-access-res-200-200","disclaimer"=>$dis_adsl_access_res_200_200));

$vumateladslae_slide3=array("0"=>array("productname"=>"Fast Fibre 200/20 Mbps Reduced Price @ R1295pm" ,"price"=>"1295","connectionfee"=>"0","productcode"=>"adsl-ae-access-res-200-20","disclaimer"=>$dis_adsl_access_res_200_20));

$vumateladslae_slide4=array("0"=>array("productname"=>"Fast Fibre 100/100 Mbps Reduced Price @ R1175pm" ,"price"=>"1175","connectionfee"=>"0","productcode"=>"adsl-ae-access-res-100-100","disclaimer"=>$dis_adsl_access_res_100_100));

$vumateladslae_slide5=array("0"=>array("productname"=>"Fast Fibre 100/10 Mbps Reduced Price @ R1095pm" ,"price"=>"1095","connectionfee"=>"0","productcode"=>"adsl-ae-access-res-100-10","disclaimer"=>$dis_adsl_access_res_100_10));

$vumateladslae_slide6=array("0"=>array("productname"=>"Fast Fibre 50/50 Mbps Reduced Price @ R985pm" ,"price"=>"985","connectionfee"=>"0","productcode"=>"adsl-ae-access-res-50-50","disclaimer"=>$dis_adsl_access_res_50_50));

$vumateladslae_slide7=array("0"=>array("productname"=>"Fast Fibre 50/5 Mbps Reduced Price @ R935pm" ,"price"=>"935","connectionfee"=>"0","productcode"=>"adsl-ae-access-res-50-5","disclaimer"=>$dis_adsl_access_res_50_5));

$vumateladslae_slide8=array("0"=>array("productname"=>"Fast Fibre 20/20 Mbps Reduced Price @ R845pm" ,"price"=>"845","connectionfee"=>"0","productcode"=>"adsl-ae-access-res-20-20","disclaimer"=>$dis_adsl_access_res_20_20));

$vumateladslae_slide9=array("0"=>array("productname"=>"Fast Fibre 20/2 Mbps Reduced Price @ R795pm" ,"price"=>"795","connectionfee"=>"0","productcode"=>"adsl-ae-access-res-20-2","disclaimer"=>$dis_adsl_access_res_20_2));

$vumateladslae_slide10=array("0"=>array("productname"=>"Fast Fibre 10/10 Mbps Reduced Price @ R695pm" ,"price"=>"695","connectionfee"=>"0","productcode"=>"adsl-ae-access-res-10-10","disclaimer"=>$dis_adsl_access_res_10_10));

$vumateladslae_slide11=array("0"=>array("productname"=>"Fast Fibre 10/2 Mbps Reduced Price @ R625pm" ,"price"=>"625","connectionfee"=>"0","productcode"=>"adsl-ae-access-res-10-2","disclaimer"=>$dis_adsl_access_res_10_2));
//vumateladslae end


$arr=array("vumatelgpon01"=>array($vumatelgpon01_slide1,$vumatelgpon01_slide2,$vumatelgpon01_slide3,$vumatelgpon01_slide4,$vumatelgpon01_slide5,$vumatelgpon01_slide6,$vumatelgpon01_slide7,$vumatelgpon01_slide8,$vumatelgpon01_slide9,$vumatelgpon01_slide10,$vumatelgpon01_slide11) ,
           "vumatelae01"=>array($vumatelae01_slide1,$vumatelae01_slide2,$vumatelae01_slide3,$vumatelae01_slide4,$vumatelae01_slide5,$vumatelae01_slide6,$vumatelae01_slide7,$vumatelae01_slide8,$vumatelae01_slide9,$vumatelae01_slide10,$vumatelae01_slide11) ,
		   "vumateladslgpon"=>array($vumateladslgpon_slide1,$vumateladslgpon_slide2,$vumateladslgpon_slide3,$vumateladslgpon_slide4,$vumateladslgpon_slide5,$vumateladslgpon_slide6,$vumateladslgpon_slide7,$vumateladslgpon_slide8,$vumateladslgpon_slide9,$vumateladslgpon_slide10,$vumateladslgpon_slide11) ,
		   "vumateladslae"=>array($vumateladslae_slide1,$vumateladslae_slide2,$vumateladslae_slide3,$vumateladslae_slide4,$vumateladslae_slide5,$vumateladslae_slide6,$vumateladslae_slide7,$vumateladslae_slide8,$vumateladslae_slide9,$vumateladslae_slide10,$vumateladslae_slide11) ,
          );

	return $arr;										
}

function get_product_template($productname,$price,$connectionfee,$productcode)
{
	$html = <<<EndOfHtml
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
												<button class="view-plans-btn btn_plan promo1" data-planval="access-res-unc-1000-100">Select This Plan</button>
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
												<button class="view-plans-btn btn_plan promo1" data-planval="access-res-unc-1000-100">Select This Plan</button>
				                                <!-- <span>/pm</span> -->
				                            </div>
				                        </div>
				                    </div>

		                            <button class="view-plans-btn">View Plans</button>
									<!--<button class="view-plans-btn btn_plan" data-planval="access-res-unc-1000-100">Select This Plan</button>-->

		                            <div class="image-box">
		                                <img src="assets/img/shape-image/2.png" alt="image">
		                                <img src="assets/img/shape-image/2.png" alt="image">
		                            </div>
		                        </div>
		                    <!-- </div> -->
		                </div>
EndOfHtml;

return $html;
}

function get_product_template1($productname,$price,$connectionfee)
{
	$html='<div class="item"> 
		                    <!-- <div class="col-lg-4 col-md-6 col-sm-6"> -->
		                        <div class="single-pricing-table">
		                            <div class="pricing-header">
		                                <div class="icon">
		                                    <i class="flaticon-wifi"></i>
		                                </div>

		                                <!--<span>Option 11</span>-->
		                                <h3>$productname</h3>
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
												<button class="view-plans-btn btn_plan promo1" data-planval="access-res-unc-1000-100">Select This Plan</button>
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
												<button class="view-plans-btn btn_plan promo1" data-planval="access-res-unc-1000-100">Select This Plan</button>
				                                <!-- <span>/pm</span> -->
				                            </div>
				                        </div>
				                    </div>

		                            <button class="view-plans-btn">View Plans</button>
									<!--<button class="view-plans-btn btn_plan" data-planval="access-res-unc-1000-100">Select This Plan</button>-->

		                            <div class="image-box">
		                                <img src="assets/img/shape-image/2.png" alt="image">
		                                <img src="assets/img/shape-image/2.png" alt="image">
		                            </div>
		                        </div>
		                    <!-- </div> -->
		                </div>';
	return $html;					
}

?>