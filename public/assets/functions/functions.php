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

function logout(){
    session_destroy();
}

// function setAdminUser($user_name,$password,$status=1){
//     global $DBH;
//     $q='insert into usuarios_admin (name,password,status) VALUES(:user_name,:password,:status)';
//     $query = $DBH->prepare($q);
//     $query->execute(array(
//         ':user_name'=>$user_name,
//         ':password'=>hash('sha256', $password),
//         ':status'=>$status
//     ));
// }

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