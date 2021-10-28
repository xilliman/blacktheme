<mark>content-gallery.php</mark>

<section <?php post_class();?>>

<?php if (is_front_page() || is_archive()) { ?>
    <h2><a href="<?php the_permalink();?>"><?php the_title();?></a></h2>
<?php }  else { ?>
    <h1><a href="<?php the_permalink();?>"><?php the_title();?></a></h1>
<?php  } ?>
    <p>
        <?php the_time("d.m.Y");?>
        <?php the_author();?>
        <?php the_category(", ");?>
        <?php the_tags();?>
    </p>
    <div class="post-thumbnail">
        <?php the_post_thumbnail("large"); ?>
    </div>
    <?php the_content("Weiterlesen");?>
</section>