<?php
$serveur='127.0.0.1';
$user='root';
$mp='';
$b='nourhene';

$connect=new mysqli($serveur,$user,$mp,$b);
//mysql_set_charset('utf8');
mysqli_set_charset($connect,"utf8");




?>