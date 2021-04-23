<html>
    <head>
    <link rel="icon" type="image/png" href="images/icons/isigk1.ico"/>
	<title>Modifier congé</title>

    </head>
    <body>
    <?php
    include ('conx.php');

	include ('include/script.php'); 
                                    $c = $_GET['id'];
                              
                                    if (isset($_POST['r'])) {

                                        $dd=$_POST['dd'];
$md=date('Y-m-d',strtotime($dd));

$dr=$_POST['dr'];
$mdd=date('Y-m-d',strtotime($dr));

                                     
$r=mysqli_real_escape_string($connect,$_POST['r']);

$t=mysqli_real_escape_string($connect,$_POST['t']);
                                            
                              
                             
                                           
                                            
                                             
                                             $sql ="UPDATE `conge` SET `r` = '$r',`t`='$t',dd='$md',dr='$mdd' WHERE `conge`.`code_con` = $c ;";


                             
                                    
                                            $result = $connect->query($sql);
                                            echo '
                                            <script>
                                            
                                         
                                              swal({
                                                  title: "succès",
                                                  text: "Congé a été modifier avec succès",
                                                  type: "success"
                                               }).then(function() {
                                                    window.location = "consulter_demande_conge.php";
                                                });
                                              
                                        
                                        
                                        
                                            </script>
                                            ';

                                    }
                                    ?>
                                      </body>
                                            </html>