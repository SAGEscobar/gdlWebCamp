<?php 

//url aquispe
define('URL_SITIO', 'http://localhost/practicas/gdlWebCamp');

require 'paypal/autoload.php';

$apiContext = new \PayPal\Rest\ApiContext(
    new \PayPal\Auth\OAuthTokenCredential(
      'AXeGsz0o294AOpsMrDZtyQDoMoouJ8JKAgbrDZUPcoHnQ9sLN5iDynm6-mPk_KZ5hV_pxYttz_Wvd8Ik',
      'ECWgBR2X6o_t59ViQbdYpKfoG25u0_J2NdNXY0omM5bvEXhfLAFVbtxr_evqgtcrwiIYmAS1OqIH4t4s'
    )
  );