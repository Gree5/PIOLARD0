<?php
session_start();
require_once 'databsae.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = $_POST['mail_admin'];
    $password = $_POST['pass_admin'];

    try {
        
        $sql = 'SELECT * FROM Admins WHERE correo = ? AND contrasena = ?';
        $stmt = $pdo->prepare($sql);
        $stmt->execute(['correo' => $username]);

        $user = $stmt->fetch(PDO::FETCH_ASSOC);
        echo $user;
        /*if ($user && password_verify($password, $user['contrasena'])) {
            // Guardar información del usuario en la sesión
            $_SESSION['user_id'] = $user['id_admin'];
            $_SESSION['email'] = $user['correo'];

            echo 'Inicio de sesión exitoso. <a href="welcome.php">Ir a la página de bienvenida</a>';
        } else {
            echo 'Nombre de usuario o contraseña incorrectos.';
        }*/
    } catch (PDOException $e) {
        echo 'Error: ' . $e->getMessage();
    }
}
?>