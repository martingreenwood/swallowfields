 <?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package swallowfields
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class('columns twelve'); ?>>
	
	<header class="entry-header">
		<?php
		if ( is_singular() ) :
			the_title( '<h1 class="entry-title">', '</h1>' );
		else :
			the_title( '<h2 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' );
		endif;
		?>
	</header>

	<?php swallowfields_post_thumbnail(); ?>

	<div class="entry-content">
		<?php
			the_content( sprintf(
				wp_kses(
					/* translators: %s: Name of current post. Only visible to screen readers */
					__( 'Continue reading<span class="screen-reader-text"> "%s"</span>', 'swallowfields' ),
					array(
						'span' => array(
							'class' => array(),
						),
					)
				),
				get_the_title()
			) );
		?>
		<?php if (get_field( 'itinerary_pdf' )): ?>
			<a class="more" target="_blank" href="<?php the_field( 'itinerary_pdf' ); ?>" title="">What’s Included in the Lodge</a>
		<?php endif ?>
		<?php if (get_field( 'floorplan_pdf' )): ?>
			<a class="more" target="_blank" href="<?php the_field( 'floorplan_pdf' ); ?>" title="">View Floorplan</a>
		<?php endif ?>
	</div>

	<div class="icons">
		<ul><!--
			<?php if (get_field( 'sleeps' )): ?>
			--><li>
					<img src="<?php echo get_template_directory_uri() . '/assets/img/sleep-6.png'; ?>" alt="icon"> <span>Sleeps <?php the_field( 'sleeps' ); ?></span>
				</li><!--
			<?php endif ?>
			<?php if (get_field( 'private_hot_tub' )): ?>
			--><li>
					<img src="<?php echo get_template_directory_uri() . '/assets/img/private-hot-tub.png'; ?>" alt="icon"> <span>Private Hot Tub</span>
				</li><!--
			<?php endif ?>
			<?php if (get_field( 'private_sauna' )): ?>
				--><li>
					<img src="<?php echo get_template_directory_uri() . '/assets/img/private-sauna.png'; ?>" alt="icon"> <span>Private Sauna</span>
				</li><!--
			<?php endif ?>
			<?php if (get_field( 'fire_pit' )): ?>
				--><li>
					<img src="<?php echo get_template_directory_uri() . '/assets/img/fire-pit-camp-fire.png'; ?>" alt="icon"> <span>Fire Pit</span>
				</li><!--
			<?php endif ?>
			<?php if (get_field( 'linen' )): ?>
				--><li>
					<img src="<?php echo get_template_directory_uri() . '/assets/img/linen-towels.png'; ?>" alt="icon"> <span>Linen &amp; Towels</span>
				</li><!--
			<?php endif ?>
			<?php if (get_field( 'hot_showers' )): ?>
				--><li>
					<img src="<?php echo get_template_directory_uri() . '/assets/img/hot-showers.png'; ?>" alt="icon"> <span>En Suite Bathroom</span>
				</li><!--
			<?php endif ?>
			<?php if (get_field( 'flat_screen_tv' )): ?>
				--><li>
					<img src="<?php echo get_template_directory_uri() . '/assets/img/flat-screen-tv.png'; ?>" alt="icon"> <span>Flat Screen TV &amp; DVD</span>
				</li><!--
			<?php endif ?>
			<?php if (get_field( 'mains_electricity' )): ?>
				--><li>
					<img src="<?php echo get_template_directory_uri() . '/assets/img/electricity-plug.png'; ?>" alt="icon"> <span>mains electricity</span>
				</li><!--
			<?php endif ?>
			<?php if (get_field( 'mains_water' )): ?>
				--><li>
					<img src="<?php echo get_template_directory_uri() . '/assets/img/water-mains.png'; ?>" alt="icon"> <span>Mains Water</span>
				</li><!--
			<?php endif ?>
			<?php if (get_field( 'dogs_welcome' )): ?>
				--><li>
					<img src="<?php echo get_template_directory_uri() . '/assets/img/dogs-welcome.png'; ?>" alt="icon"> <span>Dogs Welcome</span>
				</li><!--
			<?php endif ?>
			<?php if (get_field( 'free_wi-fi' )): ?>
				--><li>
					<img src="<?php echo get_template_directory_uri() . '/assets/img/free-wifi.png'; ?>" alt="icon"> <span>Free WIFI</span>
				</li><!--
			<?php endif ?>
			<?php if (get_field( 'log_burner' )): ?>
				--><li>
					<img src="<?php echo get_template_directory_uri() . '/assets/img/log-burner.png'; ?>" alt="icon"> <span>Log Burner</span>
				</li><!--
			<?php endif ?>
		--></ul>
	</div>

	<a href="<?php echo home_url( 'book-now' ); ?>" class="book" title="">Book Now</a>

</article><!-- #post-<?php the_ID(); ?> -->
