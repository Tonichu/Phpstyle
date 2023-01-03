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
  /*fecha y hora
  minuscula dia 3 mes 1 y año en dos digitos hora minuto y segundo*/
  echo date("d m y h:i:s");
  echo "<br>";
   /*
  mayuscula dia tue (tuesday) mes jan(january) y año en 4 digitos 2023*/
  echo date("D M Y h:i:s");
  echo "<br>";
 /*
L es el dia de la semana entero, F el mes entero y la A final after meridian post meridian*/
  echo date("l F A");
  echo "<br>";
  /*getdate devuelve un array asociatio ( key-> value)*/
 $hoy= getdate();
 var_dump($hoy);
 
if ( $hoy["month"]=="January") {
  echo "Enero";
  echo "<br>";
}
//get devuelve tu zona horaria
echo "zona horaria". date_default_timezone_get();
echo "<br>";
//set cambia tu zona horaria
date_default_timezone_set("America/Los_Angeles");
echo "zona horaria". date_default_timezone_get();
  ?>
</body>

</html>