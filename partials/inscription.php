<?php

// table utilisateurs
if( isset($_POST['inscrire']) ) {

	$query = $dbh->prepare('INSERT INTO utilisateurs(nom, prenom, mail, password) VALUES (:nom, :prenom, :mail, :password)');
	$query->bindValue('nom', $_POST['nom'], PDO::PARAM_STR);
	$query->bindValue('prenom', $_POST['prenom'], PDO::PARAM_STR);
	$query->bindValue('mail', $_POST['mail'], PDO::PARAM_STR);

	$password_crypte = password_hash($_POST['password'], PASSWORD_DEFAULT);
	//die($password_crypte);

	$query->bindValue('password', $password_crypte, PDO::PARAM_STR);

	$query->execute();
	header('Location: index.php');
}

?>
<h2 style="text-align: center;margin-bottom: 4rem;">INSCRIPTION</h2>

<section id="inscription">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<form action="index.php?page=inscription" method="POST">

					<div class="form-group">
						<label for="nom">Nom</label>
						<input type="text" class="form-control" id="nom" placeholder="Votre nom">
					</div>

					<div class="form-group">
						<label for="prenom">Prenom</label>
						<input type="text" class="form-control" id="prenom" placeholder="Votre prenom">
					</div>

					<div class="form-group">
						<label for="email">Email address</label>
						<input type="email" class="form-control" id="email" placeholder="Votre@email">
					</div>

					<div class="form-group">
						<label for="password">Mot de passe</label>
						<input type="password" class="form-control" id="password">
					</div>

					<div class="form-group">
						<label for="password">Confirmation Mot de passe</label>
						<input type="password" class="form-control" id="password">
					</div>

					<button type="submit" class="btn btn-default" name="inscrire">Inscription</button>
				</form>
			</div>
		</div>
	</div>
</section>