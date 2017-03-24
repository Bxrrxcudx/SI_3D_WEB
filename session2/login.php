<?php
require_once "back/connect.php";
if (isset($_POST['Envoyer'])) {
  $sql = "
    SELECT `id`, `pseudo`, `mdp`
    FROM profils 
    WHERE `pseudo` = :pseudo";
  $stmt = $pdo-> prepare($sql);
  $stmt->bindValue(":pseudo", htmlentities($_POST['pseudo']));
  $stmt->execute();
  $POC = '';
  $data = $stmt->fetch();
  if ($data['pseudo'] == $_POST['pseudo']) {
    if ($data['mdp'] == $_POST['mdp']) {
      setcookie('pseudo', $data['pseudo'], time()+10000);
      session_start();
      $_SESSION['pseudo'] = $data['pseudo'];
      $_SESSION['id'] = $data['id'];
      header('Location: ./profil.php');
      exit();
    } else {
      $message = '<p class="error">Une erreur s\'est produite pendant votre identification.<br /> 
      Le mot de passe ou le pseudo n\'est pas correct.</p>';
    }
  } else{
      $message = '<p class="error">Une erreur s\'est produite pendant votre identification.<br /> 
      Le mot de passe ou  le pseudo entré n\'est pas correct.</p>';
  }
}
?>
<?php 
include "front/header.php";
?>
<style>
  .main-login .main-content {
    padding: 2% 0;
    width: 20em;
}

.main-login h2 {
    margin-bottom: 5%;
    font-size: 2em;
}

.main-login span.button {
    border: solid #272527 1px;
    margin: 10px;
    padding: 0.8em 1.8em;
    text-transform: uppercase;
    font-size: 0.6em;
    font-weight: 400;
    color: #272527;
    display: inline-block;
}

.main-login label {
    font-size: 1em;
    /* font-weight: bold; */
}

.main-login input {
    width: 20em;
    height: 2em;
    margin: 1em;
}

.main-login input[type="submit"] {
    font-family: 'Open Sans', 'Trebuchet MS', sans-serif;
    height: 2.5em;
    font-size: 1.2em;
    padding: 1.5%;
    width: 85%;
    border-radius: 1%;
    border: 1px solid black;
    cursor: pointer;
    transition: .2s ease-in-out;
}

.main-login input[type="submit"]:hover {
    background: #dadada;
    cursor: pointer;
}

.main-login .button a {
    font-weight: bold;
    text-decoration: underline;
}
</style>

  <main class="main-login">
    <div class="main-content">
      <div class="info">
        <h2>Connexion</h2>
      <form action="<?= $_SERVER['PHP_SELF'] ?>" method="post">
        <div class="id">
          <label for="id">Identifiant</label>
          <input type="login" name="pseudo" value="" id="id">
        </div>
        <div class="password">
          <label for="password">Mot de passe</label>
          <input type="password" name="mdp" value="" id="password">
        </div>
        <?php 
        if (isset($message)) {
          echo $message;
        }
        ?>
        <div class="button">
          <input type="submit" value="Connexion" name="Envoyer">
          <p>Vous, n'avez pas de compte ?<br><a href="signup.php">Inscrivez-vous !</a></p>
        </div>
        </form>
      </div>
    </div>
  </main>
<?php 
include "front/footer.php";
?>
