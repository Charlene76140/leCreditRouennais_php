<?php
    //function pour récupérer tous les comptes en fonction de l'ID, sur la page index.php
    function getAccount(PDO $db, int $id){
        $query = $db->prepare("SELECT * FROM account WHERE customer_id=:id");
        $query->execute([
        "id" => $id
        ]);
        $result = $query->fetchAll(PDO::FETCH_ASSOC);
        return $result;
    }

    //fonction utilisée pour récupérer les comptes en fonctions de l'ID du customer, et jointures sur les opérations du compte sur la page voirCompte.php
    function getAccountDetail(PDO $db, int $id, int $userId){
        $query = $db->prepare(
            "SELECT * FROM account AS a
            LEFT JOIN operation AS o
            ON o.account_id = a.id
            WHERE a.id = :id
            AND customer_id=:userId"
        );
        $query -> execute([
            "id" => $id,
            "userId"=> $userId
        ]);
        $result = $query->fetchAll(PDO::FETCH_ASSOC);
        return $result;
    }

    //fonction utilisée pour ajouter un nouveau compte sur la page nouveauCompte.php
    function addNewAccount(PDO $db, array $account):bool {
        $query= $db->prepare("INSERT INTO account(account_type,account_number,account_amount, account_fees, creation_date, customer_id) VALUES(:account_type, 'FR457121 C741',  :account_amount, 19.90, NOW(), :customer_id)");
        $result = $query->execute([
            "account_type" => $account["account_type"],
            "account_amount"=> $account["account_amount"],
            "customer_id" => $_SESSION["user"]["id"]
        ]);
        return $result;
    }

    //fonction utilisée pour faire un débit/crédit sur la page depot_retrait.php
    function modifyAccount(PDO $db, array $updateAccount){
        if($updateAccount["type_of_operation"] === "Debit"){
            $query = $db->prepare("UPDATE account SET account_amount=(account_amount - :account_amount) WHERE  id=:id");
        }
        else{
            $query = $db->prepare("UPDATE account SET account_amount=(account_amount + :account_amount) WHERE  id=:id");
        }    
        $result = $query->execute([
            "account_amount" => $updateAccount["account_amount"],
            "id" => $updateAccount["id"]
        ]);
        return $result;
    }

?>