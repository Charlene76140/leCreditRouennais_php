<?php 
session_start();
if(!isset($_SESSION["user"])) {
  header("Location:login.php");
  exit;
}

require "model/accountModel.php";
require "model/connexion.php";

if(isset($_GET["id"]) AND !empty($_GET["id"])){
  $accounts = getAccountDetail($db, $_GET["id"], $_SESSION["user"]["id"]);
}
else{
  header("Location:index.php");
}

require "view/voirCompteView.php";
?>



