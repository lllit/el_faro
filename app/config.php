<?php

$scriptDir = str_replace('\\', '/', dirname($_SERVER['SCRIPT_NAME']));
$folderPath = $scriptDir;

if (strpos($folderPath, '/public') !== false) {
    $folderPath = str_replace('/public', '', $folderPath);
}


$urlPath = str_replace($folderPath, '', $_SERVER['REQUEST_URI']); // Elimina el directorio base.
$url = trim($urlPath, '/'); // Limpia los slashes innecesarios.



define('URL', $url ?: 'page/home'); // Usa 'page/home' como predeterminado si está vacío
define('URL_PATH', $folderPath ?: '/');

// Depuración para verificar valores
error_log("FolderPath calculado: $folderPath");
error_log("URL calculado: $url");
error_log("URL_PATH definido: " . URL_PATH);




//echo $folderPath
?>