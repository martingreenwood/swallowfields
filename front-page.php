<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package swallowfields
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main container">
			<div class="row">

				<?php
				while ( have_posts() ) : the_post();

					get_template_part( 'template-parts/content', 'homepage' );

				endwhile; // End of the loop.
				?>

			</div>
		</main>
	</div>

	<?php if (have_rows('row', 'options')): ?>
	<section class="sections">
		
		<?php while(have_rows('row', 'options')): the_row(); ?>

			<?php $row_bg = get_sub_field( 'row_bg' ); ?>
			<div class="row <?php the_sub_field( 'row_content_bg_colour' ); ?>" style="background-image: url(<?php echo $row_bg['url']; ?>)">

				<div class="content">
					<div class="table">
						<div class="cell middle">
							<h2><?php the_sub_field( 'row_title' ); ?></h2>
							<hr>
							<?php the_sub_field( 'row_content' ); ?>
							<a class="more" href="<?php the_sub_field( 'row_link' ); ?>" title="Find Out More">Find Out More</a>
						</div>
					</div>
					<?php $row_illustration = get_sub_field( 'row_illustration' ); ?>
					<div class="after">
						<img src="<?php echo $row_illustration['url']; ?>" alt="">
					</div>
				</div>
				
			</div>

		<?php endwhile; ?>
		
	</section>
	<?php endif ?>

<?php
get_footer();
