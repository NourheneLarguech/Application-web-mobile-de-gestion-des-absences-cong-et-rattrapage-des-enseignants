<?php
header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Headers: access");
header("Access-Control-Allow-Methods: GET");
header("Access-Control-Allow-Credentials: true");
header('Content-Type: application/json');
 
 include_once '../config/database.php';
include_once '../objects/user.php';
 $database = new Database();
$db = $database->getConnection();
// prepare product object
$user = new user($db);
// set ID property of product to be edited
 $user->mot_per = isset($_GET['mot_per']) ? $_GET['mot_per'] : die();
 $user->cin_per = isset($_GET['cin_per']) ? $_GET['cin_per'] : die();
 $user->login();
?>

