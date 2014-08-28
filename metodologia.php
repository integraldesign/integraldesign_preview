<?php
    require_once("translate_title.php");
    $title = $title_lang['TITLE_METODOLOGIA'];
    $menu = 5;
    require_once("header.php");
?>
    <section id="services" class="service-item">
       <div class="container">
            <div class="center wow fadeInDown">
                <h2><?php echo $title_lang['TITLE_METODOLOGIA']; ?></h2>
                <p class="lead">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut <br> et dolore magna aliqua. Ut enim ad minim veniam</p>
            </div>

            <div class="row">

                <div class="col-sm-6 col-md-4">
                    <div class="media services-wrap wow fadeInDown">
                        <div class="pull-left">
                            <img class="img-responsive" src="images/services/services1.png">
                        </div>
                        <div class="media-body">
                            <h3 class="media-heading"><?php echo $lang['ANALISISPRODUCTO']; ?></h3>
                            <p>Lorem ipsum dolor sit ame consectetur adipisicing elit</p>
                        </div>
                    </div>
                </div>

                <div class="col-sm-6 col-md-4">
                    <div class="media services-wrap wow fadeInDown">
                        <div class="pull-left">
                            <img class="img-responsive" src="images/services/services2.png">
                        </div>
                        <div class="media-body">
                            <h3 class="media-heading"><?php echo $lang['ESTUDIOSMERCADO']; ?></h3>
                            <p>Lorem ipsum dolor sit ame consectetur adipisicing elit</p>
                        </div>
                    </div>
                </div>

                <div class="col-sm-6 col-md-4">
                    <div class="media services-wrap wow fadeInDown">
                        <div class="pull-left">
                            <img class="img-responsive" src="images/services/services3.png">
                        </div>
                        <div class="media-body">
                            <h3 class="media-heading"><?php echo $lang['CONCEPTUALIZACION']; ?></h3>
                            <p>Lorem ipsum dolor sit ame consectetur adipisicing elit</p>
                        </div>
                    </div>
                </div>  

                <div class="col-sm-6 col-md-4">
                    <div class="media services-wrap wow fadeInDown">
                        <div class="pull-left">
                            <img class="img-responsive" src="images/services/services4.png">
                        </div>
                        <div class="media-body">
                            <h3 class="media-heading"><?php echo $lang['ESTUDIOTARGET']; ?></h3>
                            <p>Lorem ipsum dolor sit ame consectetur adipisicing elit</p>
                        </div>
                    </div>
                </div>          
            </div><!--/.row-->
        </div><!--/.container-->
    </section><!--/#services-->
<?php
    require_once("footer.php");
?>