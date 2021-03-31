<?php
require_once("../../config/config.php");
require_once("../functions.php");

$response=array();
$evento_by_name = getEventos(null,null,$_POST['name']);

if(empty($evento_by_name)) {
	//means evento is new
	insertEvento($_POST['name'], $_POST['description'], $_POST['location'],$_POST['evento_type'], $_POST['speaker_name'], $_POST['speaker_description'], $_POST['url'], $_POST['date']);
	
	$response['success'] = true;
	$response['error'] = "evento_uploaded";
}
else {
	$response['success'] = false;
	$response['error'] = "project_already_exists";
}

header('Content-Type: application/x-json');
echo json_encode($response);
?>