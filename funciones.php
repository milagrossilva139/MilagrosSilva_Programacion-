<?php

#primer ejemplo
function saludo($nombre){
    return "Hola, mi nombre es:$nombre". "<br>";
}
echo saludo("Alma");

$usuario="Vicky";
echo saludo($usuario );

echo saludo($nombre="Mili");

echo "<br>";

#segundo ejercicio
function promedio_alumno($nota1, $noat2, $nota3){
    $promedio=($nota1+$noat2+$nota3)/3;
    return $promedio;
}

echo "El promedio es: ". promedio_alumno(7,9,6);
echo "<br>";
echo "El promedio es: ". promedio_alumno(7,1,4);
echo "<br>";
echo "El promedio es: ". promedio_alumno(3,7,5);
echo "<br>";
echo "El promedio es: ". promedio_alumno(2,9,10);
echo "<br>";
echo "El promedio es: ". promedio_alumno(8,10,6);