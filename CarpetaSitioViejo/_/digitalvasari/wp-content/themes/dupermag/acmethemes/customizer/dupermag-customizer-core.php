<?php
/**
 * Altering/Adding default theme options
 *
 * @since DuperMag 1.0.0
 *
 * @param null
 * @return array $supermag_theme_layout
 *
 */
if ( !function_exists('dupermag_added_default_theme_options') ) :
    function dupermag_added_default_theme_options( $supermag_default_theme_options ) {
        $supermag_default_theme_options['supermag-primary-color'] = '#289dcc';
        $supermag_default_theme_options['supermag-default-layout'] = 'fullwidth';
        $supermag_default_theme_options['supermag-header-main-banner-ads'] = get_stylesheet_directory_uri().'/assets/img/duper-banner-add.png';
        $supermag_default_theme_options['supermag-header-main-banner-ads-link'] = 'https://www.acmethemes.com/themes/dupermagpro';

        return $supermag_default_theme_options;
    }
endif;
add_filter( 'supermag_default_theme_options', 'dupermag_added_default_theme_options', 10, 1 );