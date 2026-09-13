<?php 

$fecha1="2021/11/29";
$fecha2="2021-11-30";
$numeros="Uno Dos Tres Cuatro Cinco Sies Siete";

/*delimitador="/", "-", " "(el caracter con el que nosotros queremos separar los valores)
string="$fecha1", "$fecha2", "$numeros"(el string que usamos)
limitador= limitamos cuentos valores podemos dividir la cadena de texto(valor positivo: empieza desde adelante), (valor negativo: empieza desde el ultimo, todos menos ese)
*/

$array_fecha=explode("/", $fecha1);
echo $array_fecha[2]. "<br>";

$array_fecha=explode("-", $fecha2);
echo $array_fecha[1]. "<br>";

$array_numeros=explode(" ", $numeros, 3);
echo $array_numeros[2]. "<br>";

$array_numeros=explode(" ", $numeros, -1);
echo $array_numeros[5]. "<br>";