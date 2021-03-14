<?php
require_once("../../config/config.php");
require_once("../functions.php");
$response=array();
$name=$_POST['name'];
$reseach_by_name=getResearch(null,null,$name);
if(empty($reseach_by_name)){
	// File upload configuration 
    $targetDir = "../../../../../ArchtionMovements/public/uploaded_files_research/"; 
    $allowTypes = array('pdf'); 
     
    $statusMsg = $errorMsg = $insertValuesSQL = $errorUpload = $errorUploadType = ''; 
    $fileNames = array_filter($_FILES['files']['name']); 
    if(!empty($fileNames)){ 
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
                	$author=$_POST['author'];
                	$type=$_POST['type'];
                	$languaje=$_POST['languaje'];
                	$author_mobile=$_POST['author_mobile'];
                	$author_email=$_POST['author_email'];
                	$published_date=$_POST['published_date'];
                	$published_place=$_POST['city'];
                    $id=insertResearch($name, $author, $type, $fileName, $languaje, $author_mobile, $author_email, $published_date, $published_place);
                    generatePreview($id); // generates image from pdf
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
}else{
	$response['success']=false;
	$response['error']="project_already_exists";
}

header('Content-Type: application/x-json');
echo json_encode($response);
?>