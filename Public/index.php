<?php
    //require_once __DIR__ . '/../App/autoload.php';
    set_include_path(__DIR__ . '/../App/');
    require_once 'autoload.php';

    
    $router = new Router();
    $router->run();