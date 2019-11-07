<?php
if ( ! defined( 'ABSPATH' ) ) { status_header(404); die(); }

if ( ! defined( 'WPX__VERSION' ) ) {
	define( 'WPX__VERSION', '0.0.0-alpha6' );

	global $wpx;

	$wpx = array(
		// IDEA: 'cache' = array(
		// 	'locale'?
		// ),
		'state' => array(
			'locale' => NULL,
			'request' => array(
				'start' => microtime( TRUE ),
				'end' => NULL,
			),
		),
	);

	if ( defined( 'WP_DEBUG' ) && WP_DEBUG ) {
		add_action( 'shutdown', function () {
			global $wpx;
			$wpx['state']['request']['end'] = microtime( TRUE );
		}, 9998 );
	}
}
