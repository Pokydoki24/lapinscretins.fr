<?php

if(isset($_SESSION['utilisateur'])){
	unset($_SESSION['utilisateur']);
	header('location: index.php');
}

$message = "";

if( isset($_POST['connecter']) ) {

	$query = $dbh->prepare("SELECT * FROM utilisateurs WHERE email = :email");
	$query->bindValue('email', $_POST['email'], PDO::PARAM_STR);
	$query->execute();
	$utilisateur = $query->fetch();

	if( !empty($utilisateur) ) {
		if( password_verify( $_POST['password'], $utilisateur['password'] ) ) {
			$_SESSION['utilisateur']['nom'] = $utilisateur['nom'];
			$_SESSION['utilisateur']['prenom'] = $utilisateur['prenom'];
			$_SESSION['utilisateur']['id'] = $utilisateur['id'];
			$_SESSION['utilisateur']['email'] = $utilisateur['email'];
			header('location: index.php');
		} else {
			// Si mot de passe est incorrect
			$message = "Tentative de connexion incorrecte...";
		}
	}
	// Si je n'ai pas la personne dans la base de données
	else {
		$message = "Tentative de connexion incorrecte...";
	}
}
?>

<h2>CONNEXION</h2>

<?= (!empty($message)) ? $message : "" ?>
<section>
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<form method="POST" action=index.php?page=connexion>
					<div class="form-group">
						<label for="email">Email</label>
						<input type="email" class="form-control" name="email" id="email" placeholder="Votre@mail">
					</div>
					<div class="form-group">
						<label for="password">Password</label>
						<input type="password" class="form-control" name="password" id="password">
					</div>
					<button type="submit" name="connecter" class="btn btn-default">Connexion</button>
				</form>
			</div>
		</div>
	</div>
</section>


