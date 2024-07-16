<?php
require '../config/config.php';

// Consulta avanzada para obtener hoteles con más de dos reservas
$sql = "
    SELECT h.id_hotel, h.nombre, h.ubicación, COUNT(r.id_reserva) AS num_reservas
    FROM HOTEL h
    JOIN RESERVA r ON h.id_hotel = r.id_hotel
    GROUP BY h.id_hotel, h.nombre, h.ubicación
    HAVING COUNT(r.id_reserva) > 2
";

$result = $conn->query($sql);

if ($result->num_rows > 0) {
    echo "<h2>Hoteles con más de 2 Reservas</h2>";
    echo "<table border='1'>";
    echo "<tr><th>ID Hotel</th><th>Nombre</th><th>Ubicación</th><th>Número de Reservas</th></tr>";

    while ($row = $result->fetch_assoc()) {
        echo "<tr>";
        echo "<td>" . $row['id_hotel'] . "</td>";
        echo "<td>" . $row['nombre'] . "</td>";
        echo "<td>" . $row['ubicación'] . "</td>";
        echo "<td>" . $row['num_reservas'] . "</td>";
        echo "</tr>";
    }

    echo "</table>";
} else {
    echo "No hay hoteles con más de 2 reservas.";
}

$conn->close();

