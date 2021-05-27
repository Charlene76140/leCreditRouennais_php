<?php 
session_start();
include ("layout/header/header.php"); 
require ("model/accountModel.php");

if(isset($_GET["id"]) AND !empty($_GET["id"])){
  $details = getDetailsAccount($db, $_GET["id"]);
  $operations = getOperation($db, $_GET["id"]);
}
else{
  header("Location:index.php");
}
?>

<main>
  <section class="container my-5">
  <?php if (isset($details)) :?>
      <h2>Type de compte : </h2>
      <div class="row">
        <table class="col-10 col-md-9 col-lg-7 my-4">
          <thead>
            <tr>
              <th><?php echo $details['account_type']; ?></th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td>N° de compte : <?php echo $details['account_number']; ?></td>
            </tr> 
            <tr>
              <td>Solde : <?php echo $details['amount'] .' €' ?></td>
            </tr> 
            <tr>
              <td>Date création : <?php echo $details['creation_date']?></td>
            </tr>
            <tr>
              <td>Frais de compte : <?php echo $details['account_fees'] . ' €/an'?></td>
            </tr>
            <tr>
              <td>
                <p>Dernière(s) opération(s) : </p>
                <?php foreach ($operations as $operation)  : ?>
                  <p><?php echo $operation['amount'] . ' €'; ?> : <?php echo $operation['label']; ?></p>
                <?php endforeach; ?>  
              </td>
            </tr> 
          </tbody>
        </table>
      </div>
    <!-- <?php else : ?>
      <div class="alert alert-secondary text-center" role="alert">
        <?php echo $error_message; ?> <br />
        <a href="index.php" class="btn btn-dark text-white my-3">Accueil</a>
      </div>
    <?php endif ?>    -->
  </section>
</main>

<?php include ("layout/footer/footer.php"); ?>

