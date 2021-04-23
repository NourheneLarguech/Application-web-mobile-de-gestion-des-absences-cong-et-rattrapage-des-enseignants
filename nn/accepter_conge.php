<?php
include 'conx.php';
if(isset($_GET["id_con"])){

$id_con = $_GET["id_con"] ;


$sql = "update conge SET etat='Accepter' WHERE code_con=$id_con";
                                      
 $result = $connect->query($sql);
 if($result){

    header('location:consulter_demande_conge2.php');
 }









}





?>