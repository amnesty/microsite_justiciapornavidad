<?php

if($_POST['guardar_form']) {

			// BD
			include_once('connect.php');

			// API
			include_once('api.php');

			extract($_POST);

			$nombre = $_POST['nombre'];
			$apellidos = $_POST['apellidos'];
			$email = $_POST['email'];
			$telefono = $_POST['telefono'];
			$pais = $_POST['pais'];
			$politika = $_POST['politica'];
			$origen = $_POST['origen'];
			$campanya = $_POST['campanya'];

			// IP
			$ip = $_SERVER['REMOTE_ADDR'];
			if(!$ip || $ip == ''){
					$ip = $_SERVER['HTTP_X_FORWARDED_FOR'];
			}

			// Guardar en fichero
			try {

					//nuev@s interesad@s
					$socio = es_interesado($email);

					// fichero texto - desactivado
					/*$now = date("Y-m-d h:i:sa");
					$txt = $nombre."\t".$apellidos."\t".$email."\t".$telefono."\t".$pais."\t".$politika."\t".$origen.":".$campanya."\t".$ip."\t".$socio."\t".$now."\n";
  				$myfile = fopen("file.txt", "a");
  				fwrite($myfile, $txt);
  				fclose($myfile);*/

					//bd
					include_once('../../includes/connect.php');
					$query =  "INSERT INTO `amnistia`.`datos_firmas` (`nombre`,`apellidos`,`email`,`telefono`,`country_id`,`origen`,`politica`,`ip`,`socio`)
						VALUES ('".$nombre."','".$apellidos."','".$email."','".$telefono."',".$pais.",'".$origen.":".$campanya."','".$politika."','".$ip."',".$socio.")";
  				$dummy = mysqli_query( $id_connect, $query );// or die( showQueryIfDebugMode( $query, $id_connect ) );
					mysqli_close($id_connect);

					header("location: ../gracias?s=".$socio);
			} catch(Exception $e) {
				header("location: ../gracias?error_form=1");
			}
}
?>
