<?php 
use PayPal\Rest\ApiContext;
use PayPal\Api\PaymentExecution;
use PayPal\Api\Payment;
require 'includes/config.php';
?>

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
          $paymentId = $_GET['paymentId'];
          $idPago = (int) $_GET['id_pago'];
          $respuesta = '';
          $pago = Payment::get($paymentId, $apiContext);
          $execution = new PaymentExecution();
          $execution->setPayerId($_GET['PayerID']);

          $resultado = $pago->execute($execution, $apiContext);
          $respuesta = $resultado->transactions[0]->related_resources[0]->sale->state;

          if($respuesta === 'completed') {
            $pagado = 1;
            require_once('includes/funciones/bd_coneccion.php');
            $stmt = $conn->prepare("UPDATE registrados_table SET pagado = ? WHERE id_registrados = ?");
            $stmt->bind_param("ii", $pagado, $idPago);
            $stmt->execute();
            $stmt->close();
            $conn->close();

                echo "<p>El pago se realizo correctamente! </p>";
                echo "<p>El id es {$paymentId} </p>";
          }
      
        ?>

    </section>

    <?php include_once 'includes/templates/footer.php'; ?>
</body>
</html>