<?php

// Obtener la URL solicitada y limpiarla
$url = isset($_GET['url']) ? rtrim($_GET['url'], '/') : '';

// Dividir la URL en partes
$parts = explode('/', $url);

// Configurar el controlador y la acción predeterminados
$controllerName = 'VentasController';
$actionName = 'index';

// Verificar si se especifica un controlador en la URL
if (isset($parts[0]) && !empty($parts[0])) {
    $controllerName = ucfirst($parts[0]) . 'Controller';
}

// Verificar si se especifica una acción en la URL
if (isset($parts[1]) && !empty($parts[1])) {
    $actionName = $parts[1];
}


// Configurar la ruta del controlador
$controllerPath = '../Controllers/ventas/' . $controllerName . '.php';

// Verificar si el archivo del controlador existe
if (file_exists($controllerPath)) {
    require_once $controllerPath;
    $controller = new $controllerName();
    
    // Verificar si el método existe en el controlador
    if (method_exists($controller, $actionName)) {
        $controller->$actionName();
    } else {
        echo "Método $actionName no encontrado en $controllerName";
    }
} else {
    echo "Controlador $controllerName no encontrado";
}
?>
