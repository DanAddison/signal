
<?php
/**
 * The template for displaying Portfolio project archives
 *
 * @package signal
 */

get_header(); ?>
<main id="main" class="site-main">
  <div id="primary" class="content-area">
      
			<?php
			if ( have_posts() ) : ?>



		<div class="row row--pad">
	
			<header class="taxonomy-archive__header">
				<h1 class="taxonomy-archive__title ">Category: <?php single_term_title(); ?></h1>
				<!-- the description for an author, post type, or term archive -->
				<div class="taxonomy-archive__description"><?php the_archive_description(); ?></div>
			</header>

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
