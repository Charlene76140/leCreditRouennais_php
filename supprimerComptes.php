<?php 
require "model/connexionModel.php";
require "model/entity/Account.php";
require "model/AccountModel.php";
require "model/entity/Customer.php";

session_start();
if(!isset($_SESSION["user"])) {
  header("Location:login.php");
  exit;
}

$accountModel = new AccountModel();
$user= $_SESSION["user"];
// $account= new Account($_POST["id"]);
$accounts = $accountModel->getAccount($user->getId());

if(!empty ($_POST)){
  $accountdelete= $accountModel->deleteAccount($_POST["id"], $user->getId());
  header("Location: index.php");
  exit();
}


require "view/supprimerCompteView.php";
?>
