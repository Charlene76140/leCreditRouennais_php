<?php
  require "model/entity/Customer.php";
  require "model/customerModel.php";
  // require "model/connexion.php";

  $customerModel = new CustomerModel();


  if(isset($_POST["email"]) AND isset($_POST["user_password"])) {
    //enlevé ligne 10
    $customer = new Customer($_POST);
    $customerbdd = $customerModel->getCustomerByEmail($customer);

    if($customerbdd){
      if(password_verify($_POST["user_password"], $customerbdd->getUser_Password())){
        session_start();
        $_SESSION["user"] = $customerbdd;
        var_dump($_SESSION["user"]);
        header("Location:index.php");
        exit;
      }
    }
    $error_message = "Mot de passe ou e-mail incorrect";
  }

  require "view/loginView.php";
?>
 