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
