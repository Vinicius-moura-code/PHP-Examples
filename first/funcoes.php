<?php

function exibir_msg($nome)
{
  echo "Olá\n";
  echo $nome;
}

function dia_atual()
{
  $hoje = getdate();
  switch ($hoje["wday"]) {
    case 0:
      return "Domingo";
      break;
    case 1:
      return "Segunda";
      break;
    case 2:
      return "Terça";
      break;
    case 3:
      return "Quarta";
      break;
    case 4:
      return "Quinta";
      break;
    case 5:
      return "Sexta";
      break;
    case 6:
      return "Sabado";
      break;
  }
}
$dia = dia_atual();
echo $dia;
function soma($numA, $numB)
{
  return $numA + $numB;
}
echo soma(1, 2);
