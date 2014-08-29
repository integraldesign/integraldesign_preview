<section id="bottom">
        <div class="container wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="600ms">
            <div class="row">
                <div class="col-md-3 col-sm-6">
                    <div class="widget">
                        <h3><?php echo $title_lang['NOMBRE_EMPRESA']; ?></h3>
                        <ul>
                            <li><a href="nosotros.php"><?php echo $title_lang['MENU_NOSOTROS']; ?></a></li>
                            <li><a href="#">Copyright</a></li>
                            <li><a href="#"><?php echo $lang['TERMINOSDEUSO']; ?></a></li>
                            <li><a href="#"><?php echo $lang['POLITICAPRIVACIDAD']; ?></a></li>
                            <li><a href="contacto.php"><?php echo $title_lang['MENU_CONTACTO']; ?></a></li>
                        </ul>
                    </div>    
                </div><!--/.col-md-3-->

                <div class="col-md-3 col-sm-6">
                    <div class="widget">
                        <h3><?php echo strtoupper($lang['NUESTROSPARTNERS']); ?></h3>
                        <ul>
                            <li><a href="http://www.railgrup.net" target="_blank">railgrup</a></li>
                            <li><a href="http://www.navalia.es/" target="_blank">navalia</a></li>
                            <li><a href="http://www.bcnrail.com/" target="_blank">BCN Rail</a></li>
                            <li><a href="http://www.innotrans.de/" target="_blank">InnoTrans</a></li>
                            <li><a href="http://www.vialibre-ffe.com/" target="_blank">Vía Libre</a></li>
                        </ul>
                    </div>    
                </div><!--/.col-md-3-->
            </div>
        </div>
    </section><!--/#bottom-->

    <footer id="footer" class="midnight-blue">
        <div class="container">
            <div class="row">
                <div class="col-sm-5">
                    &copy; 2014 <a target="_blank" href="http://www.integraldesign.es/" title="Diseño Industrial - Ingeniería y desarrollo de producto | Empresa de diseño e ingeniería. Desarrollo de proyectos industriales desde el concepto hasta la fabricación">IntegralDesign</a>. <?php echo $lang['TODOSDERECHOS']; ?>.
                </div>
                <div class="col-sm-4">
                    <?php echo $lang['DISENOPOR']; ?> <a href="http://es.linkedin.com/pub/xavier-palacín-ayuso/47/868/291/" target="_blank">Xavier Palacín</a>
                </div>
                <div class="col-sm-3">
                    <ul class="pull-right">
                        <li><a href="index.php"><?php echo $title_lang['MENU_INICIO']; ?></a></li>
                        <li><a href="nosotros.php"><?php echo $title_lang['MENU_NOSOTROS']; ?></a></li>
                        <li><a href="donde.php"><?php echo $title_lang['MENU_DONDE']; ?></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </footer><!--/#footer-->

    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.prettyPhoto.js"></script>
    <script src="js/jquery.isotope.min.js"></script>
    <script src="js/main.js"></script>
    <script src="js/wow.min.js"></script>
</body>
</html>