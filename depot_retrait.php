<?php 
session_start();

require "model/accountModel.php";
require "model/operationModel.php";
require "model/connexion.php";

$accounts = getAccount($db, $_SESSION["user"]["id"]);

if(!empty($_POST)){
  if(!modifyAccount($db, $_POST)){
    echo "L'enregistrement a échoué";
  }
  elseif(!addOperation($db, $_POST)){
    echo "L'enregistrement a échoué";
  }
  else{
    header("Location: index.php");
    exit();
  }
}

require "view/depot_retraitView.php";

?>


