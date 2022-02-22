<?php
//Algoritmo en php para saber si es par o impar
$numero = rand(1,50);
$validar = $numero%2;


if ($validar == 0) {
    
    echo "Es PAR";
}
else {
    echo "es IMPAR";
}
echo " El numero que se valido fue: " .$numero. "<br>";