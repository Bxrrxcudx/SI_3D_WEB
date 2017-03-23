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
<?php 
	if (isset($_SESSION['id'])) {
	} 
	else {
		// echo '<div class="connexion">
		// <a href="login.php">Connexion</a></div>';	
	}
?>
<main>
	
</main>
<?php 
include "front/footer.php";
?>
