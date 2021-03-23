<?php
require_once("../../config/config.php");
require_once("../functions.php");
$response=array();
$response['error']="";

$_POST = array_cleaner($_POST);

$required_entries = ['name','location','descr','social','ambiental','economico','objectivo'];

if(verify_entries($_POST,$required_entries)){
	

	$last_id = insertProject($_POST["name"],$_SESSION['user_id'],2); 
	insertProjectTxn($_POST["descr"],$_POST["location"], $_POST["social"], $_POST["ambiental"], $_POST["economico"], $_POST["objectivo"], $last_id);

	$response['success']=true;
}
else {
	$response['success']=false;
	$response['error']="missing_fields";
}

header('Content-Type: application/x-json');
echo json_encode($response);
?>