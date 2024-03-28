<?php

// правильный способ подключить стили и скрипты темы
add_action('wp_enqueue_scripts', 'theme_add_scripts');
add_action('after_setup_theme', 'add_menu');

add_filter('use_block_editor_for_post_type', '__return_false', 10);

add_theme_support('custom-templates');


show_admin_bar(false);

function theme_add_scripts()
{


    // Подключаем файл baguetteBox.min.css
    wp_enqueue_style('baguetteBox', get_template_directory_uri() . '/css/baguetteBox.min.css');

    // Подключаем файл animate.css
    wp_enqueue_style('animate', get_template_directory_uri() . '/css/animate.css');

    // Подключаем файл main.css
    wp_enqueue_style('main', get_template_directory_uri() . '/css/main.css');

    // Подключаем файл main.css
    wp_enqueue_style('swiper', get_template_directory_uri() . '/css/swiper-bundle.min.css');
    

    // Подключаем js файл swiper-bundle.min.js
    wp_enqueue_script('swiper', get_template_directory_uri() . '/js/swiper-bundle.min.js', array(), null, true);

    // Подключаем js файл baguettebox.js
    wp_enqueue_script('baguettebox', get_template_directory_uri() . '/js/baguettebox.js', array(), null, true);

    // Подключаем js файл wow.js
    wp_enqueue_script('wow', get_template_directory_uri() . '/js/wow.js', array(), null, true);

    // Подключаем основной main.js файл
    wp_enqueue_script('main', get_template_directory_uri() . '/js/main.js', array(), null, true);
    

    // wp_enqueue_script( 'jquery' , 'https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js' );


    function my_scripts() {
        wp_enqueue_script( 'main', get_template_directory_uri() . '/js/main.js', array(), '1.0', true );
    }


    add_action( 'wp_enqueue_scripts', 'my_scripts' );

   
    
}

    // Добавляем поддержку шорткодов в текстовых виджетах
    add_filter('widget_text', 'do_shortcode');

    // Добавляем поддержку шорткодов в тексте записей и страниц
    add_filter('the_content', 'do_shortcode');
    add_filter('widget_text_content', 'do_shortcode');

    add_filter( 'redirect_canonical', 'my_redirect_canonical_filter', 10, 2 );

    /**
     * Function for <code>redirect_canonical</code> filter-hook.
     * 
     * @param string $redirect_url  The redirect URL.
     * @param string $requested_url The requested URL.
     *
     * @return string
     */
    function my_redirect_canonical_filter( $redirect_url, $requested_url ){

        if (str_ends_with($requested_url,"=")) {
        return false;
        }
        return $redirect_url;
    }




    function add_menu() {
        // register_nav_menu('top-left', 'левое меню шапки');
        // register_nav_menu('top-right', 'правое меню шапки');
        // register_nav_menu('menu-catalog', 'меню-каталога');
    }


    add_filter( 'wpc_theme_dependencies', 'my_theme_dependencies' );
function my_theme_dependencies( $theme_dependencies ){

    /* my_theme_folder_name - name of the directory of your current WordPress
    theme. All letters should be lowercase even if the theme directory
    has uppercase letters. If you use child theme, you should specify
    parent theme name */

    $theme_dependencies['my_theme_folder_name'] = array(
        // HTML selector of the container included posts. E.g. '#primary' or
        // '.main-wrapper .posts'
        'posts_container'   => '#primary',
        // Primary color of your theme. E.g. '#ff0000'
        'primary_color'     => '#cc0000',
        // Array with names of the do_action() hooks of your theme, where you want
        // to display button, that opens Filters widget E.g. 'before_main_content'
        'button_hook'       => array('generate_before_main_content'),
        // Array with names of the do_action() hooks of your theme, where you want
        // to display chips. E.g. 'before_posts_list' 
        // Don't forget to add Chips list on the 404 page.
        'chips_hook'        => array(
                                    'generate_before_posts_list', 
                                    'generate_no_posts_found'
                               )
    );

    return $theme_dependencies;
}

/**
 * Let's capitalize all terms for Product type 
 * and Product visibility
 */
add_filter('wpc_filter_taxonomy_term_name', 'wpc_modify_taxonomy_term_name', 10, 2 );
function wpc_modify_taxonomy_term_name($term_name, $e_name)
{
    if (in_array($e_name, array('product_type', 'product_visibility'))) {
        $term_name = ucfirst($term_name);
    }
    return $term_name;
}

/* Post meta term name */

?>