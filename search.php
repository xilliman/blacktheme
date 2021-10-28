<!-- Header -->
<?php get_header();?>
<mark>search.php</mark>
<div class="container">
    <main class="site-main">
        <article class="site-content">
            <h2>Suchergebnisse für Ihre Suche nach: <?php echo $s; ?></h2>
            <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

                <?php get_template_part( 'template_parts/content', 'search'); ?>

            <?php endwhile; else : ?>
            
                <?php get_template_part( 'template_parts/content', 'error'); ?>
            
            <?php endif; ?>

            <?php previous_posts_link();?>
            <?php next_posts_link();?>

        </article>
        <!-- Sidebar -->
        <?php get_sidebar();?>
    </main>
</div>

<!-- Footer -->
<?php get_footer(); ?>
