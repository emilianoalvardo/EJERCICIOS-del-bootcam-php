<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nombre = $_POST['nombre'];
    $edad = $_POST['edad'];
    $arma = $_POST['arma'];

    echo "Soldado $nombre, edad $edad, con arma favorita: $arma registrado.";
} else {
    ?>
    <form method="POST">
        Nombre: <input type="text" name="nombre"><br>
        Edad: <input type="number" name="edad"><br>
        Arma favorita: <input type="text" name="arma"><br>
        <input type="submit" value="Enviar">
    </form>
    <?php
}
?>
