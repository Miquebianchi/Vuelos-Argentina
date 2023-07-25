<?php require_once("../templates/header.php") ?>
<head>
<title>Registro de Usuario</title>
<link rel="stylesheet" href="../css/style.css">
</head>
<body>
        <div class="container">
<h2>Inicio de Sesión</h2>
    <form method="POST" action="validar_login.php">
        <label for="nombre_usuario">Nombre de usuario:</label>
        <input type="text" id="nombre_usuario" name="nombre_usuario" required>
        <br>
        <label for="contrasena">Contraseña:</label>
        <input type="password" id="contrasena" name="contrasena" required>
        <br>
        <input type="submit" value="Iniciar Sesión">
    </form>
<h2>Registro de Usuario</h2>
<form action="registrar_usuario.php" method="POST">
    <label for="nombre">Nombre:</label>
        <input type="text" id="nombre" name="nombre" required>
    
    <label for="nombre_usuario">Nombre de usuario:</label>
        <input type="text" id="nombre_usuario" name="nombre_usuario" required>
    
    <label for="email">Email:</label>
        <input type="email" id="email" name="email" required>
    
    <label for="contrasena">Contraseña:</label>
        <input type="password" id="contrasena" name="contrasena" required>

    <input type="submit" value="Registrarse">
</form>
</div>
<div class="bienvenida" id="cartelito"></div>
</body>

<?php require_once("../templates/footer.php") ?>