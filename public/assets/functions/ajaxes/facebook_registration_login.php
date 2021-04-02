<?php
require_once("../../config/config.php");
require_once("../functions.php");
$response=array();
$response['error']="";

$_POST = array_cleaner($_POST);
//we don't hv splitted the name of the user and we hv several cases, for now only assuming 3
//1 when user has 4 name (2 and 2)
//2 when user has 2 name (1 and 1)
//3 when user has 3 name (here's the complexity, i'll assume 1 and 2)
//4 when user only has  1
//TODO missing case when user has more than 4, we should only take the first 4
$name=explode(" ", $_POST['name']);
switch (sizeof($name)) {
	case 1:
		# code...
		$_POST['first_name']=$name[0];
		$_POST['last_name']="  ";//empty
		break;
	case 2:
		# code...
		$_POST['first_name']=$name[0];
		$_POST['last_name']=$name[1];
		break;
	case 3:
		# code...
		$_POST['first_name']=$name[0];
		$_POST['last_name']=$name[1];
		$_POST['second_last_name']=$name[2];
		break;
	case 4:
		# code...
		$_POST['first_name']=$name[0];
		$_POST['middle_name']=$name[1];
		$_POST['last_name']=$name[2];
		$_POST['second_last_name']=$name[3];
		break;
}
$required_entries = ['first_name','last_name','email','password'];
if(verify_entries($_POST,$required_entries)){

	$user_info=getEmail($_POST['email']); // get user info based on email

	if(!empty($user_info)){ // If user exists
		//we do the login
		$password_db=$user_info['password'];
		if(!empty($password_db)){ // If we found the username
			
			$password_from_form=hash('sha256', $_POST['password']); // Hash the form password
			if($password_from_form==$password_db){ // If the password matches the DB password
				$response['success']=true;
				$_SESSION['user_id']=$user_info['id'];

				UpdateLastLogin($user_info['id']); // Update last login

			}else{
				$response['success']=false;
				$response['error']="pass_incorrect";
			}
		}else{
			$response['success']=false;
			$response['error']="user_pwd_not_found";
		}
	} else { 
		$response['success']=true;
		// Set user and return last insert id
		$_SESSION['user_id']=setUser($_POST['first_name'],$_POST['last_name'],$_POST['email'],$_POST['password'],1,$_POST['middle_name'],$_POST['second_last_name']);
	}
}
else {
	$response['success']=false;
	$response['error']="missing_fields";
}

header('Content-Type: application/x-json');
echo json_encode($response);
?>