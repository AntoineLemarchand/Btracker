<?php
session_start();
if (!isset($_SESSION['Uname'])) {
  header('Location: pages/login.php');
} else {
  header('Location: pages/dashboard.php');
}
?>
