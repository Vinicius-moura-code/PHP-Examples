<?php
$servername = "localhost";
$database = "mysql";
$username = "root";
$password = "";
//cria a conexão

$strcon = mysqli_connect($servername, $username, $password, $database);

if (!$strcon) {
  die("Falha na conexão: " . mysqli_connect_error());
}
echo "Sucesso na Conexão";
