<?php

	if( isset($_POST) && $_POST['guardar_form'] ) {

			// BD
			include_once('connect.php');
			// API
			include_once('api.php');

			extract($_POST);

			$nombre = $_POST['nombre'];
			$apellidos = $_POST['apellidos'];
			$email = $_POST['email'];
			$telefono = $_POST['telefono'];
			$pais_id = $_POST['pais'];
			$politika = $_POST['politica'];
			$origen = $_POST['origen'];
			$campanya = $_POST['campanya'];

			// IP
			$ip = $_SERVER['REMOTE_ADDR'];
			if(!$ip || $ip == ''){
					$ip = $_SERVER['HTTP_X_FORWARDED_FOR'];
			}

			// User Agent
			$user_agent = $_SERVER['HTTP_USER_AGENT'];

			// Política
			if($politika == 'on'){
				$masinfo = 1;
			}
			else {
				$masinfo = 0;
			}

			try {

					// País
					$query_pais = "SELECT nombre FROM paises WHERE id_mp=".$pais_id;
					$result = mysqli_query( $id_connect, $query_pais ); //or die( 'Error: ' . mysqli_connect_errno() );
					$pais = $result->fetch_array(MYSQLI_ASSOC);
					$pais_def = $pais["nombre"];

					//nuev@s interesad@s
					$socio = es_interesado($email);

					// fichero texto
					/*$now = date("Y-m-d h:i:sa");
					$txt = $nombre."\t".$apellidos."\t".$email."\t".$telefono."\t".$pais."\t".$politika."\t".$origen.":".$campanya."\t".$ip."\t".$socio."\t".$now."\n";
  				$myfile = fopen("file.txt", "a");
  				fwrite($myfile, $txt);
  				fclose($myfile);*/

					/*$query =  "INSERT INTO `amnistia`.`datos_firmas` (`nombre`,`apellidos`,`email`,`telefono`,`country_id`,`origen`,`politica`,`ip`,`socio`)
						VALUES ('".$nombre."','".$apellidos."','".$email."','".$telefono."',".$pais.",'".$origen.":".$campanya."','".$politika."','".$ip."',".$socio.")";*/

					$query = "INSERT INTO `. $tabla .` (
								`id`,
								`accion`,
								`nombre`,
								`apellidos`,
								`apellido2`,
								`dni`,
								`poblacion`,
								`provincia`,
								`pais`,
								`email`,
								`telefono`,
								`nif`,
								`masinfo`,
								`masinfoval`,
								`rau`,
								`rauval`,
								`socio`,
								`fecha`,
								`accion2`,
								`ip`,
								`origen`,
								`origen_piwik`,
								`fax_enviado`,
								`en_ev`,
								`en_ev_firma`,
								`pais_id`,
								`provincia_id`,
								`version_movil`,
								`datos_firma_rapida`,
								`mensaje`,
								`user_agent`)
							VALUES (
									NULL,
									'justiciapornavidad',
									'".$nombre."',
									'".$apellidos."',
									'',
									'',
									'',
									'',
									'".$pais_def."',
									'".$email."',
									'".$telefono."',
									'',
									".$masinfo.",
									'0',
									'0',
									'0',
									".$socio.",
									CURRENT_TIMESTAMP,
									'',
									'".$ip."',
									'".$origen.":".$campanya."',
									'".$origen.":".$campanya."',
									'0',
									'0',
									CURRENT_TIMESTAMP,
									".$pais_id.",
									NULL,
									'0',
									'0',
									'',
									'".$user_agent."'
								)";

  				$dummy = mysqli_query( $id_connect, $query ); // or die( showQueryIfDebugMode( $query, $id_connect ) );
					mysqli_close($id_connect);

					header("location: ../gracias.php/?s=".$socio);

			} catch(Exception $e) {
					header("location: ../gracias.php/?error_form=1");
			}
	}
	else {
		echo "No hay post!";
	}

?>
