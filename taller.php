<?php
define("MANZANAS", 4200);
$descuento1 = 0.20;
$descuento2 = 0.15;
$descuento3 = 0.10;

$kilos = rand(1, 20);
$total = MANZANAS*$kilos;
if ($kilos >=10.01 ) {
    echo " $kilos kilos y tu descuento es del 20%" ."<br>";
    $descuento = $total * $descuento1;
}
elseif($kilos >=5.01 and $kilos<=10 ) {
    echo " $kilos kilos y tu descuento es del 15%" ."<br>";
    $descuento = $total * $descuento2;
}
elseif($kilos >=2.01 and $kilos<=5) {
    echo " $kilos kilos y tu descuento es del 10%" ."<br>";
    $descuento = $total * $descuento3;
}
else {
    echo " $kilos kilos, por lo tanto no tienes descuento" ."<br>";
}
$totalPago = $total - $descuento ."<br>";
echo " Tu compra fue de: " .$total."<br>". "Obtubiste un descuento de: " .$descuento."<br>". " Total a pagar es: " .$totalPago;





