USE AGENCIA;

-- Insertar datos ficticios en la tabla VUELO
INSERT INTO VUELO (origen, destino, fecha, plazas_disponibles, precio) VALUES
('Santiago', 'Buenos Aires', '2024-07-20', 100, 500),
('Santiago', 'Lima', '2024-07-21', 100, 300),
('Santiago', 'Sao Paulo', '2024-07-22', 100, 400),
('Buenos Aires', 'Santiago', '2024-07-23', 100, 500),
('Lima', 'Santiago', '2024-07-24', 100, 300),
('Sao Paulo', 'Santiago', '2024-07-25', 100, 400);

-- Insertar datos ficticios en la tabla HOTEL
INSERT INTO HOTEL (nombre, ubicación, habitaciones_disponibles, tarifa_noche) VALUES
('Hotel Plaza', 'Santiago', 50, 200),
('Hotel Central', 'Buenos Aires', 50, 150),
('Hotel Lima', 'Lima', 50, 180),
('Hotel Paulista', 'Sao Paulo', 50, 220),
('Hotel Andino', 'Santiago', 50, 210),
('Hotel Mar', 'Valparaíso', 50, 190);

-- Insertar 10 reservas en la tabla RESERVA
INSERT INTO RESERVA (id_cliente, fecha_reserva, id_vuelo, id_hotel) VALUES
(1, '2024-07-14', 1, 1),
(2, '2024-07-15', 2, 2),
(3, '2024-07-16', 3, 3),
(4, '2024-07-17', 4, 4),
(5, '2024-07-18', 5, 5),
(6, '2024-07-19', 6, 6),
(7, '2024-07-20', 1, 1),
(8, '2024-07-21', 2, 1),
(9, '2024-07-22', 3, 2),
(10, '2024-07-23', 4, 2);
