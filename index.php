<?php
  session_start();
  if(!isset($_SESSION["user"])) {
      header("Location:login.php");
      exit;
  }
  include ("layout/header/header.php");
  require ("model/accounts.php");
  $accounts = get_accounts();
?>

  <main>
    <section class="container my-5">
      <h2>Vos comptes bancaires</h2>
      <div class="row">
        <?php foreach($accounts as $index => $account) : ?>
          <article class='container-fluid col-lg-3 my-lg-5'>
            <div class='card text-center mt-4'>
              <div class='card-header py-lg-3 fs-5'><?php  echo $account['name']; ?></div>
              <div class='card-body'>
                <h6 class='card-subtitle mb-2 text-muted'><?php echo $account['number']; ?></h6>
                <p class='card-text'>Solde : <strong><?php echo $account['amount']; ?> €</strong></p>
                <hr>
                <p class='card-text onlyComputer'>Dernière opération : <br/> <strong><?php echo $account['last_operation']; ?></strong></p>
                <hr>
                <a class='btn colorButton' href='voirCompte.php?index=<?php echo $index;?>'>Accedez au compte</a>
              </div>
            </div>
          </article>
        <?php endforeach ?>;
      </div>
    </section>
  </main>

  <?php include ("layout/footer/footer.php"); ?> 