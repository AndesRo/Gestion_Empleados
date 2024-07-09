// scripts.js

document.addEventListener('DOMContentLoaded', () => {
    function showNotification(message) {
        const notificationContainer = document.getElementById('notification-container');
        const notification = document.createElement('div');
        notification.classList.add('notification');
        notification.textContent = message;

        notificationContainer.appendChild(notification);

        // Quitar la notificación después de 5 segundos
        setTimeout(() => {
            notification.remove();
        }, 5000);
    }

    // Función para mostrar notificaciones ficticias cada 10 segundos
    function generateFakeNotifications() {
        const messages = [
            "Oferta: 20% de descuento en el Paquete Isla Margarita",
            "Nuevo: Paquete A ciudad de Mexico disponible",
            "Última oportunidad: Reserva tu Paquete Torres del Paine ",
            "¡Promoción: 2x1 en tours en ciudad de Buenos Aires!"
        ];

        setInterval(() => {
            const randomMessage = messages[Math.floor(Math.random() * messages.length)];
            showNotification(randomMessage);
        }, 5000);
    }

    generateFakeNotifications();
});
