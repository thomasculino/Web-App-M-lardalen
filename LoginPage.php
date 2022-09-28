<!DOCTYPE html>
<?php
if (session_status() === PHP_SESSION_NONE) {
  session_start();
}
?>
<html>

<head>
  <link rel="stylesheet" type="text/css" href="styles.css" />
  <link rel="stylesheet" type="text/css" href="styleAdminPage.css" />
  <link rel="stylesheet" type="text/css" href="styleLoginPage.css" />
</head>

<body>
  <div class="inline">
    <div>
      <img src="Ressources/nasa_logo.png" alt="logo" width="100" height="100" />
    </div>
    <div id="centerTitle">
      <h1>LOGIN</h1>
    </div>
    <div id="goback">
      <form action="./Exercise1.php">
        <button class="gobackButton" type="submit" value="/AdminPage.php" title="Cancel">
          Cancel
        </button>
      </form>
    </div>
  </div>
  <div class="content">
    <div class="login-container">
      <form action=<?php
                    echo "./AdminPage.php" ?> method="POST">
        <label for="uname"><b>Username</b></label>
        <input type="text" placeholder="Enter Username" name="username" required>

        <label for="psw"><b>Password</b></label>
        <input type="password" placeholder="Enter Password" name="password" required>

        <div>
          <button type="submit" class="gobackButton">Login</button>
          <label id="rememberme">
            <input type="checkbox" name="remember" <?php if (isset($_SESSION["rememberme"]) and $_SESSION["rememberme"] != "") { ?> checked <?php } ?>> Remember me
          </label>
        </div>
      </form>
    </div>
  </div>
</body>

</html>