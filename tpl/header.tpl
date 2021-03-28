<!DOCTYPE html>
<html lang="fr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>TP noté - PHP -Lazare</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Fira+Sans:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">

    <!-- perso css -->
    <link rel="stylesheet" href="web/css/style.css">
    <meta name="theme-color" content="#7952b3">


    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }
    </style>


  </head>
  <body>




  <header class="p-3 bg-dark text-white">
  <div class="container">
    <div class="d-flex flex-wrap align-items-center justify-content-center justify-content-lg-start">
      <a href="/" class="d-flex align-items-center mb-2 mb-lg-0 text-white text-decoration-none">
        <svg class="bi me-2" width="40" height="32"><use xlink:href="#bootstrap"/></svg>
      </a>

      <ul class="nav col-12 col-lg-auto me-lg-auto mb-2 justify-content-center mb-md-0">
        <li><a href="index.php" class="nav-link px-2 text-secondary">Accueil</a></li>
        <li><a href="index.php?page=usager" class="nav-link px-2 text-white">Utilisateurs</a></li>
        <li><a href="index.php?page=tarif" class="nav-link px-2 text-white">Tarifs</a></li>
        <div class="dropdown">
          <button class="btn btn-dark dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            Ajouter
          </button>
          <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
            <a class="dropdown-item" href="index.php?page=createUsager">Ajouter un utilisateur</a>
            <a class="dropdown-item" href="index.php?page=depot">Ajouter un dépot</a>
          </div>
        </div>
      </ul>


      <div class="text-end">
        {if $isConnected}
        <a href="controllers/logout.php">
          <button type="button" class="btn btn-danger me-2">Se déconnecter</button>
        </a>
        {else}
        <a href="index.php?page=login">
          <button type="button" class="btn btn-outline-light me-2">Se connecter</button>
        </a>

        {/if}
      </div>
    </div>
  </div>
</header>

  <main>
    <div class="container mt-4">
