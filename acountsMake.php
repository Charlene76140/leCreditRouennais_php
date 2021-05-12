<?php
foreach(get_accounts() as $account){
  echo "<article class='container-fluid col-lg-3 me-lg-2 my-lg-5'>
          <div class='card text-center mt-4'>
            <div class='card-header py-lg-3 fs-5'>Compte courant</div>
            <div class='card-body'>
              <h6 class='card-subtitle mb-2 text-muted'>n°123456789</h6>
              <p class='card-text'>Solde : <strong>1 482,50€</strong></p>
              <hr>
              <p class='card-text onlyComputer'>Dernière opération : <br/> <strong>64€25</strong> - Amazon</p>
              <hr>
              <a class='btn colorButton' href='#' role='button'>Accedez au compte</a>
          </div>
          </div>
        </article>";
}
?>
