<?php

session_start();

include 'lib/connexion.php';

$fichier = "liste.php";

if( isset($_REQUEST['page']) ) {
	$page = $_REQUEST['page'];

	switch($page) {
	case 'creer':
  
   $fichier = "creer.php";
   break;
   case 'modifier':
   
   $fichier = "modifier.php";
   break;
   case 'detail':
   $fichier = "detail.php";
   break;
   case 'about':
   $fichier = "about.html";
   break;
   case 'contact':
   $fichier = "contact.html";
   break;
   case 'inscription':
   $fichier = "inscription.php";
   break;
   case 'recherche':
   $fichier = "recherche.php";
   break;
   case 'connexion':
   $fichier = "connexion.php";
   break;
   case 'liste':
   default:
   $fichier = "liste.php";
   break;

 }
} else {
  $page = "liste";
}

if( isset($_REQUEST['action']) ) {
  $action = $_REQUEST['action'];
  switch($action) {
    case 'supprimer':
    if(!isset($_SESSION['utilisateur'])) {
      header('location: index.php');
      die();
    }
    $id = (empty($_REQUEST['id'])) ? 0 : $_REQUEST['id'];
    if( $id !== 0 ) {
      $query = $dbh->prepare('DELETE FROM articles WHERE id = :id');
      $query->bindValue('id', $_REQUEST['id'], PDO::PARAM_INT);
      $query->execute();
    }
    break;
    case 'deconnexion':
    unset($_SESSION['utilisateur']);
    break;
    default:
    $fichier = "liste.php";
    break;
  }
}

?>