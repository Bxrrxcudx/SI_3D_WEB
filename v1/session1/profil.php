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
<main>
		<div class="profil">
			<h2>Mon Profil</h2>
			<div class="infos">
				<p><?= $row['prenom']." ".$row['nom']?></p>
				<p><?php  ?></p>
				<p><?= $row['age']?> ans</p>
			</div>
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
<?php else :?>
	<p>Vous n'êtes plus connecté</p>
	<a href="signup.php">Inscris-toi</a>
<?php endif; ?>
<?php 
include "front/footer.php";
?>