<!DOCTYPE html>
<html lang="en">
<head>
	<title>Ajouter Remplaçant</title>
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

                        $sql = "select * from conge c,enseignant e  where c.code_con ='$c' and c.cin_ens=e.cin_ens ";
                        $res=mysqli_query($connect,$sql);
                        while($row=mysqli_fetch_array($res)){
                            $ci= $row['cin_ens'];
                     $n= $row['nom'];
                            $p= $row['pre'];
                            $dd = $row['dd'];
                            $dr = $row['dr'];
                           
                            

                        }
               
                    ?>
	<div class="limiter">
		<div class="container-login100">
			<div class="login100-more" id='m' style="background-image: url('modifier/images/enseignant.png');"></div>

			<div class="wrap-login100 p-l-50 p-r-50 p-t-72 p-b-50" id='f'>
				<form class="login100-form validate-form" method="post" action="ajouter_remplacant.php?id=<?php echo $c; ?>">
					<span class="login100-form-title p-b-59">
					Ajouter Enseignant Remplaçant
					</span>
                    <div class="wrap-input100 validate-input" >
						<span class="label-input100">CIN Enseignant:</span>
						<input class="input100" type="text" 
                        readonly value="<?php echo $ci;?>">
						<span class="focus-input100"></span>
					</div>


                    <div class="wrap-input100 validate-input" data-validate="s'il vous plaît Entrer CIN">
						<span class="label-input100">Nom Enseignant :</span>
						<input class="input100" type="text" 
                         readonly value="<?php echo $n;?>">
						<span class="focus-input100"></span>
					</div>
                    
                    <div class="wrap-input100 validate-input" data-validate="s'il vous plaît Entrer CIN">
						<span class="label-input100">Prénom Enseignant :</span>
						<input class="input100" type="text" 
                         readonly value="<?php echo $p;?>">
						<span class="focus-input100"></span>
					</div>

                    <div class="wrap-input100 validate-input" data-validate="s'il vous plaît Entrer CIN">
						<span class="label-input100">Date départ :</span>
						<input class="input100" type="text" 
                         readonly value="<?php echo $dd;?>">
						<span class="focus-input100"></span>
					</div>


                    <div class="wrap-input100 validate-input">
						<span class="label-input100">Date retour :</span>
						<input class="input100" type="text" 
                         readonly value="<?php echo $dr;?>">
						<span class="focus-input100"></span>
					</div>

                    
					<div class="wrap-input100 validate-input" data-validate="s'il vous plaît Entrer CIN">
						<span class="label-input100">CIN Remplaçant:</span>
						<input class="input100" type="text" name="CIN" placeholder="CIN..." >
						<span class="focus-input100"></span>
					</div>

					<div class="wrap-input100 validate-input" data-validate="s'il vous plaît Entrer Nom">
						<span class="label-input100">Nom Remplaçant:</span>
						<input class="input100" type="text" name="nom" placeholder="Nom..." >
						<span class="focus-input100"></span>
					</div>

					<div class="wrap-input100 validate-input" data-validate = "s'il vous plaît Entrer Prénom">
						<span class="label-input100">Prénom Remplaçant:</span>
						<input class="input100" type="text" name="pre" placeholder="Prénom..."  >
						<span class="focus-input100"></span>
					</div>
				

				

					<div class="wrap-input100 validate-input" data-validate = "s'il vous plaît Entrer Email" >
						<span class="label-input100">Email Remplaçant:</span>
						<input class="input100" type="email" name="Email" placeholder="exemple@gmail.com " >
						<span class="focus-input100"></span>
					</div>

					<div class="wrap-input100 validate-input" data-validate = "s'il vous plaît Entrer Numéro De Téléphone">
						<span class="label-input100">Télèphone Remplaçant:</span>
						<input class="input100" type="text" name="Telephone" placeholder="Numéro De Téléphone"  >
						<span class="focus-input100"></span>
					</div>

				

					<div class="container-login100-form-btn">
						<div class="wrap-login100-form-btn">
							<div class="login100-form-bgbtn"></div>
							<button class="login100-form-btn" name="envoye" type="submit" value="Envoyer">
								Ajouter
							</button>
						</div>

						<a href="consulter_demande_conge_accepter.php" class="dis-block txt3 hov1 p-r-30 p-t-10 p-b-10 p-l-30">
							Annuler
							<i class="fa fa-long-arrow-right m-l-5"></i>
						</a>
					</div>
				</form>
			</div>
		</div>
	</div>
	<?php
                                    $c = $_GET['id'];
                                
                                    if (isset($_POST['envoye'])) {
                                        $cin=$_POST['CIN'];
                                         $nom=$_POST['nom'];
                                             $pre=$_POST['pre'];
                                            
                                             $Email=$_POST['Email'];
                                             $Telepohne=$_POST['Telephone'];
                                             


                                             $req="select * from remplacant where cin_rem =$cin";
                                             $res=mysqli_query($connect,$req);
                                             include ('include/script.php'); 
                                             if(mysqli_num_rows($res)==0)
                                             {
                                             
                                                 $sqls="insert into enseignantr values('$cin','$nom','$pre','$Email','$Telepohne')";
                                                 mysqli_query($connect,$sqls);
                                                 $sql1 = "UPDATE conge SET cin_ensr='$cin'
                                                  WHERE code_con=$c";
                                                       $result = $connect->query($sql1);
                                                   
                                                 echo '
                                                 <script>
                                                 
                                              
                                                   swal({
                                                       title: "succés!",
                                                       text: "Enseignant Remplaçant a été ajouté avec succés!",
                                                       type: "success"
                                                   }).then(function() {
                                                     window.location = "consulter_demande_conge_accepter.php";
                                                 });
                                             
                                             
                                             
                                             
                                                 </script>
                                                 ';
                                             
                                             }else { 
                                                $sql2 = "UPDATE conge SET cin_ensr='$cin'
                                                WHERE code_con=$c";
                                                     $result = $connect->query($sql2);
                                                     echo '
                                                     <script>
                                                     
                                                  
                                                       swal({
                                                           title: "succés!",
                                                           text: "Enseignant Remplaçant a été ajouté avec succés!",
                                                           type: "success"
                                                       }).then(function() {
                                                         window.location = "consulter_remplacant.php";
                                                     });
                                                 
                                                 
                                                 
                                                 
                                                     </script>
                                                     '; 
                                                    
                                                    }
                                             }
                                              
                                             ?>
<!--===============================================================================================-->
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

</body>
</html>