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
  $num1 = 4;

  function miFuncion1($n1)
  {/*pasa una copia de la variable, y valdra 2 mas dentro de la funcion, no fuera*/
    $n1 = $n1 + 2;
    echo "<br>";
  }
  function miFuncion2(&$n1)
  {/*paso el valor por referencia(la variable como tal) & gracias al ampersan, lo q suma la variable y queda reflejado al salir de la funcion*/
    $n1 = $n1 + 2;
    echo "<br>";
  }
  miFuncion1($num1);
  echo $num1;
  echo "<br>";
  miFuncion2($num1);
  echo $num1;
  echo "<br>";
  ?>
</body>

</html>