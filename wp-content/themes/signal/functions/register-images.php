<?php  
// Add a new image size and chose to crop (you can also pass parameters for where to crop from)
function signal_register_image_sizes() {
  // add my custom sizes
  add_image_size( 'signal_full_width', 1800, 4000 ); // 1800px wide, height at sensible limit
  add_image_size( 'signal_half_width', 900, 4000 ); // 900px wide, height at sensible limit
  add_image_size( 'signal_cropped', 900, 700, true ); // 900px x 700px cropped
 }
add_action( 'after_setup_theme', 'signal_register_image_sizes' );


// Add my custom image sizes to the drop-down in the Gutenberg image block
function signal_custom_image_sizes_gb_block( $sizes ) {
  return array_merge( $sizes, array(
    'signal_full_width' => __( 'Full Width 1800px' ),
    'signal_half_width' => __( 'Half Width 900px' ),
    'signal_cropped' => __( 'Cropped 900px x 700px' ),
    ) );
  }
add_filter( 'image_size_names_choose','signal_custom_image_sizes_gb_block' );


// disable some default generated image sizes
function signal_disable_image_sizes($sizes) {
  // unset($sizes['thumbnail']); // disable thumbnail size 
  unset($sizes['medium']); // disable medium size 
  unset($sizes['large']); // disable large size 
  unset($sizes['medium_large']); // disable medium-large size 
  unset($sizes['1536x1536']); // disable 2x medium-large size 
  unset($sizes['2048x2048']); // disable 2x large size return $sizes;
  return $sizes;
}
add_action('intermediate_image_sizes_advanced', 'signal_disable_image_sizes');