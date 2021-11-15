<!DOCTYPE html>
<html lang="<?php bloginfo('language');?>">
<head>
    <meta charset="<?php bloginfo('charset');?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php wp_title('');?><?php bloginfo('name');?></title>

    <link rel="stylesheet" href="<?php bloginfo('template_url')?>/css/base/normalize.css">
    <link rel="stylesheet" href="<?php bloginfo('template_url')?>/css/base/skeleton.css">
    <link rel="stylesheet" href="<?php bloginfo('stylesheet_url')?>">
    <link rel="stylesheet" href="<?php bloginfo('template_url')?>/css/css.css">

    <link rel="icon" type="image/png" href="assets/favicon.png">

    <?php wp_enqueue_script( "jquery" ); ?>
    <?php wp_enqueue_script( "comment-reply" ); ?>

    <?php wp_head();?>
</head>
<body <?php body_class()?>>

<header>
    <div class="header__container container">
        <div class="header__brand-container">
            <a href="<?php echo home_url();?>" class="header__brand"><?php bloginfo('name');?></a>
        </div>
        <nav class="header__nav--meta-wrapper">
            <?php 
                $args = array(
                    "theme_location" => "meta_nav",
                    "depth" => 1
                );

                wp_nav_menu( $args )
            ?>
        </nav>
        <div class="header__nav--main">
            <nav class="header__nav--main-wrapper">
                <?php 
                    $args = array(
                        "theme_location" => "main_nav",
                        "depth" => 1
                    );

                    wp_nav_menu( $args )
                ?>
            </nav>
        </div>
        <div class="header__nav--search">
            <div class="header__nav--search-wrapper">
                <!-- <button class="search__toggle" aria-label="Open search">
                    Search
                </button> -->
                <?php get_search_form(); ?>
            </div>
        </div>
    </div>
    
</header>
