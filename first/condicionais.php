<?php
$prova1 = 6;
$prova2 = 8;
$media = ($prova1 + $prova2) / 2;
if ($media < 3)
  echo "Precisa dar maos gás!";
elseif ($media < 6)
  echo "Só mais um pouco!";
elseif ($media < 9)
  echo "Mais atenção e seria 10!";
else
  echo "O maximo";


//END//

$opcao = 's';
switch ($opcao) {
  case "s":
    echo '<br/> Voce ecolheu a opcao sim';
    break;
  case 'n':
    echo 'Voce escolheu a opcao NÃO';
    break;
  default:
    echo "Aopção digitada é invalida";
    break;
}

$b = "Olá";
$b.= " mundo!";
echo $b;