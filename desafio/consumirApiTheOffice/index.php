<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.98.0/css/materialize.min.css">
  <link rel="stylesheet" href="./styles/style.css">
  <title>Consumir api</title>
</head>

<body>
  <div class="container">
    <div id="header">
      <h1>The office</h1>
    </div>
    <form name="cadastro" action="api.php" method="POST">
      <label>
        <h3>Insert date</h3>
      </label>
      <div class="datas">
        <label for="dia">Initial date</label>
        <input type="date" id="dia" name="dia" />
      </div>

      <br />
      <div class="datas">
        <label for="dia2">Final date</label>
        <input type="date" id="dia2" name="dia2" />
      </div>

      <input type="submit" name="enviar" value="Enviar" />
    </form>

    <div>
      <p>First episode 24-03-2005</p>
      <p>Last episode 11-05-2006</p>

    </div>


  </div>
</body>

</html>