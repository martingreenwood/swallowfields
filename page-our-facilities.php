<?php
/**
 * The our-facilities template file
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package swallowfields
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main">

			<?php if (have_posts()): ?>
			<div class="container maincopy">
				<div class="row">
				<?php
				while ( have_posts() ) : the_post();

					get_template_part( 'template-parts/content', 'page' );

				endwhile; // End of the loop.
				?>
				</div>

				<div class="row">
					<?php
					$i = 1;
					query_posts(array( 
						'post_type' => 'facilities',
						'showposts' => -1
					));
					?>
					<?php while (have_posts()) : the_post(); ?>
						<div class="item columns four">
							<h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
							<?php the_post_thumbnail( 'full' ); ?>
							<p><?php echo get_the_excerpt(); ?></p>
						</div>

						<?php if($i % 3 == 0) {echo '</div><div class="row">';} ?>

					<?php $i++; endwhile; wp_reset_query(); wp_reset_postdata(); ?>
				</div>
			</div>
			<?php endif ?>

		</main>
	</div>

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
