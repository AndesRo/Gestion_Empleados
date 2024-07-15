<?php
session_start();
require '../config/config.php';

function showNotificationScript($type, $title, $text) {
    echo "<script>
        Swal.fire({
            icon: '$type',
            title: '$title',
            text: '$text',
            showConfirmButton: false,
            timer: 3000
        });
    </script>";
}

if (!empty($_SESSION['carrito'])) {
    foreach ($_SESSION['carrito'] as $item) {
        if ($item['tipo'] == 'vuelo') {
            $id_cliente = 1;  // Asume un cliente por defecto
            $fecha_reserva = date('Y-m-d');
            $id_vuelo = $item['id_vuelo'];
            $id_hotel = null;
            $sql = "INSERT INTO RESERVA (id_cliente, fecha_reserva, id_vuelo, id_hotel) 
                    VALUES ($id_cliente, '$fecha_reserva', $id_vuelo, NULL)";
        } else {
            $id_cliente = 1;  // Asume un cliente por defecto
            $fecha_reserva = date('Y-m-d');
            $id_vuelo = null;
            $id_hotel = $item['id_hotel'];
            $sql = "INSERT INTO RESERVA (id_cliente, fecha_reserva, id_vuelo, id_hotel) 
                    VALUES ($id_cliente, '$fecha_reserva', NULL, $id_hotel)";
        }

        if ($conn->query($sql) === TRUE) {
            showNotificationScript('success', 'Reserva exitosa', 'Tu reserva se ha realizado con éxito.');
        } else {
            showNotificationScript('error', 'Error', 'Hubo un problema con tu reserva. Por favor, intenta nuevamente.');
        }
    }
    unset($_SESSION['carrito']);
} else {
    showNotificationScript('info', 'Carrito vacío', 'No hay artículos en el carrito.');
}

$conn->close();
?>
<a href="../public/index.html">Volver</a>
