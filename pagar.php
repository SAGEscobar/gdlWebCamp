<?php 

 if(!isset($_POST['submit'])) {
   exit("hubo un error");
 }

use PayPal\Api\Amount;
use PayPal\Api\Details;
use PayPal\Api\Item;
use PayPal\Api\ItemList;
use PayPal\Api\Payer;
use PayPal\Api\Payment;
use PayPal\Api\RedirectUrls;
use PayPal\Api\Transaction;


require 'includes/config.php';

$nombre = $_POST['nombre'];
            $apellido = $_POST['apellido'];
            $email = $_POST['email'];
            $regalo = (int)$_POST['regalo'];
            $total = $_POST['total_pedido'];
            $fecha = date('Y-m-d H:i:s');

include_once 'includes/funciones/funciones.php';
$boletos = $_POST['boletos'];
$numero_boletos = $boletos;

$camisas = $_POST['pedido_extra']['camisas']['cantidad'];
$camisas_precio = $_POST['pedido_extra']['camisas']['precio'];
$etiquetas = $_POST['pedido_extra']['etiquetas']['cantidad'];
$etiquetas_precio = $_POST['pedido_extra']['etiquetas']['precio'];
$pedidoExtra = $_POST['pedido_extra'];

$eventos = $_POST['registros'];
$jsonProd = productos_json($boletos, $camisas, $etiquetas);
$jsonEv = eventos_json($eventos);

try{
    require_once('includes/funciones/bd_coneccion.php');
    $stmt = $conn->prepare("INSERT INTO registrados_table (nombreRegistrado, apellidoRegistrado, emailRegistrado, fechaRegistro, pasesArticulos, talleresRgistrados, regalo, totalPagado) values (?,?,?,?,?,?,?,?)");
    $stmt->bind_param("ssssssis", $nombre, $apellido, $email, $fecha, $jsonProd, $jsonEv, $regalo, $total);
    $stmt->execute();
    $ID_registro = $stmt->insert_id;
    $stmt->close();
    $conn->close();
}catch(Exception $e){
    echo e->get_message();
}


$compra = new Payer();
$compra->setPaymentMethod('paypal');
$i=0;
$arregloPedido = array();
foreach($numero_boletos as $key => $value){
  if((int)$value['cantidad']>0){
    ${"articulo$i"} = new Item();
    ${"articulo$i"}->setName('pase: ' . $key)
          ->setCurrency('USD')
          ->setQuantity((int)$value['cantidad'])
          ->setPrice((int)$value['precio']);
      $arregloPedido[] = ${"articulo$i"};
      $i++;
  }
}

foreach($pedidoExtra as $key => $value){
  if((int)$value['cantidad']>0){
    if($key === 'camisas'){
      $precio = ((float) $value['precio'])*0.93;
    }else{
      $precio = (int) $value['precio'];
    }
    ${"articulo$i"} = new Item();
    ${"articulo$i"}->setName($key)
          ->setCurrency('USD')
          ->setQuantity((int)$value['cantidad'])
          ->setPrice($precio);
      $arregloPedido[] = ${"articulo$i"};
      $i++;
  }
}

      
$listaArticulos = new ItemList();
$listaArticulos->setItems($arregloPedido);

$detalles = new Details();
$detalles->setShipping(0)
          ->setSubtotal($precio); 
          
          
$cantidad = new Amount();
$cantidad->setCurrency('USD')
          ->setTotal($total);
          
$transaccion = new Transaction();
$transaccion->setAmount($cantidad)
               ->setItemList($listaArticulos)
               ->setDescription('Pago GDLWEBCAMP')
               ->setInvoiceNumber($ID_registro);
               

$redireccionar = new RedirectUrls();
$redireccionar->setReturnUrl(URL_SITIO . "/pago_finalizado.php?id_pago={$ID_registro}")
              ->setCancelUrl(URL_SITIO . "/pago_finalizado.php?id_pago={$ID_registro}");
              
              
$pago = new Payment();
$pago->setIntent("sale")
     ->setPayer($compra)
     ->setRedirectUrls($redireccionar)
     ->setTransactions(array($transaccion));
     
     try {
       $pago->create($apiContext);
     } catch (PayPal\Exception\PayPalConnectionException $pce) {
       // Don't spit out errors or use "exit" like this in production code
       echo '<pre>';print_r(json_decode($pce->getData()));exit;
     }

$aprobado = $pago->getApprovalLink();


header("Location: {$aprobado}");