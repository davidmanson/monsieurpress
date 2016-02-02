            </div>
			<footer class="footer l-pad-1">
				<nav>
					<?php wp_nav_menu(array(
                           'menu' => __( 'Footer Links', 'mrpress' ),
                           'theme_location' => 'footer-links'
                       )); ?>
				</nav>
				<p>&copy; <?php echo date('Y'); ?> <?php bloginfo( 'name' ); ?></p>
			</footer>
		</div>
		<?php wp_footer(); ?>
	</body>
</html>
