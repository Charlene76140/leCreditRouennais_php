<?php
  require "model/userModel.php";
  require "model/connexion.php";
  
  if(isset($_POST["email"]) AND isset($_POST["user_password"])) {
    $customer = getCustomerByEmail($db, $_POST["email"]);
    if($customer){
      if(password_verify($_POST["user_password"], $customer["user_password"])){
        session_start();
        $_SESSION["user"] = $customer;
        var_dump($_SESSION["user"]);
        header("Location:index.php");
        exit;
      }
    }
    $error_message = "Mot de passe ou e-mail incorrect";
  }
?>


<!doctype html>
<html class="no-js" lang="fr">

<head>
  <meta charset="utf-8">
  <title>Le crédit Rouennais</title>
  <meta name="description" content="Le crédit Rouennais est une banque implantée à Rouen depuis 1960">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <meta property="og:title" content="">
  <meta property="og:type" content="">
  <meta property="og:url" content="">
  <meta property="og:image" content="">

  <link rel="manifest" href="site.webmanifest">
  <link rel="apple-touch-icon" href="icon.png">
  <!-- Place favicon.ico in the root directory -->
  <link rel="shortcut icon" href="favicon.ico"/>

  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css2?family=Raleway&display=swap" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
  <link rel="stylesheet" href="css/normalize.css">
  <link rel="stylesheet" href="css/main.css">

  <meta name="theme-color" content="#fafafa">
</head>

<body>
  <main class="container my-5">
    <div class="row">
      <section class="container my-5 col-12 col-lg-6 bgColor">
        <div class="text-center">
          <h2>Connectez-vous</h2>
          <form method="post" action="" class="w-75 mx-auto my-5">
            <?php if(isset($error_message)): ?>
              <div class="alert alert-danger">
                <?php echo $error_message; ?>
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
    
<?php include "layout/footer/footer.php"?> 