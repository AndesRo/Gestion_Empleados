<?php
require '../config/config.php';

$nombre = $_POST['nombre'];
$ubicacion = $_POST['ubicacion'];
$habitaciones_disponibles = $_POST['habitaciones_disponibles'];
$tarifa_noche = $_POST['tarifa_noche'];

$sql = "INSERT INTO HOTEL (nombre, ubicación, habitaciones_disponibles, tarifa_noche) 
        VALUES ('$nombre', '$ubicacion', $habitaciones_disponibles, $tarifa_noche)";

if ($conn->query($sql) === TRUE) {
    echo "Hotel registrado exitosamente";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();

