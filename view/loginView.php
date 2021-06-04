<?php
  include "layout/header/header_login.php";
?>
  <main class="container my-5">
    <div class="row">
      <section class="container my-5 col-12 col-lg-6 bgColor">
        <div class="text-center">
          <h2>Connectez-vous</h2>
          <form method="post" action="" class="w-75 mx-auto my-5">
            <?php if(isset($error_message)): ?>
              <div class="alert alert-danger">
                <?php echo htmlspecialchars($error_message); ?>
              </div>
            <?php endif; ?>
            <p>
              <label for="email" class="form-label">Adresse e-mail</label>
              <input type="email" name="email" class="form-control" id="email" placeholder="name@example.com">
            </p>
            <p>
            <label for="user_password" class="form-label">Mot de passe</label><br />
              <input type="password" name="user_password" class="form-control" id="user_password" placeholder="mot de passe">
            </p>
            <input type="submit" value="Envoyer" class="btn bg-light"/>
          </form>
        </div>
      </section>
    </div>
  </main>
    
<?php include "layout/footer/footer_login.php"?> 