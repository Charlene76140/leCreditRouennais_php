<?php include ("acounts.php"); ?>

<?php
foreach(get_accounts() as $account){
  echo "<article class='container-fluid col-lg-3 my-lg-5'>
          <div class='card text-center mt-4'>
            <div class='card-header py-lg-3 fs-5'>" . $account["name"] . "</div>
            <div class='card-body'>
              <h6 class='card-subtitle mb-2 text-muted'>" . $account["number"] . "</h6>
              <p class='card-text'>Solde : <strong>". $account["amount"] . " €</strong></p>
              <hr>
              <p class='card-text onlyComputer'>Dernière opération : <br/> <strong>". $account["last_operation"] . "</strong></p>
              <hr>
              <a class='btn colorButton' href='#' role='button'>Accedez au compte</a>
          </div>
          </div>
        </article>";
}
?>
