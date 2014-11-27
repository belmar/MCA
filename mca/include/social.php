<?php

function be_social_defaults( $defaults ) {

	$defaults['twitter_url'] = '';
	$defaults['facebook_url'] = '';

	return $defaults;
}
add_filter( 'genesis_theme_settings_defaults', 'be_social_defaults' );


function be_register_social_sanitization_filters() {
	genesis_add_option_filter( 'no_html', GENESIS_SETTINGS_FIELD,
		array(
			'twitter_url',
			'facebook_url',
		) );
}
add_action( 'genesis_settings_sanitizer_init', 'be_register_social_sanitization_filters' );



function be_register_social_settings_box( $_genesis_theme_settings_pagehook ) {
	add_meta_box('be-social-settings', 'Social Links', 'be_social_settings_box', $_genesis_theme_settings_pagehook, 'main', 'high');
}
add_action('genesis_theme_settings_metaboxes', 'be_register_social_settings_box');


function be_social_settings_box() {
	?>

	<p>Twitter URL:<br />
	<input type="text" name="<?php echo GENESIS_SETTINGS_FIELD; ?>[twitter_url]" value="<?php echo esc_attr( genesis_get_option('twitter_url') ); ?>" size="50" /> </p>

	<p>Facebook URL:<br />
	<input type="text" name="<?php echo GENESIS_SETTINGS_FIELD; ?>[facebook_url]" value="<?php echo esc_attr( genesis_get_option('facebook_url') ); ?>" size="50" /> </p>

	<?php
}
?>