<?php
  session_start();
  if(!isset($_SESSION["user"])) {
      header("Location:login.php");
      exit;
  }
  include ("layout/header/header.php");
  require ("model/accountModel.php");
  $accounts = getAccount($db);
?>

  <main>
    <section class="container my-5">
      <h2>Vos comptes bancaires :</h2>
      <div class="row">
        <?php foreach($accounts as $index => $account) : ?>
          <article class='col-12 col-md-4 col-lg-3 m-lg-auto my-md-4 my-lg-5'>
            <div class='card text-center mt-4'>
              <div class='card-header py-md-3 fs-5'><?php  echo htmlspecialchars($account['account_type']); ?></div>
              <div class='card-body'>
                <h6 class='card-subtitle mb-2 text-muted'><?php echo htmlspecialchars($account['account_number']); ?></h6>
                <p class='card-text'>Solde : <strong><?php echo htmlspecialchars($account['amount']); ?> €</strong></p>
                <hr>
                <!-- <p class='card-text onlyComputer'>Dernière opération : <br/> <strong><?php echo htmlspecialchars($account['last_operation']); ?></strong></p>
                <hr> -->
                <a class='btn colorButton' href='voirCompte.php?id=<?php echo htmlspecialchars($account['id']);?>'>Accedez au compte</a>
              </div>
            </div>
          </article>
        <?php endforeach; ?>
      </div>
    </section>
  </main>

  <?php include ("layout/footer/footer.php"); ?> 