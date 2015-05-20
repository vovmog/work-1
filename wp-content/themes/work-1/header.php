<!DOCTYPE html>
<html>
<head lang="en">
    <meta charset="UTF-8">
    <title>work-1</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!--<link rel="stylesheet" href="./css/bootstrap.min.css"/>-->
    <link rel="stylesheet" href="<?php bloginfo('template_directory') ?>/css/main.css"/>
    <link
        href='http://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic,700italic'
        rel='stylesheet' type='text/css'>
    <!--    <script src="--><?php //bloginfo('template_directory') ?><!--js/jquery-2.1.3.min.js"></script>-->
    <!--[if lt IE 9]>
    <script src="//cdnjs.cloudflare.com/ajax/libs/html5shiv/r29/html5.min.js"></script>
    <script src="http://css3-mediaqueries-js.googlecode.com/svn/trunk/css3-mediaqueries.js"></script>
    <link rel="stylesheet" href="<?php bloginfo('template_directory') ?>/css/ie.css"/>
    <![endif]-->
    <!--<script src="js/main.js"></script>-->
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<div class="wrap-all">
    <header>
        <div class="h-logo">
            <h1><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><span><?php bloginfo('name'); ?></span><?php bloginfo('description'); ?></a></h1>
        </div>

        <nav class="menu-top1">
           <!-- <ul>
                <li><a href="#">menu1</a></li>
                <li><a href="#">menu2</a></li>
                <li><a href="#">menu3</a></li>
                <li><a href="#">menu4</a></li>
                <li><a href="#">menu5</a></li>
                <li><a href="#">menu6</a></li>
                <li><a href="#">menu7</a></li>
                <li><a href="#">menu8</a></li>
                <li><a href="#">menu9</a></li>
            </ul>-->
            <?php
            /*  $args = array(
                  'theme_location' => '',
                  'menu' => '',
                  'container' => '',
                  'container_class' => '',
                  'container_id' => '',
                  'menu_class' => 'menu header-center',
                  'menu_id' => '',
                  'echo' => true,
                  'fallback_cb' => 'wp_page_menu',
                  'before' => '',
                  'after' => '',
                  'link_before' => '<span>',
                  'link_after' => '</span>',
                  'items_wrap' => '<ul id="%1$s" class="%2$s">%3$s</ul>',
                  'depth' => 0,
                  'walker' => new My_Menu_Function
              );*/

            wp_nav_menu(array('menu' => 'main' ));
            ?>
        </nav>
        <nav class="menu-top2">
            <ul>
                <li><a href="#">menu_2_2</a></li>
                <li><a href="#">menu_2_2</a></li>
                <li><a href="#">menu_2_2</a></li>
                <li><a href="#">menu_2_2</a></li>
                <li><a href="#">menu_2_2</a></li>
                <li><a href="#">menu_2_2</a></li>
            </ul>


        </nav>




    </header>