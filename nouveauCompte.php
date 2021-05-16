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
  <!-- The header and the footer are loaded from the header.php and footer.php files -->
  <?php include ("layout/header/header.php"); ?>
  
  <main>
    <div class="row">
      <section class="container my-5 col-12 col-lg-6 sizeSection">
        <div class="text-center">
          <h2>Ouvrir un compte</h2>
          <!-- form used to create the customer's new account -->
          <form method="post" action="nouveauCompte.php">
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
        if(isset ($_POST['firstname']) AND isset($_POST['lastname']) AND isset($_POST['typecompte']) AND isset($_POST['montant'])){
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