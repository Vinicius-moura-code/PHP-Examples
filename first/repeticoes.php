<?php
$x = 1;

while ($x <= 10) {
  echo "O numero é: $x <br>";
  $x++;
}

$y = 5;
do {
  echo "O numero é: $y ";
  $y++;
} while ($y <= 10);


for ($z = 0; $z <= 10; $z++) {
  echo "O numero é: $z <br>";
}

$vetor = array(1, 2, 3, 4, 5);

foreach ($vetor as $v) {
  echo "O numero é: $v. <br>";
}
