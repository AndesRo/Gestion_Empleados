<?php
require '../config/config.php';

$result = $conn->query("SELECT * FROM RESERVA");

if ($result->num_rows > 0) {
    echo "<h2>Lista de Reservas</h2>";
    echo "<table border='1'>";
    echo "<tr><th>ID Reserva</th><th>ID Cliente</th><th>Fecha Reserva</th><th>ID Vuelo</th><th>ID Hotel</th></tr>";

    while ($row = $result->fetch_assoc()) {
        echo "<tr>";
        echo "<td>" . $row['id_reserva'] . "</td>";
        echo "<td>" . $row['id_cliente'] . "</td>";
        echo "<td>" . $row['fecha_reserva'] . "</td>";
        echo "<td>" . $row['id_vuelo'] . "</td>";
        echo "<td>" . $row['id_hotel'] . "</td>";
        echo "</tr>";
    }

    echo "</table>";
} else {
    echo "No hay reservas registradas.";
}

$conn->close();

