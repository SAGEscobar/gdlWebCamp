<?php 
function productos_json(&$boletos, &$camisas=0, &$etiquetas=0) {
    $dias = array(0 =>'pase_dia',1=>'pase_completo',2=>'pase_2dias');
    $total_dias = array_combine($dias, $boletos);

    $json = array();

    foreach($total_dias as $key => $value):
        if((int)$value > 0):
            $json[$key] = (int)$value;
        endif;
    endforeach;

    $camisas = (int)$camisas;
    if($camisas > 0){
        $json['camisas'] = $camisas;
    }

    $etiquetas = (int)$etiquetas;
    if($etiquetas > 0){
        $json['etiquetas'] = $etiquetas;
    }

    return json_encode($json);
}

function eventos_json(&$eventos){
    $json = array();

    foreach($eventos as $evento):
        $json['eventos'][] = $evento;
    endforeach;

    return json_encode($json);
}