<a href="index.php">Inicio</a><br>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> P1_AI2 Comparaciones</title>
</head> 

<?php
$salto = "<hr>";
echo "<strong>IF </strong><br>";

if (1==1 || 2 == 3){
    echo "Al menos una es correcta<br>";
}else {
    echo "son diferentes";
}

echo $salto;

echo "<strong>IF Directos</strong><br>";

/*
    valor true
    valor numérico diferente de 0
    valor no vacio siempre marcará como correcto
*/

$variable = 34.23;
if ($variable){
    echo "Es verdadero";

}else {
    echo "Es falso";
}

echo $salto;

//---------------
echo "<strong>Switch</strong><br>";
$variable = 10;
switch($variable){
    case 1: echo "es el primero"; break;
    case 2: echo "es el segundo"; break;
    case 3: echo "es el tercero"; break;
    default: echo "no es ninguno"; break;


}