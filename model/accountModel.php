<?php
   require "model/connexion.php";

    function getAccount(PDO $db, int $id){
        $query = $db->prepare("SELECT * FROM account WHERE customer_id=:id");
        $query->execute([
        "id" => $id
        ]);
        $result = $query->fetchAll(PDO::FETCH_ASSOC);
        return $result;
    }

    function getDetailsAccount(PDO $db, int $id){
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
?>