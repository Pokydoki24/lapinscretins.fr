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
  $fichier = "jeux.php";
  break;

  case 'shop':
  $fichier = "shop.php";
  break;

  case 'connexion':
  $fichier = "connexion.php";
  break;

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
      <meta name="author" content="Aurelie C." />
      <meta name="country" content="France" />
      <meta name="geo.country" content="FR" />
      <meta name="description" content="Site autour de l'univers des lapins cretins." />
      <meta charset="UTF-8">

      <link rel="shortcut icon" href="img/1.png">
      <!-- Latest compiled and minified CSS -->
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
      <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" >
      <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto">
      <link rel="stylesheet" href="css/style.css">

  </head>

  <body>

    <?php include "partials/header.php" ?>

    <?php include "partials/$fichier" ?>
    
    <?php include "partials/footer.php" ?>
     
    <script
    src="https://code.jquery.com/jquery-3.2.1.min.js"
    integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4="
    crossorigin="anonymous"></script>
    <!-- Latest compiled and minified JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
    <script src=js/script.js></script>
  </body>
</html>