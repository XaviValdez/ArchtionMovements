<?php
session_start();
global $DBH;

$dbserver   = 'localhost';
$dbuser     = 'root';
$dbpassword = '';
global $database;
$database = 'arch';

try {
    $DBH = new PDO("mysql:host=$dbserver;dbname=$database", "$dbuser", "$dbpassword");
    $DBH->setAttribute( PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION );
    $DBH->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
}
catch(PDOException $e) {
    file_put_contents('PDOErrors.txt', $e->getMessage(), FILE_APPEND);
}

global $version;
$version="1.0.0";

global $fb_app_id;
$fb_app_id="480293539839971";

?>