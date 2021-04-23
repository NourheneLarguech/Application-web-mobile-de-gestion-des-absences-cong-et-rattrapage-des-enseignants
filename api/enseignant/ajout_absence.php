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
$user->cin_ens = isset($_GET['cin_ens']) ? $_GET['cin_ens'] : die();
$user->nb_abs = isset($_GET['nb_abs']) ? $_GET['nb_abs'] : die();

 $user->ajouter_absence();
?>

