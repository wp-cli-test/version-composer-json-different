<?php

if ( ! defined( 'WP_CLI' ) ) {
	return;
}

/**
 * Test retrieve correct version-dependent composer.json.
 *
 * @when before_wp_load
 */
$test_version_composer_json_different = function() {
	WP_CLI::success( 'Test version composer.json different version 1.0.0.' );
};
WP_CLI::add_command( 'test-version-composer-json-different', $test_version_composer_json_different );
