<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package EPRG-PPP
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e( 'Skip to content', 'eprg-ppp' ); ?></a>

	<header id="masthead" class="site-header">
			<div class="top-nav">
				<div class="container">
					<div class="row">
						<div class="col">
							<div class="top-nav-logo d-flex justify-content-center justify-content-md-start justify-content-sm-center pb-1">
								<?php echo the_custom_logo();?>
							</div>
						</div>
						<div class="col-md-6">
							<div class="top-nav-contact pt-3">
								<div class="text-slider">
									<marquee  direction="left">
										Office of the Secretary, Economic planning, Revenue Generation & PPP Block A Room 001/002 top Floor, Federal Capital Territory Administration Secretariat 1, Kapital Road Area 11 Garki-Abuja.

									</marquee>
								</div>	
							</div>
						</div>
						<div class="col">
							<div class="social">
								<div class="top-nav-social d-flex justify-content-center justify-content-md-end">
									<a href="https://www.facebook.com/eprgppp" target="_blank"><i class="bi bi-facebook"></i></a>
									<a href="https://twitter.com/eprgppp" target="_blank"><i class="bi bi-twitter"></i></a>
									<a href="https://www.linkedin.com/in/eprgppp-secretariat-1aba24236/" target="_blank"><i class="bi bi-linkedin"></i></a>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
	
		<nav id="site-navigation" class="main-navigation">
			<div class="container">
				<div class="row">
					<div class="col-lg-8 col-md-8">

						<button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false">
							<i class="bi bi-list"></i>
							<?php esc_html_e( 'Menu', 'eprg-ppp' ); ?>
						</button>
						
							<?php
							wp_nav_menu(
								array(
									'theme_location' => 'menu-1',
									'menu_id'        => 'primary-menu',
								)
							);
							?>
					</div>
					<div class="col-lg-4 col-md-4 ">
						<?php echo get_search_form();?>	
					</div>
				</div>
			</div>
			
		</nav><!-- #site-navigation -->
	</header><!-- #masthead -->
