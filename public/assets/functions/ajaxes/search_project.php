<?php
require_once("../../config/config.php");
require_once("../functions.php");
$response=array();
$response['error']="";

//$_POST = array_cleaner($_POST);


    global $DBH;

	//search starts, let's build the query here itself
	//TODO pass the query to a function for future usages across the web
	$queryStr="SELECT url, u.id as u_id, p.id as p_id, ptxt.id as ptxt_id, name,ptxt.description, ptxt.social, ptxt.environment, ptxt.economy, ptxt.objective,ptxt.location,p.project_type,p.clasification, p.crated_date, p.`status`                    FROM `projects` p 
                                STRAIGHT_JOIN projects_text_fields ptxt ON p.id=ptxt.project_id
                                STRAIGHT_JOIN (select url,project_id from project_images group by project_id) pi ON pi.project_id=p.id
                                STRAIGHT_JOIN users_arch u ON u.id=p.user_id where p.status = 1 ";//hack to build the search
    
    
    if(!empty($_POST['textField']) && $_POST['textField']!=''){
   		$queryStr.=" AND p.name like '%".$_POST['textField']."%' ";
    }
    if(!empty($_POST['project_type']) && $_POST['project_type']!='0'){
   		$queryStr.=" AND p.project_type = '".$_POST['project_type']."' ";
    }
    if(!empty($_POST['clasification']) && $_POST['clasification']!='0'){
   		$queryStr.=" p.clasification = '".$_POST['clasification']."' ";
    }
    $query = $DBH->prepare($queryStr);
        

    $query->execute();
    $query->setFetchMode(PDO::FETCH_ASSOC);
    $row = $query->fetchAll();

    if($row){
    	$response['success']=true;
		$response['error']="";
		$response['projects']=$row;
    }else{
    	$response['success']=false;
		$response['error']="no_rows";
    }


header('Content-Type: application/x-json');
echo json_encode($response);
?>