<?php 
require "model/entity/Account.php";
require "model/accountModel.php";
require "model/entity/Customer.php";
require "model/entity/Operation.php";
require "model/operationModel.php";


session_start();
if(!isset($_SESSION["user"])) {
  header("Location:login.php");
  exit;
}

$accountModel = new AccountModel;
$operationModel = new OperationModel;

$user = $_SESSION["user"];
// var_dump($_SESSION["user"]);


if(isset($_GET["id"]) AND !empty($_GET["id"])){
  $accounts = $accountModel->getSingleAccount($_GET["id"], $user->getId());
  $operations = $operationModel->getSingleOperation($_GET["id"]);
  // var_dump($accounts);
}
else{
  header("Location:index.php");
}

require "view/voirCompteView.php";
?>



