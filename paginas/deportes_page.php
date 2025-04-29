<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Deportes | El Faro</title>
    <link rel="stylesheet" href="../style.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/js/all.min.js"></script>
    <link rel="icon" href="../imagenes/favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@1.0.2/css/bulma.min.css">
    <style>

    </style>

</head>

<body>
    <!-- MENU DE NAVEGACION -->

    <nav class="navbar" role="navigation" aria-label="main navigation">
        <div class="navbar-brand is-flex is-align-items-center is-justify-content-space-between">

            <a class="navbar-item" href="/api/index.php">
                <img src="../imagenes/logo.jpg" alt="Logo" class="logo">
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
                <a class="navbar-item is-active" href="../paginas/deportes_page.php">Deportes</a>
                <a class="navbar-item" href="../paginas/negocios_page.php">Negocios</a>
                <a class="navbar-item" href="../paginas/noticias_page.php">Noticias</a>
                <a class="navbar-item" href="../paginas/contacto.php">Contacto</a>
                <a class="navbar-item" href="../paginas/avisos.php">Avisos</a>
                <a class="navbar-item" href="../paginas/registro.php">Registro</a>
            </div>

        </div>

        <!-- Reloj a la derecha en desktop -->
        <div class="navbar-item reloj-desktop">
            <div id="fechaHoraDesktop" class="reloj-cabecera">domingo, 20 de abril de 2025 - 17:02:13</div>
        </div>



        <section class="formulario-flotante" id="formulario">
            <button class="btn-cerrar" onclick="cerrarFormulario()">
                <i class="fas fa-times"></i>
            </button>
            <form id="formArticulo">
                <h3>Nuevo artículo</h3>
                <input type="text" id="tituloArticulo" placeholder="Título" required>
                <textarea id="contenidoArticulo" placeholder="Descripción" required></textarea>
                <select id="categoriaArticulo" required>
                    <option value="">Selecciona una categoría</option>
                    <option value="Deportes">Deportes</option>
                    <option value="Noticias">Noticias</option>
                    <option value="Negocios">Negocios</option>
                </select>
                <button type="submit">Agregar</button>

            </form>

        </section>

        <button class="btn-flotante" onclick="toggleFormulario()">
            <i class="fas fa-plus"></i>
        </button>
    </nav>






    <section class="seccion hero hero-gradient">
        <div class="tile is-ancestor">
            <div class="tile is-vertical is-8">
                <div class="tile">
                    <div class="tile is-parent">
                        <article class="tile is-child is-info">
                            <div class="contador">
                                <div class="button">
                                    <p>Total de artículos: <span id="contadorPost">0</span></p>
                                </div>
                            </div>
                        </article>
                    </div>
                    <div class="tile is-parent is-vertical">
                        <article class="tile is-child is-primary">
                            <h2 class="title">Deportes</h2>
                        </article>
                    </div>

                </div>
                <div class="tile is-parent">
                    <article class="tile is-child">
                        <div class="content">
                            <div class="contenedor-articulos">
                                <article class="is-one-third box">
                                    <h3 class="title is-4">Chile otra vez con la calculadora...</h3>
                                    <button class="button">
                                        <p><span class="subtitle">Categoría:</span> Deportes</p>
                                    </button>
                                    <p>Chile otra vez en la cuerda floja para el mundial. Chile continúa viviendo una
                                        angustiante lucha
                                        por
                                        conseguir su clasificación al Mundial de 2026. Después de su reciente empate en
                                        casa, las
                                        probabilidades de acceder al torneo internacional son mínimas. A falta de pocos
                                        partidos, la
                                        selección chilena necesita una combinación perfecta de resultados para
                                        mantenerse con vida en la
                                        carrera. Aunque la situación es difícil, los hinchas y jugadores no pierden la
                                        esperanza y
                                        siguen
                                        confiando en que el milagro aún es posible</p>

                                </article>
                                <article class="is-one-third box">
                                    <h3 class="title is-4">Argentina clasifica con autoridad</h3>
                                    <button class="button">
                                        <p><span class="subtitle">Categoría:</span> Deportes</p>
                                    </button>
                                    <p>La selección argentina sigue mostrando su poderío en las eliminatorias, y tras un
                                        contundente 2-0
                                        frente a Brasil, ya aseguró su lugar en el Mundial 2026. Con una actuación
                                        destacada de Lionel
                                        Messi
                                        y un equipo sólido en todas sus líneas, los campeones de América demostraron una
                                        vez más por qué
                                        son
                                        uno de los favoritos a llevarse el trofeo. Los aficionados celebran con
                                        entusiasmo, mientras el
                                        equipo se prepara para seguir con su marcha invicta.</p>
                                </article>

                                <article class="is-one-third box">
                                    <h3 class="title is-4">Los Esports cada día entran con más fuerza</h3>
                                    <button class="button">
                                        <p><span class="subtitle">Categoría:</span> Deportes</p>
                                    </button>
                                    <p>El mundo de los Esports sigue creciendo a pasos agigantados, con figuras como
                                        Faker, uno de los
                                        jugadores más emblemáticos de League of Legends, marcando una nueva era en el
                                        competitivo. La
                                        industria sigue rompiendo barreras, con torneos de alto nivel que atraen a
                                        millones de
                                        espectadores
                                        alrededor del mundo. Los jugadores de Esports ya son considerados estrellas, y
                                        el potencial de
                                        este
                                        fenómeno no deja de asombrar a los fanáticos y expertos en tecnología y
                                        entretenimiento.</p>
                                </article>



                                <div id="contenedorArticulosDeportes"></div>
                            </div>

                            <!-- ------VIDEO---------- -->
                            <h2 class="title">Chile y las complicaciones con el mundial</h2>
                            <div class="media-container">
                                <iframe src="https://www.youtube.com/embed/zjTimlLVBLE" frameborder="0"
                                    allowfullscreen></iframe>
                            </div>

                            <h3 class="subtitle">Entrevista Arturo Vidal</h3>
                            <div class="media-container-audio">
                                <audio controls>
                                    <source src="../audio/audioDeportes.mp3" type="audio/mpeg">
                                    Tu navegador no soporta el elemento de audio.
                                </audio>
                            </div>
                            <a href="../index.html" class="button">Volver al Menú</a>
                        </div>
                    </article>
                </div>
            </div>

        </div>
    </section>
    <?php include('../app/views/partials/footer.php'); ?>

    <script src="../main.js"></script>
</body>
</html>