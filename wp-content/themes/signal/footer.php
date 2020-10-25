<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package signal
 */

?>

	<div class="row row--pad row--limit-bottom-pad">
		<!-- get widget area for cart -->
		<?php get_template_part( 'sidebar-footer' ); ?>
	</div>


	<?php do_action( 'signal_before_site_footer' ); ?>
	
	<footer class="site-footer" id="site-footer">

			<div class="column-container">

				<div class="column">

					<?php if( has_nav_menu( 'secondary' ) ): ?>
					<?php get_template_part( 'template-parts/secondary-navigation' ); ?>
					<?php endif; ?>

				</div><!-- .column -->

				<div class="column column--align-right">

						<?php get_template_part( 'parts/social-icons' ); ?>

				</div><!-- .column -->

			</div><!-- .column-container -->


			<div class="sub-footer">
				<div class="column-container">

					<div class="column column--copyright">
						<?php if( get_theme_mod( 'signal_footer_company_copyright' )): ?>
						<p class="legal__copyright">&copy; <?php echo date('Y'); ?> <?php echo get_theme_mod( 'signal_footer_company_copyright' ); ?></p>
						<?php endif; ?>
					</div>

					<div class="column column--align-right">
						<p class="credit">Site: <a href="https://danaddison.uk">Dan Addison</a></p>
					</div>

				</div><!-- .column-container -->
			</div><!-- .sub-footer -->
	
	</footer><!-- #site-footer -->

	<?php do_action( 'signal_after_site_footer' ); ?>


<?php wp_footer(); ?>

</body>
</html>
