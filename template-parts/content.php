<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package swallowfields
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class('row'); ?>>

	<div class="entry-image">
		<?php swallowfields_post_thumbnail(); ?>
	</div><!--

	--><div class="entry-content">
	
		<?php
			the_title( '<h1 class="entry-title">', '</h1>' );
		?>
		
		<p><?php
			the_excerpt();
		?></p>

		<a class="readmore" href="<?php the_permalink( ); ?>" title="">READ MORE</a>
	</div>

</article><!-- #post-<?php the_ID(); ?> -->

