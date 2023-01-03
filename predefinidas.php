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

  $numero=33;
echo "nombre del server;" ." ".  $_SERVER['SERVER_NAME'];
echo "<p></p>";
echo "software del server;" ." ".  $_SERVER['SERVER_SOFTWARE'];
echo "<p></p>";
echo "nombre del server;" ." ".  $_SERVER['SERVER_PORT'];
echo "<p></p>";
echo "la varibale número vale " . $GLOBALS['numero'];
  ?>
</body>
</html>
