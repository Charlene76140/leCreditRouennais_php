<?php
  class CustomerModel {
    private PDO $db;

    //function used to retrieve the user's account from their e-mail
    public function getCustomerByEmail(array $data){
      $query = $this->db->prepare("SELECT * FROM customer WHERE email=:email");
      $query->execute([
        "email"=> $data["email"]
      ]);
      $result = $query->fetch(PDO::FETCH_ASSOC);
      $result = new Customer($result);
      return $result;
    }

    public function __construct(){
      // the object is automatically connected to the database by calling the static getdb method
      $this->db = ConnexionModel::getDB();
    }
  }
  
?>
