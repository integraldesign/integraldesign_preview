<?php
    require_once("translate_title.php");
    $title = $title_lang['MENU_ID'];
    $menu = 10;
    require_once("header.php");
?>
    <section id="id" class="transparent-bg">
        <div class="container">
           <div class="center wow fadeInDown">
                <h2><?php echo $title_lang['MENU_ID']; ?></h2>
                <p class="lead">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut <br> et dolore magna aliqua. Ut enim ad minim veniam</p>
            </div>
        </div><!--/.container-->
    </section><!--/#id-->
<?php
    require_once("footer.php");
?>