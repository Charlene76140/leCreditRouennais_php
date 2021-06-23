<?php 

  require "model/connexionModel.php";
  require "model/entity/Account.php";
  require "model/accountModel.php";
  require "model/entity/Operation.php";
  require "model/operationModel.php";
  require "model/entity/Customer.php";
  require "model/transactionModel.php";

  session_start();
  if(!isset($_SESSION["user"])) {
    header("Location:login.php");
    exit;
  }

  //objects initiations
  $transactionModel = new TransactionModel();
  $accountModel = new AccountModel();
  $operationModel = new OperationModel();

  $user = $_SESSION["user"];
  $accounts= $accountModel->getAccount($user->getId());

  if(!empty($_POST)){
    $account = $accountModel->getSingleAccount($_POST["id"], $user->getId());
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

    // in parameters the total remaining for the account after the operation
    // the getId method to retrieve the account concerned by the operation
    //the operation variable containing the operation object
    // the $ _post containing the type of operation chosen by the user
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


