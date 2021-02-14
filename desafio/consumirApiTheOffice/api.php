<?php include_once('index.php');
echo "<br>";
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.98.0/css/materialize.min.css">
  <title>Document</title>
</head>

<body>
  <div class="container">
  <?php
  $dia = $_POST['dia'];
  $diaf = str_replace("-", "", $dia);
  $dia2 = $_POST['dia2'];
  $dia2f = str_replace("-", "", $dia2);
  $url = "https://officeapi.dev/api/episodes";
  $result = json_decode(file_get_contents($url));

  ?>


  <table class="bordered striped centered highlight responsive-table">
    <tr>
      <th>TITLE</th>
      <th>DESCRIPTION</th>
      <th>AIR-DATE</th>
    </tr>

    <?php

    $contador;
    foreach ($result->data as $data) {

      $title = $data->title;
      $description = $data->description;
      $airDate = $data->airDate;
      $x = substr($airDate, 0, 10);

      $parser = str_replace("-", "", $x);
      if ($parser >= $diaf && $parser <= $dia2f) {



        echo "<tr>";
        echo "<td>" . $title . "</td>";
        echo "<td>" . $description . "</td>";
        echo "<td>" . $x . "</td>";
        echo "</tr>";
        $contador++;
      }
    }

    echo "</table>";
    echo "Total episodes : " . $contador;


    ?>
</div>
</body>

</html>