<?php require_once("translate.php"); ?>
<!DOCTYPE html>
<html lang="<?php echo $lang['HTML_LANG']; ?>">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="keywords" content="diseño piezas composites, empresa diseño ingenieria, estudio diseño industrial, poliester">
    <meta name="description" content="Empresa de diseño e ingenieria. Desarrollo de proyectos industriales desde el concepto hasta la fabricacion">
    <meta name="author" content="">
    <title><?php echo $title . " | " . $lang['TITULO_WEB']; ?></title>
	
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

    <script src="js/jquery.js"></script>
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
                                <li><a href="<?php echo $_SERVER['PHP_SELF']; ?>?lang=es">ES</a></li>
                                <li><a href="<?php echo $_SERVER['PHP_SELF']; ?>?lang=en">EN</a></li>
                                <li><a href="<?php echo $_SERVER['PHP_SELF']; ?>?lang=ru">RU</a> | </li>
                                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                <li><a href="https://www.linkedin.com/company/1186531?trk=prof-exp-company-name" target="_blank"><i class="fa fa-linkedin"></i></a></li> 
                                <li><a href="#"><i class="fa fa-dribbble"></i></a></li>
                                <li><a href="#"><i class="fa fa-skype"></i></a></li>
                            </ul>
                            <div class="search">
                                <form role="form">
                                    <input type="text" class="search-form" autocomplete="off" placeholder="<?php echo $lang['BUSCAR']; ?>">
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
                        <li <?php if ($menu==1) {?>class="active"<?php } ?>><a href="index.php"><?php echo $title_lang['MENU_INICIO']; ?></a></li>
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown"><?php echo $title_lang['MENU_PORQUE']; ?> <i class="fa fa-angle-down"></i></a>
                            <ul class="dropdown-menu">
                                <li <?php if ($menu==3) {?>class="active"<?php } ?>><a href="origen.php"><?php echo $title_lang['MENU_ORIGEN']; ?></a></li>
                                <li <?php if ($menu==4) {?>class="active"<?php } ?>><a href="misionvisionvalores.php"><?php echo $title_lang['MENU_MISIONVISIONVALORES']; ?></a></li>
                                <li <?php if ($menu==5) {?>class="active"<?php } ?>><a href="metodologia.php"><?php echo $title_lang['MENU_METODOLOGIA']; ?></a></li>
                            </ul>
                        </li>
                        <li class="dropdown <?php if ($menu>=6 AND $menu <=10) {?>active<?php } ?>">
                            <a href="como.php" class="dropdown-toggle disabled" data-toggle="dropdown"><?php echo $title_lang['MENU_COMO']; ?> <i class="fa fa-angle-down"></i></a>
                            <ul class="dropdown-menu">
                                <li <?php if ($menu==7) {?>class="active"<?php } ?>><a href="diseno.php"><?php echo $title_lang['MENU_DISENO']; ?></a></li>
                                <li <?php if ($menu==8) {?>class="active"<?php } ?>><a href="ingenieria.php"><?php echo $title_lang['MENU_INGENIERIA']; ?></a></li>
                                <li <?php if ($menu==9) {?>class="active"<?php } ?>><a href="maquetas.php"><?php echo $title_lang['MENU_MAQUETAS']; ?></a></li>
                                <li <?php if ($menu==10) {?>class="active"<?php } ?>><a href="id.php"><?php echo $title_lang['MENU_ID']; ?></a></li>
                            </ul>
                        </li>
                        <li class="dropdown <?php if ($menu>=11 AND $menu <=14) {?>active<?php } ?>">
                            <a href="que.php" class="dropdown-toggle disabled" data-toggle="dropdown"><?php echo $title_lang['MENU_QUE']; ?> <i class="fa fa-angle-down"></i></a>
                            <ul class="dropdown-menu">
                                <li <?php if ($menu==12) {?>class="active"<?php } ?>><a href="ferroviario.php"><?php echo $title_lang['MENU_FERROVIARIO']; ?></a></li>
                                <li <?php if ($menu==13) {?>class="active"<?php } ?>><a href="automocion.php"><?php echo $title_lang['MENU_AUTOMOCION']; ?></a></li>
                                <li <?php if ($menu==14) {?>class="active"<?php } ?>><a href="dispositivoselectronicos.php"><?php echo $title_lang['MENU_DISPELEC']; ?></a></li>
                            </ul>
                        </li>
                        <li <?php if ($menu==15) {?>class="active"<?php } ?>><a href="donde.php"><?php echo $title_lang['MENU_DONDE']; ?></a></li>
                    </ul>
                </div>
            </div><!--/.container-->
        </nav><!--/nav-->
		
    </header><!--/header-->