<?php
session_start();
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Proceder al Pago</title>
    <link rel="stylesheet" href="css/styles.css">
</head>
<body>
    <h1>Proceder al Pago</h1>
    <?php if (isset($_SESSION['cart']) && !empty($_SESSION['cart'])): ?>
        <p>Total a pagar: 
            <?php 
            $total = 0;
            foreach ($_SESSION['cart'] as $item) {
                $total += $item['price'];
            }
            echo $total;
            ?>
        </p>
        <!-- Aquí se agregarían los detalles de pago -->
        <p>Formulario de pago aquí...</p>
    <?php else: ?>
        <p>El carrito está vacío.</p>
        <a href="index.php">Volver a la página de paquetes</a>
    <?php endif; ?>
</body>
</html>
