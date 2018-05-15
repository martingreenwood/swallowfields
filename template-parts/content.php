<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package swallowfields
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class('columns three'); ?>>

	<?php swallowfields_post_thumbnail(); ?>
	
	<header class="entry-header">
		<?php
		if ( is_singular() ) :
			the_title( '<h1 class="entry-title">', '</h1>' );
		else :
			the_title( '<h2 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' );
		endif;
		?>
	</header>

	<div class="entry-content">
		<?php 
		/**
		* Custom Excerpt Length WordPress using wp_trim_excerpt()
		* Use directly in template
		*/

		$content = get_the_content();
		echo wp_trim_words( $content , '20' ); 
		?>
		<a class="more" href="<?php the_permalink( ) ?>" title="Read More">Read More</a>
	</div>

</article><!-- #post-<?php the_ID(); ?> -->
