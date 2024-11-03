<?php
	
load_template( get_template_directory() . '/inc/TGM/class-tgm-plugin-activation.php' );

/**
 * Recommended plugins.
 */
function cyber_security_blocks_register_recommended_plugins() {
	$plugins = array(
		array(
			'name'             => __( 'Ovation Elements', 'cyber-security-blocks' ),
			'slug'             => 'ovation-elements',
			'required'         => false,
			'force_activation' => false,
		)
	);
	$config = array();
	cyber_security_blocks_tgmpa( $plugins, $config );
}
add_action( 'tgmpa_register', 'cyber_security_blocks_register_recommended_plugins' );