<?php
/*
Template Name: Theme Page
*/
?>

<?php get_header(); ?>

	<main>
		<section class="features">
			<div class="carousel">
				<div class="container">
					<div class="section-caption">
						<h2><?php echo get_cat_name( 5 ) ?></h2>
						<span><i class="fa fa-heart-o" aria-hidden="true"></i></span>
					</div>
					<div class="owl-carousel carousel-features">
						<?php
							$args = array( 'posts_per_page' => 5, 'offset'=> 0, 'category_name' => 'features' );
							$myposts = get_posts( $args );
							foreach( $myposts as $post ) : setup_postdata($post); ?>
							<div class="col features-item">
								<span><i class="fa <?php echo get_post_meta($post->ID, 'font_awesome', true); ?>" aria-hidden="true"></i></span>
								<h3><?php the_title(); ?></h3>
								<?php the_content(); ?>
							</div>
						<?php endforeach; ?>
						<?php wp_reset_postdata() ?>
				</div>
			</div>
		</section>
		
		<section class="works">
			<div class="container">
				<div class="section-caption">
					<h2><?php echo get_cat_name( 8 ) ?></h2>
					<span><i class="fa fa-heart-o" aria-hidden="true"></i></span>
				</div>
				<?php echo category_description(8); ?>
			</div>
			<div class="portfolio container-fluid">
				<div id="portfolio-nav" >
					<button data-filter="all">All</button>
					<button data-filter=".id-1">Branding</button>
					<button data-filter=".id-2">Web</button>
					<button data-filter=".id-3">Logo Design</button>
					<button data-filter=".id-4">Photography</button>
				</div>
				<div id="portfolio-items" class="row" data-ref="mixitup-container">
					<?php

						$args = array( 'posts_per_page' => 8, 'offset'=> 0, 'category_name' => 'portfolio' );
						$myposts = get_posts( $args );
						foreach( $myposts as $post ) : setup_postdata($post); ?>

						<div class="mix<?php
							$tags = wp_get_post_tags($post->ID);
							if ($tags) {
								foreach ($tags as $tag) {
									echo ' '. $tag->name;
								}
							}
							?>" data-ref="mixitup-target">
						<?php the_post_thumbnail(); ?>
						<div class="mix-description">
							<a href="<?php the_permalink(); ?>"><i class="fa fa-eye" aria-hidden="true"></i></a>
							<h3><?php the_title(); ?></h3>
							<?php the_excerpt() ?>
						</div>
					</div>

					<?php endforeach; ?>
					<?php wp_reset_postdata() ?>
					
				</div>
			</div>
		</div>
	</section>
	
	<section class="team">
		<div class="container">
			<div class="section-caption">
				<h2>Meet our Team</h2>
				<span><i class="fa fa-heart-o" aria-hidden="true"></i></span>
			</div>
			<p class="section-description">Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore</p>
		</div>
		<div class="container">
			<div class="owl-carousel custom1">
				<div class="team-item">
					<div class="team-item-media">
						<figure>
							<img src="img/Layer 24.jpg" alt="">
						</figure>
						<div class="description">
							<div class="description-text">
								<h4>Nemo enim ipsam voluptatem quia voluptas </h4>
								<p>sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem.</p>
							</div>
							<div class="team-social">
								<a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a>
								<a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a>
								<a href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a>
							</div>
						</div>
					</div>
					<div class="team-item-title">
						<h3>John Filmr Doe</h3>
						<p>Managing Director</p>
					</div>
				</div>
				<div class="team-item">
					<div class="team-item-media">
						<figure>
							<img src="img/Layer 25.jpg" alt="">
						</figure>
						<div class="description">
							<div class="description-text">
								<h4>Nemo enim ipsam voluptatem quia voluptas </h4>
								<p>sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem.</p>
							</div>
							<div class="team-social">
								<a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a>
								<a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a>
								<a href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a>
							</div>
						</div>
					</div>
					<div class="team-item-title">
						<h3>Chystine Hineu</h3>
						<p>Lead Designer</p>
					</div>
				</div>
				<div class="team-item">
					<div class="team-item-media">
						<figure>
							<img src="img/Layer 26.jpg" alt="">
						</figure>
						<div class="description">
							<div class="description-text">
								<h4>Nemo enim ipsam voluptatem quia voluptas </h4>
								<p>sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem.</p>
							</div>
							<div class="team-social justify-content-md-center">
								<a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a>
								<a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a>
								<a href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a>
							</div>
						</div>
					</div>
					<div class="team-item-title">
						<h3>Martin Matrone</h3>
						<p>Lead Developer</p>
					</div>
				</div>
				<div class="team-item">
					<div class="team-item-media">
						<figure>
							<img src="img/Layer 27.jpg" alt="">
						</figure>
						<div class="description">
							<div class="description-text">
								<h4>Nemo enim ipsam voluptatem quia voluptas </h4>
								<p>sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem.</p>
							</div>
							<div class="team-social">
								<a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a>
								<a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a>
								<a href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a>
							</div>
						</div>
					</div>
					<div class="team-item-title">
						<h3>Steve Flaulkin</h3>
						<p>Sr. UI Designer</p>
					</div>
				</div>
				<div class="team-item">
					<div class="team-item-media">
						<figure>
							<img src="img/Layer 27.jpg" alt="">
						</figure>
						<div class="description">
							<div class="description-text">
								<h4>Nemo enim ipsam voluptatem quia voluptas </h4>
								<p>sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem.</p>
							</div>
							<div class="team-social">
								<a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a>
								<a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a>
								<a href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a>
							</div>
						</div>
					</div>
					<div class="team-item-title">
						<h3>Steve Flaulkin</h3>
						<p>Sr. UI Designer</p>
					</div>
				</div>
			</div>
		</section>
		
		<section class="facts">
			<div class="container">
				<div class="section-caption">
					<h2>Some Fan Facts</h2>
					<span><i class="fa fa-heart-o" aria-hidden="true"></i></span>
				</div>
			</div>
			<div class="container">
				<div class="row">
					<div class="col-lg-3 col-md-6 facts-container">
						<div class="facts-item"><i class="fa fa-clock-o" aria-hidden="true"></i></div>
						<div class="facts-digit">
							<span>3200</span>
							<p>Hours of work</p>
						</div>
					</div>
					<div class="col-lg-3 col-md-6 facts-container">
						<div class="facts-item"><i class="fa fa-user-o" aria-hidden="true"></i></div>
						<div class="facts-digit">
							<span>120</span>
							<p>Satisfied clients</p>
						</div>
					</div>
					<div class="col-lg-3 col-md-6 facts-container">
						<div class="facts-item"><i class="fa fa-rocket" aria-hidden="true"></i></div>
						<div class="facts-digit">
							<span>360</span>
							<p>Projects delivered</p>
						</div>
					</div>
					<div class="col-lg-3 col-md-6 facts-container">
						<div class="facts-item"><i class="fa fa-trophy" aria-hidden="true"></i></div>
						<div class="facts-digit">
							<span>42</span>
							<p>awards won</p>
						</div>
					</div>
				</div>
			</div>
		</section>
		
		<section class="contact">
			<div class="container">
				<div class="section-caption">
					<h2>Let's discuss</h2>
					<span><i class="fa fa-heart-o" aria-hidden="true"></i></span>
				</div>
				<p class="section-description">Voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore</p>
			</div>
			<div class="container">
				<div class="row">
					<div class="col-lg-3 col-md-4">
						<div class="contact-information">
							<h3>Cras at ultrices erat, sed vulputate!</h3>
							<address>
								<p>2345 Setwant natrer, 1234,<br> United States.</p>
								<p>+7 (401) 1234 567</p>
								<p>hello@brandi.com</p>
								<p>www.brandi.com</p>
							</address>
						</div>
					</div>
					<div class="col-lg-8 col-md-8">
						<div class="contact-form">
							<h3>Say hello</h3>
							<form action="" method="post" class="row">
								<div class="input-container col">
									<input type="text" name="input-name" id="input-name" required>
									<label for="input-name" class="col">Name</label>
								</div>
								<div class="input-container col">
									<input type="text" name="input-mail" id="input-mail" required>
									<label for="input-mail" class="col">Email</label>
								</div>
								<div class="input-container col-12">
									<textarea name="input-message" id="input-message" rows="1" required></textarea>
									<label for="input-message" class="col">Message</label>
								</div>
								<div class="col buttom-container">
									<button type="submit">Send message</button>
								</div>
							</form>
						</div>
					</div>
					<div class="col-lg-1 col-md-12">
						<div class="contact-social row">
							<a href="#" class=""><i class="fa fa-behance" aria-hidden="true"></i></a>
							<a href="#" class=""><i class="fa fa-twitter" aria-hidden="true"></i></a>
							<a href="#" class=""><i class="fa fa-google-plus" aria-hidden="true"></i></a>
							<a href="#" class=""><i class="fa fa-facebook" aria-hidden="true"></i></a>
							<a href="#" class=""><i class="fa fa-vk" aria-hidden="true"></i></a>
						</div>
					</div>
				</div>
			</div>
		</section>
		<section>
			<div class="map">
				<div class="justify-content-md-center">
					<script type="text/javascript" charset="utf-8" async src="https://api-maps.yandex.ru/services/constructor/1.0/js/?um=constructor%3A9a00e6145fa1b78ebeac38a7b759cd33c213da1587801cee15bc0699098a8689&amp;width=100%25&amp;height=240&amp;lang=ru_RU&amp;scroll=false"></script>
				</div>
			</div>
		</section>
	</main>

<?php get_footer(); ?>