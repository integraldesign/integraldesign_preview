<?php
    require_once("translate_title.php");
    $title = $title_lang['MENU_AUTOMOCION'];
    $menu = 13;
    require_once("header.php");
?>
    <section id="portfolio">
        <div class="container">
            <div class="center">
               <h2><?php echo $title_lang['MENU_AUTOMOCION']; ?></h2>
               <p class="lead">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut <br> et dolore magna aliqua. Ut enim ad minim veniam</p>
            </div>
        

            <ul class="portfolio-filter text-center">
                <li><a class="btn btn-default active" href="#" data-filter="*"><?php echo $lang['TODOSTRABAJOS']; ?></a></li>
                <li><a class="btn btn-default" href="#" data-filter=".espana"><?php echo $lang['ESPANA']; ?></a></li>
                <li><a class="btn btn-default" href="#" data-filter=".istambul"><?php echo $lang['ISTAMBUL']; ?></a></li>
                <li><a class="btn btn-default" href="#" data-filter=".colombia"><?php echo $lang['COLOMBIA']; ?></a></li>
            </ul><!--/#portfolio-filter-->

            <div class="row">
                <div class="portfolio-items">
                    <div class="portfolio-item apps col-xs-12 col-sm-4 col-md-3">
                        <div class="recent-work-wrap">
                            <img class="img-responsive" src="images/portfolio/recent/diseno/diseno1.jpg" alt="">
                            <div class="overlay">
                                <div class="recent-work-inner">
                                    <h3><a href="#"><?php echo $title_lang['MENU_AUTOMOCION']; ?> 1</a></h3>
                                    <p>There are many variations of passages of Lorem Ipsum available, but the majority</p>
                                    <a class="preview" href="images/portfolio/full/diseno/diseno1.jpg" rel="prettyPhoto"><i class="fa fa-eye"></i> <?php echo $lang['VER']; ?></a>
                                </div> 
                            </div>
                        </div>
                    </div><!--/.portfolio-item-->

                    <div class="portfolio-item espana bootstrap col-xs-12 col-sm-4 col-md-3">
                        <div class="recent-work-wrap">
                            <img class="img-responsive" src="images/portfolio/recent/diseno/diseno5.jpg" alt="">
                            <div class="overlay">
                                <div class="recent-work-inner">
                                    <h3><a href="#"><?php echo $title_lang['MENU_AUTOMOCION']; ?> 2</a></h3>
                                    <p>España There are many variations of passages of Lorem Ipsum available, but the majority</p>
                                    <a class="preview" href="images/portfolio/full/diseno/diseno5.jpg" rel="prettyPhoto"><i class="fa fa-eye"></i> <?php echo $lang['VER']; ?></a>
                                </div> 
                            </div>
                        </div>          
                    </div><!--/.portfolio-item-->

                    <div class="portfolio-item bootstrap colombia col-xs-12 col-sm-4 col-md-3">
                        <div class="recent-work-wrap">
                            <img class="img-responsive" src="images/portfolio/recent/diseno/diseno7.jpg" alt="">
                            <div class="overlay">
                                <div class="recent-work-inner">
                                    <h3><a href="#"><?php echo $title_lang['MENU_AUTOMOCION']; ?> 3</a></h3>
                                    <p>Colombia There are many variations of passages of Lorem Ipsum available, but the majority</p>
                                    <a class="preview" href="images/portfolio/full/diseno/diseno7.jpg" rel="prettyPhoto"><i class="fa fa-eye"></i> <?php echo $lang['VER']; ?></a>
                                </div> 
                            </div>
                        </div>        
                    </div><!--/.portfolio-item-->

                    <div class="portfolio-item espana colombia apps col-xs-12 col-sm-4 col-md-3">
                        <div class="recent-work-wrap">
                            <img class="img-responsive" src="images/portfolio/recent/diseno/diseno8.jpg" alt="">
                            <div class="overlay">
                                <div class="recent-work-inner">
                                    <h3><a href="#"><?php echo $title_lang['MENU_FERROVIARIO']; ?> 4</a></h3>
                                    <p>España | Colombia There are many variations of passages of Lorem Ipsum available, but the majority</p>
                                    <a class="preview" href="images/portfolio/full/diseno/diseno8.jpg" rel="prettyPhoto"><i class="fa fa-eye"></i> <?php echo $lang['VER']; ?></a>
                                </div> 
                            </div>
                        </div>           
                    </div><!--/.portfolio-item-->
          
                    <div class="portfolio-item istambul bootstrap col-xs-12 col-sm-4 col-md-3">
                        <div class="recent-work-wrap">
                            <img class="img-responsive" src="images/portfolio/recent/diseno/diseno9.jpg" alt="">
                            <div class="overlay">
                                <div class="recent-work-inner">
                                    <h3><a href="#"><?php echo $title_lang['MENU_AUTOMOCION']; ?> 5</a></h3>
                                    <p>Istambul There are many variations of passages of Lorem Ipsum available, but the majority</p>
                                    <a class="preview" href="images/portfolio/full/diseno/diseno9.jpg" rel="prettyPhoto"><i class="fa fa-eye"></i> <?php echo $lang['VER']; ?></a>
                                </div> 
                            </div>
                        </div>      
                    </div><!--/.portfolio-item-->

                    <div class="portfolio-item colombia istambul apps col-xs-12 col-sm-4 col-md-3">
                        <div class="recent-work-wrap">
                            <img class="img-responsive" src="images/portfolio/recent/diseno/diseno10.jpg" alt="">
                            <div class="overlay">
                                <div class="recent-work-inner">
                                    <h3><a href="#"><?php echo $title_lang['MENU_AUTOMOCION']; ?> 6</a></h3>
                                    <p>Istambul | Colombia There are many variations of passages of Lorem Ipsum available, but the majority</p>
                                    <a class="preview" href="images/portfolio/full/diseno/diseno10.jpg" rel="prettyPhoto"><i class="fa fa-eye"></i> <?php echo $lang['VER']; ?></a>
                                </div> 
                            </div>
                        </div>         
                    </div><!--/.portfolio-item-->

                    <div class="portfolio-item colombia istambul col-xs-12 col-sm-4 col-md-3">
                        <div class="recent-work-wrap">
                            <img class="img-responsive" src="images/portfolio/recent/maqueta/maqueta9.jpg" alt="">
                            <div class="overlay">
                                <div class="recent-work-inner">
                                    <h3><a href="#"><?php echo $title_lang['MENU_AUTOMOCION']; ?> 7</a></h3>
                                    <p>Istambul | Colombia There are many variations of passages of Lorem Ipsum available, but the majority</p>
                                    <a class="preview" href="images/portfolio/full/maqueta/maqueta9.jpg" rel="prettyPhoto"><i class="fa fa-eye"></i> <?php echo $lang['VER']; ?></a>
                                </div> 
                            </div>
                        </div>          
                    </div><!--/.portfolio-item-->

                    <div class="portfolio-item colombia bootstrap col-xs-12 col-sm-4 col-md-3">
                        <div class="recent-work-wrap">
                            <img class="img-responsive" src="images/portfolio/recent/maqueta/maqueta13.jpg" alt="">
                            <div class="overlay">
                                <div class="recent-work-inner">
                                    <h3><a href="#"><?php echo $title_lang['MENU_AUTOMOCION']; ?> 8</a></h3>
                                    <p>Colombia There are many variations of passages of Lorem Ipsum available, but the majority</p>
                                    <a class="preview" href="images/portfolio/full/maqueta/maqueta13.jpg" rel="prettyPhoto"><i class="fa fa-eye"></i> <?php echo $lang['VER']; ?></a>
                                </div> 
                            </div>
                        </div>          
                    </div><!--/.portfolio-item-->
                </div>
            </div>
        </div>
    </section><!--/#portfolio-item-->
<?php
    require_once("footer.php");
?>