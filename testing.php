<?php
include "../../phpMyAdmin/login.inc.php";
$connex = mysqli_connect($host, $user, $password, $dbname);
if ($connex) {
  echo "yeah";
} else {
  echo "whaa";
}
mysqli_close($connex)
?>
