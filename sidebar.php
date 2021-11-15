<div class="debug__mark">
<?php if (is_active_sidebar( "sidebar-1" )) : ?>
    <aside class="site-sidebar">
        <mark>sidebar.php</mark>
        <?php dynamic_sidebar( "sidebar-1" ); ?>
    </aside>
<?php endif; ?>
</div>