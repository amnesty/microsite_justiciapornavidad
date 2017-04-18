<?php include_once ("includes/config.php"); ?>
<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<!--<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">-->
	<meta name="viewport" content="user-scalable=no, width=device-width, initial-scale=1.0" />
	<title>#JusticiaPorNavidad – Amnistía Internacional</title>
    <meta name="description" content="Amnistía Internacional acude al Congreso de los Diputados a pedir #JusticiaPorNavidad con una sorprendente acción.">
    <link rel="canonical" href="<?php echo URL_SITE; ?>derecho-a-la-justicia" />
    <link rel="image_src" href="<?php echo URL_SITE; ?>images/compartir-tw.png" />
    <link rel="icon" href="favicon.ico?v=3" type="image/x-icon" />
    <meta name="pinterest-rich-pin" content="false" />
    <meta name="pinterest" content="nopin" />
    <!--Open Graph-->
    <meta property="og:url" content="<?php echo URL_SITE; ?>derecho-a-la-justicia" />
    <meta property="og:type" content="website" />
    <meta property="og:locale" content="es_ES" />
    <meta property="og:title" content="El derecho a la justicia no está de adorno." />
    <meta property="og:description" content="Amnistía Internacional acude al Congreso de los Diputados a pedir #JusticiaPorNavidad con una sorprendente acción." />
    <meta property="og:site_name" content="#JusticiaPorNavidad – Amnistía Internacional" />
    <meta property="og:image" content="<?php echo URL_SITE; ?>images/compartir-fb.png" />
    <meta property="og:image:width" content="1200" />
    <meta property="og:image:height" content="630" />
    <!--Twitter Cardas-->
    <meta name="twitter:url" content="<?php echo URL_SITE; ?>derecho-a-la-justicia" />
    <meta name="twitter:card" content="summary_large_image" />
    <meta name="twitter:site" content="@amnistiaespana">
    <meta name="twitter:creator" content="@amnistiaespana">
    <meta name="twitter:title" content="El derecho a la justicia no está de adorno." />
    <meta name="twitter:description" content="Amnistía Internacional acude al Congreso de los Diputados a pedir #JusticiaPorNavidad con una sorprendente acción." />
    <meta name="twitter:image" content="<?php echo URL_SITE; ?>images/compartir-tw.png" />
    <meta name="twitter:image:width" content="1024" />
    <meta name="twitter:image:height" content="512" />
    <meta name="twitter:image:alt" content="#JusticiaPorNavidad – Amnistía Internacional" />
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
            <div class="title"><h2>El derecho a la justicia no está de adorno.</h2></div>
			<div class="row">
				<div class="col-xs-12 col-sm-12 col-md-12 col-lg-6">
					<div class="box-text">
                        <p>El 21 de diciembre fuimos al Congreso de los Diputados con un gran árbol de Navidad y cientos de bolas navideñas con el mensaje "El derecho a la justicia no está de adorno". Lo hicimos para pedir que se cumpla el deseo de justicia de miles de víctimas de la guerra civil y el franquismo.</p>
                        <p>No te pierdas el vídeo y firma para pedirle al Ministro de Justicia, Rafael Catalá, que no se olvide de las miles de personas desaparecidas forzosamente y torturadas durante la guerra civil y el franquismo.</p>
                    </div><!-- /box-text -->
				</div>

				<div class="col-xs-12 col-sm-12 col-md-12 col-lg-6">

                    <div class="youtubevideowrap">
                        <div class="video-container">
                            <iframe width="580" height="320" src="//www.youtube.com/embed/<?php echo VIDEO_CONGRESO_ID; ?>" frameborder="0" allowfullscreen></iframe>
                        </div>
                    </div>
                    <div class="rrss">
                        <ul class="clearfix">
                            <li><a  data-shareurl="<?php echo URL_SITE . 'derecho-a-la-justicia' . TRACK_FB_UTM ; ?>" data-title="El derecho a la justicia no está de adorno." data-texto="Amnistía Internacional acude al Congreso de los Diputados a pedir #JusticiaPorNavidad con una sorprendente acción." data-imagen="<?php echo URL_SITE; ?>images/compartir-fb.png" data-caption="justiciapornavidad.org" class="fa fa-facebook-official hvr-shrink facebook-share" href="#" title="Compartir en Facebook"></a></li>
                            <!--<li><a data-shareurl="<?php echo urlencode(URL_SITE . 'derecho-a-la-justicia'. TRACK_TW_UTM ); ?>" data-texto="Firma y ayuda a Flor a hacer realidad un deseo que lleva muchos años sin cumplirse #JusticiaPorNavidad" class="fa fa-twitter hvr-shrink twitter-share" title="Compartir en Twitter" href="#"></a></li>-->
                            <li><a data-shareurl="<?php echo urlencode('https://goo.gl/l8Kebt'); ?>" data-texto="Descubre el acto de Amnistía Internacional frente al Congreso de los Diputados pidiendo #JusticiaPorNavidad" class="fa fa-twitter hvr-shrink twitter-share" title="Compartir en Twitter" href="#"></a></li>
                            <?php
    if($isMobile) {
?>
                            <li><a class="fa fa-whatsapp hvr-shrink" title="Compartir en Whatsapp" data-href="<?php echo URL_SITE; ?>derecho-a-la-justicia" data-action="share/whatsapp/share" href="whatsapp://send?text=<?=urlencode('El derecho a la justicia no está de adorno https://goo.gl/rfQeQf')?>"></a></li>
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
