<?php
include   'conx.php';
session_start();


if(isset($_POST['con']))
{
$id=$_POST['log'];
$mdp=$_POST['pas'];}
$req="select * from administrateur where login_admin='$id' and password_admin='$mdp';";
$res=mysqli_query($connect,$req);
echo $req;
if($res){
echo 'bienvenue';
//header('location:index.php');
}
else{
  echo'erreur';
 
}
?>