<?php
session_start();

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $package = $_POST['package'];
    $price = $_POST['price'];

    if (!isset($_SESSION['cart'])) {
        $_SESSION['cart'] = [];
    }

    // Agregar el paquete al carrito
    $_SESSION['cart'][] = ['package' => $package, 'price' => $price];

    // Redirigir de nuevo a la página de inicio o a otra página
    header('Location: index.php');
    exit();
}

