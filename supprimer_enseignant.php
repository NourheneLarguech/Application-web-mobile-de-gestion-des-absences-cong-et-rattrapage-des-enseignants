<html>
<head>
<link rel="icon" type="image/png" href="images/icons/isigk1.ico"/>

</head>
<body>
<?php
include ('conx.php');





                               
                                $id = $_GET['cin_ens'];
                                $sql = "DELETE FROM enseignant WHERE cin_ens =$id";
                                $result = $connect->query($sql);
                              	include ('include/script.php'); 
																echo '
																<script>
															
																swal("succès","Enseignant a été supprimer !","success").then(function() {
																	window.location = "consulter_enseignant.php";
															});
															
															
															</script>
																';
														?>
											</body>
											</html>
                            
                          