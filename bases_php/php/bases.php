<?php
//Imprimir informacion
#Esto es un comentario de una linea 
/*esto es un comentario 
multilinea
*/
//Codigo PHP va aqui
echo "Hola mundo jejejejeejej";
echo "<h1> Hola desde PHP</h1>";
echo "<p>Esto lo genera el servidor xd<p>";
//Variables
//todas las variables empiezan con $
$nombre = "Dom"; //string
$edad = "23"; //int
$activo = "true"; //boolean
$decimal = "3.14"; //float
$nulo = null; //null
echo $nombre;
echo "<br>";
echo $edad;
var_dump($edad); //muy util para depuracion en php
echo "<br>";
//concatenacion de strings
echo "Hola" .$nombre;
//operadores basics
$suma = 5 + 5;
$resta = 5 - 2;
$multi = 5 * 3;
$div = 5 / 2;
//Operadores de comparacion
$a == $b; //igual valor
$a === $b; //igual valor y tipo
$a != $b; //diferente de 
$a > $b; //mayor que
$a < $b;
//Estructuras condiciones
$edad = 10;
if ($edad >= 18){
    echo "mayor de edad";
}else {
    echo "es menorr";
}

//if /elseif / else
$nota = 8;
if ($nota >= 9){
    echo "excelente";
} elseif ($nota >= 7){
    echo "aprobado";
} else {
    echo "reprobado";
}

//Estructuras repititivas
//while
$i = 0;
while ($i <5){
    echo $i . "<br>";
    $i++;
}
echo "<br>";
//for
for ($i = 0; $i < 5; $i ++) {   
    echo "numero: $i <br>";
    }
//arreglos en php
//arrays indexado
$colores = ["rojo", "azul", "verde", "negro", "blanco"];
echo $colores[0];
//recorrer array
foreach ($colores as $color) {
    echo $color . "<br>";
}
//array asociativo
$persona = [
    "nombre" => "Dom",
    "edad" => "23",
    "ciudad" => "Guayaquil"
];
echo $persona["ciudad"];
