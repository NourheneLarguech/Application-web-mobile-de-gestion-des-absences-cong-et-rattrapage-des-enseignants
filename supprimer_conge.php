<html>
<head>
<link rel="icon" type="image/png" href="images/icons/isigk1.ico"/>
<title>Supprimer congé </title>
</head>
<body>
<?php
include ('conx.php');

                         
                                $id = $_GET['code_con'];
                            
                                $sql = "DELETE FROM conge WHERE code_con =$id";
                                $result = $connect->query($sql);
                                include ('include/script.php'); 
																echo '
																<script>
															
																swal("succès","La demande du congé a été supprimer !","success").then(function() {
																	window.location = "consulter_demande_conge.php";
															});
															
															
															</script>
																';
														?>
											</body>
											</html>
                           