<!DOCTYPE html>
<html>
<head>
<link rel="icon" type="image/png" href="images/icons/isigk1.ico"/>
 

</head>
<body>




			

                        

				
				
			
	</div>

        <?php include ('include/script.php');
        include ('conx.php'); ?>
        <?php


if(isset($_POST['m']))
{session_start();
  $nom=mysqli_real_escape_string($connect,$_POST['nom']);

$prenom=mysqli_real_escape_string($connect,$_POST['prenom']);
$login=mysqli_real_escape_string($connect,$_POST['login']);
$mot=mysqli_real_escape_string($connect,$_POST['mot']);
$x=$_SESSION['id'];




  
$sql = "UPDATE administrateur SET nom_adm='$nom',prenom_adm='$prenom',login_admin='$login',password_admin='$mot'

 WHERE id=$x";
      $result = $connect->query($sql);
      include ('include/script.php'); 
      echo '
      <script>
  
     
      swal({
        title: "Succés!",
        text: "Votre information a été modifié avec succés!",
        type: "success"
    }).then(function() {
      window.location = "profile_administrateur.php";
  });
  
      
      </script>
      ';}


?>

</body>
</html>