<?php
session_start();
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Carrito de Compra</title>
    <link rel="stylesheet" href="css/styles.css">
</head>
<body>
    <h1>Carrito de Compra</h1>
    <?php if (isset($_SESSION['cart']) && !empty($_SESSION['cart'])): ?>
        <table>
            <tr>
                <th>Paquete</th>
                <th>Precio</th>
            </tr>
            <?php foreach ($_SESSION['cart'] as $item): ?>
                <tr>
                    <td><?php echo htmlspecialchars($item['package']); ?></td>
                    <td><?php echo htmlspecialchars($item['price']); ?></td>
                </tr>
            <?php endforeach; ?>
        </table>
        <a href="checkout.php">Proceder al Pago</a>
    <?php else: ?>
        <p>El carrito está vacío.</p>
        <a href="index.html">Volver a la página de paquetes</a>
    <?php endif; ?>
</body>
</html>
