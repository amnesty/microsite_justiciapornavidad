<?php
ini_set('display_errors', 0);
error_reporting(0);

include_once ("includes/config.php");

?>
<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<!--<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">-->
	<meta name="viewport" content="user-scalable=no, width=device-width, initial-scale=1.0" />
	<title>Seguimos pidiendo Justicia – Amnistía Internacional</title>
    <meta name="description" content="Miles de personas 'desaparecidas' durante la guerra civil y el franquismo no volvieron a casa. Firma para pedir al gobierno que este año no se olvide de ellas.">
	<link rel="canonical" href="<?php echo URL_SITE; ?>" />
    <link rel="image_src" href="<?php echo URL_SITE; ?>images/compartir-tw-2.png" />
    <link rel="icon" href="favicon.ico?v=3" type="image/x-icon" />
    <meta name="pinterest-rich-pin" content="false" />
    <meta name="pinterest" content="nopin" />
    <!--Open Graph-->
    <meta property="og:url" content="<?php echo URL_SITE; ?>" />
    <meta property="og:type" content="website" />
    <meta property="og:locale" content="es_ES" />
    <meta property="og:title" content="Seguimos pidiendo Justicia – Amnistía Internacional" />
    <meta property="og:description" content="Miles de personas 'desaparecidas' durante la guerra civil y el franquismo no volvieron a casa. Firma para pedir al gobierno que este año no se olvide de ellas." />
    <meta property="og:site_name" content="Seguimos pidiendo Justicia – Amnistía Internacional" />
    <meta property="og:image" content="<?php echo URL_SITE; ?>images/compartir-fb-2.png" />
    <meta property="og:image:width" content="1200" />
    <meta property="og:image:height" content="630" />
    <!--Twitter Cardas-->
    <meta name="twitter:url" content="<?php echo URL_SITE; ?>" />
    <meta name="twitter:card" content="summary_large_image" />
    <meta name="twitter:site" content="@amnistiaespana">
    <meta name="twitter:creator" content="@amnistiaespana">
    <meta name="twitter:title" content="Seguimos pidiendo Justicia – Amnistía Internacional" />
    <meta name="twitter:description" content="Miles de personas 'desaparecidas' durante la guerra civil y el franquismo no volvieron a casa. Firma para pedir al gobierno que este año no se olvide de ellas." />
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


<?php
//Tienen activa la cookie de aceptar cookies: cookieAlert3 = "1"
if (isset($_COOKIE['cookieAlert3']) && $_COOKIE['cookieAlert3'] == 1) {

    //VIENE DE GOOGLE Grants
    if($_SESSION['pk_campaign'] == 'anunggl' || $_SESSION['utm_campaign'] == 'anunggl') {
?>

<!-- Google Code for pixel_firmas_grant Conversion Page -->
<script type="text/javascript">
/* <![CDATA[ */
var google_conversion_id = 973137582;
var google_conversion_language = "en";
var google_conversion_format = "3";
var google_conversion_color = "ffffff";
var google_conversion_label = "lfA3CIPcvnAQrs2D0AM";
var google_remarketing_only = false;
/* ]]> */
</script>
<script type="text/javascript" src="//www.googleadservices.com/pagead/conversion.js">
</script>
<noscript>
<div style="display:inline;">
<img height="1" width="1" style="border-style:none;" alt="" src="//www.googleadservices.com/pagead/conversion/973137582/?label=lfA3CIPcvnAQrs2D0AM&amp;guid=ON&amp;script=0"/>
</div>
</noscript>

<?php
    }

    //VIENE DE GOOGLE Display
    if($_SESSION['pk_campaign'] == 'anunggl_visual' || $_SESSION['utm_campaign'] == 'anunggl_visual') {
?>

<!-- Google Code for Pixel_firmas Conversion Page -->
<script type="text/javascript">
/* <![CDATA[ */
var google_conversion_id = 966452768;
var google_conversion_language = "en";
var google_conversion_format = "3";
var google_conversion_color = "ffffff";
var google_conversion_label = "gEVDCNmMmWwQoMzrzAM";
var google_remarketing_only = false;
/* ]]> */
</script>
<script type="text/javascript" src="//www.googleadservices.com/pagead/conversion.js">
</script>
<noscript>
<div style="display:inline;">
<img height="1" width="1" style="border-style:none;" alt="" src="//www.googleadservices.com/pagead/conversion/966452768/?label=gEVDCNmMmWwQoMzrzAM&amp;guid=ON&amp;script=0"/>
</div>
</noscript>

<?php
    }

    //VIENE DE FACEBOOK
    if($_SESSION['pk_campaign'] == 'anunfbk' || $_SESSION['utm_campaign'] == 'anunfbk' || $_SESSION['utm_source'] == 'FBPAGE' || $_SESSION['utm_source'] == 'fbpage') {
?>
    <!-- Facebook Pixel Code -->
    <script>
    !function(f,b,e,v,n,t,s){if(f.fbq)return;n=f.fbq=function(){n.callMethod?
    n.callMethod.apply(n,arguments):n.queue.push(arguments)};if(!f._fbq)f._fbq=n;
    n.push=n;n.loaded=!0;n.version='2.0';n.queue=[];t=b.createElement(e);t.async=!0;
    t.src=v;s=b.getElementsByTagName(e)[0];s.parentNode.insertBefore(t,s)}(window,
    document,'script','https://connect.facebook.net/en_US/fbevents.js');
    fbq('init', '1076898019072470');
    fbq('track', "PageView");
    fbq('track', 'Lead');
    </script>
    <noscript><img height="1" width="1" style="display:none"
    src="https://www.facebook.com/tr?id=1076898019072470&ev=PageView&noscript=1"
    /></noscript>
    <!-- End Facebook Pixel Code -->
<?php
    }
}
?>
</head>
<body>

    <!-- Header -->
    <header class="interior">
        <div class="capa"></div>
        <div class="logo"><a href="<?php echo URL_SITE; ?>" title="Amnistía Internacional"><img src="images/logo-amnistia-blanco.png" alt="Amnistía Internacional"></a></div>
        <div class="botones">
            <ul class="clearfix">
                <li><a href="<?php echo URL_SITE; ?>" title="Volver a la campaña" class="btns btn-gracias hvr-sweep-to-bottom">Ir a la campaña</a></li>
            </ul>
        </div>
    </header>



    <!-- Módulo Firma -->
    <div class="modulo-firma gracias-firma">
        <div class="gracias">
