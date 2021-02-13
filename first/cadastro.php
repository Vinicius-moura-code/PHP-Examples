<?php
$conexao = mysqli_connect("localhost", "root" ,"", "mysql");

if (!$conexao) {
  die("Erro de conexão com o Banco de Dados");
}

$nome = $_POST['nome'];
$endereco = $_POST['endereco'];
$cidade = $_POST['cidade'];



$sql = "INSERT INTO Users (nome, endereco, cidade)
VALUES ('$nome','$endereco','$cidade') ";

$resultado = mysqli_query($conexao, $sql);

mysqli_close($conexao);
//mysqli_connect("HOST", "USUARIO", "SENHA", "BD");
