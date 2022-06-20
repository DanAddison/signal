<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package signal
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>

<?php get_template_part( 'template-parts/head' ); ?>

<body <?php body_class(); ?>>

	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'signal' ); ?></a>

	<?php do_action( 'signal_before_site_header' ); ?>
	
	<header class="site-header" id="masthead">


			<?php if( has_nav_menu( 'main' ) ) : ?>	
			<?php get_template_part( 'template-parts/side-navigation' ); ?>
			<?php endif; ?>

			
			<div class="hamburger-container">
				<button class="menu-button hamburger hamburger--arrowturn" type="button" id="js-menu-button">
					<span class="hamburger-box">
						<span class="hamburger-inner"></span>
					</span>
				</button><!-- .hamburger -->
			</div>
			
			<div class="site-branding">

				<?php the_custom_logo(); ?>
									
				<h1 class="site-title">
					<a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a>
				</h1>

			</div><!-- .site-branding -->
			
			<?php get_template_part( 'template-parts/woo-navigation' ); ?>

	</header><!-- #site-header -->
	
	<?php do_action( 'signal_after_site_header' ); ?>