<?php

$db_host = "am-latihanrds.cg2lssnpgr5u.ap-southeast-1.rds.amazonaws.com";
$db_user = "devopscilsy";
$db_pass = "1234567890";
$db_name = "dbsosmed";

try {    
    //create PDO connection 
    $db = new PDO("mysql:host=$db_host;dbname=$db_name", $db_user, $db_pass);
} catch(PDOException $e) {
    //show error
    die("Terjadi masalah: " . $e->getMessage());
}
