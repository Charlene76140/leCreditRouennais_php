<?php 

require "model/connexionModel.php";
require "model/entity/Account.php";
require "model/accountModel.php";
require "model/entity/Operation.php";
require "model/operationModel.php";
require "model/entity/Customer.php";
require "model/TransactionModel.php";


session_start();
if(!isset($_SESSION["user"])) {
  header("Location:login.php");
  exit;
}

$transactionModel = new TransactionModel();


$accountModel = new AccountModel();
$operationModel = new OperationModel();

$user = $_SESSION["user"];
$accounts= $accountModel->getAccount($user->getId());


if(!empty($_POST)){
  $account = $accountModel->getSingleAccount($_POST["id"], $user->getId());
}


if(!empty($_POST)){
  $operation = new Operation($_POST);
  if($account) {
    $amount = floatval($account->getAccount_amount());
    $postamount = floatval($_POST["account_amount"]);
    // Update the amount of the account according to the type of operation
    if($_POST["type_of_operation"] === "Debit") {
      $total = $amount - $postamount;
     
      $_POST["account_amount"] = "-" . $_POST["account_amount"];
    }
    else {
      $total= $amount + $postamount;
    }
  }

  if(!$transactionModel->Transaction($total, $account->getId(), $operation, $_POST)){
    echo "L'enregistrement a échoué";
  }
  // if(!$accountModel->modifyAccount($total , $account->getId())){
  //   echo "L'enregistrement a échoué";
  // }
  // elseif(!$operationModel->addOperation($operation, $_POST, $account->getId())){
  //   echo "L'enregistrement a échoué";
  // }
  else{
    header("Location: index.php");
    exit();
  }
}





require "view/depot_retraitView.php";

?>


