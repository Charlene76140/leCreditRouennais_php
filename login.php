<?php
  $user = [
      "email" => "saintjulien@gmail.com",
      "mdp" => "coucou"
  ];
  
  if(isset($_POST["email"]) AND isset($_POST["mdp"])) {
      if($_POST["email"] === $user["email"] AND $_POST["mdp"] === $user["mdp"]) {
        session_start();
        $_SESSION["user"] = $user;
        header("Location:index.php");
        exit;
      }
      else {
        $error_message = "Mot de passe ou e-mail incorrect";
      }
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
  <main class="container">
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
              <label for="exampleFormControlInput1" class="form-label">Adresse e-mail</label>
              <input type="email" name="email" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com">
            </p>
            <p>
            <label for="inputPassword" class="form-label">Mot de passe</label><br />
              <input type="password" name="mdp" class="form-control" id="inputPassword" placeholder="mot de passe">
            </p>
            <input type="submit" value="Envoyer" class="btn bg-light"/>
          </form>
        </div>
      </section>
    </div>
  </main>
    
  <script src="https://kit.fontawesome.com/6e3dce75fc.js" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js" integrity="sha384-SR1sx49pcuLnqZUnnPwx6FCym0wLsk5JZuNx2bPPENzswTNFaQU1RDvt3wT4gWFG" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.min.js" integrity="sha384-j0CNLUeiqtyaRmlzUHCPZ+Gy5fQu0dQ6eZ/xAww941Ai1SxSY+0EQqNXNE6DZiVc" crossorigin="anonymous"></script>
  <script src="js/vendor/modernizr-3.11.2.min.js"></script>
  <script src="js/plugins.js"></script>
  <script src="js/main.js"></script>


  <!-- Google Analytics: change UA-XXXXX-Y to be your site's ID. -->
  <script>
    window.ga = function () { ga.q.push(arguments) }; ga.q = []; ga.l = +new Date;
    ga('create', 'UA-XXXXX-Y', 'auto'); ga('set', 'anonymizeIp', true); ga('set', 'transport', 'beacon'); ga('send', 'pageview')
  </script>
  <script src="https://www.google-analytics.com/analytics.js" async></script>
</body>

</html>