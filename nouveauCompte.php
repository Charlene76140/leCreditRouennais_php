<?php 
session_start();
include "layout/header/header.php"; 
require "model/accountModel.php";
require "model/connexion.php";

if(!empty($_POST)){
  if(!addNewAccount($db, $_POST)){
    echo "L'enregistrement a échoué";
  }
}
?>

  <main>
    <div class="row">
      <section class="container my-5 col-12 col-lg-12 sizeSection">
        <div class="text-center">
          <h2>Ouvrir un compte</h2>
          <!-- form used to create the customer's new account -->
          <form method="post" action="" class="my-4">
            <p>
              <label for="account_type" class="form-label">Type de compte : </label><br />
              <select name="account_type" id="account_type" class="form-select">
                  <option value="Compte courant">Compte courant</option>
                  <option value="Epargne">Epargne</option>
                  <option value="PEL">PEL</option>
              </select>
            </p>
            <p>
              <label for="account_amount" class="form-label">Montant à virer sur le compte :</label><br />
              <input type="text" name="account_amount" id="account_amount" class="form-control" placeholder ="min. 50 €" required/>
            </p>
            <input type="submit" value="Envoyer" class="btn colorButton"/>
          </form>
        </div>
      </section>
    </div>
  </main>

  <?php include ("layout/footer/footer.php"); ?>
