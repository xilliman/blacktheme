<mark>content-search.php</mark>

<section <?php post_class();?>>
    <h3>
        <a href="<?php the_permalink();?>"><?php the_title();?></a>
    </h3>
    <p><?php the_time("d.m.Y");?></p>
    <p><?php the_excerpt();?></p>
</section>