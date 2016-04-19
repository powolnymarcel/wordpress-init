<?php
/*
 * functions.php
 *
 * Les fn du theme
 *
 */


/*
*
*1. CONSTANTES
*
*/
// Defini une constante THEMEROOT pour uri des css
define('THEMEROOT',get_stylesheet_directory_uri());
define('IMAGES',THEMEROOT.'/img');
define('JS',THEMEROOT.'/js');



/*
*
*2. Config du theme
*
*/

if (! function_exists('theme_setup')){
    function theme_setup()
    {
        $lang_dir= THEMEROOT.'/languages';
        load_theme_textdomain('wordpress-theme',$lang_dir);

        add_theme_support('automatic-feed-links');
        add_theme_support('post-thumbnails');

        register_nav_menus(array(
           'main-menu'=>__('Menu principal','wordpress-theme'),
        ));
    }

    add_action('after_setup_theme','theme_setup');
}