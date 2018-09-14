<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package swallowfields
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main">
			<div id="theposts" class="container">
				<?php if ( have_posts() ) : ?>
					
					<div class="row">
					<?php
					/* Start the Loop */
					while ( have_posts() ) : the_post();

						get_template_part( 'template-parts/content', get_post_type() );

					endwhile;
					?>
					</div>

				<?php endif; ?>
			</div>

			<!-- <div class="container">
				<div class="row">
					<?php //the_posts_navigation(); ?>
				</div>
			</div> -->

		</main>
	</div>

<?php
get_footer();
