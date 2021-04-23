<!DOCTYPE html>
<html>
<head>
<head><link rel="icon" type="image/png" href="images/icons/isigk1.ico"/>
<title> Ajouter personnel du congé</title>

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


$req="select * from personnel where cin_per =$nom";
$res=mysqli_query($connect,$req);
if(mysqli_num_rows($res)==0)
{

    $sqls="insert into personnel values('$nom','$pre','$age','$mai','$min','$id')";
    mysqli_query($connect,$sqls);
    echo '
    <script>
    
 
      swal({
          title: "succès!",
          text: "Personnel du congé a été ajouté avec succès!",
          type: "success"
      }).then(function() {
        window.location = "consulter_pc.php";
    });




    </script>
    ';

}else {  echo '
  <script>
  

    swal({
        title: "Erreur!",
        text: "Personnel du congé dejà existe!",
        type: "error"
    }).then(function() {
      window.location = "ajouter_pc.php";
  });




  </script>
  ';}
}
 


?>

</body>
</html>