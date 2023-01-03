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
  $exploradores = array("explorador1"=> "Chrome","explorador2"=> "Safari");
  $datos = array("edad"=> 21,"mala persona"=> true,3=>25);
  echo "Explorador 2 =".$exploradores["explorador2"];
  echo "<br>";
  echo "edad" . $datos[3];
  echo "<br>";
  echo var_dump($exploradores);
  echo "<br>";
  echo var_dump($datos);
  ?>
</body>
</html>