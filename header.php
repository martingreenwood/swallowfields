<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package swallowfields
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="http://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class($pagename); ?>>
<div id="page" class="site <?php the_field( 'accent_colour' ); ?>">

	<header id="masthead" class="site-header">
				
		<nav id="site-navigation" class="main-navigation">
			<div class="logo">
				<a href="<?php echo home_url( '/' ); ?>" title="">
					<img src="<?php the_field( 'site_icon', 'options' ); ?>" alt="">
				</a>
			</div>
			<?php
				wp_nav_menu( array(
					'theme_location' => 'menu-1',
					'menu_id'        => 'primary-menu',
				) );
			?>
		</nav>

		<button class="hamburger menu-toggle hamburger--spin" type="button" aria-controls="primary-menu" aria-expanded="false">
			<span class="hamburger-box ">
				<span class="hamburger-inner"></span>
			</span>
		</button>
	
	</header>

	<?php 
		$bannerimage = get_the_post_thumbnail_url( get_the_ID(), 'full' ); 
		$feature_image = get_field( 'feature_image' );
		if ($feature_image):
			$bannerimage = $feature_image;
		elseif ($bannerimage):
			$bannerimage = $bannerimage;
		else:
			$bannerimage = get_template_directory_uri() . '/assets/img/banner-default.jpg';
		endif;
	?>
	<section id="banner" class="parallax-window" data-parallax="scroll" data-bleed="50" data-image-src="<?php echo $bannerimage; ?>">
		<div class="blurb">

			<div class="table">
				<div class="cell middle">
					<div class="site-branding">
						<?php if ( is_front_page() ): ?>
							<?php the_custom_logo(); ?>
						<?php else: ?>
							<a href="<?php echo home_url( '/' ); ?>" title="">
								<img class="icon-no-logo" src="<?php the_field( 'site_icon', 'options' ); ?>" alt="">
							</a>
						<?php endif; ?>
					</div>

					<?php if ( is_front_page() ): 
						// do nowt
					?>
					<?php elseif (is_page(get_option( 'page_for_posts' ))): ?>
					<h1><?php echo get_the_title( get_option( 'page_for_posts' ) ); ?></h1>
					<?php elseif ( is_404() ): ?>
					<h1>404</h1>
					<?php else: ?>
					<h1><?php the_title(); ?></h1>
					<?php endif ?>

				</div>
			</div>

		</div>
	</section>

	<div id="content" class="site-content">
