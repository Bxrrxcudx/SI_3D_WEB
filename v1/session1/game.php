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
// if (!isset($_SESSION['id'])) {
// 	header('Location:./login.php');
// }
?>
<?php 
include "front/header.php";
?>
<main class="custom-page">
	<div class="main-content">
		<h1 class="title-pimp">Pimp Your Ride</h1>
	    <iframe width="360" height="215" src="ExternalCall_test.html" frameborder="0" allowfullscreen></iframe>
	</div>
    <section class="custom clearfix">
        <article class="design">
            <figure>
                <figcaption>
                    <h3 class="article-title first">Designez votre trotinette</h3>
                    <ul>
                        <li>Choisis ta couleur et ta matière</li>
                        <li>Choisis tes accessoires</li>
                        <li>Crée ton stickers</li>
                    </ul>
                </figcaption>
                <img src="img-content/img-crayon.png" alt="">
            </figure>
        </article>
        <article class="build">
            <figure>
                <img src="img-content/img-feu.png" alt="">
                <figcaption>
                    <h3 class="article-title">Nous la fabriquons</h3>
                    <ul>
                        <li>Conformément à vos éxigences
                        </li>
                        <li>Qualité</li>
                    </ul>
                </figcaption>
            </figure>
        </article>
        <article class="deliver">
            <figure>
                <img src="img-content/img-colis.png" alt="">
                <figcaption>
                    <h3 class="article-title">Nous la livrons</h3>
                    <ul>
                        <li>En 3 à 5 semaine
                        </li>
                        <li>Avec un suivi de commande
                        </li>
                    </ul>
                </figcaption>
            </figure>
        </article>
</main>
<!-- <main>
	<iframe src="ExternalCall_test.html" frameborder="0" scrolling="no" width="600px" height="600px"></iframe>
	<a href="formulaire.php">Si tu n'as pas d'idée viens ici</a>
</main> -->
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
