<?php
    add_action( 'after_setup_theme', 'blacktheme_register_nav' );

    function blacktheme_register_nav() {
        register_nav_menu( "main_nav", "Header Navgation" );
        register_nav_menu( "footer_nav", "Footer Navgation" );
		register_nav_menu( "meta_nav", "Meta Navigation" );
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
