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
  //include 
  echo "soy el primer fichero ";
  echo "<br>";
  include "include2.php"; //incluye el fichero
  include_once "include2.php";
  /*si ya esta incluido lo ignora con la linea de arriba*/

  //require si no lo encuentra error fatal

  require "include2.php"; //incluye el fichero
  require_once "include2.php";
  for ($k = 7; $k >= 2; $k = $k - 2) {
    echo $k;
  };

phpinfo();


  ?>
</body>

</html>