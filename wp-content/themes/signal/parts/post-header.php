<header class="post__header">

	<p class="post-date"><?php the_time('l d M Y'); ?></p>

	<h2 class="post__title">

		<?php if( is_singular() ): ?>

		<?php the_title(); ?>

		<?php else: ?>

			<a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>

		<?php endif; ?>

	</h2>

</header>