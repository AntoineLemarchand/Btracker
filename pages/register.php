<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="../styles/account.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=IBM+Plex+Mono:wght@500&display=swap" rel="stylesheet"> 
    <title>Btracker: Register</title>
  </head>

</html>
<div id="content">
  <form action="<?php $_SERVER['SCRIPT_NAME'] ?>" method="POST">
  <div class="input">
    <label for="regName">Nom d'utilisateur</label><br/>
    <input type="text" name="regName">
  </div>
  <div class="input">
    <label for="regEmail">Adresse Email</label><br/>
    <input type="text" name="regEmail">
  </div>
  <div class="input">
    <label for="regPassword">Mot de passe</label><br/>
    <input type="password" name="regPassword">
  </div>
  <div class="input">
    <label for="regPassword_confirm">Confirmez le mot de passe</label><br/>
    <input type="password" name="regPassword_confirm">
  </div>
    <input type="submit" value="Créer le compte">
  </form>
</div>
<?php
if (isset($_POST['regName'])) {
  if ($_POST['regName']!="" && $_POST['regEmail']!="" && $_POST['regPassword']!="") {
    if ($_POST['regPassword'] == $_POST['regPassword_confirm']) {

      $regName = $_POST['regName'];
      $regPassword = $_POST['regPassword'];
      $regEmail = $_POST['regEmail'];

      include "../../../phpMyAdmin/login.inc.php";
      $id_connection = mysqli_connect($host, $user, $password, $dbname);
      $query = "INSERT INTO bugtracker.USER (Uname, Upassword, Urole, Umail) VALUES ('$regName','$regPassword','submitter','$regEmail')";

      if (mysqli_query($id_connection,$query)) {
        echo "<script>alert('Compte créé !')</script>";
      } else {
        echo "<script>alert('Erreur dans la base de donnée')</script>";
      }
      
    } else {
      echo "<script>alert('Les mots de passe ne coincident pas !')</script>";
    }
  } else {
    echo "<script>alert('Données manquantes !')</script>";
  }
}
?>
