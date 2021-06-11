<?php 

require "model/connexionModel.php";
require "model/entity/Account.php";
require "model/accountModel.php";
require "model/entity/Customer.php";

session_start();
if(!isset($_SESSION["user"])) {
  header("Location:login.php");
  exit;
} 

$error="";
$accountModel = new AccountModel();
$account= new Account($_POST);
$user = $_SESSION["user"];


if(!empty($_POST)){
  if($_POST["account_amount"] >= 50){
    if(!$accountModel->addNewAccount($account, $user->getId())){
      $error_bdd= "L'enregistrement a échoué";
    }
    else{
      header("Location: index.php");
      exit();
    }
  }
  else{
    $error = "Merci de saisir un montant superieur ou egal à 50€.";
  }
}


require "view/nouveauCompteView.php";
?>


