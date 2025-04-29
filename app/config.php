<?php
//$folderPath = str_replace('\\', '/', dirname($_SERVER['SCRIPT_NAME']));
//$folderPath = str_replace($_SERVER['DOCUMENT_ROOT'], '', str_replace('\\', '/', __DIR__));
//$folderPath = str_replace($_SERVER['DOCUMENT_ROOT'], '', str_replace('\\', '/', realpath(__DIR__ . '/../Public')));
//$folderPath = str_replace($_SERVER['DOCUMENT_ROOT'], '', str_replace('\\', '/', realpath(__DIR__ . '/../Public')));


$scriptDir = str_replace('\\', '/', dirname($_SERVER['SCRIPT_NAME']));

$folderPath = $scriptDir;

if (empty($folderPath)) {
    $folderPath = '/public'; // Usa la raíz pública en local
}

$folderPath = rtrim($folderPath, '/');

// Si la ruta contiene `/public`, ajustarla para que solo tome la base correcta
if (strpos($folderPath, '/public') !== false) {
    $folderPath = str_replace('/public', '', $folderPath);
}

$urlPath = str_replace($folderPath, '', $_SERVER['REQUEST_URI']); // Elimina el directorio base.
$url = trim($urlPath, '/'); // Limpia los slashes innecesarios.

//define('URL', $url ?: 'page/home'); // Predetermina a 'page/home' si está vacío.
//define('URL', trim(str_replace($folderPath, '', $_SERVER['REQUEST_URI']), '/') ?: 'page/home');




define('URL', $url ?: 'page/home'); // Usa 'page/home' como predeterminado si está vacío
define('URL_PATH', $folderPath ?: '/');

// Depuración para verificar valores
error_log("FolderPath calculado: $folderPath");
error_log("URL calculado: $url");
error_log("URL_PATH definido: " . URL_PATH);




//echo $folderPath
?>