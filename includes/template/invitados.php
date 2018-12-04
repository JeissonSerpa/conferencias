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
                  <a class='invitados-info' href='#invitado".$row['id_invitado']."'>
                    <img src='img/".$row['url_imagen']."' alt='Lista de invitados'>
                    <p>".$row['nombre']." ".$row['apellido']."</p>
                  </a>
                </div>
              </li>
              <div class='invitados-none'>
                <div class='invitados-info' id='invitado".$row['id_invitado']."'>
                  <h2>".$row['nombre']." ".$row['apellido']."</h2>
                  <img src='img/".$row['url_imagen']."' alt='Lista de invitados'>
                  <p>".$row['descripcion']."</p>
                </div>
              </div>";
          }
      ?>
      </ul>

  </section>

  <?php $conn->close(); ?>