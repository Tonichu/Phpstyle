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
  //while se repite hasta q la condicion se cumpla
  $num = 10;
  $respuesta = "Oporto";
  $intentos = 1;
  while ($num  >= 0) {
    echo $num;
    echo "<br>";
    $num--;
  }

  while ($respuesta != "Lisboa") {
    echo "intentos: " . $intentos;
    echo "<br>";
    if ($intentos == 3) {
      $respuesta = "Lisboa";
    }
    $intentos++;
  }

  //do while
  $valor = 10;
  while ($valor != 10) {
    echo  "dentro del while";
  }
  do {
    echo  "dentro del do while";
    echo "<br>";
  } while ($valor != 10);

  /*El do while comprueba primero aunque la condicion no se cumpla el while directamente se mete */

  //Break
  for ($i = 1; $i <= 10; $i++) {
    echo "valor de i es igual a = $i";
    echo "<br>";
    if ($i == 3) {
      break;
      echo "<br>";
    }
  }

  for ($i = 1; $i <= 3; $i++) {
    echo "<br>";
    echo "valor de i es igual a = $i";
    echo "<br>";
    for ($j = 1; $j <= 10; $j++) {
      echo "valor de j es igual a = $j";
      echo "<br>";
      if ($j == 3) {
        break 2;//salgo de los 2 bucles
        echo "<br>";
      }
    }
  }
//continue
 //salta el 3 y sigue el bucle hasta 10
    for ($h = 1; $h <= 10; $h++) {
      if ($h == 3) {
        continue;
        echo "<br>";
      }
      echo "valor de h es igual a = $h";
      echo "<br>";
    }
  
  ?>
</body>

</html>