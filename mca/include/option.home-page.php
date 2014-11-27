<?php
class Child_Theme_Settings extends Genesis_Admin_Boxes {
	
	function __construct() {
		
		// Specify a unique page ID. 
		$page_id = 'child';
		
		// Set it as a child to genesis, and define the menu and page titles
		$menu_ops = array(
			'submenu' => array(
				'parent_slug' => 'genesis',
				'page_title'  => 'MCA - Home Page',
				'menu_title'  => 'Home Page',
			)
		);
		
		// Set up page options. These are optional, so only uncomment if you want to change the defaults
		$page_ops = array(
		//	'screen_icon'       => 'options-general',
		//	'save_button_text'  => 'Save Settings',
		//	'reset_button_text' => 'Reset Settings',
		//	'save_notice_text'  => 'Settings saved.',
		//	'reset_notice_text' => 'Settings reset.',
		);		
		
		// Give it a unique settings field. 
		// You'll access them from genesis_get_option( 'option_name', 'child-settings' );
		$settings_field = 'child-settings';
		
		// Set the default values
		$default_settings = array(
			'phone'   => '',
			'address' => '',
		);
		
		// Create the Admin Page
		$this->create( $page_id, $menu_ops, $page_ops, $settings_field, $default_settings );

		// Initialize the Sanitization Filter
		add_action( 'genesis_settings_sanitizer_init', array( $this, 'sanitization_filters' ) );
			
	}

	function sanitization_filters() {
		
		genesis_add_option_filter( 'no_html', $this->settings_field,
			array(
				'phone',
				'address',
			) );
	}
	
	 function help() {
	 	$screen = get_current_screen();

		$screen->add_help_tab( array(
			'id'      => 'sample-help', 
			'title'   => 'Sample Help',
			'content' => '<p>Help content goes here.</p>',
		) );
	 }
	

	function metaboxes() {
		
		add_meta_box('contact-information', 'Contact Information', array( $this, 'contact_information' ), $this->pagehook, 'main', 'high');
		
	}

	function contact_information() {
		
		echo '<p>Phone:<br />';
		echo '<input type="text" name="' . $this->get_field_name( 'phone' ) . '" id="' . $this->get_field_id( 'phone' ) . '" value="' . esc_attr( $this->get_field_value( 'phone' ) ) . '" size="50" />';
		echo '</p>';
	
		echo '<p>Address</p>';
		echo '<p><textarea name="' . $this->get_field_name( 'address' ) . '" cols="78" rows="8">' . esc_textarea( $this->get_field_value( 'address' ) ) . '</textarea></p>';		
	
	
		echo '<p>Social Links</p>';
		echo '<p><textarea name="' . $this->get_field_name( 'address' ) . '" cols="78" rows="8">' . esc_textarea( $this->get_field_value( 'address' ) ) . '</textarea></p>';		
	
	}
	
	
}


add_action( 'genesis_admin_menu', 'be_add_child_theme_settings' );

function be_add_child_theme_settings() {
	global $_child_theme_settings;
	$_child_theme_settings = new Child_Theme_Settings;	 	
}