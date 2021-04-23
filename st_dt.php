<?php
 include 'conx.php';
 $resultat=array();
 $i = 0 ;
// $dt=$_POST["mdate"];
 $code_jou =$_POST["jour"];;
 $code_gro = $_POST["groupe"];


 $req="select * from emploi WHERE code_jou = $code_jou AND code_gro=$code_gro ";
 $res=mysqli_query($connect,$req);
while($row=mysqli_fetch_array($res)){

$resultat[$i]=$row ;
$i++ ;

}
$seance_occ =array();
$j=0 ;

for($j=0;$j<sizeof($resultat);$j++){
    $seance_occ[$j]=$resultat[$j]["code_sea"] ;


}

$k = 0 ;
$seance_lib =array();
$reqx="select * from seance ";
$resx=mysqli_query($connect,$reqx);
while($rowx=mysqli_fetch_array($resx)){

if( !(in_array( $rowx["code_sea"] ,$seance_occ )) )
{
    $seance_lib[$k]["code_sea"]=$rowx["code_sea"] ;
    $seance_lib[$k]["lib_sea"]=$rowx["lib_sea"] ;
    $k++ ;
}



}

echo json_encode($seance_lib);




?>
