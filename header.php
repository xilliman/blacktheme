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
            <a href="<?php echo home_url();?>" class="header__subbrand"><?php bloginfo('description');?></a>
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

        <div class="header__nav--menu-button">
            <div class="header__nav--menu-button-wrapper">
                <svg viewBox="0 0 44 32" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                    <g id="Page-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                        <g id="icon_menu" transform="translate(0.000000, -6.000000)" fill="#000000" fill-rule="nonzero">
                            <g id="menu" transform="translate(0.000000, 6.000000)">
                                <path d="M0,0 L44,0 L44,4 L0,4 L0,0 Z M0,14 L44,14 L44,18 L0,18 L0,14 Z M0,28 L44,28 L44,32 L0,32 L0,28 Z" id="Shape"></path>
                            </g>
                        </g>
                    </g>
                </svg>
            </div>
        </div>
        <div class="header__nav--menu">
            <nav class="header__nav--main-wrapper">
                <div class="header__nav--menu-button-wrapper--mobile">
                    <svg viewBox="0 0 32 32" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                        <title>cancel</title>
                        <g id="Page-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                            <g id="icon_cancel" transform="translate(-6.000000, -6.000000)" fill="#000000" fill-rule="nonzero">
                                <g id="cancel" transform="translate(6.000000, 6.000000)">
                                    <polygon points="32 2.8 29.2 0 16 13.2 2.8 0 0 2.8 13.2 16 0 29.2 2.8 32 16 18.8 29.2 32 32 29.2 18.8 16"></polygon>
                                </g>
                            </g>
                        </g>
                    </svg>
                </div>
                <div class="header__nav--menu-container">
                    <?php 
                        $args = array(
                            "theme_location" => "main_nav",
                            "depth" => 1
                        );

                        wp_nav_menu( $args )
                    ?>
                
                </div>
                <div class="header__nav--menu-meta-container">
                    <?php 
                        $args = array(
                            "theme_location" => "meta_nav",
                            "depth" => 1
                        );

                        wp_nav_menu( $args )
                    ?>
                </div>
 
            </nav>
        </div>
    </div>
    
</header>
