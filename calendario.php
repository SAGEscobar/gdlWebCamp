<!doctype html>
<html class="no-js" lang="es_ES">

<head>
  <?php include_once 'includes/templates/head.php'; ?>
  <link rel="stylesheet" href='css/lightbox.css'></link>
</head>

<body class='calendario'>

    <?php include_once 'includes/templates/header.php'; ?>


    <section class="seccion contenedor">
        <h2>Calendario de Eventos</h2>
        
    <?php
        try {
            require_once('includes/funciones/bd_coneccion.php');
            $sql = 'SELECT evento_id, nombreEvento, fechaEvento, horaEvento, nombreInvitado, apellidoInvitado, cat_evento, icono ';
            $sql .= 'FROM eventos_table ';
            $sql .= 'INNER JOIN invitados_table ';
            $sql .= 'ON eventos_table.id_invitado=invitados_table.invitado_id ';
            $sql .= 'INNER JOIN categoriaevento_table ';
            $sql .= 'ON eventos_table.id_categoriaEvento=categoriaevento_table.id_categoria ';
            $sql .= 'ORDER BY evento_id ';
            
            $resultado = $conn->query($sql);
        }catch(Exception $e){
            echo $e->getMessage();
        }
    ?>

    <div class="canlendario">
        <?php 
            $calendario = array();
            while($eventos = $resultado->fetch_assoc()){
                $fecha = $eventos['fechaEvento'];
                $evento = array(
                    "Titulo" => $eventos['nombreEvento'],
                    "fecha" => $eventos['fechaEvento'],
                    "hora" => $eventos['horaEvento'],
                    "categoria" => $eventos['cat_evento'],
                    "invitado" => $eventos['nombreInvitado'] . ' ' . $eventos['apellidoInvitado'],
                    "icono" => $eventos['icono']
                );
                $calendario[$fecha][] = $evento;
            }
            //UNIX
            setlocale(LC_TIME, 'es_ES.UTF-8');
            //Windows
            setlocale(LC_TIME,'spanish.UTF-8');
        ?>
        <div class="calendario">
            <?php foreach($calendario as $dia => $lista_evento){ ?>
                <h3> <i class='fa fa-calendar'></i> <?php echo strftime('%A, %d de %B del %Y', strtotime($dia)) ?> </h3>
                <div class="clearfix">
                    <?php foreach($lista_evento as $evento){ ?>
                        <div class="dia">
                            <p class="titulo"> <?php echo $evento['Titulo']; ?> </p>
                            <p>
                                <i class="fa fa-clock" aria-hidden='true'></i>
                                <?php echo $evento['hora'] . " " . $evento['fecha']; ?>
                            </p>
                            <p class='hora'>
                                <i <?php echo 'class="fa ' . $evento['icono'] . '"'; ?> aria-hidden='true'></i>
                                <?php echo $evento['categoria'] ?>
                            </p>
                            <p>
                                <i class="fa fa-user"></i>
                                <?php echo $evento['invitado']; ?>
                            </p>
                        </div>
                    <?php } ?>
                </div>
            <?php } ?>
        </div>
    </div>

        <?php $conn->close(); ?>

    </section>

    <?php include_once 'includes/templates/footer.php'; ?>
    <script src='js/lightbox.js'></script>
</body>

</html>
