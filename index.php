<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="styles.css">
  <title>System</title>
</head>
<body>
  <div class="container">

    <header class="head">
      <h2>System Manager</h2>
    </header>

    <section class="ranksCol">
      <?php include 'php/ranks.php'; ?>
    </section>

    <section id="data" class="infoCol">
      <?php include 'php/ranksInfo.php'; ?>
    </section>

    
    <section class="inputs">
      <header>
        <h2 class="modifyHeader">Modify Permission Data</h2>
      </header>
      <form>
        <input class="input" id="permissionNode" type="text" placeholder="Permission"></input>
        <br>
        <input class="input" id="server" type="text" placeholder="Server"></input>
        <br>
        <div class="buttons">
          <input type="button" id="add" class="button" value="Add Permission" onclick="handlePermChange()"></input>
          <br>
          <input type="button" id="remove" class="button" value="Remove Permission" onclick="handlePermChange()"></input>
        </div>
      </form>
    </section>
    
  </div>

  <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
  <script src="js/index.js" async defer></script>
</body>
</html>