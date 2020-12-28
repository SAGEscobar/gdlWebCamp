<footer class="site-footer">
    <div class="clearfix contenedor">
        <div class="footer-informacion">
            <h3>Sobre <span>gdlWebCamp</span></h3>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Velit eum odit veniam itaque ad natus eius ullam? Temporibus facere voluptate aliquam corrupti officiis laborum. Laudantium dolore esse quidem adipisci quam!</p>
        </div>
        <div class="ultimos-tweets">
            <h3>Ultimos <span>Tweets</span></h3>
            <ul>
            <li>
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Vitae deleniti commodi voluptas, nisi sunt voluptatum natus consectetur.
            </li>
            <li>
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Vitae deleniti commodi voluptas, nisi sunt voluptatum natus consectetur.
            </li>
            <li>
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Vitae deleniti commodi voluptas, nisi sunt voluptatum natus consectetur.
            </li>
            </ul>
        </div>
        <div class="menu">
            <h3>Redes <span>Sociales</span></h3>
            <nav class="redes-sociales">
            <a href="#"><i class="fab fa-facebook-f"></i></a>
            <a href="#"><i class="fab fa-twitter"></i></a>
            <a href="#"><i class="fab fa-pinterest-p"></i></a>
            <a href="#"><i class="fab fa-youtube"></i></a>
            <a href="#"><i class="fab fa-instagram"></i></a>
            </nav>
        </div>
    </div>
</footer>

<p class="copyright">Todos los derechos reservadios GDLWEBCAMP 2020.</p>


<!-- Google Analytics: change UA-XXXXX-Y to be your site's ID. -->
<script>
    window.ga = function () { ga.q.push(arguments) }; ga.q = []; ga.l = +new Date;
    ga('create', 'UA-XXXXX-Y', 'auto'); ga('set', 'anonymizeIp', true); ga('set', 'transport', 'beacon'); ga('send', 'pageview')
</script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="js/jquery.animateNumber.js"></script>
<script src="js/jquery.countdown.js"></script>
<script src="js/jquery.lettering.js"></script>
<script src="https://unpkg.com/leaflet@1.7.1/dist/leaflet.js"></script>
<script src='js/jquery.waypoints.js'></script>

<?php 
    $archivo = basename($_SERVER['PHP_SELF']);
    $pagina = str_replace('.php', '', $archivo);
    if($pagina == 'invitados' || $pagina == 'index'){
        echo "<script src='js/jquery.colorbox.js'></script>";
    }
?>
<?php if($pagina == 'index'): ?>
<!-- Begin Mailchimp Signup Form -->
<div style="display:none;">
<div id="mc_embed_signup" class="">
    <form action="https://yahoo.us7.list-manage.com/subscribe/post?u=d4cf4869a5396cb759685b34f&amp;id=1ab17f7a47" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate" target="_blank" novalidate>
        <div id="mc_embed_signup_scroll">
            <h2>Suscríbete y no te pierdas de nada.</h2>
            <div class="indicates-required"><span class="asterisk">*</span> Campo Obligatorio</div>
                <div class="mc-field-group">
                    <label for="mce-EMAIL">Correo Electronico  <span class="asterisk">*</span>
                    </label>
                    <input type="email" value="" name="EMAIL" class="required email" id="mce-EMAIL">
                </div>
                <div class="mc-field-group">
                    <label for="mce-FNAME">Nombre </label>
                    <input type="text" value="" name="FNAME" class="" id="mce-FNAME">
                </div>
                <div class="mc-field-group">
                    <label for="mce-LNAME">Apellido </label>
                    <input type="text" value="" name="LNAME" class="" id="mce-LNAME">
                </div>
            </div>
            <div id="mce-responses" class="clear">
                <div class="response" id="mce-error-response" style="display:none"></div>
                <div class="response" id="mce-success-response" style="display:none"></div>
            </div>    <!-- real people should not fill this in and expect good things - do not remove this or risk form bot signups-->
            <div style="position: absolute; left: -5000px;" aria-hidden="true"><input type="text" name="b_d4cf4869a5396cb759685b34f_1ab17f7a47" tabindex="-1" value=""></div>
            <div class="clear"><input type="submit" value="Suscribirse" name="subscribe" id="mc-embedded-subscribe" class="button"></div>
        </div>
    </form>
</div>
</div>

<script type='text/javascript' src='//s3.amazonaws.com/downloads.mailchimp.com/js/mc-validate.js'></script><script type='text/javascript'>(function($) {window.fnames = new Array(); window.ftypes = new Array();fnames[0]='EMAIL';ftypes[0]='email';fnames[1]='FNAME';ftypes[1]='text';fnames[2]='LNAME';ftypes[2]='text';fnames[3]='ADDRESS';ftypes[3]='address';fnames[4]='PHONE';ftypes[4]='phone';fnames[5]='BIRTHDAY';ftypes[5]='birthday';}(jQuery));var $mcj = jQuery.noConflict(true);</script>
<!--End mc_embed_signup-->
<?php endif; ?>
<script src="js/main.js"></script>
<script src="https://www.google-analytics.com/analytics.js" async></script>