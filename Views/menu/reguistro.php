<?php
// This is your main page file, e.g., index.php
include __DIR__ . '/../taxi.php';  // Includes header content
?>
<!-- trabaja aqui -->
<div class="container">
            <h2>Registro de Usuario - PIOLARDO</h2>
            <form action="register.php" method="post">
                <label for="nombre">Nombre Completo:</label>
                <input type="text" id="nombre" name="nombre" required>
    
                <label for="email">Correo Electrónico:</label>
                <input type="email" id="email" name="email" required>
    
                <label for="contrasena">Contraseña:</label>
                <input type="password" id="contrasena" name="contrasena" required>
    
                <label for="telefono">Número de Teléfono:</label>
                <input type="tel" id="telefono" name="telefono" required>
    
                <button type="submit">Registrar</button>
                <button type="button" class="cancel-button" onclick="window.location.href='/';">Cancelar</button>
            </form>

<?php
include __DIR__ . '/../footer.php';  // Includes header content
?>