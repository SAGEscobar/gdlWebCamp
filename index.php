<!doctype html>
<html class="no-js" lang="">

<head>
  <?php include_once 'includes/templates/head.php'; ?>
</head>

<body>

  <?php include_once 'includes/templates/header.php'; ?>  

  <section class="seccion contenedor">
    <h2>La Mejor Conferencia de Diseño Web en Español</h2>
    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ullam mollitia quos libero ut necessitatibus provident quibusdam eius labore laborum odio voluptate voluptatibus dignissimos similique iusto ipsa maiores dolorum, quisquam distinctio! Lorem ipsum dolor sit amet consectetur adipisicing elit. Odio vel facilis alias odit veniam sapiente architecto sint itaque eos cumque incidunt minima quia, explicabo, illo nulla praesentium, debitis voluptas. Sint?</p>
  </section>

  <section class="programa">
    <div class="contenedor-video">
      <video autoplay loop poster="img/bg-talleres.jpg">
        <source src="video/video.mp4" type="video/mp4">
        <source src="video/video.ogv" type="video/ogg">
        <source src="video/video.webm" type="video/webm">
      </video>
    </div><!--Contenedor Video-->

    <div class="contenido-programa">
      <div class="contenedor">
        <div class="programa-evento">
          <h2>Programa del evento</h2>
          <nav class="menu-programa">
            <a href="#talleres"><i class="fa fa-code" aria-hidden="true"></i> Talleres</a>
            <a href="#conferencias"><i class="fa fa-comment" aria-hidden="true"></i> Conferencias</a>
            <a href="#seminarios"><i class="fa fa-university" aria-hidden="true"></i> Seminarios</a>
          </nav>

          <div class="info-curso ocultar clearfix" id="talleres">
            <div class="detalle-evento">
              <h3>HTML5, CSS3 y JavaScript</h3>
              <p><i class="fa fa-clock" aria-hidden="true"></i> 16:00<p>
              <p><i class="fa fa-calendar" aria-hidden="true"></i> 10/Dic</p>
              <p><i class="fa fa-user" aria-hidden="true"></i> Juan Pablo de la Torre Valdez</p>
            </div>
            <div class="detalle-evento">
              <h3>Responsive Web Desing</h3>
              <p><i class="fa fa-clock" aria-hidden="true"></i> 20:00<p>
              <p><i class="fa fa-calendar" aria-hidden="true"></i> 10/Dic</p>
              <p><i class="fa fa-user" aria-hidden="true"></i> Juan Pablo de la Torre Valdez</p>
            </div>
            <a href="#" class="boton float-right">Ver Todos</a>
          </div>
          <div class="info-curso ocultar clearfix" id="conferencias">
            <div class="detalle-evento">
              <h3>Como ser Free Lancer</h3>
              <p><i class="fa fa-clock" aria-hidden="true"></i> 10:00<p>
              <p><i class="fa fa-calendar" aria-hidden="true"></i> 10/Dic</p>
              <p><i class="fa fa-user" aria-hidden="true"></i> Gregorio Sanchez</p>
            </div>
            <div class="detalle-evento">
              <h3>Tecnologias del Futuro</h3>
              <p><i class="fa fa-clock" aria-hidden="true"></i> 17:00<p>
              <p><i class="fa fa-calendar" aria-hidden="true"></i> 10/Dic</p>
              <p><i class="fa fa-user" aria-hidden="true"></i> Susan Sanchez</p>
            </div>
            <a href="#" class="boton float-right">Ver Todos</a>
          </div>
          <div class="info-curso ocultar clearfix" id="seminarios">
            <div class="detalle-evento">
              <h3>Diseño UI/UX para moviles</h3>
              <p><i class="fa fa-clock" aria-hidden="true"></i> 17:00<p>
              <p><i class="fa fa-calendar" aria-hidden="true"></i> 11/Dic</p>
              <p><i class="fa fa-user" aria-hidden="true"></i> Jarol Garcia</p>
            </div>
            <div class="detalle-evento">
              <h3>Aprende a programar en una mañana</h3>
              <p><i class="fa fa-clock" aria-hidden="true"></i> 10:00<p>
              <p><i class="fa fa-calendar" aria-hidden="true"></i> 11/Dic</p>
              <p><i class="fa fa-user" aria-hidden="true"></i> Susana Rivera</p>
            </div>
            <a href="#" class="boton float-right">Ver Todos</a>
          </div>
        </div>
      </div>
    </div>
  </section><!--Cierre seccion de programas del evento-->

  <section class="invitados seccion contenedor">
    <h2>Nuestos Invitados</h2>
    <ul class="lista-invitados clearfix">
      <li>
        <div class="invitado">
          <img src="img/invitado1.jpg" alt="Imagen Invitado">
          <p>Rafael Bautista</p>
        </div>
      </li>
      <li>
        <div class="invitado">
          <img src="img/invitado2.jpg" alt="Imagen invitado">
          <p>Shari Herrera</p>
        </div>
      </li>
      <li>
        <div class="invitado">
          <img src="img/invitado3.jpg" alt="Imagen invitado">
          <p>Gregorio Sanchez</p>
        </div>
      </li>
      <li>
        <div class="invitado">
          <img src="img/invitado4.jpg" alt="Imagen invitado">
          <p>Susna Rivera</p>
        </div>
      </li>
      <li>
        <div class="invitado">
          <img src="img/invitado5.jpg" alt="Imagen invitado">
          <p>Jarol Garcia</p>
        </div>
      </li>
      <li>
        <div class="invitado">
          <img src="img/invitado6.jpg" alt="Imagen invitado">
          <p>Susan Sanchez</p>
        </div>
      </li>
    </ul>
  </section>

  <div class="contador parallax">
    <div class="contenedor">
      <ul class="resumen-evento clearfix">
        <li>
          <p class="numero"></p>Invitados
        </li>
        <li>
          <p class="numero"></p>Talleres
        </li>
        <li>
          <p class="numero"></p>Dias
        </li>
        <li>
          <p class="numero"></p>Conferencias
        </li>
      </ul>
    </div>
  </div>

  <section class="precios seccion">
    <h2>precios</h2>
    <div class="contenedor">
      <ul class="lista-precios clearfix">
        <li>
          <div class="tabla-precio">
            <h3>Pase Por Dia</h3>
            <p class="numero">30$</p>
            <ul>
              <li>Bocadillos Gratis</li>
              <li>Todas las Conferencias</li>
              <li>Todos los Talleres</li>

              <a href="#" class="boton hollow">Comprar</a>
            </ul>
          </div>
        </li>

        <li>
          <div class="tabla-precio">
            <h3>Todos los Dias</h3>
            <p class="numero">50$</p>
            <ul>
              <li>Bocadillos Gratis</li>
              <li>Todas las Conferencias</li>
              <li>Todos los Talleres</li>

              <a href="#" class="boton">Comprar</a>
            </ul>
          </div>
        </li>

        <li>
          <div class="tabla-precio">
            <h3>Pase Por 2 Dias</h3>
            <p class="numero">45$</p>
            <ul>
              <li>Bocadillos Gratis</li>
              <li>Todas las Conferencias</li>
              <li>Todos los Talleres</li>

              <a href="#" class="boton hollow">Comprar</a>
            </ul>
          </div>
        </li>
      </ul>
    </div>
  </section>

  <div class="mapa" id="mapa"></div>

  <section class="seccion">
    <h2>Testimoniales</h2>
    <div class="testimoniales contenedor clearfix">
      <div class="testimonial">
        <blockquote>
          <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Doloribus placeat, laboriosam facilis eum sit iusto enim accusamus quam tempora at autem excepturi? Soluta voluptas maiores dolor eius commodi at dolore.</p>
          <footer class="info-testimonial clearfix">
            <img src="img/testimonial.jpg" alt="Imagen Testimonial">
            <cite>Oswaldo Aponte Escobedo <span>Disañador en @prisma</span></cite>
          </footer>
        </blockquote>
      </div>
      <div class="testimonial">
        <blockquote>
          <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Doloribus placeat, laboriosam facilis eum sit iusto enim accusamus quam tempora at autem excepturi? Soluta voluptas maiores dolor eius commodi at dolore.</p>
          <footer class="info-testimonial clearfix">
            <img src="img/testimonial.jpg" alt="Imagen Testimonial">
            <cite>Oswaldo Aponte Escobedo <span>Disañador en @prisma</span></cite>
          </footer>
        </blockquote>
      </div>
      <div class="testimonial">
        <blockquote>
          <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Doloribus placeat, laboriosam facilis eum sit iusto enim accusamus quam tempora at autem excepturi? Soluta voluptas maiores dolor eius commodi at dolore.</p>
          <footer class="info-testimonial clearfix">
            <img src="img/testimonial.jpg" alt="Imagen Testimonial">
            <cite>Oswaldo Aponte Escobedo <span>Disañador en @prisma</span></cite>
          </footer>
        </blockquote>
      </div>
    </div>
  </section>

  <div class="newsletter parallax">
    <div class="contenido contenedor">
      <p>Registrate al News letter:</p>
      <h3>gdlWebCamp</h3>
      <a href="#" class="boton transparente">Registrate</a>
    </div>
  </div>

  <section class="seccion">
    <h2>Faltan</h2>
    <div class="cuenta-regresiva contenedor">
      <ul class="clearfix">
        <li>
          <p class="numero" id="dias">0</p> Dias
        </li>
        <li>
          <p class="numero" id="horas">0</p> Horas
        </li>
        <li>
          <p class="numero" id="minutos">0</p> Minutos
        </li>
        <li>
          <p class="numero" id="segundos">0</p> Segundos
        </li>
      </ul>
    </div>
  </section>



  <?php include_once 'includes/templates/footer.php'; ?>

</body>

</html>
