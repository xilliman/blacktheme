<?php

    // Register Custom Post Type

    function blacktheme_custom_posttype_tutorial() {

        $labels = array(
            'name'                  => 'Tutorials',
            'singular_name'         => 'Tutorial',
            'menu_name'             => 'Tutorials',
            'name_admin_bar'        => 'Tutorials',
            'archives'              => '',
            'attributes'            => '',
            'parent_item_colon'     => '',
            'all_items'             => 'Alle Tutorials',
            'add_new_item'          => '',
            'add_new'               => 'Neues Tutorial',
            'new_item'              => '',
            'edit_item'             => '',
            'update_item'           => '',
            'view_item'             => '',
            'view_items'            => '',
            'search_items'          => '',
            'not_found'             => '',
            'not_found_in_trash'    => '',
            'featured_image'        => '',
            'set_featured_image'    => '',
            'remove_featured_image' => '',
            'use_featured_image'    => '',
            'insert_into_item'      => '',
            'uploaded_to_this_item' => '',
            'items_list'            => '',
            'items_list_navigation' => '',
            'filter_items_list'     => '',
        );
        $args = array(
            'label'                 => 'Tutorial',
            'description'           => 'Einzelne Tutorials',
            'labels'                => $labels,
            'supports'              => array( 'title', 'editor', 'thumbnail', 'comments', 'trackbacks', 'revisions', 'custom-fields', 'page-attributes', 'post-formats' ),
            'hierarchical'          => false,
            'public'                => true,
            'show_ui'               => true,
            'show_in_menu'          => true,
            "show_in_rest"          => true,
            'menu_position'         => 5,
            'show_in_admin_bar'     => true,
            'show_in_nav_menus'     => true,
            'can_export'            => true,
            'has_archive'           => true,
            'exclude_from_search'   => false,
            'publicly_queryable'    => true,
            'capability_type'       => 'page',
        );
        register_post_type( 'tutorial', $args );

    }
    add_action( 'init', 'blacktheme_custom_posttype_tutorial', 0 );

    // Custom taxonomy

    // Register Custom Taxonomy
    function blacktheme_customtaxonomy_genre() {

        $labels = array(
            'name'                       => 'genre',
            'singular_name'              => 'Genre',
            'menu_name'                  => 'Genre'
        );
        $args = array(
            'labels'                     => $labels,
            'hierarchical'               => true,
            "show_in_rest"          => true,
            'public'                     => true,
            'show_ui'                    => true,
            'show_admin_column'          => true,
            'show_in_nav_menus'          => true,
            'show_tagcloud'              => true,
        );
        register_taxonomy( 'genre', array( 'tutorial' ), $args );

    }
    add_action( 'init', 'blacktheme_customtaxonomy_genre', 0 );

    add_action( 'after_setup_theme', 'blacktheme_register_nav' );

    function blacktheme_register_nav() {
        register_nav_menu( "main_nav", "Header-Navgation" );
        register_nav_menu( "footer_nav", "Footer-Navgation" );
    }

    // Beitragsformate
    add_theme_support( "post-formats", array("video", "gallery") );

    // Widgets

    add_action( "widgets_init", "blacktheme_register_sidebar" );

    function blacktheme_register_sidebar() {
        register_sidebar( array(
            "name" => "Meine Sidebar",
            "id" => "sidebar-1",
            "description" => "Unter dem Inhalt",
            "before_widget" => "<div id='%1$s' class='widget %2$s'>",
            "after_widget" => "</div>",
            "before_title" => "<h4 class='widgettitle'",
            "after_title" => "</h4>"
        ) );
    } 

    // Theme Support

    add_theme_support( "post-thumbnails" );

    // Kommentare

    function blacktheme_comments( $comment, $args, $depth ) { $GLOBALS['comment'] = $comment; ?>
            <li class="single-comment">
             <?php echo get_avatar( $comment, $size='90' ); ?>
             <p><?php echo get_comment_author_link(); ?></p>
             <p><?php echo get_comment_date("d.m.Y"); ?>, <?php echo get_comment_time(); ?> Uhr</p>
        <?php comment_text(); ?>
        <div class="reply">
            <?php comment_reply_link( array_merge($args, array("depth" => $depth, "max-depth" => $args["max_depth"]))); ?>
        </div>
    <?php }

    // Styles & Scripts

    // Add JS

    // Basic JS
    wp_register_script( "script", get_template_directory_uri() . "/js/script.js", "", 2, true );
    wp_enqueue_script("script");

    // Components
    wp_register_script('header', get_template_directory_uri() . '/js/components/header.js', '', 2, true);
    wp_enqueue_script('header');

    // Add HTML5 Theme support
    $args = array(
        "search-form",
        "comment-form",
        "comment-list",
        "gallery",
        "caption"
    );

    add_theme_support( "html5", $args );
?>