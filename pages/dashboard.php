<?php session_start(); ?>
<!DOCTYPE HTML>
<html>
<head>
  <meta charset="utf-8">
  <link rel="icon" href="../../../images/icon.svg">
  <link rel="stylesheet" href="../styles/baseUI.css">
  <?php echo "<link rel='stylesheet' href='../styles/role/".$_SESSION['role'].".css'>"; ?>
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.12.1/css/all.css" crossorigin="anonymous">
  <link href="https://fonts.googleapis.com/css2?family=IBM+Plex+Mono:wght@500&display=swap" rel="stylesheet"> 
</head>
<body>
  <header>
<?php echo "<img src='../../../images/btackerlogo/btracker".$_SESSION['role'].".svg' alt='logo'>"; ?>
    <form action="../pages/search.php">
        <input type="text" name="searchQuery">
        <button type="submit"><i class="fas fa-search"></i></button>
    </form>
    <a href="account.php">
    <div id="account">
      <p><?php echo strtoupper($_SESSION['name'][0]) ?></p>
    </div>
    </a>
  </header>
  <nav>
    <p id="bienvenido">Bienvenue, <?php echo $_SESSION['name'] ?></p>
    <a href="roleAssign.php" class="option">
      <i class="fas fa-user-tag"></i>
      <p>Assigner les rôles</p>
    </a>
    <a href="projectManager.php" class="option">
      <i class="fas fa-project-diagram"></i>
      <p>Gérer les projets</p>
    </a>
    <a href="mysProjects.php" class="option">
      <i class="fas fa-tasks"></i>
      <p>Mes projets</p>
    </a>
    <a href="myTickets.php" class="option">
      <i class="fas fa-clipboard-list"></i>
      <p>Mes tickets</p>
    </a>
  </nav>
</body>
</html>
