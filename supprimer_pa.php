<html>
<head>
<title>Supprimer personnel d'absence</title>
	<link rel="icon" type="image/png" href="images/icons/isigk1.ico"/>
</head>
<body>
<?php
include ('conx.php');





                               
                                $id = $_GET['cin_pera'];
                                $sql = "DELETE FROM personnela WHERE cin_per =$id";
                                $result = $connect->query($sql);
                              	include ('include/script.php'); 
																echo '
																<script>
															
																swal("succès","Personnel d\'absence a été supprimer !","success").then(function() {
																	window.location = "consulter_pa.php";
															});
															
															
															</script>
																';
														?>
											</body>
											</html>
                            
                          