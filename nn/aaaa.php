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
									<li class="breadcrumb-item"><a href="index.php">Personnel</a></li>
									<li class="breadcrumb-item active" aria-current="page">Ajouter Personnel</li>
								</ol>
							</nav>
						</div>
						
					</div>
				</div>
			
<?php
include 'conx.php';
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

$req="select * from personnela where cin_per =$nom";
$res=mysqli_query($connect,$req);
if(mysqli_num_rows($res)==0)
{

    $sqls="insert into personnela values('$nom','$pre','$age','$sec','$mai','$min','$id')";
    mysqli_query($connect,$sqls);
    echo '<div class="alert alert-success" role="alert">Personnel d\'absence ajouter </div>';

}else { echo"<div class='alert alert-danger' role='alert'>
<a href='#' class='alert-link'>Personnel d'absence existe </a>
</div>";}
}
 


?>
                        
					
</form>	
				
				
			
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

</body>
</html>