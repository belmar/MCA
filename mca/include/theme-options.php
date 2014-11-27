<?php
class Child_Theme_Settings extends Genesis_Admin_Boxes {
	
	function __construct() {
		
		$social_media = 'social-media';
		
		$menu_social_media = array(
			'submenu' => array(
				'parent_slug' => 'genesis',
				'page_title'  => 'MCA - Social Media',
				'menu_title'  => 'Social Media',
			)
		);
		
		$page_social_media = array(
		//	'screen_icon'       => 'options-general',
		//	'save_button_text'  => 'Save Settings',
		//	'reset_button_text' => 'Reset Settings',
		//	'save_notice_text'  => 'Settings saved.',
		//	'reset_notice_text' => 'Settings reset.',
		);
		
		$settings_social_media = 'social-media-settings';
		
		$default_settings_social_media = array(
			'facebook'   => '',
			'instagram' => '',
			'pinterest'   => '',
			'twitter' => '',
			'linkedin'   => '',
			'google' => '',
			'youtube'   => '',
			'flickr'   => '',
			'foursquare'   => '',
		);
		
		
		$this->create(  $social_media, $menu_social_media, $page_social_media, $settings_social_media, $default_settings_social_media );

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
		
		add_meta_box('social-media', 'Social Media', array( $this, 'social_media_boxes' ), $this->pagehook, 'main', 'high');
		
	}

	function social_media_boxes() {
		
		echo '<p>Facebook:<br />';
		echo '<input type="text" name="' . $this->get_field_name( 'facebook' ) . '" id="' . $this->get_field_id( 'facebook' ) . '" value="' . esc_attr( $this->get_field_value( 'facebook' ) ) . '" size="50" placeholder="http://" />';
		echo '</p>';
		
		echo '<p>Instagram:<br />';
		echo '<input type="text" name="' . $this->get_field_name( 'instagram' ) . '" id="' . $this->get_field_id( 'instagram' ) . '" value="' . esc_attr( $this->get_field_value( 'instagram' ) ) . '" size="50" placeholder="http://" />';
		echo '</p>';
		
		echo '<p>Pinterest:<br />';
		echo '<input type="text" name="' . $this->get_field_name( 'pinterest' ) . '" id="' . $this->get_field_id( 'pinterest' ) . '" value="' . esc_attr( $this->get_field_value( 'pinterest' ) ) . '" size="50" placeholder="http://" />';
		echo '</p>';
		
		echo '<p>Twitter:<br />';
		echo '<input type="text" name="' . $this->get_field_name( 'twitter' ) . '" id="' . $this->get_field_id( 'twitter' ) . '" value="' . esc_attr( $this->get_field_value( 'twitter' ) ) . '" size="50" placeholder="http://" />';
		echo '</p>';
		
		echo '<p>LinkedIn:<br />';
		echo '<input type="text" name="' . $this->get_field_name( 'linkedin' ) . '" id="' . $this->get_field_id( 'linkedin' ) . '" value="' . esc_attr( $this->get_field_value( 'linkedin' ) ) . '" size="50" placeholder="http://" />';
		echo '</p>';
		
		echo '<p>Google:<br />';
		echo '<input type="text" name="' . $this->get_field_name( 'google' ) . '" id="' . $this->get_field_id( 'google' ) . '" value="' . esc_attr( $this->get_field_value( 'google' ) ) . '" size="50" placeholder="http://" />';
		echo '</p>';
		
		echo '<p>Youtube:<br />';
		echo '<input type="text" name="' . $this->get_field_name( 'youtube' ) . '" id="' . $this->get_field_id( 'youtube' ) . '" value="' . esc_attr( $this->get_field_value( 'youtube' ) ) . '" size="50" placeholder="http://" />';
		echo '</p>';
		
		echo '<p>Flickr:<br />';
		echo '<input type="text" name="' . $this->get_field_name( 'flickr' ) . '" id="' . $this->get_field_id( 'flickr' ) . '" value="' . esc_attr( $this->get_field_value( 'flickr' ) ) . '" size="50" placeholder="http://" />';
		echo '</p>';
		
		echo '<p>Foursquare:<br />';
		echo '<input type="text" name="' . $this->get_field_name( 'foursquare' ) . '" id="' . $this->get_field_id( 'foursquare' ) . '" value="' . esc_attr( $this->get_field_value( 'foursquare' ) ) . '" size="50" placeholder="http://" />';
		echo '</p>';
	
		//echo '<p>Address</p>';
		//echo '<p><textarea name="' . $this->get_field_name( 'address' ) . '" cols="78" rows="8">' . esc_textarea( $this->get_field_value( 'address' ) ) . '</textarea></p>';		
	
	
	}
	
	
}


add_action( 'genesis_admin_menu', 'be_add_child_theme_settings' );

function be_add_child_theme_settings() {
	global $_child_theme_settings;
	$_child_theme_settings = new Child_Theme_Settings;	 	
}