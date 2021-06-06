<?php

  require "model/connexion.php";
  require "model/accountModel.php";
  require "model/userModel.php";

  session_start();
  if(!isset($_SESSION["user"])) {
    header("Location:login.php");
    exit;
  }

  $accounts = getAccount($db, $_SESSION["user"]["id"]);
  
  require "view/indexView.php";
?>
