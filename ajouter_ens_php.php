<!DOCTYPE html>
<html>
<head>
 
<title>Ajouter Enseignant</title>
	
	<link rel="icon" type="image/png" href="images/icons/isigk1.ico"/>  

</head>
<body>




			

                        

				
				
			
	</div>

        <?php include ('include/script.php'); ?>
        <?php
include ('conx.php');

if(isset($_POST['c']))
{
  $nom=mysqli_real_escape_string($connect,$_POST['c']);


$pre=mysqli_real_escape_string($connect,$_POST['n']);
$age=mysqli_real_escape_string($connect,$_POST['p']);

$mai=mysqli_real_escape_string($connect,$_POST['m']);
$min=mysqli_real_escape_string($connect,$_POST['e']);
$id=mysqli_real_escape_string($connect,$_POST['s']);


$req="select * from enseignant where cin_ens =$nom";
$res=mysqli_query($connect,$req);
if(mysqli_num_rows($res)==0)
{

    $sqls="insert into enseignant values('$nom','$pre','$age','$mai','$min','$id',0)";
    mysqli_query($connect,$sqls);
    echo '
    <script>
    
 
      swal({
          title: "succès!",
          text: "Enseignant a été ajouté avec succès!",
          type: "success"
      }).then(function() {
        window.location = "consulter_enseignant.php";
    });




    </script>
    ';

}else {  echo '
  <script>
  

    swal({
        title: "Erreur!",
        text: "Enseignant dejà existe!",
        type: "error"
    }).then(function() {
      window.location = "ajouter_enseignant.php";
  });




  </script>
  ';}
}
 


?>

</body>
</html>