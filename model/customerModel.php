<?php
class CustomerModel {
  private PDO $db;

  function getCustomerByEmail(Customer $customer){
    $query = $this->db->prepare("SELECT * FROM customer WHERE email=:email");
    $query->execute([
      "email"=> $customer->getEmail()
    ]);
    $result = $query->fetch(PDO::FETCH_ASSOC);
    $result = new Customer($result);
    return $result;
  }

  public function __construct(){
    $this->db = new PDO('mysql:host=localhost;dbname=banque_php', 'root', '');
  }
}
  
?>
