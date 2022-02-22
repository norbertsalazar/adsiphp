
<?php
define("PULGADA", 2.54);

$pulgadas = rand(1, 100);
$centimetros=$pulgadas*PULGADA;
echo 'Valor de pulgadas: ' . $centimetros . "<br/>\n";