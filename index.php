<?php
  require "model/entity/Account.php";
  require "model/accountModel.php";
  require "model/entity/Customer.php";

  session_start();
  if(!isset($_SESSION["user"])) {
    header("Location:login.php");
    exit;
  }

  $accountModel = new AccountModel();
  $user = $_SESSION["user"];
  $accounts= $accountModel->getAccount($user->getId());
 
  require "view/indexView.php";
?>
