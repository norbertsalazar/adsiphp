<?php
define("IVA", 19);
$cantidad_producto= 15;
$valor_unitario= 43000;


echo "<br>";
$valor_sin_iva= $cantidad_producto * $valor_unitario;
echo "El valor de la compra sin iva es  : " .$valor_sin_iva;
echo "<br>";
$valor_iva = IVA * $valor_sin_iva/100;
echo "El valor del iva es : " .$valor_iva;
echo "<br>";
$total_mas_iva = $valor_sin_iva + $valor_iva;
echo "El valor total es : " .$total_mas_iva;

