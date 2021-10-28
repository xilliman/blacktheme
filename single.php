<!-- Header -->
<?php get_header();?>
<mark>single.php</mark>
<div class="container">
    <main class="site-main">
        <article class="site-content">
            <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

                <?php get_template_part( 'template_parts/content', get_post_format()); ?>
                <?php comments_template( ); ?>

            <?php endwhile; else : ?>
            
                <?php get_template_part( 'template_parts/content', 'error'); ?>
            
            <?php endif; ?>

            <?php previous_post_link();?>
            <?php next_post_link();?>

        </article>
        <!-- Sidebar -->
        <!-- <?php get_sidebar(); ?> -->
    </main>
</div>

<!-- Footer -->
<?php get_footer(); ?>
    
</body>
</html>
