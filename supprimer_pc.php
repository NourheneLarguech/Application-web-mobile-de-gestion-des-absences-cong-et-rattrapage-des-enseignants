<html>
<head><link rel="icon" type="image/png" href="images/icons/isigk1.ico"/>
<title> Supprimer personnel du congé</title>
</head>
<body>
<?php
include ('conx.php');





                               
                                $id = $_GET['cin_per'];
                                $sql = "DELETE FROM personnel WHERE cin_per =$id";
                                $result = $connect->query($sql);
                              	include ('include/script.php'); 
						echo '
						<script>
															
							swal("succès","Personnel du congé a été supprimer !","success").then(function() {
							window.location = "consulter_pc.php";
												                                                         });
															
															
						</script>
																';
?>
											</body>
											</html>
                            
                          