<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since 1.0
 * @version 1.2
 */

?>

			<footer id="footer">
				<section class="main-footer segment segment1 space-medium">
					<div class="container">
						<div class="row">
							<div class="col-md-3">
								<a href="/" class="footer-logo"><img class="img-responsive" src="<?php echo get_template_directory_uri(); ?>/images/je_logo.png"></a>
								<div class="footer-navigation">
									<ul class="nav navbar-nav footer-nav-primary">
										<li class="nav-link"><a href="#">About Us</a></li>
										<li class="nav-link"><a href="#">News</a></li>
										<li class="nav-link"><a href="#">Artists</a></li>
										<li class="nav-link"><a href="#">Events</a></li>
										<li class="nav-link"><a href="#">Services</a></li>
									</ul>

									<ul class="nav navbar-nav footer-nav-term">
										<li class="nav-link"><a href="#">Terms & Conditions</a></li>
									</ul>

									<ul class="nav navbar-nav footer-nav-secondary">
										<li class="nav-link"><a href="#">Siolim House</a></li>
										<li class="nav-link"><a href="#">Jabudays Cruises</a></li>
									</ul>
								</div>
							</div>
							<div class="col-md-3">
								<div class="footer-contact">
									<ul class="fa-ul">
										<li><span class="fa-li"><span class="icon-base"><i class="fa fa-mobile"></i></span></span><a href="tel:+66856665504">+66 85 666 5504</a></li>
										<li><span class="fa-li"><span class="icon-base"><i class="fa fa-envelope-o"></i></span></span><a href="mailto:info@jabuevents.com">info@jabuevents.com</a></li>
										<li class="font-italic"><span class="fa-li"><span class="icon-base"><i class="fa fa-map-marker"></i></span></span>Bangkok, Phuket, Koh Samui, Hua Hin, Pattaya, New Delhi, Mumbai, Goa, Singapore, Dubai, Madrid, Rome</li>
										<li><p class="uppercase accent font-14"><strong>Be our artist</strong></p></li>
									</ul>
								</div>
							</div>
							<div class="col-md-3">
								<div class="footer-social">
									<p class="font-14 accent3">Follow us:</p>
									<a href="#" target="_blank">
										<span class="fa-stack fa-1x">
										  <i class="fa fa-circle fa-stack-2x"></i>
										  <i class="fa fa-facebook fa-stack-1x fa-inverse"></i>
										</span>
									</a>
									<a href="#" target="_blank">
										<span class="fa-stack fa-1x">
										  <i class="fa fa-circle fa-stack-2x"></i>
										  <i class="fa fa-twitter fa-stack-1x fa-inverse"></i>
										</span>
									</a>
									<a href="#" target="_blank">
										<span class="fa-stack fa-1x">
										  <i class="fa fa-circle fa-stack-2x"></i>
										  <i class="fa fa-google-plus fa-stack-1x fa-inverse"></i>
										</span>
									</a>
									<a href="#" target="_blank">
										<span class="fa-stack fa-1x">
										  <i class="fa fa-circle fa-stack-2x"></i>
										  <i class="fa fa-pinterest fa-stack-1x fa-inverse"></i>
										</span>
									</a>
									<a href="#" target="_blank">
										<span class="fa-stack fa-1x">
										  <i class="fa fa-circle fa-stack-2x"></i>
										  <i class="fa fa-youtube fa-stack-1x fa-inverse"></i>
										</span>
									</a>
									<a href="#" target="_blank">
										<span class="fa-stack fa-1x">
										  <i class="fa fa-circle fa-stack-2x"></i>
										  <i class="fa fa-vimeo fa-stack-1x fa-inverse"></i>
										</span>
									</a>
									<br class="visible-lg">
									<a href="#" target="_blank">
										<span class="fa-stack fa-1x">
										  <i class="fa fa-circle fa-stack-2x"></i>
										  <i class="fa fa-instagram fa-stack-1x fa-inverse"></i>
										</span>
									</a>
									<a href="#" target="_blank">
										<span class="fa-stack fa-1x">
										  <i class="fa fa-circle fa-stack-2x"></i>
										  <i class="fa fa-tumblr fa-stack-1x fa-inverse"></i>
										</span>
									</a>
									<a href="#" target="_blank">
										<span class="fa-stack fa-1x">
										  <i class="fa fa-circle fa-stack-2x"></i>
										  <i class="fab fa-stumbleupon fa-stack-1x fa-inverse"></i>
										</span>
									</a>
									<a href="#" target="_blank">
										<span class="fa-stack fa-1x">
										  <i class="fa fa-circle fa-stack-2x"></i>
										  <i class="fab fa-blogger-b fa-stack-1x fa-inverse"></i>
										</span>
									</a>
									<a href="#" target="_blank">
										<span class="fa-stack fa-1x">
										  <i class="fa fa-circle fa-stack-2x"></i>
										  <i class="fa fa-linkedin fa-stack-1x fa-inverse"></i>
										</span>
									</a>

								</div>
							</div>
							<div class="col-md-3">
								<div class="footer-subscribe">
									<h3 class="uppercase font-14 accent4">Subscribe</h3>
									<p class="font-14 accent3">Subscribe to our newsletter to be updated about latest news and interesting offers:</p>
									<form action="/" method="GET" class="form-footer-subscribe">
										<input type="email" class="form-control" placeholder="Email ID">
										<button class="btn btn-primary" type="submit">Submit</button>
									</form>
								</div>
							</div>
						</div>
					</div>
				</section>
				<section class="bottom-footer segment segment1 space-small">
					<div class="container">
						<div class="row">
							<div class="col-md-8">
								© 2016 <strong>Jabu Events</strong><span class="line-bottom-footer">|</span>Entertainment and event management
							</div>
							<div class="col-md-4">
								<img src="<?php echo get_template_directory_uri(); ?>/images/Ahead_logo.png" alt="Ahead Design" class="ahead-logo float-right">
							</div>
						</div>
					</div>
				</section>
			</footer>
		</div><!-- #content -->
	</div><!-- .site-content-contain -->
</div><!-- #page -->
<?php wp_footer(); ?>

</body>
</html>