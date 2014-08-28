<?php
	require_once("translate_title.php");
    $title = $title_lang['MENU_COMO'];
    $menu = 6;
    require_once("header.php");
?>
	<script src="js/jquery.rwdImageMaps.min.js"></script>
	<section id="como">
        <div class="container">
			<div class="center wow fadeInDown">
				<h2><?php echo $title_lang['MENU_COMO']; ?></h2>
				<p class="lead">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut <br> et dolore magna aliqua. Ut enim ad minim veniam</p>
				<p>
					<img usemap="#usemap" class="img-responsive"  src="images/como/como.jpg" alt="">
					<map name="usemap">
						<area shape="poly" coords="213,451,73,567,113,705,280,731,416,607,367,468" href="index.php" title="<?php echo $title_lang['MENU_INICIO']; ?>" alt="<?php echo $title_lang['MENU_INICIO']; ?>">
						<area shape="poly" coords="505,355,390,465,433,594,598,620,720,496,658,370" data-toggle="modal" data-target="#concepto" href="#concepto" title="<?php echo $lang['CONCEPTO']; ?>" alt="<?php echo $lang['CONCEPTO']; ?>">
						<area shape="poly" coords="700,410,721,457,927,394,901,346" data-toggle="modal" data-target="#concepto" href="#concepto" title="<?php echo $lang['CONCEPTO']; ?>" alt="<?php echo $lang['CONCEPTO']; ?>">
						<area shape="poly" coords="463,230,512,342,658,359,773,256,716,146,573,133" data-toggle="modal" data-target="#diseno" href="#diseno" title="<?php echo $title_lang['MENU_DISENO']; ?>" alt="<?php echo $title_lang['MENU_DISENO']; ?>">
						<area shape="poly" coords="282,325,296,365,479,308,458,277" data-toggle="modal" data-target="#diseno" href="#diseno" title="<?php echo $title_lang['MENU_DISENO']; ?>" alt="<?php echo $title_lang['MENU_DISENO']; ?>">
						<area shape="poly" coords="733,142,782,249,948,269,1035,177,974,69,833,56" data-toggle="modal" data-target="#ingieneria" href="#ingieneria" title="<?php echo $title_lang['MENU_INGENIERIA']; ?>" alt="<?php echo $title_lang['MENU_INGENIERIA']; ?>">
						<area shape="poly" coords="1011,107,1032,142,1305,66,1276,33" data-toggle="modal" data-target="#ingieneria" href="#ingieneria" title="<?php echo $title_lang['MENU_INGENIERIA']; ?>" alt="<?php echo $title_lang['MENU_INGENIERIA']; ?>">
						<area shape="poly" coords="1058,179,964,271,1025,395,1190,415,1277,313,1200,196" data-toggle="modal" data-target="#preindustrializacion" href="#preindustrializacion" title="<?php echo $lang['PREINDUSTRIA']; ?>" alt="<?php echo $lang['PREINDUSTRIA']; ?>">
						<area shape="poly" coords="1244,234,1271,275,1709,132,1669,90" data-toggle="modal" data-target="#preindustrializacion" href="#preindustrializacion" title="<?php echo $lang['PREINDUSTRIA']; ?>" alt="<?php echo $lang['PREINDUSTRIA']; ?>">
						<area shape="poly" coords="1209,424,1291,556,1462,576,1545,461,1456,339,1297,321" data-toggle="modal" data-target="#maqueta" href="#maqueta" title="<?php echo $lang['MAQUETA']; ?>" alt="<?php echo $lang['MAQUETA']; ?>">
						<area shape="poly" coords="1004,549,1033,605,1242,525,1214,474" data-toggle="modal" data-target="#maqueta" href="#maqueta" title="<?php echo $lang['MAQUETA']; ?>" alt="<?php echo $lang['MAQUETA']; ?>">
						<area shape="poly" coords="1287,574,1192,694,1277,854,1466,872,1553,732,1458,592" data-toggle="modal" data-target="#proyecto" href="#proyecto" title="<?php echo $lang['PROYECTOINTEGRA']; ?>" alt="<?php echo $lang['PROYECTOINTEGRA']; ?>">
						<area shape="poly" coords="947,844,970,900,1205,811,1167,764" data-toggle="modal" data-target="#proyecto" href="#proyecto" title="<?php echo $lang['PROYECTOINTEGRA']; ?>" alt="<?php echo $lang['PROYECTOINTEGRA']; ?>">
					</map>
				</p>
			</div>
		</div>
    </section><!--/#como-->

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
	        <p><img class="img-responsive" src="images/services/services1.png"></p>
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
	        <p><img class="img-responsive" src="images/services/services1.png"></p>
	      </div>
	      <div class="modal-footer">
	        <button type="button" class="btn btn-default" data-dismiss="modal"><?php echo $lang['CERRAR']; ?></button>
	      </div>
	    </div>
	  </div>
	</div>
	<!--/#Modal Diseño-->

	<!-- Modal Ingieneria -->
	<div class="modal fade" id="ingieneria" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
	  <div class="modal-dialog">
	    <div class="modal-content">
	      <div class="modal-header">
	        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only"><?php echo $lang['CERRAR']; ?></span></button>
	        <h4 class="modal-title" id="myModalLabel"><?php echo $title_lang['MENU_INGENIERIA']; ?></h4>
	      </div>
	      <div class="modal-body">
	        <p class="lead">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut <br> et dolore magna aliqua. Ut enim ad minim veniam</p>
	        <p><img class="img-responsive" src="images/services/services1.png"></p>
	      </div>
	      <div class="modal-footer">
	        <button type="button" class="btn btn-default" data-dismiss="modal"><?php echo $lang['CERRAR']; ?></button>
	      </div>
	    </div>
	  </div>
	</div>
	<!--/#Modal Ingieneria-->

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
	        <p><img class="img-responsive" src="images/services/services1.png"></p>
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
	        <p><img class="img-responsive" src="images/services/services1.png"></p>
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
	        <p><img class="img-responsive" src="images/services/services1.png"></p>
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