<?php
/**
 * The template for displaying Portfolio project archives
 *
 * @package signal
 */

get_header(); ?>
<main id="main" class="site-main">
	<div id="primary" class="content-area">

		<div class="row row--pad">

			<?php
			if ( have_posts() ) : ?>

			<header class="portfolio-archive__header">
				<h1 class="portfolio-archive__title"><?php post_type_archive_title(); ?></h1>
			</header>

		</div><!-- .row -->	

		<div class="row row--pad">

				<div class="column-container column-container--grid">
						
					<?php
					/* Start the Loop */
					while ( have_posts() ) : the_post(); ?>

					<div class="column">

						<article class="portfolio-summary">

							<a href="<?php the_permalink() ?>">
	
								<div class="portfolio-summary__image">
									<?php echo wp_get_attachment_image( get_field('project_image'), 'signal_cropped' ); ?>
								</div>

								<div class="portfolio-summary__overlay">
									<h2><?php the_title() ?><span class="icon-arrow-right"></span></h2>
								</div>

						
							</a>
	
						</article>

					</div><!-- .column -->
					
					<?php endwhile; ?>

				</div><!-- .column-container -->

				<?php the_posts_navigation();

			else :

				get_template_part( 'template-parts/content', 'none' );

			endif; ?>


		</div><!-- row -->

	</div><!-- #primary .content-area -->
</main><!-- #main .site-main-->
<?php
get_footer();
