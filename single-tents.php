	<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package swallowfields
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main">

			<div class="container maincopy">
				<div class="row">
					<?php
					while ( have_posts() ) : the_post();

						get_template_part( 'template-parts/content', 'tents' );

					endwhile; // End of the loop.
					?>
				</div>

			</div>

		</main><!-- #main -->
	</div><!-- #primary -->

	<?php if (have_rows('row')): ?>
	<section class="sections">
		
		<?php while(have_rows('row')): the_row(); ?>

			<?php $row_bg = get_sub_field( 'row_bg' ); ?>
			<div class="row <?php the_sub_field( 'row_content_bg_colour' ); ?>" style="background-image: url(<?php echo $row_bg['url']; ?>)">

				<div class="content">
					<div class="table">
						<div class="cell middle">
							<h2><?php the_sub_field( 'row_title' ); ?></h2>
							<?php the_sub_field( 'row_content' ); ?>
							<?php if (get_sub_field( 'link_text' )):
								$link_text = get_sub_field( 'link_text' );
							else: 
								$link_text = 'Enquire';
							endif ?>
							<?php if (get_sub_field( 'row_link' )): ?>
							<a class="more" href="<?php the_sub_field( 'row_link' ); ?>" title="Enquire"><?php echo $link_text ?></a>	
							<?php endif; ?>
						</div>
					</div>
				</div>
				
			</div>

		<?php endwhile; ?>
		
	</section>
	<?php endif ?>

<?php
get_footer();
