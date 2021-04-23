<!DOCTYPE html>
<html lang="en">
<head>
	<title> Enseignant Remplaçant</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
<link rel="icon" type="image/png" href="images/icons/isigk1.ico"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="modifier/vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="modifier/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="modifier/fonts/Linearicons-Free-v1.0.0/icon-font.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="modifier/fonts/iconic/css/material-design-iconic-font.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="modifier/vendor/animate/animate.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="modifier/vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="modifier/vendor/animsition/css/animsition.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="modifier/vendor/select2/select2.min.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="modifier/vendor/daterangepicker/daterangepicker.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="modifier/css/util.css">
	<link rel="stylesheet" type="text/css" href="modifier/css/main.css">
<!--===============================================================================================-->
<style>
#m{
width:600px;
}
#f{
	width:983px;
}
</style>
</head>
<body style="background-color: #999999;">
<?php include 'conx.php';?>
<?php
                   
                        $c = $_GET['id'];

                        $sql = "select * from enseignantr  where cin_ensr ='$c' ";
                        $res=mysqli_query($connect,$sql);
                        while($row=mysqli_fetch_array($res)){
                     $c= $row[0];
                            $n= $row[1];
                            $p = $row[2];
                            $e  = $row[3];

                            $t = $row[4];
                            

                        }
               
                    ?>
	<div class="limiter">
		<div class="container-login100">
			<div class="login100-more" id='m' style="background-image: url('modifier/images/enseignant.png');"></div>

			<div class="wrap-login100 p-l-50 p-r-50 p-t-72 p-b-50" id='f'>
				<form class="login100-form validate-form" method="post"  id="formx" action="modifier_enseignant_remplaçant.php?id=<?php echo $c ?>">
					<span class="login100-form-title p-b-59">
					 Enseignant Remplçant
					</span>
                    <div class="wrap-input100 validate-input" data-validate="s'il vous plaît Entrer CIN">
						<span class="label-input100">CIN:</span>
						<input class="input100" type="text" name="nom" placeholder="CIN..." readonly value="<?php echo $c;?>">
						<span class="focus-input100"></span>
					</div>
					<div class="wrap-input100 validate-input" data-validate="s'il vous plaît Entrer Nom">
						<span class="label-input100">Nom:</span>
						<input class="input100" type="text" name="nom" placeholder="Nom..." value="<?php echo $n;?>">
						<span class="focus-input100"></span>
					</div>

					<div class="wrap-input100 validate-input" data-validate = "s'il vous plaît Entrer Prénom">
						<span class="label-input100">Prénom:</span>
						<input class="input100" type="text" name="pre" placeholder="Prénom..." value="<?php echo $p ;?>" >
						<span class="focus-input100"></span>
					</div>
				
				

					<div class="wrap-input100 validate-input" data-validate = "s'il vous plaît Entrer Email" >
						<span class="label-input100">Email:</span>
						<input class="input100" type="email" name="Email" placeholder="exemple@gmail.com " value="<?php echo $e ;?>">
						<span class="focus-input100"></span>
					</div>

					<div class="wrap-input100 validate-input" data-validate = "s'il vous plaît Entrer Numéro De Téléphone">
						<span class="label-input100">Numéro de télèphone:</span>
						<input class="input100" type="number" name="Telephone" placeholder="Numéro De Téléphone" id='tel' value="<?php echo $t ;?>">
						<span class="focus-input100"></span>
					</div>
			
				
			

			
				</form>
				<div class="container-login100-form-btn">
						<div class="wrap-login100-form-btn">
							<div class="login100-form-bgbtn"></div>
							<button class="login100-form-btn" name="envoye" type="submit" value="Envoyer" onclick="verif_CIN()" >
								Modifier
							</button>
						</div>
                    
						<a href="consulter_demande_conge_accepter.php" class="dis-block txt3 hov1 p-r-30 p-t-10 p-b-10 p-l-30">
							Retour
							<i class="fa fa-long-arrow-right m-l-5"></i>
						</a>
					</div>
		</div>
		</div>
	</div>
	<?php include('include/script.php'); ?>

<script>
function verif_CIN() {

if ($("#tel").val().toString().length !=8){
$titre = "Erreur ",
$text = "Telephone est composé par 8 entier";
$type ="error"; //success ou error
sweet_alert($titre,$text,$type);
}
else {
$("#formx").submit();
}





}

</script>



											
	<script src="modifier/vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="modifier/vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
	<script src="modifier/vendor/bootstrap/js/popper.js"></script>
	<script src="modifier/vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="modifier/vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="modifier/vendor/daterangepicker/moment.min.js"></script>
	<script src="modifier/vendor/daterangepicker/daterangepicker.js"></script>
<!--===============================================================================================-->
	<script src="modifier/vendor/countdowntime/countdowntime.js"></script>
<!--===============================================================================================-->
	<script src="modifier/js/main.js"></script>
	<?php include ('include/footer.php'); ?>

</body>
</html>