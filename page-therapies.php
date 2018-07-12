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
					<h3>Enquiry Form</h3>
					<?php echo do_shortcode( '[gravityform id="2" title="false" description="true" ajax="true"]' ); ?>
				</div>

			</div>
			<?php endif ?>

		</main>
	</div>

	<?php if (have_rows('row', 'options')): ?>
	<section class="sections">
		<div class="row">
			<ul class="accordion">
			<?php $number = 0; while(have_rows('row', 'options')): the_row(); ?>

				<?php $row_bg = get_sub_field( 'row_bg' ); ?>
				<li class="<?php the_sub_field( 'row_content_bg_colour' ); ?>" style="background-image: url(<?php echo $row_bg['url']; ?>)">
					<a class="toggle" href="#"><span><?php the_sub_field( 'row_title' ); ?></span></a>
					<div class="inner">
						<hr>
						<?php the_sub_field( 'row_content' ); ?>
						<?php if (get_sub_field( 'link_text' )):
							$link_text = get_sub_field( 'link_text' );
						else: 
							$link_text = 'Enquire';
						endif ?>
						<?php if (get_sub_field( 'row_link_type' ) == 'Page' ): ?>
							<a class="more" href="<?php the_sub_field( 'row_link' ); ?>" title="<?php echo $link_text ?>"><?php echo $link_text ?></a>	
						<?php elseif (get_sub_field( 'row_link_type' ) == 'PDF' ): ?>
							<a target="_blank" class="more" href="<?php the_sub_field( 'row_file' ); ?>" title="<?php echo $link_text ?>"><?php echo $link_text ?></a>	
						<?php endif ?>
					</div>
				</li>

			<?php endwhile; ?>
			</ul>
		</div>
	</section>
	<?php endif ?>

<?php
get_footer();
