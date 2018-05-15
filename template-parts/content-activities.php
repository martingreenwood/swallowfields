<?php
/**
 * Template part for displaying page content in page.php
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package swallowfields
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

	<div class="entry-content">
		<h2>Whats Included</h2>
		<?php
			the_content();
		?>
	</div>

	<div class="entry-content">
		<h2>The Accommodation</h2>
		<?php $tent = get_field( 'tent_selector' ); ?>
		<?php echo get_the_post_thumbnail( $tent->ID, 'full' ); ?>
		<?php echo apply_filters( 'the_content', $tent->post_content ); ?>
		<a class="more" href="<?php echo home_url( '/book-now' ); ?>" title="">Book Now</a>
	</div>

</article>
