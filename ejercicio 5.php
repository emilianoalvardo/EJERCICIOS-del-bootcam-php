<?php

for ($i = 1; $i <= 5; $i++) {
    echo "¡Hola!\n";
    echo "¡Bienvenido Soldado!\n";
}

$x=1;
while ($x <= 3){
    echo "Entrenando soldado $x<br>";
    $x++;
}

$armas = ["Espada", "Arco", " Lanza"];
foreach ($armas as $arma) {
    echo "Arma disponible: $arma<br>";
}

// Mini reto
for ($i = 1; $i <= 10; $i++) {
    echo $i . "\n";
}


?>
