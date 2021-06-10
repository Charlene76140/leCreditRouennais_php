<?php 

require "model/connexionModel.php";
require "model/accountModel.php";
require "model/operationModel.php";
require "model/connexion.php";

session_start();
if(!isset($_SESSION["user"])) {
  header("Location:login.php");
  exit;
}

$accounts = getAccount($db, $_SESSION["user"]["id"]);

if(!empty($_POST)){
  $account = getAccountDetail($db, $_POST["id"], $_SESSION["user"]["id"]);
  $singleAccount= $account[0];

}

if(!empty($_POST)){
  if($singleAccount) {
    // Update the amount of the account according to the type of operation
    if($_POST["type_of_operation"] === "Debit") {
      $singleAccount["account_amount"] = floatval($singleAccount["account_amount"]) - floatval($_POST["account_amount"]);
      $_POST["account_amount"] = "-" . $_POST["account_amount"];
    }
    else {
      $singleAccount["account_amount"] = floatval($singleAccount["account_amount"]) + floatval($_POST["account_amount"]);
      var_dump($singleAccount);
    }
  }

  if(!modifyAccount($db, $singleAccount)){
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


