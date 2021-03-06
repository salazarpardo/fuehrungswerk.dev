<?php

$generalTabFields = array(
	'info-start'                    => array(
		'type' => 'html',
		'html' => '<div id="modern-tribe-info"><img src="' . plugins_url( 'resources/images/modern-tribe@2x.png', dirname( __FILE__ ) ) . '" alt="Modern Tribe Inc." title="Modern Tribe Inc.">',
	),
	'event-tickets-info' => array(
		'type'        => 'html',
		'html'        => '<p>' . sprintf( esc_html__( 'Thank you for using Event Tickets! All of us at Modern Tribe sincerely appreciate your support and we\'re excited to see you using our plugins. Check out our handy %1$sNew User Primer%2$s to get started.', 'tribe-common' ), '<a href="http://m.tri.be/18nd">', '</a>' ) . '</p>',
		'conditional' => ! class_exists( 'Tribe__Events__Main' ),
	),
	'event-tickets-upsell-info' => array(
		'type'        => 'html',
		'html'        => '<p>' . sprintf( esc_html__( 'Optimize your site\'s event listings with %1$sThe Events Calendar%2$s, our free calendar plugin. Looking for additional functionality including recurring events, user-submission, advanced ticket sales and more? Check out our %3$spremium add-ons%4$s.', 'tribe-common' ), '<a href="http://m.tri.be/18x6">', '</a>', '<a href="http://m.tri.be/18x5">', '</a>' ) . '</p>',
		'conditional' => ! class_exists( 'Tribe__Events__Main' ),
	),
	'upsell-info'                   => array(
		'type'        => 'html',
		'html'        => '<p>' . esc_html__( 'Looking for additional functionality including recurring events, custom meta, community events, ticket sales and more?', 'tribe-common' ) . ' <a href="' . Tribe__Main::$tec_url . 'products/?utm_source=generaltab&utm_medium=plugin-tec&utm_campaign=in-app">' . esc_html__( 'Check out the available add-ons', 'tribe-common' ) . '</a>.</p>',
		'conditional' => ( ! defined( 'TRIBE_HIDE_UPSELL' ) || ! TRIBE_HIDE_UPSELL ) && class_exists( 'Tribe__Events__Main' ),
	),
	'donate-link-heading'           => array(
		'type'  => 'heading',
		'label' => esc_html__( 'We hope our plugin is helping you out.', 'tribe-common' ),
		'conditional' => class_exists( 'Tribe__Events__Main' ),
	),
	'donate-link-info'              => array(
		'type'        => 'html',
		'html'        => '<p>' . esc_html__( 'Are you thinking "Wow, this plugin is amazing! I should say thanks to Modern Tribe for all their hard work." The greatest thanks we could ask for is recognition. Add a small text-only link at the bottom of your calendar pointing to The Events Calendar project.', 'tribe-common' ) . '<br><a href="' . esc_url( plugins_url( 'resources/images/donate-link-screenshot.jpg', dirname( __FILE__ ) ) ) . '" class="thickbox">' . esc_html__( 'See an example of the link', 'tribe-common' ) . '</a>.</p>',
		'conditional' => ! class_exists( 'Tribe__Events__Pro__Main' ) && class_exists( 'Tribe__Events__Main' ),
	),
	'donate-link-pro-info'          => array(
		'type'        => 'html',
		'html'        => '<p>' . esc_html__( 'Are you thinking "Wow, this plugin is amazing! I should say thanks to Modern Tribe for all their hard work." The greatest thanks we could ask for is recognition. Add a small text only link at the bottom of your calendar pointing to The Events Calendar project.', 'tribe-common' ) . '<br><a href="' . esc_url( plugins_url( 'resources/images/donate-link-pro-screenshot.jpg', dirname( __FILE__ ) ) ) . '" class="thickbox">' . esc_html__( 'See an example of the link', 'tribe-common' ) . '</a>.</p>',
		'conditional' => class_exists( 'Tribe__Events__Pro__Main' ),
	),
	'donate-link'                   => array(
		'type'            => 'checkbox_bool',
		'label'           => esc_html__( 'Show The Events Calendar link', 'tribe-common' ),
		'default'         => false,
		'validation_type' => 'boolean',
		'conditional' => class_exists( 'Tribe__Events__Main' ),
	),
	'info-end'                      => array(
		'type' => 'html',
		'html' => '</div>',
	),
	'tribe-form-content-start'      => array(
		'type' => 'html',
		'html' => '<div class="tribe-settings-form-wrap">',
	),
	'tribeEventsDisplayThemeTitle'  => array(
		'type' => 'html',
		'html' => '<h3>' . esc_html__( 'General Settings', 'tribe-common' ) . '</h3>',
	),
	'defaultCurrencySymbol'         => array(
		'type'            => 'text',
		'label'           => esc_html__( 'Default currency symbol', 'tribe-common' ),
		'tooltip'         => esc_html__( 'Set the default currency symbol for event costs. Note that this only impacts future events, and changes made will not apply retroactively.', 'tribe-common' ),
		'validation_type' => 'textarea',
		'size'            => 'small',
		'default'         => '$',
	),
	'reverseCurrencyPosition'       => array(
		'type'            => 'checkbox_bool',
		'label'           => esc_html__( 'Currency symbol follows value', 'tribe-common' ),
		'tooltip'         => esc_html__( 'The currency symbol normally precedes the value. Enabling this option positions the symbol after the value.', 'tribe-common' ),
		'default'         => false,
		'validation_type' => 'boolean',
	),
	'tribeEventsMiscellaneousTitle' => array(
		'type' => 'html',
		'html' => '<h3>' . esc_html__( 'Miscellaneous Settings', 'tribe-common' ) . '</h3>',
	),
);

if ( is_super_admin() ) {
	$generalTabFields['debugEvents'] = array(
		'type'            => 'checkbox_bool',
		'label'           => esc_html__( 'Debug mode', 'tribe-common' ),
		'default'         => false,
		'validation_type' => 'boolean',
	);
	$generalTabFields['debugEventsHelper'] = array(
		'type'        => 'html',
		'html'        => '<p class="tribe-field-indent tribe-field-description description" style="max-width:400px;">' . sprintf( esc_html__( 'Enable this option to log debug information. By default this will log to your server PHP error log. If you\'d like to see the log messages in your browser, then we recommend that you install the %s and look for the "Tribe" tab in the debug output.', 'tribe-common' ), '<a href="http://wordpress.org/extend/plugins/debug-bar/" target="_blank">' . esc_html__( 'Debug Bar Plugin', 'tribe-common' ) . '</a>' ) . '</p>',
		'conditional' => ( '' != get_option( 'permalink_structure' ) ),
	);
}

// Closes form
$generalTabFields['tribe-form-content-end'] = array(
	'type' => 'html',
	'html' => '</div>',
);


$generalTab = array(
	'priority' => 10,
	'fields'   => apply_filters( 'tribe_general_settings_tab_fields', $generalTabFields ),
);

