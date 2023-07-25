<?php
// Iniciar sesión 
session_start();

// Conexión a la base de datos (reemplaza los valores con los de tu base de datos)
$servername = "localhost";
$username = "kiraconl";
$password = "paladin22";
$dbname = "vuelos argentina";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Error al conectar a la base de datos: " . $conn->connect_error);
}

// Obtener las credenciales ingresadas por el usuario
$nombreUsuario = $_POST['nombre_usuario'];
$contrasena = $_POST['contrasena'];

// Consulta a la base de datos para verificar las credenciales
$sql = "SELECT * FROM usuarios WHERE nombre_usuario = '$nombreUsuario' AND contrasena = '$contrasena'";
$result = $conn->query($sql);

if ($result->num_rows == 1) {
    // Inicio de sesión exitoso, guardar el nombre de usuario en la sesión
    $_SESSION['nombre_usuario'] = $nombreUsuario;

    // Redireccionar al usuario a la página de inicio
    header('Location: ../index.php');
    exit();
} else {
    // Credenciales incorrectas, mostrar mensaje de error o redireccionar al formulario de inicio de sesión nuevamente
    echo "Nombre de usuario o contraseña incorrectos.";
}
?>
