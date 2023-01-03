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
  //echo "hola" 
  $edad=33;
  $sueldo;
  $estatura = 1.24;
  $apellido= "Marquina";
  $nombre="luisja";
  $profe = True;
  const PI = 3.14; // constante
  
  echo "tengo $edad años y me llamo $nombre <br> soy profe?";
  echo json_encode($profe);

  function prueba(){
    global $edad;
    echo "<br>$edad";
  }
  prueba();

  ?>
</body>
</html>