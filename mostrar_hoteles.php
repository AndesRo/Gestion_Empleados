<?php
require '../config/config.php';

$result = $conn->query("SELECT * FROM HOTEL");

if ($result->num_rows > 0) {
    echo "<h2>Lista de Hoteles</h2>";
    echo "<table border='1'>";
    echo "<tr><th>Nombre</th><th>Ubicación</th><th>Habitaciones Disponibles</th><th>Tarifa por Noche</th><th>Agregar al Carrito</th></tr>";

    while ($row = $result->fetch_assoc()) {
        echo "<tr>";
        echo "<td>" . $row['nombre'] . "</td>";
        echo "<td>" . $row['ubicación'] . "</td>";
        echo "<td>" . $row['habitaciones_disponibles'] . "</td>";
        echo "<td>" . $row['tarifa_noche'] . "</td>";
        echo "<td><form action='agregar_carrito.php' method='post'>
                  <input type='hidden' name='tipo' value='hotel'>
                  <input type='hidden' name='id' value='" . $row['id_hotel'] . "'>
                  <input type='submit' value='Agregar'>
              </form></td>";
        echo "</tr>";
    }

    echo "</table>";
} else {
    echo "No hay hoteles disponibles.";
}

$conn->close();
?>
<a href="../public/index.html">Volver</a>
