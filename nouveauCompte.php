<?php 
session_start();
if(!isset($_SESSION["user"])) {
  header("Location:login.php");
  exit;
}
 
require "model/accountModel.php";
require "model/connexion.php";

if(!empty($_POST)){
  if(!addNewAccount($db, $_POST)){
    echo "L'enregistrement a échoué";
  }
  else{
    header("Location: index.php");
    exit();
  }
}


require "view/nouveauCompteView.php";
?>


