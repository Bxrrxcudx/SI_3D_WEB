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
<style>
.profils {
}

.profils h2 {
	font-size: 2em;
}

.profils button {
	background: ;
	font-size: 1.2em;
	border: 1px solid black;
	border-radius: 4px;
	padding: 1em 2em;
	margin: 20px;
	transition: .2s ease-in-out; 	
}

.profils button:hover {
	background: #dadada;
	cursor: pointer;
}

.profils .design .history {
    display: inline-block;
    text-align: center;
}

.profils .design .history figure {
	float: left;
}

</style>
<main class="profils">
		<div class="profil">
			<h2>Mon Profil</h2>
			<div class="infos">
				<p><?= $row['prenom']." ".$row['nom']?></p>
				<p><?php  ?></p>
				<p><?= $row['age']?> ans</p>
			</div>
			<figure>
				<img src="img-content/Screenshot_2.png" alt="">
				<figcaption>Fait le 24/03/17</figcaption>
			</figure>
			<button>Passer la commande</button>
			<!-- <div class="design">
				<div class="history clearfix">
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
			</div> -->
		</div>
	</main>
<?php else :?>
	<p>Vous n'êtes plus connecté</p>
	<a href="signup.php">Inscris-toi</a>
<?php endif; ?>
<?php 
include "front/footer.php";
?>