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
<html>
<head>
  <meta charset="utf-8">
  <title>connexion</title>
</head>
<style media="screen">
  body{
    margin: auto;
    width: 50%;

  }
  main{

    height: 100vh;
    width: 100%;

  }
  form{
    margin-top:20%;
    border: 1px solid #000;
    height: auto;
  }
  label{
    display: block;
  }
</style>
<body>
  <main>
    <form action="<?= $_SERVER['PHP_SELF'] ?>" method="post">
      <label>pseudo</label>
      <input type="login" name="pseudo" value="">
      <label>password</label>
      <input type="password" name="mdp" value="">
      <label>
      <input type="submit" name="Envoyer" value="Connexion">
      </label>
      <a href="signup.php">Inscit Toi !!</a>
    </form>
  </main>
</body>
</html>