<?php
 include 'conx.php';
 $resultat=array();
 $i = 0 ;
 $code_niveau=$_POST["niveau"];

 $req="select * from matiere where  code_niv= $code_niveau";
   $res=mysqli_query($connect,$req);
 while($row=mysqli_fetch_array($res)){

  $resultat[$i]=$row ;
$i++ ;

}
echo json_encode($resultat);

?>