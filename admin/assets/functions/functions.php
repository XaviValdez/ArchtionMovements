<?php 
function checklogin(){
    $expiredByDate = empty($_SESSION['loginTimestamp']) || $_SESSION['loginTimestamp'] !== date('Ymd', time());
	if(empty($_SESSION['authUser']) || $expiredByDate || !isCurrentActiveSession()){
		return false;
	}else{
		return true;
	}
}

function isCurrentActiveSession(){
    if(isset($_SESSION['admin_id'])){
        return true;
    }else{
        return false;        
    }
}

function getAdminUser($user_name,$status=1){
    global $DBH;
    $query = $DBH->prepare('SELECT * FROM usuarios_admin WHERE name=:user_name and status=:status');
    $query->execute(array(
        ':user_name'=>$user_name,
        ':status'=>$status
    ));
    $query->setFetchMode(PDO::FETCH_ASSOC);
    $row = $query->fetch();
    if($row && !empty($row['id']))
        return $row;
    return false;
}

function logout(){
    session_destroy();
}

function setAdminUser($user_name,$password,$status=1){
    global $DBH;
    $q='insert into usuarios_admin (name,password,status) VALUES(:user_name,:password,:status)';
    $query = $DBH->prepare($q);
    $query->execute(array(
        ':user_name'=>$user_name,
        ':password'=>hash('sha256', $password),
        ':status'=>$status
    ));
}

function getProyects($status,$id=null,$name=null){
    global $DBH;
    if(!empty($status) && empty($id) && empty($name)){
        //get them all
        $query = $DBH->prepare('SELECT u.id as "u_id", p.id as "p_id", name, ptxt.description, ptxt.social, ptxt.environment, ptxt.economy, ptxt.objective, p.crated_date, p.`status`                    FROM `projects` p 
                                STRAIGHT_JOIN projects_text_fields ptxt ON p.id=ptxt.project_id
                                STRAIGHT_JOIN users_arch u ON u.id=p.user_id
                                WHERE p.status=:status;');
        $query->execute(array(
            ':status'=>$status
        ));
    }else if(!empty($id)){
        //searching for specific project
        $query = $DBH->prepare('SELECT u.id as "u_id", p.id as "p_id", name, ptxt.description, ptxt.social, ptxt.environment, ptxt.economy, ptxt.objective, p.crated_date, p.`status`                    FROM `projects` p 
                                STRAIGHT_JOIN projects_text_fields ptxt ON p.id=ptxt.project_id
                                STRAIGHT_JOIN users_arch u ON u.id=p.user_id
                                WHERE p.id=:project_id;');
        $query->execute(array(
            ':project_id'=>$id
        ));
    }else if(!empty($name)){
        //searching for specific project
        $query = $DBH->prepare('SELECT u.id as "u_id", p.id as "p_id", name, ptxt.description, ptxt.social, ptxt.environment, ptxt.economy, ptxt.objective, p.crated_date, p.`status`                    FROM `projects` p 
                                STRAIGHT_JOIN projects_text_fields ptxt ON p.id=ptxt.project_id
                                STRAIGHT_JOIN users_arch u ON u.id=p.user_id
                                WHERE p.name=:name;');
        $query->execute(array(
            ':name'=>$name
        ));
    }
    $query->setFetchMode(PDO::FETCH_ASSOC);
        $row = $query->fetchAll();

    if($row)
        return $row;
    return false;
}

function table_helper_projects($array,$table_head){
    foreach ($array as $value) {
        $table= $table_head.'
              <tr>
                <td>
                  '.$value["p_id"].'
                </td>
                <td>
                  '.$value["u_id"].'
                </td>
                <td>
                  '.$value["name"].'
                </td>
                <td>
                  '.$value["description"].'
                </td>
                <td>
                  '.$value["social"].'
                </td>
                <td>
                  '.$value["environment"].'
                </td>
                <td>
                  '.$value["economy"].'
                </td>
                <td>
                  '.$value["objective"].'
                </td>
                <td>
                  '.$value["crated_date"].'
                </td>
                <td>
                  '.$value["status"].'
                </td>
              </tr>
            ';
    }
    return $table;
}

function getListUser($status, $id=null){
    global $DBH;
    if(empty($id)){
        //get them all
        $query = $DBH->prepare('SELECT id, first_name, middle_name, last_name, second_last_name, email from users_arch
                                WHERE status=:status;');
        $query->execute(array(
            ':status'=>$status
        ));
    }else{
        //searching for specific project
        $query = $DBH->prepare('SELECT id, first_name, middle_name, last_name, second_last_name, email from users_arch
                                WHERE id=:user_id;');
        $query->execute(array(
            ':user_id'=>$id
        ));
    }

    $query->setFetchMode(PDO::FETCH_ASSOC);
    $row = $query->fetchAll();
    if($row)
        return $row;
    return false;
    echo "<pre>";
    print_r($row);
}
function insertImagesProject($id, $filename, $status=1){
    global $DBH;
    $q='insert into project_images (project_id,url,status) VALUES(:project_id,:url,:status)';
    $query = $DBH->prepare($q);
    $query->execute(array(
        ':project_id'=>$id,
        ':url'=>$filename,
        ':status'=>$status
    ));
}
function insertProject($name, $user_id, $status=1){
    global $DBH;
    $q='insert into projects (name,user_id,status) VALUES(:name,:user_id,:status)';
    $query = $DBH->prepare($q);
    $query->execute(array(
        ':name'=>$name,
        ':user_id'=>$user_id,
        ':status'=>$status
    ));
    return $DBH->lastInsertId();
}
function insertProjectTxn($description, $social, $environment, $economy, $objective, $project_id){
    global $DBH;
    $q='insert into projects_text_fields (description,social,environment,economy,objective,project_id) VALUES(:description,:social,:environment,:economy,:objective,:project_id)';
    $query = $DBH->prepare($q);
    $query->execute(array(
        ':description'=>$description,
        ':social'=>$social,
        ':environment'=>$environment,
        ':economy'=>$economy,
        ':objective'=>$objective,
        ':project_id'=>$project_id
    ));
}

?>