<?php
define("ALUMNO", "Norberto Salazar");
define("MATERIA", "INGLES");
$nota1 = 0.15;
$nota2 = 0.20;
$nota3 = 0.25;
$nota4 = 0.40;
echo "<br>";
$nota_1= rand(1,5);
echo "Tu primera nota fue: " .$nota_1 ." ";
$rnota1 = $nota_1 * $nota1;
echo "Tu tu promedio fue: " .$rnota1;
echo "<br>";
$nota_2= rand(1,5);
echo "Tu segunda nota fue: " .$nota_2 ." ";
$rnota2 = $nota_2 * $nota2;
echo "Tu tu promedio fue: " .$rnota2;
echo "<br>";
$nota_3= rand(1,5);
echo "Tu tercera nota fue: " .$nota_3 ." ";
$rnota3 = $nota_3 * $nota3;
echo "Tu tu promedio fue: " .$rnota3;
echo "<br>";
$nota_4= rand(1,5);
echo "Tu cuarta nota fue: " .$nota_4 ." ";
$rnota4 = $nota_4 * $nota4;
echo "Tu tu promedio fue: " .$rnota4;
echo "<br>";

$suma_porcentajes = $rnota1+ $rnota2 + $rnota3 + $rnota4;

echo "El Alumno  " .ALUMNO ." tiene el siguiente promedio de nota : " .$suma_porcentajes ." en la clase de  " .MATERIA ;