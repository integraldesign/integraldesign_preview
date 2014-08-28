<?php
	require_once("translate_title.php");
    $title = $title_lang['MENU_COMO'];
    $menu = 6;
    require_once("header.php");
?>
	<script src="js/jquery.rwdImageMaps.min.js"></script>
	<section id="about-us">
        <div class="container">
			<div class="center wow fadeInDown">
				<h2><?php echo $title_lang['MENU_COMO']; ?></h2>
				<p class="lead">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut <br> et dolore magna aliqua. Ut enim ad minim veniam</p>
				<p>
					<img usemap="#usemap" class="img-responsive"  src="images/como/como.jpg" alt="">
					<map name="usemap">
						<area shape="poly" coords="213,451,73,567,113,705,280,731,416,607,367,468" href="index.php" title="<?php echo $title_lang['MENU_INICIO']; ?>" alt="<?php echo $title_lang['MENU_INICIO']; ?>">
						<area shape="poly" coords="505,355,390,465,433,594,598,620,720,496,658,370" href="#concepto" title="<?php echo $lang['CONCEPTO']; ?>" alt="<?php echo $lang['CONCEPTO']; ?>">
						<area shape="poly" coords="700,410,721,457,927,394,901,346" href="#conceptoTEXT" title="<?php echo $lang['CONCEPTO']; ?>" alt="<?php echo $lang['CONCEPTO']; ?>">
						<area shape="poly" coords="463,230,512,342,658,359,773,256,716,146,573,133" href="#diseno" title="<?php echo $title_lang['MENU_DISENO']; ?>" alt="<?php echo $title_lang['MENU_DISENO']; ?>">
						<area shape="poly" coords="282,325,296,365,479,308,458,277" href="#disenoTEXT" title="<?php echo $title_lang['MENU_DISENO']; ?>" alt="<?php echo $title_lang['MENU_DISENO']; ?>">
						<area shape="poly" coords="733,142,782,249,948,269,1035,177,974,69,833,56" href="#ingieneria" title="<?php echo $title_lang['MENU_INGENIERIA']; ?>" alt="<?php echo $title_lang['MENU_INGENIERIA']; ?>">
						<area shape="poly" coords="1011,107,1032,142,1305,66,1276,33" href="#ingieneriaTEXT" title="<?php echo $title_lang['MENU_INGENIERIA']; ?>" alt="<?php echo $title_lang['MENU_INGENIERIA']; ?>">
						<area shape="poly" coords="1058,179,964,271,1025,395,1190,415,1277,313,1200,196" href="#preindustrializacion" title="<?php echo $lang['PREINDUSTRIA']; ?>" alt="<?php echo $lang['PREINDUSTRIA']; ?>">
						<area shape="poly" coords="1244,234,1271,275,1709,132,1669,90" href="#preindustrializacionTEXT" title="<?php echo $lang['PREINDUSTRIA']; ?>" alt="<?php echo $lang['PREINDUSTRIA']; ?>">
						<area shape="poly" coords="1209,424,1291,556,1462,576,1545,461,1456,339,1297,321" href="#maqueta" title="<?php echo $lang['MAQUETA']; ?>" alt="<?php echo $lang['MAQUETA']; ?>">
						<area shape="poly" coords="1004,549,1033,605,1242,525,1214,474" href="#maquetaTEXT" title="<?php echo $lang['MAQUETA']; ?>" alt="<?php echo $lang['MAQUETA']; ?>">
						<area shape="poly" coords="1287,574,1192,694,1277,854,1466,872,1553,732,1458,592" href="#proyecto" title="<?php echo $lang['PROYECTOINTEGRA']; ?>" alt="<?php echo $lang['PROYECTOINTEGRA']; ?>">
						<area shape="poly" coords="947,844,970,900,1205,811,1167,764" href="#proyectoTEXT" title="<?php echo $lang['PROYECTOINTEGRA']; ?>" alt="<?php echo $lang['PROYECTOINTEGRA']; ?>">
				</map>
				</p>
			</div>
		</div>
    </section><!--/#error-->
    <script>
		$(document).ready(function(e) {
			$('img[usemap]').rwdImageMaps();
			
			$('area').on('click', function() {
				alert($(this).attr('alt') + ' Apretado');
			});
		});
	</script>
<?php
    require_once("footer.php");
?>