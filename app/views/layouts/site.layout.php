<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>El Faro</title>
    <link rel="stylesheet" href="<?= URL_PATH ?>/Assets/css/style.css">
    <script src="<?= URL_PATH ?>/Assets/js/main.js"></script>
    <link rel="icon" href="<?= URL_PATH ?>/Assets/favicon/favicon.ico" type="image/x-icon">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/js/all.min.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@1.0.2/css/bulma.min.css">
</head>

<body>
    <?php
    echo '<pre>';
    echo "SCRIPT_NAME: " . $_SERVER['SCRIPT_NAME'] . "\n";
    echo "REQUEST_URI: " . $_SERVER['REQUEST_URI'] . "\n";
    echo "URL_PATH: " . $folderPath . "\n";
    echo '</pre>';

    ?>
    <nav class="navbar" role="navigation" aria-label="main navigation">
        <div class="navbar-brand is-flex is-align-items-center is-justify-content-space-between">

            <a class="navbar-item" href="<?= URL_PATH ?>/page/home">
                <img src="<?= URL_PATH ?>/Assets/imagenes/logo.jpg" alt="Logo" class="logo">
            </a>

            <!-- Reloj centrado solo en mobile -->
            <div class="navbar-item reloj-mobile">
                <div id="fechaHora" class="reloj-cabecera">domingo, 20 de abril de 2025 - 17:02:13</div>
            </div>


            <a role="button" class="navbar-burger" aria-label="menu" aria-expanded="false" data-target="navbarMenu">
                <span aria-hidden="true"></span>
                <span aria-hidden="true"></span>
                <span aria-hidden="true"></span>
            </a>


        </div>



        <div id="navbarMenu" class="navbar-menu">

            <div class="navbar-start">
                <a class="navbar-item" href="<?= URL_PATH ?>/page/deportes">Deportes</a>
                <a class="navbar-item " href="<?= URL_PATH ?>/page/negocios">Negocios</a>
                <a class="navbar-item " href="<?= URL_PATH ?>/page/noticias">Noticias</a>
                <a class="navbar-item" href="<?= URL_PATH ?>/page/contacto">Contacto</a>
                <a class="navbar-item" href="<?= URL_PATH ?>/page/avisos">Avisos</a>
                <a class="navbar-item" href="<?= URL_PATH ?>/page/registro">Registro</a>
            </div>

        </div>

        <!-- Reloj a la derecha en desktop -->
        <div class="navbar-item reloj-desktop">
            <div id="fechaHoraDesktop" class="reloj-cabecera">domingo, 20 de abril de 2025 - 17:02:13</div>
        </div>



    </nav>
    <?php echo $content ?>

    <footer class="footer has-background-dark has-text-light">
        <div class="columns is-multiline is-variable is-6" style="max-width: 1200px; margin: 0 auto;">

            <!-- Logo y descripción -->
            <div class="column is-4">
                <h2 class="title is-5 has-text-white">🌅 El Faro</h2>
                <p>El Faro es tu portal confiable para noticias deportivas, esports y mucho más. Encendemos la luz de la
                    información.</p>
            </div>

            <!-- Navegación rápida -->
            <div class="column is-3">
                <h3 class="title is-6 has-text-white">Navegación</h3>
                <ul>
                    <li><a href="<?= URL_PATH ?>/page/home" class="has-text-light">Inicio</a></li>
                    <li><a href="<?= URL_PATH ?>/page/deportes" class="has-text-light">Deportes</a></li>
                    <li><a href="<?= URL_PATH ?>/page/negocios" class="has-text-light">Negocios</a></li>
                    <li><a href="<?= URL_PATH ?>/page/noticias" class="has-text-light">Noticias</a></li>
                    <li><a href="<?= URL_PATH ?>/page/contacto" class="has-text-light">Contacto</a></li>
                    <li><a href="<?= URL_PATH ?>/page/avisos" class="has-text-light">Avisos</a></li>
                    <li><a href="<?= URL_PATH ?>/page/registro" class="has-text-light">Registro</a></li>
                </ul>
            </div>

            <!-- Redes sociales -->
            <div class="column is-2">
                <h3 class="title is-6 has-text-white">Síguenos</h3>
                <ul>
                    <li><a href="#" class="has-text-light">Instagram</a></li>
                    <li><a href="#" class="has-text-light">Facebook</a></li>
                    <li><a href="#" class="has-text-light">Twitter/X</a></li>
                </ul>
            </div>

            <!-- Contacto -->
            <div class="column is-3">
                <h3 class="title is-6 has-text-white">Contacto</h3>
                <p><strong>Email:</strong> contacto@elfaro.cl</p>
                <p><strong>Ubicación:</strong> Santiago, Chile</p>
            </div>

        </div>

        <hr class="has-background-grey-lighter" style="margin: 1rem auto; max-width: 1200px;">

        <div class="content has-text-centered has-text-grey-light" style="max-width: 1200px; margin: 0 auto;">
            <p>© 2025 <strong>El Faro</strong> - Todos los derechos reservados.</p>
            <p>Diseñado con ❤️ por Nuestro Grupo</p>
        </div>

    </footer>
</body>

</html>