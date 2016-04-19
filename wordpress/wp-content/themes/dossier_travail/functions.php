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
define('THEMEROOT', get_stylesheet_directory_uri());
define('IMAGES', THEMEROOT . '/img');
define('JS', THEMEROOT . '/js');


/*
*
*2. Config du theme
*
*/

if (!function_exists('theme_setup')) {
    function theme_setup()
    {
        $lang_dir = THEMEROOT . '/languages';
        load_theme_textdomain('wordpress-theme', $lang_dir);

        add_theme_support('automatic-feed-links');
        add_theme_support('post-thumbnails');

        register_nav_menus(array(
            'main-menu' => __('Menu principal', 'wordpress-theme'),
        ));
    }

    add_action('after_setup_theme', 'theme_setup');
}


/*
*
*3. Recuperer les info meta du post
*
*/
if (!function_exists('wordpress_init_meta'))
{
    function wordpress_init_meta()
    {
        if (get_post_type() == 'post')
        {
            echo '<p class="post-meta">        ';
            _e('De ','wordpress-init');
            printf('<a href="%1$s" rel="author">%2$s </a> ',esc_url(get_author_posts_url(get_the_author_meta('ID'))),get_the_author());
            _e('Le','wordpress-init');
            echo '<span>'.get_the_date().'</span>';
        }
    }

}


/*
*
*4. Recuperer les info meta du post
*
*/


if (!function_exists('wordpress_init_pagination_nombre'))
{
    function wordpress_init_pagination_nombre()
    {
        $args = array(
            'prev_next'=>false,
            'type'=>'array'
        );

        echo '<div class="col-md-12">';
        $pagination = paginate_links($args);
        if (is_array($pagination)){
            echo '<ul class="nav nav-pills">';
            foreach ($pagination as $page){
                if (strpos($page,'current')){
                    echo '<li class="active"><a href="#">'.$page. '</a></li>';
                }
                else{
                    echo '<li>'.$page.'</li>';
                }
            }
            echo '</ul>';
        }
        echo '</div>';

    }

}







