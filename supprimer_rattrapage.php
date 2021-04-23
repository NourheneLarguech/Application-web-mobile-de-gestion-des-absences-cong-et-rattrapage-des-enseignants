<html>
<head>
<link rel="icon" type="image/png" href="images/icons/isigk1.ico"/>

</head>
<body>
<?php
include ('conx.php');





                               
                                $id = $_GET['id_rattrapage'];
                                $sql = "DELETE FROM rattrapage WHERE id_rattrapage =$id";
                                $result = $connect->query($sql);
                              	include ('include/script.php'); 
																echo '
																<script>
															
																swal("succès","Rattrapage a été supprimer !","success").then(function() {
																	window.location = "consulter_rattrapage.php";
															});
															
															
															</script>
																';
														?>
											</body>
											</html>
                            
                          