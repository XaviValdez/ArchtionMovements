<?php
require_once("../../config/config.php");
require_once("../functions.php");
$response=array();

$admin_user_info=getAdminUser($_POST['username']);
$password_db=$admin_user_info['password'];
if(!empty($password_db)){
	//means we found the username
	$password_from_form=hash('sha256', $_POST['password']);
	if($password_from_form==$password_db){
		$response['success']=true;
		$_SESSION['admin_id']=$admin_user_info['id'];
	}else{
		$response['success']=false;
		$response['error']="pass_incorrect";
	}
}else{
	$response['success']=false;
	$response['error']="user_not_found";
}

header('Content-Type: application/x-json');
echo json_encode($response);
?>