<?php
session_start();
$Upassword = $_POST['Upassword'];
$Umail = $_POST['Umail'];

include "../../../phpMyAdmin/login.inc.php";
$id_connection = mysqli_connect($host, $user, $password, $dbname);
$query = "SELECT UserID, Umail, Upassword FROM USER WHERE Umail = '$Umail' AND Upassword = '$Upassword'";

$result = mysqli_query($id_connection, $query);

if (mysqli_num_rows($result) == 0) {
  header('Location: ../pages/login.php');
} else {
  $_SESSION['UserID'] = mysqli_fetch_array($result,MYSQLI_ASSOC)['UserID'];
  header('Location: ../pages/home.php');
}
?>

