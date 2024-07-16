<?php
/**
 * Register block for Rankmath Breadcrumb into a Block.
 *
 * @package  MRKWP_Rankmath
 */

namespace MRKWP_Rankmath\Filters;

use MRKWP_Rankmath\Base\BaseController;

/**
 * Handle all the block for Freemius logo required for the Product Page.
 */
class Breadcrumb extends BaseController {

	/**
	 * Register actions.
	 */
	public function register() {
		add_action( 'rank_math/frontend/breadcrumb/items', array( $this, 'create_crumb' ), 10, 2 );
	}

	/**
	 * Create the breacrumb for care plan plugins
	 *
	 * @param [type] $crumbs crumb attributes.
	 * @param [type] $class class attributes.
	 * @return $crumbs array shifted item.
	 */
	public function create_crumb( $crumbs, $class ) {

		if ( is_singular( 'cpplugins' ) || is_post_type_archive( 'cpplugins' ) ) {

			$blog_crumb[] = array(
				'0'              => 'Blog',
				'1'              => get_permalink( 25105 ),
				'hide_in_schema' => '',
			);

			array_splice( $crumbs, 1, -2, $blog_crumb );
		}
		if ( is_singular( 'features' ) || is_post_type_archive( 'features' ) ) {

			$blog_crumb[] = array(
				'0'              => 'Blog',
				'1'              => get_permalink( 25105 ),
				'hide_in_schema' => '',
			);

			array_unshift( $crumbs, $blog_crumb );
		}

		return $crumbs;
	}
}
