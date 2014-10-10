<?php

/**
 * Global Theme Definitions
 *	
 */

// Textdomain
if ( !defined( 'THEME_TEXTDOMAIN' ) ) {
	define( 'THEME_TEXTDOMAIN', 'sofiakarlsson' );
}


/**
 * Require the external utilities
 * 
 */

require_once( 'inc/tinymce.php' );



/**
 * Set up the theme specific filters/hooks
 * 
 */
 
if ( ! function_exists( 'sk_setup' ) ) {
    function sk_setup() {
        load_theme_textdomain( THEME_TEXTDOMAIN, get_template_directory() . '/languages' );
        add_editor_style();
        add_theme_support( 'post-thumbnails' );
        register_nav_menu( 'header', __( 'Header Menu', THEME_TEXTDOMAIN ) );        
    }
}
add_action( 'after_setup_theme', 'sk_setup' );


/**
 * WP Image Sizes
 * 
 */

if ( function_exists( 'add_image_size' ) ) { 
	add_image_size( 'image_gallery', 263, 263, true );
}


/*
 * Change "options" admin page name
 * 
 */

function sk_acf_options_page_settings( $settings ) {
    $settings['title'] = __('Sidinställningar', THEME_TEXTDOMAIN);
    $settings['pages'] = array(__('Sidinställningar', THEME_TEXTDOMAIN));
    $settings['capability'] = 'edit_posts';
    
    return $settings;
}
add_filter('acf/options_page/settings', 'sk_acf_options_page_settings');


/*
 * WPML LANG SWITCHER NAME
 * 
 */

function language_selector_names(){
    $languages = icl_get_languages('skip_missing=0');
    if(!empty($languages)){
    	echo '<ul class="lang-menu">';
        foreach($languages as $l){
        	//var_dump($languages);
        	if(!$l['active']) : 
        	echo '<li class="active">';
        	else : 
        	echo '<li>';
        	endif;
            if(!$l['active']) echo '<a href="'.$l['url'].'">';
            echo $l['native_name'];
            if(!$l['active']) echo '</a>';
            echo '</li>';
        }
        echo '</ul>';
    }
}




/**
 * Register and Enqueue scripts and css
 * 
 */
function sk_load_scripts_css(){    
    if ( !is_admin() ) {
    
    	$js_arr = array( 'compile' );
        wp_register_script( 'compile', get_template_directory_uri() . '/ui/scripts/compile.min.js', array( 'jquery'),'1.0', true);
        
        wp_register_script( 'site', get_template_directory_uri().'/ui/scripts/site.js', $js_arr, '1.0', true );
        wp_enqueue_script( 'site' );
        
        wp_register_script( 'fancybox', get_template_directory_uri().'/ui/scripts/fancybox/jquery.fancybox.js', $js_arr, '2.1.5', true );
        wp_enqueue_script( 'fancybox' );
        
        // CSS
        wp_register_style( 'bootstrap-theme', get_template_directory_uri() . '/ui/styles/bootstrap-theme.css' );
        wp_register_style( 'bootstrap', get_template_directory_uri() . '/ui/styles/bootstrap.css' );
        wp_register_style( 'fonts', get_template_directory_uri() . '/ui/styles/fonts.css' );
        wp_register_style( 'framework', get_template_directory_uri() . '/ui/styles/framework.css' );
        wp_register_style( 'fancybox', get_template_directory_uri() . '/ui/scripts/fancybox/jquery.fancybox.css' );
        wp_register_style( 'style', get_template_directory_uri() . '/style.css', array( 'bootstrap-theme', 'bootstrap', 'fonts', 'framework', 'fancybox') );
        
        wp_enqueue_style( 'style' );        
        
    }
}
add_action( 'wp_enqueue_scripts', 'sk_load_scripts_css' );

?>