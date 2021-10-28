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

<header class="site-header">
    <div class="site-header__top container">
        <div class="site-header__wrapper">
            <div class="site-header__middle">
                <a href="<?php echo home_url();?>" class="logo"><?php bloginfo('name');?></a>
            </div>
            <nav class="nav-wrapper meta">
                <?php 
                    $args = array(
                        "theme_location" => "footer_nav",
                        "depth" => 1
                    );

                    wp_nav_menu( $args )
                ?>
            </nav>
        </div>
    </div>
    <div class="site-header__bottom container">
        <div class="site-header__wrapper">
            <div class="site-header__navi main">
                <nav class="nav-wrapper">
                    <button class="nav__toggle" aria-expanded="false" type="button">
                        menu
                    </button>
                    <?php 
                    $args = array(
                        "theme_location" => "main_nav",
                        "depth" => 1
                    );

                    wp_nav_menu( $args )
                ?>
                </nav>
            </div>
            <div class="site-header__search">
                <div class="site-header__search-wrapper">
                    <button class="search__toggle" aria-label="Open search">
                        Search
                    </button>
                    <?php get_search_form(); ?>
                </div>
            </div>
            
        </div>
    </div>
</header>