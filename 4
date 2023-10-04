<?php
$nombre = "";
$edad = "";
$errores = [];


if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nombre = $_POST["nombre"];
    $edad = $_POST["edad"];


    if (empty($nombre)) {
        $errores[] = "El campo nombre no puede estar vacío.";
    } elseif (strlen($nombre) < 3) {
        $errores[] = "El nombre debe tener al menos 3 caracteres.";
    }


    if (!is_numeric($edad)) {
        $errores[] = "La edad debe ser un número.";
    } elseif ($edad < 1 || $edad > 120) {
        $errores[] = "La edad debe estar entre 1 y 120.";
    }


    if (empty($errores)) {
        echo "¡Formulario enviado con éxito!";
    } else {
        foreach ($errores as $error) {
            echo $error . "<br>";
        }
    }
}
?>

<form action="" method="post">
    <label for="nombre">Nombre:</label>
    <input type="text" name="nombre" id="nombre" value="<?php echo htmlspecialchars($nombre); ?>"><br><br>
    
    <label for="edad">Edad:</label>
    <input type="text" name="edad" id="edad" value="<?php echo htmlspecialchars($edad); ?>"><br><br>

    <input type="submit" value="Enviar">
</form>

