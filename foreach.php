<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>

<body>
  <?php
  $num = 5;
  //for se repite un numero de veces conocido
  for ($i = 0; $i <= 10; $i++) { //suma 1 en cada vuelta
    echo $i;
    echo "<br>";
  }
  for ($j = 10; $j >= 1; $j--) { //resta 1 en cada vuelta
    echo $j;
    echo "<br>";
  }
  for ($k = 0; $k <= 10; $k = $k + 2) { //suma 2 en cada vuelta
    echo "<br>";
    echo $k;
    echo "<br>";
  }
  for ($k = 0; $k <= 100; $k++) { //pares hasta el 100
    if ($k % 2 == 0) {
      echo "<br>";
      echo $k;
      echo "<br>";
    }
  }
  for ($i = 1; $i <= 10; $i++) {
    echo $num . "x" . $i . "=" .  $i * $num;
    echo "<br>";
  }
//foreach
$datos =array("uno"=> 1,"dos"=> 2);

foreach ($datos as $k => $v) {
  echo "llave $k valor $v ";
  echo "<br>";
}
  ?>
</body>

</html>