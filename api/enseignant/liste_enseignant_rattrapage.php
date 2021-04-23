<?php
header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Headers: access");
header("Access-Control-Allow-Methods: GET");
header("Access-Control-Allow-Credentials: true");
header('Content-Type: application/json');
 
 include_once '../config/database.php';
include_once '../objects/enseignant.php';
 $database = new Database();
$db = $database->getConnection();
// prepare product object
$user = new enseignant($db);
// set ID property of product to be edited
 $user->mdate = isset($_GET['mdate']) ? $_GET['mdate'] : die();
$user->code_sea = isset($_GET['code_sea']) ? $_GET['code_sea'] : die();

 $user->consulter_rattrapage();
?>

