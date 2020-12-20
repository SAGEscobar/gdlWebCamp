<!doctype html>
<html class="no-js" lang="">

<head>
  <?php include_once 'includes/templates/head.php'; ?>
</head>

<body class='index'>

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

          <?php try{
            require_once('includes/funciones/bd_coneccion.php');
            $sql = 'SELECT * FROM categoriaevento_table';
            $resultado = $conn->query($sql);
          } catch (Exception $e){
            echo $e->getMessage();
          }?>

          <nav class="menu-programa">
            <?php while($cat = $resultado->fetch_array(MYSQLI_ASSOC)){ ?>
              <a href="#<?php echo strtolower($cat['cat_Evento']); ?>">
                <i class="fa <?php echo $cat['icono']; ?>" aria-hidden="true"></i> <?php echo $cat['cat_Evento']; ?>
              </a>
            <?php } ?>
            
          </nav>

          <?php
            try {
                require_once('includes/funciones/bd_coneccion.php');
                $sql2 = 'SELECT evento_id, nombreEvento, fechaEvento, horaEvento, nombreInvitado, apellidoInvitado, cat_evento, icono ';
                $sql2 .= 'FROM eventos_table ';
                $sql2 .= 'INNER JOIN invitados_table ';
                $sql2 .= 'ON eventos_table.id_invitado=invitados_table.invitado_id ';
                $sql2 .= 'INNER JOIN categoriaevento_table ';
                $sql2 .= 'ON eventos_table.id_categoriaEvento=categoriaevento_table.id_categoria ';
                $sql2 .= 'AND eventos_table.id_categoriaEvento = 1 ';
                $sql2 .= 'ORDER BY evento_id LIMIT 2; ';
                $sql2 .= 'SELECT evento_id, nombreEvento, fechaEvento, horaEvento, nombreInvitado, apellidoInvitado, cat_evento, icono ';
                $sql2 .= 'FROM eventos_table ';
                $sql2 .= 'INNER JOIN invitados_table ';
                $sql2 .= 'ON eventos_table.id_invitado=invitados_table.invitado_id ';
                $sql2 .= 'INNER JOIN categoriaevento_table ';
                $sql2 .= 'ON eventos_table.id_categoriaEvento=categoriaevento_table.id_categoria ';
                $sql2 .= 'AND eventos_table.id_categoriaEvento = 2 ';
                $sql2 .= 'ORDER BY evento_id LIMIT 2;';
                $sql2 .= 'SELECT evento_id, nombreEvento, fechaEvento, horaEvento, nombreInvitado, apellidoInvitado, cat_evento, icono ';
                $sql2 .= 'FROM eventos_table ';
                $sql2 .= 'INNER JOIN invitados_table ';
                $sql2 .= 'ON eventos_table.id_invitado=invitados_table.invitado_id ';
                $sql2 .= 'INNER JOIN categoriaevento_table ';
                $sql2 .= 'ON eventos_table.id_categoriaEvento=categoriaevento_table.id_categoria ';
                $sql2 .= 'AND eventos_table.id_categoriaEvento = 3 ';
                $sql2 .= 'ORDER BY evento_id LIMIT 2;';
            }catch(Exception $e){
                echo '<p>' . $e->getMessage() . '</p>';
            }
          ?>

          <?php $conn->multi_query($sql2); ?>

          <?php do{ ?>
              <?php 
                $result = $conn->store_result();
                $row = $result->fetch_all(MYSQLI_ASSOC);
                $i = 0;
                foreach($row as $evento){ ?>
                  <?php if($i % 2 == 0){ ?>
                    <div class="info-curso ocultar clearfix" id="<?php echo strtolower($evento['cat_evento']); ?>">
                  <?php } ?>
                    <div class="detalle-evento">
                      <h3><?php echo $evento['nombreEvento']; ?></h3>
                      <p><i class="fa fa-clock" aria-hidden="true"></i> <?php echo $evento['horaEvento']; ?><p>
                      <p><i class="fa fa-calendar" aria-hidden="true"></i> <?php echo $evento['fechaEvento']; ?></p>
                      <p><i class="fa fa-user" aria-hidden="true"></i> <?php echo $evento['nombreInvitado'] . " " . $evento['apellidoInvitado']; ?></p>
                    </div>
                    <?php if($i % 2 == 1){ ?>
                          <a href="calendario.php" class="boton float-right">Ver Todos</a>
                      </div>
                    <?php } ?>
                    <?php $i++; ?>
                <?php } ?>
          <?php }while($conn->more_results() && $conn->next_result()); ?>
        </div>
      </div>
    </div>
  </section><!--Cierre seccion de programas del evento-->

  <?php include_once 'includes/templates/invitados.php'; ?>

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
      <a href="#mc_embed_signup" class="boton transparente color-mail inline">Registrate</a>
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
