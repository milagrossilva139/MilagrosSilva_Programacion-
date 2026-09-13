<?php

$cadena_texto="hola mundo php";

#cuenta cuantos caracteres tiene una cadena de texto
$longitud=strlen($cadena_texto);
echo $cadena_texto ." tiene ".$longitud ." caracteres <br>";

#cuenta cuantos palabras tiene una cadena de texto
$palabras=str_word_count($cadena_texto);
echo $cadena_texto ." tiene ". $palabras ." palabras <br>";