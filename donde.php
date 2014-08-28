<?php
    require_once("translate_title.php");
    $title = $title_lang['TITLE_DONDE'];
    $menu = 15;
    require_once("header.php");
?>
    <section id="contact-info">
        <div class="center">                
            <h2><?php echo $title_lang['TITLE_DONDE']; ?></h2>
            <p class="lead">Lorem ipsum dolor sit amet, consectetur adipisicing elit</p>
        </div>
        <div class="gmap-area">
            <div class="container">
                <div class="row">
                    <div class="col-sm-5 text-center">
                        <div class="gmap">
                            <iframe frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3726.777574562274!2d2.0812289999999973!3d41.357394999999975!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x12a4994ed3147f19%3A0x8b07820cbbfb2a32!2sIntegral+Design+And+Development!5e1!3m2!1ses!2ses!4v1409047233894"></iframe>
                        </div>
                    </div>

                    <div class="col-sm-7 map-content">
                        <ul class="row">
                            <li class="col-sm-12">
                                <address>
                                    <h5><?php echo $title_lang['NOMBRE_EMPRESA']; ?></h5>
                                    <p>Carrer d'Albert Einstein, 43<br>
                                    08940 Cornellà de Llobregat<br>
                                    P.l. Alameda<br>
                                    Barcelona</p>
                                    <p><?php echo $lang['TELEFONO']; ?>: 934 74 49 89 <br>
                                    Fax: 934 74 13 00</p>
                                    <p><?php echo $lang['DEPCOMERCIAL']; ?>: <a href="mailto:mferrer@integraldesign.es">Miquel Ferrer - mferrer@integraldesign.es</a><br>
                                    <?php echo $title_lang['MENU_DISENO']; ?>: <a href="mailto:ftelechea@integraldesign.es">Fernando Telechea - ftelechea@integraldesign.es</a><br>
                                    <?php echo $title_lang['MENU_INGENIERIA']; ?>: <a href="arosell:mferrer@integraldesign.es">Ana Rosell - arosell@integraldesign.es</a><br>
                                    <?php echo $title_lang['MENU_MAQUETAS']; ?>: <a href="mailto:amartinez@integraldesign.es">Antonio Martínez - amartinez@integraldesign.es</a><br>
                                    <?php echo $lang['NUEVOSMERCADOS']; ?>: <a href="mailto:dromero@integraldesign.es">Daniel Romero - dromero@integraldesign.es</a><br>
                                    </p>
                                </address>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>  <!--/gmap_area -->
<?php
    require_once("footer.php");
?>