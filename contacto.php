<?php
    $title = "Contacto";
    require_once("header.php");
?>
    <section id="contact-page">
        <div class="container">
            <div class="center">        
                <h2>Contacta con nosotros</h2>
                <p class="lead">Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
            </div> 
            <div class="row contact-wrap"> 
                <div class="status alert alert-success" style="display: none"></div>
                <form id="main-contact-form" class="contact-form" name="contact-form" method="post" action="sendemail.php">
                    <div class="col-sm-5 col-sm-offset-1">
                        <div class="form-group">
                            <label>Nombre *</label>
                            <input type="text" name="name" class="form-control" required="required">
                        </div>
                        <div class="form-group">
                            <label>Correo electrónico *</label>
                            <input type="email" name="email" class="form-control" required="required">
                        </div>
                        <div class="form-group">
                            <label>Teléfono</label>
                            <input type="number" class="form-control">
                        </div>
                        <div class="form-group">
                            <label>Empresa</label>
                            <input type="text" class="form-control">
                        </div>                        
                    </div>
                    <div class="col-sm-5">
                        <div class="form-group">
                            <label>Asunto *</label>
                            <input type="text" name="subject" class="form-control" required="required">
                        </div>
                        <div class="form-group">
                            <label>Mensaje *</label>
                            <textarea name="message" id="message" required="required" class="form-control" rows="8"></textarea>
                        </div>                        
                        <div class="form-group">
                            <button type="submit" name="submit" class="btn btn-primary btn-lg" required="required">Enviar Mensaje</button>
                        </div>
                    </div>
                </form> 
            </div><!--/.row-->
        </div><!--/.container-->
    </section><!--/#contact-page-->

    <section id="contact-info">
        <div class="center">                
            <h2>¿Donde estamos?</h2>
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
                                    <h5>Integral Design And Development</h5>
                                    <p>Carrer d'Albert Einstein, 43<br>
                                    08940 Cornellà de Llobregat<br>
                                    P.l. Alameda<br>
                                    Barcelona</p>
                                    <p>Teléfono: 934 74 49 89 <br>
                                    Fax: 934 74 13 00</p>
                                    <p>Departamento Comercial: <a href="mailto:mferrer@integraldesign.es">Miquel Ferrer - mferrer@integraldesign.es</a><br>
                                    Diseño: <a href="mailto:ftelechea@integraldesign.es">Fernando Telechea - ftelechea@integraldesign.es</a><br>
                                    Ingienería: <a href="arosell:mferrer@integraldesign.es">Ana Rosell - arosell@integraldesign.es</a><br>
                                    Maquetas: <a href="mailto:amartinez@integraldesign.es">Antonio Martínez - amartinez@integraldesign.es</a><br>
                                    Nuevos mercados: <a href="mailto:dromero@integraldesign.es">Daniel Romero - dromero@integraldesign.es</a><br>
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