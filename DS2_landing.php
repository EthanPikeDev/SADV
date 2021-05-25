<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<!--https://gasparesganga.com/labs/jquery-loading-overlay/#comments-and-ideas
-->
<title>Untitled Document</title>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/gasparesganga-jquery-loading-overlay@2.1.6/dist/loadingoverlay.min.js"></script>
</head>

<body>
<?php
echo '<script>
 $( document ).ready(function() {
        		$.LoadingOverlay("show", {
					image       : "",
					text        : "Signed Contract Getting Uploaded To CRM.Please Wait...."
				});
    });
</script>';
$envelopeId=urldecode($_REQUEST["envelope"]);
$name=urldecode($_REQUEST["name"]);
$reciemail=urldecode($_REQUEST["reciemail"]);

$email = "sales@sadv.co.za";
$password = "xdLlHlbUjGspeUj";
$integratorKey = "SADI-564e43f1-cdb3-44a3-9f36-16cb835176e1";
$header = "<DocuSignCredentials><Username>" . $email . "</Username><Password>" . $password . "</Password><IntegratorKey>" . $integratorKey . "</IntegratorKey></DocuSignCredentials>";
$url = "https://www.docusign.net/restapi/v2/login_information";
$curl = curl_init($url);
curl_setopt($curl, CURLOPT_HEADER, false);
curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
curl_setopt($curl, CURLOPT_HTTPHEADER, array("X-DocuSign-Authentication: $header"));

$json_response = curl_exec($curl);
$status = curl_getinfo($curl, CURLINFO_HTTP_CODE);

if ( $status != 200 ) {
echo "error calling webservice, status is:" . $status;
exit(-1);
}

$response = json_decode($json_response, true);
$accountId = $response["loginAccounts"][0]["accountId"];
$baseUrl = $response["loginAccounts"][0]["baseUrl"];
curl_close($curl);

$curl_b = curl_init($baseUrl . "/envelopes/" . $envelopeId . "/form_data" );
curl_setopt($curl_b, CURLOPT_RETURNTRANSFER, true);
curl_setopt($curl_b, CURLOPT_HTTPHEADER, array(                                                                          
"X-DocuSign-Authentication: $header" )                                                                       
);
$json_response_b = curl_exec($curl_b);
$status_b = curl_getinfo($curl_b, CURLINFO_HTTP_CODE);
$response_b = json_decode($json_response_b, true); 
curl_close($curl_b);
$recipientFormData_b=$response_b["recipientFormData"][0]["formData"];

$fromdata=array();
if(count($recipientFormData_b)>0)
{
	foreach ($recipientFormData_b as $key => $dataarr)
	{
		$name=$dataarr["name"];
		$value=$dataarr["value"];
		
		$fromdata[$name]=$value;
	}
}
$OrderNo=$fromdata["OrderNo"];

$webservice_data=array("service"=>"UploadDocuSignContract",
					   "orderno"=>$OrderNo,
					   "envelope_id"=>$envelopeId ,
						 );
	
					 
	$payload = json_encode($webservice_data);
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
$response = curl_exec($ch);
curl_close($ch);
$response_arr = json_decode($response, true);
$message=$response_arr["message"];
//echo $response;


echo '<script>
 $( document ).ready(function() {
        		$.LoadingOverlay("hide");
    });
</script>';
?>
<div class="alert alert-success" role="alert">
  <h4 class="alert-heading">Server Response</h4>
  <p><h2><?php echo $message ?></h2></p>
  <p><a href="http://test.sadv.co.za/landing">Go back...</a></p>
  <hr>
  <p class="mb-0"><?php echo $response ?></p>
  <p class="mb-0">SADV ISP</p>
</div>
</body>
</html>




