<?php
    // Construir una ruta absoluta hacia autoload.php
    $autoloadPath = realpath(__DIR__ . '/../app/autoload.php');

    // Verificar que el archivo realmente existe
    if (!file_exists($autoloadPath)) {
        throw new Exception("El archivo autoload.php no se encuentra en: $autoloadPath");
    }

    require_once $autoloadPath;

    
    $router = new Router();
    $router->run();