<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage The Baby Dust Bunny
 * @since 1.0
 * @version 1.0
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js no-svg">
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=2.0, user-scalable=yes"/>
<link rel="profile" href="http://gmpg.org/xfn/11">
<link href="<?php echo get_template_directory_uri(); ?>/bootstrap/css/bootstrap.min.css" rel="stylesheet" />
<!-- <link href="<?php echo get_template_directory_uri(); ?>/bootstrap/css/bootstrap-theme.min.css" rel="stylesheet" /> -->
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/tether/1.4.4/js/tether.min.js"></script>
<link href="<?php echo get_template_directory_uri(); ?>/fontawesome/css/all.min.css" rel="stylesheet" />
<link href="<?php echo get_template_directory_uri(); ?>/fontawesome/css/v4-shims.min.css" rel="stylesheet" />
<link rel="stylesheet/less" href="<?php echo get_template_directory_uri(); ?>/css/main.less" type="text/css">
<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/js/OwlCarousel2/dist/assets/owl.carousel.min.css">
<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/js/OwlCarousel2/dist/assets/owl.theme.default.min.css">
<script src="<?php echo get_template_directory_uri(); ?>/js/OwlCarousel2/dist/owl.carousel.min.js"></script>
<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/main.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/less.js/3.7.1/less.min.js" ></script>
<script type="text/javascript">
    less.watch(); //less start
</script>
<script src="<?php echo get_template_directory_uri(); ?>/bootstrap/js/bootstrap.min.js"></script>
<link href="<?php echo get_template_directory_uri(); ?>/js/ninjaslider/5/ninja-slider.css" rel="stylesheet" type="text/css" />
<!--ninjaVideoPlugin.js is required only when the slider contains video or audio.-->
<script src="<?php echo get_template_directory_uri(); ?>/js/ninjaslider/5/ninjaVideoPlugin.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/js/ninjaslider/5/ninja-slider.js" type="text/javascript"></script>
<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="site">
	<div class="site-content-contain">
		<div id="content" class="site-content">
			<header id="header">
				<section class="main-header segment space-mini segment1">
					<div class="container">
						<div class="row d-sm-flex d-md-flex d-lg-flex align-items-center">
							<div class="col-md-2">
								<a href="/" class="logo"><img src="<?php echo get_template_directory_uri(); ?>/images/je_logo.png" alt="Jabu Events"></a>
							</div>
							<div class="col-md-8">
								<div class="navigation-wrapper">
									<nav role="navigation">
										<ul class="nav navbar-nav float-right">
											<li class="nav-link active"><a href="#">Home</a></li>
											<li class="nav-link"><a href="#">Performers</a></li>
											<li class="nav-link"><a href="#">Events</a></li>
											<li class="nav-link"><a href="#">Services</a></li>
											<li class="nav-link"><a href="#">Blog</a></li>
											<li class="nav-link"><a href="#">Contact</a></li>                    
										</ul>
									</nav>
								</div>
							</div>
							<div class="col-md-2 d-sm-flex d-md-flex d-lg-flex align-items-center justify-content-center">
								<div class="menu-language">
									<nav role="navigation">
										<ul class="nav navbar-nav">
											<li class="dropdown nav-link active">
												<a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><span data-hover="For MSPs ">EN</span><b class="caret"></b></a>
												<ul class="dropdown-menu">
													<li class="nav-link"><a href="#">TH</a></li>
												</ul>
											</li>
										</ul>
									</nav>
								</div>
								<div class="search-menu-wrapper">
									<div class="search-toggle">
										<form id="searchform" role="search" class="navbar-search" method="get" action="/"><input class="search-query" id="search" name="s" placeholder="Search..." type="text">
										</form>
									</div>
								</div>
							</div>
						</div>
					</div>
				</section>
			</header>
			