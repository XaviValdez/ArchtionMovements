<?php
require_once("../../config/config.php");
require_once("../functions.php");
$response=array();
$city=getListCountry($_POST['country_code']);
if(!empty($city)){
	//we got cities
	$response['success']=true;
	$response['cities']=$city;

}else{
	$response['success']=false;
	$response['error']="project_already_exists";
}

header('Content-Type: application/x-json');
echo json_encode($response);
?>