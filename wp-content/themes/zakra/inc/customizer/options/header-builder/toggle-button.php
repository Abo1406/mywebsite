<?php

$options = array();

if ( ! zakra_is_zakra_pro_active() ) {
	$options['zakra_toggle_button_upgrade'] = array(
		'type'        => 'customind-upsell',
		'description' => esc_html__( 'Unlock more features available in Pro version.', 'zakra' ),
		'title'       => esc_html__( 'Learn more', 'zakra' ),
		'url'         => esc_url( 'https://zakratheme.com/pricing/?utm_source=zakra-theme&utm_medium=customizer-option-name&utm_campaign=zakra-customizer+&utm_content=Learn+More' ),
		'section'     => 'zakra_header_builder_toggle_button',
		'priority'    => 100,
	);
}

zakra_customind()->add_controls( $options );
