<?php
require_once("../../config/config.php");
require_once("../functions.php");
$response=array();

$user_info=getEmail($_POST['email']);
if(!empty($user_info)){
	$password_db=$user_info['password'];
	if(!empty($password_db)){
		//means we found the username
		$password_from_form=hash('sha256', $_POST['password']); // Hash the form password
		if($password_from_form==$password_db){ // If the password matches the DB password
			$response['success']=true;
			$_SESSION['user_id']=$user_info['id'];
		}else{
			$response['success']=false;
			$response['error']="pass_incorrect";
		}
	}else{
		$response['success']=false;
		$response['error']="user_pwd_not_found";
	}
}else{
	$response['success']=false;
	$response['error']="user_not_found";
}

header('Content-Type: application/x-json');
echo json_encode($response);
?>