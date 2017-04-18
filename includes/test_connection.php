<?php
  include_once('connect.php');
  $query =  "INSERT INTO `amnistia`.`datos_firmas` (`nombre`,`apellidos`,`email`,`telefono`,`country_id`,`politica`,`ip`) VALUES ('Fer','Rodriguez','nano1985@gmail.com','609463305','1','ON','192.168.1.165')";
  $dummy = mysqli_query( $id_connect, $query );// or die( showQueryIfDebugMode( $query, $id_connect ) );
  echo("Error: " . mysqli_connect_errno());
?>
