<html>
<head>
<link rel="icon" type="image/png" href="images/icons/isigk1.ico"/>

</head>
<body>
<?php
include ('conx.php');





                               
                                $id = $_GET['cin_ensr'];
                                $sql1 = "UPDATE conge SET cin_ensr=0

 WHERE cin_ensr=$id";
      $result1 = $connect->query($sql1);
                                $sql = "DELETE FROM enseignantr WHERE cin_ensr =$id";
                                $result = $connect->query($sql);
                              	include ('include/script.php'); 
																echo '
																<script>
															
																swal("succès","Enseignant Remplaçant a été supprimer !","success").then(function() {
																	window.location = "consulter_remplaçant.php";
															});
															
															
															</script>
																';
														?>
											</body>
											</html>
                            
                          