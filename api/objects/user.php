<?php
class user{
 
     private $conn;
    private $table_name = "personnela";
 
    public $cin_per;
    public $nom_per;
    public $pre_per;
    public $pse_per;
    public $mot_per;
        public $ema_per;
    public $tel_per;
 
 
    public function __construct($db){
        $this->conn = $db;
    }
    

   
 function login(){
$query  = "SELECT * from personnela WHERE cin_per = ? AND mot_per = ? ";

$stmttt = $this->conn->prepare($query );
$stmttt->bindParam(1, $this->cin_per);
$stmttt->bindParam(2, $this->mot_per);
$stmttt->execute();
     $row = $stmttt->fetch(PDO::FETCH_ASSOC);

     $num = $stmttt->rowCount();
if ($num > 0 ){
    echo json_encode(
        array("statut" => "valide","cin_per" => $row['cin_per'],"nom_per" => $row['nom_per'],"pre_per" => $row['pre_per'],"pse_per" => $row['pse_per']
        ,"mot_per" => $row['mot_per'],"ema_per" => $row['ema_per'],"tel_per" => $row['tel_per']


                )
    );
}else{
     echo json_encode(
        array("statut" => "invalide"


                )
    );
}


}


}
?>


