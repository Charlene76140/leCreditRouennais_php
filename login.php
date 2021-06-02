<?php
  require "model/userModel.php";
  require "model/connexion.php";
  
  if(isset($_POST["email"]) AND isset($_POST["user_password"])) {
    $customer = getCustomerByEmail($db, $_POST["email"]);
    if($customer){
      if(password_verify($_POST["user_password"], $customer["user_password"])){
        session_start();
        $_SESSION["user"] = $customer;
        var_dump($_SESSION["user"]);
        header("Location:index.php");
        exit;
      }
    }
    $error_message = "Mot de passe ou e-mail incorrect";
  }

  require "view/loginView.php";
?>
