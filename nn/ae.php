<!DOCTYPE html>
<html>
<head>
   

</head>
<body>




			

                        

				
				
			
	</div>

        <?php include ('include/script.php'); ?>
        <?php
include ('conx.php');

if(isset($_POST['aj']))
{
$nom=$_POST['c'];
$pre=$_POST['n'];
$age=$_POST['p'];
$sec=$_POST['ps'];
$mai=$_POST['m'];
$min=$_POST['e'];
$id=$_POST['s'];






$req="select * from enseignant where cin_ens =$nom";
$res=mysqli_query($connect,$req);
if(mysqli_num_rows($res)==0)
{

    $sqls="insert into enseignant values('$nom','$pre','$age','$sec','$mai','$min','$id',0)";
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