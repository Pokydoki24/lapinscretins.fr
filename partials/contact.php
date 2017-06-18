<?php

if( isset($_POST['contacter']) ){

	$query = $dbh->prepare('INSERT INTO contact(nom, email, sujet, message) VALUES (:nom, :email, :sujet, :message)');
	$query->bindValue('nom', $_POST['nom'], PDO::PARAM_STR);
	$query->bindValue('email', $_POST['email'], PDO::PARAM_STR);
	$query->bindValue('sujet', $_POST['sujet'], PDO::PARAM_STR);
	$query->bindValue('message', $_POST['message'], PDO::PARAM_STR);

	$query->execute();
	header('Location: index.php');
}

?>
<h2>CONTACTEZ NOUS</h2>

<section id="contact">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<form action="index.php?page=contact" method="POST">

					<div class="form-group">
						<label for="nom">Nom</label>
						<input type="text" class="form-control" name="nom" id="nom" placeholder="Votre nom">
					</div>

					<div class="form-group">
						<label for="email">Votre email</label>
						<input type="email" class="form-control" name="email" id="email" placeholder="Votre@email">
					</div>

					<div class="form-group">
						<label for="sujet">Sujet</label>
						<input type="sujet" class="form-control" name="sujet" id="sujet" placeholder="Votre sujet">
					</div>

					<div class="form-group">
						<label for="message">Votre message</label>
						<textarea class="form-control" rows="3" name="message" id="message" placeholder="Votre message"></textarea>
					</div>

					<button type="submit" class="btn btn-default" name="contacter">Envoyer</button>
				</form>
			</div>
		</div>
	</div>
</section>