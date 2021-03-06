<?php

?><!DOCTYPE html>
<!--[if IE 7]>
<html class="ie ie7" <?php language_attributes(); ?>>
<![endif]-->
<!--[if IE 8]>
<html class="ie ie8" <?php language_attributes(); ?>>
<![endif]-->
<!--[if !(IE 7) | !(IE 8)  ]><!-->
<html <?php language_attributes(); ?>>
<!--<![endif]-->
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>" />
    <meta name="viewport" content="width=device-width" />
    <title><?php wp_title( '|', true, 'right' ); ?></title>
    <link rel="profile" href="http://gmpg.org/xfn/11" />
    <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/bootstrap.min.css"/>
    <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/2.0.0/jquery.min.js"></script>
    <?php wp_head(); ?>
    <link rel="stylesheet/less" type="text/css" href="<?php echo get_template_directory_uri(); ?>/style.less"/>
    <script src="<?php echo get_template_directory_uri(); ?>/js/less-1.7.0.min.js" type="text/javascript"></script>
    <link rel="stylesheet" href="<?php bloginfo( 'stylesheet_url' ); ?>"/>

</head>

<body <?php body_class(); ?>>
    <header>
        <div class="top-bar">
                <?php wp_nav_menu(array('theme_location' => 'secondary')) ?>
        </div>
        <div class="header">
            <div class="menu-conteneur">
               <a href="#"> <img  src="<?php bloginfo('template_directory'); ?>/images/logo.png" alt="" height="70"/></a>
                <?php wp_nav_menu(array('theme_location' => 'primary')); ?>
            </div>
        </div>
        <div class="search-bar">
            <?php get_search_form(); ?>
        </div>
    </header>

    <div id="main" class="wrapper">
