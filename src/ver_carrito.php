<?php
session_start();
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Carrito de Compras</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <h2>Carrito de Compras</h2>
    <?php if (!empty($_SESSION['carrito'])): ?>
        <table border="1">
            <tr>
                <th>Tipo</th>
                <th>Detalle</th>
                <th>Precio</th>
            </tr>
            <?php foreach ($_SESSION['carrito'] as $item): ?>
                <tr>
                    <td><?php echo ucfirst($item['tipo']); ?></td>
                    <td><?php echo $item['tipo'] == 'vuelo' ? $item['origen'] . " a " . $item['destino'] : $item['nombre']; ?></td>
                    <td><?php echo $item['precio'] ?? $item['tarifa_noche']; ?></td>
                </tr>
            <?php endforeach; ?>
        </table>
        <form action="procesar_compra.php" method="post">
            <input type="submit" value="Procesar Compra">
        </form>
    <?php else: ?>
        <p>El carrito está vacío.</p>
    <?php endif; ?>
    <a href="../public/index.html">Volver</a>
</body>
</html>
