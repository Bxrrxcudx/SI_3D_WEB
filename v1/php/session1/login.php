<?php
require_once "connect.php";
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
    } else {
      $message = '<p>Une erreur s\'est produite
      pendant votre identification.<br /> Le mot de passe n\'est pas correcte.</p><p>Cliquez <a href="./connexion.php">ici</a>
      pour revenir à la page précédente
      <br /><br />Cliquez <a href="./index.php">ici</a>
      pour revenir à la page d accueil</p>';
      echo $message;
    }
  } else{
    $message = '<p>Une erreur s\'est produite
    pendant votre identification.<br /> le pseudo
    entré n\'est pas correcte.</p><p>Cliquez <a href="./connexion.php">ici</a>
    pour revenir à la page précédente
    <br /><br />Cliquez <a href="./index.php">ici</a>
    pour revenir à la page d accueil</p>';
    echo $message;
  }
}
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="utf-8">
    <title>My Urban Ride</title>
    <link rel="stylesheet" href="css/connexion.css">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i" rel="stylesheet">
</head>
<body>
  <header>
    <div class="nav-side-user">
      <img class="bag" src="img-layout/panier.png" alt="bag">
    </div>
    <nav class="nav-header">
      <ul>
        <li><a href="">Home</a></li>
        <li><a href="">Pimp Your Ride</a></li>
        <li><a href="">Nos Designs</a></li>
        <li><a href="">Nos Accessoires</a></li>
      </ul>
    </nav>
  </header>
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
