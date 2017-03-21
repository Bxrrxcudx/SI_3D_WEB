<?php 
require_once "connect.php";
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
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Mon Profil</title>
</head>
<body>
	<?php if (isset($_SESSION['id'])) :?>
	<p>
		Salut,
		<?= $row['prenom']." ".$row['nom']?> et tu as <?= $row['age']?> ans !
	</p>
	<a href="logout.php">Déconnexion</a>
	<?php else :?>
		<p>Vous n'êtes plus connecté</p>
		<a href="index.php">Inscris-toi</a>
	<?php endif; ?>
</body>
</html>