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
	<title>Document</title>
</head>
<body>
	<?php 
		if (isset($_SESSION['id'])) {
			echo '<div class="connection">
			<a href="logout.php">Déconnexion</a>
			<a href="profil.php">Mon Profil</a>
			</div>';
		} 
		else {
			echo '<div class="connection">
			<a href="login.php">Connexion</a>
			<a href="signup.php">S\'inscrire</a>
			</div>';	
		}
	?>
</body>
</html>