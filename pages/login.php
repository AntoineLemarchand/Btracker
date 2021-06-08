<!DOCTYPE html>
<html>
<body>
  <head>
    <meta charset="utf-8">
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
  <form action="../scripts/auth.php" method="POST">
    <input type="text" name="Umail" placeholder="johnsmith@gmail.com"> 
    <br>
    <input type="password" name="Upassword" id="password" placeholder="I<3bugs">
    <br>
    <input type="checkbox" onclick="toggleVis()">Show password
    <br>
    <input type="submit">
  </form>
  <a href="register.php">Créer un compte</a>
</body>
</html>
