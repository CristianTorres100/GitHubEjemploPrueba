<a href="index.php">Inicio</a><br>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> P1_AI3 Calculos</title>
</head> 

<?php

//Calcular la edad mediante las variables

$hoydia = 10;
$hoyfecha = 9;
$hoyanio = 2020;

$fechadia = 10;
$fechames = 9;
$fechaanio = 2010;

/*
echo "<br><strong>Fecha de Nacimiento</strong>";
echo "<hr>";

if ($fechames <= $hoyfecha ){
    echo "La persona tiene: " , $hoyanio - $fechaanio  , "<br>";

}else {
    echo "La persona tiene: " , $hoyanio - $fechaanio - 1 , "<br>";
}

*/

$yaPasoCumpeanos = false;

//mes
// el mes ya pasó
if($hoyfecha > $fechames){
    $yaPasoCumpeanos = true;
}

//estamos en el mismo mes de cumpleaños
if($hoyfecha == $fechames){
    if($hoydia >= $fechadia){
        $yaPasoCumpeanos == true;
    }
}

//el mes no ha llegado
if($hoyfecha < $fechames){
    $yaPasoCumpeanos = false;
}


//$yaPasoCumpeanos nos indica si ya cumplio o no 

if($yaPasoCumpeanos){
    //si sí ha cumplido años
    echo $hoyanio - $fechaanio;
}else {
    //si no ha cumplido
    echo $hoyanio - $fechaanio -1 ;
}