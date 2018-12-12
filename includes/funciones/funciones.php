<?php

  function pasarJson(&$boletos, &$camisas = 0, &$etiquetas = 0){
    $dias = [0 => 'unDia', 1 => 'paseCompleto', 2 => 'dosDias'];
    $totalBoletos = array_combine($dias, $boletos);
    $json = [];

    foreach($totalBoletos as $key => $boletos){
      if((int) $boletos > 0){
        $json[$key] = (int) $boletos;
      }
    }

    $camisas = (int) $camisas;
    if($camisas > 0){
      $json['camisas'] = $camisas;
    }

    $etiquetas = (int) $etiquetas;
    if($etiquetas > 0){
      $json['etiquetas'] = $etiquetas;
    }

    return json_encode($json);

  }

  function eventosJson(&$eventos){
    $eventosJson = [];

    foreach($eventos as $evento){
      $eventosJson['eventos'][] = $evento;
    }

    return json_encode($eventosJson);
  }


?>