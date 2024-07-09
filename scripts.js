// scripts.js

document.addEventListener('DOMContentLoaded', () => {
    // Función para mostrar notificaciones ficticias cada 5 segundos
    function generateFakeNotifications() {
        const messages = [
            "Oferta: 20% de descuento en el Paquete Isla Margarita",
            "Nuevo: Paquete Buenos Aires disponible",
            "Última oportunidad: Reserva tu Paquete Torres del Paine",
            "Promoción: 2x1 en tours por guadalajara Mexico"
        ];

        setInterval(() => {
            const randomMessage = messages[Math.floor(Math.random() * messages.length)];
            showNotification(randomMessage);
        }, 5000); // Intervalo de notificaciones cada 5 segundos
    }

    generateFakeNotifications();
});

// Función para agregar elementos al carrito
function addToCart(packageName, price) {
    const cart = JSON.parse(localStorage.getItem('cart')) || [];
    cart.push({ packageName, price });
    localStorage.setItem('cart', JSON.stringify(cart));
    showNotification(`Agregado al carrito: ${packageName}`);
}

// Función para mostrar notificaciones con animación
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
