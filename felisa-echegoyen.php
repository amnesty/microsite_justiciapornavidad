<?php include_once ("includes/config.php"); ?>
<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<!--<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">-->
	<meta name="viewport" content="user-scalable=no, width=device-width, initial-scale=1.0" />
	<title>Seguimos pidiendo Justicia – Amnistía Internacional</title>
    <meta name="description" content="Personas como Felisa 'desaparecieron' durante días para ser torturadas. Todo lo que desean es que vuelva la Justicia. Firma y ayúdales a conseguirlo.">
    <link rel="canonical" href="<?php echo URL_SITE; ?>felisa-echegoyen" />
    <link rel="image_src" href="<?php echo URL_SITE; ?>images/COMPARTIR-TWT-FELISA.png" />
    <link rel="icon" href="favicon.ico?v=3" type="image/x-icon" />
    <meta name="pinterest-rich-pin" content="false" />
    <meta name="pinterest" content="nopin" />
    <!--Open Graph-->
    <meta property="og:url" content="<?php echo URL_SITE; ?>felisa-echegoyen" />
    <meta property="og:type" content="website" />
    <meta property="og:locale" content="es_ES" />
    <meta property="og:title" content="Seguimos pidiendo Justicia" />
    <meta property="og:description" content="Personas como Felisa 'desaparecieron' durante días para ser torturadas. Todo lo que desean es que vuelva la Justicia. Firma y ayúdales a conseguirlo." />
    <meta property="og:site_name" content="Seguimos pidiendo Justicia" />
    <meta property="og:image" content="<?php echo URL_SITE; ?>images/COMPARTIR-FB-CASO-FELISA.png" />
    <meta property="og:image:width" content="1200" />
    <meta property="og:image:height" content="630" />
    <!--Twitter Cardas-->
    <meta name="twitter:url" content="<?php echo URL_SITE; ?>felisa-echegoyen" />
    <meta name="twitter:card" content="summary_large_image" />
    <meta name="twitter:site" content="@amnistiaespana">
    <meta name="twitter:creator" content="@amnistiaespana">
    <meta name="twitter:title" content="Seguimos pidiendo Justicia" />
    <meta name="twitter:description" content="Personas como Felisa 'desaparecieron' durante días para ser torturadas. Todo lo que desean es que vuelva la Justicia. Firma y ayúdales a conseguirlo." />
    <meta name="twitter:image" content="<?php echo URL_SITE; ?>images/COMPARTIR-TWT-FELISA.png" />
    <meta name="twitter:image:width" content="1024" />
    <meta name="twitter:image:height" content="512" />
    <meta name="twitter:image:alt" content="Seguimos pidiendo Justicia – Amnistía Internacional" />
    <!--.Open Graph-->
    <!-- jQuery 1.12.4 -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>

    <!-- CSS Bootstrap v4.0.0 -->
    <link href="css/bootstrap-flex.css" rel="stylesheet">
    <!-- CSS Reticula -->
    <link href="css/reticula.css" rel="stylesheet">
    <!-- font-awesome -->
    <link href="css/font-awesome.min.css" rel="stylesheet">
    <!-- CSS Style.css -->
    <link href="css/style.css" rel="stylesheet">
    <!-- hover.min.css -->
    <link href="css/hover.min.css" rel="stylesheet">
    <!-- cli-style.css -->
    <link href="css/cli-style.css" rel="stylesheet">

    <!-- tether.min Obligatorio para BS tooltip -->
    <script src="js/tether.min.js"></script>
    <!-- Bootstrap v4.0.0 -->
    <script src="js/bootstrap.min.js"></script>
    <!-- cookielawinfo.js -->
    <script src="js/cookielawinfo.js"></script>

    <!-- Init -->
    <script src="js/init.js"></script>

    <!-- Tipografía Maven -->
    <link href="https://fonts.googleapis.com/css?family=Maven+Pro:400,700" rel="stylesheet">

