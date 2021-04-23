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
$user->nom = isset($_GET['nom']) ? $_GET['nom'] : die();
$user->password = isset($_GET['password']) ? $_GET['password'] : die();
$user->prenom = isset($_GET['prenom']) ? $_GET['prenom'] : die();
$user->e_mail = isset($_GET['e_mail']) ? $_GET['e_mail'] : die();
$user->numero_tel = isset($_GET['numero_tel']) ? $_GET['numero_tel'] : die();
$user->type = isset($_GET['type']) ? $_GET['type'] : die();
$user->login = isset($_GET['login']) ? $_GET['login'] : die();
 $user->inscrit();
?>

