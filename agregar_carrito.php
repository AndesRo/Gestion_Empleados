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

    $sql = $tipo == 'vuelo' ? "SELECT * FROM VUELO WHERE id_vuelo = ?" : "SELECT * FROM HOTEL WHERE id_hotel = ?";
    
    if ($stmt = $conn->prepare($sql)) {
        $stmt->bind_param("i", $id);
        $stmt->execute();
        $result = $stmt->get_result();

        if ($result->num_rows > 0) {
            $item = $result->fetch_assoc();
            $item['tipo'] = $tipo;
            $_SESSION['carrito'][] = $item;
            showNotificationScript('success', 'Artículo agregado', 'El artículo ha sido agregado al carrito.');
        } else {
            showNotificationScript('error', 'Error', 'No se pudo agregar el artículo al carrito.');
        }
        
        $stmt->close();
    } else {
        showNotificationScript('error', 'Error', 'Error en la consulta de base de datos.');
    }
}

header("Location: ../public/index.html");
exit();
