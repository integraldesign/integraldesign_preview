<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="keywords" content="diseño piezas composites, empresa diseño ingenieria, estudio diseño industrial, poliester">
    <meta name="description" content="Empresa de diseño e ingenieria. Desarrollo de proyectos industriales desde el concepto hasta la fabricacion">
    <meta name="author" content="">
    <title><?php echo $title; ?> | Diseño Industrial - Ingeniería y desarrollo de producto | Empresa de diseño e ingeniería. Desarrollo de proyectos industriales desde el concepto hasta la fabricación</title>
	
	<!-- core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/font-awesome.min.css" rel="stylesheet">
    <link href="css/animate.min.css" rel="stylesheet">
    <link href="css/prettyPhoto.css" rel="stylesheet">
    <link href="css/main.css" rel="stylesheet">
    <link href="css/responsive.css" rel="stylesheet">
    <!--[if lt IE 9]>
    <script src="js/html5shiv.js"></script>
    <script src="js/respond.min.js"></script>
    <![endif]-->       
    <link rel="shortcut icon" href="images/ico/favicon.ico">
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="images/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="images/ico/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="images/ico/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="images/ico/apple-touch-icon-57-precomposed.png">
</head><!--/head-->

<body class="homepage">

    <header id="header">
        <div class="top-bar">
            <div class="container">
                <div class="row">
                    <div class="col-sm-6 col-xs-4">
                        <div class="top-number"><p><i class="fa fa-phone-square"></i>  +34 93 474 4989</p></div>
                    </div>
                    <div class="col-sm-6 col-xs-8">
                       <div class="social">
                            <ul class="social-share">
                                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                <li><a href="https://www.linkedin.com/company/1186531?trk=prof-exp-company-name" target="_blank"><i class="fa fa-linkedin"></i></a></li> 
                                <li><a href="#"><i class="fa fa-dribbble"></i></a></li>
                                <li><a href="#"><i class="fa fa-skype"></i></a></li>
                            </ul>
                            <div class="search">
                                <form role="form">
                                    <input type="text" class="search-form" autocomplete="off" placeholder="Buscar">
                                    <i class="fa fa-search"></i>
                                </form>
                           </div>
                       </div>
                    </div>
                </div>
            </div><!--/.container-->
        </div><!--/.top-bar-->
        <?php if(empty($menu)){$menu = 1;} ?>
        <nav class="navbar navbar-inverse" role="banner">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                        <span class="sr-only">Menú desplegable</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="index.php"><img src="images/logo.png" alt="logo"></a>
                </div>
				
                <div class="collapse navbar-collapse navbar-right">
                    <ul class="nav navbar-nav">
                        <li <?php if ($menu==1) {?>class="active"<?php } ?>><a href="index.php">Inicio</a></li>
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">Porqué <i class="fa fa-angle-down"></i></a>
                            <ul class="dropdown-menu">
                                <li <?php if ($menu==3) {?>class="active"<?php } ?>><a href="origen.php">Origen</a></li>
                                <li <?php if ($menu==4) {?>class="active"<?php } ?>><a href="misionvisionvalores.php">Misión, visión y valores</a></li>
                                <li <?php if ($menu==5) {?>class="active"<?php } ?>><a href="metodologia.php">Metodología orientada<br>al éxito</a></li>
                            </ul>
                        </li>
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">Como <i class="fa fa-angle-down"></i></a>
                            <ul class="dropdown-menu">
                                <li <?php if ($menu==7) {?>class="active"<?php } ?>><a href="diseno.php">Diseño</a></li>
                                <li <?php if ($menu==8) {?>class="active"<?php } ?>><a href="ingenieria.php">Ingeniería</a></li>
                                <li <?php if ($menu==9) {?>class="active"<?php } ?>><a href="maquetas.php">Maquetas</a></li>
                                <li <?php if ($menu==10) {?>class="active"<?php } ?>><a href="id.php">I+D</a></li>
                            </ul>
                        </li>
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">Qué <i class="fa fa-angle-down"></i></a>
                            <ul class="dropdown-menu">
                                <li <?php if ($menu==12) {?>class="active"<?php } ?>><a href="ferroviario.php">Ferroviario</a></li>
                                <li <?php if ($menu==13) {?>class="active"<?php } ?>><a href="automocion.php">Automoción</a></li>
                                <li <?php if ($menu==14) {?>class="active"<?php } ?>><a href="dispositivoselectronicos.php">Dispositivos electrónicos</a></li>
                            </ul>
                        </li>
                        <li <?php if ($menu==15) {?>class="active"<?php } ?>><a href="donde.php">Dónde</a></li>
                    </ul>
                </div>
            </div><!--/.container-->
        </nav><!--/nav-->
		
    </header><!--/header-->