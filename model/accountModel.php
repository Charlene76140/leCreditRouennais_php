<?php
class AccountModel{
    private PDO $db;

    //function to retrieve all accounts according to the customer's ID, on the index.php page
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

    //function to retrieve a single account based on customer id and account id
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

    //function used to add a new account on the page nouveauCompte.php
    public function addNewAccount(Account $account, int $id):bool {
        $query= $this->db->prepare("INSERT INTO account(account_type,account_number,account_amount, account_fees, creation_date, customer_id) 
        VALUES(:account_type, 'FR457121 C741',  :account_amount, 19.90, NOW(), :customer_id)"
        );
        $result = $query->execute([
            "account_type" => $account->getAccount_type(),
            "account_amount"=> $account->getAccount_amount(),
            "customer_id" => $id
        ]);
        return $result;
    }

    // public function modifyAccount(float $amount, int $id) : bool{
    //     $query = $this->db->prepare(
    //         "UPDATE account SET account_amount=:account_amount 
    //         WHERE  id=:id"
    //     );

    //     $result = $query->execute([
    //         "account_amount" => $amount,
    //         "id" => $id
    //     ]);
    //     return $result;
    // }

    public function deleteAccount(int $id, int $customer_id){
        $query= $this->db->prepare(
            "DELETE FROM account WHERE id=:id AND customer_id= :customer_id"
        );
        $result = $query->execute([
            "id"=>$id,
            "customer_id" => $customer_id
        ]);
        return $result; 
    }

    public function __construct(){
        // the object is automatically connected to the database by calling the static getdb method
        $this->db = ConnexionModel::getDB();
    }
}
    

?>