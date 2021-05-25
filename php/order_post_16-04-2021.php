<?php
$name=$_REQUEST["name"];
$surname=$_REQUEST["surname"];
$number=$_REQUEST["number"];
$id_number=$_REQUEST["id_number"];
$email=$_REQUEST["email"];
$address=$_REQUEST["address"];
$installation_address=$_REQUEST["installation_address"];
$sel_product=$_REQUEST["sel_product"];
$provider=$_REQUEST["provider"];
$delivery_instructions=$_REQUEST["delivery_instructions"];
$account_number=$_REQUEST["account_number"];
$account_type=$_REQUEST["account_type"];
$bank=$_REQUEST["bank"];
$branch=$_REQUEST["branch"];
$branch_code=$_REQUEST["branch_code"];
$promocode=$_REQUEST["promocode"];
$acc_name=$_REQUEST["acc_name"];
$del_address=$_REQUEST["del_address"];
$del_contact_no=$_REQUEST["del_contact_no"];


$file_data_res=$_FILES['file_data_res'];
$filesize = $file_data_res['size'];
$filename = $file_data_res['name'];
$filetype=$file_data_res['type'];
$filename_modified=time().'_'.$filename;

$Site_Account_ID=$_REQUEST["hdn_site_Acc_id"];
$unit=0;


if($filesize>0 && $sel_product!="")
{
	if(move_uploaded_file($_FILES["file_data_res"]["tmp_name"],'../upload/'.$filename_modified))
			{
				$filecontents = base64_encode(fread(fopen('../upload/'.$filename_modified, "r"), $filesize));
			}
	
	$service_array=array("$sel_product"=>$sel_product);
	$webservice_data=array("service"=>"CreateOrderNetcash",
					   "fname"=>$name,
					   "lname"=>$surname ,
					   "mobile"=>$number ,
					   "wnumber"=>$number ,
					   "email"=>$email ,
					   "ispname"=>'SADV' ,
					   "unit_id"=>$unit,
					   "street_name"=>$address,
					   "site_Acc_id"=>$Site_Account_ID ,
					   "productcodestr"=>$service_array,
					   "isp_order_no"=>"AXYTU234R",
					   "id_number"=>$id_number,
					   "provider"=>$provider,
					   "delivery_instructions"=>$delivery_instructions,
					   "account_number"=>$account_number,
					   "account_type"=>$account_type,
					   "bank"=>$bank,
					   "branch"=>$branch,
					   "branch_code"=>$branch_code,
					   "promocode"=>$promocode,
					   "acc_name"=>$acc_name,
					   "del_address"=>$del_address,
					   "del_contact_no"=>$del_contact_no,
						 );
	
					 
	$payload = json_encode($webservice_data);
	$subscription_key='woFS9nCdJJoaW90XsEul';
	$request_headers = array(
			"SADV-SERVICE-KEY:" . $subscription_key,
			'Content-Type: application/json',
			'Content-Length: ' . strlen($payload)
	
		);
							
							
$url = "https://crm1.sadv.co.za/sadvcrm/vkws/sadv_apis.php"; 
$ch = curl_init($url); 
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLINFO_HEADER_OUT, true);
curl_setopt($ch, CURLOPT_POST, true);
curl_setopt($ch, CURLOPT_POSTFIELDS, $payload);
curl_setopt($ch, CURLOPT_HTTPHEADER,$request_headers);
curl_setopt($ch, CURLOPT_REFERER, 'ithemba.sadv.co.za');
$response = curl_exec($ch);
curl_close($ch);
$response_arr = json_decode($response, true);
$result=$response_arr["data"];
$orderno=$result[1];

	if($orderno!="")
	{
		$fullname=$name." ".$surname;
		$vk_ws_post_fields=array("service"=>"RicaRequest",
									 "rica_type"=>"Natural" ,
									 "opnumm"=>$orderno ,
									 "name"=>$fullname,
									 "email"=>$email ,
									 "contactnum"=>$number ,
									 "idnum"=>$id_number ,
									 "filecontents"=>$filecontents ,
									 "filename"=>$filename_modified ,
									 "filetype"=>$filetype ,
									 "filesize"=>$filesize ,
							  );
			  
	
			$payload = json_encode($vk_ws_post_fields);
			
			$host='';
			$subscription_key='R3PA8lZYKJ4zS655Enon';
			$request_headers = array(
			"SADV-SERVICE-KEY:" . $subscription_key,
			'Content-Type: application/json',
			'Content-Length: ' . strlen($payload)
			);
			
			
			$url = "https://crm1.sadv.co.za/sadvcrm/vkws/sadv_apis.php"; 
			$ch = curl_init($url); 
			curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
			curl_setopt($ch, CURLINFO_HEADER_OUT, true);
			curl_setopt($ch, CURLOPT_POST, true);
			curl_setopt($ch, CURLOPT_POSTFIELDS, $payload);
			curl_setopt($ch, CURLOPT_HTTPHEADER,$request_headers);
			curl_setopt($ch, CURLOPT_REFERER, 'sadv.co.za');
			$result = curl_exec($ch);
			curl_close($ch);
	}

print($response); exit;
}

?>