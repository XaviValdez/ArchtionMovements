<?php
require_once("../../config/config.php");
require_once("../functions.php");
$response=array();
$response['error']="";

//$_POST = array_cleaner($_POST);

$required_entries = ['name','location','descr','social','ambiental','economico','objectivo'];

if(verify_entries($_POST,$required_entries)){
	

	$last_id = insertProject($_POST["name"],$_SESSION['user_id'],2); 
	insertProjectTxn($_POST["descr"],$_POST["location"], $_POST["social"], $_POST["ambiental"], $_POST["economico"], $_POST["objectivo"], $last_id);
// File upload configuration 
	    $targetDir = "../../../img/uploads/"; 
	    $allowTypes = array('jpg','png','jpeg','gif'); 
	     
	    $statusMsg = $errorMsg = $insertValuesSQL = $errorUpload = $errorUploadType = ''; 
	    $fileNames = array_filter($_FILES['files']['name']); 
	    if(!empty($fileNames)){ 
	    	$order=json_decode($_POST['order'],1);// this give us an array with the order
	    	

	        foreach($_FILES['files']['name'] as $key=>$val){ 
	            // File upload path 
	            $fileName = $_SESSION['user_id'].basename($_FILES['files']['name'][$key]); 
	            $targetFilePath = $targetDir . $fileName; 
	             
	            // Check whether file type is valid 
	            $fileType = pathinfo($targetFilePath, PATHINFO_EXTENSION); 
	            if(in_array($fileType, $allowTypes)){ 
	                // Upload file to server 
	                if(move_uploaded_file($_FILES["files"]["tmp_name"][$key], $targetFilePath)){ 
	                    // Image db insert sql 
	                    insertImagesProject($last_id, $fileName,array_search(str_replace($_SESSION['user_id'], '', $fileName), $order));
	                    $response['success']=true;
						$response['error']="project_uploaded";
	                }else{ 
	                    $response['success']=false;
						$response['error']="failed_to_upload";
						$response['name']=$fileName; 
	                } 
	            }else{ 
	                $response['success']=false;
					$response['error']="extention_invalid";
					$response['name']=$fileName;
	            } 
	        } 
	    }
}
else {
	$response['success']=false;
	$response['error']="missing_fields";
}

header('Content-Type: application/x-json');
echo json_encode($response);
?>