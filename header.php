<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 */

?>
<!DOCTYPE html>
<html lang="ru">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">

	<title><?php echo wp_get_document_title(); ?></title>
	<?php wp_head(); ?>

</head>

<body>
	<header class="header-page">
		<div class="top-menu">
			<div class="container">
				<div class="row">
					<div class="col-xs-3 col-sm-2 mobile-menu-wrapper">
						<a href="#" id="touch-menu">
							<div id="nav-icon2">
								<span></span>
								<span></span>
								<span></span>
								<span></span>
								<span></span>
								<span></span>
							</div>
						</a>
					</div>
					<div class="col-xs-9 col-sm-10 col-md-12 col-lg-4 logo-wrapper">
						<div class="logo"><a href=""><?php echo bloginfo('name'); ?></a></div>	
						<div class="desc"><?php echo bloginfo('description'); ?></div>
					</div>
					<nav class="col-xs-12 col-sm-12 col-lg-8 top-nav">
						<?php wp_nav_menu( array(
							'container'       => 'ul',
							'menu_class'      => 'nav',
							'walker'          => new myMenu(),
						) ); ?>
					</nav>
				</div>
			</div>
		</div>
	</header>
	<div class="slider">

		<?php 
		$args = array( 'posts_per_page' => 5, 'offset'=> 0, 'category_name' => 'slider' );
		$myposts = get_posts( $args );
		foreach( $myposts as $post ) : setup_postdata($post); ?>

			<div class="slider-item" style="background-image: url('<?php the_field('image'); ?>');">
				<div class="slider-inner">
					<?php the_content(); ?>
				</div>
			</div>

		<?php endforeach; ?>
		<?php wp_reset_postdata() ?>

		<div class="slider-navigation">
			<!-- for inclusion cliсл on radio remove "_" from class label  -->
			<input type="radio" name="nav-slider" id="nav-slider-1" checked>
			<label for="_nav-slider-1"></label>
			<input type="radio" name="nav-slider" id="nav-slider-2">
			<label for="_nav-slider-2"></label>
			<input type="radio" name="nav-slider" id="nav-slider-3">
			<label for="_nav-slider-3"></label>
			<!-- for inclusion cliсл on radio remove "_" from class label  -->
		</div>
		<div class="top-social">

		<?php 
			$args = array(
				'post_name' => 'socials' );

				$myposts = get_posts( $args );
				foreach( $myposts as $post ) : setup_postdata($post); ?>

				<?php $icons = get_post_meta($post->ID, 'font_awesome', false); ?>
				<?php $social_url = get_post_meta($post->ID, 'social_url', false); ?>

				<?php for ($i=0; $i < count($social_url); $i++) { ?>
					<a href="<?php echo $social_url[$i] ?>" title="<?php echo get_the_title(); ?>"><i class="fa <?php echo $icons[$i]  ?>" aria-hidden="true"></i></a>
				<?php } ?>

				<?php endforeach; ?>
				<?php wp_reset_postdata() ?>

		</div>
	</div>
	
