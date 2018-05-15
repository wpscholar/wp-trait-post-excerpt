<?php

namespace wpscholar\WordPress\Traits;

/**
 * Class PostExcerpt
 *
 * @package wpscholar\WordPress\Traits
 */
trait PostExcerpt {

	/**
	 * Get the post excerpt.
	 *
	 * @return string
	 */
	public function postExcerpt() {

		// Setup global post data
		setup_postdata( $this->post );

		// Fetch the excerpt
		$excerpt = get_the_excerpt( $this->post );

		// Restore original global post data
		wp_reset_postdata();

		return $excerpt;
	}

}
