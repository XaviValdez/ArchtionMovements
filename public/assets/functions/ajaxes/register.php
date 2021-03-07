<?php
require_once("../../config/config.php");
require_once("../functions.php");
$response=array();
$response['error']="";

$_POST = array_cleaner($_POST);

$required_entries = ['first_name','last_name','email','password'];

if(verify_entries($_POST,$required_entries)){

	$user_info=getEmail($_POST['email']); // get user info based on email

	if(!empty($user_info)){ // If user exists
		$response['success']=false;
		$response['error']="user_already_registered";
	} else { 
		$response['success']=true;

		// Set user and return last insert id
		$_SESSION['user_id']=setUser($_POST['first_name'],$_POST['last_name'],$_POST['email'],$_POST['password']);
	}
}
else {
	$response['success']=false;
	$response['error']="missing_fields";
}

header('Content-Type: application/x-json');
echo json_encode($response);
?>