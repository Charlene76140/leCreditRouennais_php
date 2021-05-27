<?php
  function getCustomerByEmail(PDO $db, string $email){
    $query = $db->prepare("SELECT * FROM customer WHERE email=:email");
    $query->execute([
      "email"=> $email
    ]);
    $result = $query->fetch(PDO::FETCH_ASSOC);
    return $result;
  }

  // function getAccountByUserId(PDO $db, int $id){
  //   $query = $db->prepare(
  //     "SELECT * FROM customer
  //     INNER JOIN account
  //     ON account.customer_id = customer.id
  //     WHERE customer.id = :id"
  //   );
  //   $query->execute([
  //     "id" => $id
  //   ]);
  //   $result = $query->fetchAll(PDO::FETCH_ASSOC);
  //   return $result;
  // }
?>
