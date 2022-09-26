<!DOCTYPE html>
<html>
  <head>
    <link rel="stylesheet" type="text/css" href="styles.css" />
    <link rel="stylesheet" type="text/css" href="styleAdminPage.css" />
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
        <form action="./Exercise1.php">
          <button
            class="gobackButton"
            type="submit"
            value="/AdminPage.html"
            title="Disconnect"
          >
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
        <div>
          <label for="chooseTextFile"><b>Current Text File</b></label>
          <input type="text" placeholder="Choose a text file" name="chooseTextFile">
        </div>
      </div>
    </div>
    <div class="bottom">
      <form action="./Exercise1.php">
          <button type="submit" class="gobackButton">Apply</button>
      </form>
    </div>
  </body>
</html>
