<?php
$nom = isset($_POST['nom'])?$_POST['nom']:"";
$email = isset($_POST['email'])?$_POST['email']:"";
$sujet = isset($_POST['sujet'])?$_POST['sujet']:"";
$message = isset($_POST['message'])?$_POST['message']:"";

if( isset($_POST['contacter']) ){
	if(empty($email)){
		$erreur = 1;
		$erreur_email = "Champs obligatoire";
	}

	if(empty($sujet)){
		$erreur = 1;
		$erreur_sujet = "Champs obligatoire";	
	}

	if(empty($message)){
		$erreur = 1;
		$erreur_message = "Veuillez saisir un message";	
	}

	if(!isset($erreur)){
	$query = $dbh->prepare('INSERT INTO contact(nom, email, sujet, message) VALUES (:nom, :email, :sujet, :message)');
	$query->bindValue('nom', $nom, PDO::PARAM_STR);
	$query->bindValue('email', $email, PDO::PARAM_STR);
	$query->bindValue('sujet', $sujet, PDO::PARAM_STR);
	$query->bindValue('message', $message, PDO::PARAM_STR);

	$query->execute();
	header('Location: index.php');
	}
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
						<input type="text" class="form-control" name="nom" id="nom" value="<?php echo $nom; ?>" placeholder="Votre nom">
					</div>

					<div class="form-group">
						<label for="email">Votre email</label>
						<input type="email" class="form-control" name="email" id="email" value="<?php echo $email; ?>" placeholder="Votre@email">
						<?php
							if(isset($erreur_email)){
						?>
							<span style="color:red"><?php echo $erreur_email; ?></span>
						<?php		
								}
						?>
					</div>

					<div class="form-group">
						<label for="sujet">Sujet</label>
						<input type="sujet" class="form-control" name="sujet" id="sujet" value="<?php echo $sujet; ?>" placeholder="Votre sujet">
						<?php
							if(isset($erreur_sujet)){
						?>
							<span style="color:red"><?php echo $erreur_sujet; ?></span>
						<?php		
								}
						?>
					</div>

					<div class="form-group">
						<label for="message">Votre message</label>
						<textarea class="form-control" rows="3" name="message" id="message" placeholder="Votre message"><?php echo $message; ?></textarea>
						<?php
							if(isset($erreur_message)){
						?>
							<span style="color:red"><?php echo $erreur_message; ?></span>
						<?php		
								}
						?>
					</div>

					<button type="submit" class="btn btn-default" name="contacter">Envoyer</button>
				</form>
			</div>
		</div>
	</div>
</section>