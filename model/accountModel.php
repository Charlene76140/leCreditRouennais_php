<?php
    try {
        $db = new PDO('mysql:host=localhost;dbname=banque_php;charset=utf8', 'root', '');
    }
    catch(Exception $error) {
        die($error->getMessage());
    }

    function getAccount(PDO $db):array {
        $response = $db->query("SELECT * FROM account WHERE customer_id=1");
        $result = $response->fetchAll(PDO::FETCH_ASSOC);
        return $result;
    }

    function getDetails(PDO $db, int $id){
        $query = $db->prepare("SELECT * FROM account WHERE id=:id");
        $query->execute([
        "id" => $id
        ]);
        $result = $query->fetch(PDO::FETCH_ASSOC);
        return $result;
    }

    function getOperation(PDO $db, int $id){
        $query = $db->prepare(
            "SELECT * FROM account AS a
            INNER JOIN operation AS o
            ON o.account_id = a.id
            WHERE a.id = :id"
        );
        $query -> execute([
            "id" => $id
        ]);
        $result = $query->fetchAll(PDO::FETCH_ASSOC);
        return $result;
    }


    



    // function getOperation(PDO $db): array{
    //     $response = $db->query("SELECT * FROM operation WHERE account_id=1");
    //     $result = $response->fetchAll(PDO::FETCH_ASSOC);
    //     return $result;
    // }

?>