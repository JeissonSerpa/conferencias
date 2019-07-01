<?php include_once 'includes/template/header.php'; ?>

	<section class="seccion contenedor">
    <h2>Calendario de Eventos</h2>
    
    <?php
      try{

        require_once('includes/funciones/conexion.php');
        $sql = "SELECT 
                  EV.nombreEvento, 
                  EV.fechaEvento, 
                  EV.horaEvento, 
                  CTEV.catEvento, 
                  CTEV.icono, 
                  IV.nombreInvitado, 
                  IV.apellidoInvitado 
                FROM 
                  eventos as EV
                LEFT JOIN 
                  categoriaEvento as CTEV 
                ON 
                  idCategoria = idCategoriaEvento
                LEFT JOIN 
                  invitados as IV 
                ON 
                  invitadoId = idInv";
        $consulta = $conn->query($sql);

      }catch(Ecxeption $e){
        echo $e->getMessage();
      } 
    ?>

    <div class="calendario clearfix">
      <?php
        $calendario = [];
        while($row = $consulta->fetch_assoc()){

          $fecha = $row['fechaEvento'];

          $evento = [
            'titulo' => $row['nombreEvento'],
            'fecha' => $row['fechaEvento'],
            'hora' => $row['horaEvento'],
            'categoria' => $row['catEvento'],
            'icono' => $row['icono'],
            'nombre' => $row['nombreInvitado']. ' ' .$row['apellidoInvitado']
          ];

          $calendario[$fecha][] = $evento;

        }

        setlocale(LC_TIME, 'es_ES.UTF-8');
        setlocale(LC_TIME, 'spanish');

        foreach($calendario as $dia => $listaEventos){
          echo "<h3> <i class= 'fas fa-calendar-alt'></i>".' '.
          utf8_encode(strftime('%A, %d de %B del %Y', strtotime($dia))."</h3>
          <div class='clearfix centrar'>");
        
         foreach($listaEventos as $evento){
          echo "<div class='dia'>
                  <p class='titulo'>". $evento['titulo'] ."</p>
                  <p class='hora'><i class='fas fa-clock' arial-hidden='true'></i> ". $evento['hora'] ."</p>
                  <p class='categoria'><i class='fas " . $evento['icono'] . "' arial-hidden='true'></i> ". $evento['categoria'] ."</p>
                  <p class='invitado'><i class='fas fa-user' arial-hidden='true'></i> ". $evento['nombre'] ."</p>
                </div>";
         }
          echo "</div>";
        }
      ?>

    </div>
  </section>
  
  <?php $conn->close(); ?>


<?php include_once 'includes/template/footer.php'; ?>