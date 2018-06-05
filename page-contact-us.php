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
					<h3>MAP</h3>
					<p><?php the_field( 'address_text', 'options' ); ?></p>
					<div class="location">
						<?php 
						$location = get_field('location', 'options');
						if( !empty($location) ):
						?>
						<div class="map">
							<div class="marker" data-lat="<?php echo $location['lat']; ?>" data-lng="<?php echo $location['lng']; ?>"></div>
						</div>
						<?php endif; ?>
					</div>
				</div>

				<div class="row">
					<h3>Contact Form</h3>
					<?php echo do_shortcode( '[gravityform id="1" title="false" description="true" ajax="true"]' ); ?>
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
						<a class="more" href="<?php the_sub_field( 'row_link' ); ?>" title="Find Out More">Find Out More</a>
					</div>
				</li>

			<?php endwhile; ?>
			</ul>
		</div>
	</section>
	<?php endif ?>

<?php
get_footer();
