<?php
include("env.php");
date_default_timezone_set('America/Los_Angeles');
$error_msg = [];
$query_msg = [];
$showQueries = true; 
$showCounts = true; 
$dumpResults = false;
$encodedStr = basename($_SERVER['REQUEST_URI']); 
$current_filename = urldecode($encodedStr);
    
if($showQueries){
	array_push($query_msg, "<b>Current filename: ". $current_filename . "</b>"); 
}
define('DB_HOST', $host);
define('DB_PORT', $port);
define('DB_USER', $user);
define('DB_PASS', $password);
define('DB_SCHEMA', $schema);
$db = mysqli_connect(DB_HOST, DB_USER, DB_PASS, DB_SCHEMA, DB_PORT);
if (mysqli_connect_errno())
{
    echo "Failed to connect to MySQL: " . mysqli_connect_error() . NEWLINE;
    echo "Running on: ". DB_HOST . ":". DB_PORT . '<br>' . "Username: " . DB_USER . '<br>' . "Password: " . DB_PASS . '<br>' ."Database: " . DB_SCHEMA;
    exit();
}