</head>
<body>

    <!-- Modal Carta petición -->
    <?php include "includes/peticion.php";?>

    <?php include "includes/header-interior.php";?>

	<section class="modulo-interior clearfix">
		<div class="container">
            <div class="title"><h2>Felisa Echegoyen, la historia de una mujer torturada.</h2></div>
			<div class="row">
				<div class="col-xs-12 col-sm-12 col-md-12 col-lg-6">
					<div class="box-text">
						<h3>“...allí ya empezaron los golpes y las amenazas… y en comisaría también, más de lo mismo. Sobre todo Billy el Niño, que este era un sádico y además disfrutaba muchísimo pegando.”</h3>
                        <p>El 8 de octubre de 1974, Felisa estaba en su casa cuando Juan Antonio González Pacheco, alias Billy el Niño, y cuatro inspectores de la Brigada Político Social tumbaron la puerta. Tenía 26 años y formaba parte de la Liga Comunista Revolucionaria. Buscaban detener a la dirección del comité local.</p>
                        <p>Durante su detención, los policías le dieron una paliza y la insultaron para que “cantara”.</p>
                        <p>Desde entonces, Felisa lucha para que se sepa la verdad y se haga justicia. Su caso forma parte de la querella argentina.</p>
                        <p>En 2013, la juez argentina María Servini dictó una orden de extradición para interrogar a Billy el Niño por su posible relación con las torturas a Felisa. Pero el gobierno español está bloqueando la investigación.</p>
                        <p>El caso de Felisa no es único. Muchas personas fueron detenidas injustamente y torturadas durante el franquismo por su forma de pensar. Durante días, no volvieron a casa. Lo único que piden es justicia</p>
                    </div><!-- /box-text -->
				</div>

				<div class="col-xs-12 col-sm-12 col-md-12 col-lg-6">

                    <div class="youtubevideowrap">
                        <div class="video-container">
                            <iframe width="580" height="320" src="//www.youtube.com/embed/LsLfGhBSM9o" frameborder="0" allowfullscreen></iframe>
                        </div>
                    </div>
                    <div class="rrss">
                        <ul class="clearfix">
                            <li><a  data-shareurl="<?php echo URL_SITE . 'felisa-echegoyen' . TRACK_FB_UTM ; ?>" data-title="Seguimos pidiendo Justicia" data-texto="Personas como Felisa 'desaparecieron' durante días para ser torturadas. Todo lo que desean es que vuelva la Justicia. Firma y ayúdales a conseguirlo." data-imagen="<?php echo URL_SITE; ?>images/COMPARTIR-FB-CASO-FELISA.png" data-caption="Amnistía Internacional" class="fa fa-facebook-official hvr-shrink facebook-share" href="#" title="Compartir en Facebook"></a></li>
                            <!--<li><a data-shareurl="<?php echo urlencode(URL_SITE . 'felisa-echegoyen'. TRACK_TW_UTM ); ?>" data-texto="Firma y ayuda a Felisa a hacer realidad un deseo que lleva muchos años sin cumplirse #JusticiaPorNavidad" class="fa fa-twitter hvr-shrink twitter-share" title="Compartir en Twitter" href="#"></a></li>-->
                            <li><a data-shareurl="<?php echo urlencode('https://goo.gl/8gkYvK'); ?>" data-texto="Firma y ayuda a Felisa a hacer realidad un deseo que lleva muchos años sin cumplirse Justicia" class="fa fa-twitter hvr-shrink twitter-share" title="Compartir en Twitter" href="#"></a></li>
                            <?php
    if($isMobile) {
?>
                            <li><a class="fa fa-whatsapp hvr-shrink" title="Compartir en Whatsapp" data-href="<?php echo URL_SITE; ?>felisa-echegoyen" data-action="share/whatsapp/share" href="whatsapp://send?text=<?=urlencode('Seguimos pidiendo Justicia – Amnistía Internacional https://goo.gl/2Ieuix')?>"></a></li>
<?php
}
?>
                        </ul>
                    </div>

				</div>
			</div><!-- /row -->
		</div><!-- /container -->
	</section><!-- /modulo-interior -->

    <!-- Módulo Firma -->
    <?php include "includes/firma-form.php";?>

    <!-- Footer -->
    <?php include "includes/footer.php";?>

    <!-- Boton Firma -->
    <a href="#firma" title="Firma" class="boton-fijo btns btn-firma hvr-sweep-to-bottom">Firma</a>

    <!-- cookies  -->
    <?php include "includes/cookies.php";?>


    <!-- pixel google  -->
    <?php include ("includes/pixelret.php"); ?>

</body>
</html>
