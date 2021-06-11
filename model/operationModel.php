<?php
    class OperationModel{

        public function getSingleOperation(int $id){
            $query = $this->db->prepare("SELECT * FROM operation WHERE account_id=:id");
            $query->execute([
            "id" => $id
            ]);
            $result = $query->fetchAll(PDO::FETCH_ASSOC);
            foreach($result as $key=>$operation){
                $result[$key] = new Operation($operation);
            }
            return $result;
        }

        public function addOperation(Operation $operation, array $data, int $id) : bool{
            $query = $this->db->prepare(
                "INSERT INTO operation(type_of_operation, label, operation_date , amount, account_id) 
                VALUES(:type_of_operation, 'nouvelle operation', NOW(), :amount, :account_id)");
            $result = $query->execute([
                "type_of_operation" => $operation->getType_of_operation(),
                "amount" => $data["account_amount"],
                "account_id" => $id
            ]);
            return $result;
        }


        public function __construct(){
            // l'objet est automatiquement connecté à la BDD
            $this->db = ConnexionModel::getDB();
        }
    }
  
?>
