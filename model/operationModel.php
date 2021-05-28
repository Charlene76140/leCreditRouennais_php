<!-- <?php
  function addOperation(PDO $db, array $updateOperation) : bool{
    $query = $db->prepare(
        "INSERT INTO operation(type_of_operation, label, operation_date , amount, account_id) 
        VALUES(:type_of_operation, 'nouvelle operation', NOW(), :amount, :account_id)");
    $result = $query->execute([
        "type_of_operation" => $updateOperation["type_of_operation"],
        "amount" => $updateOperation["amount"],
        "account_id" => $updateOperation["id"]
    ]);
    return $result;
}
?> -->
