<?php

// Image Sizes
add_image_size( 'hero-bg', 1400, 730, true );
add_image_size( 'hero-inner-img', 800, 400, true );
add_image_size( 'content-block-img', 540, 320, true );
add_image_size( 'hover-content-img', 1295, 730, true );
add_image_size( 'content-img-mosaic', 350, 235, true );

add_image_size( 'content-img-grid', 200, 200, true );
add_image_size( 'content-img-grid-2x', 400, 400, true );
add_image_size( 'content-img-slider', 725, 485, true );
add_image_size( 'content-img-slider-thumb', 175, 115, true );

add_image_size( 'blog-grid-img', 385, 215, true );
add_image_size( 'accordion-sec-bg', 1500, 1000, true );
add_image_size( 'blog-grid-img-v2', 350, 195, true );



function replace_core_jquery_version() {
    wp_deregister_script( 'jquery' );
    // Change the URL if you want to load a local copy of jQuery from your own server.
    wp_register_script( 'jquery', "https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js", array(), '3.5.1' );
}
//add_action( 'wp_enqueue_scripts', 'replace_core_jquery_version' );



function add_custom_scripts() {
 
  wp_enqueue_style( 'fancybox', get_template_directory_uri() . '/assets/css/vendor/jquery.fancybox.css', array(), '1.1', 'all');
  wp_enqueue_script( 'fancybox', get_template_directory_uri() . '/assets/js/jquery.fancybox.js', array ( 'jquery' ), 1.1, true);


}
add_action( 'wp_enqueue_scripts', 'add_custom_scripts' );




if ( ! file_exists( get_template_directory() . '/class-wp-bootstrap-navwalker.php' ) ) {
    // File does not exist... return an error.
    return new WP_Error( 'class-wp-bootstrap-navwalker-missing', __( 'It appears the class-wp-bootstrap-navwalker.php file may be missing.', 'wp-bootstrap-navwalker' ) );
} else {
    // File exists... require it.
    require_once get_template_directory() . '/class-wp-bootstrap-navwalker.php';
}

register_nav_menus( array(
    'primary' => __( 'Primary Menu', 'THEMENAME' ),
) );


// Custom Footer Menu
function custom_column_menu($theme_location) {

    if (($theme_location) && ($locations = get_nav_menu_locations()) && isset($locations[$theme_location])) {

        $menu = get_term($locations[$theme_location], 'nav_menu');
        $menu_items = wp_get_nav_menu_items($menu->term_id);

        $menu_list = '';

        $count = 0;
        $submenu = false;

        $has_featured = false;
        foreach ($menu_items as $menu_item) {
            //print_r ( $menu_item->url ); exit();
            $link = $menu_item->url;
            $title = $menu_item->title;

            $class_names = $value = '';

            $classes = empty($menu_item->classes) ? array() : (array) $menu_item->classes;

            $class_names = join(' ', apply_filters('nav_menu_css_class', array_filter($classes), $menu_item));

            if (!$menu_item->menu_item_parent) {
                $parent_id = $menu_item->ID;

                $menu_list .= '<div class="col-12 col-md-4 ' . $class_names . '">' . "\n";
                $menu_list .= '<h6>' . '<a href="' . $link . '">' . $title . '</a>' . '</h6>' . "\n";
            }

            if ($parent_id == $menu_item->menu_item_parent) {

                if (!$submenu) {
                    $submenu = true;
                    $menu_list .= '<ul class="secondary-menu">' . "\n";
                }

                $menu_list .= '<li class="menu-item ' . $class_names . '">' . "\n";
                $menu_list .= '<a href="' . $link . '">' . $title . '</a>' . "\n";
                $menu_list .= '</li>' . "\n";

                if ($menu_items[$count + 1]->menu_item_parent != $parent_id && $submenu) {
                    $menu_list .= '<br></ul>' . "\n";
                    $submenu = false;
                }
            }

            if ($menu_items[$count + 1]->menu_item_parent != $parent_id) {
                $menu_list .= '</div>' . "\n";
                $submenu = false;
            }

            $count++;
        }
    } else {
        $menu_list = '<!-- no menu defined in location "' . $theme_location . '" -->';
    }
    echo $menu_list;
}

// ACF group field checking if array keys have value
function acf_group_field_key_value_checking($arr){
    $arr_count = count($arr);
    $arr_key_values = false;

    foreach ($arr as $key => $value) {
        if(!empty($arr[$key])){
            $arr_key_values = true;
        }
    }

    return $arr_key_values;
}


/**
 * This function is for escaping strings
 * You can use it everywhere
 * Exmaple:
 * $phone = '+1 (758) 422-555-222';
 <a href="tel:<php echo am_esc($phone, 'phone'); ?>"><php echo $phone; ?></a>
 it will return <a href="tel:+1758422555222">+1 (758) 422-555-222</a>
 */
function am_esc($value, $esc){
    try {
        switch ($esc) :
            case 'url':
                $toReturn = esc_url($value);
                break;
            case 'attr':
                $toReturn = esc_attr($value);
                break;
            case 'html':
                $toReturn = esc_html($value);
                break;
            case 'email':
                // $hex_encoding = true
                $toReturn = antispambot($value, true);
                break;
            case 'email2':
                $toReturn = antispambot($value, false);
                break;
            case 'phone':
                $toReturn = str_replace(array('(', ')', ' ', '-', '.', ','), '', $value);
                break;
            case '':
                $toReturn = $value;
                break;
            default:
                throw new Exception();
                break;
        endswitch;
        return $toReturn;
    } catch (Exception $e) {
        $trace = $e->getTrace()[0];
        ob_clean();
        printf(
            __( "Invalid escaping type (%s) provided for am_esc() in %s on the line %s!", 'am' ),
            $esc,
            $trace['file'],
            $trace['line']
        );
        exit();
    }
}

// Hide Specific Fields from a paritcular edit page
function hide_specific_acf_fields_from_particular_page(){

    global $typenow;
    if ("page" == $typenow && $_GET['post'] == 84) :
    ?>

        <style>
            .acf-field-5f964fdd8d7b9, .acf-field-5f965d3cd797b, .acf-field-5f9661b9b326b {
                display: none !important;
            }
        </style>

    <?php

    endif;
}
add_action('admin_head', 'hide_specific_acf_fields_from_particular_page');
