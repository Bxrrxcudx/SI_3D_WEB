<?php 
require_once "back/connect.php";
session_start();
include "front/header.php";
?>
<div class="main-content">
<h1>Quel design pour vous ?</h1>
    <div class="form">
        <form method="post" action="formulaire.php">
            <div class="one">
                <legend>Question 1. Vous aimez plutôt :</legend>
                <div>
                    <label for="option-one">L'épuré</label>
                    <input type="checkbox" id="option-one" name="option-one" maxlength="10">
                </div>
                <div>
                    <label for="option-two">L'originalité</label>
                    <input type="checkbox" id="option-two" name="option-two" maxlength="10">
                </div>
                <div>
                    <label for="option-three">L'excentricité</label>
                    <input type="checkbox" id="option-three" name="option-three" maxlength="10">
                </div>
            </div>
            <div class="two">
                <legend>Question 2. Quel âge avez vous ? </legend>
                <div>
                    <label for="option-one">Moins de 12 ans</label>
                    <input type="checkbox" id="option-one" name="option-one" maxlength="10">
                </div>
                <div>
                    <label for="option-two">12-25 ans</label>
                    <input type="checkbox" id="option-two" name="option-two" maxlength="10">
                </div>
                <div>
                    <label for="option-three">Plus de 25 ans</label>
                    <input type="checkbox" id="option-three" name="option-three" maxlength="10">
                </div>
            </div>
            <div class="three">
                <legend>Question 3. Quel usage souhaitez vous en faire ? </legend>

                <div>
                    <label for="option-one">Quotidien</label>
                    <input type="checkbox" id="option-one" name="option-one" maxlength="10">
                </div>
                <div>
                    <label for="option-two">Régulier</label>
                    <input type="checkbox" id="option-two" name="option-two" maxlength="10">
                </div>
                <div>
                    <label for="option-three">Occasionnel</label>
                    <input type="checkbox" id="option-three" name="option-three" maxlength="10">
                </div>
            </div>
            <input type="submit" value="Envoyer">
        </form>
    </div>
</div>
<?php 
include "front/footer.php";
?>