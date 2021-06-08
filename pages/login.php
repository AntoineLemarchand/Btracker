<!DOCTYPE html>
<html>
<body>
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="../styles/account.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=IBM+Plex+Mono:wght@500&display=swap" rel="stylesheet"> 
    <title>Btracker: Login</title>
  </head>
  <script>
    function toggleVis() {
      var pass = document.getElementById("password");
      if (pass.type === "password") {
        pass.type = "text";
      } else {
        pass.type = "password";
      }
    }  
  </script>
  <div id="content">
    <form action="../scripts/auth.php" method="POST">
      <div class="input">
        <label for="Umail">Adresse Mail</label><br/>
        <input type="text" name="Umail" placeholder="..."> 
      </div>
      <div class="input">
        <label for="Umail">Mot de passe</label><br/>
        <input type="password" name="Upassword" id="password" placeholder="...">
      </div>
        <input type="checkbox" onclick="toggleVis()">Voir le mot de passe<br/>
        <input type="submit">
    </form>
  </div>
  <div id="register">
    <span></span>
    <a href="register.php">Créer un compte</a>
  </div>
</body>
</html>
