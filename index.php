<?php

session_start();

include 'lib/connexion.php';

$fichier = "accueil.html";

if( isset($_REQUEST['page']) ) {
	$page = $_REQUEST['page'];

	switch($page) {

  case 'bd':
  $fichier = "bd.html";
  break;

  case 'dvd':
  $fichier = "dvd.html";
  break;

  case 'jeux':
  $fichier = "jeux.html";
  break;

  case 'shop':
  $fichier = "shop.html";
  break;

  // case 'connexion':
  // $fichier = "connexion.php";
  // break;

  case 'inscription':
  $fichier = "inscription.php";
  break;

  case 'contact':
  $fichier = "contact.php";
  break;

  default:
  $fichier = "accueil.html";
  break;

 }
// } else {
//   $page = "liste";
// }
}

?>

<!DOCTYPE html>
<html lang="fr">
  <head>
      <title>Lapin Cretin.fr</title>

      <meta name="keywords" content="" />
      <meta name="author" content="lapin cretin" />
      <meta name="country" content="France" />
      <meta name="geo.country" content="FR" />
      <meta name="description" content="Site autour de l'univers des lapins cretins." />
      <meta charset="UTF-8">

      <link rel="shortcut icon" href="img/1.png">
      <!-- Latest compiled and minified CSS -->
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
      <!-- <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous"> -->
      <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" >
      <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto">
      <link rel="stylesheet" href="css/style.css">

  </head>

  <body>

    <nav class="navbar navbar-default">
      <div class="container-fluid">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
          <span class="sr-only">Menu</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a href="index.php">

          <img src="img/cretin.jpg" alt="logo lapin cretin" style="width:14rem;height:8rem;"></a>
        </div>

        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
          <ul class="nav navbar-nav">
            <li class="<?= ( $page === 'accueil') ? "active" : "" ?>" ><a href="index.php">Accueil</a></li>
            <li class="<?= ( $page === 'bd') ? "active" : "" ?>"><a href="index.php?page=bd">BD</a></li>
            <li class="<?= ( $page === 'dvd') ? "active" : "" ?>"><a href="index.php?page=dvd">DVD</a></li>
            <li class="<?= ( $page === 'jeux') ? "active" : "" ?>"><a href="index.php?page=jeux">Jeux</a></li>
            <li class="<?= ( $page === 'shop') ? "active" : "" ?>"><a href="index.php?page=shop">Shop</a></li>
            <li class="<?= ( $page === 'inscription') ? "active" : "" ?>" id="btnInscription"><a href="index.php?page=inscription">Inscription</a></li>
            <li class="<?= ( $page === 'connexion') ? "active" : "" ?>" id="btnConnexion"><a href="index.php?page=connexion">Connexion</a></li>
          </ul>
          <form class="navbar-form navbar-left">
            <div class="form-group">
              <input type="text" class="form-control" placeholder="Recherche....">
            </div>
            <button type="submit" class="btn btn-default">Rechercher</button>
          </form>
        </div>
      </div>
    </nav>

    <div class="row">
      <div class="col-md-12">
        <?php include "partials/$fichier" ?>
      </div>
    </div>
    
    <footer>
      <div class="container">
        <div class="row text-center">
          <div class="col-md-6 col-sm-6 col-xs-12">
            <ul class="menu list-inline">

              <li>
                <a href="#">A propos</a>
              </li>

              <li>
                <a href="#">Qui sommes nous ?</a>
              </li>

              <li class="<?= ( $page === 'contact') ? "active" : "" ?>">
                <a href="index.php?page=contact">Contact</a>
              </li>

              <li>
                <a href="#">Mentions legales</a>
              </li>
            </ul>
          </div>

          <div class="col-md-6 col-sm-6 col-xs-12">
            <ul class="list-inline">

              <li>
                <a href="#"><i class="fa fa-facebook-square"></i></a>
              </li>


              <li>
                <a href="#"><i class="fa fa-twitter-square"></i></a>
              </li>

              <li>
                <a href="#"><i class="fa fa-youtube-play"></i></a>
              </li>

            </ul>
          </div>


        </div> 
      </div>
      <div class="row text-center">
        <p>Copyright © 2017 All rights reserved</p>
      </div>
    </footer>
    
    <script
    src="https://code.jquery.com/jquery-3.2.1.min.js"
    integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4="
    crossorigin="anonymous"></script>
    <!-- Latest compiled and minified JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
    <script src=js/script.js></script>
  </body>
</html>