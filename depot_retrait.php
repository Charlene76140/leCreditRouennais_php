<?php 
session_start();
include "layout/header/header.php"; 
require "model/accountModel.php";
require "model/connexion.php";

$accounts = getAccount($db, $_SESSION["user"]["id"]);

if(!empty($_POST)){
  if(!modifyAccount($db, $_POST)){
    echo "L'enregistrement a échoué";
  }
}
?>

  <main>
    <div class="row">
      <section class="container my-5 col-12 col-lg-12 sizeSection">
        <div class="text-center">
          <h2>Faire un dépot ou un retrait</h2>
          <form method="post" action="" class="my-4">
              <p>
                <label for="type_of_operation" class="form-label">Type d'opération  : </label><br />
                <select name="type_of_operation" id="type_of_operation" class="form-select">
                    <option value="Debit">Débit</option>
                    <option value="Credit">Crédit</option>
                </select>
              </p>
              <p>
                <label for="id" class="form-label">Choix du compte : </label><br />
                <select name="id" id="id" class="form-select">
                  <?php foreach ($accounts as $account) : ?>
                  <option value="<?php echo $account["id"] ?>"><?php echo $account["account_type"] ?></option>
                  <?php endforeach; ?>
                </select>
              </p>
              <p>
                <label for="account_amount" class="form-label">Montant désirer :</label><br />
                <input type="text" name="account_amount" id="account_amount" class="form-control" placeholder ="exemple : 50€" required/>
              </p>
              <input type="submit" value="Envoyer" class="btn colorButton"/>
            </form>
        </div>
      </section>
    </div>
  </main>

  <?php include ("layout/footer/footer.php"); ?>
