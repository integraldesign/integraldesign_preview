<?php
	require_once("translate_title.php");
    $title = $title_lang['MENU_QUE'];
    $menu = 11;
    require_once("header.php");
?>
	<section id="about-us">
        <div class="container">
			<div class="center wow fadeInDown">
				<h2><?php echo $title_lang['MENU_QUE']; ?></h2>
				<p class="lead">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut <br> et dolore magna aliqua. Ut enim ad minim veniam</p>
			</div>
		</div>
    </section><!--/#error-->
<?php
    require_once("footer.php");
?>