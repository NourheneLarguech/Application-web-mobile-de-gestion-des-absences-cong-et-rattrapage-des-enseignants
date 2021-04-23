<?php
header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Headers: access");
header("Access-Control-Allow-Methods: GET");
header("Access-Control-Allow-Credentials: true");
header('Content-Type: application/json');
 
 include_once '../config/database.php';
include_once '../objects/seance.php';
 $database = new Database();
$db = $database->getConnection();
// prepare product object
$user = new seance($db);
// set ID property of product to be edited

 $user->consulter_seance();
?>

