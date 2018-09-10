<?php 
/* this is front page */
get_header();
?>

<div class="main-content">
	<section class="hp-banner">
		<video loop muted autoplay poster="<?php echo get_template_directory_uri(); ?>/images/je_head.jpg" class="intro-video">
			<source src="<?php echo get_template_directory_uri(); ?>/video/je_intro.mp4" type="video/mp4">
			</video>
			<div class="text-banner text-center">
				<div class="container">
					<div class="col-md-12">
						<h1 class="uppercase line-height-small">Welcome <br>to Jabu Events</h1>
						<p><a href="#">100+ shows</a> for your <a href="#">bespoke event</a></p>
					</div>
				</div>
			</div>
		</section>
		<div class="scroll-down">
			<a class="scroll-down-link page-scroll" href="#content" title="Scroll down"><img src="<?php echo get_template_directory_uri(); ?>/images/scroll_down.png"></a>
		</div>
		<section class="segment segment1 space-large hp-category bg-default" id="content">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<ul role="tablist" class="cat-tabs nav navbar-nav">
							<li role="presentation" class="cat-tabs-item active"><a href="#categories" aria-controls="categories" role="tab" data-toggle="tab" aria-expanded="false">Categories</a></li>
							<li role="presentation" class="cat-tabs-item"><a href="#events" aria-controls="events" role="tab" data-toggle="tab" aria-expanded="true">Event Type</a></li>
						</ul>
					</div>
				</div>
				<div class="row">
					<div class="col-md-12">
						<div class="tab-content">
							<div role="tabpanel" class="tab-pane in active" id="categories">
								<div class="row">
									<div class="col-md-3 col-sm-6">
										<div class="cat-thumb">
											<figure>
												<img src="<?php echo get_template_directory_uri();?>/images/cat_music_dance.png" alt="Corporate Events">
												<figcaption>Corporate Events</figcaption>
											</figure>
										</div>
									</div>
									<div class="col-md-3 col-sm-6">
										<div class="cat-thumb">
											<figure>
												<img src="<?php echo get_template_directory_uri();?>/images/cat_fire_pyro.png" alt="Fire & Pyro">
												<figcaption>Fire & Pyro</figcaption>
											</figure>
										</div>
									</div>
									<div class="col-md-3 col-sm-6">
										<div class="cat-thumb">
											<figure>
												<img src="<?php echo get_template_directory_uri();?>/images/cat_cirque.png" alt="Cirque">
												<figcaption>Cirque</figcaption>
											</figure>
										</div>
									</div>
									<div class="col-md-3 col-sm-6">
										<div class="cat-thumb">
											<figure>
												<img src="<?php echo get_template_directory_uri();?>/images/cat_magic.png" alt="Magic">
												<figcaption>Magic</figcaption>
											</figure>
										</div>
									</div>
									<div class="col-md-3 col-sm-6">
										<div class="cat-thumb">
											<figure>
												<img src="<?php echo get_template_directory_uri();?>/images/cat_aerial.png" alt="Aerial">
												<figcaption>Aerial</figcaption>
											</figure>
										</div>
									</div>
									<div class="col-md-3 col-sm-6">
										<div class="cat-thumb">
											<figure>
												<img src="<?php echo get_template_directory_uri();?>/images/cat_comedy.png" alt="Comedy">
												<figcaption>Comedy</figcaption>
											</figure>
										</div>
									</div>
									<div class="col-md-3 col-sm-6">
										<div class="cat-thumb">
											<figure>
												<img src="<?php echo get_template_directory_uri();?>/images/cat_artistic.png" alt="Artistic">
												<figcaption>Artistic</figcaption>
											</figure>
										</div>
									</div>
									<div class="col-md-3 col-sm-6">
										<div class="cat-thumb">
											<figure>
												<img src="<?php echo get_template_directory_uri();?>/images/cat_tech_based.png" alt="Tech Based">
												<figcaption>Tech Based</figcaption>
											</figure>
										</div>
									</div>
									<div class="col-md-3 col-sm-6">
										<div class="cat-thumb">
											<figure>
												<img src="<?php echo get_template_directory_uri();?>/images/cat_ambient_roving.png" alt="Ambient & Roving">
												<figcaption>Ambient & Roving</figcaption>
											</figure>
										</div>
									</div>
									<div class="col-md-3 col-sm-6">
										<div class="cat-thumb">
											<figure>
												<img src="<?php echo get_template_directory_uri();?>/images/cat_bollywood.png" alt="Bollywood">
												<figcaption>Bollywood</figcaption>
											</figure>
										</div>
									</div>
									<div class="col-md-3 col-sm-6">
										<div class="cat-thumb">
											<figure>
												<img src="<?php echo get_template_directory_uri();?>/images/cat_shows.png" alt="Shows">
												<figcaption>Shows</figcaption>
											</figure>
										</div>
									</div>
									<div class="col-md-3 col-sm-6">
										<div class="cat-thumb">
											<figure>
												<img src="<?php echo get_template_directory_uri();?>/images/cat_one_of_kind.png" alt="One of a Kind">
												<figcaption>One of a Kind</figcaption>
											</figure>
										</div>
									</div>
								</div>
							</div>
							<div role="tabpanel" class="tab-pane fade" id="events">

							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
	</div>
<?php
get_footer();
