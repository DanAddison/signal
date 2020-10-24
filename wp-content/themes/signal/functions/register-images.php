<?php  
// Add a new image size and chose to crop (you can also pass parameters for where to crop from)
function signal_register_image_sizes() {
  add_image_size( 'signal_full_width', 1800, 4000 ); // 1800px wide, height at sensible limit
  add_image_size( 'signal_half_width', 900, 4000 ); // 900px wide, height at sensible limit
  add_image_size( 'signal_cropped', 800, 600, true ); // 800px x 600px cropped
 }

 add_action( 'after_setup_theme', 'signal_register_image_sizes' );


// Add my custom image sizes to the drop-down in the Gutenberg image block
function signal_custom_image_sizes_gb_block( $sizes ) {
  return array_merge( $sizes, array(
    'signal_full_width' => __( 'Content Full Width' ),
    'signal_half_width' => __( 'Content Half Width' ),
    'signal_cropped' => __( 'Cropped 800px x 600px' ),
    ) );
  }
  add_filter( 'image_size_names_choose','signal_custom_image_sizes_gb_block' );