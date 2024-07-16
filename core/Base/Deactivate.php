<?php
/**
 * Deactivate Class.
 *
 * @package  MRKWP_Rankmath
 */

namespace MRKWP_Rankmath\Base;

/**
 * Deactivate Class
 */
class Deactivate {

	/**
	 * Static function for Deactivate.
	 *
	 * @return void
	 */
	public static function deactivate() {
		flush_rewrite_rules();
	}
}
