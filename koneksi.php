<?php 
define('DB_HOST', 'localhost'); 
define('DB_USERNAME', 'u7786689_user_pahlevi'); 
define('DB_PASSWORD', 'sukses2022'); 
define('DB_NAME', 'u7786689_pahlevi');

date_default_timezone_set('Asia/Jakarta');

// Connect with the database 
$db = new mysqli(DB_HOST, DB_USERNAME, DB_PASSWORD, DB_NAME); 
 
// Display error if failed to connect 
if ($db->connect_errno) { 
    echo "Connection to database is failed: ".$db->connect_error;
    exit();
}