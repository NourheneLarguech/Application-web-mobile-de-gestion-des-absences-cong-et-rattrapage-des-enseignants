<?php
class enseignant{
 
     private $conn;
    private $table_name = "enseignant";
 
    public $cin_ens;
    public $nom;
    public $pre;
    public $mot_ens;
    public $Email;
    public $Telephone;
    public $nb_abs;
    public $date;
    public $code_sea;
    public $code_jou;
    public $mdate;


 
    public function __construct($db){
        $this->conn = $db;
    }
    

   
   
    function consulter_enseignant(){
        $query  = "select emploi.code_emp,emploi.cin_ens,enseignant.nom,enseignant.pre,enseignant.nbr_abs,
        matiere.lib_mat,groupe.lib_gro,seance.lib_sea,salle.lib_sal, jour.lib_jou from emploi , 
        enseignant,matiere,groupe,seance,salle,jour WHERE enseignant.cin_ens = emploi.cin_ens AND emploi.code_jou=? and 
        emploi.code_sea=? and emploi.code_mat=matiere.code_mat and emploi.code_gro=groupe.code_gro and emploi.code_sea=seance.code_sea and emploi.code_sal=salle.code_sal
        and emploi.code_jou=jour.code_jou;
         ;";
        $stmttt = $this->conn->prepare($query );
        $stmttt->bindParam(1, $this->code_jou);
        $stmttt->bindParam(2, $this->code_sea);
        $stmttt->execute();
        $appointment_arr["enseignant"]=array();
        while ($row = $stmttt->fetch(PDO::FETCH_ASSOC)){
               extract($row);





$query1  = "SELECT  enseignantr.cin_ensr,enseignantr.nbr_abs,enseignantr.nom,enseignantr.pre FROM `conge`,enseignantr
 WHERE dd<=?and dr>=? and cin_ens=? and conge.etat='Accepter' and  enseignantr.cin_ensr=conge.cin_ensr;";
        $stmt = $this->conn->prepare($query1 );
        $stmt->bindParam(1,$this->date);
        $stmt->bindParam(2,$this->date);
        $stmt->bindParam(3, $row['cin_ens']);
        // $stmt->bindParam(2, $this->code_sea);
        $stmt->execute();


   $row1 = $stmt->fetch(PDO::FETCH_ASSOC);

     $num = $stmt->rowCount();
if ($num > 0 ){

           $appointment_item=array(
                   "code_emp" => $row['code_emp'],
                   "cin_ens" => $row1['cin_ensr'],
                   "nom_ens" => $row1['nom'],
                   "nbr_abs" => $row1['nbr_abs'],
                   "prenom_ens" => $row1['pre'],
                   "lib_mat" => $row['lib_mat'],
                   "lib_gro" => $row['lib_gro'],
                   "lib_sea" => $row['lib_sea'],
                   "lib_sal" => $row['lib_sal'],
                   "lib_jou" => $row['lib_jou'],
                   "nom" => $row['nom'],
                
               );
               array_push($appointment_arr["enseignant"], $appointment_item);
 
}else{

               //SELECT * FROM `conge` WHERE dd<'2019-04-26'and dr>'2019-04-26' and cin_ens='12345678'
               $appointment_item=array(
                   "code_emp" => $row['code_emp'],
                   "cin_ens" => $row['cin_ens'],
                   "nom" => $row['nom'],
                   "pre" => $row['pre'],
                   "nbr_abs" => $row['nbr_abs'],

                   "lib_mat" => $row['lib_mat'],
                   "lib_gro" => $row['lib_gro'],
                   "lib_sea" => $row['lib_sea'],
                   "lib_sal" => $row['lib_sal'],
                   "lib_jou" => $row['lib_jou'],
                
               );
               array_push($appointment_arr["enseignant"], $appointment_item);
            }
        
        
        }
                   echo json_encode($appointment_arr);

        
         }
         function ajouter_absence(){
         
            
            $query2  = "UPDATE `enseignant` SET `nbr_abs` = ? WHERE `enseignant`.`cin_ens` = ?;";
            $stmttt2 = $this->conn->prepare($query2 );
           
           
           
            $stmttt2->bindParam(1,$this->nb_abs);
            $stmttt2->bindParam(2, $this->cin_ens);
            $stmttt2->execute();
        
    
    
         
            
            
            


         
}
function consulter_rattrapage(){
    $query  = "SELECT enseignant.cin_ens,enseignant.nbr_abs,enseignant.nom,enseignant.pre,salle.lib_sal from enseignant,rattrapage,salle
     where enseignant.cin_ens=rattrapage.cin_ens and salle.code_sal=rattrapage.code_sal and rattrapage.mdate= ? and rattrapage.code_sea= ?";
    $stmttt = $this->conn->prepare($query );
    $stmttt->bindParam(1, $this->mdate);
    $stmttt->bindParam(2, $this->code_sea);
  
    $stmttt->execute();
    $appointment_arr["seance"]=array();
    while ($row = $stmttt->fetch(PDO::FETCH_ASSOC)){
           extract($row);
           $appointment_item=array(
               "cin_ens" => $row['cin_ens'],
               "nom" => $row['nom'],
               "pre" => $row['pre'],
               "nbr_abs" => $row['nbr_abs'],
               "lib_sal" => $row['lib_sal'],
           );
           array_push($appointment_arr["seance"], $appointment_item);
        }
       echo json_encode($appointment_arr);
    
    
    
    
     }


}
        
?>


