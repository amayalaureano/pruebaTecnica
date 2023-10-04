<?php

$archivo = fopen("datos.txt", "r");

$sumaEdades = 0;
$cantidadPersonas = 0;

echo "Personas listadas: <br/>";

while (!feof($archivo)) { 
    $linea = fgets($archivo); 
    $datos = explode(",", $linea); 
    
    if(count($datos) == 2) { 
        $nombre = trim($datos[0]);
        $edad = trim($datos[1]);
        
        echo "Nombre: $nombre - Edad: $edad <br/>";
        
        $sumaEdades += $edad; 
        $cantidadPersonas++;
    }
}

fclose($archivo); 

if ($cantidadPersonas > 0) {
    $promedio = $sumaEdades / $cantidadPersonas;
    echo "El promedio de edad es: $promedio";
} else {
    echo "No se pudo calcular el promedio de edad.";
}


?>
