<?php
/**
 * signal Theme Customizer
 *
 * @package signal
 */

/**
 * Useful article: https://maddisondesigns.com/2017/05/the-wordpress-customizer-a-developers-guide-part-1/
 *
 * @param WP_Customize_Manager $wp_customize Theme Customizer object.
 */
function signal_customize_register( $wp_customize ) {

	// remove some default sections * note that you can't remove 'widgets' section this way
	$wp_customize->remove_section( 'custom_css' );
	$wp_customize->remove_section( 'static_front_page' );
	$wp_customize->remove_section( 'colors' );


	/**
   * add Footer Content section.
   */
	$wp_customize->add_section( 'signal_footer', array(
		'title' => __( 'Footer Content' ),
		'priority' => 170
	));

	$wp_customize->add_setting( 'signal_footer_company_name',
   array(
      'default' => 'True North', // Optional.
   )
	);
	$wp_customize->add_control( 'signal_footer_company_name_control', array(
		'label' => 'Company Name',
		'settings' => 'signal_footer_company_name',
		'section' => 'signal_footer',
		'type' => 'text',
		'input_attrs' => array( // Optional.
			'placeholder' => __( 'Enter name...' ),
	 ),
	));

	$wp_customize->add_setting( 'signal_footer_company_address_1',
   array(
      'default' => '', // Optional.
   )
	);
	$wp_customize->add_control( 'signal_footer_company_address_1_control', array(
		'label' => 'Company Address line 1',
		'settings' => 'signal_footer_company_address_1',
		'section' => 'signal_footer',
		'type' => 'text',
		'input_attrs' => array( // Optional.
			'placeholder' => __( 'Enter address...' ),
	 ),
	));
	$wp_customize->add_setting( 'signal_footer_company_address_2',
   array(
      'default' => '', // Optional.
   )
	);
	$wp_customize->add_control( 'signal_footer_company_address_2_control', array(
		'label' => 'Company Address line 2',
		'settings' => 'signal_footer_company_address_2',
		'section' => 'signal_footer',
		'type' => 'text',
		'input_attrs' => array( // Optional.
			'placeholder' => __( 'Enter address...' ),
	 ),
	));
	$wp_customize->add_setting( 'signal_footer_company_address_3',
   array(
      'default' => '', // Optional.
   )
	);
	$wp_customize->add_control( 'signal_footer_company_address_3_control', array(
		'label' => 'Company Address line 3',
		'settings' => 'signal_footer_company_address_3',
		'section' => 'signal_footer',
		'type' => 'text',
		'input_attrs' => array( // Optional.
			'placeholder' => __( 'Enter address...' ),
	 ),
	));
	$wp_customize->add_setting( 'signal_footer_company_address_4',
   array(
      'default' => '', // Optional.
   )
	);
	$wp_customize->add_control( 'signal_footer_company_address_4_control', array(
		'label' => 'Company Address line 4',
		'settings' => 'signal_footer_company_address_4',
		'section' => 'signal_footer',
		'type' => 'text',
		'input_attrs' => array( // Optional.
			'placeholder' => __( 'Enter address...' ),
	 ),
	));

	$wp_customize->add_setting( 'signal_footer_company_email',
   array(
      'default' => '', // Optional.
   )
	);
	$wp_customize->add_control( 'signal_footer_company_email_control', array(
		'label' => 'Company Email',
		'settings' => 'signal_footer_company_email',
		'section' => 'signal_footer',
		'type' => 'email',
		'input_attrs' => array( // Optional.
			'placeholder' => __( 'Enter email...' ),
	 ),
	));

	$wp_customize->add_setting( 'signal_footer_company_phone',
   array(
      'default' => '', // Optional.
   )
	);
	$wp_customize->add_control( 'signal_footer_company_phone_control', array(
		'label' => 'Company Telephone',
		'settings' => 'signal_footer_company_phone',
		'section' => 'signal_footer',
		'type' => 'text',
		'input_attrs' => array( // Optional.
			'placeholder' => __( 'Enter phone number...' ),
	 ),
	));

	$wp_customize->add_setting( 'signal_footer_company_copyright',
   array(
      'default' => '', // Optional.
   )
	);
	$wp_customize->add_control( 'signal_footer_company_copyright_control', array(
		'label' => 'Copyright Notice',
		'settings' => 'signal_footer_company_copyright',
		'section' => 'signal_footer',
		'type' => 'text', // default control can be either text, email, url, number, hidden, or date
		'input_attrs' => array( // Optional.
			'placeholder' => __( 'Enter company name for copyright notice...' ),
	 ),
	));

	$wp_customize->add_setting( 'signal_footer_newsletter_signup',
   array(
			'default' => '', // Optional.
   )
	);
	$wp_customize->add_control( 'signal_footer_newsletter_signup_control', array(
		'label' => 'Newsletter Intro',
		'settings' => 'signal_footer_newsletter_signup',
		'section' => 'signal_footer',
		'type' => 'text', // default control can be either text, email, url, number, hidden, or date
		'input_attrs' => array( // Optional.
			'placeholder' => __( 'Optionally add a brief description to form...' ),
	 ),
	));
	

	/**
   * add Social Icons settings
   */
	$wp_customize->add_section( 'signal_custom_social_icons_section', array(
			'title' => 'Social Icons',
			'description' => 'Social icons will display in the footer for any social media account URLs that you enter here.'
		));

	$wp_customize->add_setting( 'signal_email', array(
		'default' => ''
	));

	$wp_customize->add_setting( 'signal_facebook', array(
		'default' => ''
	));

	$wp_customize->add_setting( 'signal_instagram', array(
		'default' => ''
	));

	$wp_customize->add_setting( 'signal_linkedin', array(
		'default' => ''
	));

	$wp_customize->add_setting( 'signal_telephone', array(
		'default' => ''
	));

	$wp_customize->add_setting( 'signal_twitter', array(
		'default' => ''
	));

	$wp_customize->add_setting( 'signal_vimeo', array(
		'default' => ''
	));

	$wp_customize->add_setting( 'signal_youtube', array(
		'default' => ''
	));

	$wp_customize->add_setting( 'signal_soundcloud', array(
		'default' => ''
	));

	$wp_customize->add_setting( 'signal_pinterest', array(
		'default' => ''
	));

	$wp_customize->add_setting( 'signal_github', array(
		'default' => ''
	));
	
	$wp_customize->add_control( 'signal_email_control', array(
		'label' => 'Email URL',
		'settings' => 'signal_email',
		'section' => 'signal_custom_social_icons_section'
	));

	$wp_customize->add_control( 'signal_facebook_control', array(
		'label' => 'Facebook URL',
		'settings' => 'signal_facebook',
		'section' => 'signal_custom_social_icons_section'
	));

	$wp_customize->add_control( 'signal_instagram_control', array(
		'label' => 'Instagram URL',
		'settings' => 'signal_instagram',
		'section' => 'signal_custom_social_icons_section'
	));

	$wp_customize->add_control( 'signal_linkedin_control', array(
		'label' => 'LinkedIn URL',
		'settings' => 'signal_linkedin',
		'section' => 'signal_custom_social_icons_section'
	));

	$wp_customize->add_control( 'signal_telephone_control', array(
		'label' => 'Telephone',
		'settings' => 'signal_telephone',
		'section' => 'signal_custom_social_icons_section'
	));

	$wp_customize->add_control( 'signal_twitter_control', array(
		'label' => 'Twitter URL',
		'settings' => 'signal_twitter',
		'section' => 'signal_custom_social_icons_section'
	));

	$wp_customize->add_control( 'signal_vimeo_control', array(
		'label' => 'Vimeo URL',
		'settings' => 'signal_vimeo',
		'section' => 'signal_custom_social_icons_section'
	));

	$wp_customize->add_control( 'signal_youtube_control', array(
		'label' => 'YouTube URL',
		'settings' => 'signal_youtube',
		'section' => 'signal_custom_social_icons_section'
	));

	$wp_customize->add_control( 'signal_soundcloud_control', array(
		'label' => 'Soundcloud URL',
		'settings' => 'signal_soundcloud',
		'section' => 'signal_custom_social_icons_section'
	));

	$wp_customize->add_control( 'signal_pinterest_control', array(
		'label' => 'Pinterest URL',
		'settings' => 'signal_pinterest',
		'section' => 'signal_custom_social_icons_section'
	));

	$wp_customize->add_control( 'signal_github_control', array(
		'label' => 'Github URL',
		'settings' => 'signal_github',
		'section' => 'signal_custom_social_icons_section'
	));

}
add_action( 'customize_register', 'signal_customize_register' );

