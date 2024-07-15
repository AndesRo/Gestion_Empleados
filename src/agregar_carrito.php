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

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $tipo = $_POST['tipo'];
    $id = $_POST['id'];
    
    if (!isset($_SESSION['carrito'])) {
        $_SESSION['carrito'] = [];
    }

    if ($tipo == 'vuelo') {
        $sql = "SELECT * FROM VUELO WHERE id_vuelo = $id";
    } else {
        $sql = "SELECT * FROM HOTEL WHERE id_hotel = $id";
    }

    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        $item = $result->fetch_assoc();
        $item['tipo'] = $tipo;
        $_SESSION['carrito'][] = $item;
        showNotificationScript('success', 'Artículo agregado', 'El artículo ha sido agregado al carrito.');
    } else {
        showNotificationScript('error', 'Error', 'No se pudo agregar el artículo al carrito.');
    }
}

header("Location: ../public/index.html");
exit();

