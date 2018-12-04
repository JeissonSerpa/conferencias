<?php

  $conn = new mysqli('localhost','root','','conferencias');

  if($con->connect_error){
    echo $conn->connect_error;
  }
  $conn->set_charset('utf8');
?>