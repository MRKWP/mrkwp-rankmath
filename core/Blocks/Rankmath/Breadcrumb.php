<?php
/**
 * Register block for Rankmath Breadcrumb into a Block.
 *
 * @package  MRKWP_Rankmath
 */

namespace MRKWP_Rankmath\Blocks\Rankmath;

use MRKWP_Rankmath\Base\BaseController;

/**
 * Handle all the block for Freemius logo required for the Product Page.
 */
class Breadcrumb extends BaseController {

	/**
	 * Register actions.
	 */
	public function register() {
		add_action( 'init', array( $this, 'create_blocks' ) );
	}

	/**
	 * Callback function to display rankmath breadcrumbs
	 *
	 * @param [type] $atts shortcode attributes.
	 * @param [type] $content the WP content object.
	 * @return mixed HTML content for breadcrcumbs returned.
	 */
	public function mrkwp_rankmath_breadcrumb( $atts, $content ) {
		$output = do_shortcode( '[rank_math_breadcrumb]' );
		if ( '' === $output ) {
			$output = '<p>No Breadcrumbs</p>';
		}
		return $output;
	}

	/**
	 * Register block function called by init hook.
	 *
	 * @param [type] $atts shortcode attributes.
	 * @return void
	 */
	public function create_blocks( $atts ) {

		register_block_type_from_metadata(
			$this->plugin_path . 'build/breadcrumb/',
			array(
				'render_callback' => array( $this, 'mrkwp_rankmath_breadcrumb' ),
			)
		);
	}
}
