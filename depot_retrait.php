<?php 

require "model/connexionModel.php";
require "model/entity/Account.php";
require "model/accountModel.php";
require "model/entity/Operation.php";
require "model/operationModel.php";
require "model/entity/Customer.php";


session_start();
if(!isset($_SESSION["user"])) {
  header("Location:login.php");
  exit;
}

$accountModel = new AccountModel();
$operationModel = new OperationModel();
$operation = new Operation($_POST);
$user = $_SESSION["user"];
$accounts= $accountModel->getAccount($user->getId());


if(!empty($_POST)){
  $account = $accountModel->getSingleAccount($_POST["id"], $user->getId());
}


if(!empty($_POST)){
  if($account) {
    $amount = floatval($account->getAccount_amount());
    $postamount = floatval($_POST["account_amount"]);
    // Update the amount of the account according to the type of operation
    if($_POST["type_of_operation"] === "Debit") {
      $total = $amount - $postamount;
      // var_dump($total);
      $_POST["account_amount"] = "-" . $_POST["account_amount"];
    }
    else {
      $total= $amount + $postamount;
      var_dump($total);
    }
  }

  if(!$accountModel->modifyAccount($total , $user->getId())){
    echo "L'enregistrement a échoué";
  }
  elseif(!$operationModel->addOperation($operation, $total, $account->getId())){
    echo "L'enregistrement a échoué";
  }
  else{
    header("Location: index.php");
    exit();
  }
}





require "view/depot_retraitView.php";

?>


