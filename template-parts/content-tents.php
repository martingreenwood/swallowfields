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
	</div>

	<div class="icons">
		<ul><!--
			<?php if (get_field( 'private_hot_tub' )): ?>
			--><li>
					<img src="<?php echo get_template_directory_uri() . '/assets/img/hot-tub.svg'; ?>" alt="icon"> <span>Private Hot Tub</span>
				</li><!--
			<?php endif ?>
			<?php if (get_field( 'private_sauna' )): ?>
				--><li>
					<img src="<?php echo get_template_directory_uri() . '/assets/img/sauna.svg'; ?>" alt="icon"> <span>Private sauna</span>
				</li><!--
			<?php endif ?>
			<?php if (get_field( 'fire_pit' )): ?>
				--><li>
					<img src="<?php echo get_template_directory_uri() . '/assets/img/fire.svg'; ?>" alt="icon"> <span>fire pit &amp; camp fire</span>
				</li><!--
			<?php endif ?>
			<?php if (get_field( 'linen' )): ?>
				--><li>
					<img src="<?php echo get_template_directory_uri() . '/assets/img/towel.svg'; ?>" alt="icon"> <span>Linen &amp; Towels</span>
				</li><!--
			<?php endif ?>
			<?php if (get_field( 'hot_showers' )): ?>
				--><li>
					<img src="<?php echo get_template_directory_uri() . '/assets/img/shower.svg'; ?>" alt="icon"> <span>Hot Showers</span>
				</li><!--
			<?php endif ?>
			<?php if (get_field( 'flat_screen_tv' )): ?>
				--><li>
					<img src="<?php echo get_template_directory_uri() . '/assets/img/wide-tv.svg'; ?>" alt="icon"> <span>flat screen TV</span>
				</li><!--
			<?php endif ?>
			<?php if (get_field( 'dogs_welcome' )): ?>
				--><li>
					<img src="<?php echo get_template_directory_uri() . '/assets/img/dogs.svg'; ?>" alt="icon"> <span>dogs welcome</span>
				</li><!--
			<?php endif ?>
			<?php if (get_field( 'free_wi-fi' )): ?>
				--><li>
					<img src="<?php echo get_template_directory_uri() . '/assets/img/wifi.svg'; ?>" alt="icon"> <span>free wi-fi</span>
				</li><!--
			<?php endif ?>
			<?php if (get_field( 'log_burner' )): ?>
				--><li>
					<img src="<?php echo get_template_directory_uri() . '/assets/img/log.svg'; ?>" alt="icon"> <span>log burner</span>
				</li><!--
			<?php endif ?>
		--></ul>
	</div>

	<a href="<?php echo home_url( 'book-now' ); ?>" class="book" title="">Book Now</a>

</article><!-- #post-<?php the_ID(); ?> -->
