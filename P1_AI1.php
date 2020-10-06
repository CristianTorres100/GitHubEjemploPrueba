<a href="index.php">Inicio</a><br>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title> P1_AI1 Variables</title>
</head>	

<strong>Impresión desde HTML</strong> <br>

1 + 2

<hr>

<?php

echo "<strong>Comentarios</strong> <br>";
//Este es un comentario

/* 
    Comentario Renglón 1
    Comentario Renglón 2
*/

$salto = "<hr>";

echo $salto;

//------------
echo "<strong>Impresión desde PHP</strong> <br>";


$variable = 1;
echo $variable;
echo $salto;

$variable = "hola";
echo $variable;
echo $salto;

$variable = 3.1416;
echo $variable;
echo $salto;

$variable = true;
echo $variable;
echo $salto;


//--------------------------------------------
echo "<strong>Operaciones Aritméticas</strong> <br>";

$num1 = 1;
$num2 = 2;

echo "Suma: ", $num1 + $num2;
echo $salto;

echo "Resta: ", $num1 - $num2;
echo $salto;

echo "Multiplicación: ", $num1 * $num2;
echo $salto;

echo "División: ", $num1 / $num2;
echo $salto;

echo "Residuo: ", $num1 % $num2;
echo $salto;

//-----------------------------------------
echo "<strong>Impresión desde doble comillas</strong><br>";

$variable1 = "2";
$variable2 = "3";
echo $variable1 * $variable2, "<br>";

//A pesar que las variables son del tipo string porque tienen comillas
//php las suma gracias a sus propiedades <3


//----------------------------------------------
echo "<strong>Impresión desde doble comillas</strong><br>";

$variable1 = 3.1416;
$variable2 = "Es el valor de PI";
echo "$variable1 <br>";

//----------------------------------------------
echo "<strong>Concatenación</strong><br>";

$variable1 = "primero";
$variable2 = "segundo";
echo $variable1 . $variable2 . "<br>";

echo $salto;

//-------------------------------------------

echo "<strong>Verificar Variables</strong><br>";

if (isset($variable1)){
    echo "Sí está declarada <br>";

}else{
    echo "No está declarada <br>";
}

$variable4 = 3.1416;
echo var_dump ($variable4);

