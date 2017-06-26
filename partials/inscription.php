<?php

$nom = isset($_POST['nom'])?$_POST['nom']:"";
$prenom = isset($_POST['prenom'])?$_POST['prenom']:"";
$email = isset($_POST['email'])?$_POST['email']:"";
$password = isset($_POST['password'])?$_POST['password']:"";
$confirmPassword = isset($_POST['confirmPassword'])?$_POST['confirmPassword']:"";

if(isset($_POST['inscrire'])){

	if(empty($nom)){
		$erreur = 1;
		$erreur_nom = "Champs obligatoire";
	}

	if(empty($prenom)){
		$erreur = 1;
		$erreur_prenom = "Champs obligatoire";	
	}

	if(empty($email)&& !filter_var($email, FILTER_VALIDATE_EMAIL)){
		$erreur = 1;
		$erreur_email = "Email non valide";
	}

	if(strlen($password) < 5){
		$erreur = 1;
		$erreur_password = "5 caracteres minimum";
	}

	if($password != $confirmPassword){
		$erreur = 1;
		$erreur_confirmPassword = "Veuillez saisir le meme mot de passe";
	}
	
	if(!isset($erreur)){
		$query = $dbh->prepare('INSERT INTO utilisateurs(nom, prenom, email, password) VALUES (:nom, :prenom, :email, :password)');
		$query->bindValue('nom', $nom, PDO::PARAM_STR);
		$query->bindValue('prenom', $prenom, PDO::PARAM_STR);
		$query->bindValue('email', $email, PDO::PARAM_STR);

		$password_crypte = password_hash($password, PASSWORD_DEFAULT);

		$query->bindValue('password', $password_crypte, PDO::PARAM_STR);
		$query->execute();

		header('Location: index.php');

	}
}

?>

<h2>INSCRIPTION</h2>

<section id="inscription">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<form id="formInscription" action="index.php?page=inscription" method="POST">

					<div class="form-group">
						<label for="nom">Nom</label>
						<input type="text" class="form-control" name="nom" id="nom" value="<?php echo $nom; ?>" placeholder="Votre nom">
						<?php
							if(isset($erreur_nom)){
						?>
							<span style="color:red"><?php echo $erreur_nom; ?></span>
						<?php		
								}
						?>
					</div>

					<div class="form-group">
						<label for="prenom">Prenom</label>
						<input type="text" class="form-control" name="prenom" id="prenom" value="<?php echo $prenom; ?>" placeholder="Votre prenom">
						<?php
							if(isset($erreur_prenom)){
						?>
							<span style="color:red"><?php echo $erreur_prenom; ?></span>
						<?php		
								}
						?>
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
						<label for="password">Mot de passe</label>
						<input type="password" class="form-control" name="password" id="password">
						<?php
							if(isset($erreur_password)){
						?>
							<span style="color:red"><?php echo $erreur_password; ?></span>
						<?php		
								}
						?>
					</div>

					<div class="form-group">
						<label for="password">Confirmation Mot de passe</label>
						<input type="password" class="form-control" name="confirmPassword" id="confirmPassword">
						<?php
							if(isset($erreur_confirmPassword)){
						?>
							<span style="color:red"><?php echo $erreur_confirmPassword; ?></span>
						<?php		
								}
						?>
					</div>

					<button type="submit" class="btn btn-default" name="inscrire">Inscription</button>
				</form>
			</div>
		</div>
	</div>
</section>