<?php
header("Content-Type:application");
require "data.php";

if(!empty($_GET['product']))
{
	$product=$_GET['product'];
	$price = get_price($product);
	$designer = get_designer($product);
	
	if(empty($price))
	{
		response(200,"Product Not Found",NULL,NULL);
	}
	else
	{
		response(200,"Product Found", $price, $designer);
		
	}	
}
else
{
	response(400,"Invalid Request",NULL,NULL);
}

function response($status,$status_message,$data1,$data2)
{
	header("HTTP/1.1 ".$status);
	
	$response['status']=$status;
	$response['status_message']=$status_message;
	$response['price']=$data1;
	$response['designer']=$data2;

	$json_response = json_encode($response);
	echo $json_response;
}

?>



