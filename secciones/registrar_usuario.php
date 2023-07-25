<?php
// Conectar a la base de datos (reemplaza 'usuario', 'contrasena' y 'nombre_base_de_datos' con tus credenciales)
$conexion = mysqli_connect('localhost', 'kiraconl', 'paladin22', 'vuelos argentina');

// Verificar si la conexión fue exitosa
if (!$conexion) {
die('Error al conectar a la base de datos: ' . mysqli_connect_error());
}

// Obtener los datos del formulario
$nombre = $_POST['nombre'];
$nombreUsuario = $_POST['nombre_usuario'];
$email = $_POST['email'];
$contrasena = $_POST['contrasena'];

// Insertar los datos en la tabla de usuarios
$sql = "INSERT INTO usuarios (nombre_usuario, nombre, email, contrasena) VALUES ('$nombreUsuario', '$nombre', '$email', '$contrasena')";

if (mysqli_query($conexion, $sql)) {
  // Registro exitoso, mostrar mensaje de bienvenida

} else {
  // Error en el registro
echo "Error al registrar el usuario: " . mysqli_error($conexion);
}
$response = array(
    'message' => "Bienvenido(a) a Vuelos Argentina, $nombre! Tu registro ha sido exitoso. ¡Gracias por unirte a nosotros!"
);

header('Location: ../index.php');
exit();
mysqli_close($conexion);
?>
<script src="../js/script.js"></script>
