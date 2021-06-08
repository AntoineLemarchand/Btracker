<!DOCTYPE html>
<form action="<?php $_SERVER['SCRIPT_NAME'] ?>" method="POST">
<div>
  <label for="regName">Nom d'utilisateur</label>
  <input type="text" name="regName">
<div>
<div>
  <label for="regEmail">Adresse Email</label>
  <input type="text" name="regEmail">
<div>
<div>
  <label for="regPassword">Mot de passe</label>
  <input type="password" name="regPassword">
<div>
<div>
  <label for="regPassword_confirm">Confirmez le mot de passe</label>
  <input type="password" name="regPassword_confirm">
<div>
<input type="submit" value="Créer le compte">
</form>
<?php
if (isset($_POST['name'])) {
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
