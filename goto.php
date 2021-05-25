<?php
$orderno=urldecode($_REQUEST["orderno"]);
$fullname=urldecode($_REQUEST["fullname"]);
$mobile=urldecode($_REQUEST["mobile"]);
$email=urldecode($_REQUEST["email"]);
$service_key='5b3b1cfe-f973-47ed-85d9-370943b9a939';
$params = array(
		"ServiceKey" => $service_key,
		"AccountReference" => strval($orderno),
		"MandateName" => $fullname,
		"MandateAmount" => "100.50",
		"IsConsumer" => "1",
		"FirstName" => "Vivek",
		"Surname" => "Mahatma",
		"TradingName" => "",
		"RegistrationNumber" => "",
		"RegisteredName" => "",
		"MobileNumber" =>$mobile,
		"MandateDebitFrequency" => "1",
		"CommencementMonth" => "03",
		"CommencementDay" => "01",
		"AgreementDate" => "20210408",
		"AgreementReferenceNumber" => $orderno,
		"CancellationNoticePeriod" => "10",
		"MandatePublicHolidayOption" => "15",
		"EmailAddress" => $email,
		"Field1" => "123456",
		"Field2" => "Fibre Fast Uncapped 50/50 @ R1045,Phone Lines",
	);
	
	
	
	$soap = new SoapClient(
		'https://ws.netcash.co.za/NIWS/NIWS_NIF.svc?singleWsdl',
		array(
			"trace" => 1,
			'soap_version' => SOAP_1_1,
		)
	);
	$result = $soap->AddMandate($params);
	$result_arr = json_decode(json_encode($result), true);
	$AddMandateResult=$result_arr["AddMandateResult"];
	$ErrorCode=$AddMandateResult["ErrorCode"];
	$Errors=$AddMandateResult["Errors"];
	$MandateUrl=$AddMandateResult["MandateUrl"];
	ob_clean();
	header("location: $MandateUrl");
	ob_end_flush();
	exit;
?>