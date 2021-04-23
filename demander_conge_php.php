<!DOCTYPE html>
<html>
<head>
<meta Charset='UTF-8'>

<title>Demander congé</title>
	
	<link rel="icon" type="image/png" href="images/icons/isigk1.ico"/>  
</head>
<body>


<?php include ('include/script.php'); ?>
        <?php
include ('conx.php');
			



  
if(isset($_POST['d']))
{

$dd=$_POST['dd'];
$md=date('Y-m-d',strtotime($dd));

$dr=$_POST['dr'];
$mdd=date('Y-m-d',strtotime($dr));

$age=mysqli_real_escape_string($connect,$_POST['ps']);

$sec=mysqli_real_escape_string($connect,$_POST['p']);
session_start();

$x=$_SESSION['id'];




    $sqls=" INSERT INTO conge ( dd, dr, r, t, etat, cin_ens, cin_ensr) 
    VALUES ('$md', '$mdd', '$age', '$sec', 'En cours de traitement', '$x', '0');";
    
    mysqli_query($connect,$sqls);
    include ('include/script.php');
    echo'<script>
    
 
    swal({
        title: "Success!",
        text: "La demande du congé a été envoyé avec succès!!",
        type: "success"
    }).then(function() {
        window.location = "consulter_demande_conge.php";
    });;</script>';




 

}
 


?>
                        

   

</body>
</html>