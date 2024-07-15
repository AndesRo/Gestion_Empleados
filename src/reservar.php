<?php
include '../config/config.php';

$id_cliente = $_POST['id_cliente'];
$id_vuelo = $_POST['id_vuelo'];
$id_hotel = $_POST['id_hotel'];
$fecha_reserva = date('Y-m-d');

$sql = "INSERT INTO RESERVA (id_cliente, fecha_reserva, id_vuelo, id_hotel) VALUES ('$id_cliente', '$fecha_reserva', '$id_vuelo', '$id_hotel')";

if ($conn->query($sql) === TRUE) {
    echo "Reserva realizada con éxito.";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();

