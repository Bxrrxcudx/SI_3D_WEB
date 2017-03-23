<?php 
require_once "back/connect.php";
session_start();
$sql = "
	SELECT * 
	FROM profils 
	WHERE `id`=:id";
$stmt = $pdo->prepare($sql);
$stmt->bindValue(":id", $_SESSION['id']);
$stmt->execute();
$row = $stmt->fetch(PDO::FETCH_ASSOC);
?>
<?php 
include "front/header.php"; 
?>	
<?php if (isset($_SESSION['id'])) :?>
<div class="connexion">
	<a href="logout.php">Déconnexion</a>
</div>
<p>
	Salut,
	<?= $row['prenom']." ".$row['nom']?> et tu as <?= $row['age']?> ans !
</p>
<?php else :?>
	<p>Vous n'êtes plus connecté</p>
	<a href="signup.php">Inscris-toi</a>
<?php endif; ?>
	<main>
		<div class="profil">
			<h2>Mon Profil</h2>
			<figure>
				<img src="https://placehold.it/450x300" alt="">
				<figcaption>Fait le 12/12/12</figcaption>
			</figure>
			<div class="design">
				<div class="history">
					<h3>Mes derniers design</h3>
					<figure>
						<img src="https://placehold.it/225x150" alt="">
						<figcaption>Fait le 12/12/12</figcaption>
					</figure>
					<figure>
						<img src="https://placehold.it/225x150" alt="">
						<figcaption>Fait le 12/12/12</figcaption>
					</figure>
					<figure>
						<img src="https://placehold.it/225x150" alt="">
						<figcaption>Fait le 12/12/12</figcaption>
					</figure>
					<figure>
						<img src="https://placehold.it/225x150" alt="">
						<figcaption>Fait le 12/12/12</figcaption>
					</figure>
					<figure>
						<img src="https://placehold.it/225x150" alt="">
						<figcaption>Fait le 12/12/12</figcaption>
					</figure>
				</div>
			</div>
		</div>
	</main>
<?php 
include "front/footer.php";
?>