<?php
/**
 * Simple Activation Class.
 *
 * @package  MRKWP_Rankmath
 */

namespace MRKWP_Rankmath\Base;

/**
 * Activate Class.
 */
class Activate {
	/**
	 * Hooked for Activate inside Plugin.
	 *
	 * @return void
	 */
	public static function activate() {
		flush_rewrite_rules();
	}
}
