<?php include_once ("includes/config.php"); ?>
<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<!--<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">-->
	<meta name="viewport" content="user-scalable=no, width=device-width, initial-scale=1.0" />
	<title>Seguimos pidiendo Justicia – Amnistía Internacional</title>
    <meta name="description" content="Amnistía Internacional acude al Congreso de los Diputados a pedir #JusticiaPorNavidad con una sorprendente acción.">
    <link rel="canonical" href="<?php echo URL_SITE; ?>seguimos-pidiendo-justicia" />
    <link rel="image_src" href="<?php echo URL_SITE; ?>images/compartir-tw-2.png" />
    <link rel="icon" href="favicon.ico?v=3" type="image/x-icon" />
    <meta name="pinterest-rich-pin" content="false" />
    <meta name="pinterest" content="nopin" />
    <!--Open Graph-->
    <meta property="og:url" content="<?php echo URL_SITE; ?>seguimos-pidiendo-justicia" />
    <meta property="og:type" content="website" />
    <meta property="og:locale" content="es_ES" />
    <meta property="og:title" content="Seguimos pidiendo Justicia" />
    <meta property="og:description" content="Amnistía Internacional acude al Congreso de los Diputados a pedir #JusticiaPorNavidad con una sorprendente acción." />
    <meta property="og:site_name" content="#JusticiaPorNavidad – Amnistía Internacional" />
    <meta property="og:image" content="<?php echo URL_SITE; ?>images/compartir-fb-2.png" />
    <meta property="og:image:width" content="1200" />
    <meta property="og:image:height" content="630" />
    <!--Twitter Cardas-->
    <meta name="twitter:url" content="<?php echo URL_SITE; ?>seguimos-pidiendo-justicia" />
    <meta name="twitter:card" content="summary_large_image" />
    <meta name="twitter:site" content="@amnistiaespana">
    <meta name="twitter:creator" content="@amnistiaespana">
    <meta name="twitter:title" content="Seguimos pidiendo Justicia." />
    <meta name="twitter:description" content="Amnistía Internacional acude al Congreso de los Diputados a pedir #JusticiaPorNavidad con una sorprendente acción." />
    <meta name="twitter:image" content="<?php echo URL_SITE; ?>images/compartir-tw-2.png" />
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

	<section class="modulo-interior justiciapornavidad clearfix">
		<div class="container">
            <div class="title"><h2>Pedimos que volviera la <span class="gotham">#</span>JusticiaPorNavidad</h2></div>
			<div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                    <div class="box-text">
                        <!--<p>Durante la pasada Navidad, Amnistía internacional lanzó una parodia del conocido anuncio de turrones para dar a conocer la injusticia que siguen viviendo miles de familias cuyos seres queridos desaparecieron. Su memoria y su recuerdo nunca podrán volver en esas fechas tan emotivas ni en ninguna otra. </p> -->
                        <p>Aquí puedes ver el spot y la acción que hicimos frente al Congreso de los Diputados, donde le recordamos al Ministro de Justicia que el deseo de Justicia de estas familias no es un simple adorno si no que debe ser una realidad.</p>
                    </div><!-- /box-text -->
                </div>

				<div class="col-xs-12 col-sm-12 col-md-12 col-lg-6 video-left">
                    <div class="youtubevideowrap">
                        <div class="video-container">
                            <iframe width="580" height="320" src="//www.youtube.com/embed/<?php echo VIDEO_SPOT_ID; ?>" frameborder="0" allowfullscreen></iframe>
                        </div>
                    </div>
				</div>

				<div class="col-xs-12 col-sm-12 col-md-12 col-lg-6 video-right">

                    <div class="youtubevideowrap">
                        <div class="video-container">
                            <iframe width="580" height="320" src="//www.youtube.com/embed/<?php echo VIDEO_CONGRESO_ID; ?>" frameborder="0" allowfullscreen></iframe>
                        </div>
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
