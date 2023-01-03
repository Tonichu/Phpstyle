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
  $n1 = 5;
  $n2 = 10;

  function saludar()
  {
    echo "yo, te saludo";
    echo "<br>";
  }
  saludar();
  function sumar($n1, $n2)
  {
    echo $n1 + $n2;
    echo "<br>";
  }
  sumar($n1, $n2);
  function sumarNumerosRetornos($n1, $n2)
  {
    return $n1 + $n2;
    //return devuelve algo, y debo de recogerlo si no lo hago me dara un error
    echo "<br>";
  }
  //lo recojo en la variable $resultado
  $resultado = sumarNumerosRetornos(2, $n2);
  echo $resultado;
  ?>
</body>

</html>