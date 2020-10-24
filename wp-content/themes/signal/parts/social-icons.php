<?php
/**
 * These social icons are set in the customizer
 *
 *
 * @package signal
 */
?>

<div class="social-icons">

<?php if(get_theme_mod('signal_email') != ''): ?>
  <a target="_blank" href="mailto:<?php echo get_theme_mod('signal_email'); ?>?&body=[direct mail from bluegold.com]">
    <i class="icon-mail"></i>
  </a>
<?php endif; ?>

<?php if(get_theme_mod('signal_telephone') != ''): ?>
  <a itemprop="telephone" href="tel:<?php echo get_theme_mod('signal_telephone'); ?>">
    <i class="icon-phone"></i>
  </a>
<?php endif; ?>

<?php if(get_theme_mod('signal_facebook') != ''): ?>
  <a target="_blank" href="<?php echo get_theme_mod('signal_facebook'); ?>">
    <i class="icon-facebook"></i>
  </a>
<?php endif; ?>

<?php if(get_theme_mod('signal_instagram') != ''): ?>
  <a target="_blank" href="<?php echo get_theme_mod('signal_instagram'); ?>">
    <i class="icon-instagram"></i>
  </a>
<?php endif; ?>

<?php if(get_theme_mod('signal_linkedin') != ''): ?>
  <a target="_blank" href="<?php echo get_theme_mod('signal_linkedin'); ?>">
    <i class="icon-linkedin"></i>
  </a>
<?php endif; ?>

<?php if(get_theme_mod('signal_twitter') != ''): ?>
  <a target="_blank" href="<?php echo get_theme_mod('signal_twitter'); ?>">
    <i class="icon-twitter"></i>
  </a>
<?php endif; ?>

<?php if(get_theme_mod('signal_vimeo') != ''): ?>
  <a target="_blank" href="<?php echo get_theme_mod('signal_vimeo'); ?>">
    <i class="icon-vimeo"></i>
  </a>
<?php endif; ?>

<?php if(get_theme_mod('signal_youtube') != ''): ?>
  <a target="_blank" href="<?php echo get_theme_mod('signal_youtube'); ?>">
    <i class="icon-youtube"></i>
  </a>
<?php endif; ?>

<?php if(get_theme_mod('signal_soundcloud') != ''): ?>
  <a target="_blank" href="<?php echo get_theme_mod('signal_soundcloud'); ?>">
    <i class="icon-soundcloud2"></i>
  </a>
<?php endif; ?>

<?php if(get_theme_mod('signal_pinterest') != ''): ?>
  <a target="_blank" href="<?php echo get_theme_mod('signal_pinterest'); ?>">
    <i class="icon-pinterest1"></i>
  </a>
<?php endif; ?>

<?php if(get_theme_mod('signal_github') != ''): ?>
  <a target="_blank" href="<?php echo get_theme_mod('signal_github'); ?>">
    <i class="icon-github"></i>
  </a>
<?php endif; ?>

</div>