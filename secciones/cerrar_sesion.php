<?php
session_start();

// Destruir la sesión
session_destroy();

// Devolver una respuesta JSON para indicar que el cierre de sesión fue exitoso
echo json_encode(array('success' => true));
exit();
?>
