<?php 
require_once "back/connect.php";
session_start();
if (isset($_SESSION['id'])) {
	header('Location: profil.php');
} else{
	require "back/add.php";
?>
<?php 
include "front/header.php";
?>
		<form action="<?= $_SERVER['PHP_SELF'] ?>" method="post">
		<?php 
		if (isset($message)) {
			echo $message;
		}
		?>
			<div>
				<label for="nom">Nom :</label>
				<input type="text" name="nom" id="nom" value="<?= $_POST['nom'];?>"  required>
			</div>
			<div>
				<label for="prenom">Prénom :</label>
				<input type="text" name="prenom" id="prenom" value="<?= $_POST['prenom'];?>" required>
			</div>
			<div>
				<label for="pseudo">Ton pseudo :</label>
				<input type="text" id="pseudo" name="pseudo" value="" required>
			</div>
			<div>
				<label for="age">Ton âge :</label>
				<input type="number" id="age" name="age" min="0" max="100" value="<?= $_POST['age'];?>" required>
			</div>
			<div>
				<label for="profession">Ton métier :</label>
				<input type="text" name="profession" id="profession" value="<?= $_POST['profession'];?>">
			</div>
			<div>
				<label for="mdp">Mot de passe :</label>
				<input type="password" name="mdp" id="mdp" required>
			</div>
			<input type="submit" value="Inscris-toi" name="Envoyer">
			<a href="login.php">Connexion</a>
		</form>
<?php 
include "front/footer.php"
?>
<?php } ?>