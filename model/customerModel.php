<?php
class CustomerModel {
  private PDO $db;

  function getCustomerByEmail(array $data){
    $query = $this->db->prepare("SELECT * FROM customer WHERE email=:email");
    $query->execute([
      "email"=> $data["email"]
    ]);
    $result = $query->fetch(PDO::FETCH_ASSOC);
    $result = new Customer($result);
    return $result;
  }

  public function __construct(){
    // l'objet est automatiquement connecté à la BDD
    $this->db = ConnexionModel::getDB();
  }
}
  
?>
