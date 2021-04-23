<?php
class seance{
 
     private $conn;
    private $table_name = "seance";
 
    public $code_sea;
    public $lib_sea;

 
    public function __construct($db){
        $this->conn = $db;
    }
    

   
    function consulter_seance(){
        $query  = "SELECT * FROM seance ;";
        $stmttt = $this->conn->prepare($query );
        $stmttt->execute();
        $appointment_arr["seance"]=array();
        while ($row = $stmttt->fetch(PDO::FETCH_ASSOC)){
               extract($row);
               $appointment_item=array(
                   "code_sea" => $row['code_sea'],
                   "lib_sea" => $row['lib_sea'],
                
               );
               array_push($appointment_arr["seance"], $appointment_item);
            }
           echo json_encode($appointment_arr);
        
        
        
        
         }
}
        
?>


