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

function logout(){
    session_destroy();
}

// FETCH PROJECTS
function getProjects($status=null,$id=null,$name=null){
    global $DBH;
    if(!empty($status)){
        //get them all
        $query = $DBH->prepare('SELECT u.id as "u_id", p.id as "p_id", name, ptxt.description, ptxt.location, ptxt.social, ptxt.environment, ptxt.economy, ptxt.objective, p.crated_date, p.`status`                    FROM `projects` p 
                                STRAIGHT_JOIN projects_text_fields ptxt ON p.id=ptxt.project_id
                                STRAIGHT_JOIN users_arch u ON u.id=p.user_id
                                WHERE p.status=:status;');
        $query->execute(array(
            ':status'=>$status
        ));
    }else if(!empty($id)){
        //searching for specific project
        $query = $DBH->prepare('SELECT u.id as "u_id", p.id as "p_id", name, ptxt.description, ptxt.location, ptxt.social, ptxt.environment, ptxt.economy, ptxt.objective, p.crated_date, p.`status`                    FROM `projects` p 
                                STRAIGHT_JOIN projects_text_fields ptxt ON p.id=ptxt.project_id
                                STRAIGHT_JOIN users_arch u ON u.id=p.user_id
                                WHERE p.id=:project_id;');
        $query->execute(array(
            ':project_id'=>$id
        ));
    }else if(!empty($name)){
        //searching for specific project
        $query = $DBH->prepare('SELECT u.id as "u_id", p.id as "p_id", name, ptxt.description, ptxt.location, ptxt.social, ptxt.environment, ptxt.economy, ptxt.objective, p.crated_date, p.`status`                    FROM `projects` p 
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
function getProyectsTypes(){
    global $DBH;
    
        $query = $DBH->prepare('SELECT * from proyect_type;');
        $query->execute();
    

    $query->setFetchMode(PDO::FETCH_ASSOC);
    $row = $query->fetchAll();
    if($row)
        return $row;
    return false;
    echo "<pre>";
    print_r($row);
}
function getProyectsClasification(){
    global $DBH;
    
        $query = $DBH->prepare('SELECT * from project_clasification;');
        $query->execute();
    

    $query->setFetchMode(PDO::FETCH_ASSOC);
    $row = $query->fetchAll();
    if($row)
        return $row;
    return false;
    echo "<pre>";
    print_r($row);
}
// Fetch Eventos
function getEventos($status=null,$id=null,$name=null){
    global $DBH;
    if(!empty($status)){
        //get them all
        $query = $DBH->prepare('SELECT * FROM eventos WHERE status=:status;');
        $query->execute(array(
            ':status'=>$status
        ));
    }else if(!empty($id)){
        //searching for specific evento
        $query = $DBH->prepare('SELECT * FROM eventos WHERE id=:evento_id;');
        $query->execute(array(
            ':evento_id'=>$id
        ));
    }else if(!empty($name)){
        //searching for specific evento
        $query = $DBH->prepare('SELECT * FROM eventos WHERE name=:evento_name;');
        $query->execute(array(
            ':evento_name'=>$name
        ));
    }
    $query->setFetchMode(PDO::FETCH_ASSOC);
    $row = $query->fetchAll();

    if($row)
        return $row;
    return false;
}

// FETCH RESEARCH
function getResearch($status=null,$id=null,$name=null){
    global $DBH;
    if(!empty($status)){
        //get them all
        $query = $DBH->prepare('SELECT r.id as "r_id", name, author, url, author_mobile, author_email, published_date, rt.description as "type", c.city, c.country_code, rl.small_lang, status
                                from research r
                                STRAIGHT_JOIN research_types rt ON r.type=rt.id
                                STRAIGHT_JOIN ciudades c on r.published_place= c.id
                                STRAIGHT_JOIN research_languajes rl ON r.languaje=rl.id
                                WHERE r.`status`=:status;');
        $query->execute(array(
            ':status'=>$status
        ));
    }else if(!empty($id)){
        //searching for specific project
        $query = $DBH->prepare('SELECT r.id, name, author, url, author_mobile, author_email, published_date, rt.description as "type", c.city, c.country_code, rl.small_lang, status
                                from research r
                                STRAIGHT_JOIN research_types rt ON r.type=rt.id
                                STRAIGHT_JOIN ciudades c on r.published_place= c.id
                                STRAIGHT_JOIN research_languajes rl ON r.languaje=rl.id
                                WHERE r.`id`=:project_id;');
        $query->execute(array(
            ':project_id'=>$id
        ));
    }else if(!empty($name)){
        //searching for specific project
        $query = $DBH->prepare('SELECT r.id, name, author, url, author_mobile, author_email, published_date, rt.description as "type", c.city, c.country_code, rl.small_lang, status
                                from research r
                                STRAIGHT_JOIN research_types rt ON r.type=rt.id
                                STRAIGHT_JOIN ciudades c on r.published_place= c.id
                                STRAIGHT_JOIN research_languajes rl ON r.languaje=rl.id
                                WHERE r.`name`=:name;');
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


function findResearch($p_id) {
    global $DBH;
    $query = $DBH->prepare('SELECT * FROM `research` WHERE `id`=:p_id');
    $query->execute(array(
        ':p_id'=>$p_id
    ));

    $query->setFetchMode(PDO::FETCH_ASSOC);
    $row = $query->fetchAll();

    if($row)
        return $row;
    return false;
}

// Get Email of users_arch
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

// Fetch data from ABOUT table
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

// Insert new user into DB
function setUser($first_name,$last_name,$email,$password,$status=1, $middle_name=null, $second_last_name=null){
    global $DBH;
    $q='insert into users_arch (first_name,middle_name,last_name,second_last_name,email,password,status) VALUES(:first_name,:middle_name,:last_name,:second_last_name,:email,:password,:status)';
    $query = $DBH->prepare($q);
    $query->execute(array(
        ':first_name'=>$first_name,
        ':last_name'=>$last_name,
        ':middle_name'=>$middle_name,
        ':second_last_name'=>$second_last_name,
        ':email'=>$email,
        ':password'=>hash('sha256', $password),
        ':status'=>$status
    ));
    return $DBH->lastInsertId();
}

// Insert new contact into DB
function sendContact($p_name,$p_email,$p_message,$p_status){
    global $DBH;
    $q='insert into contact (name,email,message,status) VALUES(:p_name,:p_email,:p_message,:p_status)';
    $query = $DBH->prepare($q);
    $query->execute(array(
        ':p_name'=>$p_name,
        ':p_email'=>$p_email,
        ':p_message'=>$p_message,
        ':p_status'=>$p_status
    ));
}

// Insert new project into DB
function insertImagesProject($id, $filename, $order, $status=1){
    global $DBH;
    $q='insert into project_images (project_id, url, order_img, status) VALUES(:project_id, :url, :order, :status);';
    $query = $DBH->prepare($q);
    $query->execute(array(
        ':project_id'=>$id,
        ':url'=>$filename,
        ':order'=>$order,
        ':status'=>$status
    ));
}
function insertProject($name, $user_id, $clasification,$project_type, $status=1){
    global $DBH;
    $q='insert into projects (name,user_id,status,clasification,project_type) VALUES(:name,:user_id,:status,:clasification,:project_type)';
    $query = $DBH->prepare($q);
    $query->execute(array(
        ':name'=>$name,
        ':user_id'=>$user_id,
        ':clasification'=>$clasification,
        ':project_type'=>$project_type,
        ':status'=>$status
    ));
    return $DBH->lastInsertId();
}
function insertProjectTxn($description,$location, $social, $environment, $economy, $objective, $project_id){
    global $DBH;
    $q='insert into projects_text_fields (description,location,social,environment,economy,objective,project_id) VALUES(:description,:location,:social,:environment,:economy,:objective,:project_id)';
    $query = $DBH->prepare($q);
    $query->execute(array(
        ':description'=>$description,
        ':location'=>$location,
        ':social'=>$social,
        ':environment'=>$environment,
        ':economy'=>$economy,
        ':objective'=>$objective,
        ':project_id'=>$project_id
    ));
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


function isLoggedIn(){
    return isset($_SESSION['user_id']);
}
?>