<?php

global $am_option;

if (!is_admin()){
	add_action( 'wp_enqueue_scripts', 'am_add_javascript' );
	add_action('wp_print_styles', 'am_add_css');
}

load_theme_textdomain( $am_option['textdomain'], get_template_directory() . '/languages' );

add_filter('body_class','am_browser_body_class');
add_filter('excerpt_more', 'am_excerpt_more');
add_action('widgets_init', 'am_the_widgets_init' );
add_action('widgets_init', 'am_unregister_default_wp_widgets', 1);
add_filter('the_title','am_has_title');
add_filter('the_content', 'am_texturize_shortcode_before' );
add_action( 'login_headerurl', 'am_login_logo_url' );
add_action( 'login_enqueue_scripts', 'am_login_logo' );
add_filter( 'comment_form_fields', 'am_move_comment_field_to_bottom' );
add_filter('upload_mimes', 'am_mime_types');
add_action('admin_head', 'am_svg_thumb_display');

// create demo user which can not install plugins and themes
add_action('init', 'am_demo_role');

//acf plugin
if( function_exists('acf_add_options_page') ) {
	
	acf_add_options_page(array(
		'page_title' 	=> 'Theme General Settings',
		'menu_title'	=> 'Theme Settings',
		'menu_slug' 	=> 'theme-general-settings',
		'capability'	=> 'edit_posts',
		'redirect'		=> false,
        'position' => 59
	));
	
	/*acf_add_options_sub_page(array(
		'page_title' 	=> 'Theme Socials Settings',
		'menu_title'	=> 'Socials',
		'parent_slug'	=> 'theme-general-settings',
	));*/
	
}

// This theme uses wp_nav_menu() in one location.
register_nav_menus( array(
	'mainmenu' => __( 'Main Navigation', 'am' ),
	'footermenu' => __( 'Footer Navigation', 'am' ),
	'privacy' => __( 'Privacy Links', 'am' ),
) );

// This theme styles the visual editor with editor-style.css to match the theme style.
add_editor_style();

// This theme uses post thumbnails
add_theme_support( 'post-thumbnails' );

add_theme_support( 'html5', array( 'comment-list', 'comment-form', 'search-form', 'gallery', 'caption' ) );

/*
 * Let WordPress manage the document title.
 * By adding theme support, we declare that this theme does not use a
 * hard-coded <title> tag in the document head, and expect WordPress to
 * provide it for us.
 */
add_theme_support('title-tag');

// Add default posts and comments RSS feed links to head
add_theme_support( 'automatic-feed-links' );

// Allow Shortcodes in Sidebar Widgets
add_filter('widget_text', 'do_shortcode');

//remove_filter( 'the_content', 'wpautop' );
//add_filter( 'the_content', 'wpautop' , 99);
//add_filter( 'the_content', 'shortcode_unautop',100 );

//add_image_size('thumb-270x378', 270, 378, true);
//show_admin_bar(false);
//define( 'WPCF7_AUTOP', false );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function am_content_width() {
    $GLOBALS['content_width'] = apply_filters('wfc_content_width', 960);
}

add_action('after_setup_theme', 'am_content_width', 0);

add_image_size( 'custom-lrg', 800, 240 );
add_image_size( 'custom-lrg-md', 520, 390,array( 'center', 'center') );
add_image_size( 'custom-md', 185, 138.5 ,array( 'center', 'center') );
add_image_size( 'custom-blog', 200, 150,array( 'center', 'center') );


function quick_jump_quicktags() {

  if ( wp_script_is( 'quicktags' ) ) { ?>

    <script type="text/javascript">

      QTags.addButton( 'h2_tag', 'h2 quick jump', '<h2><span id="XXXXXXXXXXXXXX" class="jump-anchor"></span>', '</h2>', '', '', 1 );

      QTags.addButton( 'ul_tag', 'Column List', '<ul class="list2">', '</ul>', '', '', 1 );
	  
	    QTags.addButton( 'ul_tag2', '2 Column List', '<ul class="columnList2">', '</ul>', '', '', 2 );
      QTags.addButton( 'ul_tag3', '3 Column List', '<ul class="columnList3">', '</ul>', '', '', 3 );
      QTags.addButton( 'ul_tag4', '4 Column List', '<ul class="columnList4">', '</ul>', '', '', 4 );

      QTags.addButton( 'h2_first', 'h2 First Element', '<h2 class="first-element">', '</h2>', '', '', 1 );

      QTags.addButton( 'p_first', 'p First Element', '<p class="first-element">', '</p>', '', '', 1 );
      QTags.addButton( 'div_location', 'Location Info', '<div class="location-info"><p>Location and contact information:</p>', '</div>', '', '', 1 );

      QTags.addButton( 'content_button_1', 'Content Btn 1', '<a class="btn btn-md btnContent" href="/url-here/">Button Text', '</a>', '', '', 1 );

    </script>

  <?php }
}
add_action( 'admin_print_footer_scripts', 'quick_jump_quicktags' );