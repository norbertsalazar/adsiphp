<?php
//Algoritmo en php para saber si es par o impar
$numero = rand(-3,3);
if ($numero > 0) {
    echo "El valor $numero Es POSITIVO";
}
elseif($numero <0) {
    echo "El valor $numero Es NEGATIVO";
}
else {
    echo "El valor $numero Es CERO";
}
