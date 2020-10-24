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
				
				<div class="post__entry">		
					<?php the_content(); ?>	
				</div>			

				<?php if( has_term( '', 'ct_portfolio_category' ) ) : ?>
				<div href="" class="post__categories">
					<p class="title">Project Categories:</p>
					<?php echo get_the_term_list( get_the_ID(), 'ct_portfolio_category', '', ' &sol; ' ); ?>
				</div>
				<?php endif; ?>
			
			</article>

		</div>

	</div><!-- #primary .content-area -->
</main><!-- #main .site-main-->
<?php
get_footer();