<?php
if($_GET['error_form'] == 1){
?>
                <div class="box-text">
                    <h4>¡Error!</h4>
                    <p>Lo sentimos, se ha producido un error al guardar tus datos. Por favor, inténtalo más tarde.</p>
                    <p><a href="<?php echo URL_SITE; ?>" title="Volver a la campaña" class="">Volver</a></p>
                </div>

<?php
} else {
?>
                <div class="box-text">
                    <h4>¡Muchas gracias!</h4>
                    <p>Por hacer realidad un deseo que lleva demasiados años sin cumplirse: <b>el deseo de justicia.</b></p>
                </div>

                <div class="row ">
                    <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
                        <!--<img class="bola-mobile" src="images/bola-gracias.png" alt="Adorno">-->
                        <div class="box-text-adorno">
                            <h5>Sigue colaborando con la campaña con un donativo.</h5>
                            <p>Juntos podemos conseguir que haya justicia para todas estas personas. Si lo deseas, puedes donar la cantidad que consideres para ayudarnos a conseguirlo.</p>
                            <a class="btn-consigue-adorno hvr-sweep-to-bottom" href="https://crm.es.amnesty.org/haz-un-donativo-justicia?origen=justiciapornavidad" target="_blank">Haz un donativo</a>
                        </div><!-- /box-text-adorno -->
                        <!--<img class="bola-desktop" src="images/bola-gracias.png" alt="Adorno">-->
                    </div>

                    <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 gracias-hazte-socio">
                        <div class="box-hazte-socio">
                            <h5>Si quieres apoyar la defensa de los derechos humanos todos los días, ÚNETE a Amnistía Internacional.</h5>
                            <p>Somos independientes porque no aceptamos subvenciones de gobiernos ni donaciones de partidos políticos. Por eso podemos defender los derechos humanos en cualquier lugar.</p>
                            <a class="btn-hazte-socio hvr-sweep-to-bottom" href="https://crm.es.amnesty.org/unete-a-amnistia-justicia?origen=justiciapornavidad" target="_blank">Hazte socio/a</a>
                        </div>
                    </div>
                </div><!--.row-->

            <!--</div>-->
    <?php } ?>
        </div><!-- /Gracias -->
    </div>
    <!-- Módulo Gracias -->


<!-- Piwik -->
<script type="text/javascript">
	var nuevoFirmante = <?php echo $_GET['s']; ?>;
	//alert(nuevoFirmante);
  var _paq = _paq || [];
  _paq.push(["setDocumentTitle", document.domain + "/" + document.title]);
  _paq.push(["setCookieDomain", "*.es.amnesty.org"]);
  _paq.push(["setDomains", ["*.es.amnesty.org",]]);
  _paq.push(['trackPageView']);
  _paq.push(['enableLinkTracking']);
  _paq.push(['trackGoal', 45]);
	_paq.push(["trackGoal", 6]);
	_paq.push(["trackGoal", 33]);
	if (nuevoFirmante==2) {
   	_paq.push(["trackGoal", 8]);
	}
  (function() {
    var u="//estadisticas.es.amnesty.org/piwik/";
    _paq.push(['setTrackerUrl', u+'piwik.php']);
    _paq.push(['setSiteId', '1']);
    var d=document, g=d.createElement('script'), s=d.getElementsByTagName('script')[0];
    g.type='text/javascript'; g.async=true; g.defer=true; g.src=u+'piwik.js'; s.parentNode.insertBefore(g,s);
  })();
</script>
<noscript><p><img src="//estadisticas.es.amnesty.org/piwik/piwik.php?idsite=1" style="border:0;" alt="" /></p></noscript>
<!-- End Piwik Code -->


    <!-- pixel google  -->
    <?php include ("includes/pixelret.php"); ?>

</body>
</html>
