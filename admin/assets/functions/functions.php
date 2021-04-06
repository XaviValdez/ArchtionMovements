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

function getProyects($status=null,$id=null,$name=null){
    global $DBH;
    $queryStr="SELECT pt.description as p_type, pc.description as clasification_d,u.id as u_id, p.id as p_id, ptxt.id as ptxt_id, name,ptxt.description, ptxt.social, ptxt.environment, ptxt.economy, ptxt.objective,ptxt.location,p.project_type,p.clasification, p.crated_date, p.`status`                    FROM `projects` p 
                                STRAIGHT_JOIN projects_text_fields ptxt ON p.id=ptxt.project_id
                                STRAIGHT_JOIN proyect_type pt ON pt.id=p.project_type
                                STRAIGHT_JOIN project_clasification pc ON pc.id=p.clasification
                                STRAIGHT_JOIN users_arch u ON u.id=p.user_id ";
    if(!empty($status)){
        //get them all
        $finalq=$queryStr."WHERE p.status=:status;";
        $query = $DBH->prepare($finalq);
        $query->execute(array(
            ':status'=>$status
        ));
    }else if(!empty($id)){
        //searching for specific project
        $query = $DBH->prepare($queryStr.'WHERE p.id=:project_id;');
        $query->execute(array(
            ':project_id'=>$id
        ));
    }else if(!empty($name)){
        //searching for specific project
        $query = $DBH->prepare($queryStr.'WHERE p.name=:name;');
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
function getImages($what,$id,$status=1){
    if($what=="projects"){
        $query="select * from project_images where project_id=:id and status=:status";
    }
    global $DBH;
    $query = $DBH->prepare($query);
    $query->execute(array(
        ':id'=>$id,
        ':status'=>$status
    ));
    $query->setFetchMode(PDO::FETCH_ASSOC);
    $row = $query->fetchAll();

    if($row)
        return helperFrontEndImages($row);
    return false;
}
function helperFrontEndImages($rows){
    $div_img="";
    $order="{";
    $numItems = count($rows);
    $i = 0;
    foreach ($rows as $key => $value) {
        $div_img.="<div class='order_picker' data-name='".$value['url']."' data-order='".$value['order_img']."'><img style='max-height:200px;'  src='./../public/img/uploads/".$value['url']."' alt='' /></div>";
        
        if(++$i === $numItems) {
            $order.='"'.$value['order_img'].'":"'.$value['url'].'"';
          }else{
            $order.='"'.$value['order_img'].'":"'.$value['url'].'",';
          }
    }
    return [$div_img,$order."}"];
}
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
function insertEvento($name, $description, $location,$evento_type, $speaker_name, $speaker_description, $url, $date, $status=1){
    global $DBH;
    $q='insert into eventos (name,description,location,type,speaker_name,speaker_description,url,date,status) VALUES(:name,:description,:location,:type,:speaker_name,:speaker_description,:url,:date,:status)';
    $query = $DBH->prepare($q);
    $query->execute(array(
        ':name'=>$name,
        ':description'=>$description,
        ':location'=>$location,
        ':type'=>$evento_type,
        ':speaker_name'=>$speaker_name,
        ':speaker_description'=>$speaker_description,
        ':url'=>$url,
        ':date'=>$date,
        ':status'=>$status
    ));
    return $DBH->lastInsertId();
}



function table_helper_projects($array,$table_head){
    $table='';
    foreach ($array as $value) {
        $table.= $table_head.'
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
                  '.$value["p_type"].'
                </td>
                <td>
                  '.$value["clasification_d"].'
                </td>
                <td>
                  '.$value["crated_date"].'
                </td>
                <td>
                  '.$value["status"].'
                </td>
                <td>
                  <a href="edit_project.php?id='.$value["p_id"].'">
                    <button class="btn btn-primary btn-block">Editar</button>
                  </a>
                </td>
              </tr>
            ';
    }
    return $table;
}
function table_helper_research($array,$table_head){
    $table='';
    foreach ($array as $value) {
        $table.= $table_head.'
              <tr>
                <td>
                  '.$value["id"].'
                </td>
                <td>
                  '.$value["name"].'
                </td>
                <td>
                  '.$value["author"].'
                </td>
                <td>
                  mobile: '.$value["author_mobile"].', email:'.$value["author_email"].'
                </td>
                <td>
                  '.$value["type"].'
                </td>
                <td>
                  '.$value["small_lang"].'
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
function getListTypesResearch($status, $id=null){
    global $DBH;
        $query = $DBH->prepare('SELECT * from research_types;');
        $query->execute();
    
    $query->setFetchMode(PDO::FETCH_ASSOC);
    $row = $query->fetchAll();
    if($row)
        return $row;
    return false;
    echo "<pre>";
    print_r($row);
}
function getListLanguajes($status, $id=null){
    global $DBH;
    
        $query = $DBH->prepare('SELECT * from research_languajes;');
        $query->execute();
    

    $query->setFetchMode(PDO::FETCH_ASSOC);
    $row = $query->fetchAll();
    if($row)
        return $row;
    return false;
    echo "<pre>";
    print_r($row);
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
function getListCountry($country_code=null, $id=null){
    global $DBH;
    if(empty($id) && !empty($country_code)){
        //get them by country_code
        $query = $DBH->prepare('SELECT * from ciudades
                                WHERE country_code=:country_code;');
        $query->execute(array(
            ':country_code'=>$country_code
        ));
    }else if(empty($country_code) && !empty($id)){
        //searching for specific id
        $query = $DBH->prepare('SELECT * from ciudades
                                WHERE id=:id;');
        $query->execute(array(
            ':id'=>$id
        ));
    }else{
        //get all countries
        $query = $DBH->prepare('SELECT distinct(country_code) as "country_code" from ciudades;');
        $query->execute();
    }

    $query->setFetchMode(PDO::FETCH_ASSOC);
    $row = $query->fetchAll();
    if($row)
        return $row;
    return false;
    echo "<pre>";
    print_r($row);
}

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
function updateProject($id, $name, $user_id, $clasification,$project_type, $status=1){
    global $DBH;
    $q='replace into projects (id, name,user_id,status,clasification,project_type) VALUES(:id,:name,:user_id,:status,:clasification,:project_type)';
    $query = $DBH->prepare($q);
    $query->execute(array(
        ':id'=>$id,
        ':name'=>$name,
        ':user_id'=>$user_id,
        ':clasification'=>$clasification,
        ':project_type'=>$project_type,
        ':status'=>$status
    ));
    return $DBH->lastInsertId();
}
function updateProjectTxn($id, $description,$location, $social, $environment, $economy, $objective, $project_id){
    global $DBH;
    $q='replace into projects_text_fields (id, description,location,social,environment,economy,objective,project_id) VALUES(:id,:description,:location,:social,:environment,:economy,:objective,:project_id)';
    $query = $DBH->prepare($q);
    $query->execute(array(
        ':id'=>$id,
        ':description'=>$description,
        ':location'=>$location,
        ':social'=>$social,
        ':environment'=>$environment,
        ':economy'=>$economy,
        ':objective'=>$objective,
        ':project_id'=>$project_id
    ));
}
function updateImagesProject($id, $status=0){
    global $DBH;
    $q='update project_images set status=:status where project_id=:project_id';
    $query = $DBH->prepare($q);
    $query->execute(array(
        ':project_id'=>$id,
        ':status'=>$status
    ));
    
}
function getResearch($status=null,$id=null,$name=null){
    global $DBH;
    if(!empty($status)){
        //get them all
        $query = $DBH->prepare('SELECT r.id, name, author, url, author_mobile, author_email, published_date, rt.description as "type", c.city, c.country_code, rl.small_lang, status
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

function insertResearch($name, $author, $type, $url, $languaje, $author_mobile, $author_email, $published_date, $published_place, $status=1){
    global $DBH;
    $q='insert into research(name,author,type,url, languaje,author_mobile, author_email, published_date,published_place,status) values(:name, :author, :type, :url, :languaje, :author_mobile, :author_email, :published_date, :published_place, :status)';
    $query = $DBH->prepare($q);
    $query->execute(array(
        ':name'=>$name,
        ':author'=>$author,
        ':type'=>$type,
        ':url'=>$url,
        ':languaje'=>$languaje,
        ':author_mobile'=>$author_mobile,
        ':author_email'=>$author_email,
        ':published_date'=>$published_date,
        ':published_place'=>$published_place,
        ':status'=>$status
    ));
    return $DBH->lastInsertId();
}
function getAcercaDe(){
    global $DBH;
    
    $query = $DBH->prepare('SELECT *
                            from about;');
    $query->execute();
    
    $query->setFetchMode(PDO::FETCH_ASSOC);
    $row = $query->fetchAll();

    if($row)
        return $row;
    return false;
}


function generatePreview($id) {

    $data = findResearch($id)[0];
    $pdf_url = $data["url"];
    $name = $data["name"];
    $withoutExt = preg_replace('/\\.[^.\\s]{3,4}$/', '', $name);

    $im = new Imagick();
    $im->setResolution(200, 200);     //set the resolution of the resulting jpg
    $im->readImage($_SERVER['DOCUMENT_ROOT'].'/ArchtionMovements/public/uploaded_files_research/'.$pdf_url.'[0]');    //[0] for the first page
    $im->setImageFormat('jpg');

    file_put_contents($_SERVER['DOCUMENT_ROOT'].'/ArchtionMovements/public/previews/'. $withoutExt . '.png', $im); // save img 

    $im2 = new Imagick();
    $im2->setResolution(200, 200);     //set the resolution of the resulting jpg
    $im2->readImage($_SERVER['DOCUMENT_ROOT'].'/ArchtionMovements/public/uploaded_files_research/'.$pdf_url.'[1]');    //[0] for the first page
    $im2->setImageFormat('jpg');

    file_put_contents($_SERVER['DOCUMENT_ROOT'].'/ArchtionMovements/public/previews/'. $withoutExt . '2.png', $im2); // save img 

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
function table_helper_about($array,$table_head){
    $table='';
    foreach ($array as $value) {
        $table.= $table_head.'
              <tr>
                <td>
                  '.$value["title"].'
                </td>
                <td>
                  '.$value["subtitle1"].'
                </td>
                <td>
                  '.$value["subtitle2"].'
                </td>
                <td>
                  <a href="edit_acerca_de.php">
                    <button class="btn btn-primary btn-block">Editar</button>
                  </a>
                </td>
              </tr>
            ';
    }
    return $table;
}
function insertAcercade($title,$subtitle1,$subtitle2, $img1, $img2){
    global $DBH;
    $q='insert into about (title,subtitle1,subtitle2,image1,image2) VALUES(:title,:subtitle1,:subtitle2,:image1,:image2)';
    $query = $DBH->prepare($q);
    $query->execute(array(
        ':title'=>$title,
        ':subtitle1'=>$subtitle1,
        ':subtitle2'=>$subtitle2,
        ':image1'=>$img1,
        ':image2'=>$img2
    ));
    return $DBH->lastInsertId();
}
function deleteAcercade(){
    global $DBH;
    $q='delete from about;';
    $query = $DBH->prepare($q);
    $query->execute();
}
function table_helper_events($array,$table_head){
    $table='';
    foreach ($array as $value) {
        $type=$value["type"]=='1'?"online":"presencial";
        $table.= $table_head.'
              <tr>
                <td>
                  '.$value["id"].'
                </td>
                <td>
                  '.$value["name"].'
                </td>
                <td>
                  '.$value["description"].'
                </td>
                <td>
                  '.$value["location"].'
                </td>
                <td>
                  '.$type.'
                </td>
                <td>
                  '.$value["speaker_name"].'
                </td>
                <td>
                  '.$value["url"].'
                </td>
                <td>
                  '.$value["date"].'
                </td>
                <td>
                  '.$value["status"].'
                </td>
                
              </tr>
            ';
    }
    return $table;
}
?>