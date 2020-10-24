<?php
/**
 * The template for displaying the front page
 *
 * @package signal
 */

 get_header(); ?>
<main id="main" class="site-main">
	<div id="primary" class="content-area">

		<?php the_post(); ?>

		<article class="page page--home">

			<div class="row row--pad">
			
				<div class="homepage-logo">				
					<svg viewBox="0 0 446 446" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
						<title>Ben-logo</title>
						<g id="Page-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
								<g id="Ben-logo" transform="translate(1.000000, 1.000000)">
										<path d="M156,306.6 L156,323.2 L216,367.2 L216,443.9 L215,443.9 C95.6,440.2 0,342.3 0,222 C0,99.4 99.4,0 222,0 C344.6,0 444,99.4 444,222 C444,342.3 348.4,440.2 229,443.9 L229,367.2 L289,323.2 L289,306.6 L229,350.6 L229,330.5 L289,286.5 L289,269.9 L229,313.9 L229,291.9 L289,247.9 L289,230.4 L229,274.4 L229,256 L289,212 L289,195.4 L229,239.4 L229,217.4 L289,173.4 L289,156 L229,200 L229,117 L216,117 L216,200 L156,156 L156,173.5 L216,217.5 L216,239.5 L156,195.5 L156,212.1 L216,256.1 L216,274.5 L156,230.5 L156,248 L216,292 L216,314 L156,270 L156,286.6 L216,330.6 L216,350.7 L156,306.6 Z" id="Path" fill="var(--primary-color)" fill-rule="nonzero"></path>
										<g id="Group" stroke="var(--primary-color)">
												<path d="M229,444 L229,443.9 C348.4,440.2 444,342.3 444,222 C444,99.4 344.6,0 222,0 C99.4,0 0,99.4 0,222 C0,342.3 95.6,440.2 215,443.9" id="Path"></path>
												<polyline id="Path" points="216 444 216 443.9 216 367.2 156 323.2 156 306.6 216 350.6 216 330.5 156 286.5 156 269.9 216 313.9 216 291.9 156 247.9 156 230.4 216 274.4 216 256.1 156 212.1 156 195.5 216 239.5 216 217.5 156 173.5 156 156 216 200 216 117 229 117 229 200 289 156 289 173.5 229 217.5 229 239.5 289 195.5 289 212.1 229 256.1 229 274.4 289 230.4 289 247.9 229 291.9 229 313.9 289 269.9 289 286.5 229 330.5 229 350.6 289 306.6 289 323.2 229 367.2 229 443.9"></polyline>
										</g>
								</g>
						</g>
					</svg>
				</div><!-- .homepage-logo -->

				<div class="homepage-links column-container">

						<div class="column">
							<a href="/portfolio">portfolio</a>
						</div>
						<div class="column">
							<a href="/shop">shop</a>
						</div>

				</div><!-- .homepage-links -->

			</div><!-- .row -->

		</article>

	</div><!-- #primary .content-area -->
</main><!-- #main .site-main-->
<?php
// get_footer();
