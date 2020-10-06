<a href="index.php">Inicio</a><br>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> P1_AI4 Ciclos</title>
</head> 

<?php

//--------------------------
echo "<br><strong>If</strong><br>";
    for ($i=0; $i < 5; $i++) { 
	    echo "$i <br>";
    }

//--------------------------
echo "<br><strong>While</strong><br>";
$i=0;
while ($i <5) { 
	echo "$i <br>";
	$i++;
}

//--------------------------
echo "<br><strong>Do While</strong><br>";
$i=0;
do{
	echo "$i <br>";
	$i++;
}while ($i <5);

//-------------------------

echo "<br><strong>Funciones de arreglos</strong><br>";
$arrNuevo=[1,2,3,4,5];
$arrNuevo=array(1,2.235,"a",4, true); //Está sustituyendo los valores que se el dieron al arreglo arriba por éstos nuevos
echo var_dump($arrNuevo)."<br>"; //Así que al momento de imprimirlos se van a mostrar los datos que están arriba
    
echo "<br><strong>Agregar al final</strong><br>";
echo var_dump($arrNuevo)."<br>"; //Aquí se siguie imprimiendo los datos que están arriba, pero vamos a meter un nuevo información
array_push($arrNuevo, 10); //Así es cómo se agrega un nuevo valor
echo var_dump($arrNuevo)."<br>"; //Y ahora aquí vemos el arreglo con los datos que ya estaban, más el nuevo dato que se agregó (10)
//pero el valor que se agregó se colocó hasta el final del arreglo	

echo "<br><strong>Agregar al inicio</strong><br>";
echo var_dump($arrNuevo)."<br>";
array_unshift($arrNuevo, 20); //Aquí también se está agregando un nuevo valor, pero en este caso el valor se está colocando al principio del arregl
echo var_dump($arrNuevo)."<br>";
    
echo "<br><strong>Eliminar un elemento</strong><br>";
unset($arrNuevo[4]); //Se elimina el dato que esté en la posición 4, hay que recordar que los arreglos empiezan desde la posición 0
echo var_dump($arrNuevo)."<br>";

echo "<br><strong>Conteo de elementos</strong><br>";
echo count($arrNuevo)." son la cantidad de elementos que se encuentran dentro del arreglo<br>";

//----------------------
echo "<br><strong>Unir arreglos</strong><br>";

	$arr1=[1,2,3];
	$arr2=[4,5,6];

	$arrMerge=array_merge($arr1, $arr2);
	echo var_dump($arrMerge)."<br>"; //Aquí se está formando un super arreglo con los datos de los dos arreglos anteriores

	//--------------------------------
	echo "<br><strong>Unir arreglos tomando como base uno</strong><br>";

	$arr3=[1,2,3];
	$arr4=[4,5];


	$arrMerge=array_replace($arr3, $arr4);
	echo var_dump($arrMerge)."<br>";
	//En este caso se va a tomar el primer arreglo y se va a juntar con el segundo, pero el segundo va a sobreescribir sus datos en el primero, en las mismas posiciones, en este caso el segundo solamente tiene 2 posiciones y el primero tiene 3 posisciones, así que el valor de la 3ra posición no se va a sobreescribir
	
	//--------------------------------
	echo "<br><strong>Ordenar arreglos ascendentes</strong><br>";
	sort($arrMerge);
	echo var_dump($arrMerge)."<br>";

	//--------------------------------
	echo "<br><strong>Ordenar arreglos descendentes</strong><br>";
	rsort($arrMerge);
	echo var_dump($arrMerge)."<br>";

//--------------------------------
	echo "<br><strong>Voltear un arreglo</strong><br>";
	$arr1=[1,"b",3,"a"];
	$arrAlReverso=array_reverse($arr1);
	echo var_dump($arr1)."<br>";
	echo var_dump($arrAlReverso)."<br>";
	
//--------------------------------
	echo "<br><strong>Verificar si se encuentra un elemento</strong><br>";
	$arr1=[1,"b",3,"a"];
	if (in_array(100, $arr1)) { //Aquí se está buscando que el valor "100" se encuentre dentro del arreglo, pero como no es así, te va a imprimir que no está dentro del arreglo el valor que tú estás buscando
		echo "Sí está dentro del arreglo<br>";
	}else{
		echo "No está dentro del arreglo el valor que se está buscando<br>";
	}
//--------------------------------
	echo "<br><strong>Foreach lineal</strong><br>";
	$arr1=[1,2,3,"a",34];
	foreach ($arr1 as $item) {
		echo "$item <br>";
	} //Aquí solamente se va a imprimir los datos que están dentro del arreglo, mas no te va a aparecer la posición ni el tipo de dato que es dentro del arreglo

	//--------------------------------
	echo "<br><strong>Un areglo dentro de otro arreglo</strong><br>";
	$arr1=[1,2,[4,5,6],"a",34]; //Un arreglo se está metiendo dentro de otro arreglo
	echo var_dump($arr1); //Se va a imprimir el arreglo completo
	foreach ($arr1 as $item) { //Aquí está dando cada dato del arrego a una variable(item)
		if (is_array($item)) {  //Si item es un arreglo entonces hacer...
			foreach ($item as $subitem) {
				echo "-$subitem <br>";
			}
			
		}else{ //Si el item no es arrehlo entonces se sale del arreglo y continúa su camino imprimiendo los datos del arreglo que no sean otro arreglo
			echo "$item <br>";
		}
		
	}

	//--------------------------------
	echo "<br><strong>Arreglo asociativo</strong><br>";
	$arr1=["edad"=>30,"nombre"=>"Eduardo","telefono"=>477123456];
	echo var_dump($arr1)."<br>";

	echo $arr1["nombre"]."tiene".$arr1["edad"]."años<br>";

	//--------------------------------
	echo "<br><strong>Arreglo asociativo</strong><br>";
	$arr1=[
			"edad" => 30,
			"telefonos"=>477123456,
			"nombre"=>"Eduardo"
		];
		echo var_dump($arr1)."<br>";
		echo $arr1["nombre"]." tiene ".$arr1["edad"]." años <br>";
	//--------------------------------
	echo "<br><strong>Foreach asociativo</strong><br>";
	foreach ($arr1 as $key => $item) {
		echo "$key - $item<br>";
	}
?>