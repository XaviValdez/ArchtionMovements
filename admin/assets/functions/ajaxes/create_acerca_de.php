<?php
require_once("../../config/config.php");
require_once("../functions.php");
$response=array();

// File upload configuration 
$targetDir = "../../../../../ArchtionMovements/public/img/acerca_de/"; 
$allowTypes = array('jpg','png','jpeg','gif'); 
 
$statusMsg = $errorMsg = $insertValuesSQL = $errorUpload = $errorUploadType = ''; 
$fileNames = array_filter($_FILES['files']['name']); 
$status_img=array();
if(!empty($fileNames)){ 
	if(sizeof($_FILES['files']['name'])>2){
		$response['success']=false;
		$response['error']="more_images";
		$response['name']=$fileName;
	}
	$i=0;
    foreach($_FILES['files']['name'] as $key=>$val){ 
        // File upload path 
        $fileName = basename($_FILES['files']['name'][$key]); 
        $targetFilePath = $targetDir . $fileName; 
         
        // Check whether file type is valid 
        $fileType = pathinfo($targetFilePath, PATHINFO_EXTENSION); 
        if(in_array($fileType, $allowTypes)){ 
            // Upload file to server 
            if(move_uploaded_file($_FILES["files"]["tmp_name"][$key], $targetFilePath)){ 
                $status_img[$i]=$fileName;
                $i++;
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
if($status_img[0] && $status_img[1]){
	// Image db insert sql 
    insertAcercade($_POST['title'],$_POST['subtitle1'],$_POST['subtitle2'], $status_img[0], $status_img[1]);
    $response['success']=true;
	$response['error']="project_uploaded";
}

header('Content-Type: application/x-json');
echo json_encode($response);
?>