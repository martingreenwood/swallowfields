<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package swallowfields
 */

?>

	</div><!-- #content -->

	<section id="prefooter">

		<div class="container">
			<div class="row">

				<div class="logo">
					<?php the_custom_logo(); ?>
				</div>

				<div class="sociallinks">
					<ul>
						<?php if (get_field( 'facebook', 'options' )): ?>
						<li><a href="<?php echo get_field( 'facebook', 'options' ); ?>" title="Follow us on Facebook"><i class="fab fa-facebook-f"></i></a></li>
						<?php endif; ?>
						<?php if (get_field( 'instagram', 'options' )): ?>
						<li><a href="<?php echo get_field( 'instagram', 'options' ); ?>" title="Follow us on instagram"><i class="fab fa-instagram"></i></a></li>
						<?php endif; ?>
						<?php if (get_field( 'twitter', 'options' )): ?>
						<li><a href="<?php echo get_field( 'twitter', 'options' ); ?>" title="Follow us on Twitter"><i class="fab fa-twitter"></i></a></li>
						<?php endif; ?>
						<?php if (get_field( 'google', 'options' )): ?>
						<li><a href="<?php echo get_field( 'google', 'options' ); ?>" title="Follow us on google plus"><i class="fab fa-google-plus-g"></i></a></li>
						<?php endif; ?>
						<?php if (get_field( 'pinterest', 'options' )): ?>
						<li><a href="<?php echo get_field( 'pinterest', 'options' ); ?>" title="Follow us on pinterest"><i class="fab fa-pinterest"></i></a></li>
						<?php endif; ?>
					</ul>
				</div>

			</div>
		</div>
		
	</section>

	<footer id="colophon" class="site-footer">
		
		<div class="container">
			<div class="row">

				<div class="copyright five columns">
					<p><?php echo date("Y"); ?> <?php echo bloginfo( 'name' ); ?> | <?php the_field( 'address_text', 'options' ); ?></p>
				</div>

				<div class="footer-nav seven columns">
					<?php
						wp_nav_menu( array(
							'theme_location' => 'menu-2',
							'menu_id'        => 'footer-menu',
						) );
					?>
				</div>
				
			</div>
		</div>

	</footer>

</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
