<?php

//print_r($_POST);

function callApi($url, $method) {
		$ch = curl_init($url);
		curl_setopt($ch, CURLOPT_CUSTOMREQUEST, $method);
		curl_setopt($ch, CURLOPT_URL, $url);
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
		curl_setopt($ch, CURLOPT_HTTPGET, 1);
		$result = curl_exec($ch);
		curl_close($ch);
		return $result;
}

function es_interesado($email) {
		// Params
	  $login = 'ccapote_amnistia_api';
	  $password = 'p@ssw0rd';
	  $api_key = 'CdX7ColF7lCfnlRYb8MitZOUbBUrc_yDowKsBtdPO6SgbxDNgpGZWBsHMdTHySM';
	  $url_base = 'https://p4apic.emv2.com/apimember/services/rest/';

	  // Conexion
	  $url_conexion = $url_base.'connect/open/'.$login.'/'.$password.'/'.$api_key;
	  $token = callApi($url_conexion, "GET");
	  $xml_token = new SimpleXMLElement($token);
	  $token = $xml_token->result;

	  // Consulta por mail
	  $url_mail = $url_base.'member/getMemberByEmail/'.$token.'/'.$email;
	  $result = callApi($url_mail, "GET");
	  $xml = new SimpleXMLElement($result);

	  $status=2;
	  if(!empty($xml->members->member)){
				$pvkey="";
	      foreach($xml->members->member->attributes->entry as $entry) {
	        if($entry->key=='AI_PVKEY'){
	            $pvkey = $entry->value;
	        }
	      }
	      $status = (($pvkey > 0 && $pvkey != '')?1:0);
	  }
	  // Cerrar conexion
	  $url_close = $url_base.'connect/close/'.$token;
	  callApi($url_close, "GET");
		return $status;
}

if($_POST['guardar_form']) {

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
