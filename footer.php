<footer class="site-footer">
    <div class="container">
        <mark>footer.php</mark>
        <nav class="nav-social">
            <?php 
                $args = array(
                    "theme_location" => "footer_nav",
                    "depth" => 1
                );

                wp_nav_menu( $args )
            ?>
        </nav>
    </div>
</footer>

<?php wp_footer();?>
    
</body>
</html>
