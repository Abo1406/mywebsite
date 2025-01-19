<?php


/**
 * Define version to use it with JS and CSS files.
 */
if (!defined('BLOG_PACK_THEME_VERSION')) {

	define('BLOG_PACK_THEME_VERSION', wp_get_theme()->get('Version'));
}

if (!function_exists('block_pack_frontend_assets')) {
	/**
	 * Enqueue scripts and styles on the website frontend.
	 * 
	 * @return void
	 */
	function block_pack_frontend_assets()
	{

		/**
		 *  Frontend Styles.
		 * */
		wp_enqueue_style(
			'blog-pack-frontend-style',
			get_template_directory_uri() . '/assets/css/frontend.css',
			array(),
			BLOG_PACK_THEME_VERSION
		);

		/**
		 *  Frontend Scripts.
		 * */
		wp_enqueue_script(
			'blog-pack-frontend-script',
			get_template_directory_uri() . '/assets/js/frontend.js',
			array('jquery'),
			BLOG_PACK_THEME_VERSION,
			true
		);
	}
}
add_action('wp_enqueue_scripts', 'block_pack_frontend_assets');

if (!function_exists('block_pack_editor_assets')) {
	/**
	 * Enqueue scripts and styles for the website editor.
	 * 
	 * @return void
	 */
	function block_pack_editor_assets()
	{
		/**
		 * Check If it is admin part.
		 * */
		if (is_admin()) {
			/**
			 * Editor Styles.
			 * */
			wp_enqueue_style(
				'blog-pack-editor-style',
				get_stylesheet_directory_uri() . '/assets/css/editor.css',
				array(),
				BLOG_PACK_THEME_VERSION
			);
		}
	}
}
add_action('enqueue_block_assets', 'block_pack_editor_assets');

if (!function_exists('block_pack_editor_frontend_assets')) {
	/**
	 * Enqueue scripts and styles for the website editor and frontend.
	 * 
	 * @return void
	 */
	function block_pack_editor_frontend_assets()
	{
		/**
		 * Editor/Frontend Styles.
		 * */
		wp_enqueue_style(
			'blog-pack-editor-frontend-style',
			get_stylesheet_directory_uri() . '/assets/css/editor-frontend.css',
			array(),
			BLOG_PACK_THEME_VERSION
		);
	}
}
add_action('enqueue_block_assets', 'block_pack_editor_frontend_assets');

/**
 * Disable patterns.
 * */
add_action('after_setup_theme', function () {
	remove_theme_support('core-block-patterns');
});

add_filter('should_load_remote_block_patterns', '__return_false');

if (!function_exists('block_pack_register_pattern_categories')) {
	/**
	 * Register Block Pattern Categories.
	 * 
	 * @return void
	 */
	function block_pack_register_pattern_categories()
	{

		/**
		 * Register "homepage" Block Pattern Category.
		 */
		register_block_pattern_category(
			'homepage',
			array('label' => __('Home Pages', 'blog-pack'))
		);

		/**
		 * Register "aboutpage" Block Pattern Category.
		 */
		register_block_pattern_category(
			'aboutpage',
			array('label' => __('About Pages', 'blog-pack'))
		);

		/**
		 * Register "contactpage" Block Pattern Category.
		 */
		register_block_pattern_category(
			'contactpage',
			array('label' => __('Contact Pages', 'blog-pack'))
		);

		/**
		 * Register "blogcategory" Block Pattern Category.
		 */
		register_block_pattern_category(
			'blogpage',
			array('label' => __('Blog Pages', 'blog-pack'))
		);

		/**
		 * Register "contactpage" Block Pattern Category.
		 */
		register_block_pattern_category(
			'contactpage',
			array('label' => __('Contact Pages', 'blog-pack'))
		);

		/**
		 * Register "sectionsitem" Block Pattern Category.
		 */
		register_block_pattern_category(
			'sectionsitem',
			array('label' => __('Sections', 'blog-pack'))
		);
	}
}

add_action('init', 'block_pack_register_pattern_categories');

if (!function_exists('blogPackDebug')) {
	/**
	 * Debug anything. The result will be collected 
	 * in \wp-content\plugins\wpp-generator-v2/mx-debug/mx-debug.txt file
	 * 
	 * @param string $content   List of parameters (coma separated).
	 *
	 * @return void
	 */
	function blogPackDebug(...$content)
	{

		$content = blogPackContentToString(...$content);

		$dir = get_template_directory() . '/mx-debug';

		$file = $dir . '/mx-debug.txt';

		$dateLine = '>>>' . date('Y/m/d H:i:s', time()) . ':' . "\n";

		$current = "{$dateLine}{$content}\n_____________________________________\n";

		if (!file_exists($dir)) {

			mkdir($dir, 0777, true);
		} else {

			$current .= file_get_contents($file) . "\n";
		}

		file_put_contents($file, $current);
	}
}

if (!function_exists('blogPackContentToString')) {
	/**
	 * This function is a part of the
	 * blogPackDebug function.
	 * 
	 * @param string $content   List of parameters (coma separated).
	 *
	 * @return string
	 */
	function blogPackContentToString(...$content)
	{

		ob_start();

		var_dump(...$content);

		return ob_get_clean();
	}
}

if (!function_exists('blog_pack_exclude_current_post_from_query_loop')) {
	/**
	 * Exclude post from query loop on single page.
	 * 
	 * @return void
	 */
	function blog_pack_exclude_current_post_from_query_loop($query)
	{

		if (is_singular('post')) {
			$current_post_id = get_the_ID();

			if (!isset($query['post__not_in'])) {
				$query['post__not_in'] = array();
			}

			$query['post__not_in'][] = $current_post_id;
		}

		return $query;
	}
}
add_filter('query_loop_block_query_vars', 'blog_pack_exclude_current_post_from_query_loop', 10, 1);

// Enable export 'wpforms' post type
add_filter('wpforms_post_type_args', function($args) {

	if(isset($args['can_export'])) {

		$args['can_export'] = true;
	}

	return $args;
}, 20, 1);
