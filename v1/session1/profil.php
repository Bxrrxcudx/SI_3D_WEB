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
<?php 
include "front/footer.php";
?>