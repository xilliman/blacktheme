<!-- Header -->
<?php get_header();?>
<mark>front-page.php</mark>
<div class="container">
    <main class="site-main">
        <article class="site-content">
            <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

                <?php get_template_part( 'template_parts/content', 'page'); ?>

            <?php endwhile; else : ?>
            
                <?php get_template_part( 'template_parts/content', 'error'); ?>
            
            <?php endif; ?>

            <!-- <h2>Letzte Beiträge</h2>

            <?php 
            
                $args = array(
                    "post_type" => "post",
                    "posts_per_page" => 3
                );

                $loop2 = new WP_Query($args);

                if ( $loop2->have_posts() ) : while ( $loop2->have_posts() ) : $loop2->the_post(); ?>

                    <?php get_template_part( 'template_parts/content', get_post_format()); ?>

            <?php endwhile; else : ?>
            
                <?php get_template_part( 'template_parts/content', 'error'); ?>
            
            <?php endif; wp_reset_postdata();?>

            <div class="article_post-switch-container">
                <?php previous_posts_link();?>
                <?php next_posts_link();?>
            </div> -->

        </article>
        <!-- Sidebar -->
        <?php get_sidebar();?>
    </main>
</div>

<!-- Footer -->
<?php get_footer(); ?>
