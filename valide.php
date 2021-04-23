<?php
include 'conx.php'
$req="select * from filiere where code_niv=idniveau";
$res=mysqli_query($connect,$req);
while($row=mysqli_fetch_array($res)){
    echo $row[1];
}




?>