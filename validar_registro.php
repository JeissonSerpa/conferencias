<?php

  include_once 'includes/funciones/funciones.php';

  if(isset($_POST['submit'])){
    
    $nombre = $_POST['nombre'];
    $apellido = $_POST['apellidos'];
    $email = $_POST['email'];
    $regalo = $_POST['regalo'];
    $totalPagar = $_POST['total-pagar'];
    $fecha = date('Y-m-d H:i:s');

    //pedidos

    $boletos = $_POST['boletos'];
    $camisas = $_POST['pedido_camisas'];
    $etiquetas = $_POST['pedido_etiquetas'];

    $pedido = pasarJson($boletos, $camisas, $etiquetas);

    //eventos

    $eventos = $_POST['registro'];

    $eventosFinal = eventosJson($eventos);

    //preparando la insercion a la base de datos

    try{
      
      require_once('includes/funciones/conexion.php');

      $stmt = $conn->prepare("INSERT INTO registrados (nombre_registrado, apellido_registrado, email_registrado, fecha_registro, pases_articulos, talleres_registrados, regalo, total_pagado)
                                VALUES (?, ?, ?, ?, ?, ?, ?, ?)");
                        
      $stmt->bind_param("ssssssis", $nombre, $apellido, $email, $fecha, $pedido, $eventosFinal, $regalo, $totalPagar);
      $stmt->execute();
      $stmt->close();
      $conn->close();
      header('location: validar_registro.php?exitoso=1');
    }catch(Exception $e){
      $erros = $e->getMessage();
    }
  }
?>

<?php include_once 'includes/template/header.php'; ?>

  <section class="seccion contenedor">
    <h2>Registro Resumen</h2>

  </section>

<?php include_once 'includes/template/footer.php'; ?>