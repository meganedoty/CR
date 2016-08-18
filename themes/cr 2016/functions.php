<?php
function uicore_method() {
    wp_register_script( 'nav-hide', 'http://carlarozman.com/wp/wp-includes/js/jquery/ui/jquery.ui.core.min.js');
    wp_enqueue_script( 'nav-hide' );
}    
 
add_action('wp_enqueue_scripts', 'uicore_method');

function uiwidget_method() {
    wp_register_script( 'ui-core', 'http://carlarozman.com/wp/wp-includes/js/jquery/ui/jquery.ui.widget.min.js');
    wp_enqueue_script( 'ui-core' );
}    
 
add_action('wp_enqueue_scripts', 'uiwidget_method');

function navhide_method() {
    wp_register_script( 'ui-widget', 'http://carlarozman.com/wp/wp-content/themes/cr/js/nav-hide.js');
    wp_enqueue_script( 'ui-widget' );
}    
 
add_action('wp_enqueue_scripts', 'navhide_method');

function equalheights_method() {
    wp_register_script( 'equalheights', 'http://carlarozman.com/wp/wp-content/themes/cr/js/equalheights.js');
    wp_enqueue_script( 'equalheights' );
}    
 
add_action('wp_enqueue_scripts', 'equalheights_method');

function slideshow_method() {
    wp_register_script( 'slideshow', 'http://carlarozman.com/wp/wp-content/themes/cr/js/jquery.rf.slideshow.js');
    wp_enqueue_script( 'slideshow' );
}    
 
add_action('wp_enqueue_scripts', 'slideshow_method');

function slidenav_method() {
    wp_register_script( 'slidenav', 'http://carlarozman.com/wp/wp-content/themes/cr/js/jquery.rf.slideshownav.js');
    wp_enqueue_script( 'slidenav' );
}    
 
add_action('wp_enqueue_scripts', 'slidenav_method');




/*
function jqwaypoints_method() {
    wp_register_script( 'waypoints', 'http://carlarozman.com/wp/wp-content/themes/cr/js/waypoints.min.js');
    wp_enqueue_script( 'waypoints' );
}    
 
add_action('wp_enqueue_scripts', 'jqwaypoints_method');

function waypoints_method() {
    wp_register_script( 'cr-waypoints', 'http://carlarozman.com/wp/wp-content/themes/cr/js/waypoints.js');
    wp_enqueue_script( 'cr-waypoints' );
}    
 
add_action('wp_enqueue_scripts', 'waypoints_method');
*/

function load_cat_parent_template()
{
    global $wp_query;

    if (!$wp_query->is_category)
        return true; // saves a bit of nesting

    // get current category object
    $cat = $wp_query->get_queried_object();

    // trace back the parent hierarchy and locate a template
    while ($cat && !is_wp_error($cat)) {
        $template = STYLESHEETPATH . "/category-{$cat->slug}.php";

        if (file_exists($template)) {
            load_template($template);
            exit;
        }

        $cat = $cat->parent ? get_category($cat->parent) : false;
    }
}
add_action('template_redirect', 'load_cat_parent_template');

//add_filter('single_template', create_function('$t', 'foreach( (array) get_the_category() as $cat ) { if ( file_exists(STYLESHEETPATH . "/single-{$cat->term_id}.php") ) return STYLESHEETPATH . "/single-{$cat->term_id}.php"; } return $t;' ));


?>