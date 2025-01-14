<?php
/**
 * Week query class.
 *
 * Called to build breadcrumbs on weekly archive pages.
 *
 * @package   HybridBreadcrumbs
 * @author    Justin Tadlock <justintadlock@gmail.com>
 * @copyright Copyright (c) 2018, Justin Tadlock
 * @link      https://github.com/justintadlock/hybrid-breadcrumbs
 * @license   http://www.gnu.org/licenses/old-licenses/gpl-2.0.html
 */

namespace Hybrid\Breadcrumbs\Query;

/**
 * Week query sub-class.
 *
 * @since  1.0.0
 * @access public
 */
class Week extends Base {

	/**
	 * Builds the breadcrumbs.
	 *
	 * @since  1.0.0
	 * @access public
	 * @return void
	 */
	public function make() {

		// Build network crumbs.
		$this->breadcrumbs->build( 'Network' );

		// Add site home crumb.
		$this->breadcrumbs->crumb( 'Home' );

		// Build rewrite front crumbs.
		$this->breadcrumbs->build( 'RewriteFront' );

		// Add the year and week crumbs.
		$this->breadcrumbs->crumb( 'Year' );
		$this->breadcrumbs->crumb( 'Week' );

		// Build paged crumbs.
		$this->breadcrumbs->build( 'Paged' );
	}
}
