<?php
      try{
        require_once('includes/funciones/conexion.php');
        $sql = "select * from invitados";
        $consulta = $conn->query($sql);

      }catch(Ecxeption $e){
        echo $e->get_Message();
      }
    ?>

    <section class='seccion contenedor invitados'>
      <h2>Nuestros Invitados</h2>
      <ul class='lista-invitados clearfix'>

      <?php
        while($row = $consulta->fetch_assoc()){
          echo "<li>
                <div class='invitado'>
                  <a class='invitados-info' href='#invitado".$row['invitadoId']."'>
                    <img src='img/".$row['urlImagen']."' alt='Lista de invitados'>
                    <p>".$row['nombreInvitado']." ".$row['apellidoInvitado']."</p>
                  </a>
                </div>
              </li>
              <div class='invitados-none'>
                <div class='invitados-info' id='invitado".$row['invitadoId']."'>
                  <h2>".$row['nombreInvitado']." ".$row['apellidoInvitado']."</h2>
                  <img src='img/".$row['urlImagen']."' alt='Lista de invitados'>
                  <p>".$row['descripcion']."</p>
                </div>
              </div>";
          }
      ?>
      </ul>

  </section>

  <?php $conn->close(); ?>