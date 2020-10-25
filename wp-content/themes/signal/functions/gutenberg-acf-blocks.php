<?php
	
// register Gutenberg block category

function signal_block_categories( $categories, $post ) {

    $categories =  array_merge(
        array(
            array(
                'slug' => 'nebulo-blocks',
                'title' => 'Nebulo Blocks',
								'icon'  => 'marker',
            ),
        ),
        $categories        
    );
    
   return $categories;
}
add_filter( 'block_categories', 'signal_block_categories', 10, 2 );	
	
// register custom Gutenburg blocks
function signal_register_blocks() {
	
	// check function exists
	if( ! function_exists( 'acf_register_block_type' ) )
		return;

		// register blocks
		acf_register_block_type(array(
			'name'				 => 'spacing',
			'title'	 		   	 => __('Spacing'),
			'description'		 => __('A custom block for inserting whitespace'),
			'render_callback'    => 'signal_acf_block_render_callback',
			'category'			 => 'da_boilerplate-blocks',
			'mode'						=> 'edit', // ensures the block doesn't load into the editor in 'preview' mode, which in this block's case makes it invisible
			'icon'         	 	 => array( 'background' => '#e0edee', 'src' => 'sort' ),
			'keywords'			 => array( 'spacing', 'whitespace' ),
			'supports'      	 => array( 'align' => false ),
		));

		acf_register_block_type(array(
			'name'			  	  => 'project grid',
			'title'				    => __('Project Grid'),
			'description'		  => __('A custom block for displaying posts.'),
			'render_callback'	=> 'signal_acf_block_render_callback',
			'category'			  => 'da_boilerplate-blocks',
			'mode'						=> 'edit',
			'icon'            => array( 'background' => '#e0edee', 'src' => 'excerpt-view' ),
			'keywords'			  => array( 'tile', 'card', 'link', 'project' ),
			'supports'        => array( 'align' => false ),
		));
		
}
add_action('acf/init', 'signal_register_blocks');


function signal_acf_block_render_callback( $block ) {
	
	// convert name ("acf/form") into path friendly slug ("form")
	$slug = str_replace('acf/', '', $block['name']);
	
	// include a template part from within the "parts/blocks" folder
	if( file_exists(STYLESHEETPATH . "/parts/blocks/block-{$slug}.php") ) {
		include( STYLESHEETPATH . "/parts/blocks/block-{$slug}.php" );
	}
}