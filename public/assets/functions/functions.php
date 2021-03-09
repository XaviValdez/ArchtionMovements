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

function getProjects($status=null,$id=null,$name=null){
    global $DBH;
    if(!empty($status)){
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

function getEmail($email,$status=1){
    global $DBH;
    $query = $DBH->prepare('SELECT * FROM users_arch WHERE email=:email and status=:status');
    $query->execute(array(
        ':email'=>$email,
        ':status'=>$status
    ));
    $query->setFetchMode(PDO::FETCH_ASSOC);
    $row = $query->fetch();
    if($row && !empty($row['id']))
        return $row;
    return false;
}

// Fetch name of user
function getUsername($p_id,$status=1){
    global $DBH;
    $query = $DBH->prepare('SELECT * FROM users_arch WHERE id=:p_id and status=:status');
    $query->execute(array(
        ':p_id'=>$p_id,
        ':status'=>$status
    ));
    $query->setFetchMode(PDO::FETCH_ASSOC);
    $row = $query->fetch();
    if($row && !empty($row['id']))
        return $row;
    return false;
}

// Fetch data from about table
function getAcercaDe(){
    global $DBH;
    $query = $DBH->prepare('SELECT * FROM about');
    $query->execute();
    $query->setFetchMode(PDO::FETCH_ASSOC);
    $row = $query->fetch();
    if($row) {
        return $row;
    }
    return false;
}

// Get images of project
function getImg($p_id,$status=1){
    global $DBH;
    $query = $DBH->prepare('SELECT * FROM project_images WHERE project_id=:p_id and status=:status');
    $query->execute(array(
        ':p_id'=>$p_id,
        ':status'=>$status
    ));
    $query->setFetchMode(PDO::FETCH_ASSOC);
    $rows = $query->fetchAll();
    
    if($rows) {
        return $rows;
    }
        
    return false;


}

function logout(){
    session_destroy();
}

function setUser($first_name,$last_name,$email,$password,$status=1){
    global $DBH;
    $q='insert into users_arch (first_name,last_name,email,password,status) VALUES(:first_name,:last_name,:email,:password,:status)';
    $query = $DBH->prepare($q);
    $query->execute(array(
        ':first_name'=>$first_name,
        ':last_name'=>$last_name,
        ':email'=>$email,
        ':password'=>hash('sha256', $password),
        ':status'=>$status
    ));
    return $DBH->lastInsertId();
}

// Update last login
function UpdateLastLogin($p_id){
    global $DBH;
    $q='UPDATE users_arch SET last_login_date=CURRENT_TIMESTAMP WHERE id=:p_id';
    $query = $DBH->prepare($q);
    $query->execute(array(
        ':p_id'=>$p_id
    ));
}

// Return a clean single entry 
function cleaner($p) {
    return $p = htmlspecialchars($p);
}

// Return a clean array
function array_cleaner($arr){
    foreach($arr as &$key){
        $key = cleaner($key);
    }
    return $arr;
}

// Return true if all required entries are filled
function verify_entries($arr, $required_entries){
    foreach ($required_entries as $entry){
        if(!isset($arr[$entry]) || $arr[$entry]==""){
            return false;
        }
    }
    return true;
}

?>