<?php
include_once("conectar.php");
$pesquisa = $_POST['cidade'];
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="./styles.css" />
  <title>Document</title>
</head>

<body>
  <table border="1" style="width: 50%;">
    <tr>
      <th>NOME</th>
      <th>ENDEREÇO</th>
      <th>CIDADE</th>
    </tr>

</body>

</html>

<?php

$sql = "SELECT * FROM Users WHERE cidade = '$pesquisa'";
$resultado = mysqli_query($strcon, $sql);

while ($registro = mysqli_fetch_array($resultado)) {
  $nome = $registro['nome'];
  $endereco = $registro['endereco'];
  $cidade = $registro['cidade'];
  echo "<tr>";
  echo "<td>" . $nome . "</td>";
  echo "<td>" . $endereco . "</td>";
  echo "<td>" . $cidade . "</td>";
  echo "</tr>";
}
mysqli_close($strcon);
echo "</table>";
?>