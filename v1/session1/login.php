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
  <main>
    <div class="main-content">
      <div class="info">
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
          <a href="signup.php">Inscription</a>
        </div>
        </form>
      </div>
    </div>
  </main>
<?php 
include "front/footer.php";
?>
