<?php include_once 'includes/template/header.php'; ?>

	<section class="seccion contenedor">
    <h2>Calendario de Eventos</h2>
    
    <?php
      try{

        require_once('includes/funciones/conexion.php');
        $sql = "SELECT nombre_evento, fecha_evento, hora_evento, cat_evento, icono, nombre, apellido FROM eventos 
                LEFT JOIN categoriaEvento ON id_cat_evento = id_categoria
                LEFT JOIN invitados ON id_invi = id_invitado";
        $consulta = $conn->query($sql);

      }catch(Ecxeption $e){
        echo $e->getMessage();
      } 
    ?>

    <div class="calendario clearfix">
      <?php
        $calendario = [];
        while($row = $consulta->fetch_assoc()){

          $fecha = $row['fecha_evento'];

          $evento = [
            'titulo' => $row['nombre_evento'],
            'fecha' => $row['fecha_evento'],
            'hora' => $row['hora_evento'],
            'categoria' => $row['cat_evento'],
            'icono' => $row['icono'],
            'nombre' => $row['nombre']. ' ' .$row['apellido']
          ];

          $calendario[$fecha][] = $evento;

        }

        setlocale(LC_TIME, 'es_ES.UTF-8');
        setlocale(LC_TIME, 'spanish');

        foreach($calendario as $dia => $listaEventos){
          echo "<h3> <i class= 'fas fa-calendar-alt'></i>".' '.
          utf8_encode(strftime('%A, %d de %B del %Y', strtotime($dia))."</h3>");
        
         foreach($listaEventos as $evento){
          echo "<div class='dia'>
                  <p class='titulo'>". $evento['titulo'] ."</p>
                  <p class='hora'><i class='fas fa-clock' arial-hidden='true'></i> ". $evento['hora'] ."</p>
                  <p class='categoria'><i class='fas " . $evento['icono'] . "' arial-hidden='true'></i> ". $evento['categoria'] ."</p>
                  <p class='invitado'><i class='fas fa-user' arial-hidden='true'></i> ". $evento['nombre'] ."</p>
                </div>";
         }
        }
      ?>

    </div>
  </section>
  
  <?php $conn->close(); ?>


<?php include_once 'includes/template/footer.php'; ?>