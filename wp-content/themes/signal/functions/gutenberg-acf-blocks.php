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
			'category'			 => 'nebulo-blocks',
			'mode'						=> 'edit', // ensures the block doesn't load into the editor in 'preview' mode, which in this block's case makes it invisible
			'icon'         	 	 => array( 'background' => '#e0edee', 'src' => 'sort' ),
			'keywords'			 => array( 'spacing', 'whitespace' ),
			'supports'      	 => array( 'align' => false ),
		));

		// acf_register_block_type(array(
		// 	'name'			  	  => 'page-heading',
		// 	'title'				    => __('Page Heading'),
		// 	'description'		  => __('A custom block for adding a page heading not associated with the page slug or nav item.'),
		// 	'render_callback'	=> 'signal_acf_block_render_callback',
		// 	'category'			  => 'nebulo-blocks',
		// 	'mode'						=> 'edit',
		// 	'icon'            => array( 'background' => '#e0edee', 'src' => 'media-default' ),
		// 	'keywords'			  => array( 'title', 'text', 'heading' ),
		// 	'supports'        => array( 'align' => false ),
		// ));

		acf_register_block_type(array(
			'name'			  	  => 'project-meta',
			'title'				    => __('Project Meta'),
			'description'		  => __('A custom block for adding meta data about a project.'),
			'render_callback'	=> 'signal_acf_block_render_callback',
			'category'			  => 'nebulo-blocks',
			'mode'						=> 'edit',
			'icon'            => array( 'background' => '#e0edee', 'src' => 'list-view' ),
			'keywords'			  => array( 'meta', 'data', 'project' ),
			'supports'        => array( 'align' => false ),
		));

		acf_register_block_type(array(
			'name'			  	  => 'cover-image',
			'title'				    => __('Cover Image'),
			'description'		  => __('A custom block for adding a responsive fullscreen background image.'),
			'render_callback'	=> 'signal_acf_block_render_callback',
			'category'			  => 'nebulo-blocks',
			'mode'						=> 'edit',
			'icon'            => array( 'background' => '#e0edee', 'src' => 'format-image' ),
			'keywords'			  => array( 'image', 'full-width', 'cover' ),
			'supports'        => array( 'align' => false ),
		));

		acf_register_block_type(array(
			'name'			  	  => 'link-card',
			'title'				    => __('Link Card'),
			'description'		  => __('A custom block for adding an image which links anywhere.'),
			'render_callback'	=> 'signal_acf_block_render_callback',
			'category'			  => 'nebulo-blocks',
			'mode'						=> 'edit',
			'icon'            => array( 'background' => '#e0edee', 'src' => 'external' ),
			'keywords'			  => array( 'image', 'card', 'link' ),
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