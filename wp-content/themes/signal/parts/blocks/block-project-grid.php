<div class="block-project-grid">
  <div class="column-container column-container--grid">

    <?php
    $selected_projects = get_field('acf_project_grid');
    if( $selected_projects ): ?>

      <?php foreach( $selected_projects as $project ): 

        $permalink = get_permalink( $project->ID );
        $title = get_the_title( $project->ID );
        $image = get_field('project_image', $project->ID);
        $size = 'signal_cropped';
        ?>

        <div class="column">
          <article class="portfolio-summary">
            <a href="<?php echo esc_url( $permalink ); ?>">
              <div class="portfolio-summary__image">
                <?php echo wp_get_attachment_image( $image, $size ); ?>
              </div>

              <div class="portfolio-summary__overlay">
                <h2><?php echo esc_html( $title ); ?><span class="icon-arrow-right"></span></h2>
              </div>
            </a>
          </article>
        </div><!-- .column -->

      <?php endforeach; ?>

    <?php endif; ?>
  </div><!-- .column-container -->
</div><!-- .block-project-grid -->