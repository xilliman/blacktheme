<footer class="footer">
    <div class="container">
        <mark>footer.php</mark>
        <nav class="nav-footer">
            <?php 
                $args = array(
                    "theme_location" => "footer_nav",
                    "depth" => 2
                );

                wp_nav_menu( $args )
            ?>
        </nav>
        <div class="footer-copyright">
            Copyright 2021 | Maximilian Kuhlmay
        </div>
    </div>
</footer>

<?php wp_footer();?>
    
</body>
</html>
