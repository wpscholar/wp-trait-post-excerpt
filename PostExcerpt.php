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

		global $post;

		// Backup global post
		$save_post = $post;

		// Set global post
		$post = $this->post;

		// Fetch the excerpt
		$excerpt = get_the_excerpt( $this->post );

		// Restore original global post
		$post = $save_post;

		return $excerpt;
	}

}
