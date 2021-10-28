<!-- Header -->
<?php get_header();?>
<mark>page.php</mark>
<div class="container">
    <main class="site-main">
        <article class="site-content">
            <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

                <?php get_template_part( 'template_parts/content', 'page'); ?>

            <?php endwhile; else : ?>
            
                <?php get_template_part( 'template_parts/content', 'error'); ?>
            
            <?php endif; ?>
        </article>
        <!-- Sidebar -->
        <?php get_sidebar(); ?>
    </main>
</div>

<!-- Footer -->
<?php get_footer(); ?>
    
</body>
</html>
