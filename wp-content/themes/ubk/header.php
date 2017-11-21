<?php
/*
Theme Name: Ubk-mebel
Theme URI: http://ubk-mebel.ru/
Author: M2
Author URI: http://mkvadrat.com/
Description: Тема для сайта http://ubk-mebel.ru/
Version: 1.0
*/
?>

<!DOCTYPE html>
<!--[if IE 7]>
<html class="ie ie7" <?php language_attributes(); ?>>
<![endif]-->
<!--[if IE 8]>
<html class="ie ie8" <?php language_attributes(); ?>>
<![endif]-->
<!--[if !(IE 7) & !(IE 8)]><!-->
<html <?php language_attributes(); ?>>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?php echo ubk_wp_title('','', true, 'right'); ?></title>
    <base href="#">
    
    <!-- Bootstrap -->
    <link href="<?php echo esc_url( get_template_directory_uri() ); ?>/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="<?php echo esc_url( get_template_directory_uri() ); ?>/css/reset.css">
    <link rel="stylesheet" href="<?php echo esc_url( get_template_directory_uri() ); ?>/css/fonts.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
    
    <link rel="stylesheet" href="<?php echo esc_url( get_template_directory_uri() ); ?>/css/styles.css">
    <link rel="stylesheet" href="<?php echo esc_url( get_template_directory_uri() ); ?>/css/media.css">
    
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="<?php echo esc_url( get_template_directory_uri() ); ?>/js/jquery-1.9.1.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="<?php echo esc_url( get_template_directory_uri() ); ?>/js/bootstrap.min.js"></script>
    <script src="<?php echo esc_url( get_template_directory_uri() ); ?>/js/common.js"></script>
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    
    <!-- OWL-CAROUSEL -->
    <script src="<?php echo esc_url( get_template_directory_uri() ); ?>/js/owl.carousel.min.js"></script>
    <link rel="stylesheet" href="<?php echo esc_url( get_template_directory_uri() ); ?>/css/owl.carousel.min.css">
    <link rel="stylesheet" href="<?php echo esc_url( get_template_directory_uri() ); ?>/css/owl.theme.default.css">
    
    <!-- FANCYBOX -->
    <link rel="stylesheet" href="<?php echo esc_url( get_template_directory_uri() ); ?>/js/source/jquery.fancybox.css?v=2.1.5" type="text/css" media="screen" />
    <script type="text/javascript" src="<?php echo esc_url( get_template_directory_uri() ); ?>/js/source/jquery.fancybox.pack.js?v=2.1.5"></script>
    <script src="<?php echo esc_url( get_template_directory_uri() ); ?>/js/jquery.mousewheel-3.0.6.pack.js"></script>
    
    <link rel="stylesheet" href="<?php echo esc_url( get_template_directory_uri() ); ?>/js/source/helpers/jquery.fancybox-buttons.css?v=1.0.5" type="text/css" media="screen" />
    <script type="text/javascript" src="<?php echo esc_url( get_template_directory_uri() ); ?>/js/source/helpers/jquery.fancybox-buttons.js?v=1.0.5"></script>
    <script type="text/javascript" src="<?php echo esc_url( get_template_directory_uri() ); ?>/js/source/helpers/jquery.fancybox-media.js?v=1.0.6"></script>
    
    <link rel="stylesheet" href="<?php echo esc_url( get_template_directory_uri() ); ?>/js/source/helpers/jquery.fancybox-thumbs.css?v=1.0.7" type="text/css" media="screen" />
    <script type="text/javascript" src="<?php echo esc_url( get_template_directory_uri() ); ?>/js/source/helpers/jquery.fancybox-thumbs.js?v=1.0.7"></script>
    
    <!-- MMENU -->
    <link type="text/css" rel="stylesheet" href="<?php echo esc_url( get_template_directory_uri() ); ?>/css/demo.css" />
    <link type="text/css" rel="stylesheet" href="<?php echo esc_url( get_template_directory_uri() ); ?>/css/jquery.mmenu.all.css" />
    <script type="text/javascript" src="<?php echo esc_url( get_template_directory_uri() ); ?>/js/jquery.mmenu.all.js"></script>
    
    <!-- HTML5 for IE -->
    <!--[if IE]>
    <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->
    
    <!-- SWEETALERT -->
	<link rel="stylesheet" href="<?php echo esc_url( get_template_directory_uri() ); ?>/css/sweetalert.css">
	<script src="<?php echo esc_url( get_template_directory_uri() ); ?>/js/sweetalert.min.js"></script>
    
    <?php wp_head(); ?>

