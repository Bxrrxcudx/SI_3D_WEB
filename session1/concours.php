<?php 
require_once "back/connect.php";
?>
<?php 
include "front/header.php";
?>
<main class="main-game-page">
    <figure>
        <img class="trottinette" src="img-content/img-trottinette.png" alt="trottinette">
    </figure>
    <div class="main-content">
        <h1 class="title-game-page">Apparaissez dans notre prochaine pub</h1>

        <p class="game-page">En participant à notre concours du meilleur design de trottinette, vous gagnez la possibilité de faire apparaitre votre design dans notre prochain spot publicitaire.</p>
        <h1 class="title-game-page">Condition de participation</h1>
        <p class="game-page">Pour participer à notre concours, chaque designer devra proposer une seule et même proposition. Celui-ci soumis au jugement des utilisateurs. Les 10 projets avec le plus de votes seront mis en avant sur notre site.</p>
        <div class="button-link">
        	<a href="game.php">Participer</a>
        </div>
    </div>
</main>
<?php 
include "front/footer.php";
?>