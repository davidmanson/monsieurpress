            </div>
            <div class="l-container">
                <footer class="footer l-col-12 l-pad-1">
                    <?php wp_nav_menu( array(
                        'theme_location' => 'footer-links',
                        'menu_class' => 'footer-links',
                        'container' => false
                    ) ); ?>
                    <p>&copy; <?php echo date('Y'); ?> <?php bloginfo( 'name' ); ?></p>
                </footer>
            </div>

		</div>
		<?php wp_footer(); ?>
	</body>
</html>
