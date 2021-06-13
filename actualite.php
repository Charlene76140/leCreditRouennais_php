<?php 
require "model/connexionModel.php";

session_start();
if(!isset($_SESSION["user"])) {
  header("Location:login.php");
  exit;
}


require "view/actualiteView.php";
?>

