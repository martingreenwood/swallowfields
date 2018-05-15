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

	<header>
		<h1><?php the_field( 'intro_title' ); ?></h1>
		<hr>
	</header>
	
	<div class="entry-content">
		<?php
			the_content();
		?>
		<div class="call">
			<a href="<?php echo home_url( '/book-now' ); ?>" title="Call to Book">Book Now</a>
		</div>
	</div>

</article>
