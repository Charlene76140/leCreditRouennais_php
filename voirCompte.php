<?php 
session_start();

require "model/accountModel.php";
require "model/connexion.php";

if(isset($_GET["id"]) AND !empty($_GET["id"])){
  $accounts = getAccountDetail($db, $_GET["id"]);
}
else{
  header("Location:index.php");
}

require "view/voirCompteView.php";
?>



