<!DOCTYPE html>
<html>
<head>
<title>ISIGK</title>
	<?php include('include/head.php'); ?>
	
	<link rel="stylesheet" type="text/css" href="src/plugins/datatables/media/css/jquery.dataTables.css">
	<link rel="stylesheet" type="text/css" href="src/plugins/datatables/media/css/dataTables.bootstrap4.css">
	<link rel="stylesheet" type="text/css" href="src/plugins/datatables/media/css/responsive.dataTables.css">
<style>

p {
  font-family: "Comic Sans MS", cursive, sans-serif	
;
	font-size:50px;
	color:#1e79a2;
}
#p1{font-family:  Snell Roundhand, cursive;
    	font-size:17px;
}
#p2{
	font-family: Brush Script MT, Brush Script Std, cursive;
	font-size:60px;
    color:#17d9d9;
}
#p3{
	font-family: 'Lucida Sans Unicode', 'Lucida Grande', sans-serif;
	font-size:30px;
}
</style>
</head>

	
<body>
<?php include('include/header_enseignant.php'); ?>
	<?php include('include/sidebar_enseignant.php'); ?>
	<div class="main-container">
		<div class="pd-ltr-20 customscroll customscroll-10-p height-100-p xs-pd-20-10">
			<div class="min-height-200px">
				<div class="page-header">
					<div class="row">
						<div class="col-md-6 col-sm-12">
							<div class="title">
								<h3>ISIGK</h3>
							</div>
							<nav aria-label="breadcrumb" role="navigation">
								<ol class="breadcrumb">
									<li class="breadcrumb-item"><a href="">Acceuil</a></li>
									<li class="breadcrumb-item active" aria-current="page"> Présentation
</li>
								</ol>
							</nav>
						</div>
					
					</div>


				</div>

  
         <div style="background-color:white;padding:40px;">
				<p>L'Institut supérieur d'informatique et de gestion de Kairouan (ISIGK):<b></p><div id='p1'> <br>est un établissement universitaire tunisien 
	rattaché à l'Université de Kairouan et placé sous la tutelle du ministère de l'Enseignement supérieur et de la Recherche scientifique</div>
	<br>
	<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
		<li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
		<li data-target="#carouselExampleIndicators" data-slide-to="4"></li>
		<li data-target="#carouselExampleIndicators" data-slide-to="5"></li>
		<li data-target="#carouselExampleIndicators" data-slide-to="6"></li>



  </ol>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img class="d-block w-100" src="src/images/1.jpg" alt="First slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="src/images/2.jpg" alt="Second slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="src/images/3.jpg" alt="Third slide">
    </div>
		<div class="carousel-item">
      <img class="d-block w-100" src="src/images/6.jpg" alt="Third slide">
    </div>
		<div class="carousel-item">
      <img class="d-block w-100" src="src/images/4.jpg" alt="Third slide">
    </div>
		<div class="carousel-item">
      <img class="d-block w-100" src="src/images/5.jpg" alt="Third slide">
    </div>
		<div class="carousel-item">
      <img class="d-block w-100" src="a.jpg" alt="Third slide">
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
 
<br>

  <div id='p2'> Diplômes:</div>
            <div id='p3'>  Licences appliquées :<br><div>
 <div id='p1'>E-services<br>
 Comptabilité : techniques comptables et financières<br>
 Technologie des réseaux informatiques<br>
 Économie et finance internationale : banques et assurances<br>
 Marketing : e-marketing<br></div>
 <br>
         
<div id='p3'> Licences fondamentales<br></div>
<div id='p1'> Sciences de l'informatique<br>
 Gestion : gestion d'affaires</b></div>
<br><br><br><br>

         
         


			
		
	</div>
									</div>
	<?php include('include/script.php'); ?>
	
	<?php include('include/footer.php'); ?>
	<script>

$( document ).ready(function() {

	$titre = "Bienvenue ",
	$text = "<?php echo( $_SESSION['nom']);echo( ' '); echo( $_SESSION['prenom']);?> ";
	$type ="success"; //success ou error
    sweet_alert($titre,$text,$type);
});

</script>
</body>
</html>