<!DOCTYPE html>
<html>
<head>

<title>Ajouter personnel d'absence</title>
	<link rel="icon" type="image/png" href="images/icons/isigk1.ico"/>

</head>
<body>



	
			
<?php
include 'conx.php';

if(isset($_POST['c']))
{
  $nom=mysqli_real_escape_string($connect,$_POST['c']);


  $pre=mysqli_real_escape_string($connect,$_POST['n']);
  $age=mysqli_real_escape_string($connect,$_POST['p']);
  $mai=mysqli_real_escape_string($connect,$_POST['m']);
  $min=mysqli_real_escape_string($connect,$_POST['e']);
  $id=mysqli_real_escape_string($connect,$_POST['s']);
  

$req="select * from personnela where cin_per =$nom";
$res=mysqli_query($connect,$req);
if(mysqli_num_rows($res)==0)
{

    $sqls="insert into personnela values('$nom','$pre','$age','NULL','$mai','$min','$id')";
    mysqli_query($connect,$sqls);
include('include/script.php'); 
echo '
<script>


swal({
  title: "Succés!",
  text: "Personnel d\'absence a été ajouté avec succés!",
  type: "success"
}).then(function() {
window.location = "consulter_pa.php";
});


</script>
';

}else {  echo '
<script>


swal({
    title: "Erreur!",
    text: "Personnel d\'absence dejà existe!",
    type: "error"
}).then(function() {
  window.location = "ajouter_pa.php";
});




</script>
';}

}


?>
                        
					

 

        

</body>
</html>