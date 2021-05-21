<?php 
session_start();
include ("layout/header/header.php"); 
?>

  <main>
    <div class="row">
      <section class="container my-5 col-12 col-lg-6 sizeSection">
        <div class="text-center">
          <h2>Ouvrir un compte</h2>
          <!-- form used to create the customer's new account -->
          <form method="post" action="nouveauCompte.php" class="my-4">
            <p>
              <label for="lastname" class="form-label">Nom : </label><br />
              <input type="text" name="lastname" id="lastname" class="form-control" placeholder ="ex : Dupont..." required/>
            </p>
            <p>
              <label for="firstname" class="form-label"> Prénom : </label><br />
              <input type="text" name="firstname" id="firstname" class="form-control" placeholder ="ex : Jean..." required/>
            </p>
            <p>
              <label for="typecompte" class="form-label">Type de compte : </label><br />
              <select name="typecompte" id="typecompte" class="form-select">
                  <option value="Compte courant">Compte courant</option>
                  <option value="Epargne">Epargne</option>
                  <option value="PEL">PEL</option>
              </select>
            </p>
            <p>
              <label for="montant" class="form-label">Montant à virer sur le compte :</label><br />
              <input type="text" name="montant" id="montant" class="form-control" placeholder ="min. 50 €" required/>
            </p>
            <input type="submit" value="Envoyer" class="btn colorButton"/>
          </form>
        </div>
      </section>

      <section class="container my-5 col-12 col-lg-6 sizeSection">
      <!-- the new account is displayed next to the form -->
        <?php
        // I check if the form is complete so as not to display an error message to the customer
        if(isset($_POST['firstname']) AND isset($_POST['lastname']) AND isset($_POST['typecompte']) AND isset($_POST['montant'])){
            echo "<div>
                    <h2>Votre nouveau compte a bien été créé!</h2>
                    <div>
                      <p>Résumé des informations : </p>
                      <ul>
                        <li>Propriétaire du compte : <strong>". $_POST['firstname'] . " " . $_POST['lastname'] . "</strong></li>
                        <li>Type de compte : <strong>". $_POST['typecompte'] . "</strong></li>
                        <li>Montant a virer sur le compte : <strong>". $_POST['montant'] . " € </strong></li>
                    </div>";        
        }
        ?>
      </section>
    </div>
  </main>

  <?php include ("layout/footer/footer.php"); ?>
