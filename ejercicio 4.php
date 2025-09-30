<?php
// Lista de soldados con sus puntuaciones
$soldados = [
    "Soldado A" => 85,
    "Soldado B" => 60,
    "Soldado C" => 72,
    "Soldado D" => 45,
    "Soldado E" => 90
];

// Recorremos cada soldado
foreach ($soldados as $nombre => $puntuacion) {
    echo "$nombre obtuvo una puntuación de $puntuacion. ";

    // Evaluación
    if ($puntuacion > 70) {
        echo " APRUEBA la misión.<br>";
    } else {
        echo " REPRUEBA la misión.<br>";
    }
}
?>
