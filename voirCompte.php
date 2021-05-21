<?php 
session_start();
include ("layout/header/header.php"); 
require ("model/accounts.php");

$accounts = get_accounts();

if(isset($_GET["index"]) AND isset($accounts[$_GET["index"]])){
  $account = $accounts[$_GET["index"]];
}
else{
  $error_message = "Nous ne parvenons pas a charger votre compte, veuillez essayer ulterieurement";
}
?>

<main>
  <section class="container my-5">
  <?php if (isset($account)) :?>
      <h2>Type de compte : </h2>
      <div class="row">
        <table class="col-10 col-md-9 col-lg-7 my-4">
          <thead>
            <tr>
              <th><?php echo $account['name']; ?></th>
            </tr>
          </thead>
          <tbody>
              <tr>
                <td>Propriétaire : <?php echo $account['owner']; ?></td>
              </tr> 
              <tr>
                <td>N° de compte : <?php echo $account['number']; ?></td>
              </tr> 
              <tr>
                <td>Solde : <?php echo $account['amount'] .' €' ?></td>
              </tr> 
              <tr>
                <td>Dernière opération : <?php echo $account['last_operation'] ?></td>
              </tr> 
          </tbody>
        </table>
      </div>
    <?php else : ?>
      <div class="alert alert-secondary text-center" role="alert">
        <?php echo $error_message; ?> <br />
        <a href="index.php" class="btn btn-dark text-white my-3">Accueil</a>
      </div>
    <?php endif ?>   
  </section>
</main>

<?php include ("layout/footer/footer.php"); ?>

