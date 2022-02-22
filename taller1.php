<?php
//diseñar un login, 
//manejar cuatro variables 2 constantes usurio y contraseña, 
define("USER", "ADMIN");
define("PASSWORD", "KILO.PEs@");

$usuario = "pepe";
$password = "3050";

if ($usuario == USER and $password == PASSWORD ) {
    echo " Bienvenido al sistema" ."<br>";
}
else {
    echo "⚡ Intenta nuevamente ⚡";
}