</div>
</div>

<div class="pie_head"> 
	designed by ING. Angel Charlot. <span class="glyphicon glyphicon-off" aria-hidden="true"> </span> 
	<br>
	legna18205@gmail.com. <span class="glyphicon glyphicon-envelope" aria-hidden="true"></span> 
	<br>
	EPS Comercializadora de alimentos C.A. (departament of informatic)<span class="glyphicon glyphicon-lock" aria-hidden="true"> </span> 
	<br>

  
</div>
<section class=""><!-- contenide del pie -->
</section>
<div class=""><!-- pie del pie -->
 </div>


 <!-- Publicos -->


<script src="<?php echo BASE_URL; ?>public/js/jquery.js" type="text/javascript"></script>
<script src="<?php echo BASE_URL; ?>public/js/alertify.min.js" type="text/javascript"></script>
<script src="<?php echo BASE_URL; ?>public/js/config.js" type="text/javascript"></script>
<script src="<?php echo BASE_URL; ?>public/js/jquery.validationEngine.js" type="text/javascript"></script>
<script src="<?php echo BASE_URL; ?>public/js/jquery.validationEngine-es.js" type="text/javascript"></script>
<script src="<?php echo BASE_URL; ?>public/js/jquery-ui.js" type="text/javascript"></script>
<script src="<?php echo BASE_URL; ?>public/js/qrcodelib.js" type="text/javascript"></script>
<script src="<?php echo BASE_URL; ?>public/js/WebCodeCam.js" type="text/javascript"></script>
<script src="<?php echo BASE_URL; ?>public/js/qr_framework.js" type="text/javascript"></script>
<script src="<?php echo BASE_URL; ?>public/js/qrcode.js" type="text/javascript"></script>
<script src="<?php echo BASE_URL; ?>public/js/modalEffects.js" type="text/javascript"></script>
<script src="<?php echo BASE_URL; ?>public/js/classie.js" type="text/javascript"></script>
<script src="<?php echo BASE_URL; ?>public/js/modernizr.custom.js" type="text/javascript"></script>
<script src="<?php echo BASE_URL; ?>public/js/cssParser.js" type="text/javascript"></script>
<script src="<?php echo BASE_URL; ?>public/js/clockCountdown.js" type="text/javascript"></script>
<script src="<?php echo BASE_URL; ?>public/js/bootstrap.min.js" type="text/javascript"></script>
<!-- Plugin JavaScript -->
<!-- Custom Theme JavaScript -->
<!--  Js del layout  -->
 <script src="<?php echo $_layoutParams['ruta_js'];?>header.js" type="text/javascript"></script>
<!--  Js de la vista  -->
<?php if(isset($_layoutParams['js']) && count($_layoutParams['js'])): ?>
    <?php for($i=0; $i < count($_layoutParams['js']); $i++): ?>
        <script src="<?php echo $_layoutParams['js'][$i] ?>" type="text/javascript"></script>
    <?php endfor; ?>
<?php endif; ?>

</body>

</html>