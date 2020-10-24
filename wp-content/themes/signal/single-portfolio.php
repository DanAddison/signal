<?php
/**
 * The template for displaying all single Portfolio projects
 *
 *
 * @package signal
 */

get_header(); ?>
<main id="main" class="site-main">
	<div id="primary" class="content-area">

		<?php the_post(); ?>
		
		<div class="row row--pad">
			<article class="post post--portfolio">

				<?php if( ! empty( get_field('project_image') ) ) : ?>
				<div class="project__image"></div>
				<?php endif; ?>

				<header class="post__header">

					<h1 class="post__title">
						<?php the_title(); ?>
					</h1>

					<?php // get_template_part( 'parts/project-categories' ); ?>

				</header>
				
				<div class="post__entry">
				
					<?php the_content(); ?>
				
				</div>
			
			</article>

			<?php // get_sidebar(); ?>

		</div>

	</div><!-- #primary .content-area -->
</main><!-- #main .site-main-->
<?php
get_footer();
