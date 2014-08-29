<?php
	require_once("translate_title.php");
    $title = $title_lang['MENU_COMO'];
    $menu = 6;
    require_once("header.php");
?>
	<section id="como">
        <div class="container">
			<div class="center wow fadeInDown">
				<h2><?php echo $title_lang['MENU_COMO']; ?></h2>
				<p class="lead">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut <br> et dolore magna aliqua. Ut enim ad minim veniam</p>
				<p>
					<div id="wrap">
						<img usemap="#usemap"  src="images/como/como.jpg" alt="">
						<map name="usemap">
							<area shape="poly" coords="143,311,71,370,91,447,181,461,252,394,230,321" href="index.php" title="<?php echo $title_lang['MENU_INICIO']; ?>" alt="<?php echo $title_lang['MENU_INICIO']; ?>">
							<area shape="poly" coords="271,308,298,378,385,391,448,330,418,258,337,250" data-toggle="modal" data-target="#concepto" href="#concepto" title="<?php echo $lang['CONCEPTO']; ?>" alt="<?php echo $lang['CONCEPTO']; ?>">
							<area shape="poly" coords="181,208,189,238,312,202,300,174" data-toggle="modal" data-target="#concepto" href="#concepto" title="<?php echo $lang['CONCEPTO']; ?>" alt="<?php echo $lang['CONCEPTO']; ?>">
							<area shape="poly" coords="375,103,321,153,344,217,426,228,479,170,454,111" data-toggle="modal" data-target="#diseno" href="#diseno" title="<?php echo $title_lang['MENU_DISENO']; ?>" alt="<?php echo $title_lang['MENU_DISENO']; ?>">
							<area shape="poly" coords="456,266,469,301,602,255,585,225" data-toggle="modal" data-target="#diseno" href="#diseno" title="<?php echo $title_lang['MENU_DISENO']; ?>" alt="<?php echo $title_lang['MENU_DISENO']; ?>">
							<area shape="poly" coords="547,53,495,101,524,160,604,170,652,121,619,62" data-toggle="modal" data-target="#ingenieria" href="#ingenieria" title="<?php echo $title_lang['MENU_INGENIERIA']; ?>" alt="<?php echo $title_lang['MENU_INGENIERIA']; ?>">
							<area shape="poly" coords="656,64,671,94,847,41,826,9" data-toggle="modal" data-target="#ingenieria" href="#ingenieria" title="<?php echo $title_lang['MENU_INGENIERIA']; ?>" alt="<?php echo $title_lang['MENU_INGENIERIA']; ?>">
							<area shape="poly" coords="688,137,640,187,678,251,761,262,811,208,771,143" data-toggle="modal" data-target="#preindustrializacion" href="#preindustrializacion" title="<?php echo $lang['PREINDUSTRIA']; ?>" alt="<?php echo $lang['PREINDUSTRIA']; ?>">
							<area shape="poly" coords="813,149,828,182,1114,82,1087,57" data-toggle="modal" data-target="#preindustrializacion" href="#preindustrializacion" title="<?php echo $lang['PREINDUSTRIA']; ?>" alt="<?php echo $lang['PREINDUSTRIA']; ?>">
							<area shape="poly" coords="850,227,803,282,846,359,932,365,981,304,932,234" data-toggle="modal" data-target="#maqueta" href="#maqueta" title="<?php echo $lang['MAQUETA']; ?>" alt="<?php echo $lang['MAQUETA']; ?>">
							<area shape="poly" coords="655,357,670,396,806,338,791,312" data-toggle="modal" data-target="#maqueta" href="#maqueta" title="<?php echo $lang['MAQUETA']; ?>" alt="<?php echo $lang['MAQUETA']; ?>">
							<area shape="poly" coords="843,394,794,462,836,540,936,554,986,482,935,403" data-toggle="modal" data-target="#proyecto" href="#proyecto" title="<?php echo $lang['PROYECTOINTEGRA']; ?>" alt="<?php echo $lang['PROYECTOINTEGRA']; ?>">
							<area shape="poly" coords="615,549,633,585,778,530,761,497" data-toggle="modal" data-target="#proyecto" href="#proyecto" title="<?php echo $lang['PROYECTOINTEGRA']; ?>" alt="<?php echo $lang['PROYECTOINTEGRA']; ?>">
						</map>
					</div>
				</p>
			</div>
		</div>
    </section><!--/#como-->
	<script src="js/jquery.rwdImageMaps.min.js"></script>
	<script src="js/jquery.maphilight.min.js"></script>
	<script type="text/javascript">
		(function($,sr){
			 var debounce = function (func, threshold, execAsap) {
			     var timeout;
			     return function debounced () {
			         var obj = this, args = arguments;
			         function delayed () {
			             if (!execAsap)
			                 func.apply(obj, args);
			             timeout = null;
			         };
			         if (timeout)
			             clearTimeout(timeout);
			         else if (execAsap)
			             func.apply(obj, args);
			         timeout = setTimeout(delayed, threshold || 100);
			     };
			 }
			 jQuery.fn[sr] = function(fn){  return fn ? this.bind('resize', debounce(fn)) : this.trigger(sr); };
			})(jQuery,'smartresize');

		$(document).ready(function(e) {
			$('img[usemap]').rwdImageMaps();
			$('img[usemap]').maphilight({ stroke: false, fillColor: 'C52D2F', fillOpacity: 0.5 });
		});
		jQuery(window).bind('resize orientationchange', function(e) {
			var windowWidth = $(window).width();
			jQuery(window).smartresize(function(){
				jQuery('img[usemap]').maphilight({ stroke: false, fillColor: 'C52D2F', fillOpacity: 0.5 });
				if(windowWidth != $(window).width()){
					location.reload();
					return;
				}
			})
		});
	</script>
	<!-- Include js plugin -->
	<script src="js/owl.carousel.min.js"></script>
    <script type="text/javascript">
    	$(document).ready(function() {
	    	$("#owl-concepto,#owl-diseno,#owl-ingenieria,#owl-preindustrializacion,#owl-maqueta,#owl-proyecto").owlCarousel({
	    		autoPlay: 3000, //Set AutoPlay to 3 seconds
	    		items : 3,
	    		itemsDesktop : [1199,3],
				itemsDesktopSmall : [979,3]
	    	});
	    });
    </script>
    <!-- Modal Concepto -->
	<div class="modal fade" id="concepto" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
	  <div class="modal-dialog">
	    <div class="modal-content">
	      <div class="modal-header">
	        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only"><?php echo $lang['CERRAR']; ?></span></button>
	        <h4 class="modal-title" id="myModalLabel"><?php echo $lang['CONCEPTO']; ?></h4>
	      </div>
	      <div class="modal-body">
	        <p class="lead">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut <br> et dolore magna aliqua. Ut enim ad minim veniam</p>
		    <div id="owl-concepto">
			    <div class="item">
					<a class="preview" href="images/portfolio/full/concepto/concepto1.jpg" rel="prettyPhoto"><img class="img-responsive" src="images/portfolio/recent/concepto/concepto1.jpg" alt=""></a>
			    </div>
			    <div class="item">
					<a class="preview" href="images/portfolio/full/concepto/concepto2.jpg" rel="prettyPhoto"><img class="img-responsive" src="images/portfolio/recent/concepto/concepto2.jpg" alt=""></a>
			    </div>
			    <div class="item">
					<a class="preview" href="images/portfolio/full/concepto/concepto3.jpg" rel="prettyPhoto"><img class="img-responsive" src="images/portfolio/recent/concepto/concepto3.jpg" alt=""></a>
			    </div>
			    <div class="item">
					<a class="preview" href="images/portfolio/full/concepto/concepto4.jpg" rel="prettyPhoto"><img class="img-responsive" src="images/portfolio/recent/concepto/concepto4.jpg" alt=""></a>
			    </div>
			    <div class="item">
					<a class="preview" href="images/portfolio/full/concepto/concepto5.jpg" rel="prettyPhoto"><img class="img-responsive" src="images/portfolio/recent/concepto/concepto5.jpg" alt=""></a>
			    </div>
			    <div class="item">
					<a class="preview" href="images/portfolio/full/concepto/concepto6.jpg" rel="prettyPhoto"><img class="img-responsive" src="images/portfolio/recent/concepto/concepto6.jpg" alt=""></a>
			    </div>
			    <div class="item">
					<a class="preview" href="images/portfolio/full/concepto/concepto7.jpg" rel="prettyPhoto"><img class="img-responsive" src="images/portfolio/recent/concepto/concepto7.jpg" alt=""></a>
			    </div>
			    <div class="item">
					<a class="preview" href="images/portfolio/full/concepto/concepto8.jpg" rel="prettyPhoto"><img class="img-responsive" src="images/portfolio/recent/concepto/concepto8.jpg" alt=""></a>
			    </div>
			    <div class="item">
					<a class="preview" href="images/portfolio/full/concepto/concepto9.jpg" rel="prettyPhoto"><img class="img-responsive" src="images/portfolio/recent/concepto/concepto9.jpg" alt=""></a>
			    </div>
		    </div>
	      </div>
	      <div class="modal-footer">
	        <button type="button" class="btn btn-default" data-dismiss="modal"><?php echo $lang['CERRAR']; ?></button>
	      </div>
	    </div>
	  </div>
	</div>
	<!--/#Modal Concepto-->

	<!-- Modal Diseño -->
	<div class="modal fade" id="diseno" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
	  <div class="modal-dialog">
	    <div class="modal-content">
	      <div class="modal-header">
	        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only"><?php echo $lang['CERRAR']; ?></span></button>
	        <h4 class="modal-title" id="myModalLabel"><?php echo $title_lang['MENU_DISENO']; ?></h4>
	      </div>
	      <div class="modal-body">
	        <p class="lead">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut <br> et dolore magna aliqua. Ut enim ad minim veniam</p>
	        <div id="owl-diseno">
			    <div class="item">
					<a class="preview" href="images/portfolio/full/diseno/diseno1.jpg" rel="prettyPhoto"><img class="img-responsive" src="images/portfolio/recent/diseno/diseno1.jpg" alt=""></a>
			    </div>
			    <div class="item">
					<a class="preview" href="images/portfolio/full/diseno/diseno2.jpg" rel="prettyPhoto"><img class="img-responsive" src="images/portfolio/recent/diseno/diseno2.jpg" alt=""></a>
			    </div>
			    <div class="item">
					<a class="preview" href="images/portfolio/full/diseno/diseno3.jpg" rel="prettyPhoto"><img class="img-responsive" src="images/portfolio/recent/diseno/diseno3.jpg" alt=""></a>
			    </div>
			    <div class="item">
					<a class="preview" href="images/portfolio/full/diseno/diseno4.jpg" rel="prettyPhoto"><img class="img-responsive" src="images/portfolio/recent/diseno/diseno4.jpg" alt=""></a>
			    </div>
			    <div class="item">
					<a class="preview" href="images/portfolio/full/diseno/diseno5.jpg" rel="prettyPhoto"><img class="img-responsive" src="images/portfolio/recent/diseno/diseno5.jpg" alt=""></a>
			    </div>
			    <div class="item">
					<a class="preview" href="images/portfolio/full/diseno/diseno6.jpg" rel="prettyPhoto"><img class="img-responsive" src="images/portfolio/recent/diseno/diseno6.jpg" alt=""></a>
			    </div>
			    <div class="item">
					<a class="preview" href="images/portfolio/full/diseno/diseno7.jpg" rel="prettyPhoto"><img class="img-responsive" src="images/portfolio/recent/diseno/diseno7.jpg" alt=""></a>
			    </div>
			    <div class="item">
					<a class="preview" href="images/portfolio/full/diseno/diseno8.jpg" rel="prettyPhoto"><img class="img-responsive" src="images/portfolio/recent/diseno/diseno8.jpg" alt=""></a>
			    </div>
			    <div class="item">
					<a class="preview" href="images/portfolio/full/diseno/diseno9.jpg" rel="prettyPhoto"><img class="img-responsive" src="images/portfolio/recent/diseno/diseno9.jpg" alt=""></a>
			    </div>
			    <div class="item">
					<a class="preview" href="images/portfolio/full/diseno/diseno10.jpg" rel="prettyPhoto"><img class="img-responsive" src="images/portfolio/recent/diseno/diseno10.jpg" alt=""></a>
			    </div>
			    <div class="item">
					<a class="preview" href="images/portfolio/full/diseno/diseno11.jpg" rel="prettyPhoto"><img class="img-responsive" src="images/portfolio/recent/diseno/diseno11.jpg" alt=""></a>
			    </div>
			    <div class="item">
					<a class="preview" href="images/portfolio/full/diseno/diseno12.jpg" rel="prettyPhoto"><img class="img-responsive" src="images/portfolio/recent/diseno/diseno12.jpg" alt=""></a>
			    </div>
			    <div class="item">
					<a class="preview" href="images/portfolio/full/diseno/diseno13.jpg" rel="prettyPhoto"><img class="img-responsive" src="images/portfolio/recent/diseno/diseno13.jpg" alt=""></a>
			    </div>
		    </div>
	      </div>
	      <div class="modal-footer">
	        <button type="button" class="btn btn-default" data-dismiss="modal"><?php echo $lang['CERRAR']; ?></button>
	      </div>
	    </div>
	  </div>
	</div>
	<!--/#Modal Diseño-->

	<!-- Modal Ingenieria -->
	<div class="modal fade" id="ingenieria" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
	  <div class="modal-dialog">
	    <div class="modal-content">
	      <div class="modal-header">
	        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only"><?php echo $lang['CERRAR']; ?></span></button>
	        <h4 class="modal-title" id="myModalLabel"><?php echo $title_lang['MENU_INGENIERIA']; ?></h4>
	      </div>
	      <div class="modal-body">
	        <p class="lead">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut <br> et dolore magna aliqua. Ut enim ad minim veniam</p>
	        <div id="owl-ingenieria">
			    <div class="item">
					<a class="preview" href="images/portfolio/full/ingenieria/ingenieria1.jpg" rel="prettyPhoto"><img class="img-responsive" src="images/portfolio/recent/ingenieria/ingenieria1.jpg" alt=""></a>
			    </div>
			    <div class="item">
					<a class="preview" href="images/portfolio/full/ingenieria/ingenieria2.jpg" rel="prettyPhoto"><img class="img-responsive" src="images/portfolio/recent/ingenieria/ingenieria2.jpg" alt=""></a>
			    </div>
			    <div class="item">
					<a class="preview" href="images/portfolio/full/ingenieria/ingenieria3.jpg" rel="prettyPhoto"><img class="img-responsive" src="images/portfolio/recent/ingenieria/ingenieria3.jpg" alt=""></a>
			    </div>
			    <div class="item">
					<a class="preview" href="images/portfolio/full/ingenieria/ingenieria4.jpg" rel="prettyPhoto"><img class="img-responsive" src="images/portfolio/recent/ingenieria/ingenieria4.jpg" alt=""></a>
			    </div>
			    <div class="item">
					<a class="preview" href="images/portfolio/full/ingenieria/ingenieria5.jpg" rel="prettyPhoto"><img class="img-responsive" src="images/portfolio/recent/ingenieria/ingenieria5.jpg" alt=""></a>
			    </div>
			    <div class="item">
					<a class="preview" href="images/portfolio/full/ingenieria/ingenieria6.jpg" rel="prettyPhoto"><img class="img-responsive" src="images/portfolio/recent/ingenieria/ingenieria6.jpg" alt=""></a>
			    </div>
			    <div class="item">
					<a class="preview" href="images/portfolio/full/ingenieria/ingenieria7.jpg" rel="prettyPhoto"><img class="img-responsive" src="images/portfolio/recent/ingenieria/ingenieria7.jpg" alt=""></a>
			    </div>
			    <div class="item">
					<a class="preview" href="images/portfolio/full/ingenieria/ingenieria8.jpg" rel="prettyPhoto"><img class="img-responsive" src="images/portfolio/recent/ingenieria/ingenieria8.jpg" alt=""></a>
			    </div>
			    <div class="item">
					<a class="preview" href="images/portfolio/full/ingenieria/ingenieria9.jpg" rel="prettyPhoto"><img class="img-responsive" src="images/portfolio/recent/ingenieria/ingenieria9.jpg" alt=""></a>
			    </div>
			    <div class="item">
					<a class="preview" href="images/portfolio/full/ingenieria/ingenieria10.jpg" rel="prettyPhoto"><img class="img-responsive" src="images/portfolio/recent/ingenieria/ingenieria10.jpg" alt=""></a>
			    </div>
			    <div class="item">
					<a class="preview" href="images/portfolio/full/ingenieria/ingenieria11.jpg" rel="prettyPhoto"><img class="img-responsive" src="images/portfolio/recent/ingenieria/ingenieria11.jpg" alt=""></a>
			    </div>
			    <div class="item">
					<a class="preview" href="images/portfolio/full/ingenieria/ingenieria12.jpg" rel="prettyPhoto"><img class="img-responsive" src="images/portfolio/recent/ingenieria/ingenieria12.jpg" alt=""></a>
			    </div>
		    </div>
	      </div>
	      <div class="modal-footer">
	        <button type="button" class="btn btn-default" data-dismiss="modal"><?php echo $lang['CERRAR']; ?></button>
	      </div>
	    </div>
	  </div>
	</div>
	<!--/#Modal Ingenieria-->

	<!-- Modal Pre-Industrialización -->
	<div class="modal fade" id="preindustrializacion" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
	  <div class="modal-dialog">
	    <div class="modal-content">
	      <div class="modal-header">
	        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only"><?php echo $lang['CERRAR']; ?></span></button>
	        <h4 class="modal-title" id="myModalLabel"><?php echo $lang['PREINDUSTRIA']; ?></h4>
	      </div>
	      <div class="modal-body">
	        <p class="lead">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut <br> et dolore magna aliqua. Ut enim ad minim veniam</p>
	        <div id="owl-preindustrializacion">
			    <div class="item">
					<a class="preview" href="images/portfolio/full/preindustrializacion/preindustrializacion1.jpg" rel="prettyPhoto"><img class="img-responsive" src="images/portfolio/recent/preindustrializacion/preindustrializacion1.jpg" alt=""></a>
			    </div>
			    <div class="item">
					<a class="preview" href="images/portfolio/full/preindustrializacion/preindustrializacion2.jpg" rel="prettyPhoto"><img class="img-responsive" src="images/portfolio/recent/preindustrializacion/preindustrializacion2.jpg" alt=""></a>
			    </div>
			    <div class="item">
					<a class="preview" href="images/portfolio/full/preindustrializacion/preindustrializacion3.jpg" rel="prettyPhoto"><img class="img-responsive" src="images/portfolio/recent/preindustrializacion/preindustrializacion3.jpg" alt=""></a>
			    </div>
			    <div class="item">
					<a class="preview" href="images/portfolio/full/preindustrializacion/preindustrializacion4.jpg" rel="prettyPhoto"><img class="img-responsive" src="images/portfolio/recent/preindustrializacion/preindustrializacion4.jpg" alt=""></a>
			    </div>
			    <div class="item">
					<a class="preview" href="images/portfolio/full/preindustrializacion/preindustrializacion5.jpg" rel="prettyPhoto"><img class="img-responsive" src="images/portfolio/recent/preindustrializacion/preindustrializacion5.jpg" alt=""></a>
			    </div>
		    </div>
	      </div>
	      <div class="modal-footer">
	        <button type="button" class="btn btn-default" data-dismiss="modal"><?php echo $lang['CERRAR']; ?></button>
	      </div>
	    </div>
	  </div>
	</div>
	<!--/#Modal Pre-Industrialización-->

	<!-- Modal Maqueta -->
	<div class="modal fade" id="maqueta" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
	  <div class="modal-dialog">
	    <div class="modal-content">
	      <div class="modal-header">
	        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only"><?php echo $lang['CERRAR']; ?></span></button>
	        <h4 class="modal-title" id="myModalLabel"><?php echo $lang['MAQUETA']; ?></h4>
	      </div>
	      <div class="modal-body">
	        <p class="lead">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut <br> et dolore magna aliqua. Ut enim ad minim veniam</p>
	        <div id="owl-maqueta">
			    <div class="item">
					<a class="preview" href="images/portfolio/full/maqueta/maqueta1.jpg" rel="prettyPhoto"><img class="img-responsive" src="images/portfolio/recent/maqueta/maqueta1.jpg" alt=""></a>
			    </div>
			    <div class="item">
					<a class="preview" href="images/portfolio/full/maqueta/maqueta2.jpg" rel="prettyPhoto"><img class="img-responsive" src="images/portfolio/recent/maqueta/maqueta2.jpg" alt=""></a>
			    </div>
			    <div class="item">
					<a class="preview" href="images/portfolio/full/maqueta/maqueta3.jpg" rel="prettyPhoto"><img class="img-responsive" src="images/portfolio/recent/maqueta/maqueta3.jpg" alt=""></a>
			    </div>
			    <div class="item">
					<a class="preview" href="images/portfolio/full/maqueta/maqueta4.jpg" rel="prettyPhoto"><img class="img-responsive" src="images/portfolio/recent/maqueta/maqueta4.jpg" alt=""></a>
			    </div>
			    <div class="item">
					<a class="preview" href="images/portfolio/full/maqueta/maqueta5.jpg" rel="prettyPhoto"><img class="img-responsive" src="images/portfolio/recent/maqueta/maqueta5.jpg" alt=""></a>
			    </div>
			    <div class="item">
					<a class="preview" href="images/portfolio/full/maqueta/maqueta6.jpg" rel="prettyPhoto"><img class="img-responsive" src="images/portfolio/recent/maqueta/maqueta6.jpg" alt=""></a>
			    </div>
			    <div class="item">
					<a class="preview" href="images/portfolio/full/maqueta/maqueta7.jpg" rel="prettyPhoto"><img class="img-responsive" src="images/portfolio/recent/maqueta/maqueta7.jpg" alt=""></a>
			    </div>
			    <div class="item">
					<a class="preview" href="images/portfolio/full/maqueta/maqueta8.jpg" rel="prettyPhoto"><img class="img-responsive" src="images/portfolio/recent/maqueta/maqueta8.jpg" alt=""></a>
			    </div>
			    <div class="item">
					<a class="preview" href="images/portfolio/full/maqueta/maqueta9.jpg" rel="prettyPhoto"><img class="img-responsive" src="images/portfolio/recent/maqueta/maqueta9.jpg" alt=""></a>
			    </div>
			    <div class="item">
					<a class="preview" href="images/portfolio/full/maqueta/maqueta10.jpg" rel="prettyPhoto"><img class="img-responsive" src="images/portfolio/recent/maqueta/maqueta10.jpg" alt=""></a>
			    </div>
			    <div class="item">
					<a class="preview" href="images/portfolio/full/maqueta/maqueta11.jpg" rel="prettyPhoto"><img class="img-responsive" src="images/portfolio/recent/maqueta/maqueta11.jpg" alt=""></a>
			    </div>
			    <div class="item">
					<a class="preview" href="images/portfolio/full/maqueta/maqueta12.jpg" rel="prettyPhoto"><img class="img-responsive" src="images/portfolio/recent/maqueta/maqueta12.jpg" alt=""></a>
			    </div>
			    <div class="item">
					<a class="preview" href="images/portfolio/full/maqueta/maqueta13.jpg" rel="prettyPhoto"><img class="img-responsive" src="images/portfolio/recent/maqueta/maqueta13.jpg" alt=""></a>
			    </div>
			    <div class="item">
					<a class="preview" href="images/portfolio/full/maqueta/maqueta14.jpg" rel="prettyPhoto"><img class="img-responsive" src="images/portfolio/recent/maqueta/maqueta14.jpg" alt=""></a>
			    </div>
			    <div class="item">
					<a class="preview" href="images/portfolio/full/maqueta/maqueta15.jpg" rel="prettyPhoto"><img class="img-responsive" src="images/portfolio/recent/maqueta/maqueta15.jpg" alt=""></a>
			    </div>
			    <div class="item">
					<a class="preview" href="images/portfolio/full/maqueta/maqueta16.jpg" rel="prettyPhoto"><img class="img-responsive" src="images/portfolio/recent/maqueta/maqueta16.jpg" alt=""></a>
			    </div>
		    </div>
	      </div>
	      <div class="modal-footer">
	        <button type="button" class="btn btn-default" data-dismiss="modal"><?php echo $lang['CERRAR']; ?></button>
	      </div>
	    </div>
	  </div>
	</div>
	<!--/#Modal Maqueta-->

	<!-- Modal Proyecto -->
	<div class="modal fade" id="proyecto" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
	  <div class="modal-dialog">
	    <div class="modal-content">
	      <div class="modal-header">
	        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only"><?php echo $lang['CERRAR']; ?></span></button>
	        <h4 class="modal-title" id="myModalLabel"><?php echo $lang['PROYECTOINTEGRA']; ?></h4>
	      </div>
	      <div class="modal-body">
	        <p class="lead">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut <br> et dolore magna aliqua. Ut enim ad minim veniam</p>
	        <div id="owl-proyecto">
			    <div class="item">
					<a class="preview" href="images/portfolio/full/proyecto/proyecto1.jpg" rel="prettyPhoto"><img class="img-responsive" src="images/portfolio/recent/proyecto/proyecto1.jpg" alt=""></a>
			    </div>
			    <div class="item">
					<a class="preview" href="images/portfolio/full/proyecto/proyecto2.jpg" rel="prettyPhoto"><img class="img-responsive" src="images/portfolio/recent/proyecto/proyecto2.jpg" alt=""></a>
			    </div>
			    <div class="item">
					<a class="preview" href="images/portfolio/full/proyecto/proyecto3.jpg" rel="prettyPhoto"><img class="img-responsive" src="images/portfolio/recent/proyecto/proyecto3.jpg" alt=""></a>
			    </div>
			    <div class="item">
					<a class="preview" href="images/portfolio/full/proyecto/proyecto4.jpg" rel="prettyPhoto"><img class="img-responsive" src="images/portfolio/recent/proyecto/proyecto4.jpg" alt=""></a>
			    </div>
			    <div class="item">
					<a class="preview" href="images/portfolio/full/proyecto/proyecto5.jpg" rel="prettyPhoto"><img class="img-responsive" src="images/portfolio/recent/proyecto/proyecto5.jpg" alt=""></a>
			    </div>
			    <div class="item">
					<a class="preview" href="images/portfolio/full/proyecto/proyecto6.jpg" rel="prettyPhoto"><img class="img-responsive" src="images/portfolio/recent/proyecto/proyecto6.jpg" alt=""></a>
			    </div>
			    <div class="item">
					<a class="preview" href="images/portfolio/full/proyecto/proyecto7.jpg" rel="prettyPhoto"><img class="img-responsive" src="images/portfolio/recent/proyecto/proyecto7.jpg" alt=""></a>
			    </div>
			    <div class="item">
					<a class="preview" href="images/portfolio/full/proyecto/proyecto8.jpg" rel="prettyPhoto"><img class="img-responsive" src="images/portfolio/recent/proyecto/proyecto8.jpg" alt=""></a>
			    </div>
			    <div class="item">
					<a class="preview" href="images/portfolio/full/proyecto/proyecto9.jpg" rel="prettyPhoto"><img class="img-responsive" src="images/portfolio/recent/proyecto/proyecto9.jpg" alt=""></a>
			    </div>
			    <div class="item">
					<a class="preview" href="images/portfolio/full/proyecto/proyecto10.jpg" rel="prettyPhoto"><img class="img-responsive" src="images/portfolio/recent/proyecto/proyecto10.jpg" alt=""></a>
			    </div>
		    </div>
	      </div>
	      <div class="modal-footer">
	        <button type="button" class="btn btn-default" data-dismiss="modal"><?php echo $lang['CERRAR']; ?></button>
	      </div>
	    </div>
	  </div>
	</div>
	<!--/#Modal Proyecto-->

    <script>
		$(document).ready(function(e) {
			$('img[usemap]').rwdImageMaps();
			
			/*$('area').on('click', function() {
				alert($(this).attr('alt') + ' Apretado');
			});*/
		});
	</script>
<?php
    require_once("footer.php");
?>