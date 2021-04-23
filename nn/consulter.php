
<!DOCTYPE html>
<html>
<head>
	<?php include('include/head.php'); ?>
	<link rel="stylesheet" type="text/css" href="src/plugins/jquery-steps/build/jquery.steps.css">
</head>
<body>
<?php

$serveur='127.0.0.1';
$user='root';
$mp='';
$b='isigk';
$connect=new mysqli($serveur,$user,$mp,$b);
if($connect -> connect_error)
{
    echo'erreur de connexion('.$conn->connect_errno.')';
}
else
echo 'connexion réussi';


$req="select * from enseignant ";
$res=mysqli_query($connect,$req);
echo "<table border=2> <tr> <td>CIN</td><td>Nom </td><td>Prénom </td><td>Pseudo</td><td>Mot de passe</td><td>Email</td><td>Statut</td><td>Grade</td><td> Action </td> </tr> ";

while($tab=mysqli_fetch_row($res))
{
    echo" <tr><td> $tab[0] </td> <td>$tab[1] </td><td> $tab[2]</td><td> $tab[3]</td> <td> $tab[4]</td><td> $tab[5]</td><td> $tab[6]</td> <td> $tab[7]</td><td> <input type='submit' value ='modifier'> <input type='submit' value ='supprimer'></td></tr>";


    
 

}
echo"</table>";

?> 

	<?php include('include/header.php'); ?>
	<?php include('include/sidebar.php'); ?>
	<div class="main-container">
		<div class="pd-ltr-20 customscroll customscroll-10-p height-100-p xs-pd-20-10">
			<div class="min-height-200px">
				<div class="page-header">
					<div class="row">
						<div class="col-md-6 col-sm-12">
							<div class="title">
								<h4>Form Wizards</h4>
							</div>
							<nav aria-label="breadcrumb" role="navigation">
								<ol class="breadcrumb">
									<li class="breadcrumb-item"><a href="index.php">Home</a></li>
									<li class="breadcrumb-item active" aria-current="page">Form Wizards</li>
								</ol>
							</nav>
						</div>
						<div class="col-md-6 col-sm-12 text-right">
							<div class="dropdown">
								<a class="btn btn-primary dropdown-toggle" href="#" role="button" data-toggle="dropdown">
									January 2018
								</a>
								<div class="dropdown-menu dropdown-menu-right">
									<a class="dropdown-item" href="#">Export List</a>
									<a class="dropdown-item" href="#">Policies</a>
									<a class="dropdown-item" href="#">View Assets</a>
								</div>
							</div>
						</div>
					</div>
				</div>
            </div>
         </div>
</div>
   
<?php include('include/script.php'); ?>
	<script src="src/plugins/jquery-steps/build/jquery.steps.js"></script>
	<script>
		$(".tab-wizard").steps({
			headerTag: "h5",
			bodyTag: "section",
			transitionEffect: "fade",
			titleTemplate: '<span class="step">#index#</span> #title#',
			labels: {
				finish: "Submit"
			},
			onStepChanged: function (event, currentIndex, priorIndex) {
				$('.steps .current').prevAll().addClass('disabled');
			},
			onFinished: function (event, currentIndex) {
				$('#success-modal').modal('show');
			}
		});
	</script>
      
			
</body>
</html>