<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Negocios | El Faro</title>
  <link rel="stylesheet" href="../style.css">
  <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/js/all.min.js"></script>
  <link rel="icon" href="../imagenes/favicon.ico" type="image/x-icon">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@1.0.2/css/bulma.min.css">
</head>

<body>


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
        <a class="navbar-item" href="../paginas/deportes_page.php">Deportes</a>
        <a class="navbar-item is-active" href="../paginas/negocios_page.php">Negocios</a>
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

  <section class="seccion">
    <div class="contador">
      <div class="button">
        <p>Total de artículos: <span id="contadorPost">0</span></p>
      </div>
    </div>

    <h2 class="title">Negocios</h2>

    <div class="contenedor-articulos">
      <!-- Artículos estáticos originales -->
      <article class="is-one-third box">
        <h3 class="title is-4">Las PYMES pueden aprovechar oportunidades en Mercado Público con estos pasos</h3>
        <button class="button">
          <p><span class="subtitle">Categoría:</span> Negocios</p>
        </button>

        <p>El portal Innova ofrece una guía para que las pequeñas y medianas empresas (PYMES) encuentren oportunidades
          de negocio en el Mercado Público. Este espacio es clave para acceder a licitaciones y contratos con el Estado.
          El proceso comienza con la inscripción en el sistema, la búsqueda de licitaciones relacionadas con el giro de
          la empresa y la preparación de las propuestas. Además, se destacan estrategias para aumentar las posibilidades
          de éxito, como el cumplimiento de los requisitos técnicos y administrativos y el fortalecimiento de la
          competitividad.</p>
      </article>

      <article class="is-one-third box">
        <h3 class="title is-4">Confianza de los consumidores chilenos cae debido a apagón, guerra comercial y mayores
          gastos</h3>
        <button class="button">
          <p><span class="subtitle">Categoría:</span> Negocios</p>
        </button>
        <p>En marzo de 2025, la confianza de los consumidores en Chile sufrió una caída significativa, afectada por
          varios factores, como el reciente apagón que afectó al país, la creciente guerra comercial y el aumento de los
          gastos familiares. Estos elementos han generado incertidumbre económica y disminuido la percepción de los
          chilenos sobre la estabilidad del mercado. Las proyecciones indican que estos factores seguirán impactando
          negativamente la confianza de los consumidores en el corto plazo.</p>
      </article>

      <article class="is-one-third box">
        <h3 class="title is-4">Acciones de Nvidia y Tesla caen un 6% y pierden 250,000 millones de dólares</h3>
        <button class="button">
          <p><span class="subtitle">Categoría:</span> Negocios</p>
        </button>
        <p>Las acciones de Nvidia y Tesla experimentaron una caída significativa del 6% en marzo de 2025, lo que resultó
          en una pérdida combinada de 250,000 millones de dólares en su capitalización de mercado. Esta caída se produjo
          en medio de un clima de incertidumbre económica global, impulsada por las políticas comerciales del presidente
          Trump, que incluyeron nuevos aranceles a las importaciones y restricciones a empresas tecnológicas chinas. Los
          inversores temen que las tensiones comerciales afecten a la demanda de productos clave, como los chips de
          inteligencia artificial de Nvidia y los vehículos eléctricos de Tesla.</p>
      </article>
      <!-- Artículos dinámicos desde localStorage -->
      <div id="contenedorArticulosNegocios"></div>
    </div>


    <!-- VIDEO SECTION -->

    <h2 class="title">¿Por qué caen los mercados?</h2>
    <div class="media-container">
      <iframe width="100%" height="315" src="https://www.youtube.com/embed/KB_1erbx6vs" frameborder="0"
        allowfullscreen></iframe>
    </div>

    <h3 class="subtitle">Jensen Huang (CEO Nvidia): "No aprendas a programar"</h3>
    <div class="media-container-audio">
      <audio controls>
        <source src="../audio/audioNegocios.mp3" type="audio/mpeg">
        Tu navegador no soporta el elemento de audio.
      </audio>
    </div>

    <a href="../index.html" class="button">Volver al Menú</a>
  </section>

  <?php include('../app/views/partials/footer.php'); ?>

  <script src="../main.js"></script>
</body>
</html>