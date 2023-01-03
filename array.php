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
$dias =array("Lunes","Martes","Miercoles","Jueves","Viernes","Sabado","Domingo");
  $temperatura=[12,45,-51];
  $arrayDeTantasPosiciones= array(15);
  $vacio=array();
  echo $dias[1];//Martes
  echo "<br>";
  echo $temperatura[0]; //lunes
  echo "<br>";
  echo var_dump($dias); // ves tanto el dato como lo q hay dentro
  ?>
</body>
</html>