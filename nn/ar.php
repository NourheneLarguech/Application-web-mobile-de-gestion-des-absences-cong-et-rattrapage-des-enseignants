<!DOCTYPE html>
<html>
<head>
    <?php include('include/head.php'); ?>
    <link href="jquery-ui.css" rel="stylesheet">
     <link rel="stylesheet" href="css/bootstrap.css">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="src/plugins/datatables/media/css/jquery.dataTables.css">
	<link rel="stylesheet" type="text/css" href="src/plugins/datatables/media/css/dataTables.bootstrap4.css">
	<link rel="stylesheet" type="text/css" href="src/plugins/datatables/media/css/responsive.dataTables.css">
  <?php include('include/script.php'); ?>

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
			
<?php
include 'conx.php';
if(isset($_POST['aj']))
{
$gro=$_POST['groupe'];
$mat=$_POST['matiere'];
$dat=$_POST['mdate'];
$sea=$_POST['seance'];
$sal=$_POST['salle'];
 $x=$_SESSION['id'];

$req="SELECT * FROM rattrapage  where code_sea='$sea' AND mdate='$dat' AND code_sal='$sal' ";
$req1="SELECT * FROM rattrapage  where code_gro='$gro' and code_sea='$sea' AND mdate='$dat' ";

$res=mysqli_query($connect,$req);
$res1=mysqli_query($connect,$req1);

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
        window.location = "test.php";
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
      window.location = "test.php";
  });




  </script>
  ';}
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

</body>
</html>