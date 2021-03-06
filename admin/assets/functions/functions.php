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

?>