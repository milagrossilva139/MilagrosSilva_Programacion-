<?php

$cadena_texto="HolA MundO";

#combierte todas las letras en minusculas
$cadena_texto=strtolower($cadena_texto); 
echo $cadena_texto ."<br>";

#combierte todas las letras en mayusculas
$cadena_texto=strtoupper($cadena_texto); 
echo $cadena_texto ."<br>";;


$cadena_texto="hola mundo";

#combierte la primera letra a mayuscula
$cadena_texto=ucfirst($cadena_texto); 
echo $cadena_texto ."<br>";

#combierte la primera letra de cada palabra en mayuscula
$cadena_texto=ucwords($cadena_texto); 
echo $cadena_texto ."<br>";