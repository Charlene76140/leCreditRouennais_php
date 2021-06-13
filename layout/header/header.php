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
    <header>
        <nav class="navbar navbar-expand-lg navbar-light bgColor">
            <div class="container-fluid">
                <a class="navbar-brand" href="index.php">
                <img class="onlyMobile" src="logo96x96.png" alt="logo de la banque">
                <img class ="onlyComputer" src="logo150x150.png" alt="logo de la banque Computer"></a>
                <button class="navbar-toggler btn-sm" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon btn-sm"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav">
                    <li class="nav-item">
                    <a class="nav-link hoverlink" href="index.php">Accueil</a>
                    </li>
                    <li class="nav-item">
                    <a class="nav-link" href="statistiques.php">Statistiques</a>
                    </li>
                    <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Opérations
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <li><a class="dropdown-item" href="nouveauCompte.php">Ouvrir un compte</a></li>
                        <li><a class="dropdown-item" href="depot_retrait.php">Dépot/retrait</a></li>
                        <li><a class="dropdown-item" href="supprimerComptes.php">Supprimer un compte</a></li>
                    </ul>
                    </li>
                    <li class="nav-item">
                    <a class="nav-link" href="actualite.php">Actualités</a>
                    </li>
                    <li class="nav-item">
                        <?php if(isset($_SESSION["user"])): ?>
                        <a class="nav-link" href="logout.php">Déconnexion</a>
                        <?php endif; ?>
                    </li>    
                </ul>
                </div>
            </div>
        </nav>
    </header>