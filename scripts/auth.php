<?php
session_start();

if (!isset($_POST['demo'])) {
  $Upassword = $_POST['Upassword'];
  $Umail = $_POST['Umail'];

  include "../../../phpMyAdmin/logindb/login.inc.php";
  $id_connection = mysqli_connect($host, $user, $password, $dbname);
  $query = "SELECT UserID, Uname, Urole FROM USER WHERE Umail = '$Umail' AND Upassword = '$Upassword'";
  $result = mysqli_query($id_connection, $query);

  if (mysqli_num_rows($result) == 0) {
    header('Location: ../pages/login.html');
  } else {
    while ($ligne = mysqli_fetch_array($result,MYSQLI_ASSOC)) {
      $_SESSION['id'] = $ligne['UserID'];
      $_SESSION['name'] = $ligne['Uname'];
      $_SESSION['role'] = $ligne['Urole'];
    }
    header('Location: ../pages/dashboard.php');
  }
} else {
  
  $role = $_POST['role'];
  
  include "../../../phpMyAdmin/logindb/logindemodb.inc.php";
  $id_connection = mysqli_connect($host, $user, $password, $dbname);
  $query = "SELECT UserID, Uname, Urole FROM USER WHERE Urole='$role'";
  $result = mysqli_query($id_connection, $query);
  while ($ligne = mysqli_fetch_array($result,MYSQLI_ASSOC)) {
    $_SESSION['id'] = $ligne['UserID'];
    $_SESSION['name'] = $ligne['Uname'];
      $_SESSION['role'] = $ligne['Urole'];
  }
  header('Location: ../pages/dashboard.php');
}
?>

