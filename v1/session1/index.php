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
<main class="main-homepage">

        <div class="main-visual">

            <figure>
                <img class="homepage-trottinette" src="img-content/img-trottinette_homepage.png" alt="trottinette">
            </figure>

            <div class="visual-titles">
                <h1 class="main-title">Pimp your ride</h1>
                <h2 class="main-title-second">La trottinette sur mesure</h2>
                <p class="homepage-pimp-button"><a href="custom.html">Je pimp</a></p>
            </div>

        </div>

        <section class="game-race">

            <div class="main-content">

                <h1 class="title-homepage">Jeu concours</h1>

                <p>Aimeriez vous voir votre création dans notre prochaine pub ?</p>

                <div class="homepage-button-link"><a href="concours.html">Participer</a></div>

            </div>

        </section>

        <section class="">

            <h2 class="title-third-homepage">Déplacez-vous en ville plus simplement</h2>

            <figure><img class="img-section" src="img-content/img-trottinette_homepage-section2.png" alt=""></figure>

            <div class="products-link"><a href="#">Découvrir nos produits</a></div>

        </section>

        <section class="unity">

            <div class="opacity">
                <figure><img class="img-section unity-opacity" src="img-content/img-cathedrale-nd.png" alt=""></figure>
                <figure><img class="logo" src="img-layout/logo-unity.png" alt=""></figure>
            </div>

            <p>Made with Unity</p>

        </section>

    </main>
<?php 
include "front/footer.php";
?>
