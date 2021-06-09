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
              <option value="<?php echo htmlspecialchars($account["id"]) ?>"><?php echo htmlspecialchars($account["account_type"]) ?></option>
              <?php endforeach; ?>
            </select>
          </p>
          <input type="submit" value="Confirmer" class="btn colorButton"/>
        </form>
      </div>
    </section>
  </div>
</main>

  <?php include "layout/footer/footer.php"; ?>