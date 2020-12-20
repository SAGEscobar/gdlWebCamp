    <?php 
        require_once('includes/funciones/bd_coneccion.php');
        $sql = 'SELECT * FROM invitados_table';

        $resultado = $conn->query($sql);
    ?>
    <section class="invitados seccion contenedor">
        <h2>Nuestos Invitados</h2>
        <ul class="lista-invitados clearfix">
            <?php while($invitado = $resultado->fetch_assoc()){ ?>
                <li>
                    <div class="invitado">
                        <a class='inline colbox' href="#invitado<?php echo $invitado['invitado_id']; ?>">
                            <img src="img/<?php echo $invitado['url_imagen']; ?>" alt="Imagen Invitado">
                            <p><?php echo $invitado['nombreInvitado'] . " " . $invitado['apellidoInvitado']; ?></p>
                        </a>
                    </div>
                </li>
                <div style='display:none;'>
                    <div class="invitado-info" id='invitado<?php echo $invitado['invitado_id']; ?>'>
                        <h2> <?php echo $invitado['nombreInvitado'] . ' ' . $invitado['apellidoInvitado']; ?></h2>
                        <img src="img/<?php echo $invitado['url_imagen']; ?>" alt="Imagen Invitado" class="invitado-info">
                        <p> <?php echo $invitado['descripcion']; ?> </p>
                    </div>
                </div>
            <?php } ?>
        </ul>
    </section>

    <?php $conn->close(); ?>