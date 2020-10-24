<?php
/**
 * The template for displaying archive pages
 * 
 * I can use this for the blog 'Home' page to point to, and also for a categories archive page or a cpt archive page, if I want to share the same template around.
 * 
 * (If you don't have a category.php file then WP will next look to this archive.php file)
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package signal
 */

get_header(); ?>
<main id="main" class="site-main">
	<div id="primary" class="content-area">

		<div class="row row--pad">

			<div class="row__colspaced">

				<div class="span4-4 span12-8">

						<?php
						if ( have_posts() ) : ?>

							<?php // if ( is_home() && ! is_front_page() ) : ?>
							<header class="page-header">
								<h1 class="page-title"><?php single_post_title(); ?></h1>
								<!-- the description for an author, post type, or term archive -->
								<div class="archive-description"><?php the_archive_description(); ?></div>
							</header>
							<?php // endif;

							/* Start the Loop */
							while ( have_posts() ) : the_post(); ?>

							<article class="archive__post">
								<div class="archive__post-thumbnail">
									<a href="<?php the_permalink() ?>"><?php the_post_thumbnail ('cover_s')?></a>
								</div>
								<div class="archive__post-summary">
								<h1 class="archive__post-date">
									<?php the_time('jS \o\f F, Y'); ?>
								</h1>
									<h1 class="archive__post-summary-title"><?php the_title() ?></h1>
									<div class="archive__post-summary-excerpt"><?php the_excerpt ()?></div>
									<footer class="archive__post-footer">
										<?php signal_entry_footer(); ?>
									</footer><!-- .entry-footer -->
								</div>
							</article>

							<?php

							endwhile;

							the_posts_navigation();

						else :

							get_template_part( 'template-parts/content', 'none' );

						endif; ?>

					</div><!-- span -->

				<?php
				get_sidebar();
				?>

			</div><!-- colspaced -->

		</div><!-- row -->

	</div><!-- #primary .content-area -->
</main><!-- #main .site-main-->
<?php
get_footer();
