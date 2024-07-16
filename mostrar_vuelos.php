<?php
require '../config/config.php';

$result = $conn->query("SELECT * FROM VUELO");

if ($result->num_rows > 0) {
    echo "<h2>Lista de Vuelos</h2>";
    echo "<table border='1'>";
    echo "<tr><th>Origen</th><th>Destino</th><th>Fecha</th><th>Plazas Disponibles</th><th>Precio</th><th>Agregar al Carrito</th></tr>";

    while ($row = $result->fetch_assoc()) {
        echo "<tr>";
        echo "<td>" . $row['origen'] . "</td>";
        echo "<td>" . $row['destino'] . "</td>";
        echo "<td>" . $row['fecha'] . "</td>";
        echo "<td>" . $row['plazas_disponibles'] . "</td>";
        echo "<td>" . $row['precio'] . "</td>";
        echo "<td><form action='agregar_carrito.php' method='post'>
                  <input type='hidden' name='tipo' value='vuelo'>
                  <input type='hidden' name='id' value='" . $row['id_vuelo'] . "'>
                  <input type='submit' value='Agregar'>
              </form></td>";
        echo "</tr>";
    }

    echo "</table>";
} else {
    echo "No hay vuelos disponibles.";
}

$conn->close();
?>
<a href="../public/index.html">Volver</a>
