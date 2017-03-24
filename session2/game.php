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

<style type="text/css">
	.title-pimp {
		font-size: 3em;
		font-style: italic;
		padding: 1em 0;
	}

	section.custom {

		width: 100%;
		float: left;
		color: #FFF;
		padding: 0 0 90px 0;
	}

	.custom article {
		width: 33.33333%;
		float: left;
		position: relative;
		background: linear-gradient(to top, rgba(255,255,255,.9),rgba(255,255,255,.9) 10%, black);
	}

	.article-title {
		font-size: 1.5em;
		font-style: italic;
		font-weight: 600;
		letter-spacing: 0.06em;
		text-align: center;
		margin: 0 auto 2em auto;
	}

	.article-title.first {
		margin: 2.2em auto 2em auto;
	}

	section.custom ul li {
		font-size: 1.2em;
		text-align: left;
		font-style: italic;
		font-weight: 300;
		letter-spacing: 0.1em;
		margin: 1em auto;
	}

	section.custom ul {
		margin: 0 auto 4.5em auto;
	}

	.design figure figcaption {
		z-index: 100;
	}

	.design figcaption,
	.build figcaption,
	.deliver figcaption {
		position: absolute;
		top: 50%;
		left: 50%;
		transform: translate(-50%, -50%);
	}

	figcaption {
		width: 69%;
	}

	.custom figure {

	}

	section.custom figure img {
		opacity: .9;
	}
	span.price {
		text-align: center;
		display: block;
		font-size: 3em;
		font-weight: 800;
		margin: 1em auto 0.8em auto;
	}
	.custom-page .button {
		border: solid #262626 1px;
		margin: 1.5em auto;
		padding: 0.6em 1.8em;
		font-size: 1.2em;
		font-weight: 400;
		text-align: center;
		width: 10%;
	}
	.custom-page .button a {
		color: #262626;
	}
	.custom-page img .icon-save {}
	.custom-page h4 {
		text-transform: uppercase;
		font-size: 2.5em;
		font-weight: 600;
		margin: 0.4em auto;
	}
	.custom-page p {
		text-align: center;
	}
	.custom-page p+p {
		padding: 0 0 3.5em 0;
	}
</style>
<main class="custom-page">

	<h1 class="title-pimp">Pimp Your Ride</h1>

	<iframe src="Rendu_Final1.html" width="1200" height="850" frameborder="0" scrolling="no">
	</iframe><br>
	<a href="formulaire.php">Si tu n'as pas d'idée viens ici</a>

	<span class="price">199€</span>

	<div class="button"><a href="#">Participer</a></div>

	<div class="button"><a href="#">Besoin d'aide ?</a></div>

	<div class="button share"><a href="#">Partager</a></div>

	<a href=""><img class="icon" src="img-layout/icon-save.png" alt=""></a>


	<h4>Description</h4>

	<p>Idéal pour les déplacements jusqu'à 5 km.</p>
	<p>Allez 3 fois plus vite et 3 fois plus loin qu'en marchant.</p>

	<section class="custom clearfix">

		<article class="design">

			<figure>
				<figcaption>
					<h3 class="article-title first">Designez votre trottinette</h3>
					<ul>
						<li>Choisis ta couleur et ta matière</li>
						<li>Choisis tes accessoires</li>
						<li>Crée ton sticker</li>
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
						<li>Conformément à vos exigences
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
						<li>En 3 à 5 semaines
						</li>
						<li>Avec un suivi de commande
						</li>
					</ul>
				</figcaption>
			</figure>

		</article>
	</section>
</main>
<script>
	<?php 
if (isset($_POST['data'])) {
	header('Location:profil.php');
}

?>
</script>
<script>
function redir(){
	window.location = "profil.php";
}

window.addEventListener('keyup', function(evt){
	if(evt.keyCode == 87){
		redir();
	}
});
</script>
<?php 

include "front/footer.php";
?>
