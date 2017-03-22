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
<html lang="fr">
<head>
    <meta charset="utf-8">
    <title>My Urban Ride</title>
    <link rel="stylesheet" href="css/connexion.css">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i" rel="stylesheet">
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
<?php 
include "front/footer.php";
?>
