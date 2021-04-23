<!DOCTYPE html>
<html>
<head>
	<?php include('include/head.php'); ?>
	<link rel="stylesheet" type="text/css" href="src/plugins/datatables/media/css/jquery.dataTables.css">
	<link rel="stylesheet" type="text/css" href="src/plugins/datatables/media/css/dataTables.bootstrap4.css">
	<link rel="stylesheet" type="text/css" href="src/plugins/datatables/media/css/responsive.dataTables.css">
    <link href="jquery-ui.css" rel="stylesheet">
     <link rel="stylesheet" href="css/bootstrap.css">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
		<style>
    select#soflow-color {
   -webkit-appearance: button;
   -webkit-border-radius: 2px;
   -webkit-box-shadow: 0px 1px 3px rgba(0, 0, 0, 0.1);
   -webkit-padding-end: 20px;
   -webkit-padding-start: 2px;
   -webkit-user-select: none;
   background-image: url(http://i62.tinypic.com/15xvbd5.png), -webkit-linear-gradient(#FAFAFA, #F4F4F4 40%, #E5E5E5);
   background-position: 97% center;
   background-repeat: no-repeat;
   border: 1px solid #AAA;
   color: #555;
   font-size: inherit;
   margin: 20px;
   overflow: hidden;
   padding: 5px 10px;
   text-overflow: ellipsis;
   white-space: nowrap;
   width: 300px;
}

select#soflow-color {
   color: #fff;
   background-image: url(http://i62.tinypic.com/15xvbd5.png), -webkit-linear-gradient(#34b8f2, #34b8f2 80%, #34b8f2);
   background-color: #34b8f2;
   -webkit-border-radius: 20px;
   -moz-border-radius: 20px;
   border-radius: 20px;
   padding-left: 15px;
}
h1{
  font-family: "Comic Sans MS", cursive, sans-serif	
;
}
    </style>


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
								<h1><b>Ajouter Enseignant</b></h1>
							</div>
							<nav aria-label="breadcrumb" role="navigation">
								<ol class="breadcrumb">
									<li class="breadcrumb-item"><a href="">Enseignant</a></li>
									<li class="breadcrumb-item active" aria-current="page">Ajouter</li>
								</ol>
							</nav>
						</div>
						<div class="col-md-6 col-sm-12 text-right">
							<div class="dropdown">
								
								<div class="dropdown-menu dropdown-menu-right">
									<a class="dropdown-item" href="#">Export List</a>
									<a class="dropdown-item" href="#">Policies</a>
									<a class="dropdown-item" href="#">View Assets</a>
								</div>
							</div>
						</div>
					</div>


				</div>

  
         
         
           <!-- horizontal Basic Forms Start -->
           <div style=" background-color: #d9f6fa;"class="pd-20  border-radius-4 box-shadow mb-30">
					<div class="clearfix">
						<div class="pull-left">
							<h4 class="text-blue">  Ajouter Enseignant</h4>
							
						</div>
						
					</div>
					<form class="" method="post" action="aa.php">
						<div class="form-group">
                        <label>CIN</label>
                        <div id="d" class="input-group">
  <span class="input-group-addon" id="basic-addon1"> <b><i class="icon-copy fa fa-id-card" aria-hidden="true"></i> </b></span>
  <input id="x" type="text" class="form-control" placeholder="Entrer carte d'idéntiter nationale" aria-describedby="basic-addon1" name="c" required>
</div> 

		
						</div>
						<div class="form-group">
							<label>Nom</label>
                            <div id="d" class="input-group">
  <span class="input-group-addon" id="basic-addon1"> <b><i class="icon-copy fa fa-user-circle" aria-hidden="true"></i> </b></span>
  <input id="i" type="text" class="form-control" placeholder="Entrer nom" aria-describedby="basic-addon1" name="n" required>
</div> 
						<div class="form-group">
							<label>Prénom</label>
                            <div id="d" class="input-group">
  <span class="input-group-addon" id="basic-addon1"> <b><i class="icon-copy fa fa-user-circle-o" aria-hidden="true"></i> </b></span>
  <input id="i" type="text" class="form-control" placeholder="Entrer prénom" aria-describedby="basic-addon1" name="p" required>
</div>
						</div>
						<div class="form-group">
							<label>Pseudo</label>
                       <div id="d" class="input-group">
  <span class="input-group-addon" id="basic-addon1"> <b><i class="icon-copy fa fa-user-o" aria-hidden="true"></i> </b></span>
  <input id="i" type="text" class="form-control" placeholder="Entrer pseudo" aria-describedby="basic-addon1" name="ps" required>
</div>
						</div>
						<div class="form-group">
							<label>mot de passe</label>
                            <div id="d" class="input-group">
  <span class="input-group-addon" id="basic-addon1"> <b><i class="icon-copy fa fa-lock" aria-hidden="true"></i> </b></span>
  <input id="i" type="password" class="form-control" placeholder="*****" aria-describedby="basic-addon1" name="m" required>
</div>
                        </div>
                        <div class="form-group">
							<label>Email</label>
                            <div id="d" class="input-group">
  <span class="input-group-addon" id="basic-addon1"> <b><i class="icon-copy fa fa-at" aria-hidden="true"></i></b></span>
  <input id="i" type="email" class="form-control" placeholder="example@gmail.com" aria-describedby="basic-addon1" name="e" required>
</div>
                        </div>
                        <div class="form-group">
							<label> numéro de téléphone</label>
                            <div id="d" class="input-group">
  <span class='input-group-addon' id='basic-addon1'> <i class='icon-copy fa fa-phone' aria-hidden='true'></i></span>
  <input id="i" type="text" class="form-control" placeholder="Entrer un numéro de téléphone" aria-describedby="basic-addon1" name="s" required>
</div>
                        </div>
												<div>
												<div class="form-group">
							<label> Departement </label><br>
                                                      

												<?php 
											include 'conx.php';
$reponse2 = $connect->query('select * from departement');
												echo '<select id="soflow-color" name="lsNiv" >';
   while ( $row = mysqli_fetch_array( $reponse2)){
 
    echo '<option id="id" value="'.$row[0].'">'.$row[1].'</option>';}
    echo '</select>';   ?>  
      </div>
                        </div>
<button type="submit" class="btn btn-primary" name="aj" id="sa-error" ><i class="icon-copy fa fa-user-plus" aria-hidden="true"></i>Ajouter</button>
								
                        <button type="reset" class="btn btn-danger"><i class="icon-copy fa fa-mail-reply" aria-hidden="true"></i>Annuler</button>


					    
                        </div>		
</form>	
				
         


			
		
	</div>



	<?php include('include/script.php'); ?>
	
	<?php include('include/footer.php'); ?>

	<script src="src/plugins/sweetalert2/sweetalert2.all.js"></script>
	<link rel="stylesheet" type="text/css" href="src/plugins/sweetalert2/sweetalert2.css">
	<script > 
  
	$('#sa-error').click(function () {
{
    if(document.txt.value)
            swal(
                {
                    type: 'error',
                    title: 'Oops...',
                    text: 'Something went wrong!',
                }
            )
          }});</script>
</body>
</html>