<?php
$serveur='127.0.0.1';
$user='root';
$mp='';
$b='isigk';
$connect=new mysqli($serveur,$user,$mp,$b);
//if($connect -> connect_error)
//{
 //   echo'erreur de connexion('.$conn->connect_errno.')';
//}
//else
//echo 'connexion réussi'; 

//if(isset($_POST['na'])){
if(isset($_POST['aj']))
{
$nom=$_POST['c'];
$pre=$_POST['n'];
$age=$_POST['p'];
$sec=$_POST['ps'];
$mai=$_POST['m'];
$min=$_POST['e'];
$id=$_POST['s'];
$idi=$_POST['g'];

$req="select * from enseignant where cin_ens =$nom";
$res=mysqli_query($connect,$req);
if(mysqli_num_rows($res)==0)
{

    $sqls="insert into enseignant values('$nom','$pre','$age','$sec','$mai','$min','$id','$idi')";
    mysqli_query($connect,$sqls);
    echo '<div class="alert alert-success" role="alert">enseignant ajouter </div>
    ';

}
else  echo"dejà existe";
}
//}  


?>