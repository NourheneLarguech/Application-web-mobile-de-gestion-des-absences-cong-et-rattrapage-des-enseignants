<?php
include 'conx.php';
$code_jou=$_POST["code_jou"] ;
$code_sea=$_POST["code_sea"] ;
$salle_libre=array();




$sql="select * from salle";
$res=mysqli_query($connect,$sql);
$j=0 ;
while($result=mysqli_fetch_array($res)){
$id_sal=$result['code_sal'];

$sql1="select * from emploi WHERE code_jou=$code_jou and code_sea=$code_sea and code_sal=$id_sal";
$res1=mysqli_query($connect,$sql1);


$row_cnt = mysqli_num_rows($res1);
 if($row_cnt == 0){
    $salle_libre[$j]["code_sal"]=$id_sal ;
    $salle_libre[$j]["lib_sal"]=$result['lib_sal'] ;
    $j++ ;



 }





}
echo json_encode($salle_libre);


?>