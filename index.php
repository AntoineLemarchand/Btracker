<?php
session_start();
if (!isset($_SESSION['Uname'])) {
  header('Location: pages/login.html');
} else {
  header('Location: pages/dashboard.php');
}
?>
