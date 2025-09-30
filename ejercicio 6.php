<?php
function saludo() {
    echo "¡Bienvenido al BootCamp, soldado!<br>";
}

function disparar($arma) {
    echo "Disparando con $arma<br>";
}

function sumar($a, $b) {
    return $a + $b;
}

function presentacion($nombre, $rango) {
    echo "Soy $nombre, rango $rango, listo para la batalla.<br>";
    echo "¡Honor y gloria, adelante!<br>";
}

// Llamadas a las funciones
saludo();
presentacion("Emiliano", "Capitán");
disparar("rifle de plasma");

echo "La suma es: " . sumar(10, 15);
?>
