<?php
$query=$_POST['query'];
$dataArray = array("text"=>$query);
if(isset($_POST['query']))
{
$cURLConnection = curl_init();
$url='https://geocode.arcgis.com/arcgis/rest/services/World/GeocodeServer/suggest?f=pjson&countrycode=ZA';
$data = http_build_query($dataArray);
$getUrl = $url."&".$data;

curl_setopt($cURLConnection, CURLOPT_URL, $getUrl);
curl_setopt($cURLConnection, CURLOPT_RETURNTRANSFER, true);

$phoneList = curl_exec($cURLConnection);
curl_close($cURLConnection);

$jsonArrayResponse=json_decode($phoneList);

$address_arr=$jsonArrayResponse->suggestions;
$output = '';
	if(count($address_arr)>0)
	{
	   foreach ($address_arr as $key => $address)
		{
			$text=$address->text;
			$magicKey=$address->magicKey;
			
			 $output .= '
	  <li class="list-group-item contsearch">
	   <a data-magickey='.$magicKey.' href="javascript:void(0)" class="gsearch" style="color:#333;text-decoration:none;">'.$text.'</a>
	  </li>
	  ';
			
		}
	}
	
	
	echo $output;
}

//fetch.php;


if(isset($_POST['email']))
{
 $magickey=$_POST['magickey'];
 $dataArray = array("magicKey"=>$magickey);
 $cURLConnection = curl_init();
$url='https://geocode.arcgis.com/arcgis/rest/services/World/GeocodeServer/findAddressCandidates?f=json';
$data = http_build_query($dataArray);
$getUrl = $url."&".$data;
curl_setopt($cURLConnection, CURLOPT_URL, $getUrl);
curl_setopt($cURLConnection, CURLOPT_RETURNTRANSFER, true);

$phoneList = curl_exec($cURLConnection);
curl_close($cURLConnection);

$jsonArrayResponse=json_decode($phoneList);
$candidates=$jsonArrayResponse->candidates;
$location=$candidates[0]->location;

$lat=$location->y;
$lng=$location->x;
$lat_lng_arr=array("lat"=>$lat,"lng"=>$lng);
//$lat_lng=implode(",",$lat_lng_arr);
$lat_lng_str=json_encode($lat_lng_arr);
 echo $lat_lng_str;
}


?>