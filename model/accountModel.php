<?php
class AccountModel{
    private PDO $db;

    //function pour récupérer tous les comptes en fonction de l'ID, sur la page index.php
    public function getAccount(int $id){
        $query = $this->db->prepare("SELECT * FROM account WHERE customer_id=:id");
        $query->execute([
        "id" => $id
        ]);
        $result = $query->fetchAll(PDO::FETCH_ASSOC);
        foreach($result as $key=>$account){
            $result[$key] = new Account($account);
        }
        return $result;
    }

    public function getSingleAccount(int $id, int $customer_id){
        $query = $this->db->prepare("SELECT * FROM account WHERE id=:id AND customer_id=:customer_id");
        $query->execute([
        "id" => $id,
        "customer_id"=> $customer_id
        ]);
        $result = $query->fetch(PDO::FETCH_ASSOC);
        $result = new Account($result);
        return $result;
    }

    // //fonction utilisée pour récupérer les comptes en fonctions de l'ID du customer, et jointures sur les opérations du compte sur la page voirCompte.php
    // function getAccountDetail(PDO $db, int $id, int $userId){
    //     $query = $db->prepare(
    //         "SELECT * FROM account AS a
    //         LEFT JOIN operation AS o
    //         ON o.account_id = a.id
    //         WHERE a.id = :id
    //         AND customer_id=:userId"
    //     );
    //     $query -> execute([
    //         "id" => $id,
    //         "userId"=> $userId
    //     ]);
    //     $result = $query->fetchAll(PDO::FETCH_ASSOC);
    //     return $result;
    // }

    // //fonction utilisée pour ajouter un nouveau compte sur la page nouveauCompte.php
    // function addNewAccount(PDO $db, array $account):bool {
    //     $query= $db->prepare("INSERT INTO account(account_type,account_number,account_amount, account_fees, creation_date, customer_id) 
    //     VALUES(:account_type, 'FR457121 C741',  :account_amount, 19.90, NOW(), :customer_id)"
    //     );

    //     $result = $query->execute([
    //         "account_type" => $account["account_type"],
    //         "account_amount"=> $account["account_amount"],
    //         "customer_id" => $_SESSION["user"]["id"]
    //     ]);
    //     return $result;
    // }

    // function modifyAccount(PDO $db, array $updateAccount){
    //     $query = $db->prepare(
    //         "UPDATE account SET account_amount=:account_amount 
    //         WHERE  id=:id"
    //     );

    //     $result = $query->execute([
    //         "account_amount" => $updateAccount["account_amount"],
    //         "id" => $updateAccount["account_id"]
    //     ]);
    //     return $result;
    // }

    public function __construct(){
        // l'objet est automatiquement connecté à la BDD
        $this->db = new PDO('mysql:host=localhost;dbname=banque_php', 'root', '');
    }
}
    

?>