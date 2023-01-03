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

  $frutas = array("naranja", "plantano", "manzana", "frambuesa");

  var_dump($frutas);
  //quita el primero
  $eliminado = array_shift($frutas);
  var_dump($eliminado); //muestro el elemento eliminado
  var_dump($frutas);
  //coloca en el primer lugar
  array_unshift($frutas, "pera");
  var_dump($frutas);
  array_pop($frutas); //quita el último elemento
  var_dump($frutas);
  //añade en el último elemento
  array_push($frutas, "melocoton");
  var_dump($frutas);
  $frutas2 = array("naranja", "plantano", "manzana", "frambuesa");
$elementos = count($frutas2);
echo $elementos;//cuantos elementos tiene el array
echo "<br>";
$actual = current($frutas2);
echo $actual;//en que posicion se encuentra el puntero
echo "<br>";
end($frutas2);//cambia el puntero al ultimo elemento
/*vuelvo a usar actual, ya que si no cogería el de arriba que esta en priemr lugar (el puntero)*/
$actual = current($frutas2);
echo $actual;
echo "<br>";
reset($frutas2);//reseteo el pùntero a la posición inicial
$meses = array(0 => "enero", 1 => "febrero", 2 => "marzo",3 => "abril");
//devuelve la clave del elemento, en este caso el 1
$clave = array_search("febrero", $meses);
if ($clave) {
  echo $clave." ".$meses[$clave];
  echo "<br>";
}else {
  echo "elemento no encontrado";
}
//En este caso me daria el else ya q junio no existe
$clave = array_search("junio", $meses);
if ($clave) {
  echo $clave." ".$meses[$clave];
}else {
  echo "elemento no encontrado";
}
  ?>
</body>

</html>