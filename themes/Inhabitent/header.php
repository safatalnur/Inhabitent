<!DOCTYPE html>
<html <?php language_attributes();?>>

<head>
    <?php wp_head();?>
    <meta charset="<?php bloginfo('charset');?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
</head>
<body <?php body_class();?>>
<nav class="navigation-bar">

    <a href="/inhabitent/"><img class="home-link" src="<?php echo get_stylesheet_directory_uri();?>\images\logos\inhabitent-logo-tent.svg"></a>
    <!-- <a href="/inhabitent/"><img class="home-link2" src="<?php echo get_stylesheet_directory_uri();?>\images\logos\inhabitent-logo-tent-white.svg"></a> -->

    <div class="nav-right">
        <?php wp_nav_menu(array('theme_location' => 'primary'));?> 
        <?php echo get_search_form();?>
    </div>
</nav>




<!-- <h1><i class="fas fa-search"></i></h1> -->
<!-- <h1><?php bloginfo('name');?></h1> -->
