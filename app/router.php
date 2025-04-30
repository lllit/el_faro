<?php



class Router
{
    private $controller;
    private $method;

    public function __construct()
    {
        $this->matchRoute();
    }


    public function matchRoute()
    {
        // Divide la URL en segmentos y elimina slashes innecesarios
        $url = explode('/', trim(URL, '/'));

        // Si el primer segmento es 'public', lo eliminamos
        if (!empty($url[0]) && strtolower($url[0]) === 'public') {
            array_shift($url); // Elimina el primer segmento
        }

        // Fuerza el uso de PageController para todas las rutas bajo 'page'
        if (!empty($url[0]) && strtolower($url[0]) === 'page') {
            $this->controller = 'Page'; // Siempre usa PageController
            $this->method = !empty($url[1]) ? $url[1] : 'home';
        } else {
            // Controlador y método predeterminados
            $this->controller = !empty($url[0]) ? ucfirst($url[0]) : 'Page';
            $this->method = !empty($url[1]) ? $url[1] : 'home';
        }

        // Añade el sufijo 'Controller' y genera el path del archivo
        $this->controller .= 'Controller';

        echo $this->controller ."<br>";

        $controllerPath = __DIR__ . '/controllers/' . $this->controller . '.php';
        
        echo $controllerPath;

        // Verifica si el archivo existe
        if (file_exists($controllerPath)) {
            require_once($controllerPath);
        } else {
            die("Error 404: El controlador '{$this->controller}' no fue encontrado en '{$controllerPath}'.");
        }
    }



    public function run()
    {
        if (class_exists($this->controller)) {
            $controller = new $this->controller();
            $method = $this->method;

            // Verifica si el método existe en la clase
            if (method_exists($controller, $method)) {
                $controller->$method();
            } else {
                die("Error 404: El método '{$method}' no fue encontrado en '{$this->controller}'.");
            }
        } else {
            die("Error 404: La clase '{$this->controller}' no existe.");
        }
    }
}
