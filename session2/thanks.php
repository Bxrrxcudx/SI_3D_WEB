<?php 
require_once "back/connect.php";
include "front/header.php";
?>
<style type="text/css">

	#thanks {
		position: relative;
		height: 60vh;
	}

	.thanks {
		font-size: 80px;
		position: absolute;
		top: 30%;
		left: 50%;
		transform: translate(-50%,-50%);
	}

	.thanks p {
		font-size: 50px;
	}
</style>
<main id="thanks">
	<div class="thanks">
		Merci
		<p>de votre participation</p>
	</div>
</main>
<?php 
include "front/footer.php";
?>