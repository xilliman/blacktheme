<mark>content-tutorial.php</mark>
<section <?php post_class();?>>

    <h1>
        <a href="<?php the_permalink();?>"><?php the_title();?></a>
    </h1>
    <p><?php echo get_the_term_list( $post->ID, "genre", "Genres ", " | ", "" ) ?></p>
    <div class="post-thumbnail">
        <?php the_post_thumbnail("large"); ?>
    </div>
    <?php the_content("Weiterlesen");?>
</section>