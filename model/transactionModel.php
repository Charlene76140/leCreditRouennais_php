<?php
class TransactionModel{
    private PDO $db;

    public function Transaction(float $total,int $id, Operation $operation , array $data){
        try{
            $this->db->beginTransaction();

            $update =  "UPDATE account SET account_amount=:account_amount WHERE  id=:id";
            $stmt = $this->db->prepare($update);
            $stmt->execute([
                "account_amount" => $total,
                "id" => $id
            ]); 
            
            $insert= "INSERT INTO operation(type_of_operation, label, operation_date , amount, account_id) 
            VALUES(:type_of_operation, 'nouvelle operation', NOW(), :amount, :account_id)";
            $stmt = $this->db->prepare($insert);
            $stmt->execute([
                "type_of_operation" => $operation->getType_of_operation(),
                "amount" => $data["account_amount"],
                "account_id" => $id
            ]);

            $this->db->commit();
        }
        catch(Exception $e){
            echo $e->getMessage();
            $this->db->rollBack();
        }
        return $stmt;
    }

    public function __construct(){
        // l'objet est automatiquement connecté à la BDD
        $this->db = ConnexionModel::getDB();
    }
}
    
?>