</head>
<body data-speed="10" data-type="background">

<div id="page">

    <a class="mmenu-button" href="#menu"><i class="fa fa-bars" aria-hidden="true"></i></a>

    <div class="header-mobile">
        <?php
            if (has_nav_menu('mobile_menu')){
                wp_nav_menu( array(
                    'theme_location'  => 'mobile_menu',
                    'menu'            => '',
                    'container'       => false,
                    'container_class' => '',
                    'container_id'    => '',
                    'menu_class'      => '',
                    'menu_id'         => '',
                    'echo'            => true,
                    'fallback_cb'     => 'wp_page_menu',
                    'before'          => '',
                    'after'           => '',
                    'link_before'     => '',
                    'link_after'      => '',
                    'items_wrap'      => '<nav id="menu"><ul>%3$s</ul></nav>',
                    'depth'           => 2,
                    //'walker'          => new header_menu(),
                ) );
            }
        ?>
        <!--<nav id="menu">
            <ul>
                <li><a href="index.html">ГЛАВНАЯ</a></li>
                <li><a href="text.html">О КОМПАНИИ</a></li>
                <li><a href="projects.html">НАШИ РАБОТЫ</a>
                <ul>
                <li><a href="#">Кухни</a></li>
                <li><a href="#">Шкафы-купе</a></li>
                <li><a href="#">Кровати</a></li>
                <li><a href="#">Шкафы, комоды, столы</a></li>
                <li><a href="#">Мебель для детской</a></li>
                <li><a href="#">Прихожие, гардеробные</a></li>
                <li><a href="#">Объекты</a></li>
                </ul>
                </li>
                <li><a href="materials.html">Услуги</a></li>
                <li><a href="articles.html">СТАТЬИ</a></li>
                <li><a href="contacts.html">КОНТАКТЫ</a></li>
            </ul>
        </nav>-->
    </div>

    <div id="toTop" ><i class="fa fa-arrow-circle-up" aria-hidden="true"></i></div>

    <!-- start header -->
    
    <header class="header">
        <div class="container-fluid">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <?php
							if (has_nav_menu('header_menu')){
								wp_nav_menu( array(
									'theme_location'  => 'header_menu',
									'menu'            => '',
									'container'       => false,
									'container_class' => '',
									'container_id'    => '',
									'menu_class'      => '',
									'menu_id'         => '',
									'echo'            => true,
									'fallback_cb'     => 'wp_page_menu',
									'before'          => '',
									'after'           => '',
									'link_before'     => '',
									'link_after'      => '',
									'items_wrap'      => '<nav><ul>%3$s</ul></nav>',
									'depth'           => 2,
									//'walker'          => new header_menu(),
								) );
							}
						?>
                    </div>
                    <div class="col-md-6">
                        <div class="logo-block">
                            <a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="logo">
                                <img
                                src="<?php header_image(); ?>"
                                height="<?php echo get_custom_header()->height; ?>"
                                width="<?php echo get_custom_header()->width; ?>"
                                alt="logotype"
                                />
                            </a>
                            
                            <?php echo getMeta('contact_block_a_main_page'); ?>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <?php echo getMeta('contact_block_b_main_page'); ?>
                    </div>
                </div>
            </div>
        </div>
    </header>
    
    <!-- end header -->