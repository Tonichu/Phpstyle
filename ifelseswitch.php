<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <script src="carpetita/foreach.php"></script>
</head>

<body>
  <?php
  $nota1 = 2;
  $nota2 = 10;
  $nota3 = 15;

  if ($nota2 >= 5 && $nota3 >= 5) {
    echo "aprobadas las dos";
    echo "<br>";
  }
  if ($nota2 >= 5) {
    echo "dentro del 1 if";
    echo "<br>";
    if ($nota3 >= 5) {
      echo "dentro del 2 if";
      echo "<br>";
    }
  }
  if ($nota1 >= 5) { //no entra porque es menor de 5
    echo "aprobado";
    echo "<br>";
  } else {
    echo " no aprobado";
    echo "<br>";
  }
  //ternario(Siempre devuelve algo)
  $nota4 = 7;
  $final = $nota4 >= 5 ? "ternario aprobado" : "ternariosuspenso";
  echo "<br>" . $final . "<br>";
  //elseif

  $valor1 = 2;
  $valor2 = 6;
  $dia = 4;
  if ($valor1 > $valor2) {
    echo "valor 1 es mayor que valor 2";
  } elseif ($valor1 == $valor2) {
    echo "valor 1 es igual que valor 2";
  } else {
    echo "valor 1 es menor que valor 2";
    echo "<br>";
  }
  if ($dia == 1) {
    echo "es lunes";
  } elseif ($dia == 2) {
    echo "es martes";
  } else {
    echo "es miercoles";
    echo "<br>";
  }
  //switch
  switch ($dia) {
    case 1:
      echo "es lunes";
      break;
    case 2:
      echo "es martes";
      break;
    case 3:
      echo "es miercoles";
      break;
    default:
      echo "No es valido";
      echo "<br>";
      break;
  }
  $diaDeLaSemana = "martes";
  switch ($diaDeLaSemana) {
    case "lunes":
      echo "es lunes";
      break;
    case "martes":
      echo "es martes";
      break;
    case "miercoles":
      echo "es miercoles";
      echo "<br>";
      break;
    default:
      echo "No es valido";
      break;
  }

  ?>
</body>

</html>