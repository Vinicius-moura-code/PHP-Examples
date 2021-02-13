<?php
$vet = [0, 'po', TRUE];

echo "<br/>", $vet[0];
echo "<br/>", $vet[1];
echo "<br/>", $vet[2];

$meuArray = array(
  'chave1' => 'valor1',
  'chave2' => 'valor2',
  'chave3' => 'valor3',
  'chave4' => 'valor4',
  'valor5',
  'valor6',
);

$pessoa = array(
  'nome' => 'Andi',
  'idade' => 40,
  'email' => 'Andi@gmail.com',
);
echo $pessoa['email'];

$matriz = array(
  array(1, 5, 8),
  array(2, 5, 6),
  array(3, 4, 7),
);

echo "<br/>", $matriz[0][0];
echo "<br/>", $matriz[0][1];
echo "<br/>", $matriz[0][2];

echo "<br/>", $matriz[1][0];
echo "<br/>", $matriz[1][1];
echo "<br/>", $matriz[1][2];

echo "<br/>", $matriz[2][0];
echo "<br/>", $matriz[2][1];
echo "<br/>", $matriz[2][2];


$arrayMulti = array(
  'arrayNumerico' => array(
    'item1',
    'item2',
    'item3',
  ),
  'arrayAssociativo' => array(
    'chave1' => "valor1",
    'chave2' => "valor2",
    'chave3' => "valor3",

  )
);
