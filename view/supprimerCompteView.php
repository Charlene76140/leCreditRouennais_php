<?php
include "layout/header/header.php";
?>

<main>
  <div class="row">
    <section class="container my-5 col-12 col-lg-12 sizeSection">
      <div class="text-center">
        <h2>Supprimer un compte</h2>
        <form method="post" action="" class="my-4">
          <p>
            <label for="id" class="form-label">Choix du compte : </label><br />
            <select name="id" id="id" class="form-select">
              <?php foreach ($accounts as $account) : ?>
              <option value="<?php echo $account->getId() ?>"><?php echo $account->getAccount_type()?> <?php echo $account->getAccount_number()?></option>
              <?php endforeach; ?>
            </select>
          </p>
          <?php if(!empty($_POST["form2"])) :?>
            <p class="bgColor mt-5 py-4"> Etes vous certain de vouloir supprimer le compte?</p>
            <input type="submit" name = "form1" value="Oui" class="btn colorButton"/>
            <a href="supprimerComptes.php" class="btn colorButton">Non</a>
          <?php endif; ?>
        </form>
        
        <form method="post" action="">
          <?php if(empty($_POST)) :?>
            <input type="submit" name = "form2" value="Confirmer" class="btn colorButton"/>
          <?php endif; ?>
        </form>
      </div>
    </section>
  </div>
</main>

  <?php include "layout/footer/footer.php"; ?>