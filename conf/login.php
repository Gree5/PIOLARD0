<?php
session_start();
include 'databsae.php'; // Archivo que contiene la configuración de la base de datos
$db_host = 'localhost';
$db_user = 'root';
$db_password = '';
$db_name = 'piolardo';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $correo = $_POST['mail_admin'];
    $contrasena = $_POST['pass_admin'];

    // Conectar a la base de datos
    $conn = new mysqli($db_host, $db_user, $db_password, $db_name);

    // Verificar la conexión
    if ($conn->connect_error) {
        die("Conexión fallida: " . $conn->connect_error);
    }

    // Preparar la consulta
    $stmt = $conn->prepare("SELECT id_admin, contrasena FROM admins WHERE correo = ?");
    $stmt->bind_param("s", $correo);
    $stmt->execute();
    $stmt->store_result();
    $stmt->bind_result($id_admin, $stored_password);
    $stmt->fetch();

    // Verificar la contraseña

    if ($stmt->num_rows > 0 && $contrasena === $stored_password) {
        // Guardar el usuario en la sesión
        $_SESSION['id_admin'] = $id_admin;
        $_SESSION['correo'] = $correo;
        header("Location: ../ventas/menu"); // Redirigir a la página de administración
        exit();
    } else {
        echo "Correo o contraseña incorrectos";
    }

    $stmt->close();
    $conn->close();
}
?>
