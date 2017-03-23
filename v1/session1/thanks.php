<?php 
require_once "back/connect.php";
?>
<?php 
include "front/header.php";
?>
<style>
	main {
		position: relative;
		height: 50vh;
		font-size: 80px;
	}
	main p {
		font-size: 50px;
	}
	.toto {
		position: absolute;
		top: 50%;
		left: 50%;
		transform: translate(-50%, -50%)
	}
</style>
<main>
<div class="toto">
	Merci	
	<p>de votre participation !</p>
</div>
</main>
<?php 
include "front/footer.php";
?>