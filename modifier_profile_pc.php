<!DOCTYPE html>
<html>
<head>
<link rel="icon" type="image/png" href="images/icons/isigk1.ico"/>
 

</head>
<body>




			

                        

				
				
			
	</div>

       
        <?php
 include ('conx.php'); 

if(isset($_POST['nom']))
{session_start();


$nom=mysqli_real_escape_string($connect,$_POST['nom']);
$prenom=mysqli_real_escape_string($connect,$_POST['pre']);
$mot=mysqli_real_escape_string($connect,$_POST['mot_ens']);
$tel=mysqli_real_escape_string($connect,$_POST['Telephone']);
$ema=mysqli_real_escape_string($connect,$_POST['Email']);
$x=$_SESSION['id'];




  
$sql = "UPDATE personnel SET nom_per='$nom',pre_per='$prenom',mot_per='$mot',ema_per='$ema',tel_per='$tel'

 WHERE cin_per=$x";
      $result = $connect->query($sql);
      include ('include/script.php'); 
      echo '
      <script>
  
     
      swal({
        title: "Succés!",
        text: "Votre information a été modifié avec succés!",
        type: "success"
    }).then(function() {
      window.location = "profile_pc.php";
  });
  
      
      </script>
      ';}


?>

</body>
</html>