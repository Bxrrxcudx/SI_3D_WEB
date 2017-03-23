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
		echo '<div class="connexion">
		<a href="logout.php">Déconnexion</a>
		<a href="profil.php">Mon Profil</a>
		</div>';
	} 
	else {
		echo '<div class="connexion">
		<a href="login.php">Connexion</a>';	
	}
?>
<main>
	<iframe src="ExternalCall_test.html" frameborder="0" scrolling="no"></iframe>
	<a href="formulaire.php">Si tu n'as pas d'idée viens ici</a>
</main>
<script>
	$.ajax({
		type: "POST",
		url: '/send_JSON.php',
		data: {
		    data : JSON.stringify({color:'rouge'})
		}
	});
</script>
<?php 
include "front/footer.php";
?>
