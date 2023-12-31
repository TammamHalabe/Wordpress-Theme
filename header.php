<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <?php
        echo'<title>';
        if ( is_home() ) {
        // Blog's Home
        echo get_bloginfo('name') . '  &raquo; Weblog';
        } elseif ( is_single() or is_page() ) {
        // Single blog post or page
        wp_title(''); echo ' - ' . get_bloginfo('name');
        } elseif ( is_category() ) {
        // Archive: Category
        echo get_bloginfo('name') . ' &raquo; Kategorie: '; single_cat_title();
        } elseif ( is_day() ) {
        // Archive: By day
        echo get_bloginfo('name') . ' &raquo; Alle Artikel vom ' . get_the_time('d') . '. ' . get_the_time('F') . ' ' . get_the_time('Y');
        } elseif ( is_month() ) {
        // Archive: By month
        echo get_bloginfo('name') . ' &raquo; Alle Artikel vom ' . get_the_time('F') . ' ' . get_the_time('Y');
        } elseif ( is_year() ) {
        // Archive: By year
        echo get_bloginfo('name') . ' &raquo; Alle Artikel vom Jahr ' . get_the_time('Y');
        } elseif ( is_search() ) {
        // Search
        echo get_bloginfo('name') . ' &raquo; Suche:      &lt;' . wp_specialchars($s, 1) . '&gt;';
        } elseif ( is_404() ) {
        // 404
        echo get_bloginfo('name') . '  &raquo; 404 - Angeforderte Seite nicht gefunden';
        } else {
        // Everything else. Fallback
        echo wp_title(''); echo ' - ' . get_bloginfo('name');
        }
           echo'</title>';
    ?>
    <!-- Mobile viewport optimisation -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">    
    <meta name="generator" content="WordPress <?php bloginfo('version'); ?>" /> <!-- Stats -->
    <!-- <meta name="siteinfo" content="<?php //bloginfo('url'); ?>/robots.txt" /> Robot-Datei -->
    <meta name="robots" content="index, follow" /> <!-- Alles wird indexiert -->
    <link rel="alternate" type="application/rss+xml" title="RSS 2.0" href="<?php bloginfo('rss2_url'); ?>">
    <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">
    <?php if ( is_singular() ) wp_enqueue_script( 'comment-reply' ); ?> <!-- Javascript Comment Functionality -->
    <?php wp_head(); ?>    
    <link href="<?php bloginfo('stylesheet_url'); ?>" rel="stylesheet" type="text/css">
    <!--[if lte IE 7]>
    <link href="<?php bloginfo('template_url'); ?>/yaml/core/iehacks.css" rel="stylesheet" type="text/css">
    <![endif]-->
    <!--[if lt IE 9]>
    <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->
</head>
<body>



        <div id="header">
        <div id="banner">
        <div id="welcome">
            <h1><?php bloginfo('name'); ?></h1>
        </div><!--close welcome-->
        <div id="welcome_slogan">
            <h1><?php bloginfo('description'); ?></h1>
        </div><!--close welcome_slogan-->
        </div><!--close banner-->
        </div><!--close header-->

        <nav id="menu_container">
            <div id="menubar">
                <div id="menu">
                    <?php 
                    wp_nav_menu(array(
                        'menu' => 'Main Navigation Menu', 'depth' => 4, 'theme_location' => 'Main Navigation Menu'));
                    ?>
                <?php get_search_form(); ?>
                </div><!--close menubar-->	
            </div><!--close menu_container-->
        </nav>
        <p>
            <?php if (function_exists('nav_breadcrumb')) nav_breadcrumb(); ?>
        </p>
        <!-- ENDE Navigation --> 
<!-- bis hier: header.php --> 
