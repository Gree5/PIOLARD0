<?php

class VentasController {
    // Método para redirigir a las vistas
    public function menu() {
        $this->render('menu/menu');
    }
    public function calificacionConductor() {
        $this->render('menu/calificacionConduc');
    }

    public function conductores() {
        $this->render('menu/conductores');
    }
    public function historial() {
        $this->render('menu/historial');
    }
    public function reguistroconductores() {
        $this->render('menu/reguistroConduc');
    }
    public function registro() {
        $this->render('menu/reguistro');
    }
    

    private function render($view) {
        $file = '../Views/' . $view . '.php';

        if (file_exists($file)) {
            include $file;
        } else {
            echo "Vista $file no encontrada";
        }
    }
}
?>
