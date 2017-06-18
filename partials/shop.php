<?php
	if(!isset($_SESSION['utilisateur'])){

		header('location: index.php?page=inscription');
	}
	echo $_SESSION['utilisateur']['id'];
	// else{
	// 	header('location: inscription.php');
	// }

?>

<h1>PAGE EN CONSTRUCTION</h1>

<img src="img/construction.jpg" alt="page en construction">