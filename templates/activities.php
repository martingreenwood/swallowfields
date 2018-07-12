<?php
/**
 * Template Name: Activities Template
 * The template for displaying activities
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package swallowfields
 */

get_header(); ?>

	<?php $cb_image = get_field( 'cb_image' ); ?>

	<div id="primary" class="content-area" <?php if ($cb_image): ?>style="background-image: url(<?php echo $cb_image; ?>)"<?php endif ?>>
		<main id="main" class="site-main container">
			<div class="row">

				<?php
				while ( have_posts() ) : the_post();

					get_template_part( 'template-parts/content', 'activities' );

				endwhile; // End of the loop.
				?>

				<a class="more" href="<?php echo home_url( '/tents/spa-lodge' ); ?>" title="View lodge">View lodge</a>

			</div>
		</main>
	</div>

	<?php if (have_rows('row')): ?>
	<section class="sections">
		
		<?php while(have_rows('row')): the_row(); ?>

			<?php $row_bg = get_sub_field( 'row_bg' ); ?>
			<div class="row <?php the_sub_field( 'row_content_bg_colour' ); ?>">

				<div class="image" style="background-image: url(<?php echo $row_bg['url']; ?>)">
					&nbsp;
				</div>
				<div class="content">
					<div class="table">
						<div class="cell middle">
							<h2><?php the_sub_field( 'row_title' ); ?></h2>
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
					</div>
				</div>
				
			</div>

		<?php endwhile; ?>
		
	</section>
	<?php endif ?>

	<section class="places-to-visit">

		<div class="container">

			<div class="row">

				<p><?php the_field( 'places_to_visit_text', 'options' ); ?></p>
				
			</div>

			<div class="row">
			<?php if (have_rows('places_to_visit_columns', 'options')): ?>
				<?php while (have_rows('places_to_visit_columns', 'options')): the_row(); ?>
					<div class="item columns four">
						<img src="<?php echo the_sub_field( 'image' ); ?>" alt="">
						<h3><a href="<?php the_sub_field( 'link' ); ?>" title=""><?php the_sub_field( 'title' ); ?></a></h3>
						<p><?php the_sub_field( 'text' ); ?></p>
					</div>
				<?php endwhile; ?>
			<?php endif; ?>
			</div>

			<a class="more" href="<?php echo home_url( '/tents/spa-lodge/' ); ?>" title="">View Lodge</a>

		</div>

	</section>

<?php
get_footer();
