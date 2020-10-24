<?php
/**
 * Displays main site header navigation
 *
 * @package signal
 * @version 1.0
 */
?>
<div class="sidenav" id="side-navigation">

<div class="theme-switch-wrapper">
    <label class="theme-switch" for="checkbox">
        <input type="checkbox" id="checkbox" />
        <div class="slider round"></div>
  </label>
</div>

	<?php get_template_part( 'template-parts/main-navigation' ); ?>

	<?php get_template_part( 'template-parts/woo-navigation' ); ?>

	<?php get_template_part( 'template-parts/secondary-navigation' ); ?>

</div><!-- #site-main-navigation -->