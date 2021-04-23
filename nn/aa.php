<!DOCTYPE html>
<html>
<head>
    <?php include('include/head.php'); ?>
    <link href="jquery-ui.css" rel="stylesheet">
     <link rel="stylesheet" href="css/bootstrap.css">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

</head>
<body>



	<?php include('include/header.php'); ?>
	<?php include('include/sidebar.php'); ?>
	<div class="main-container">
		<div class="pd-ltr-20 customscroll customscroll-10-p height-100-p xs-pd-20-10">
			<div class="min-height-200px">
				<div class="page-header">
					<div class="row">
						<div class="col-md-6 col-sm-12">
							<div class="title">
								<h4>Form</h4>
							</div>
							<nav aria-label="breadcrumb" role="navigation">
								<ol class="breadcrumb">
									<li class="breadcrumb-item"><a href="index.php">Eneignant</a></li>
									<li class="breadcrumb-item active" aria-current="page">Ajouter Enseignant</li>
								</ol>
							</nav>
						</div>
						
					</div>
				</div>
			

                        

				
				
			
	</div>
    <?php include('include/script.php'); ?>
		<script src="src/plugins/sweetalert2/sweetalert2.all.js"></script>
	<link rel="stylesheet" type="text/css" href="src/plugins/sweetalert2/sweetalert2.css">
	<script src="src/plugins/sweetalert2/sweet-alert.init.js"></script>
    <script src="external/jquery/jquery.js"></script>
<script src="jquery-ui.js"></script>
<script>
    $( "#radioset" ).buttonset();
    $( "#selectmenu" ).selectmenu();
    $( "#se" ).selectmenu();
        $( "#sel" ).selectmenu();
    
$(document).ready(function(){
  $("#myInput").on("keyup", function() {
    var value = $(this).val().toLowerCase();
    $("#emp tr").filter(function() {
      $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
    });
          $("#emp tr:first").show();

  });
});

        </script>
        <?php include('include/script.php'); ?>
        <?php
$serveur='127.0.0.1';
$user='root';
$mp='';
$b='nourhene';
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


$req="select * from enseignant where cin_ens =$nom";
$res=mysqli_query($connect,$req);
if(mysqli_num_rows($res)==0)
{

    $sqls="insert into enseignant values('$nom','$pre','$age','$sec','$mai','$min','$id')";
    mysqli_query($connect,$sqls);
    echo '
    <script>
    
 
      swal({
          title: "Success!",
          text: "Enseignant ajoute avec success!",
          type: "success"
      }).then(function() {
        window.location = "consule.php";
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
      window.location = "ajouter2.php";
  });




  </script>
  ';}
}
 


?>

</body>
</html>