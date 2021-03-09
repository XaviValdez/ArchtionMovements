<?php
require_once("../../config/config.php");
require_once("../functions.php");
$response=array();
$response['error']="";

$_POST = array_cleaner($_POST);

$required_entries = ['name','email','message'];

if(verify_entries($_POST,$required_entries)){
	$response['success']=true;
	sendContact($_POST["name"],$_POST["email"],$_POST["message"],1);
}
else {
	$response['success']=false;
	$response['error']="missing_fields";
}

header('Content-Type: application/x-json');
echo json_encode($response);
?>