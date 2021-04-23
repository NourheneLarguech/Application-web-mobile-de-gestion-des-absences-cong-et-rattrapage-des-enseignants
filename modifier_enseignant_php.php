	<html>
    <head>
    <link rel="icon" type="image/png" href="images/icons/isigk1.ico"/>
	<title>Modifier enseignant</title>

    </head>
    <body>
    <?php
    include ('conx.php');

	include ('include/script.php'); 
                                    $c = $_GET['id'];
                                
                                    if (isset($_POST['nom'])) {

                                         $nom=mysqli_real_escape_string($connect,$_POST['nom']);
                                             $pre=mysqli_real_escape_string($connect,$_POST['pre']);
                                             $mot_ens=mysqli_real_escape_string($connect,$_POST['mot_ens']);
                                             $Email=mysqli_real_escape_string($connect,$_POST['Email']);
                                             $Telepohne=mysqli_real_escape_string($connect,$_POST['Telephone']);
																				
																						 
																						
																						 
																						 
																						 
																	


                                      $sql = "UPDATE enseignant SET nom='$nom',pre='$pre',
                                      mot_ens='$mot_ens',Email='$Email',Telephone='$Telepohne'
                                       WHERE cin_ens=$c";
											$result = $connect->query($sql);
											echo '
											<script>
										
										   
											swal({
											  title: "Succés!",
											  text: "Enseignant a été modifié avec succés!",
											  type: "success"
										  }).then(function() {
											window.location = "consulter_enseignant.php";
										});
										
											
											</script>
											';}?>
                                            </body>
                                            </html>