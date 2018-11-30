<?php

  $conn = new mysqli('localhost','root','','conferencias');

  if($con->connect_error){
    echo 'Error al conectar con la base de datos';
  }

?>