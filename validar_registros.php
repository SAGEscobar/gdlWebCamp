<?php if(isset($_POST['submit'])):
            $nombre = $_POST['nombre'];
            $apellido = $_POST['apellido'];
            $email = $_POST['email'];
            $regalo = (int)$_POST['regalo'];
            $total = $_POST['total_pedido'];
            $fecha = date('Y-m-d H:i:s');

            
            include_once 'includes/funciones/funciones.php';

            $boletos = $_POST['boletos'];
            $camisas = $_POST['pedido_camisas'];
            $etiquetas = $_POST['pedido_etiquetas'];
            $eventos = $_POST['registros'];

            $jsonProd = productos_json($boletos, $camisas, $etiquetas);
            $jsonEv = eventos_json($eventos);

            try{
                require_once('includes/funciones/bd_coneccion.php');
                $stmt = $conn->prepare("INSERT INTO registrados_table (nombreRegistrado, apellidoRegistrado, emailRegistrado, fechaRegistro, pasesArticulos, talleresRgistrados, regalo, totalPagado) values (?,?,?,?,?,?,?,?)");
                $stmt->bind_param("ssssssis", $nombre, $apellido, $email, $fecha, $jsonProd, $jsonEv, $regalo, $total);
                $stmt->execute();
                $stmt->close();
                $conn->close();
                header("Location: validar_registros.php?exitoso=1");
            }catch(Exception $e){
                echo e->get_message();
            }

        endif; ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <?php include_once 'includes/templates/head.php'; ?>
</head>
<body>
    <?php include_once 'includes/templates/header.php'; ?>

    <section class="seccion contenedor">
        <h2>Registro</h2>

        <?php 
            if(isset($_GET['exitoso'])):
                if($_GET['exitoso']== '1'):
                    echo '<p>Registro ingresado con Exito</p>';
                endif;
            endif;
        ?>

    </section>

    <?php include_once 'includes/templates/footer.php'; ?>
</body>
</html>