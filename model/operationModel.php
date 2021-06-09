<?php
    class OperationModel{

        function getSingleOperation(int $id){
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

        // function addOperation(array $updateOperation) : bool{
        //     $query = $db->prepare(
        //         "INSERT INTO operation(type_of_operation, label, operation_date , amount, account_id) 
        //         VALUES(:type_of_operation, 'nouvelle operation', NOW(), :amount, :account_id)");
        //     $result = $query->execute([
        //         "type_of_operation" => $updateOperation["type_of_operation"],
        //         "amount" => $updateOperation["account_amount"],
        //         "account_id" => $updateOperation["id"]
        //     ]);
        //     return $result;
        // }


        public function __construct(){
            $this->db = new PDO('mysql:host=localhost;dbname=banque_php', 'root', '');
        }
    }
  
?>
