<?php

namespace wpscholar\WordPress\Traits;

/**
 * Class PostExcerpt
 *
 * @package wpscholar\WordPress\Traits
 *
 * @property \WP_Post $post
 */
trait PostExcerpt {

	/**
	 * Get the post excerpt.
	 *
	 * @return string
	 */
	public function postExcerpt() {
		return get_the_excerpt( $this->post );
	}

}
