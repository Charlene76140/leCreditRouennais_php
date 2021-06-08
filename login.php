<?php
  require "model/entity/Customer.php";
  require "model/customerModel.php";

  $customerModel = new CustomerModel();


  if(isset($_POST["email"]) AND isset($_POST["user_password"])) {
    // customerbdd est une tableau d'objet de la class Customer
    $customerbdd = $customerModel->getCustomerByEmail($_POST);

    if($customerbdd){
      if(password_verify($_POST["user_password"], $customerbdd->getUser_Password())){
        session_start();
        //session user stock l'objet customer
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
 