<?php
/**
 * The hpmpage template file (static not dynamic)
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
			<?php
			while ( have_posts() ) : the_post();

				get_template_part( 'template-parts/content', 'page' );

			endwhile; // End of the loop.
			?>
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
