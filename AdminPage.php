<!DOCTYPE html>
<?php
if (session_status() === PHP_SESSION_NONE) {
  session_start();
}
$_SESSION["rememberme"] = "checked";
?>
<html>

<head>
  <link rel="stylesheet" type="text/css" href="styles.css" />
  <link rel="stylesheet" type="text/css" href="styleLoginPage.css" />
  <link rel="stylesheet" type="text/css" href="styleAdminPage.css" />
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>

  <script>
    function disconnect() {
        var ajaxurl = 'ajax.php';
        var clickBtnValue = $("#disconnect").val();
          data = {
            'action': clickBtnValue
          };
        $.post(ajaxurl, data, function(response) {
          alert("disconnected successfully");
          window.location.href = "./Exercise1.php";
        });
    };
  </script>
</head>

<body>
  <div class="inline">
    <div>
      <img src="Ressources/nasa_logo.png" alt="logo" width="100" height="100" />
    </div>
    <div id="centerTitle">
      <h1>ADMIN PAGE</h1>
    </div>
    <div id="goback">
      <form action="javascript:disconnect()" method="POST" >
        <button class="gobackButton" id="disconnect" type="submit" value="disconnect" title="Disconnect" onclick="disconnect()">
          Disconnect
        </button>
      </form>
    </div>
  </div>
  <div class="content">
    <div class="textFile">
      <h1>
        Choose text file
      </h1>
      <form name="myForm" method="POST" action="./AdminPage.php" onsubmit="return validationForm()">
        <input type="text" placeholder="Choose a text file" name="chooseTextFile">
        <input type="submit" value="Apply">
      </form>
      <script>
        function validationForm() {
          var x = document.forms["myForm"]["chooseTextFile"].value;
          const jsonFiles = ["Ass2News.json", "Ass2News2nd.json", "Ass2News3rd.json"];
          if (x == "" || !jsonFiles.includes(x)) {
            alert("The name of the file is incorrect !");
            return false;
          }
        }
      </script>
      <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["chooseTextFile"])) {
          $filepath = $_POST["chooseTextFile"];
          print_r($filepath);
          $myfile = fopen("Ressources/NewsToDisplay.txt", "r+") or die("Unable to open file!");
          fwrite($myfile, $filepath);
          fclose($myfile);

          header("Location: ./Exercise1.php");
        }
      ?>
    </div>
    <h3>List of files availables</h3>
    <ul>
      <li>Ass2News.json</li>
      <li>Ass2News2nd.json</li>
      <li>Ass2News3rd.json</li>
    </ul>
  </div>

  
</body>

</html>