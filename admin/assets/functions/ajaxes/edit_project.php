<?php
require_once("../../config/config.php");
require_once("../functions.php");
$response=array();
$project_by_id=getProyects(null,$_POST['id']);
if(!empty($project_by_id)){
	//means project is new
	$project_id=updateProject($_POST['id'],$_POST['name'], $_POST['user_id'], $_POST['clasification'], $_POST['project_type'], $_POST['status']);
	if(!empty($project_id)){
		updateProjectTxn($_POST['ptxt_id'],$_POST['description'],$_POST['location'], $_POST['social'], $_POST['environment'], $_POST['economy'], $_POST['objective'], $project_id);
		// File upload configuration 
	    $targetDir = "../../../../../ArchtionMovements/public/img/uploads/"; 
	    $allowTypes = array('jpg','png','jpeg','gif'); 
	     
	    $statusMsg = $errorMsg = $insertValuesSQL = $errorUpload = $errorUploadType = ''; 
	    $fileNames = array_filter($_FILES['files']['name']); 
	    if(!empty($fileNames)){ 

	        updateImagesProject($project_id);
	    	$order=json_decode($_POST['order'],1);// this give us an array with the order
	        foreach($_FILES['files']['name'] as $key=>$val){ 
	            // File upload path 
	            $fileName = basename($_FILES['files']['name'][$key]); 
	            $targetFilePath = $targetDir . $fileName; 
	             
	            // Check whether file type is valid 
	            $fileType = pathinfo($targetFilePath, PATHINFO_EXTENSION); 
	            if(in_array($fileType, $allowTypes)){ 
	                // Upload file to server 
	                if(move_uploaded_file($_FILES["files"]["tmp_name"][$key], $targetFilePath)){ 
	                    // Image db insert sql 
	                    insertImagesProject($project_id, $fileName,array_search($fileName, $order));
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
}else{
	$response['success']=false;
	$response['error']="project_already_exists";
}

header('Content-Type: application/x-json');
echo json_encode($response);
?>