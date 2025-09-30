<?php
$armas = ["Espada", "Arco", "Lanza"];
echo "Arma 1: " . $armas[0] . "<br>";

// Arreglo asociativo
$soldado = [
    "nombre" => "Emiliano",
    "rango" => "General",
];
echo "Nombre: " . $soldado["nombre"] . "<br>";

$peloton = [
    [
        "nombre" => "Luis", "arma" => "Espada",
    ],
    [
        "nombre" => "Ana", "arma" => "Arco",
    ],
];
echo "Primer soldado: " . $peloton[0]["nombre"] . "<br>";
$soldados = [
    ["nombre" => "Carlos", "rango" => "Teniente"],
    ["nombre" => "María", "rango" => "Sargento"],
    ["nombre" => "Jorge", "rango" => "Coronel"],
    ["nombre" => "Lucía", "rango" => "Capitana"],
    ["nombre" => "Raúl", "rango" => "Soldado"],
];

foreach ($soldados as $s) {
    echo "Nombre: " . $s["nombre"] . " - Rango: " . $s["rango"] . "<br>";
}
?>
