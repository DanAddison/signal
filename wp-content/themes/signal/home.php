<?php
/**
 * this displays the posts page 
 * ie. the blog home page 
 * 
 * 
 * @package signal
 */

get_header(); ?>
<main id="main" class="site-main">
	<div id="primary" class="content-area">

		<?php if( have_posts() ): ?>

		<div class="row">

			<div class="archive">
			
				<?php while( have_posts() ): the_post(); ?>

					<?php get_template_part( 'parts/summary' ); ?>
					
				<?php endwhile; ?>
			
			</div>

			<?php get_template_part( 'parts/pagination' ); ?>
			
			<?php else: ?>
			
			<div class="row row--pad">
			
				<?php get_template_part( 'parts/nothing-to-display' ); ?>
				
		</div>

		</div>
		<?php endif; ?>

	</div><!-- #primary .content-area -->
</main><!-- #main .site-main-->
<?php get_footer();
