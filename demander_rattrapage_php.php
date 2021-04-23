<!DOCTYPE html>
<html>
<head>
   
<title>Demander rattrapage</title>
	
	<link rel="icon" type="image/png" href="images/icons/isigk1.ico"/>  

</head>
<body>



			
<?php
include 'conx.php';
if(isset($_POST['groupe']))
{
$gro=$_POST['groupe'];
$mat=$_POST['matiere'];
$dat=$_POST['mdate'];
$sea=$_POST['seance'];
session_start();
$sal=$_POST['salle'];
 $x=$_SESSION['id'];

$req="SELECT * FROM rattrapage  where code_sea='$sea' AND mdate='$dat' AND code_sal='$sal' ";
$req1="SELECT * FROM rattrapage  where code_gro='$gro' and code_sea='$sea' AND mdate='$dat' ";

$res=mysqli_query($connect,$req);
$res1=mysqli_query($connect,$req1);
include ('include/script.php');
if((mysqli_num_rows($res)==0) && (mysqli_num_rows($res1)==0))
{

    $sqls="INSERT INTO rattrapage (cin_ens,code_mat,code_gro,code_sea,code_sal,mdate) values ('$x','$mat','$gro','$sea','$sal','$dat')";
    mysqli_query($connect,$sqls);


    echo '
    <script>
    
 
      swal({
          title: "Success!",
          text: "Rattrapage envoyer!",
          type: "success"
      }).then(function() {
        window.location = "consulter_rattrapage.php";
    });




    </script>
    ';

}else {  echo '
  <script>
  

    swal({
        title: "error",
        text: "Rattrapage Indisonible!",
        type: "error"
    }).then(function() {
      window.location = "demander_rattrapage.php";
  });




  </script>
  ';}
}
 


?>
                        
					
</form>	
				
				
			

</body>
</html>