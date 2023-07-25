// Código JavaScript para manejar la búsqueda de vuelo y el pago

function mostrarOpcionesPago(event) {
    event.preventDefault(); // Detener el envío del formulario

    var origen = document.getElementById("origen").value;
    var destino = document.getElementById("destino").value;
    var fechaSeleccionada = new Date(document.getElementById("fecha").value);
    var fechaActual = new Date();

    if (fechaSeleccionada < fechaActual) {
        var mensaje = document.getElementById("mensaje");
        mensaje.innerHTML = "El vuelo es inexistente porque la fecha seleccionada ya ha pasado.";
        mensaje.style.color = "red";

        var opcionesPago = document.getElementById("opcionesPago");
        opcionesPago.style.display = "none";
    } else {
        var mensaje = document.getElementById("mensaje");
        mensaje.innerHTML = `Existe un vuelo desde ${origen} hasta ${destino} el ${fechaSeleccionada.toLocaleDateString("es-AR")}.`;
        mensaje.style.color = "green";

        var opcionesPago = document.getElementById("opcionesPago");
        opcionesPago.style.display = "block";
    }

    return false;
}

function mostrarMensajePago() {
    var opcionesPago = document.getElementById("opcionesPago");
    opcionesPago.style.display = "none";

    var confirmacionPago = document.getElementById("confirmacionPago");
    confirmacionPago.style.display = "block";
}

function enviarBoletos() {
    var email = document.getElementById("email").value;

    // Código para enviar los boletos por correo electrónico
    // Aquí puedes utilizar PHP y la función mail(), o una librería como PHPMailer
    // Por ahora, vamos a mostrar un mensaje de alerta que los boletos se han enviado
    alert("¡Los boletos han sido enviados a " + email + "!");
}

document.querySelector('.formvuelo').addEventListener('submit', function (event) {
    event.preventDefault(); // Detiene el envío normal del formulario

    // Envía el formulario utilizando Fetch API o XMLHttpRequest
    fetch('registrar_usuario.php', {
        method: 'POST',
        body: new FormData(document.querySelector('.formvuelo'))
    })
    .then(response => response.json())
    .then(data => {
        // Mostrar el mensaje de bienvenida en el cartelito
        const cartelito = document.getElementById('cartelito');
        cartelito.textContent = data.message;
        cartelito.style.display = 'block';

        // Redireccionar al usuario a la página de inicio después de unos segundos
        setTimeout(function() {
            window.location.href = 'index.html'; // Cambia 'index.html' por el nombre de tu página de inicio
        }, 3000); // Redirigir después de 3 segundos (puedes ajustar este tiempo a tu preferencia)
    })
    .catch(error => console.error('Error al enviar el formulario:', error));
});

function mostrarConfirmacion() {
    // Ocultar el formulario de pago y mostrar la confirmación
    document.getElementById("opcionesPago").style.display = "none";
    document.getElementById("confirmacionPago").style.display = "block";
}

// Agregar el evento de clic al elemento "Cerrar sesión"
const cerrarSesion = document.getElementById('cerrarSesion');
if (cerrarSesion) {
    cerrarSesion.addEventListener('click', function (event) {
        event.preventDefault();
        // Hacer una petición AJAX o redireccionar a un script PHP que maneje el cierre de sesión
        // Por ejemplo:
        fetch('cerrar_sesion.php')
            .then(response => response.json())
            .then(data => {
                // Verificar si el cierre de sesión fue exitoso y redirigir a la página de inicio
                if (data.success) {
                    window.location.href = 'index.php';
                } else {
                    alert('Ha ocurrido un error al cerrar la sesión');
                }
            })
            .catch(error => {
                console.error('Error al cerrar la sesión:', error);
                alert('Ha ocurrido un error al cerrar la sesión');
            });
    });
}