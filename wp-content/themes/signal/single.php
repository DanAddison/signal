<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package signal
 */

get_header(); ?>
<main id="main" class="site-main">
	<div id="primary" class="content-area">

		<?php the_post(); ?>
		
		<div class="row">
			<article class="post">

				<?php get_template_part('parts/lazy-image'); ?>
	
				<?php get_template_part('parts/post-header'); ?>
				
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
