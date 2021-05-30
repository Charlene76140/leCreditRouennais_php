<?php 
session_start();
include "layout/header/header.php"; 
require "model/accountModel.php";
require "model/connexion.php";

if(isset($_GET["id"]) AND !empty($_GET["id"])){
  $accounts = getAccountDetail($db, $_GET["id"]);
}
else{
  header("Location:index.php");
}
?>

<main>
  <section class="container my-5">
  
      <h2>Type de compte : </h2>
      <div class="row">
        <table class="col-10 col-md-9 col-lg-7 my-4">
          <thead>
            <tr>
              <th><?php echo $accounts[0]['account_type']; ?></th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td>N° de compte : <?php echo $accounts[0]['account_number']; ?></td>
            </tr> 
            <tr>
              <td>Solde : <?php echo $accounts[0]['account_amount'] .' €' ?></td>
            </tr> 
            <tr>
              <td>Date création : <?php echo $accounts[0]['creation_date']?></td>
            </tr>
            <tr>
              <td>Frais de compte : <?php echo $accounts[0]['account_fees'] . ' €/an'?></td>
            </tr>
            <tr>
              <td>
                <p>Dernière(s) opération(s) : </p>
                <?php foreach ($accounts as $account)  : ?>
                  <p><?php echo $account['amount'] . ' €'; ?> : <?php echo $account['label']; ?></p>
                <?php endforeach; ?>  
              </td>
            </tr> 
          </tbody>
        </table>
      </div>
    
  </section>
</main>

<?php include ("layout/footer/footer.php"); ?>

