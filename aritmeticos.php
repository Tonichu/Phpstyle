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
  /*$num1 = 5;
  $num2 = 10;
  $total = $num1 + $num2;
  echo $total;
  echo "<br>";
  echo $num1 . "x". $num2."=".$num1*$num2;
  echo "<br>";
  echo $num1 . "resto". $num2."=".$num2%$num1;
  echo "<br>";
  echo $num1 . "elevado a". $num2."=".$num1**$num2;
  echo "<br>";
  $num3 = 0;
  $num3 = $num1;//sobrescribe
  echo $num3;
  echo "<br>";
  echo $num1 . "+=". $num2."=".$num1+=$num2;
  echo "<br>";
  echo $num1 . "+=". $num2."=".$num1*=$num2;
  echo "<br>";
  $num4 = 5;
  $num5 = 10; 
  $num6 = 5;
  $valor1 = "5";
  $total = $num1 + $num2;
if ($num4 == $valor1) {
  echo "son iguales";
  echo "<br>";
}
if ($num4 === $valor1) {
  echo "son iguales";
  echo "<br>";
}
if ($num4 !== $valor1) {
  echo "son de diferente tipo";
  echo "<br>";
}
if ($num4 != $num5) {
  echo "son distintos";
  echo "<br>";
}
if ($num4 <>$num5) {
  echo "son de diferente tipo prim";
  echo "<br>";
}
if ($num4 <=$num5) {
  echo "menor";
  echo "<br>";
}*/
  //incremento
  $num1 = 5;
  $num2 = 10;
  echo $num1++; //muestra el numero y luego lo suma
  echo "<br>";
  echo $num1;
  echo "<br>";
  echo ++$num2; //suma y luego muestra
  echo "<br>";
  echo $num2;
  //operadores lógicos &&(and)||xor!
  $num3 = 5;
  $num4 = 10;
  $num5 = 5;
  $num6 = 10;
  $num7 = 5;
  $activo = true;
  $activo2 = false;
  if ($num3 == $num5 && $num7 == $num5) {

    echo "el numero 3,5 y 7 son iguales";
    echo "<br>";
  }
  if ($num3 == $num5 || $num7 == $num5) {

    echo "el numero 3,5 y 7 son iguales";
    echo "<br>";
  }
  if ($num5 == $num7 xor $num3 == $num5) {/*solo entra cuando se cumple una de las dos condiciones*/

    echo "el numero 3,5 y 7 son iguales oorr";
    echo "<br>";
  }
  if (!$activo) { //cambio de true a false al negarlo con !

    echo "dentro";
    echo "<br>";
  }

  ?>
</body>

</html>