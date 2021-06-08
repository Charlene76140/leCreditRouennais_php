<?php
include "layout/header/header.php";
?>

<main>
    <section class="container my-5">
      <h2>Vos comptes bancaires :</h2>
      <div class="row">
        <?php foreach($accounts as $account) : ?>
          <article class='col-12 col-md-4 col-lg-3 m-lg-auto my-md-4 my-lg-5'>
            <div class='card text-center mt-4'>
              <div class='card-header py-md-3 fs-5'><?php echo htmlspecialchars($account->getAccount_Type()); ?></div>
              <div class='card-body'>
                <h6 class='card-subtitle mb-2 text-muted'><?php echo htmlspecialchars($account->getAccount_number()); ?></h6>
                <p class='card-text'>Solde : <strong><?php echo htmlspecialchars($account->getAccount_amount()); ?> €</strong></p>
                <hr>
                <a class='btn colorButton' href='voirCompte.php?id=<?php echo htmlspecialchars($account->getId());?>'>Accedez au compte</a>
              </div>
            </div>
          </article>
        <?php endforeach; ?>
      </div>
    </section>
  </main>

  <?php include "layout/footer/footer.php"; ?> 