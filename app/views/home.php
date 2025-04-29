<!-- app/views/home.php -->

<nav class="navbar" role="navigation" aria-label="main navigation">
  <div class="navbar-brand is-flex is-align-items-center is-justify-content-space-between">

    <a class="navbar-item" href="/api/index.php">
      <img src="/imagenes/logo.jpg" alt="Logo" class="logo">
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
      <a class="navbar-item" href="paginas/deportes_page.php">Deportes</a>
      <a class="navbar-item " href="paginas/negocios_page.php">Negocios</a>
      <a class="navbar-item " href="paginas/noticias_page.php">Noticias</a>
      <a class="navbar-item" href="paginas/contacto.php">Contacto</a>
      <a class="navbar-item" href="paginas/avisos.php">Avisos</a>
      <a class="navbar-item" href="paginas/registro.php">Registro</a>
    </div>

  </div>

  <!-- Reloj a la derecha en desktop -->
  <div class="navbar-item reloj-desktop">
    <div id="fechaHoraDesktop" class="reloj-cabecera">domingo, 20 de abril de 2025 - 17:02:13</div>
  </div>



</nav>


<nav class="breadcrumb is-right has-bullet-separator" aria-label="breadcrumbs">
  <ul>
    <li><a href="#articulos-destacados">Artículos Destacados</a></li>
    <li><a href="#mas-articulos">Más articulos</a></li>
  </ul>
</nav>

<!-- Encabezado principal -->
<header>

  <div class="img__fondo">
    <div class="lamina"></div>
  </div>

  <div class="banner-text container">
    <h1>Bienvenidos a "El Faro"</h1>
    <p>
      ¡Gracias por visitar <strong>El Faro</strong>, tu nuevo periódico digital de confianza! Nuestro objetivo
      es mantenerte informado de manera clara, rápida y actualizada sobre los acontecimientos más importantes
      de la actualidad.
    </p>
  </div>
</header>

<!-- ARTÍCULOS DESTACADOS -->
<section class="section seccion-con-fondo" id="articulos-destacados">

  <div class="container">
    <h2 class="title is-3 has-text-centered">📰 Artículos Destacados</h2>
    <div class="columns is-centered is-multiline">

      <div class="column is-5">
        <div class="box">
          <h3 class="title is-4">Argentina clasifica con autoridad</h3>
          <p class="subtitle is-6">Categoría: Deportes</p>
          <p>La selección argentina sigue mostrando su poderío en las eliminatorias...</p>
          <a class="button is-link mt-2" href="/paginas/deportes_page.php">Leer más</a>
        </div>
      </div>

      <div class="column is-5">
        <div class="box">
          <h3 class="title is-4">Los Esports cada día con más fuerza</h3>
          <p class="subtitle is-6">Categoría: Deportes</p>
          <p>El mundo de los Esports sigue creciendo con figuras como Faker...</p>
          <a class="button is-link mt-2" href="/paginas/deportes_page.php">Leer más</a>
        </div>
      </div>

    </div>
  </div>
</section>


<!-- MÁS ARTÍCULOS -->
<section class="section seccion-con-fondo py-10" id="mas-articulos">
  <div class="container">
    <h2 class="title is-3">📚 Más artículos</h2>
    <div class="columns is-multiline">

      <!-- Artículo compacto -->

      <div class="box is-one-quarter">
        <h4 class="title is-5">Chile otra vez con la calculadora...</h4>
        <p class="subtitle is-7">Deportes</p>
        <p class="is-size-7">La selección chilena sigue luchando por un lugar en el Mundial...</p>
        <a class="is-link is-size-7" href="/paginas/deportes_page.php">Leer más</a>
      </div>



      <div class="box is-one-quarter">
        <h4 class="title is-5">Las PYMES pueden aprovechar oportunidades en Mercado Público con estos pasos</h4>
        <p class="subtitle is-7">Negocios</p>
        <p class="is-size-7">El portal Innova ofrece una guía para que las pequeñas y medianas empresas (PYMES)
          encuentren oportunidades de negocio en el...</p>
        <a class="is-link is-size-7" href="/paginas/negocios_page.php">Leer más</a>
      </div>


      <div class="box is-one-quarter">
        <h4 class="title is-5">Elon Musk proyecta un futuro dominado por robots.</h4>
        <p class="subtitle is-7">Noticias</p>
        <p class="is-size-7">Elon Musk asegura que los robots humanoides podrían revolucionar la ...</p>
        <a class="is-link is-size-7" href="/paginas/noticias_page.php">Leer más</a>
      </div>

    </div>
  </div>
</section>
<script src="/main.js"></script>
</body>

</html>