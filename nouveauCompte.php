<?php 
session_start();
 
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


