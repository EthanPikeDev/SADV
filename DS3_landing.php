<?php
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
$envelopeId='a919ae7e-71e0-4cdf-95bb-62e0eb5753ab';

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
echo "<pre>";
print_r($fromdata);  
die($OrderNo."deded");

?>