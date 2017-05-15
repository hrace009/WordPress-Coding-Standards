<?php
/**
 * WordPress Coding Standard.
 *
 * @package WPCS\WordPressCodingStandards
 * @link    https://github.com/WordPress-Coding-Standards/WordPress-Coding-Standards
 * @license https://opensource.org/licenses/MIT MIT
 */

namespace WordPressCS\WordPress\Sniffs\VIP;

use WordPressCS\WordPress\AbstractFunctionRestrictionsSniff;

/**
 * Disallow the changing of timezone.
 *
 * @link    http://vip.wordpress.com/documentation/use-current_time-not-date_default_timezone_set/
 *
 * @package WPCS\WordPressCodingStandards
 *
 * @since   0.3.0
 * @since   0.11.0 Extends the \WordPressCS\WordPress\AbstractFunctionRestrictionsSniff instead
 *                 of the \PHP_CodeSniffer\Standards\Generic\Sniffs\PHP\ForbiddenFunctionsSniff.
 */
class TimezoneChangeSniff extends AbstractFunctionRestrictionsSniff {

	/**
	 * Groups of functions to restrict.
	 *
	 * Example: groups => array(
	 *  'lambda' => array(
	 *      'type'      => 'error' | 'warning',
	 *      'message'   => 'Use anonymous functions instead please!',
	 *      'functions' => array( 'file_get_contents', 'create_function' ),
	 *  )
	 * )
	 *
	 * @return array
	 */
	public function getGroups() {
		return array(
			'timezone_change' => array(
				'type'      => 'error',
				'message'   => 'Using %s() and similar isn\'t allowed, instead use WP internal timezone support.',
				'functions' => array(
					'date_default_timezone_set',
				),
			),
		);
	} // End getGroups().

} // End class.
