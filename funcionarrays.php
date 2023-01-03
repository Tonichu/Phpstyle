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

  $numeros1 = [11, 22, 33];
  $numeros2 = [11, 33, 55];
  $colores1 = ["color1" => "rojo", "color2" => "verde", "color3" => "azul", "color4" => "naranja"];
  $colores2 = ["color1" => "verde", "color2" => "azul", "color3" => "amarillo"];

  /* array_diff devuelve los elementos 1 q no estan en el 2*/
  $diferencias1 = array_diff($numeros1, $numeros2);
  var_dump($diferencias1);
  echo "<br>";
  $diferencias2 = array_diff($colores1, $colores2);
  var_dump($diferencias2);
  echo "<br>";
  /*merge une los dos arrays */
  $a1 = ["rojo", "verde"];
  $a2 = ["azul", "amarillo"];
  $unido = array_merge($a1, $a2);
  var_dump($unido);
  //sort, ordena de mayor a menor rsot al reves :P
  $dias = array("Lunes", "Martes", "Miercoles", "Jueves", "Viernes", "Sabado", "Domingo");
  var_dump($dias);
  /*sort($dias);
  echo "<br>";
  var_dump($dias);
  echo "<br>";
  rsort($dias);
  echo "<br>";
  var_dump($dias);
  echo "<br>";*/
  //asort ordena pero mantiene los indices
  asort($dias);
  echo "<br>";
  var_dump($dias);
  echo "<br>";

  $arrayNombres = array("Javier" => "29", "Patricia" => "18", "Emilio" => "26",);
  var_dump($arrayNombres);
  echo "<br>";
  ksort($arrayNombres);//ordena alfabeticamente
  var_dump($arrayNombres);

  shuffle($dias);//ordena aleatoriamente
  var_dump($dias);
  ?>
</body>

</html>