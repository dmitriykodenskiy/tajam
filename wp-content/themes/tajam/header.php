<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="utf-8"/>
    <title><?php wp_title( ''); ?></title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="apple-touch-icon" sizes="57x57" href="/favicon/apple-icon-57x57.png">
	<link rel="apple-touch-icon" sizes="60x60" href="/favicon/apple-icon-60x60.png">
	<link rel="apple-touch-icon" sizes="72x72" href="/favicon/apple-icon-72x72.png">
	<link rel="apple-touch-icon" sizes="76x76" href="/favicon/apple-icon-76x76.png">
	<link rel="apple-touch-icon" sizes="114x114" href="/favicon/apple-icon-114x114.png">
	<link rel="apple-touch-icon" sizes="120x120" href="/favicon/apple-icon-120x120.png">
	<link rel="apple-touch-icon" sizes="144x144" href="/favicon/apple-icon-144x144.png">
	<link rel="apple-touch-icon" sizes="152x152" href="/favicon/apple-icon-152x152.png">
	<link rel="apple-touch-icon" sizes="180x180" href="/favicon/apple-icon-180x180.png">
	<link rel="icon" type="image/png" sizes="192x192"  href="/favicon/android-icon-192x192.png">
	<link rel="icon" type="image/png" sizes="32x32" href="/favicon/favicon-32x32.png">
	<link rel="icon" type="image/png" sizes="96x96" href="/favicon/favicon-96x96.png">
	<link rel="icon" type="image/png" sizes="16x16" href="/favicon/favicon-16x16.png">
	<link rel="manifest" href="/favicon/manifest.json">
	<meta name="msapplication-TileColor" content="#ffffff">
	<meta name="msapplication-TileImage" content="/favicon/ms-icon-144x144.png">
	<meta name="theme-color" content="#ffffff">
   <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <![endif]-->
    <?php wp_head(); ?>
</head>
<body>
    <div class="wrapper container center-block">
        <header class="site-header">  
            <div class="header__bg">
                <div class="nav-toggle">
                    <span class="burger burger_top"></span>
                    <span class="burger burger_meat"></span>
                    <span class="burger burger_bottom"></span>
                </div>
                <div class="top-wrapper">
                    <div class="logo">
                        <?php if ( is_front_page() || is_home() ) { ?>
                            <img src="<?php bloginfo("template_url"); ?>/images/logo.png" alt="parimatch">
                        <?php  } else { ?>
                            <a href="/" class="logo_img" title="parimatch">
                                <img src="<?php bloginfo("template_url"); ?>/images/logo.png" alt="parimatch">
                            </a>
                        <?php } ?> 
                    </div>   
                    <div class="menu_header">
                        <div class="menu_list">
                            <nav class="main_nav">
                                <?php
                                wp_nav_menu( array('theme_location' => 'Header menu',
                                    'menu' => 'main_menu',
                                    'menu_class' => 'nav-list-wrapper kill-list',
                                    'container' => '',
                                    'items_wrap' => '<ul class="%2$s">%3$s</ul>') );
                                ?>
                            </nav>
                        </div>
                    </div>
                </div>
                <div class="head__content">
                    <h1>We are awesome creative agency</h1>
                    <hr class="divider">
                    <p class="head__text">This is Photoshop's version  of Lorem Ipsum. Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem nibh id elit. Duis sed odio sit amet nibh vulputate cursus a sit amet mauris. Morbi accumsan ipsum velit.</p>
                    <a href="#" class="more more__head">Learn more</a>
                </div>
                
            </div>
            <?php get_template_part('slider');  ?>
        </header>