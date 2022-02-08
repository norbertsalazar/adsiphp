<?php


define("DOLLAR", 4000);

$numero_aleatorio0= rand(1,10);
echo "El numero aleatorio es " .$numero_aleatorio0;

$operacion = DOLLAR * $numero_aleatorio0;
echo "<br>";
echo "los dolares en pesos son equivalente a: " .$operacion;