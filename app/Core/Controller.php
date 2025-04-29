<?php
class Controller
{
    protected function render($path, $parameters = [], $layout = '')
    {
        //ob_start();
        //require_once __DIR__ . '/../Views/' . $path . '.view.php';
        //$content = ob_get_clean();
        //require_once __DIR__ . '/../Views/layouts/' . $layout . '.layout.php';


        // Rutas absolutas para vistas y layouts
        $viewPath = __DIR__ . '/../Views/' . $path . '.view.php';
        $layoutPath = __DIR__ . '/../Views/layouts/' . $layout . '.layout.php';

        // Verificar si la vista existe
        if (!file_exists($viewPath)) {
            throw new Exception("La vista '{$path}.view.php' no fue encontrada en '{$viewPath}'.");
        }

        ob_start();
        extract($parameters); // Extraer parámetros para usarlos en la vista
        require_once $viewPath;
        $content = ob_get_clean();

        // Verificar si el layout existe
        if (!empty($layout) && file_exists($layoutPath)) {
            require_once $layoutPath;
        } else {
            echo $content; // Renderizar solo el contenido si no hay un layout
        }
        
    }
}
