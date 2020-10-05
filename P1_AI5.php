<a href="index.php">Inicio</a><br><br>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title> P5_AI5 PIRAMIDES</title>
</head>	
<?php
//-------------------------------
// que queremos, una piramide con n niveles
echo "<br><strong>Descendente</strong><br>";
$nivel1=5;
$i=1;

while ($i<=$nivel1) {
	$j=1;
	while ($j<=$i) {
		echo "$j ,";
		$j+=1;
	}
	echo "<br>";
	$i+=1;
}

//-------------------------------
echo "<br><strong>Invertido</strong><br>";
$nivel2=5;


while($nivel2>=1) { 
	$b=1;
	while ($b<=$nivel2) {
		echo "$b ,";
		$b+=1;
	}
	echo "<br>";
	$nivel2-=1;
}

//-------------------------------
echo "<br><strong>Calendario</strong><br>";

$Enedias=31;

echo "ENERO: ";
for ($i=1; $i <= $Enedias ; $i++) 
	{echo "$i -";}
echo "<br><br>";

$Febdias=28;

echo "FEBRERO: ";
for ($i=1; $i <= $Febdias ; $i++) 
	{echo "$i -";}
echo "<br><br>";

$Mardias=31;

echo "MARZO: ";
for ($i=1; $i <= $Mardias ; $i++) 
	{echo "$i -";}
echo "<br>";

$Abrdias=30;

echo "ABRIL: ";
for ($i=1; $i <= $Abrdias ; $i++) 
	{echo "$i -";}
echo "<br><br>";

$Maydias=31;

echo "MAYO: ";
for ($i=1; $i <= $Maydias ; $i++) 
	{echo "$i -";}
echo "<br><br>";

$Jundias=30;

echo "JUNIO: ";
for ($i=1; $i <= $Jundias ; $i++) 
	{echo "$i -";}
echo "<br><br>";

$Juldias=31;

echo "JULIO: ";
for ($i=1; $i <= $Juldias ; $i++) 
	{echo "$i -";}
echo "<br><br>";

$Agodias=31;

echo "AGOSTO: ";
for ($i=1; $i <= $Agodias ; $i++) 
	{echo "$i -";}
echo "<br><br>";

$Sepdias=30;

echo "SEPTIEMBRE: ";
for ($i=1; $i <= $Sepdias ; $i++) 
	{echo "$i -";}
echo "<br><br>";

$Octdias=31;

echo "OCTUBRE: ";
for ($i=1; $i <= $Octdias ; $i++) 
	{echo "$i -";}
echo "<br><br>";

$Novdias=31;

echo "NOVIEMBRE: ";
for ($i=1; $i <= $Novdias ; $i++) 
	{echo "$i -";}
echo "<br><br>";

$Dicdias=31;

echo "DICIEMBRE: ";
for ($i=1; $i <= $Dicdias ; $i++) 
	{echo "$i -";}
echo "<br><br>";


//-------------------------------
echo "<br><strong>Pirámide dinámica</strong><br>";

$nivel3 = 5;
for ($a=0; $a < $nivel3; $a++) { 
	for ($b=0; $b < $nivel3-$a-1; $b++) { 
		echo "=";
	}
	for ($b=0; $b < $a*2+1; $b++) { 
		echo "$b";
	}
	echo "<br>";
	echo "<br>";


	
}

echo "No pude hacer que tuviera iguales del otro lado profe y la de rombo no pude :(";