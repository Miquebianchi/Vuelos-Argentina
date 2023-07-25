<?php
session_start();

if (isset($_SESSION['nombre_usuario'])) {
$nombreUsuario = $_SESSION['nombre_usuario'];
} else {
$nombreUsuario = "Usuario";
}
$url_base = "http://localhost/Vuelos Argentina/"
    ?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    <title>Proyecto Aerolineas</title>
</head>
<body>
<header>
<nav>
    <h1 class="tituloaero">Vuelos Argentinos</h1>   
    <ul class="nav">
        <li><a href="../index.php">Inicio</a></li>
        <li class="contacto">
            <a href="#">Contactos</a>
            <div class="pestaña">
                <p>Email: contacto@vuelosargentinos.com</p>
                <p>Teléfono: +54 11 1234-5678</p>
            </div>
        </li>
        <li><a href="./secciones/Usuario.php"><?php echo $nombreUsuario; ?></a></li>
    </ul>
</nav>
<script>
    // Agregar el evento de clic al elemento "Cerrar sesión"
    const cerrarSesionLink = document.getElementById('cerrarSesionLink');
    if (cerrarSesionLink) {
        cerrarSesionLink.addEventListener('click', function (event) {
            event.preventDefault();
            // Aquí puedes hacer una petición AJAX o redirigir directamente a un script PHP que maneje el cierre de sesión
            // Por ejemplo:
            window.location.href = 'index.php';
        });
    }
</script>
<script>
    const hamburguesa = document.querySelector('.hamburguesa');
    const nav = document.querySelector('.nav');

    hamburguesa.addEventListener('click', () => {
        nav.classList.toggle('mostrar-nav');
    });
</script>
</header>