
<html>
<head>
<head><link rel="icon" type="image/png" href="images/icons/isigk1.ico"/>
<title> modifier personnel du congé</title>

</head>
<body>
     <?php include ('include/script.php'); ?>
        <?php
include ('conx.php');


                                    $c = $_GET['id'];
                                
                                    if (isset($_POST['nom'])) {

                                         $nom=mysqli_real_escape_string($connect,$_POST['nom']);
                                             $pre=mysqli_real_escape_string($connect,$_POST['pre']);
                                             $mot_ens=mysqli_real_escape_string($connect,$_POST['mot_ens']);
                                             $Email=mysqli_real_escape_string($connect,$_POST['Email']);
                                             $Telepohne=mysqli_real_escape_string($connect,$_POST['Telephone']);
                                             


                                      $sql = "UPDATE personnela SET nom_per='$nom',pre_per='$pre',
                                      mot_per='$mot_ens',ema_per='$Email',tel_per='$Telepohne'
                                       WHERE cin_per=$c";
											$result = $connect->query($sql);
											include ('include/script.php'); 
											echo '
											<script>
										
										   
											swal({
											  title: "Succés!",
											  text: "Personnel d\'absence a été modifié avec succés!",
											  type: "success"
										  }).then(function() {
											window.location = "consulter_pa.php";
										});
										
											
											</script>
											';}?>
                                            </body>
                                            </html>