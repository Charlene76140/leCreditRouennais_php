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

$accountModel = new AccountModel();
$user= $_SESSION["user"];
$accounts = $accountModel->getAccount($user->getId());

if(!empty ($_POST["form1"])){
  $accountdelete= $accountModel->deleteAccount($_POST["id"], $user->getId());
  header("Location: index.php");
  exit();
}


require "view/supprimerCompteView.php";
?>
