<?php  
// Add a new image size and chose to crop (you can also pass parameters for where to crop from)
function signal_register_image_sizes() {
    
  // width*0.6 = height
  add_image_size( 'cover_s', 800, 480, true );
  add_image_size( 'cover_m', 1200, 720, true );
  add_image_size( 'cover_l', 1700, 1020, true );
  add_image_size( 'cover_xl', 2200, 1320, true );
 }

 add_action( 'after_setup_theme', 'signal_register_image_sizes' );